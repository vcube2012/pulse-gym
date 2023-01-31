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
                'title' => '{"ua":"PULSE GYM","ru":"PULSE GYM"}',
                'sub_title' => '{"ua":"\\u041b\\u0410\\u0421\\u041a\\u0410\\u0412\\u041e \\u041f\\u0420\\u041e\\u0421\\u0418\\u041c\\u041e \\u0412","ru":"\\u0414\\u041e\\u0411\\u0420\\u041e \\u041f\\u041e\\u0416\\u0410\\u041b\\u041e\\u0412\\u0410\\u0422\\u042c \\u0412"}',
                'mobile_title' => '{"ua":"\\u0413\\u041e\\u041b\\u041e\\u0412\\u041d\\u0410 \\u0412\\u0421\\u0406 \\u041a\\u041b\\u0423\\u0411\\u0418 \\u0412\\u0406\\u0414\\u0413\\u0423\\u041a\\u0418 \\u041a\\u041e\\u041d\\u0422\\u0410\\u041a\\u0422\\u0418 \\u0411\\u041b\\u041e\\u0413 \\u0424\\u041e\\u0422\\u041e \\u041f\\u0420\\u0410\\u0412\\u0418\\u041b\\u0410 \\u041d\\u0410\\u0412\\u0406\\u0414\\u0410\\u041d\\u041d\\u042f \\u041c\\u0415\\u0420\\u0415\\u0416\\u0410 \\u0421\\u041f\\u041e\\u0420\\u0422\\u0418\\u0412\\u041d\\u0418\\u0425 \\u041a\\u041b\\u0423\\u0411\\u0406\\u0412 \\u0423 \\u0425\\u0410\\u0420\\u041a\\u0406\\u0412\\u0406","ru":"\\u0413\\u041b\\u0410\\u0412\\u041d\\u0410\\u042f \\u0412\\u0421\\u0415 \\u041a\\u041b\\u0423\\u0411\\u042b \\u041e\\u0422\\u0417\\u042b\\u0412\\u042b \\u041a\\u041e\\u041d\\u0422\\u0410\\u041a\\u0422\\u042b \\u0411\\u041b\\u041e\\u0413 \\u0424\\u041e\\u0422\\u041e \\u041f\\u0420\\u0410\\u0412\\u0418\\u041b\\u0410 \\u041f\\u041e\\u0421\\u0415\\u0429\\u0415\\u041d\\u0418\\u042f \\u0421\\u0415\\u0422\\u042c \\u0421\\u041f\\u041e\\u0420\\u0422\\u0418\\u0412\\u041d\\u042b\\u0425 \\u041a\\u041b\\u0423\\u0411\\u041e\\u0412 \\u0412 \\u0425\\u0410\\u0420\\u042c\\u041a\\u041e\\u0412\\u0415"}',
                'description' => '{"ua":"\\u0412\\u0436\\u0435 \\u043f\\u043e\\u043d\\u0430\\u0434 278 \\u043f\\u043e\\u0441\\u0442\\u0456\\u0439\\u043d\\u0438\\u0445 \\u0432\\u0456\\u0434\\u0432\\u0456\\u0434\\u0443\\u0432\\u0430\\u0447\\u0456\\u0432 Puls Gym \\u0440\\u0430\\u0434\\u044f\\u0442\\u044c \\u043d\\u0430\\u0441 \\u0441\\u0432\\u043e\\u0457\\u043c \\u0434\\u0440\\u0443\\u0437\\u044f\\u043c \\u0442\\u0430 \\u0437\\u043d\\u0430\\u0439\\u043e\\u043c\\u0438\\u043c","ru":"\\u0423\\u0436\\u0435 \\u0431\\u043e\\u043b\\u0435\\u0435 278 \\u043f\\u043e\\u0441\\u0442\\u043e\\u044f\\u043d\\u043d\\u044b\\u0445 \\u043f\\u043e\\u0441\\u0435\\u0442\\u0438\\u0442\\u0435\\u043b\\u0435\\u0439 Puls Gym \\u0441\\u043e\\u0432\\u0435\\u0442\\u0443\\u044e\\u0442 \\u043d\\u0430\\u0441 \\u0441\\u0432\\u043e\\u0438\\u043c \\u0434\\u0440\\u0443\\u0437\\u044c\\u044f\\u043c \\u0438 \\u0437\\u043d\\u0430\\u043a\\u043e\\u043c\\u044b\\u043c"}',
                'images' => '[{"layout":"images","key":"BHjGNGeWJvwX3UnM","attributes":{"image":"TPRSsjQJt6C9Wj3kzvApGRTSekLwV2u8LnCPiizl.png"}},{"layout":"images","key":"xVEqsEesJrR5Ugt3","attributes":{"image":"qws3IO0x00AaZ9GCjs9sGCyTVQey32R2Lfn7IxLE.png"}},{"layout":"images","key":"GzgKHjZHbSOlTw8C","attributes":{"image":"UQWAgPLtuyaOThWIW51R3LnxSbATEgsJzu2iObuj.png"}}]',
                'created_at' => '2023-01-24 14:26:28',
                'updated_at' => '2023-01-31 09:55:40',
            ),
        ));
        
        
    }
}