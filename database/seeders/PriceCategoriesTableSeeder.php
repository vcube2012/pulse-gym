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
                'id' => 16,
                'name' => '{"uk":"\\u0424\\u0456\\u0442\\u043d\\u0435\\u0441, \\u043f\\u0456\\u043b\\u0430\\u0442\\u0435\\u0441, \\u041b\\u0424\\u041a, \\u0444\\u0456\\u0442\\u043d\\u0435\\u0441-\\u043c\\u0456\\u043a\\u0441","ru":"\\u0424\\u0438\\u0442\\u043d\\u0435\\u0441, \\u043f\\u0438\\u043b\\u0430\\u0442\\u0435\\u0441, \\u041b\\u0424\\u041a, \\u0444\\u0438\\u0442\\u043d\\u0435\\u0441-\\u043c\\u0438\\u043a\\u0441"}',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => '{"uk":null}',
                'created_at' => '2023-01-20 09:49:53',
                'updated_at' => '2023-01-27 15:02:41',
            ),
            1 => 
            array (
                'id' => 14,
                'name' => '{"uk":"\\u0422\\u0435\\u043d\\u0456\\u0441","ru":"\\u0422\\u0435\\u043d\\u0438\\u0441"}',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => '{"uk":null}',
                'created_at' => '2023-01-20 09:47:39',
                'updated_at' => '2023-01-30 09:10:52',
            ),
            2 => 
            array (
                'id' => 8,
                'name' => '{"uk":"TRX","ru":"TRX"}',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => '{"uk":"\\u0417\\u0430 \\u043e\\u0444\\u043e\\u0440\\u043c\\u043b\\u0435\\u043d\\u043d\\u044f \\u0430\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442\\u0443 \\u0437\\u0430 750 \\u0433\\u0440\\u043d. - \\u0410\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442 \\u0443 \\u0442\\u0440\\u0435\\u043d\\u0430\\u0436\\u0435\\u0440\\u043d\\u0438\\u0439 \\u0437\\u0430\\u043b \\u0443 \\u043f\\u043e\\u0434\\u0430\\u0440\\u0443\\u043d\\u043e\\u043a!","ru":"\\u041f\\u0440\\u0438 \\u043e\\u0444\\u043e\\u0440\\u043c\\u043b\\u0435\\u043d\\u0438\\u0438 \\u0430\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442\\u0430 \\u0437\\u0430 750 \\u0433\\u0440\\u043d. \\u2014 \\u0430\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442 \\u0432 \\u0442\\u0440\\u0435\\u043d\\u0430\\u0436\\u0435\\u0440\\u043d\\u044b\\u0439 \\u0437\\u0430\\u043b \\u0432 \\u043f\\u043e\\u0434\\u0430\\u0440\\u043e\\u043a!"}',
                'created_at' => '2023-01-17 13:58:35',
                'updated_at' => '2023-01-30 09:16:16',
            ),
            3 => 
            array (
                'id' => 7,
            'name' => '{"uk":"\\u0414\\u0436\\u0456\\u0443-\\u0414\\u0436\\u0456\\u0442\\u0441\\u0443, \\u0413\\u0440\\u0435\\u043f\\u043b\\u0456\\u043d\\u0433, MMA (\\u0434\\u0456\\u0442\\u0438 6-15 \\u0440\\u043e\\u043a\\u0456\\u0432)","ru":"\\u0414\\u0436\\u0438\\u0443-\\u0414\\u0436\\u0438\\u0442\\u0441\\u0443, \\u0413\\u0440\\u0435\\u043f\\u043f\\u043b\\u0438\\u043d\\u0433, MMA (\\u0434\\u0435\\u0442\\u0438 6-15 \\u043b\\u0435\\u0442)"}',
                'color' => '#3F4294',
                'new' => false,
                'actia' => true,
                'comment' => '{"uk":"* \\u0410\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442\\u0438 \\u043d\\u0430 \\u0433\\u0440\\u0443\\u043f\\u043e\\u0432\\u0456 \\u0437\\u0430\\u043d\\u044f\\u0442\\u0442\\u044f \\u043d\\u0435 \\u0437\\u0430\\u043c\\u043e\\u0440\\u043e\\u0436\\u0443\\u044e\\u0442\\u044c\\u0441\\u044f","ru":"*  \\u0410\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442\\u044b \\u043d\\u0430 \\u0433\\u0440\\u0443\\u043f\\u043f\\u043e\\u0432\\u044b\\u0435 \\u0437\\u0430\\u043d\\u044f\\u0442\\u0438\\u044f \\u043d\\u0435 \\u0437\\u0430\\u043c\\u043e\\u0440\\u0430\\u0436\\u0438\\u0432\\u0430\\u044e\\u0442\\u0441\\u044f"}',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-30 09:16:57',
            ),
            4 => 
            array (
                'id' => 3,
                'name' => '{"uk":"\\u0421\\u043f\\u0435\\u0446\\u0456\\u0430\\u043b\\u044c\\u043d\\u0430 \\u0446\\u0456\\u043d\\u0430 \\u0434\\u043b\\u044f \\u0448\\u043a\\u043e\\u043b\\u044f\\u0440\\u0456\\u0432 *","ru":"\\u0421\\u043f\\u0435\\u0446\\u0438\\u0430\\u043b\\u044c\\u043d\\u0430\\u044f \\u0446\\u0435\\u043d\\u0430 \\u0434\\u043b\\u044f \\u0448\\u043a\\u043e\\u043b\\u044c\\u043d\\u0438\\u043a\\u043e\\u0432 *"}',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => '{"uk":"* \\u0426\\u0456\\u043d\\u0430 \\u0434\\u0456\\u0439\\u0441\\u043d\\u0430 \\u043f\\u0440\\u0438 \\u043f\\u0440\\u0435\\u0434\'\\u044f\\u0432\\u043b\\u0435\\u043d\\u043d\\u0456 \\u0428\\u043a\\u0456\\u043b\\u044c\\u043d\\u043e\\u0433\\u043e \\u043a\\u0432\\u0438\\u0442\\u043a\\u0430. \\u0422\\u0438\\u0436\\u0434\\u0435\\u043d\\u044c \\u0437\\u0430\\u043c\\u043e\\u0440\\u043e\\u0437\\u043a\\u0438.","ru":"* \\u0426\\u0435\\u043d\\u0430 \\u0434\\u0435\\u0439\\u0441\\u0442\\u0432\\u0438\\u0442\\u0435\\u043b\\u044c\\u043d\\u0430 \\u043f\\u0440\\u0438 \\u043f\\u0440\\u0435\\u0434\\u044a\\u044f\\u0432\\u043b\\u0435\\u043d\\u0438\\u0438 \\u0428\\u043a\\u043e\\u043b\\u044c\\u043d\\u043e\\u0433\\u043e \\u0431\\u0438\\u043b\\u0435\\u0442\\u0430. \\u041d\\u0435\\u0434\\u0435\\u043b\\u044f \\u0437\\u0430\\u043c\\u043e\\u0440\\u043e\\u0437\\u043a\\u0438."}',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-30 09:19:22',
            ),
            5 => 
            array (
                'id' => 2,
                'name' => '{"uk":"\\u0420\\u0430\\u0437\\u043e\\u0432\\u0456 \\u043f\\u043e\\u0441\\u043b\\u0443\\u0433\\u0438","ru":"\\u0420\\u0430\\u0437\\u043e\\u0432\\u044b\\u0435 \\u0443\\u0441\\u043b\\u0443\\u0433\\u0438"}',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => '{"uk":null}',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-30 09:19:46',
            ),
            6 => 
            array (
                'id' => 4,
                'name' => '{"uk":"\\u0410\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442 \\u0456\\u0437 \\u0442\\u0440\\u0435\\u043d\\u0435\\u0440\\u043e\\u043c","ru":"\\u0410\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442 \\u0441 \\u0442\\u0440\\u0435\\u043d\\u0435\\u0440\\u043e\\u043c"}',
                'color' => '#3F4294',
                'new' => false,
                'actia' => true,
                'comment' => '{"ru":"\\u0417\\u0430\\u043c\\u043e\\u0440\\u043e\\u0437\\u043a\\u0430 \\u0434\\u043e 7 \\u0434\\u043d\\u0435\\u0439","uk":"\\u0417\\u0430\\u043c\\u043e\\u0440\\u043e\\u0437\\u043a\\u0430 \\u0434\\u043e 7 \\u0434\\u043d\\u0456\\u0432"}',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-30 09:21:58',
            ),
            7 => 
            array (
                'id' => 1,
                'name' => '{"uk":"\\u0422\\u0440\\u0435\\u043d\\u0430\\u0436\\u0435\\u0440\\u043d\\u0438\\u0439 \\u0437\\u0430\\u043b","ru":"\\u0422\\u0440\\u0435\\u043d\\u0430\\u0436\\u0435\\u0440\\u043d\\u044b\\u0439 \\u0437\\u0430\\u043b"}',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => '{"uk":null}',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-30 09:22:13',
            ),
            8 => 
            array (
                'id' => 15,
                'name' => '{"uk":"\\u0414\\u0436\\u0456\\u0443-\\u0414\\u0436\\u0456\\u0442\\u0441\\u0443, \\u0413\\u0440\\u0435\\u043f\\u043b\\u0456\\u043d\\u0433, MMA","ru":"\\u0414\\u0436\\u0438\\u0443-\\u0414\\u0436\\u0438\\u0442\\u0441\\u0443, \\u0413\\u0440\\u0435\\u043f\\u043f\\u043b\\u0438\\u043d\\u0433, MMA"}',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => '{"uk":"\\u0410\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442\\u0438 \\u043d\\u0430 \\u0433\\u0440\\u0443\\u043f\\u043e\\u0432\\u0456 \\u0437\\u0430\\u043d\\u044f\\u0442\\u0442\\u044f \\u043d\\u0435 \\u0437\\u0430\\u043c\\u043e\\u0440\\u043e\\u0436\\u0443\\u044e\\u0442\\u044c\\u0441\\u044f","ru":"\\u0410\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442\\u044b \\u043d\\u0430 \\u0433\\u0440\\u0443\\u043f\\u043f\\u043e\\u0432\\u044b\\u0435 \\u0437\\u0430\\u043d\\u044f\\u0442\\u0438\\u044f \\u043d\\u0435 \\u0437\\u0430\\u043c\\u043e\\u0440\\u0430\\u0436\\u0438\\u0432\\u0430\\u044e\\u0442\\u0441\\u044f"}',
                'created_at' => '2023-01-20 09:48:28',
                'updated_at' => '2023-01-27 15:03:38',
            ),
            9 => 
            array (
                'id' => 13,
                'name' => '{"uk":"\\u0424\\u0456\\u0442\\u043d\\u0435\\u0441, \\u043f\\u0456\\u043b\\u0430\\u0442\\u0435\\u0441, \\u0441\\u0442\\u0440\\u0435\\u0442\\u0447\\u0438\\u043d\\u0433, \\u0442\\u0430\\u0439\\u0441\\u044c\\u043a\\u0438\\u0439 \\u0431\\u043e\\u043a\\u0441, \\u0447\\u0435\\u0440\\u043b\\u0456\\u0434\\u0456\\u043d\\u0433","ru":"\\u0424\\u0438\\u0442\\u043d\\u0435\\u0441, \\u043f\\u0438\\u043b\\u0430\\u0442\\u0435\\u0441, \\u0441\\u0442\\u0440\\u0435\\u0442\\u0447\\u0438\\u043d\\u0433, \\u0442\\u0430\\u0439\\u0441\\u043a\\u0438\\u0439 \\u0431\\u043e\\u043a\\u0441, \\u0447\\u0435\\u0440\\u043b\\u0438\\u0434\\u0438\\u043d\\u0433"}',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => '{"uk":"\\u0410\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442\\u0438 \\u043d\\u0430 \\u0433\\u0440\\u0443\\u043f\\u043e\\u0432\\u0456 \\u0437\\u0430\\u043d\\u044f\\u0442\\u0442\\u044f \\u043d\\u0435 \\u0437\\u0430\\u043c\\u043e\\u0440\\u043e\\u0436\\u0443\\u044e\\u0442\\u044c\\u0441\\u044f","ru":"\\u0410\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442\\u044b \\u043d\\u0430 \\u0433\\u0440\\u0443\\u043f\\u043f\\u043e\\u0432\\u044b\\u0435 \\u0437\\u0430\\u043d\\u044f\\u0442\\u0438\\u044f \\u043d\\u0435 \\u0437\\u0430\\u043c\\u043e\\u0440\\u0430\\u0436\\u0438\\u0432\\u0430\\u044e\\u0442\\u0441\\u044f"}',
                'created_at' => '2023-01-20 07:51:38',
                'updated_at' => '2023-01-30 09:12:12',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => '{"uk":"\\u0419\\u043e\\u0433\\u0430 - \\u0442\\u0440\\u0435\\u043d\\u0443\\u0432\\u0430\\u043d\\u043d\\u044f 90 \\u0445\\u0432","ru":"\\u0419\\u043e\\u0433\\u0430 \\u2014 \\u0442\\u0440\\u0435\\u043d\\u0438\\u0440\\u043e\\u0432\\u043a\\u0430 90 \\u043c\\u0438\\u043d"}',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => '{"uk":"\\u041f\\u043b\\u0430\\u0442\\u043d\\u0435 \\u0437\\u0430\\u043c\\u043e\\u0440\\u043e\\u0436\\u0443\\u0432\\u0430\\u043d\\u043d\\u044f 14 \\u043a\\u0430\\u043b\\u0435\\u043d\\u0434\\u0430\\u0440\\u043d\\u0438\\u0445 \\u0434\\u043d\\u0456\\u0432 - 90 \\u0433\\u0440\\u043d.","ru":"\\u041f\\u043b\\u0430\\u0442\\u043d\\u0430\\u044f \\u0437\\u0430\\u043c\\u043e\\u0440\\u043e\\u0437\\u043a\\u0430 14 \\u043a\\u0430\\u043b\\u0435\\u043d\\u0434\\u0430\\u0440\\u043d\\u044b\\u0445 \\u0434\\u043d\\u0435\\u0439 \\u2014 90 \\u0433\\u0440\\u043d."}',
                'created_at' => '2023-01-19 12:11:47',
                'updated_at' => '2023-01-30 09:13:08',
            ),
            11 => 
            array (
                'id' => 11,
                'name' => '{"uk":"\\u0424\\u0443\\u043d\\u043a\\u0446\\u0456\\u043e\\u043d\\u0430\\u043b\\u044c\\u043d\\u0438\\u0439 \\u0442\\u0440\\u0435\\u043d\\u0456\\u043d\\u0433","ru":"\\u0424\\u0443\\u043d\\u043a\\u0446\\u0438\\u043e\\u043d\\u0430\\u043b\\u044c\\u043d\\u044b\\u0439 \\u0442\\u0440\\u0435\\u043d\\u0438\\u043d\\u0433"}',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => '{"uk":"\\u041f\\u043b\\u0430\\u0442\\u043d\\u0435 \\u0437\\u0430\\u043c\\u043e\\u0440\\u043e\\u0436\\u0443\\u0432\\u0430\\u043d\\u043d\\u044f 14 \\u043a\\u0430\\u043b\\u0435\\u043d\\u0434\\u0430\\u0440\\u043d\\u0438\\u0445 \\u0434\\u043d\\u0456\\u0432 - 90 \\u0433\\u0440\\u043d.","ru":"\\u041f\\u043b\\u0430\\u0442\\u043d\\u0430\\u044f \\u0437\\u0430\\u043c\\u043e\\u0440\\u043e\\u0437\\u043a\\u0430 14 \\u043a\\u0430\\u043b\\u0435\\u043d\\u0434\\u0430\\u0440\\u043d\\u044b\\u0445 \\u0434\\u043d\\u0435\\u0439 \\u2014 90 \\u0433\\u0440\\u043d."}',
                'created_at' => '2023-01-19 12:11:26',
                'updated_at' => '2023-01-30 09:14:05',
            ),
            12 => 
            array (
                'id' => 10,
                'name' => '{"uk":"\\u0424\\u0456\\u0442\\u043d\\u0435\\u0441-\\u043c\\u0456\\u043a\\u0441, \\u0441\\u0442\\u0440\\u0435\\u0442\\u0447\\u0438\\u043d\\u0433","ru":"\\u0424\\u0438\\u0442\\u043d\\u0435\\u0441-\\u043c\\u0438\\u043a\\u0441, \\u0441\\u0442\\u0440\\u0435\\u0442\\u0447\\u0438\\u043d\\u0433"}',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => '{"uk":"\\u0410\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442\\u0438 \\u043d\\u0430 \\u0433\\u0440\\u0443\\u043f\\u043e\\u0432\\u0456 \\u0437\\u0430\\u043d\\u044f\\u0442\\u0442\\u044f \\u043d\\u0435 \\u0437\\u0430\\u043c\\u043e\\u0440\\u043e\\u0436\\u0443\\u044e\\u0442\\u044c\\u0441\\u044f","ru":"\\u0410\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442\\u044b \\u043d\\u0430 \\u0433\\u0440\\u0443\\u043f\\u043f\\u043e\\u0432\\u044b\\u0435 \\u0437\\u0430\\u043d\\u044f\\u0442\\u0438\\u044f \\u043d\\u0435 \\u0437\\u0430\\u043c\\u043e\\u0440\\u0430\\u0436\\u0438\\u0432\\u0430\\u044e\\u0442\\u0441\\u044f"}',
                'created_at' => '2023-01-19 10:18:51',
                'updated_at' => '2023-01-30 09:14:42',
            ),
            13 => 
            array (
                'id' => 9,
                'name' => '{"uk":"\\u0413\\u0440\\u0443\\u043f\\u043e\\u0432\\u0456 \\u0442\\u0440\\u0435\\u043d\\u0443\\u0432\\u0430\\u043d\\u043d\\u044f","ru":"\\u0413\\u0440\\u0443\\u043f\\u043f\\u043e\\u0432\\u044b\\u0435 \\u0442\\u0440\\u0435\\u043d\\u0438\\u0440\\u043e\\u0432\\u043a\\u0438"}',
                'color' => '#3F4294',
                'new' => false,
                'actia' => false,
                'comment' => '{"uk":"\\u0410\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442\\u0438 \\u043d\\u0430 \\u0433\\u0440\\u0443\\u043f\\u043e\\u0432\\u0456 \\u0437\\u0430\\u043d\\u044f\\u0442\\u0442\\u044f \\u043d\\u0435 \\u0437\\u0430\\u043c\\u043e\\u0440\\u043e\\u0436\\u0443\\u044e\\u0442\\u044c\\u0441\\u044f","ru":"\\u0410\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442\\u044b \\u043d\\u0430 \\u0433\\u0440\\u0443\\u043f\\u043f\\u043e\\u0432\\u044b\\u0435 \\u0437\\u0430\\u043d\\u044f\\u0442\\u0438\\u044f \\u043d\\u0435 \\u0437\\u0430\\u043c\\u043e\\u0440\\u0430\\u0436\\u0438\\u0432\\u0430\\u044e\\u0442\\u0441\\u044f"}',
                'created_at' => '2023-01-18 14:09:49',
                'updated_at' => '2023-01-30 09:15:49',
            ),
            14 => 
            array (
                'id' => 6,
                'name' => '{"uk":"\\u0424\\u0456\\u0442\\u043d\\u0435\\u0441, \\u043f\\u0456\\u043b\\u0430\\u0442\\u0435\\u0441","ru":"\\u0424\\u0438\\u0442\\u043d\\u0435\\u0441, \\u043f\\u0438\\u043b\\u0430\\u0442\\u0435\\u0441"}',
                'color' => '#3F4294',
                'new' => false,
                'actia' => true,
                'comment' => '{"uk":"* \\u0410\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442\\u0438 \\u043d\\u0430 \\u0433\\u0440\\u0443\\u043f\\u043e\\u0432\\u0456 \\u0437\\u0430\\u043d\\u044f\\u0442\\u0442\\u044f \\u043d\\u0435 \\u0437\\u0430\\u043c\\u043e\\u0440\\u043e\\u0436\\u0443\\u044e\\u0442\\u044c\\u0441\\u044f","ru":"*  \\u0410\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442\\u044b \\u043d\\u0430 \\u0433\\u0440\\u0443\\u043f\\u043f\\u043e\\u0432\\u044b\\u0435 \\u0437\\u0430\\u043d\\u044f\\u0442\\u0438\\u044f \\u043d\\u0435 \\u0437\\u0430\\u043c\\u043e\\u0440\\u0430\\u0436\\u0438\\u0432\\u0430\\u044e\\u0442\\u0441\\u044f"}',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-30 09:17:29',
            ),
            15 => 
            array (
                'id' => 5,
            'name' => '{"uk":"\\u0421\\u0456\\u043c\\u0435\\u0439\\u043d\\u0438\\u0439 \\u0430\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442 \\u0434\\u043e \\u0442\\u0440\\u0435\\u043d\\u0430\\u0436\\u0435\\u0440\\u043d\\u043e\\u0433\\u043e \\u0437\\u0430\\u043b\\u0443 (1 \\u0430\\u0431\\u043e 2 \\u0434\\u043e\\u0440\\u043e\\u0441\\u043b\\u0438\\u0445 + \\u0434\\u0438\\u0442\\u0438\\u043d\\u0430)","ru":"\\u0421\\u0435\\u043c\\u0435\\u0439\\u043d\\u044b\\u0439 \\u0430\\u0431\\u043e\\u043d\\u0435\\u043c\\u0435\\u043d\\u0442 \\u0432 \\u0442\\u0440\\u0435\\u043d\\u0430\\u0436\\u0435\\u0440\\u043d\\u044b\\u0439 \\u0437\\u0430\\u043b (1 \\u0438\\u043b\\u0438 2 \\u0432\\u0437\\u0440\\u043e\\u0441\\u043b\\u044b\\u0445 + \\u0440\\u0435\\u0431\\u0435\\u043d\\u043e\\u043a)"}',
                'color' => '#3F4294',
                'new' => false,
                'actia' => true,
                'comment' => '{"uk":"* \\u0426\\u0456\\u043d\\u0430 \\u0434\\u0456\\u0439\\u0441\\u043d\\u0430 \\u043f\\u0440\\u0438 \\u043f\\u0440\\u0435\\u0434\'\\u044f\\u0432\\u043b\\u0435\\u043d\\u043d\\u0456 \\u043f\\u0430\\u0441\\u043f\\u043e\\u0440\\u0442\\u0430 \\u0442\\u0430 \\u0441\\u0432\\u0456\\u0434\\u043e\\u0446\\u0442\\u0432\\u0430 \\u043f\\u0440\\u043e \\u043d\\u0430\\u0440\\u043e\\u0434\\u0436\\u0435\\u043d\\u043d\\u044f.","ru":"*  \\u0426\\u0435\\u043d\\u0430 \\u0434\\u0435\\u0439\\u0441\\u0442\\u0432\\u0438\\u0442\\u0435\\u043b\\u044c\\u043d\\u0430 \\u043f\\u0440\\u0438 \\u043f\\u0440\\u0435\\u0434\\u044a\\u044f\\u0432\\u043b\\u0435\\u043d\\u0438\\u0438 \\u043f\\u0430\\u0441\\u043f\\u043e\\u0440\\u0442\\u0430 \\u0438 \\u0441\\u0432\\u0438\\u0434\\u0435\\u0442\\u0435\\u043b\\u044c\\u0441\\u0442\\u0432\\u0430 \\u043e \\u0440\\u043e\\u0436\\u0434\\u0435\\u043d\\u0438\\u0438."}',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-30 09:18:09',
            ),
        ));
        
        
    }
}