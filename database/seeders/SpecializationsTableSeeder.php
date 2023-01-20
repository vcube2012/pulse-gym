<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpecializationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('specializations')->delete();
        
        \DB::table('specializations')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'набор мышечной массы, снижение веса, коррекция фигуры, восстановление после травм',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'консультации по правильному и спортивному питанию',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'развитие основных фитнес навыков: выносливость, ловкость, гибкость, сила',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'подготовка к соревновательной форме для участия в фитнес-бикини',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'онлайн ведение',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'индивидуальный подход к каждому клиенту',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'силовые тренировки',
                'created_at' => '2023-01-17 10:24:27',
                'updated_at' => '2023-01-17 10:25:28',
            ),
            7 => 
            array (
                'id' => 11,
                'name' => 'кардио тренировки',
                'created_at' => '2023-01-17 10:26:25',
                'updated_at' => '2023-01-17 10:26:25',
            ),
            8 => 
            array (
                'id' => 12,
                'name' => 'функциональный тренинг',
                'created_at' => '2023-01-17 10:26:37',
                'updated_at' => '2023-01-17 10:26:37',
            ),
            9 => 
            array (
                'id' => 13,
                'name' => 'консультации по питанию и спортивным добавкам',
                'created_at' => '2023-01-17 10:27:01',
                'updated_at' => '2023-01-17 10:27:01',
            ),
            10 => 
            array (
                'id' => 14,
            'name' => 'составление плана питания исходя из ваших целей (набор/снижение веса)',
                'created_at' => '2023-01-17 10:27:54',
                'updated_at' => '2023-01-17 10:27:54',
            ),
            11 => 
            array (
                'id' => 3,
                'name' => 'составление программы тренировок',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 10:28:19',
            ),
            12 => 
            array (
                'id' => 15,
                'name' => 'персональный тренинг',
                'created_at' => '2023-01-17 10:29:28',
                'updated_at' => '2023-01-17 10:29:28',
            ),
            13 => 
            array (
                'id' => 16,
                'name' => 'Консультации по правильному и спортивному питанию',
                'created_at' => '2023-01-17 13:37:43',
                'updated_at' => '2023-01-17 13:37:43',
            ),
            14 => 
            array (
                'id' => 17,
                'name' => 'Подготовка к соревнованиям',
                'created_at' => '2023-01-17 13:37:59',
                'updated_at' => '2023-01-17 13:37:59',
            ),
        ));
        
        
    }
}