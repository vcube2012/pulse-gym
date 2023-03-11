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
                'id' => 3,
                'name' => '{"uk":"\\u0419\\u043e\\u0433\\u0430","ru":"\\u0419\\u043e\\u0433\\u0430"}',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            1 => 
            array (
                'id' => 9,
                'name' => '{"uk":"\\u0421\\u043f\\u043e\\u0440\\u0442 \\u0431\\u0430\\u0440","ru":"\\u0421\\u043f\\u043e\\u0440\\u0442 \\u0431\\u0430\\u0440"}',
                'created_at' => '2023-01-17 11:02:47',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            2 => 
            array (
                'id' => 10,
                'name' => '{"uk":"\\u041c\\u0430\\u0441\\u0441\\u0430\\u0436","ru":"\\u041c\\u0430\\u0441\\u0441\\u0430\\u0436"}',
                'created_at' => '2023-01-17 11:02:56',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            3 => 
            array (
                'id' => 11,
                'name' => '{"uk":"Crossfit","ru":"Crossfit"}',
                'created_at' => '2023-01-17 13:56:00',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            4 => 
            array (
                'id' => 12,
                'name' => '{"uk":"TRX","ru":"TRX"}',
                'created_at' => '2023-01-17 13:56:09',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            5 => 
            array (
                'id' => 13,
                'name' => '{"uk":"\\u0417\\u0443\\u043c\\u0431\\u0430","ru":"\\u0417\\u0443\\u043c\\u0431\\u0430"}',
                'created_at' => '2023-01-17 13:56:27',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            6 => 
            array (
                'id' => 15,
                'name' => '{"uk":"STRETCHING+PILATES","ru":"STRETCHING+PILATES"}',
                'created_at' => '2023-01-18 12:57:04',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            7 => 
            array (
                'id' => 17,
                'name' => '{"uk":"\\u0426\\u0438\\u0433\\u0443\\u043d","ru":"\\u0426\\u0438\\u0433\\u0443\\u043d"}',
                'created_at' => '2023-01-19 11:18:53',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            8 => 
            array (
                'id' => 18,
                'name' => '{"uk":"Functional training","ru":"Functional training"}',
                'created_at' => '2023-01-19 11:29:50',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            9 => 
            array (
                'id' => 22,
                'name' => '{"uk":"Dance Mix","ru":"Dance Mix"}',
                'created_at' => '2023-01-19 13:29:05',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            10 => 
            array (
                'id' => 23,
                'name' => '{"uk":"Dance studio \\u201cBeneton\\u201d","ru":"Dance studio \\u201cBeneton\\u201d"}',
                'created_at' => '2023-01-19 13:29:12',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            11 => 
            array (
                'id' => 27,
                'name' => '{"uk":"Port de Bras","ru":"Port de Bras"}',
                'created_at' => '2023-01-19 14:38:27',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            12 => 
            array (
                'id' => 28,
                'name' => '{"uk":"Slow Fitness","ru":"Slow Fitness"}',
                'created_at' => '2023-01-19 14:38:40',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            13 => 
            array (
                'id' => 29,
                'name' => '{"uk":"Mix Step","ru":"Mix Step"}',
                'created_at' => '2023-01-19 14:38:55',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            14 => 
            array (
                'id' => 30,
                'name' => '{"uk":"Karate","ru":"Karate"}',
                'created_at' => '2023-01-19 14:39:05',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            15 => 
            array (
                'id' => 32,
                'name' => '{"uk":"\\u0422\\u0430\\u0439\\u0441\\u043a\\u0438\\u0439 \\u0431\\u043e\\u043a\\u0441","ru":"\\u0422\\u0430\\u0439\\u0441\\u043a\\u0438\\u0439 \\u0431\\u043e\\u043a\\u0441"}',
                'created_at' => '2023-01-20 07:49:44',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            16 => 
            array (
                'id' => 33,
                'name' => '{"uk":"Stretching and Calisthenics","ru":"Stretching and Calisthenics"}',
                'created_at' => '2023-01-20 07:49:52',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            17 => 
            array (
                'id' => 35,
                'name' => '{"uk":"\\u0411\\u043e\\u043a\\u0441","ru":"\\u0411\\u043e\\u043a\\u0441"}',
                'created_at' => '2023-01-20 09:46:52',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            18 => 
            array (
                'id' => 36,
                'name' => '{"uk":"Dance Fitness","ru":"Dance Fitness"}',
                'created_at' => '2023-01-20 09:47:00',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            19 => 
            array (
                'id' => 37,
                'name' => '{"uk":"\\u0424\\u0456\\u0442\\u043d\\u0435\\u0441 \\u0439\\u043e\\u0433\\u0430","ru":"\\u0424\\u0438\\u0442\\u043d\\u0435\\u0441 \\u0439\\u043e\\u0433\\u0430"}',
                'created_at' => '2023-01-20 09:47:08',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            20 => 
            array (
                'id' => 34,
                'name' => '{"uk":"\\u0414\\u0436\\u0456\\u0443 \\u0414\\u0436\\u0456\\u0442\\u0441\\u0443","ru":"\\u0414\\u0436\\u0438\\u0443 \\u0434\\u0436\\u0438\\u0442\\u0441\\u0443"}',
                'created_at' => '2023-01-20 09:46:29',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            21 => 
            array (
                'id' => 31,
                'name' => '{"uk":"Workout \\u0434\\u043b\\u044f \\u0434\\u0456\\u0442\\u0435\\u0439 \\u0442\\u0430 \\u043f\\u0456\\u0434\\u043b\\u0456\\u0442\\u043a\\u0456\\u0432","ru":"Workout \\u0434\\u043b\\u044f \\u0434\\u0435\\u0442\\u0435\\u0439 \\u0438 \\u043f\\u043e\\u0434\\u0440\\u043e\\u0441\\u0442\\u043a\\u043e\\u0432"}',
                'created_at' => '2023-01-20 07:49:36',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            22 => 
            array (
                'id' => 26,
                'name' => '{"uk":"\\u0410\\u0440\\u043c\\u0440\\u0435\\u0441\\u0442\\u043b\\u0456\\u043d\\u0433","ru":"\\u0410\\u0440\\u043c\\u0440\\u0435\\u0441\\u0442\\u043b\\u0438\\u043d\\u0433"}',
                'created_at' => '2023-01-19 14:01:07',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            23 => 
            array (
                'id' => 25,
                'name' => '{"uk":"\\u0425\\u0456\\u043f \\u0445\\u043e\\u043f","ru":"\\u0425\\u0438\\u043f \\u0425\\u043e\\u043f"}',
                'created_at' => '2023-01-19 13:30:19',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            24 => 
            array (
                'id' => 24,
                'name' => '{"uk":"\\u0422\\u0430\\u043d\\u0446\\u044e\\u0432\\u0430\\u043b\\u044c\\u043d\\u043e-\\u0440\\u0443\\u0445\\u043e\\u0432\\u0430 \\u0442\\u0435\\u0440\\u0430\\u043f\\u0456\\u044f","ru":"\\u0422\\u0430\\u043d\\u0446\\u0435\\u0432\\u0430\\u043b\\u044c\\u043d\\u043e \\u0434\\u0432\\u0438\\u0433\\u0430\\u0442\\u0435\\u043b\\u044c\\u043d\\u0430\\u044f \\u0442\\u0435\\u0440\\u0430\\u043f\\u0438\\u044f"}',
                'created_at' => '2023-01-19 13:29:19',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            25 => 
            array (
                'id' => 21,
            'name' => '{"uk":"\\u041a\\u0430\\u0440\\u0430\\u0442\\u0435 (\\u0434\\u0456\\u0442\\u0438)","ru":"\\u041a\\u0430\\u0440\\u0430\\u0442\\u0435 (\\u0434\\u0435\\u0442\\u0438)"}',
                'created_at' => '2023-01-19 13:19:15',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            26 => 
            array (
                'id' => 20,
                'name' => '{"uk":"\\u0414\\u0438\\u0442\\u044f\\u0447\\u0438\\u0439 \\u0444\\u0456\\u0442\\u043d\\u0435\\u0441","ru":"\\u0414\\u0435\\u0442\\u0441\\u043a\\u0438\\u0439 \\u0444\\u0438\\u0442\\u043d\\u0435\\u0441"}',
                'created_at' => '2023-01-19 13:19:05',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            27 => 
            array (
                'id' => 19,
                'name' => '{"uk":"\\u0427\\u0435\\u0440\\u043b\\u0456\\u0434\\u0456\\u043d\\u0433","ru":"\\u0427\\u0435\\u0440\\u043b\\u0438\\u0434\\u0438\\u043d\\u0433"}',
                'created_at' => '2023-01-19 12:35:40',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            28 => 
            array (
                'id' => 16,
                'name' => '{"uk":"\\u0414\\u0438\\u0442\\u044f\\u0447\\u0456 \\u0433\\u0440\\u0443\\u043f\\u0438","ru":"\\u0414\\u0435\\u0442\\u0441\\u043a\\u0438\\u0435 \\u0433\\u0440\\u0443\\u043f\\u043f\\u044b"}',
                'created_at' => '2023-01-18 14:08:10',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            29 => 
            array (
                'id' => 14,
                'name' => '{"uk":"\\u0421\\u0442\\u0440\\u0435\\u0442\\u0447\\u0456\\u043d\\u0433","ru":"\\u0421\\u0442\\u0440\\u0435\\u0442\\u0447\\u0438\\u043d\\u0433"}',
                'created_at' => '2023-01-17 13:56:41',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            30 => 
            array (
                'id' => 8,
                'name' => '{"uk":"\\u0413\\u0440\\u0435\\u043f\\u043b\\u0456\\u043d\\u0433","ru":"\\u0413\\u0440\\u0435\\u043f\\u043f\\u043b\\u0438\\u043d\\u0433"}',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            31 => 
            array (
                'id' => 7,
                'name' => '{"uk":"\\u041f\\u0456\\u043b\\u0430\\u0442\\u0435\\u0441","ru":"\\u041f\\u0438\\u043b\\u0430\\u0442\\u0435\\u0441"}',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            32 => 
            array (
                'id' => 6,
                'name' => '{"uk":"\\u0422\\u0430\\u043d\\u0446\\u044e\\u0432\\u0430\\u043b\\u044c\\u043d\\u0430 \\u0430\\u0435\\u0440\\u043e\\u0431\\u0456\\u043a\\u0430","ru":"\\u0422\\u0430\\u043d\\u0446\\u0435\\u0432\\u0430\\u043b\\u044c\\u043d\\u0430\\u044f \\u0430\\u044d\\u0440\\u043e\\u0431\\u0438\\u043a\\u0430"}',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            33 => 
            array (
                'id' => 5,
                'name' => '{"uk":"\\u0414\\u0436\\u0456\\u0443-\\u0414\\u0436\\u0456\\u0442\\u0441\\u0443","ru":"\\u0414\\u0436\\u0438\\u0443-\\u0414\\u0436\\u0438\\u0442\\u0441\\u0443"}',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            34 => 
            array (
                'id' => 4,
                'name' => '{"uk":"\\u0424\\u0456\\u0442\\u043d\\u0435\\u0441","ru":"\\u0424\\u0438\\u0442\\u043d\\u0435\\u0441"}',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            35 => 
            array (
                'id' => 2,
                'name' => '{"uk":"\\u0424\\u0456\\u0442\\u043d\\u0435\\u0441-\\u043c\\u0456\\u043a\\u0441","ru":"\\u0424\\u0438\\u0442\\u043d\\u0435\\u0441-\\u043c\\u0438\\u043a\\u0441"}',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            36 => 
            array (
                'id' => 1,
                'name' => '{"uk":"\\u0422\\u0440\\u0435\\u043d\\u0430\\u0436\\u0435\\u0440\\u043d\\u0438\\u0439 \\u0437\\u0430\\u043b","ru":"\\u0422\\u0440\\u0435\\u043d\\u0430\\u0436\\u0435\\u0440\\u043d\\u044b\\u0439 \\u0437\\u0430\\u043b"}',
                'created_at' => '2023-01-17 08:24:22',
                'updated_at' => '2023-01-31 09:52:50',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => '{"ru":"High Heels","uk":"High Heels"}',
                'created_at' => '2023-02-27 09:58:08',
                'updated_at' => '2023-02-27 09:58:08',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => '{"ru":"\\u0414\\u0435\\u0442\\u0441\\u043a\\u0430\\u044f \\u0433\\u0438\\u043c\\u043d\\u0430\\u0441\\u0442\\u0438\\u043a\\u0430","uk":"\\u0414\\u0438\\u0442\\u044f\\u0447\\u0430 \\u0433\\u0456\\u043c\\u043d\\u0430\\u0441\\u0442\\u0438\\u043a\\u0430"}',
                'created_at' => '2023-02-27 11:18:45',
                'updated_at' => '2023-02-27 11:18:45',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => '{"ru":"\\u0422\\u0445\\u044d\\u043a\\u0432\\u043e\\u043d\\u0434\\u043e \\u0434\\u043b\\u044f \\u0434\\u0435\\u0442\\u0435\\u0439","uk":"\\u0422\\u0445\\u0435\\u043a\\u0432\\u043e\\u043d\\u0434\\u043e \\u0434\\u043b\\u044f \\u0434\\u0456\\u0442\\u0435\\u0439"}',
                'created_at' => '2023-02-27 11:23:36',
                'updated_at' => '2023-02-27 11:23:36',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => '{"ru":"Body Sculpt","uk":"Body Sculpt"}',
                'created_at' => '2023-02-27 12:31:24',
                'updated_at' => '2023-02-27 12:31:24',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => '{"ru":"\\u0425\\u0438\\u043f \\u0425\\u043e\\u043f \\u0434\\u0435\\u0442\\u0438","uk":"\\u0425\\u0456\\u043f \\u0425\\u043e\\u043f \\u0434\\u0456\\u0442\\u0438"}',
                'created_at' => '2023-02-27 13:10:44',
                'updated_at' => '2023-02-27 13:10:44',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => '{"ru":"Taekwon-Do","uk":"Taekwon-Do"}',
                'created_at' => '2023-03-08 09:10:07',
                'updated_at' => '2023-03-08 09:10:07',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => '{"ru":"\\u0414\\u0435\\u0442\\u0441\\u043a\\u0430\\u044f \\u0430\\u043a\\u0440\\u043e\\u0431\\u0430\\u0442\\u0438\\u043a\\u0430","uk":"\\u0414\\u0438\\u0442\\u044f\\u0447\\u0430 \\u0430\\u043a\\u0440\\u043e\\u0431\\u0430\\u0442\\u0438\\u043a\\u0430"}',
                'created_at' => '2023-03-08 09:23:40',
                'updated_at' => '2023-03-08 09:23:40',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => '{"ru":"Aikido","uk":"Aikido"}',
                'created_at' => '2023-03-08 09:23:51',
                'updated_at' => '2023-03-08 09:23:51',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => '{"ru":"\\u0421\\u043e\\u0432\\u0440\\u0435\\u043c\\u0435\\u043d\\u043d\\u044b\\u0435 \\u0442\\u0430\\u043d\\u0446\\u044b","uk":"\\u0421\\u0443\\u0447\\u0430\\u0441\\u043d\\u0456 \\u0442\\u0430\\u043d\\u0446\\u0456"}',
                'created_at' => '2023-03-08 09:24:30',
                'updated_at' => '2023-03-08 09:24:30',
            ),
        ));
        
        
    }
}