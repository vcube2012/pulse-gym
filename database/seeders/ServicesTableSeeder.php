<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Тренажерный зал',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Фитнес-микс',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Йога',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Фитнес',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Джиу-Джитсу',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Танцевальная аэробика',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Пилатес',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Грепплинг',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Спорт бар',
                'created_at' => '2023-01-17 11:02:47',
                'updated_at' => '2023-01-17 11:02:47',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Массаж',
                'created_at' => '2023-01-17 11:02:56',
                'updated_at' => '2023-01-17 11:02:56',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Crossfit',
                'created_at' => '2023-01-17 13:56:00',
                'updated_at' => '2023-01-17 13:56:00',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'TRX',
                'created_at' => '2023-01-17 13:56:09',
                'updated_at' => '2023-01-17 13:56:09',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Зумба',
                'created_at' => '2023-01-17 13:56:27',
                'updated_at' => '2023-01-17 13:56:27',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Стретчинг',
                'created_at' => '2023-01-17 13:56:41',
                'updated_at' => '2023-01-17 13:56:41',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'STRETCHING+PILATES',
                'created_at' => '2023-01-18 12:57:04',
                'updated_at' => '2023-01-18 12:57:04',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Детские группы',
                'created_at' => '2023-01-18 14:08:10',
                'updated_at' => '2023-01-18 14:08:10',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Цигун',
                'created_at' => '2023-01-19 11:18:53',
                'updated_at' => '2023-01-19 11:18:53',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Functional training',
                'created_at' => '2023-01-19 11:29:50',
                'updated_at' => '2023-01-19 11:29:50',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Черлидинг',
                'created_at' => '2023-01-19 12:35:40',
                'updated_at' => '2023-01-19 12:35:40',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Детский фитнес',
                'created_at' => '2023-01-19 13:19:05',
                'updated_at' => '2023-01-19 13:19:05',
            ),
            20 => 
            array (
                'id' => 21,
            'name' => 'Карате (дети)',
                'created_at' => '2023-01-19 13:19:15',
                'updated_at' => '2023-01-19 13:19:15',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Dance Mix',
                'created_at' => '2023-01-19 13:29:05',
                'updated_at' => '2023-01-19 13:29:05',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Dance studio “Beneton”',
                'created_at' => '2023-01-19 13:29:12',
                'updated_at' => '2023-01-19 13:29:12',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Танцевально двигательная терапия',
                'created_at' => '2023-01-19 13:29:19',
                'updated_at' => '2023-01-19 13:29:19',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Хип Хоп',
                'created_at' => '2023-01-19 13:30:19',
                'updated_at' => '2023-01-19 13:30:19',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Армрестлинг',
                'created_at' => '2023-01-19 14:01:07',
                'updated_at' => '2023-01-19 14:01:07',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Port de Bras',
                'created_at' => '2023-01-19 14:38:27',
                'updated_at' => '2023-01-19 14:38:27',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Slow Fitness',
                'created_at' => '2023-01-19 14:38:40',
                'updated_at' => '2023-01-19 14:38:40',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Mix Step',
                'created_at' => '2023-01-19 14:38:55',
                'updated_at' => '2023-01-19 14:38:55',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Karate',
                'created_at' => '2023-01-19 14:39:05',
                'updated_at' => '2023-01-19 14:39:05',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Workout для детей и подростков',
                'created_at' => '2023-01-20 07:49:36',
                'updated_at' => '2023-01-20 07:49:36',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Тайский бокс',
                'created_at' => '2023-01-20 07:49:44',
                'updated_at' => '2023-01-20 07:49:44',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Stretching and Calisthenics',
                'created_at' => '2023-01-20 07:49:52',
                'updated_at' => '2023-01-20 07:49:52',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Джиу джитсу',
                'created_at' => '2023-01-20 09:46:29',
                'updated_at' => '2023-01-20 09:46:29',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Бокс',
                'created_at' => '2023-01-20 09:46:52',
                'updated_at' => '2023-01-20 09:46:52',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Dance Fitness',
                'created_at' => '2023-01-20 09:47:00',
                'updated_at' => '2023-01-20 09:47:00',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Фитнес йога',
                'created_at' => '2023-01-20 09:47:08',
                'updated_at' => '2023-01-20 09:47:08',
            ),
        ));
        
        
    }
}