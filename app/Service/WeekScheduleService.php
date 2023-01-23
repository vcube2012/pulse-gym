<?php

namespace App\Service;

class WeekScheduleService
{

    protected $week;

    protected $day;

    public function __construct()
    {
        $this->day=[
            'name' => '',
            'from' => '',
            'day' => 0,
            'recruiting' => false,
        ];
        $this->week = [
            [
                'name' => 'TRX',
                'from' => '',
                'day' => 0,
                'recruiting' => false,
            ],
            [
                'name' => 'TRX',
                'from' => '',
                'day' => 1,
                'recruiting' => false,
            ],
            [
                'name' => 'TRX',
                'from' => '',
                'day' => 2,
                'recruiting' => false,
            ],
            [
                'name' => 'TRX',
                'from' => '',
                'day' => 3,
                'recruiting' => false,
            ],
            [
                'name' => 'TRX',
                'from' => '',
                'day' => 4,
                'recruiting' => false,
            ],
            [
                'name' => 'TRX',
                'from' => '',
                'day' => 5,
                'recruiting' => false,
            ],

        ];
    }

    public function uniqServices($schedules)
    {
        $uniqService = [];
        foreach ($schedules as $item) {
            if (!in_array($item->service->name, $uniqService))
                $uniqService[] = $item->service->name;
        }
        return $uniqService;
    }

    public function getSchedule($schedules)
    {

        $schedules_new = [];
        foreach ($this->uniqServices($schedules) as $name) {
            $week = $this->week;
            $week = array_map(function ($item) use ($name) {
                $item['name'] = $name;
                return $item;
            }, $week);
            foreach ($schedules as $schedule) {
                if (strcmp($schedule->service->name, $name) == 0) {
                    $week[$schedule->day]['from'] = $schedule->from;
                    $week[$schedule->day]['name'] = $schedule->service->name;
                    $week[$schedule->day]['recruiting'] = $schedule->recruiting;
                }
            }
            $schedules_new = array_merge($schedules_new, $week);
        }

        foreach ($schedules as $schedule) {
            $day=$this->day;
            $day['name']=$schedule->service->name;
            $day['day']=$schedule->day;
            $day['from']=$schedule->from;
            $day['recruiting']=$schedule->recruiting;
            if(!in_array($day,$schedules_new ))
            {
                $schedules_new[]=$day;
            }
        }
        return $schedules_new;
    }
}
