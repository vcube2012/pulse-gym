<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PromosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('promos')->delete();
        
        \DB::table('promos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'PULSE GYM',
                'sub_title' => 'ДОБРО ПОЖАЛОВАТЬ В',
                'mobile_title' => 'ГЛАВНАЯ ВСЕ КЛУБЫ ОТЗЫВЫ КОНТАКТЫ БЛОГ ФОТО ПРАВИЛА ПОСЕЩЕНИЯ СЕТЬ СПОРТИВНЫХ КЛУБОВ В ХАРЬКОВЕ',
                'description' => 'Уже более 278 постоянных посетителей Puls Gym советуют нас своим друзьям и знакомым',
                'images' => '[{"layout":"images","key":"BHjGNGeWJvwX3UnM","attributes":{"image":"TPRSsjQJt6C9Wj3kzvApGRTSekLwV2u8LnCPiizl.png"}},{"layout":"images","key":"xVEqsEesJrR5Ugt3","attributes":{"image":"qws3IO0x00AaZ9GCjs9sGCyTVQey32R2Lfn7IxLE.png"}},{"layout":"images","key":"GzgKHjZHbSOlTw8C","attributes":{"image":"UQWAgPLtuyaOThWIW51R3LnxSbATEgsJzu2iObuj.png"}}]',
                'created_at' => '2023-01-24 14:26:28',
                'updated_at' => '2023-01-24 14:26:28',
            ),
        ));
        
        
    }
}