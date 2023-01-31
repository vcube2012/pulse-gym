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
                'id' => 6,
                'slug' => 'pulse-gym-na-armiiskii',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u0410\\u0420\\u041c\\u0406\\u0419\\u0421\\u042c\\u041a\\u0406\\u0419","ru":"PULSE GYM \\u041d\\u0410 \\u0410\\u0420\\u041c\\u0415\\u0419\\u0421\\u041a\\u041e\\u0419"}',
                'image' => 'nHNEVh1chEBb2QB3w7CBr3TnafJ5WUyGqXOBxP68.jpg',
                'new' => true,
                'address' => '{"ua":"\\u043f\\u0440-\\u0442 \\u0413\\u0435\\u0440\\u043e\\u0457\\u0432 \\u0425\\u0430\\u0440\\u043a\\u043e\\u0432\\u0430, 200","ru":"\\u043f\\u0440-\\u0442 \\u0413\\u0435\\u0440\\u043e\\u0435\\u0432 \\u0425\\u0430\\u0440\\u044c\\u043a\\u043e\\u0432\\u0430, 200"}',
                'lat' => '49.96398514850374',
                'lng' => '36.329413307310865',
                'phone' => '[{"layout":"phone","key":"m1StfJHyJEJRbv22","attributes":{"phone":"050-303-13-30"}},{"layout":"phone","key":"lfwxq46EfBTJ5M0M","attributes":{"phone":"093-303-13-30"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-СБ с 8:00 до 21:00 Вс с 08:00 до 18:00',
            ),
            1 => 
            array (
                'id' => 9,
                'slug' => 'pulse-gym-na-peremozi',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u041f\\u0415\\u0420\\u0415\\u041c\\u041e\\u0417\\u0406","ru":"PULSE GYM \\u041d\\u0410 \\u041f\\u041e\\u0411\\u0415\\u0414\\u0415"}',
                'image' => 'vTtoDBdb1XyqLOh2tDXWkU4egUiqMlaxkGplqAan.jpg',
                'new' => false,
                'address' => '{"ua":"\\u043f\\u0440-\\u0442 \\u041f\\u0435\\u0440\\u0435\\u043c\\u043e\\u0433\\u0438, 76-\\u0411","ru":"\\u043f\\u0440-\\u0442 \\u041f\\u043e\\u0431\\u0435\\u0434\\u044b, 76-\\u0411"}',
                'lat' => '50.066620643681205',
                'lng' => '36.209913597997044',
                'phone' => '[{"layout":"phone","key":"KIdOCRPNpgIj41si","attributes":{"phone":"066-869-63-64"}},{"layout":"phone","key":"lajB2vJlDP4XLuQZ","attributes":{"phone":"063-869-63-64"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-Пт с 9:00 до 20:00 Сб с 10:00 до 16:00 Вс Выходной',
            ),
            2 => 
            array (
                'id' => 51,
                'slug' => 'pulse-gym-na-soniacnomu',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u0421\\u041e\\u041d\\u042f\\u0427\\u041d\\u041e\\u041c\\u0423","ru":"PULSE GYM \\u041d\\u0410 \\u0421\\u041e\\u041b\\u041d\\u0415\\u0427\\u041d\\u041e\\u041c"}',
                'image' => 'vnHDqqq7JTVt17VmoXCdd5dPKRiEAAmAF3xft3KN.jpg',
                'new' => false,
                'address' => '{"ua":"\\u043f\\u0440-\\u0442 \\u0413\\u0435\\u0440\\u043e\\u0457\\u0432 \\u0425\\u0430\\u0440\\u043a\\u043e\\u0432\\u0430, 300-\\u0410","ru":"\\u043f\\u0440-\\u0442 \\u0413\\u0435\\u0440\\u043e\\u0435\\u0432 \\u0425\\u0430\\u0440\\u044c\\u043a\\u043e\\u0432\\u0430, 300-\\u0410"}',
                'lat' => '49.93459799440173',
                'lng' => '36.426908482629216',
                'phone' => '[{"layout":"phone","key":"z7Fgxln1M3xgMdey","attributes":{"phone":"095-182-333-6"}},{"layout":"phone","key":"fsjZ4TK5DH72UbfD","attributes":{"phone":"068-192-333-6"}}]',
                'created_at' => '2023-01-19 13:43:16',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-Пт с 9:00 до 20:00 Сб - Вс-Выходной',
            ),
            3 => 
            array (
                'id' => 52,
                'slug' => 'pulse-gym-na-maselskogo',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u041c\\u0410\\u0421\\u0415\\u041b\\u042c\\u0421\\u042c\\u041a\\u041e\\u0413\\u041e","ru":"PULSE GYM \\u041d\\u0410 \\u041c\\u0410\\u0421\\u0415\\u041b\\u042c\\u0421\\u041a\\u041e\\u0413\\u041e"}',
                'image' => 'j8sDEXycMisaCIAi7QnfJEcDUPdCi8QZwv5Vv6Od.jpg',
                'new' => false,
                'address' => '{"ua":"\\u0432\\u0443\\u043b. \\u041f\\u043e\\u0436\\u0430\\u0440\\u0441\\u044c\\u043a\\u043e\\u0433\\u043e, 1","ru":"\\u0443\\u043b. \\u041f\\u043e\\u0436\\u0430\\u0440\\u0441\\u043a\\u043e\\u0433\\u043e, 1"}',
                'lat' => '49.94806498263204',
                'lng' => '36.355319070990035',
                'phone' => '[{"layout":"phone","key":"v0K5mdu7YWikFipJ","attributes":{"phone":"050-450-85-50"}},{"layout":"phone","key":"MxnOGSMw5GDE2MUU","attributes":{"phone":" 093-450-85-50"}}]',
                'created_at' => '2023-01-19 14:30:59',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-СБ с 8:00 до 21:00 Вс с 08:00 до 18:00',
            ),
            4 => 
            array (
                'id' => 55,
                'slug' => 'pulse-gym-na-pavlovomu-poli',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u041f\\u0410\\u0412\\u041b\\u041e\\u0412\\u041e\\u041c\\u0423 \\u041f\\u041e\\u041b\\u0406","ru":"PULSE GYM \\u041d\\u0410 \\u041f\\u0410\\u0412\\u041b\\u041e\\u0412\\u041e\\u041c \\u041f\\u041e\\u041b\\u0415"}',
                'image' => 'zWeyekdDjR0rWFxSx1p8Ic6SgJbQ9vDMjpKV5W7V.jpg',
                'new' => false,
                'address' => '{"ua":"\\u0432\\u0443\\u043b. \\u041a\\u043e\\u0441\\u043c\\u043e\\u043d\\u0430\\u0432\\u0442\\u0456\\u0432, 8","ru":"\\u0443\\u043b. \\u041a\\u043e\\u0441\\u043c\\u043e\\u043d\\u0430\\u0432\\u0442\\u043e\\u0432, 8"}',
                'lat' => '50.03622307648556',
                'lng' => '36.23125786914163',
                'phone' => '[{"layout":"phone","key":"D3974LjU0JEHboGY","attributes":{"phone":"050-043-62-45"}},{"layout":"phone","key":"yGq8sXyY0QKTalZb","attributes":{"phone":"068-664-88-19"}}]',
                'created_at' => '2023-01-20 09:02:00',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-Сб 8:00 до 21:00 Вс-8:00 до 18:00',
            ),
            5 => 
            array (
                'id' => 57,
                'slug' => 'pulse-gym-na-marsala-zukova',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u041c\\u0410\\u0420\\u0428\\u0410\\u041b\\u0410 \\u0416\\u0423\\u041a\\u041e\\u0412\\u0410","ru":"PULSE GYM \\u041d\\u0410 \\u041c\\u0410\\u0420\\u0428\\u0410\\u041b\\u0410 \\u0416\\u0423\\u041a\\u041e\\u0412\\u0410"}',
                'image' => 'X5xx4OK3jHuiKrhlzCwBFnXhd4SSJFhnLw4xHjal.jpg',
                'new' => false,
                'address' => '{"ua":"\\u041f\\u0435\\u0442\\u0440\\u0430 \\u0413\\u0440\\u0438\\u0433\\u043e\\u0440\\u0435\\u043d\\u043a\\u0430, 39","ru":"\\u041f\\u0435\\u0442\\u0440\\u0430 \\u0413\\u0440\\u0438\\u0433\\u043e\\u0440\\u0435\\u043d\\u043a\\u043e, 39"}',
                'lat' => '49.95043255948919',
                'lng' => '36.31443092681',
                'phone' => '[{"layout":"phone","key":"pu0QDS7RzBUvHWFs","attributes":{"phone":"068-175-14-13"}},{"layout":"phone","key":"k6gmA3yiSZSJjKbo","attributes":{"phone":"050-228-75-88"}}]',
                'created_at' => '2023-01-20 09:34:40',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-СБ с 8:00 до 21:00 Вс с 08:00 до 18:00',
            ),
            6 => 
            array (
                'id' => 5,
                'slug' => 'pulse-gym-na-oleksiyivci',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u041e\\u041b\\u0415\\u041a\\u0421\\u0406\\u0407\\u0412\\u0426\\u0406","ru":"PULSE GYM \\u041d\\u0410 \\u0410\\u041b\\u0415\\u041a\\u0421\\u0415\\u0415\\u0412\\u041a\\u0415"}',
                'image' => 'HFZOOk7NUZPBVgj7reiUTRg8UykhC9ZZWjfbwshG.jpg',
                'new' => true,
                'address' => '{"ua":"\\u043f\\u0440-\\u0442 \\u041f\\u0435\\u0440\\u0435\\u043c\\u043e\\u0433\\u0438, 52-\\u0414","ru":"\\u043f\\u0440-\\u0442 \\u041f\\u043e\\u0431\\u0435\\u0434\\u044b, 52-\\u0414"}',
                'lat' => '50.054329670625414',
                'lng' => '36.1969538571166',
                'phone' => '[{"layout":"phone","key":"hAJOXTlQvKRZtATi","attributes":{"phone":"099-408-56-56"}},{"layout":"phone","key":"vgyp6GoEYSenVaTQ","attributes":{"phone":"063-608-56-56"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-Пт 9:00 до 20:00 Сб-10:00 до 16:00 ВС - Выходной',
            ),
            7 => 
            array (
                'id' => 8,
                'slug' => 'pulse-gym-na-saltivskomu-sose',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u0421\\u0410\\u041b\\u0422\\u0406\\u0412\\u0421\\u042c\\u041a\\u041e\\u041c\\u0423 \\u0428\\u041e\\u0421\\u0415","ru":"PULSE GYM \\u041d\\u0410 \\u0421\\u0410\\u041b\\u0422\\u041e\\u0412\\u0421\\u041a\\u041e\\u041c \\u0428\\u041e\\u0421\\u0421\\u0415"}',
                'image' => 'RPy6tFWUdvwB2a5uX5hzbZ9EXstRzrvzXn6O4ggV.jpg',
                'new' => true,
                'address' => '{"ua":"\\u0421\\u0430\\u043b\\u0442\\u0456\\u0432\\u0441\\u044c\\u043a\\u0435 \\u0448\\u043e\\u0441\\u0435, 100","ru":"\\u0421\\u0430\\u043b\\u0442\\u043e\\u0432\\u0441\\u043a\\u043e\\u0435 \\u0448\\u043e\\u0441\\u0441\\u0435, 100"}',
                'lat' => '49.98618753995183',
                'lng' => '36.31992081146734',
                'phone' => '[{"layout":"phone","key":"WzqICeGUr7lVgVgI","attributes":{"phone":"063-305-45-54"}},{"layout":"phone","key":"KvpeiJemVyuE6TGE","attributes":{"phone":"050-305-45-54"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-Сб с 8:00 до 21:00 Вс с 08:00 до 18:00',
            ),
            8 => 
            array (
                'id' => 10,
                'slug' => 'pulse-gym-na-gagarina',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u0413\\u0410\\u0413\\u0410\\u0420\\u0406\\u041d\\u0410","ru":"PULSE GYM \\u041d\\u0410 \\u0413\\u0410\\u0413\\u0410\\u0420\\u0418\\u041d\\u0410"}',
                'image' => 'n1WbXdomN4rWtyjiYWOjF7AVbpo6UbZyAviuzhCX.jpg',
                'new' => false,
                'address' => '{"ua":"\\u043f\\u0440-\\u0442 \\u0413\\u0430\\u0433\\u0430\\u0440\\u0456\\u043d\\u0430, 54-\\u0410","ru":"\\u043f\\u0440-\\u0442 \\u0413\\u0430\\u0433\\u0430\\u0440\\u0438\\u043d\\u0430, 54-\\u0410"}',
                'lat' => '49.975381077569004',
                'lng' => '36.252755284483044',
                'phone' => '[{"layout":"phone","key":"5TFxGhjSJlGBJNtG","attributes":{"phone":"066-470-98-88"}},{"layout":"phone","key":"N9wNUXFeuWeHHyU0","attributes":{"phone":"073-022-38-88"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-Сб с 8:00 до 21:00 Вс-с 08:00 до 18:00',
            ),
            9 => 
            array (
                'id' => 12,
                'slug' => 'pulse-gym-na-oleksiyivci-1',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u041e\\u041b\\u0415\\u041a\\u0421\\u0406\\u0407\\u0412\\u0426\\u0406","ru":"PULSE GYM \\u041d\\u0410 \\u0410\\u041b\\u0415\\u041a\\u0421\\u0415\\u0415\\u0412\\u041a\\u0415"}',
                'image' => 'yGkkB9eL95WxlgWZ9mQ8nDdh6YXhvj0vhwm44de7.jpg',
                'new' => false,
                'address' => '{"ua":"\\u0432\\u0443\\u043b. \\u0410\\u0445\\u0441\\u0430\\u0440\\u043e\\u0432\\u0430, 13-\\u0410","ru":"\\u0443\\u043b. \\u0410\\u0445\\u0441\\u0430\\u0440\\u043e\\u0432\\u0430, 13-\\u0410"}',
                'lat' => '50.051461426180474',
                'lng' => '36.20946698263415',
                'phone' => '[{"layout":"phone","key":"oCoujVzya80GwTg0","attributes":{"phone":"050-070-15-11"}},{"layout":"phone","key":"WtuRgV6YuYkGjtbW","attributes":{"phone":"097-675-91-96"}}]',
                'created_at' => '2023-01-19 13:03:37',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-Сб с 8:00 до 22:00 Вс с 8:00 до 20:00',
            ),
            10 => 
            array (
                'id' => 53,
                'slug' => 'pulse-gym-na-uborevica',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u0423\\u0411\\u041e\\u0420\\u0415\\u0412\\u0418\\u0427\\u0410","ru":"PULSE GYM \\u041d\\u0410 \\u0423\\u0411\\u041e\\u0420\\u0415\\u0412\\u0418\\u0427\\u0410"}',
                'image' => 'iyLZQpzD37gtmEd3fABF5yaFjiy2T3iW8fqyqPf5.jpg',
                'new' => false,
                'address' => '{"ua":"\\u0432\\u0443\\u043b. \\u0411\\u0443\\u0447\\u043c\\u0438, 1\\u0431 \\u0422\\u041e\\u0426 \\"\\u041a\\u043e\\u043d\\u0442\\u0438\\u043d\\u0435\\u043d\\u0442\\"","ru":"\\u0443\\u043b. \\u0411\\u0443\\u0447\\u043c\\u044b, 1\\u0431 \\u0422\\u041e\\u0426 \\"\\u041a\\u043e\\u043d\\u0442\\u0438\\u043d\\u0435\\u043d\\u0442\\""}',
                'lat' => '50.03112716099143',
                'lng' => '36.342725182633274',
                'phone' => '[{"layout":"phone","key":"yxEWNsmsxWzSaKw1","attributes":{"phone":"066-104-93-93"}},{"layout":"phone","key":"dFD5bKuSG9PIVgo8","attributes":{"phone":"098-104-93-93"}}]',
                'created_at' => '2023-01-20 08:19:12',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-Сб с 8:00 до 22:00 Вс с 8:00 до 20:00',
            ),
            11 => 
            array (
                'id' => 54,
                'slug' => 'pulse-gym-na-studentskii',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u0421\\u0422\\u0423\\u0414\\u0415\\u041d\\u0422\\u0421\\u042c\\u041a\\u0406\\u0419","ru":"PULSE GYM \\u041d\\u0410 \\u0421\\u0422\\u0423\\u0414\\u0415\\u041d\\u0427\\u0415\\u0421\\u041a\\u041e\\u0419"}',
                'image' => 'A7nVaF1yfHNPPJFoRBYU3UztwtCVtSK8nC38HHN7.jpg',
                'new' => false,
                'address' => '{"ua":"\\u0432\\u0443\\u043b. \\u0412\\u0430\\u043b\\u0435\\u043d\\u0442\\u0438\\u043d\\u0456\\u0432\\u0441\\u044c\\u043a\\u0430, 2-\\u0410","ru":"\\u0443\\u043b. \\u0412\\u0430\\u043b\\u0435\\u043d\\u0442\\u0438\\u043d\\u043e\\u0432\\u0441\\u043a\\u0430\\u044f, 2-\\u0410"}',
                'lat' => '50.02148959833089',
                'lng' => '36.31726769797697',
                'phone' => '[{"layout":"phone","key":"4g9gI26vCbW43Wcd","attributes":{"phone":"068-87-997-87"}},{"layout":"phone","key":"4sLVI6cRE2zXlbVV","attributes":{"phone":"050-87-949-87"}}]',
                'created_at' => '2023-01-20 08:45:15',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-Сб с 8:00 до 21:00 Вс-с 8:00 до 18:00',
            ),
            12 => 
            array (
                'id' => 58,
                'slug' => 'pulse-gym-na-xtz',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u0425\\u0422\\u0417","ru":"PULSE GYM \\u041d\\u0410 \\u0425\\u0422\\u0417"}',
                'image' => 'oUmSrOs2Hs5OKR23Va6r1k8fmrJVumcLVaLBMkjI.jpg',
                'new' => false,
                'address' => '{"ua":"\\u043f\\u0440-\\u0442. \\u041e\\u043b\\u0435\\u043a\\u0441\\u0430\\u043d\\u0434\\u0440\\u0456\\u0432\\u0441\\u044c\\u043a\\u0438\\u0439, 99","ru":"\\u043f\\u0440-\\u0442. \\u0410\\u043b\\u0435\\u043a\\u0441\\u0430\\u043d\\u0434\\u0440\\u043e\\u0432\\u0441\\u043a\\u0438\\u0439, 99"}',
                'lat' => '49.94143127481639',
                'lng' => '36.375691828661765',
                'phone' => '[{"layout":"phone","key":"6hXTCGKCgi25DC1u","attributes":{"phone":"068-242-29-20"}}]',
                'created_at' => '2023-01-20 10:01:36',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-СБ с 8:00 до 21:00 Вс с 08:00 до 18:00',
            ),
            13 => 
            array (
                'id' => 1,
                'slug' => 'pulse-gym-na-odeskii',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u041e\\u0414\\u0415\\u0421\\u042c\\u041a\\u0406\\u0419","ru":"PULSE GYM \\u041d\\u0410 \\u041e\\u0414\\u0415\\u0421\\u0421\\u041a\\u041e\\u0419"}',
                'image' => 'dB5AB0KrNWgtL1GFvEyvhf6HpbTbj3jrQHplOZPh.jpg',
                'new' => true,
                'address' => '{"ua":"\\u043f\\u0440-\\u0442. \\u0413\\u0430\\u0433\\u0430\\u0440\\u0456\\u043d\\u0430, 167","ru":"\\u043f\\u0440-\\u0442. \\u0413\\u0430\\u0433\\u0430\\u0440\\u0438\\u043d\\u0430, 167"}',
                'lat' => '49.95055907630252',
                'lng' => '36.26086502871161',
                'phone' => '[{"layout":"phone","key":"IQQk451BEmadHKem","attributes":{"phone":"050 465 1435"}},{"layout":"phone","key":"Ap0boMDr5zu8g3lj","attributes":{"phone":"073 465 1435"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-Сб с 8:00 до 21:00 Нд-с 08:00 до 18:00',
            ),
            14 => 
            array (
                'id' => 2,
                'slug' => 'pulse-gym-na-levadi',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u041b\\u0415\\u0412\\u0410\\u0414\\u0406","ru":"PULSE GYM \\u041d\\u0410 \\u041b\\u0415\\u0412\\u0410\\u0414\\u0415"}',
                'image' => 'BcNdEUYb0Qpm32qifGSjdiiEA8Z4WlggwGgK5TxG.jpg',
                'new' => false,
                'address' => '{"ua":"\\u0432\\u0443\\u043b. \\u041c\\u0430\\u043b\\u043e\\u043c\'\\u044f\\u0441\\u043d\\u0438\\u0446\\u044c\\u043a\\u0430, 2\\u0410","ru":"\\u0443\\u043b. \\u041c\\u0430\\u043b\\u043e\\u043c\\u044f\\u0441\\u043d\\u0438\\u0446\\u043a\\u0430\\u044f, 2\\u0410"}',
                'lat' => '49.98349445421346',
                'lng' => '36.24508891146735',
                'phone' => '[{"layout":"phone","key":"zyPQ8Pa1iZPHPyjr","attributes":{"phone":"095-29-000-79"}},{"layout":"phone","key":"S0u0a5bmeMITQMMP","attributes":{"phone":"073-29-000-79"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-Сб с 8:00 до 22:00 Вс с 8:00 до 20:00',
            ),
            15 => 
            array (
                'id' => 3,
                'slug' => 'pulse-gym-u-selishhi-zukovskogo',
                'name' => '{"ua":"PULSE GYM \\u0423 \\u0421\\u0415\\u041b\\u0418\\u0429\\u0406 \\u0416\\u0423\\u041a\\u041e\\u0412\\u0421\\u042c\\u041a\\u041e\\u0413\\u041e","ru":"PULSE GYM \\u041d\\u0410 \\u041f\\u041e\\u0421\\u0415\\u041b\\u041a\\u0415 \\u0416\\u0423\\u041a\\u041e\\u0412\\u0421\\u041a\\u041e\\u0413\\u041e"}',
                'image' => 'OBgrK2CkJw5U0fLKTpDHu8SUXnhOQumoxH2AfMlU.jpg',
                'new' => false,
                'address' => '{"ua":"\\u0432\\u0443\\u043b. \\u0410\\u0441\\u0442\\u0440\\u043e\\u043d\\u043e\\u043c\\u0456\\u0447\\u043d\\u0430, 27-\\u0410","ru":"\\u0443\\u043b. \\u0410\\u0441\\u0442\\u0440\\u043e\\u043d\\u043e\\u043c\\u0438\\u0447\\u0435\\u0441\\u043a\\u0430\\u044f, 27-\\u0410"}',
                'lat' => '50.0489478132045',
                'lng' => '36.29008638277784',
                'phone' => '[{"layout":"phone","key":"3NX5jZJzmRVa9LRl","attributes":{"phone":"099-703-70-07"}},{"layout":"phone","key":"f6Hb7SL9AM28DLx6","attributes":{"phone":"073-703-70-07"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн, Ср,,Пт 9:00 до 19:00 Сб-ВС - Выходной',
            ),
            16 => 
            array (
                'id' => 7,
                'slug' => 'pulse-gym-na-xolodnii-gori',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u0425\\u041e\\u041b\\u041e\\u0414\\u041d\\u0406\\u0419 \\u0413\\u041e\\u0420\\u0406","ru":"PULSE GYM \\u041d\\u0410 \\u0425\\u041e\\u041b\\u041e\\u0414\\u041d\\u041e\\u0419 \\u0413\\u041e\\u0420\\u0415"}',
                'image' => 'uQsOesU1RvkrYwtChmYlTuUH5xXb1O8ZDezmau9Y.jpg',
                'new' => true,
                'address' => '{"ua":"\\u0432\\u0443\\u043b. \\u041f\\u043e\\u043b\\u0442\\u0430\\u0432\\u0441\\u044c\\u043a\\u0438\\u0439 \\u0448\\u043b\\u044f\\u0445, 115","ru":"\\u0443\\u043b. \\u041f\\u043e\\u043b\\u0442\\u0430\\u0432\\u0441\\u043a\\u0438\\u0439 \\u0448\\u043b\\u044f\\u0445, 115"}',
                'lat' => '49.98545584705696',
                'lng' => '36.191698228663654',
                'phone' => '[{"layout":"phone","key":"o61RjHRkVFNoKvqw","attributes":{"phone":"066-814-0333"}},{"layout":"phone","key":"iOxcUJ6JO5g5jXyZ","attributes":{"phone":"067-814-0333"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-Сб с 9:00 до 20:00 Вс-с 10:00 до 16:00',
            ),
            17 => 
            array (
                'id' => 4,
                'slug' => 'pulse-gym-na-saltivci',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u0421\\u0410\\u041b\\u0422\\u0406\\u0412\\u0426\\u0406","ru":"PULSE GYM \\u041d\\u0410 \\u0421\\u0410\\u041b\\u0422\\u041e\\u0412\\u041a\\u0415"}',
                'image' => 'BIMobAWqGEZ53UAnwhe0fZE8lmgcyFpBBd3mowYL.jpg',
                'new' => true,
                'address' => '{"ua":"\\u043f\\u0440-\\u0442. \\u0422\\u0440\\u0430\\u043a\\u0442\\u043e\\u0440\\u043e\\u0431\\u0443\\u0434\\u0456\\u0432\\u043d\\u0438\\u043a\\u0456\\u0432, 107-\\u0412","ru":"\\u043f\\u0440-\\u0442. \\u0422\\u0440\\u0430\\u043a\\u0442\\u043e\\u0440\\u043e\\u0441\\u0442\\u0440\\u043e\\u0438\\u0442\\u0435\\u043b\\u0435\\u0439, 107-\\u0412"}',
                'lat' => '50.02436647549349',
                'lng' => '36.36483399701628',
                'phone' => '[{"layout":"phone","key":"rRb1o9neGDVmjbmT","attributes":{"phone":"073-373-222-7"}}]',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-Пт с 9:00 до 20:00 Сб-с 10:00 до 16:00 Вс выходной',
            ),
            18 => 
            array (
                'id' => 56,
                'slug' => 'pulse-gym-na-ploshhi-povstannia',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u041f\\u041b\\u041e\\u0429\\u0406 \\u041f\\u041e\\u0412\\u0421\\u0422\\u0410\\u041d\\u041d\\u042f","ru":"PULSE GYM \\u041d\\u0410 \\u041f\\u041b\\u041e\\u0429\\u0410\\u0414\\u0418 \\u0412\\u041e\\u0421\\u0421\\u0422\\u0410\\u041d\\u0418\\u042f"}',
                'image' => 'kS4fZUs1AcCpR7FItaDrS0w8ychQtgHgXfj7cd7L.jpg',
                'new' => false,
                'address' => '{"ua":"\\u0432\\u0443\\u043b. \\u0410\\u043a\\u0430\\u0434\\u0435\\u043c\\u0456\\u043a\\u0430 \\u041f\\u0430\\u0432\\u043b\\u043e\\u0432\\u0430, 20-\\u0431","ru":"\\u0443\\u043b. \\u0410\\u043a\\u0430\\u0434\\u0435\\u043c\\u0438\\u043a\\u0430 \\u041f\\u0430\\u0432\\u043b\\u043e\\u0432\\u0430, 20-\\u0431"}',
                'lat' => '49.98602044858137',
                'lng' => '36.27886911146734',
                'phone' => '[{"layout":"phone","key":"uAVWSI5Lcd3Fslbc","attributes":{"phone":"050-94-000-32"}},{"layout":"phone","key":"EpXANHjtF6w73lW5","attributes":{"phone":"068-18-000-32"}}]',
                'created_at' => '2023-01-20 09:25:51',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-Сб с 8:00 до 21:00 Вс с 08:00 до 18:00',
            ),
            19 => 
            array (
                'id' => 11,
                'slug' => 'pulse-gym-na-pivnicnii-saltivci',
                'name' => '{"ua":"PULSE GYM \\u041d\\u0410 \\u041f\\u0406\\u0412\\u041d\\u0406\\u0427\\u041d\\u0406\\u0419 \\u0421\\u0410\\u041b\\u0422\\u0406\\u0412\\u0426\\u0406","ru":"PULSE GYM \\u041d\\u0410 \\u0421\\u0415\\u0412\\u0415\\u0420\\u041d\\u041e\\u0419 \\u0421\\u0410\\u041b\\u0422\\u041e\\u0412\\u041a\\u0415"}',
                'image' => 'HUlJzDRRNzOB9HcV6m5UdtSCDLNZ7RkmZVrZ9ekD.jpg',
                'new' => false,
                'address' => '{"ua":"\\u0432\\u0443\\u043b. \\u041d\\u0430\\u0442\\u0430\\u043b\\u0456\\u0457 \\u0423\\u0436\\u0432\\u0456\\u0439, 58 \\u0422\\u0426 \\"\\u041f\\u0456\\u0432\\u043d\\u0456\\u0447\\u043d\\u0438\\u0439\\"","ru":"\\u0443\\u043b. \\u041d\\u0430\\u0442\\u0430\\u043b\\u044c\\u0438 \\u0423\\u0436\\u0432\\u0438\\u0439, 58 \\u0422\\u0426 \\"\\u0421\\u0435\\u0432\\u0435\\u0440\\u043d\\u044b\\u0439\\""}',
                'lat' => '50.045540786275474',
                'lng' => '36.35409597429853',
                'phone' => '[{"layout":"phone","key":"mOVW24HOK2tbp2UL","attributes":{"phone":"095-646-222-9"}},{"layout":"phone","key":"iYeqoKmVHnqOmCNI","attributes":{"phone":"068-653-222-9"}}]',
                'created_at' => '2023-01-19 12:20:27',
                'updated_at' => '2023-01-31 09:52:49',
                'scheduler' => 'Пн-Сб с 8:00 до 22:00 Вс с 8:00 до 20:00',
            ),
        ));
        
        
    }
}