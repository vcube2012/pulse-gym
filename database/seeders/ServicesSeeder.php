<?php

namespace Database\Seeders;

use App\Models\Club;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    public function run()
    {
        $data =[
            'Тренажерный зал' ,
            'Фитнес-микс',
            'Йога',
            'Фитнес',
            'Джиу-Джитсу',
            'Танцевальная аэробика',
            'Пилатес',
            'Грепплинг',
        ];
        foreach ($data as $item) {
            $d = Service::create(['name'=> $item]);
            $d->clubs()->sync(Club::all()->value('id'));
        }
    }
}
