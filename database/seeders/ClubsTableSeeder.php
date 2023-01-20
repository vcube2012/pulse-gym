<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClubsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clubs')->delete();
        
        \DB::table('clubs')->insert(array (
            0 => 
            array (
                'id' => 51,
                'slug' => 'pulse-gym-na-solnecnom',
                'name' => 'PULSE GYM НА СОЛНЕЧНОМ',
                'image' => 'vnHDqqq7JTVt17VmoXCdd5dPKRiEAAmAF3xft3KN.jpg',
                'new' => false,
                'address' => 'пр-т Героев Харькова, 300-А',
                'lat' => '49.93459799440173',
                'lng' => '36.426908482629216',
                'phone' => '[{"layout":"phone","key":"z7Fgxln1M3xgMdey","attributes":{"phone":"095-182-333-6"}},{"layout":"phone","key":"fsjZ4TK5DH72UbfD","attributes":{"phone":"068-192-333-6"}}]',
                'created_at' => '2023-01-19 13:43:16',
                'updated_at' => '2023-01-19 13:43:16',
                'scheduler' => 'Пн-Пт с 9:00 до 20:00 Сб - Вс-Выходной',
            ),
            1 => 
            array (
                'id' => 53,
                'slug' => 'pulse-gym-na-uborevica',
                'name' => 'PULSE GYM НА УБОРЕВИЧА',
                'image' => 'iyLZQpzD37gtmEd3fABF5yaFjiy2T3iW8fqyqPf5.jpg',
                'new' => false,
                'address' => 'ул. Бучмы, 1б ТОЦ "Континент"',
                'lat' => '50.03112716099143',
                'lng' => '36.342725182633274',
                'phone' => '[{"layout":"phone","key":"yxEWNsmsxWzSaKw1","attributes":{"phone":"066-104-93-93"}},{"layout":"phone","key":"dFD5bKuSG9PIVgo8","attributes":{"phone":"098-104-93-93"}}]',
                'created_at' => '2023-01-20 08:19:12',
                'updated_at' => '2023-01-20 08:19:12',
                'scheduler' => 'Пн-Сб с 8:00 до 22:00 Вс с 8:00 до 20:00',
            ),
            2 => 
            array (
                'id' => 55,
                'slug' => 'pulse-gym-na-pavlovom-pole',
                'name' => 'PULSE GYM НА ПАВЛОВОМ ПОЛЕ',
                'image' => 'zWeyekdDjR0rWFxSx1p8Ic6SgJbQ9vDMjpKV5W7V.jpg',
                'new' => false,
                'address' => 'ул. Космонавтов, 8',
                'lat' => '50.03622307648556',
                'lng' => '36.23125786914163',
                'phone' => '[{"layout":"phone","key":"D3974LjU0JEHboGY","attributes":{"phone":"050-043-62-45"}},{"layout":"phone","key":"yGq8sXyY0QKTalZb","attributes":{"phone":"068-664-88-19"}}]',
                'created_at' => '2023-01-20 09:02:00',
                'updated_at' => '2023-01-20 09:02:00',
                'scheduler' => 'Пн-Сб 8:00 до 21:00 Вс-8:00 до 18:00',
            ),
            3 => 
            array (
                'id' => 57,
                'slug' => 'pulse-gym-na-marsala-zukova',
                'name' => 'PULSE GYM НА МАРШАЛА ЖУКОВА',
                'image' => 'X5xx4OK3jHuiKrhlzCwBFnXhd4SSJFhnLw4xHjal.jpg',
                'new' => false,
                'address' => 'Петра Григоренко, 39',
                'lat' => '49.95043255948919',
                'lng' => '36.31443092681',
                'phone' => '[{"layout":"phone","key":"pu0QDS7RzBUvHWFs","attributes":{"phone":"068-175-14-13"}},{"layout":"phone","key":"k6gmA3yiSZSJjKbo","attributes":{"phone":"050-228-75-88"}}]',
                'created_at' => '2023-01-20 09:34:40',
                'updated_at' => '2023-01-20 09:34:40',
                'scheduler' => 'Пн-СБ с 8:00 до 21:00 Вс с 08:00 до 18:00',
            ),
            4 => 
            array (
                'id' => 1,
                'slug' => 'pulse-gym-na-odesskoi',
                'name' => 'PULSE GYM НА ОДЕССКОЙ',
                'image' => 'Og9FzUpC3r4uxWbrPPHmCVrYYj4UOeOe7cvtw7dN.jpg',
                'new' => true,
                'address' => 'пр-т. Гагаріна, 167',
                'lat' => '49.95055907630252',
                'lng' => '36.26086502871161',
                'phone' => '[{"layout":"phone","key":"IQQk451BEmadHKem","attributes":{"phone":"050 465 1435"}},{"layout":"phone","key":"Ap0boMDr5zu8g3lj","attributes":{"phone":"073 465 1435"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-17 13:31:14',
                'scheduler' => 'Пн-Сб с 8:00 до 21:00 Нд-с 08:00 до 18:00',
            ),
            5 => 
            array (
                'id' => 2,
                'slug' => 'pulse-gym-na-levade',
                'name' => 'PULSE GYM НА ЛЕВАДЕ',
                'image' => 'ezTZqpEADnXfZWj3RrQKTe6jrXeVPkBz2PcD93vm.jpg',
                'new' => false,
                'address' => 'ул. Маломясницкая, 2А',
                'lat' => '49.98349445421346',
                'lng' => '36.24508891146735',
                'phone' => '[{"layout":"phone","key":"zyPQ8Pa1iZPHPyjr","attributes":{"phone":"095-29-000-79"}},{"layout":"phone","key":"S0u0a5bmeMITQMMP","attributes":{"phone":"073-29-000-79"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-17 14:04:26',
                'scheduler' => 'Пн-Сб с 8:00 до 22:00 Вс с 8:00 до 20:00',
            ),
            6 => 
            array (
                'id' => 3,
                'slug' => 'pulse-gym-na-poselke-zukovskogo',
                'name' => 'PULSE GYM НА ПОСЕЛКЕ ЖУКОВСКОГО',
                'image' => 'NQ4WzRywNxLzWk7tdfGiCKzwfLDHfTS4OsATcPHc.jpg',
                'new' => false,
                'address' => 'ул. Астрономическая, 27-А',
                'lat' => '50.0489478132045',
                'lng' => '36.29008638277784',
                'phone' => '[{"layout":"phone","key":"3NX5jZJzmRVa9LRl","attributes":{"phone":"099-703-70-07"}},{"layout":"phone","key":"f6Hb7SL9AM28DLx6","attributes":{"phone":"073-703-70-07"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-18 13:40:08',
                'scheduler' => 'Пн, Ср,,Пт 9:00 до 19:00 Сб-ВС - Выходной',
            ),
            7 => 
            array (
                'id' => 4,
                'slug' => 'pulse-gym-na-saltovke',
                'name' => 'PULSE GYM НА САЛТОВКЕ',
                'image' => 'HjvV54RLk0v7UKnWmDqsp8BmIXsGQj6ZV9hO1Iv8.jpg',
                'new' => true,
                'address' => 'пр-т. Тракторостроителей, 107-В',
                'lat' => '50.02436647549349',
                'lng' => '36.36483399701628',
                'phone' => '[{"layout":"phone","key":"rRb1o9neGDVmjbmT","attributes":{"phone":"073-373-222-7"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-18 14:15:58',
                'scheduler' => 'Пн-Пт с 9:00 до 20:00 Сб-с 10:00 до 16:00 Вс выходной',
            ),
            8 => 
            array (
                'id' => 5,
                'slug' => 'pulse-gym-na-alekseevke',
                'name' => 'PULSE GYM НА АЛЕКСЕЕВКЕ',
                'image' => 'HFZOOk7NUZPBVgj7reiUTRg8UykhC9ZZWjfbwshG.jpg',
                'new' => true,
                'address' => 'пр-т Победы, 52-Д',
                'lat' => '50.054329670625414',
                'lng' => '36.1969538571166',
                'phone' => '[{"layout":"phone","key":"hAJOXTlQvKRZtATi","attributes":{"phone":"099-408-56-56"}},{"layout":"phone","key":"vgyp6GoEYSenVaTQ","attributes":{"phone":"063-608-56-56"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-19 08:21:41',
                'scheduler' => 'Пн-Пт 9:00 до 20:00 Сб-10:00 до 16:00 ВС - Выходной',
            ),
            9 => 
            array (
                'id' => 6,
                'slug' => 'pulse-gym-na-armeiskoi',
                'name' => 'PULSE GYM НА АРМЕЙСКОЙ',
                'image' => 'nHNEVh1chEBb2QB3w7CBr3TnafJ5WUyGqXOBxP68.jpg',
                'new' => true,
                'address' => 'пр-т Героев Харькова, 200',
                'lat' => '49.96398514850374',
                'lng' => '36.329413307310865',
                'phone' => '[{"layout":"phone","key":"m1StfJHyJEJRbv22","attributes":{"phone":"050-303-13-30"}},{"layout":"phone","key":"lfwxq46EfBTJ5M0M","attributes":{"phone":"093-303-13-30"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-19 08:54:05',
                'scheduler' => 'Пн-СБ с 8:00 до 21:00 Вс с 08:00 до 18:00',
            ),
            10 => 
            array (
                'id' => 7,
                'slug' => 'pulse-gym-na-xolodnoi-gore',
                'name' => 'PULSE GYM НА ХОЛОДНОЙ ГОРЕ',
                'image' => 'uQsOesU1RvkrYwtChmYlTuUH5xXb1O8ZDezmau9Y.jpg',
                'new' => true,
                'address' => 'ул. Полтавский шлях, 115',
                'lat' => '49.98545584705696',
                'lng' => '36.191698228663654',
                'phone' => '[{"layout":"phone","key":"o61RjHRkVFNoKvqw","attributes":{"phone":"066-814-0333"}},{"layout":"phone","key":"iOxcUJ6JO5g5jXyZ","attributes":{"phone":"067-814-0333"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-19 09:31:40',
                'scheduler' => 'Пн-Сб с 9:00 до 20:00 Вс-с 10:00 до 16:00',
            ),
            11 => 
            array (
                'id' => 8,
                'slug' => 'pulse-gym-na-saltovskom-sosse',
                'name' => 'PULSE GYM НА САЛТОВСКОМ ШОССЕ',
                'image' => 'RPy6tFWUdvwB2a5uX5hzbZ9EXstRzrvzXn6O4ggV.jpg',
                'new' => true,
                'address' => 'Салтовское шоссе, 100',
                'lat' => '49.98618753995183',
                'lng' => '36.31992081146734',
                'phone' => '[{"layout":"phone","key":"WzqICeGUr7lVgVgI","attributes":{"phone":"063-305-45-54"}},{"layout":"phone","key":"KvpeiJemVyuE6TGE","attributes":{"phone":"050-305-45-54"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-19 09:48:48',
                'scheduler' => 'Пн-Сб с 8:00 до 21:00 Вс с 08:00 до 18:00',
            ),
            12 => 
            array (
                'id' => 9,
                'slug' => 'pulse-gym-na-pobede',
                'name' => 'PULSE GYM НА ПОБЕДЕ',
                'image' => 'vTtoDBdb1XyqLOh2tDXWkU4egUiqMlaxkGplqAan.jpg',
                'new' => false,
                'address' => 'пр-т Победы, 76-Б',
                'lat' => '50.066620643681205',
                'lng' => '36.209913597997044',
                'phone' => '[{"layout":"phone","key":"KIdOCRPNpgIj41si","attributes":{"phone":"066-869-63-64"}},{"layout":"phone","key":"lajB2vJlDP4XLuQZ","attributes":{"phone":"063-869-63-64"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-19 10:30:51',
                'scheduler' => 'Пн-Пт с 9:00 до 20:00 Сб с 10:00 до 16:00 Вс Выходной',
            ),
            13 => 
            array (
                'id' => 10,
                'slug' => 'pulse-gym-na-gagarina',
                'name' => 'PULSE GYM НА ГАГАРИНА',
                'image' => 'n1WbXdomN4rWtyjiYWOjF7AVbpo6UbZyAviuzhCX.jpg',
                'new' => false,
                'address' => 'пр-т Гагарина, 54-А',
                'lat' => '49.975381077569004',
                'lng' => '36.252755284483044',
                'phone' => '[{"layout":"phone","key":"5TFxGhjSJlGBJNtG","attributes":{"phone":"066-470-98-88"}},{"layout":"phone","key":"N9wNUXFeuWeHHyU0","attributes":{"phone":"073-022-38-88"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-19 11:30:12',
                'scheduler' => 'Пн-Сб с 8:00 до 21:00 Вс-с 08:00 до 18:00',
            ),
            14 => 
            array (
                'id' => 11,
                'slug' => 'pulse-gym-na-severnoi-saltovke',
                'name' => 'PULSE GYM НА СЕВЕРНОЙ САЛТОВКЕ',
                'image' => 'HUlJzDRRNzOB9HcV6m5UdtSCDLNZ7RkmZVrZ9ekD.jpg',
                'new' => false,
                'address' => 'ул. Натальи Ужвий, 58 ТЦ "Северный"',
                'lat' => '50.045540786275474',
                'lng' => '36.35409597429853',
                'phone' => '[{"layout":"phone","key":"mOVW24HOK2tbp2UL","attributes":{"phone":"095-646-222-9"}},{"layout":"phone","key":"iYeqoKmVHnqOmCNI","attributes":{"phone":"068-653-222-9"}}]',
                'created_at' => '2023-01-19 12:20:27',
                'updated_at' => '2023-01-19 12:20:27',
                'scheduler' => 'Пн-Сб с 8:00 до 22:00 Вс с 8:00 до 20:00',
            ),
            15 => 
            array (
                'id' => 12,
                'slug' => 'pulse-gym-na-alekseevke-2',
                'name' => 'PULSE GYM НА АЛЕКСЕЕВКЕ 2',
                'image' => 'yGkkB9eL95WxlgWZ9mQ8nDdh6YXhvj0vhwm44de7.jpg',
                'new' => false,
                'address' => 'ул. Ахсарова, 13-А',
                'lat' => '50.051461426180474',
                'lng' => '36.20946698263415',
                'phone' => '[{"layout":"phone","key":"oCoujVzya80GwTg0","attributes":{"phone":"050-070-15-11"}},{"layout":"phone","key":"WtuRgV6YuYkGjtbW","attributes":{"phone":"097-675-91-96"}}]',
                'created_at' => '2023-01-19 13:03:37',
                'updated_at' => '2023-01-19 13:08:06',
                'scheduler' => 'Пн-Сб с 8:00 до 22:00 Вс с 8:00 до 20:00',
            ),
            16 => 
            array (
                'id' => 52,
                'slug' => 'pulse-gym-na-maselskogo',
                'name' => 'PULSE GYM НА МАСЕЛЬСКОГО',
                'image' => 'j8sDEXycMisaCIAi7QnfJEcDUPdCi8QZwv5Vv6Od.jpg',
                'new' => false,
                'address' => 'ул. Пожарского, 1',
                'lat' => '49.94806498263204',
                'lng' => '36.355319070990035',
                'phone' => '[{"layout":"phone","key":"v0K5mdu7YWikFipJ","attributes":{"phone":"050-450-85-50"}},{"layout":"phone","key":"MxnOGSMw5GDE2MUU","attributes":{"phone":" 093-450-85-50"}}]',
                'created_at' => '2023-01-19 14:30:59',
                'updated_at' => '2023-01-19 14:30:59',
                'scheduler' => 'Пн-СБ с 8:00 до 21:00 Вс с 08:00 до 18:00',
            ),
            17 => 
            array (
                'id' => 54,
                'slug' => 'pulse-gym-na-studenceskoi',
                'name' => 'PULSE GYM НА СТУДЕНЧЕСКОЙ',
                'image' => 'A7nVaF1yfHNPPJFoRBYU3UztwtCVtSK8nC38HHN7.jpg',
                'new' => false,
                'address' => 'ул. Валентиновская, 2-А',
                'lat' => '50.02148959833089',
                'lng' => '36.31726769797697',
                'phone' => '[{"layout":"phone","key":"4g9gI26vCbW43Wcd","attributes":{"phone":"068-87-997-87"}},{"layout":"phone","key":"4sLVI6cRE2zXlbVV","attributes":{"phone":"050-87-949-87"}}]',
                'created_at' => '2023-01-20 08:45:15',
                'updated_at' => '2023-01-20 08:45:15',
                'scheduler' => 'Пн-Сб с 8:00 до 21:00 Вс-с 8:00 до 18:00',
            ),
            18 => 
            array (
                'id' => 56,
                'slug' => 'pulse-gym-na-ploshhadi-vosstaniia',
                'name' => 'PULSE GYM НА ПЛОЩАДИ ВОССТАНИЯ',
                'image' => 'kS4fZUs1AcCpR7FItaDrS0w8ychQtgHgXfj7cd7L.jpg',
                'new' => false,
                'address' => 'ул. Академика Павлова, 20-б',
                'lat' => '49.98602044858137',
                'lng' => '36.27886911146734',
                'phone' => '[{"layout":"phone","key":"uAVWSI5Lcd3Fslbc","attributes":{"phone":"050-94-000-32"}},{"layout":"phone","key":"EpXANHjtF6w73lW5","attributes":{"phone":"068-18-000-32"}}]',
                'created_at' => '2023-01-20 09:25:51',
                'updated_at' => '2023-01-20 09:25:51',
                'scheduler' => 'Пн-Сб с 8:00 до 21:00 Вс с 08:00 до 18:00',
            ),
            19 => 
            array (
                'id' => 58,
                'slug' => 'pulse-gym-na-xtz',
                'name' => 'PULSE GYM НА ХТЗ',
                'image' => 'oUmSrOs2Hs5OKR23Va6r1k8fmrJVumcLVaLBMkjI.jpg',
                'new' => false,
                'address' => 'пр-т. Александровский, 99',
                'lat' => '49.94143127481639',
                'lng' => '36.375691828661765',
                'phone' => '[{"layout":"phone","key":"6hXTCGKCgi25DC1u","attributes":{"phone":"068-242-29-20"}}]',
                'created_at' => '2023-01-20 10:01:36',
                'updated_at' => '2023-01-20 10:05:23',
                'scheduler' => 'Пн-СБ с 8:00 до 21:00 Вс с 08:00 до 18:00',
            ),
        ));
        
        
    }
}