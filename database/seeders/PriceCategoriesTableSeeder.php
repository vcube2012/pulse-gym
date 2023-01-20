<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PriceCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('price_categories')->delete();
        
        \DB::table('price_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Тренажерный зал',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => '* Цена действительна при предъявлении Школьного билета. Неделя заморозки.',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Разовые услуги',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Специальная цена для школьников *',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => '* Цена действительна при предъявлении Школьного билета. Неделя заморозки.',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Абонемент с тренером',
                'color' => '#3F4294',
                'new' => false,
                'actia' => true,
                'comment' => NULL,
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            4 => 
            array (
                'id' => 5,
            'name' => 'Семейный абонемент в тренажерный зал (1 или 2 взрослых + ребенок)',
                'color' => '#3F4294',
                'new' => false,
                'actia' => true,
                'comment' => '*  Цена действительна при предъявлении паспорта и свидетельства о рождении.',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            5 => 
            array (
                'id' => 7,
            'name' => 'Джиу-Джитсу, Грепплинг, MMA (дети 6-15 лет)',
                'color' => '#3F4294',
                'new' => false,
                'actia' => true,
                'comment' => '*  Абонементы на групповые занятия не замораживаются',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 08:24:22',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'TRX',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => 'При оформлении абонемента за 750 грн. — абонемент в тренажерный зал в подарок!',
                'created_at' => '2023-01-17 13:58:35',
                'updated_at' => '2023-01-17 13:58:35',
            ),
            7 => 
            array (
                'id' => 6,
                'name' => 'Фитнес, пилатес',
                'color' => '#3F4294',
                'new' => false,
                'actia' => true,
                'comment' => '*  Абонементы на групповые занятия не замораживаются',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-17 14:48:41',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Групповые тренировки',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => 'Абонементы на групповые занятия не замораживаются',
                'created_at' => '2023-01-18 14:09:49',
                'updated_at' => '2023-01-18 14:14:44',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Фитнес-микс, стретчинг',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => 'Абонементы на групповые занятия не замораживаются',
                'created_at' => '2023-01-19 10:18:51',
                'updated_at' => '2023-01-19 10:18:51',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Функциональный тренинг',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => 'Платная заморозка 14 календарных дней — 90 грн.',
                'created_at' => '2023-01-19 12:11:26',
                'updated_at' => '2023-01-19 12:11:26',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Йога — тренировка 90 мин',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => 'Платная заморозка 14 календарных дней — 90 грн.',
                'created_at' => '2023-01-19 12:11:47',
                'updated_at' => '2023-01-19 12:11:47',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Фитнес, пилатес, стретчинг, тайский бокс, черлидинг',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => 'Абонементы на групповые занятия не замораживаются',
                'created_at' => '2023-01-20 07:51:38',
                'updated_at' => '2023-01-20 07:51:38',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Тенис',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => NULL,
                'created_at' => '2023-01-20 09:47:39',
                'updated_at' => '2023-01-20 09:47:39',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Джиу-Джитсу, Грепплинг, MMA',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => 'Абонементы на групповые занятия не замораживаются',
                'created_at' => '2023-01-20 09:48:28',
                'updated_at' => '2023-01-20 09:48:28',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Фитнес, пилатес, ЛФК, фитнес-микс',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => NULL,
                'created_at' => '2023-01-20 09:49:53',
                'updated_at' => '2023-01-20 09:49:53',
            ),
        ));
        
        
    }
}