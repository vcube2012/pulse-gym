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
                'title' => '{"uk":"PULSE GYM","ru":"PULSE GYM"}',
                'sub_title' => '{"uk":"\\u041b\\u0410\\u0421\\u041a\\u0410\\u0412\\u041e \\u041f\\u0420\\u041e\\u0421\\u0418\\u041c\\u041e \\u0412","ru":"\\u0414\\u041e\\u0411\\u0420\\u041e \\u041f\\u041e\\u0416\\u0410\\u041b\\u041e\\u0412\\u0410\\u0422\\u042c \\u0412"}',
                'mobile_title' => '{"uk":"\\u041c\\u0435\\u0440\\u0435\\u0436\\u0430 \\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0432\\u043d\\u0438\\u0445 \\u043a\\u043b\\u0443\\u0431\\u0456\\u0432 \\u0443 \\u0425\\u0430\\u0440\\u043a\\u043e\\u0432\\u0456","ru":"\\u0421\\u0435\\u0442\\u044c \\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0432\\u043d\\u044b\\u0445 \\u043a\\u043b\\u0443\\u0431\\u043e\\u0432 \\u0432 \\u0425\\u0430\\u0440\\u044c\\u043a\\u043e\\u0432\\u0435"}',
                'description' => '{"uk":"\\u0412\\u0436\\u0435 \\u043f\\u043e\\u043d\\u0430\\u0434 \\u0442\\u0438\\u0441\\u044f\\u0447\\u0443 \\u043f\\u043e\\u0441\\u0442\\u0456\\u0439\\u043d\\u0438\\u0445 \\u0432\\u0456\\u0434\\u0432\\u0456\\u0434\\u0443\\u0432\\u0430\\u0447\\u0456\\u0432 Pulse Gym \\u0440\\u0430\\u0434\\u044f\\u0442\\u044c \\u043d\\u0430\\u0441 \\u0441\\u0432\\u043e\\u0457\\u043c \\u0434\\u0440\\u0443\\u0437\\u044f\\u043c \\u0442\\u0430 \\u0437\\u043d\\u0430\\u0439\\u043e\\u043c\\u0438\\u043c","ru":"\\u0423\\u0436\\u0435 \\u0431\\u043e\\u043b\\u0435\\u0435 \\u0442\\u044b\\u0441\\u044f\\u0447\\u0438 \\u043f\\u043e\\u0441\\u0442\\u043e\\u044f\\u043d\\u043d\\u044b\\u0445 \\u043f\\u043e\\u0441\\u0435\\u0442\\u0438\\u0442\\u0435\\u043b\\u0435\\u0439 Pulse Gym \\u0441\\u043e\\u0432\\u0435\\u0442\\u0443\\u044e\\u0442 \\u043d\\u0430\\u0441 \\u0441\\u0432\\u043e\\u0438\\u043c \\u0434\\u0440\\u0443\\u0437\\u044c\\u044f\\u043c \\u0438 \\u0437\\u043d\\u0430\\u043a\\u043e\\u043c\\u044b\\u043c"}',
                'images' => '[{"layout":"images","key":"BHjGNGeWJvwX3UnM","attributes":{"image":"9bXnOdqTXWDv27FyfYDWluWYu4JHRLmN9G7okj5o.png"}},{"layout":"images","key":"xVEqsEesJrR5Ugt3","attributes":{"image":"jrTRUVkRF96FhjtCoat7Vjc5x6ioH8w2BKrlr2mB.png"}},{"layout":"images","key":"GzgKHjZHbSOlTw8C","attributes":{"image":"7MF74IeYldjSV6P0BFq088j2a8vAWF0lE5NNl3NM.png"}}]',
                'created_at' => '2023-01-24 14:26:28',
                'updated_at' => '2023-03-09 08:47:06',
            ),
        ));
        
        
    }
}