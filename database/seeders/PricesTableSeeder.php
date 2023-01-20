<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PricesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('prices')->delete();
        
        \DB::table('prices')->insert(array (
            0 => 
            array (
                'id' => 3,
                'price_category_id' => 1,
                'name' => 'Абонемент на месяц 8.00 — 22.00 + кроссфит зона',
                'price' => '530.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            1 => 
            array (
                'id' => 7,
                'price_category_id' => 1,
                'name' => 'Единоразовый абонемент',
                'price' => '100.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            2 => 
            array (
                'id' => 8,
                'price_category_id' => 2,
                'name' => 'Тренировка с тренером',
                'price' => '100.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            3 => 
            array (
                'id' => 20,
                'price_category_id' => 7,
                'name' => 'Одно занятие',
                'price' => '480.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            4 => 
            array (
                'id' => 21,
                'price_category_id' => 7,
            'name' => 'Абонемент на месяц (три занятия в неделю) Взрослые',
                'price' => '480.00',
                'month' => true,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            5 => 
            array (
                'id' => 22,
                'price_category_id' => 7,
            'name' => 'Абонемент на месяц (три занятия в неделю) Дети 6-15 лет',
                'price' => '480.00',
                'month' => true,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            6 => 
            array (
                'id' => 25,
                'price_category_id' => 8,
                'name' => 'Разовая тренировка',
                'price' => '150.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 14:01:32',
                'updated_at' => '2023-01-17 14:01:32',
            ),
            7 => 
            array (
                'id' => 24,
                'price_category_id' => 8,
                'name' => '12 ТРЕНИРОВОК В МЕСЯЦ',
                'price' => '750.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 14:01:11',
                'updated_at' => '2023-01-17 14:09:11',
            ),
            8 => 
            array (
                'id' => 23,
                'price_category_id' => 8,
                'name' => '8 ТРЕНИРОВОК В МЕСЯЦ',
                'price' => '620.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 14:00:55',
                'updated_at' => '2023-01-17 14:09:31',
            ),
            9 => 
            array (
                'id' => 1,
                'price_category_id' => 1,
                'name' => 'Абонемент на месяц 8.00 — 17.00',
                'price' => '450.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 14:35:13',
            ),
            10 => 
            array (
                'id' => 2,
                'price_category_id' => 1,
                'name' => 'Абонемент на месяц 8.00 — 22.00',
                'price' => '599.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 14:35:34',
            ),
            11 => 
            array (
                'id' => 4,
                'price_category_id' => 1,
                'name' => 'Абонемент на 3 месяца',
                'price' => '1499.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 14:36:32',
            ),
            12 => 
            array (
                'id' => 5,
                'price_category_id' => 1,
                'name' => 'Абонемент на 6 месяцев',
                'price' => '2599.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 14:37:03',
            ),
            13 => 
            array (
                'id' => 6,
                'price_category_id' => 1,
                'name' => 'Годовой абонемент',
                'price' => '3999.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 14:37:24',
            ),
            14 => 
            array (
                'id' => 26,
                'price_category_id' => 1,
                'name' => 'Абонемент 55+ 8.00 — 17.00',
                'price' => '330.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 14:40:15',
                'updated_at' => '2023-01-17 14:40:15',
            ),
            15 => 
            array (
                'id' => 9,
                'price_category_id' => 3,
                'name' => 'Абонемент на месяц 8.00 — 17.00',
                'price' => '380.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 14:41:05',
            ),
            16 => 
            array (
                'id' => 11,
                'price_category_id' => 4,
                'name' => 'Безлимитный абонемент в тренажерный зал + тренер',
                'price' => '1699.00',
                'month' => false,
                'comment' => '12 тренировок с тренером Заморозка до 7 дней',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 14:42:03',
            ),
            17 => 
            array (
                'id' => 12,
                'price_category_id' => 5,
            'name' => 'Абонемент на месяц (2 человека) 8.00 — 17.00',
                'price' => '800.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 14:43:52',
            ),
            18 => 
            array (
                'id' => 13,
                'price_category_id' => 5,
            'name' => 'Абонемент на месяц (2 человека) 8.00 — 22.00',
                'price' => '1100.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 14:44:43',
            ),
            19 => 
            array (
                'id' => 14,
                'price_category_id' => 5,
            'name' => 'Абонемент на месяц (3 человека) 8.00 — 17.00',
                'price' => '1200.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 14:45:54',
            ),
            20 => 
            array (
                'id' => 15,
                'price_category_id' => 5,
            'name' => 'Абонемент на месяц (3 человека) 8.00 — 22.00',
                'price' => '1650.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 14:46:19',
            ),
            21 => 
            array (
                'id' => 19,
                'price_category_id' => 6,
                'name' => 'Разовая тренировка',
                'price' => '100.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 14:47:06',
            ),
            22 => 
            array (
                'id' => 18,
                'price_category_id' => 6,
                'name' => 'Групповые + безлимит в зал',
                'price' => '750.00',
                'month' => true,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 14:48:27',
            ),
            23 => 
            array (
                'id' => 17,
                'price_category_id' => 6,
                'name' => '12 тренировок в месяц',
                'price' => '600.00',
                'month' => true,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 14:48:57',
            ),
            24 => 
            array (
                'id' => 16,
                'price_category_id' => 6,
                'name' => '8 тренировок в месяц',
                'price' => '550.00',
                'month' => true,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 14:49:15',
            ),
            25 => 
            array (
                'id' => 10,
                'price_category_id' => 4,
                'name' => 'Безлимитный абонемент в тренажерный зал + тренер',
                'price' => '1499.00',
                'month' => false,
                'comment' => '8 тренировок с тренером Заморозка до 7 дней',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-18 13:45:37',
            ),
            26 => 
            array (
                'id' => 27,
                'price_category_id' => 9,
                'name' => '8 тренировок в месяц',
                'price' => '650.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-18 14:12:09',
                'updated_at' => '2023-01-18 14:12:09',
            ),
            27 => 
            array (
                'id' => 28,
                'price_category_id' => 9,
                'name' => '12 тренировок в месяц',
                'price' => '700.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-18 14:12:34',
                'updated_at' => '2023-01-18 14:12:34',
            ),
            28 => 
            array (
                'id' => 29,
                'price_category_id' => 9,
                'name' => 'Групповые + зал',
                'price' => '800.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-18 14:12:52',
                'updated_at' => '2023-01-18 14:12:52',
            ),
            29 => 
            array (
                'id' => 30,
                'price_category_id' => 9,
                'name' => 'Абонемент «Свободный» 12 тренировок/месяц',
                'price' => '800.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-18 14:12:56',
                'updated_at' => '2023-01-18 14:12:56',
            ),
            30 => 
            array (
                'id' => 31,
                'price_category_id' => 9,
                'name' => 'Абонемент «Свободный» + зал',
                'price' => '850.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-18 14:13:07',
                'updated_at' => '2023-01-18 14:13:07',
            ),
            31 => 
            array (
                'id' => 32,
                'price_category_id' => 9,
                'name' => 'Разовая тренировка',
                'price' => '130.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-18 14:13:17',
                'updated_at' => '2023-01-18 14:13:17',
            ),
            32 => 
            array (
                'id' => 33,
                'price_category_id' => 9,
            'name' => 'Приостановка абонемента (2 недели)',
                'price' => '100.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-18 14:13:26',
                'updated_at' => '2023-01-18 14:13:26',
            ),
            33 => 
            array (
                'id' => 34,
                'price_category_id' => 10,
                'name' => '8 тренировок в месяц',
                'price' => '650.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-19 10:19:20',
                'updated_at' => '2023-01-19 10:19:20',
            ),
            34 => 
            array (
                'id' => 35,
                'price_category_id' => 10,
                'name' => '12 тренировок в месяц',
                'price' => '699.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-19 10:19:31',
                'updated_at' => '2023-01-19 10:19:31',
            ),
            35 => 
            array (
                'id' => 36,
                'price_category_id' => 10,
                'name' => 'Групповые + безлимит в зал',
                'price' => '800.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-19 10:19:44',
                'updated_at' => '2023-01-19 10:19:44',
            ),
            36 => 
            array (
                'id' => 37,
                'price_category_id' => 10,
                'name' => 'Свободный фитнес + безлимит в зал',
                'price' => '850.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-19 10:19:53',
                'updated_at' => '2023-01-19 10:19:53',
            ),
            37 => 
            array (
                'id' => 38,
                'price_category_id' => 10,
                'name' => 'Разовая тренировка',
                'price' => '130.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-19 10:20:04',
                'updated_at' => '2023-01-19 10:20:04',
            ),
            38 => 
            array (
                'id' => 39,
                'price_category_id' => 12,
                'name' => '8 тренировок в месяц',
                'price' => '550.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-19 12:12:08',
                'updated_at' => '2023-01-19 12:12:08',
            ),
            39 => 
            array (
                'id' => 40,
                'price_category_id' => 12,
                'name' => 'Разовая тренировка',
                'price' => '110.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-19 12:12:21',
                'updated_at' => '2023-01-19 12:12:21',
            ),
            40 => 
            array (
                'id' => 41,
                'price_category_id' => 11,
                'name' => '12 + безлимит в тренажерный зал',
                'price' => '699.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-19 12:12:40',
                'updated_at' => '2023-01-19 12:12:40',
            ),
            41 => 
            array (
                'id' => 42,
                'price_category_id' => 11,
                'name' => 'Разовая тренировка',
                'price' => '100.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-19 12:12:50',
                'updated_at' => '2023-01-19 12:12:50',
            ),
            42 => 
            array (
                'id' => 43,
                'price_category_id' => 13,
                'name' => '8 тренировок в месяц',
                'price' => '550.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-20 07:52:00',
                'updated_at' => '2023-01-20 07:52:00',
            ),
            43 => 
            array (
                'id' => 44,
                'price_category_id' => 13,
                'name' => '12 тренировок в месяц',
                'price' => '600.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-20 07:52:10',
                'updated_at' => '2023-01-20 07:52:10',
            ),
            44 => 
            array (
                'id' => 45,
                'price_category_id' => 13,
                'name' => 'Групповые + безлимит в зал',
                'price' => '699.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-20 07:52:21',
                'updated_at' => '2023-01-20 07:52:21',
            ),
            45 => 
            array (
                'id' => 46,
                'price_category_id' => 13,
                'name' => 'Разовая тренировка',
                'price' => '100.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-20 07:52:30',
                'updated_at' => '2023-01-20 07:52:30',
            ),
            46 => 
            array (
                'id' => 47,
                'price_category_id' => 14,
                'name' => '30',
                'price' => '50.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-20 09:47:50',
                'updated_at' => '2023-01-20 09:47:50',
            ),
            47 => 
            array (
                'id' => 48,
                'price_category_id' => 14,
                'name' => '60',
                'price' => '100.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-20 09:47:58',
                'updated_at' => '2023-01-20 09:47:58',
            ),
            48 => 
            array (
                'id' => 49,
                'price_category_id' => 15,
                'name' => 'Одно занятие',
                'price' => '130.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-20 09:48:42',
                'updated_at' => '2023-01-20 09:48:42',
            ),
            49 => 
            array (
                'id' => 50,
                'price_category_id' => 15,
            'name' => 'Абонемент на месяц (три занятия в неделю) Взрослые',
                'price' => '600.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-20 09:48:52',
                'updated_at' => '2023-01-20 09:48:52',
            ),
            50 => 
            array (
                'id' => 51,
                'price_category_id' => 15,
            'name' => 'Абонемент на месяц (три занятия в неделю)+ тренажерный зал',
                'price' => '700.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-20 09:49:12',
                'updated_at' => '2023-01-20 09:49:12',
            ),
            51 => 
            array (
                'id' => 52,
                'price_category_id' => 16,
                'name' => '8 тренировок в месяц',
                'price' => '580.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-20 09:50:12',
                'updated_at' => '2023-01-20 09:50:12',
            ),
            52 => 
            array (
                'id' => 53,
                'price_category_id' => 16,
                'name' => '12 тренировок в месяц',
                'price' => '630.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-20 09:50:20',
                'updated_at' => '2023-01-20 09:50:20',
            ),
            53 => 
            array (
                'id' => 54,
                'price_category_id' => 16,
                'name' => 'Групповые 12 тренировок + безлимит в зал',
                'price' => '750.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-20 09:50:31',
                'updated_at' => '2023-01-20 09:50:31',
            ),
            54 => 
            array (
                'id' => 55,
                'price_category_id' => 16,
                'name' => 'Разовая тренировка',
                'price' => '130.00',
                'month' => false,
                'comment' => NULL,
                'created_at' => '2023-01-20 09:50:40',
                'updated_at' => '2023-01-20 09:50:40',
            ),
        ));
        
        
    }
}