<?php

namespace Database\Seeders;

use App\Models\Coach;
use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'персональный, кардио, силовой и функциональный тренинг',
            'набор мышечной массы, снижение веса, коррекция фигуры, восстановление после травм',
            'составление индивидуальных программ тренировок',
            'консультации по правильному и спортивному питанию',
            'развитие основных фитнес навыков: выносливость, ловкость, гибкость, сила',
            'подготовка к соревновательной форме для участия в фитнес-бикини',
            'онлайн ведение',
            'индивидуальный подход к каждому клиенту',
            'помогу Вам достичь поставленной цели',
        ];
        foreach ($data as $datum) {
            Specialization::create(['name' => $datum]);
        }

        foreach (Coach::all() as $item) {
            $item->specialization()->sync($item);
        }

    }
}
