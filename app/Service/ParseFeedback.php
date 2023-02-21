<?php

namespace App\Service;

use App\Models\Club;
use App\Models\Feedback;
use DOMDocument;
use DOMXPath;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ParseFeedback
{
    public $clubs;
    public function __construct()
    {
        $this->clubs=Club::select(['id','name','address'])->get();
    }

    public function run($elements)
    {
        $feedback = [
            'name' => '',
            'club' => '',
            'coment' => '',
            'time' => '',
            'answer'=>'',
        ];
        foreach ($elements as $e) {
            foreach ($e->childNodes as $node) {
                foreach ($node->childNodes as $item) {

                    if (strcmp($item->nodeName, 'p') == 0) {
                        $feedback['name'] = $item->nodeValue;
                    }
                    if (strcmp($item->nodeName, 'a') == 0) {
                        $feedback['club'] = $item->nodeValue;
                    }
                    if (strcmp($item->nodeName, 'blockquote') == 0) {
                        $feedback['coment'] = $item->nodeValue;
                    }
                    if (strcmp($item->nodeName, 'time') == 0) {
                        $feedback['time'] = $item->nodeValue;
                    }
                    if (strcmp($item->nodeName, 'div') == 0) {
                        $feedback['answer'] = $item->nodeValue;
                    }
                }
                $this->save($feedback);
            }
        }
    }

    public function save($feedback)
    {
        if($this->getId($feedback['club'])!=null) {
            Feedback::create([
                'name' => $feedback['name'],
                'club_id' => $this->getId($feedback['club']),
                'feedback' => $feedback['coment'],
                'answer' => Str::after($feedback['answer'],'Адміністрація Pulse Gym'),
                'active'=>true,
                'created_at' => \Date::parse($feedback['time'])->format('d-m-Y'),
            ]);

        }

    }

    public function getId(string $club)
    {
        if (Str::contains($club, 'Pulse Gym')) {
            foreach ($this->clubs as $el)
            {
                if(strcmp(Str::lower($el->getTranslation('name','ru')),Str::lower($club))==0)
                {
                    return $el->id;
                }
            }
        } else if (strlen($club) != 0) {
            foreach ($this->clubs as $el)
            {
                if(Str::contains(Str::lower($el->getTranslation('address','ru')),Str::lower(Str::before($club,' ('))))
                {
                    return $el->id;
                }
            }
        }
    }

    public function make()
    {
        $url = 'https://pulse-gym.com.ua/reviews/page/';
        for ($i = 1; $i <= 12; $i++) {
            $respouns = Http::get($url . $i);
            $Dom = new DOMDocument();
            libxml_use_internal_errors(true);
            $Dom->loadHTML($respouns->body());
            libxml_use_internal_errors(false);
            $domxpath = new DOMXPath($Dom);
            $elements = $domxpath->query('//li[contains(@class,"page-reviews__item")]');
            $this->run($elements);
        }
        dd(0);
    }
}
