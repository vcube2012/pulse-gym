<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SmartfitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('smartfits')->delete();

        \DB::table('smartfits')->insert(array (
            0 =>
            array (
                'id' => 331,
                'slug' => 'smart-fit',
                'name' => '{"ru":"SMART FIT \\u041d\\u0410 \\u0421\\u0410\\u041b\\u0422\\u041e\\u0412\\u041a\\u0415","uk":"SMART FIT \\u041d\\u0410 \\u0421\\u0410\\u041b\\u0422\\u0406\\u0412\\u0426\\u0406"}',
                'top_title' => '{"ru":"\\u0414\\u0435\\u0432\\u0438\\u0437 \\u043d\\u0430\\u0448\\u0435\\u0433\\u043e \\u0446\\u0435\\u043d\\u0442\\u0440\\u0430 \\u00ab\\u0414\\u0432\\u0438\\u0436\\u0435\\u043d\\u0438\\u0435 \\u0431\\u0435\\u0437 \\u043e\\u0433\\u0440\\u0430\\u043d\\u0438\\u0447\\u0435\\u043d\\u0438\\u0439\\u00bb","uk":"\\u0414\\u0435\\u0432\\u0456\\u0437 \\u043d\\u0430\\u0448\\u043e\\u0433\\u043e \\u0446\\u0435\\u043d\\u0442\\u0440\\u0443 \\u00ab\\u0420\\u0443\\u0445 \\u0431\\u0435\\u0437 \\u043e\\u0431\\u043c\\u0435\\u0436\\u0435\\u043d\\u044c\\u00bb"}',
                'text' => '{"ru":"<div>\\u041d\\u0430\\u0448\\u0430 \\u0440\\u0435\\u0430\\u0431\\u0438\\u043b\\u0438\\u0442\\u0430\\u0446\\u0438\\u044f \\u2014 \\u044d\\u0442\\u043e \\u043a\\u043e\\u043c\\u043f\\u043b\\u0435\\u043a\\u0441 \\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0432\\u043d\\u043e \\u2014 \\u043c\\u0435\\u0434\\u0438\\u0446\\u0438\\u043d\\u0441\\u043a\\u0438\\u0445, \\u043f\\u0435\\u0434\\u0430\\u0433\\u043e\\u0433\\u0438\\u0447\\u0435\\u0441\\u043a\\u0438\\u0445, \\u043f\\u0441\\u0438\\u0445\\u043e\\u043b\\u043e\\u0433\\u0438\\u0447\\u0435\\u0441\\u043a\\u0438\\u0445 \\u0438 \\u0438\\u043d\\u044b\\u0445 \\u0432\\u0438\\u0434\\u043e\\u0432 \\u043c\\u0435\\u0440\\u043e\\u043f\\u0440\\u0438\\u044f\\u0442\\u0438\\u0439, \\u043d\\u0430\\u043f\\u0440\\u0430\\u0432\\u043b\\u0435\\u043d\\u043d\\u044b\\u0445 \\u043d\\u0430 \\u043c\\u0430\\u043a\\u0441\\u0438\\u043c\\u0430\\u043b\\u044c\\u043d\\u043e \\u0432\\u043e\\u0437\\u043c\\u043e\\u0436\\u043d\\u043e\\u0435 \\u0432\\u043e\\u0441\\u0441\\u0442\\u0430\\u043d\\u043e\\u0432\\u043b\\u0435\\u043d\\u0438\\u0435 \\u0438\\u043b\\u0438 \\u043a\\u043e\\u043c\\u043f\\u0435\\u043d\\u0441\\u0430\\u0446\\u0438\\u044e \\u043d\\u0430\\u0440\\u0443\\u0448\\u0435\\u043d\\u043d\\u044b\\u0445 \\u0438\\u043b\\u0438 \\u043f\\u043e\\u043b\\u043d\\u043e\\u0441\\u0442\\u044c\\u044e \\u0443\\u0442\\u0440\\u0430\\u0447\\u0435\\u043d\\u043d\\u044b\\u0445, \\u0432 \\u0440\\u0435\\u0437\\u0443\\u043b\\u044c\\u0442\\u0430\\u0442\\u0435 \\u0431\\u043e\\u043b\\u0435\\u0437\\u043d\\u0438 \\u0438\\u043b\\u0438 \\u0442\\u0440\\u0430\\u0432\\u043c\\u044b, \\u043d\\u043e\\u0440\\u043c\\u0430\\u043b\\u044c\\u043d\\u044b\\u0445 \\u043f\\u0441\\u0438\\u0445\\u0438\\u0447\\u0435\\u0441\\u043a\\u0438\\u0445 \\u0438 \\u0444\\u0438\\u0437\\u0438\\u043e\\u043b\\u043e\\u0433\\u0438\\u0447\\u0435\\u0441\\u043a\\u0438\\u0445 \\u0444\\u0443\\u043d\\u043a\\u0446\\u0438\\u0439 \\u0447\\u0435\\u043b\\u043e\\u0432\\u0435\\u0447\\u0435\\u0441\\u043a\\u043e\\u0433\\u043e \\u043e\\u0440\\u0433\\u0430\\u043d\\u0438\\u0437\\u043c\\u0430, \\u0435\\u0433\\u043e \\u0442\\u0440\\u0443\\u0434\\u043e\\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u043d\\u043e\\u0441\\u0442\\u0438.<br><br><br><\\/div><h1>\\u0412 \\u043d\\u0430\\u0448\\u0435\\u043c \\u0446\\u0435\\u043d\\u0442\\u0440\\u0435 \\u043c\\u044b \\u043c\\u043e\\u0436\\u0435\\u043c \\u043f\\u043e\\u043c\\u043e\\u0447\\u044c \\u0412\\u0430\\u043c \\u0441 \\u0442\\u0430\\u043a\\u0438\\u043c\\u0438 \\u043f\\u0440\\u043e\\u0431\\u043b\\u0435\\u043c\\u0430\\u043c\\u0438:<\\/h1><ul><li>\\u041e\\u0441\\u0442\\u0435\\u043e\\u0445\\u043e\\u043d\\u0434\\u0440\\u043e\\u0437 \\u043f\\u043e\\u0437\\u0432\\u043e\\u043d\\u043e\\u0447\\u043d\\u0438\\u043a\\u0430<\\/li><li>\\u0413\\u0440\\u044b\\u0436\\u0438<\\/li><li>\\u041f\\u0440\\u043e\\u0442\\u0440\\u0443\\u0437\\u0438\\u0438 \\u043c\\u0435\\u0436\\u043f\\u043e\\u0437\\u0432\\u043e\\u043d\\u043a\\u043e\\u0432\\u044b\\u0445 \\u0434\\u0438\\u0441\\u043a\\u043e\\u0432<\\/li><li>\\u0410\\u0440\\u0442\\u0440\\u043e\\u0437 \\u043a\\u043e\\u043b\\u0435\\u043d\\u043d\\u044b\\u0445, \\u0442\\u0430\\u0437\\u043e\\u0431\\u0435\\u0434\\u0440\\u0435\\u043d\\u043d\\u044b\\u0445 \\u0441\\u0443\\u0441\\u0442\\u0430\\u0432\\u043e\\u0432<\\/li><li>\\u041d\\u0430\\u0440\\u0443\\u0448\\u0435\\u043d\\u0438\\u0435 \\u043e\\u0441\\u0430\\u043d\\u043a\\u0438, \\u0441\\u043a\\u043e\\u043b\\u0438\\u043e\\u0437<\\/li><li>\\u0421\\u0438\\u043d\\u0434\\u0440\\u043e\\u043c \\u043f\\u043e\\u0437\\u0432\\u043e\\u043d\\u043e\\u0447\\u043d\\u043e\\u0439 \\u0430\\u0440\\u0442\\u0435\\u0440\\u0438\\u0438, \\u0433\\u043e\\u043b\\u043e\\u0432\\u043d\\u0430\\u044f \\u0431\\u043e\\u043b\\u044c, \\u0412\\u0421\\u0414, \\u0448\\u0435\\u0439\\u043d\\u0430\\u044f \\u043c\\u0438\\u0433\\u0440\\u0435\\u043d\\u044c \\u0418\\u0448\\u0438\\u0430\\u0441, \\u0441\\u0430\\u043a\\u0440\\u043e\\u0438\\u043b\\u0435\\u0438\\u0442<\\/li><\\/ul><div><br><br>\\u0413\\u0440\\u0430\\u043c\\u043e\\u0442\\u043d\\u044b\\u0439 \\u0442\\u0440\\u0435\\u043d\\u0438\\u043d\\u0433 \\u043f\\u0440\\u0438\\u0432\\u0435\\u0434\\u0435\\u0442 \\u043a \\u0443\\u0432\\u0435\\u043b\\u0438\\u0447\\u0435\\u043d\\u0438\\u044e \\u043c\\u0435\\u0436\\u043f\\u043e\\u0437\\u0432\\u043e\\u043d\\u043e\\u0447\\u043d\\u043e\\u0433\\u043e \\u0440\\u0430\\u0441\\u0441\\u0442\\u043e\\u044f\\u043d\\u0438\\u044f, \\u0442\\u0435\\u043c \\u0441\\u0430\\u043c\\u044b\\u043c \\u0443\\u043c\\u0435\\u043d\\u044c\\u0448\\u0430\\u044f \\u0431\\u043e\\u043b\\u0438 \\u0432 \\u043f\\u043e\\u0437\\u0432\\u043e\\u043d\\u043e\\u0447\\u043d\\u0438\\u043a\\u0435 \\u043f\\u0440\\u0438 \\u043e\\u0441\\u0442\\u0435\\u043e\\u0445\\u043e\\u043d\\u0434\\u0440\\u043e\\u0437\\u0435, \\u0433\\u0440\\u044b\\u0436\\u0438, \\u043e\\u0441\\u0442\\u0435\\u043e\\u043f\\u043e\\u0440\\u043e\\u0437\\u0435, \\u0441\\u043a\\u043e\\u043b\\u0438\\u043e\\u0437\\u0435.<br>\\u041c\\u044b \\u043f\\u0440\\u0435\\u0434\\u043b\\u043e\\u0436\\u0438\\u043c \\u0412\\u0430\\u043c \\u043a\\u043e\\u043c\\u043f\\u043b\\u0435\\u043a\\u0441 \\u0443\\u043f\\u0440\\u0430\\u0436\\u043d\\u0435\\u043d\\u0438\\u0439 \\u043d\\u0430\\u043f\\u0440\\u0430\\u0432\\u043b\\u0435\\u043d\\u043d\\u044b\\u0445 \\u043d\\u0430 \\u0443\\u043a\\u0440\\u0435\\u043f\\u043b\\u0435\\u043d\\u0438\\u044f \\u043c\\u044b\\u0448\\u0446 \\u0441\\u043f\\u0438\\u043d\\u044b, \\u0447\\u0442\\u043e \\u043f\\u0440\\u0438\\u0432\\u0435\\u0434\\u0435\\u0442 \\u043a \\u0441\\u043d\\u0438\\u0436\\u0435\\u043d\\u0438\\u044e \\u043d\\u0430\\u0433\\u0440\\u0443\\u0437\\u043a\\u0438 \\u043d\\u0430 \\u043c\\u0435\\u0436\\u043f\\u043e\\u0437\\u0432\\u043e\\u043d\\u043e\\u0447\\u043d\\u044b\\u0435 \\u0434\\u0438\\u0441\\u043a\\u0438 \\u0438 \\u0443\\u043b\\u0443\\u0447\\u0448\\u0438\\u0442 \\u043e\\u0441\\u0430\\u043d\\u043a\\u0443.<br>\\u0422\\u0430\\u043a \\u0436\\u0435 \\u043f\\u0440\\u043e\\u0432\\u043e\\u0434\\u0438\\u043c \\u043b\\u0435\\u0447\\u0435\\u0431\\u043d\\u0443\\u044e \\u0433\\u0438\\u043c\\u043d\\u0430\\u0441\\u0442\\u0438\\u043a\\u0443 \\u043f\\u0440\\u0438 \\u0430\\u0440\\u0442\\u0440\\u0438\\u0442\\u0435 \\u0438 \\u0430\\u0440\\u0442\\u0440\\u043e\\u0437\\u0435 \\u0441\\u0443\\u0441\\u0442\\u0430\\u0432\\u043e\\u0432.<br><br><br>\\u0420\\u0435\\u0433\\u0443\\u043b\\u044f\\u0440\\u043d\\u044b\\u0435 \\u0437\\u0430\\u043d\\u044f\\u0442\\u0438\\u044f \\u0441\\u043f\\u043e\\u0440\\u0442\\u043e\\u043c \\u043e\\u043a\\u0430\\u0437\\u044b\\u0432\\u0430\\u044e\\u0442 \\u0431\\u043b\\u0430\\u0433\\u043e\\u0442\\u0432\\u043e\\u0440\\u043d\\u043e\\u0435 \\u0432\\u043b\\u0438\\u044f\\u043d\\u0438\\u0435 \\u043d\\u0430 \\u043e\\u0440\\u0433\\u0430\\u043d\\u0438\\u0437\\u043c, \\u0443\\u043b\\u0443\\u0447\\u0448\\u0430\\u044e\\u0442 \\u0435\\u0433\\u043e \\u0440\\u0430\\u0431\\u043e\\u0442\\u043e\\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u043d\\u043e\\u0441\\u0442\\u044c, \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u0441\\u0442\\u0432\\u0443\\u044e\\u0442 \\u043f\\u043e\\u0432\\u044b\\u0448\\u0435\\u043d\\u0438\\u044e \\u0435\\u0433\\u043e \\u0441\\u043e\\u043f\\u0440\\u043e\\u0442\\u0438\\u0432\\u043b\\u044f\\u0435\\u043c\\u043e\\u0441\\u0442\\u0438 \\u043f\\u0440\\u043e\\u0441\\u0442\\u0443\\u0434\\u043d\\u044b\\u043c \\u0437\\u0430\\u0431\\u043e\\u043b\\u0435\\u0432\\u0430\\u043d\\u0438\\u044f\\u043c, \\u0438\\u0437\\u0431\\u0430\\u0432\\u043b\\u044f\\u044e\\u0442 \\u043e\\u0442 \\u043b\\u0438\\u0448\\u043d\\u0435\\u0433\\u043e \\u0432\\u0435\\u0441\\u0430 \\u0438 \\u0443\\u043a\\u0440\\u0435\\u043f\\u043b\\u044f\\u044e\\u0442 \\u043a\\u043e\\u0441\\u0442\\u043d\\u0443\\u044e \\u0441\\u0438\\u0441\\u0442\\u0435\\u043c\\u0443 \\u0447\\u0435\\u043b\\u043e\\u0432\\u0435\\u043a\\u0430. \\u0421\\u0438\\u0441\\u0442\\u0435\\u043c\\u0430\\u0442\\u0438\\u0447\\u0435\\u0441\\u043a\\u0438\\u0435 \\u0444\\u0438\\u0437\\u0438\\u0447\\u0435\\u0441\\u043a\\u0438\\u0435 \\u043d\\u0430\\u0433\\u0440\\u0443\\u0437\\u043a\\u0438 \\u043f\\u043e\\u0434 \\u0440\\u0443\\u043a\\u043e\\u0432\\u043e\\u0434\\u0441\\u0442\\u0432\\u043e\\u043c \\u043e\\u043f\\u044b\\u0442\\u043d\\u043e\\u0433\\u043e \\u0442\\u0440\\u0435\\u043d\\u0435\\u0440\\u0430 \\u0442\\u0430\\u043a\\u0436\\u0435 \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u0441\\u0442\\u0432\\u0443\\u044e\\u0442 \\u0443\\u043c\\u0435\\u043d\\u044c\\u0448\\u0435\\u043d\\u0438\\u044e \\u044d\\u043c\\u043e\\u0446\\u0438\\u043e\\u043d\\u0430\\u043b\\u044c\\u043d\\u044b\\u0445 \\u0438 \\u0441\\u0442\\u0440\\u0435\\u0441\\u0441\\u043e\\u0432\\u044b\\u0445 \\u043f\\u0435\\u0440\\u0435\\u0433\\u0440\\u0443\\u0437\\u043e\\u043a \\u043e\\u0440\\u0433\\u0430\\u043d\\u0438\\u0437\\u043c\\u0430.<\\/div>","uk":"<div>\\u041d\\u0430\\u0448\\u0430 \\u0440\\u0435\\u0430\\u0431\\u0456\\u043b\\u0456\\u0442\\u0430\\u0446\\u0456\\u044f \\u2013 \\u0446\\u0435 \\u043a\\u043e\\u043c\\u043f\\u043b\\u0435\\u043a\\u0441 \\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0432\\u043d\\u043e \\u2013 \\u043c\\u0435\\u0434\\u0438\\u0447\\u043d\\u0438\\u0445, \\u043f\\u0435\\u0434\\u0430\\u0433\\u043e\\u0433\\u0456\\u0447\\u043d\\u0438\\u0445, \\u043f\\u0441\\u0438\\u0445\\u043e\\u043b\\u043e\\u0433\\u0456\\u0447\\u043d\\u0438\\u0445 \\u0442\\u0430 \\u0456\\u043d\\u0448\\u0438\\u0445 \\u0432\\u0438\\u0434\\u0456\\u0432 \\u0437\\u0430\\u0445\\u043e\\u0434\\u0456\\u0432, \\u0441\\u043f\\u0440\\u044f\\u043c\\u043e\\u0432\\u0430\\u043d\\u0438\\u0445 \\u043d\\u0430 \\u043c\\u0430\\u043a\\u0441\\u0438\\u043c\\u0430\\u043b\\u044c\\u043d\\u043e \\u043c\\u043e\\u0436\\u043b\\u0438\\u0432\\u0435 \\u0432\\u0456\\u0434\\u043d\\u043e\\u0432\\u043b\\u0435\\u043d\\u043d\\u044f \\u0447\\u0438 \\u043a\\u043e\\u043c\\u043f\\u0435\\u043d\\u0441\\u0430\\u0446\\u0456\\u044e \\u043f\\u043e\\u0440\\u0443\\u0448\\u0435\\u043d\\u0438\\u0445 \\u0447\\u0438 \\u043f\\u043e\\u0432\\u043d\\u0456\\u0441\\u0442\\u044e \\u0432\\u0442\\u0440\\u0430\\u0447\\u0435\\u043d\\u0438\\u0445, \\u0432\\u043d\\u0430\\u0441\\u043b\\u0456\\u0434\\u043e\\u043a \\u0445\\u0432\\u043e\\u0440\\u043e\\u0431\\u0438 \\u0447\\u0438 \\u0442\\u0440\\u0430\\u0432\\u043c\\u0438, \\u043d\\u043e\\u0440\\u043c\\u0430\\u043b\\u044c\\u043d\\u0438\\u0445 \\u043f\\u0441\\u0438\\u0445\\u0456\\u0447\\u043d\\u0438\\u0445 \\u0442\\u0430 \\u0444\\u0456\\u0437\\u0456\\u043e\\u043b\\u043e\\u0433\\u0456\\u0447\\u043d\\u0438\\u0445 \\u0444\\u0443\\u043d\\u043a\\u0446\\u0456\\u0439 \\u043b\\u044e\\u0434\\u0441\\u044c\\u043a\\u043e\\u0433\\u043e \\u043e\\u0440\\u0433\\u0430\\u043d\\u0456\\u0437\\u043c\\u0443, \\u0439\\u043e\\u0433\\u043e \\u043f\\u0440\\u0430\\u0446\\u0435\\u0437\\u0434\\u0430\\u0442\\u043d\\u043e\\u0441\\u0442\\u0456.<br><br><br><\\/div><h1>\\u0423 \\u043d\\u0430\\u0448\\u043e\\u043c\\u0443 \\u0446\\u0435\\u043d\\u0442\\u0440\\u0456 \\u043c\\u0438 \\u043c\\u043e\\u0436\\u0435\\u043c\\u043e \\u0434\\u043e\\u043f\\u043e\\u043c\\u043e\\u0433\\u0442\\u0438 \\u0412\\u0430\\u043c \\u0437 \\u0442\\u0430\\u043a\\u0438\\u043c\\u0438 \\u043f\\u0440\\u043e\\u0431\\u043b\\u0435\\u043c\\u0430\\u043c\\u0438:<\\/h1><ul><li>\\u041e\\u0441\\u0442\\u0435\\u043e\\u0445\\u043e\\u043d\\u0434\\u0440\\u043e\\u0437 \\u0445\\u0440\\u0435\\u0431\\u0442\\u0430<\\/li><li>\\u0413\\u0440\\u0438\\u0436\\u0456<\\/li><li>\\u041f\\u0440\\u043e\\u0442\\u0440\\u0443\\u0437\\u0456\\u0457 \\u043c\\u0456\\u0436\\u0445\\u0440\\u0435\\u0431\\u0446\\u0435\\u0432\\u0438\\u0445 \\u0434\\u0438\\u0441\\u043a\\u0456\\u0432<\\/li><li>\\u0410\\u0440\\u0442\\u0440\\u043e\\u0437 \\u043a\\u043e\\u043b\\u0456\\u043d\\u043d\\u0438\\u0445, \\u043a\\u0443\\u043b\\u044c\\u0448\\u043e\\u0432\\u0438\\u0445 \\u0441\\u0443\\u0433\\u043b\\u043e\\u0431\\u0456\\u0432<\\/li><li>\\u041f\\u043e\\u0440\\u0443\\u0448\\u0435\\u043d\\u043d\\u044f \\u043f\\u043e\\u0441\\u0442\\u0430\\u0432\\u0438, \\u0441\\u043a\\u043e\\u043b\\u0456\\u043e\\u0437<\\/li><li>\\u0421\\u0438\\u043d\\u0434\\u0440\\u043e\\u043c \\u0445\\u0440\\u0435\\u0431\\u0435\\u0442\\u043d\\u043e\\u0457 \\u0430\\u0440\\u0442\\u0435\\u0440\\u0456\\u0457, \\u0433\\u043e\\u043b\\u043e\\u0432\\u043d\\u0438\\u0439 \\u0431\\u0456\\u043b\\u044c, \\u0412\\u0421\\u0414, \\u0448\\u0438\\u0439\\u043d\\u0430 \\u043c\\u0456\\u0433\\u0440\\u0435\\u043d\\u044c \\u0406\\u0448\\u0456\\u0430\\u0441, \\u0441\\u0430\\u043a\\u0440\\u043e\\u0456\\u043b\\u0435\\u0457\\u0442<\\/li><\\/ul><div><br><br>\\u0413\\u0440\\u0430\\u043c\\u043e\\u0442\\u043d\\u0438\\u0439 \\u0442\\u0440\\u0435\\u043d\\u0456\\u043d\\u0433 \\u043f\\u0440\\u0438\\u0437\\u0432\\u0435\\u0434\\u0435 \\u0434\\u043e \\u0437\\u0431\\u0456\\u043b\\u044c\\u0448\\u0435\\u043d\\u043d\\u044f \\u043c\\u0456\\u0436\\u0445\\u0440\\u0435\\u0431\\u0446\\u0435\\u0432\\u043e\\u0457 \\u0432\\u0456\\u0434\\u0441\\u0442\\u0430\\u043d\\u0456, \\u0442\\u0438\\u043c \\u0441\\u0430\\u043c\\u0438\\u043c \\u0437\\u043c\\u0435\\u043d\\u0448\\u0443\\u044e\\u0447\\u0438 \\u0431\\u0456\\u043b\\u044c \\u0443 \\u0445\\u0440\\u0435\\u0431\\u0442\\u0456 \\u043f\\u0440\\u0438 \\u043e\\u0441\\u0442\\u0435\\u043e\\u0445\\u043e\\u043d\\u0434\\u0440\\u043e\\u0437\\u0456, \\u0433\\u0440\\u0438\\u0436\\u0456, \\u043e\\u0441\\u0442\\u0435\\u043e\\u043f\\u043e\\u0440\\u043e\\u0437\\u0456, \\u0441\\u043a\\u043e\\u043b\\u0456\\u043e\\u0437\\u0456.<br>\\u041c\\u0438 \\u0437\\u0430\\u043f\\u0440\\u043e\\u043f\\u043e\\u043d\\u0443\\u0454\\u043c\\u043e \\u0412\\u0430\\u043c \\u043a\\u043e\\u043c\\u043f\\u043b\\u0435\\u043a\\u0441 \\u0432\\u043f\\u0440\\u0430\\u0432 \\u0441\\u043f\\u0440\\u044f\\u043c\\u043e\\u0432\\u0430\\u043d\\u0438\\u0445 \\u043d\\u0430 \\u0437\\u043c\\u0456\\u0446\\u043d\\u0435\\u043d\\u043d\\u044f \\u043c\'\\u044f\\u0437\\u0456\\u0432 \\u0441\\u043f\\u0438\\u043d\\u0438, \\u0449\\u043e \\u043f\\u0440\\u0438\\u0437\\u0432\\u0435\\u0434\\u0435 \\u0434\\u043e \\u0437\\u043d\\u0438\\u0436\\u0435\\u043d\\u043d\\u044f \\u043d\\u0430\\u0432\\u0430\\u043d\\u0442\\u0430\\u0436\\u0435\\u043d\\u043d\\u044f \\u043d\\u0430 \\u043c\\u0456\\u0436\\u0445\\u0440\\u0435\\u0431\\u0446\\u0435\\u0432\\u0456 \\u0434\\u0438\\u0441\\u043a\\u0438 \\u0442\\u0430 \\u043f\\u043e\\u043a\\u0440\\u0430\\u0449\\u0438\\u0442\\u044c \\u043f\\u043e\\u0441\\u0442\\u0430\\u0432\\u0443.<br>\\u0422\\u0430\\u043a\\u043e\\u0436 \\u043f\\u0440\\u043e\\u0432\\u043e\\u0434\\u0438\\u043c\\u043e \\u043b\\u0456\\u043a\\u0443\\u0432\\u0430\\u043b\\u044c\\u043d\\u0443 \\u0433\\u0456\\u043c\\u043d\\u0430\\u0441\\u0442\\u0438\\u043a\\u0443 \\u043f\\u0440\\u0438 \\u0430\\u0440\\u0442\\u0440\\u0438\\u0442\\u0456 \\u0442\\u0430 \\u0430\\u0440\\u0442\\u0440\\u043e\\u0437\\u0456 \\u0441\\u0443\\u0433\\u043b\\u043e\\u0431\\u0456\\u0432.<br><br><br>\\u0420\\u0435\\u0433\\u0443\\u043b\\u044f\\u0440\\u043d\\u0456 \\u0437\\u0430\\u043d\\u044f\\u0442\\u0442\\u044f \\u0441\\u043f\\u043e\\u0440\\u0442\\u043e\\u043c \\u0431\\u043b\\u0430\\u0433\\u043e\\u0442\\u0432\\u043e\\u0440\\u043d\\u043e \\u0432\\u043f\\u043b\\u0438\\u0432\\u0430\\u044e\\u0442\\u044c \\u043d\\u0430 \\u043e\\u0440\\u0433\\u0430\\u043d\\u0456\\u0437\\u043c, \\u043f\\u043e\\u043a\\u0440\\u0430\\u0449\\u0443\\u044e\\u0442\\u044c \\u0439\\u043e\\u0433\\u043e \\u043f\\u0440\\u0430\\u0446\\u0435\\u0437\\u0434\\u0430\\u0442\\u043d\\u0456\\u0441\\u0442\\u044c, \\u0441\\u043f\\u0440\\u0438\\u044f\\u044e\\u0442\\u044c \\u043f\\u0456\\u0434\\u0432\\u0438\\u0449\\u0435\\u043d\\u043d\\u044e \\u0439\\u043e\\u0433\\u043e \\u043e\\u043f\\u0456\\u0440\\u043d\\u043e\\u0441\\u0442\\u0456 \\u043f\\u0440\\u043e\\u0441\\u0442\\u0443\\u0434\\u043d\\u0438\\u043c \\u0437\\u0430\\u0445\\u0432\\u043e\\u0440\\u044e\\u0432\\u0430\\u043d\\u043d\\u044f\\u043c, \\u043f\\u043e\\u0437\\u0431\\u0430\\u0432\\u043b\\u044f\\u044e\\u0442\\u044c \\u0437\\u0430\\u0439\\u0432\\u043e\\u0457 \\u0432\\u0430\\u0433\\u0438 \\u0456 \\u0437\\u043c\\u0456\\u0446\\u043d\\u044e\\u044e\\u0442\\u044c \\u043a\\u0456\\u0441\\u0442\\u043a\\u043e\\u0432\\u0443 \\u0441\\u0438\\u0441\\u0442\\u0435\\u043c\\u0443 \\u043b\\u044e\\u0434\\u0438\\u043d\\u0438. \\u0421\\u0438\\u0441\\u0442\\u0435\\u043c\\u0430\\u0442\\u0438\\u0447\\u043d\\u0456 \\u0444\\u0456\\u0437\\u0438\\u0447\\u043d\\u0456 \\u043d\\u0430\\u0432\\u0430\\u043d\\u0442\\u0430\\u0436\\u0435\\u043d\\u043d\\u044f \\u043f\\u0456\\u0434 \\u043a\\u0435\\u0440\\u0456\\u0432\\u043d\\u0438\\u0446\\u0442\\u0432\\u043e\\u043c \\u0434\\u043e\\u0441\\u0432\\u0456\\u0434\\u0447\\u0435\\u043d\\u043e\\u0433\\u043e \\u0442\\u0440\\u0435\\u043d\\u0435\\u0440\\u0430 \\u0442\\u0430\\u043a\\u043e\\u0436 \\u0441\\u043f\\u0440\\u0438\\u044f\\u044e\\u0442\\u044c \\u0437\\u043c\\u0435\\u043d\\u0448\\u0435\\u043d\\u043d\\u044e \\u0435\\u043c\\u043e\\u0446\\u0456\\u0439\\u043d\\u0438\\u0445 \\u0442\\u0430 \\u0441\\u0442\\u0440\\u0435\\u0441\\u043e\\u0432\\u0438\\u0445 \\u043f\\u0435\\u0440\\u0435\\u0432\\u0430\\u043d\\u0442\\u0430\\u0436\\u0435\\u043d\\u044c \\u043e\\u0440\\u0433\\u0430\\u043d\\u0456\\u0437\\u043c\\u0443.<\\/div>"}',
                'title' => 'SMART FIT',
                'sub_title' => '{"ru":"\\u0440\\u0435\\u0431\\u0438\\u043b\\u0438\\u0442\\u0430\\u0446\\u0438\\u043e\\u043d\\u043d\\u044b\\u0439 \\u0446\\u0435\\u043d\\u0442\\u0440","uk":"\\u0440\\u0435\\u0430\\u0431\\u0456\\u043b\\u0456\\u0442\\u0430\\u0446\\u0456\\u0439\\u043d\\u0438\\u0439 \\u0446\\u0435\\u043d\\u0442\\u0440"}',
                'description' => '{"ru":"\\u041d\\u0430\\u0448\\u0430 \\u0440\\u0435\\u0430\\u0431\\u0438\\u043b\\u0438\\u0442\\u0430\\u0446\\u0438\\u044f - \\u044d\\u0442\\u043e \\u043a\\u043e\\u043c\\u043f\\u043b\\u0435\\u043a\\u0441 \\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0432\\u043d\\u043e - \\u043c\\u0435\\u0434\\u0438\\u0446\\u0438\\u043d\\u0441\\u043a\\u0438\\u0445, \\u043f\\u0435\\u0434\\u0430\\u0433\\u043e\\u0433\\u0438\\u0447\\u0435\\u0441\\u043a\\u0438\\u0445, \\u043f\\u0441\\u0438\\u0445\\u043e\\u043b\\u043e\\u0433\\u0438\\u0447\\u0435\\u0441\\u043a\\u0438\\u0445 \\u0438 \\u0438\\u043d\\u044b\\u0445 \\u0432\\u0438\\u0434\\u043e\\u0432 \\u043c\\u0435\\u0440\\u043e\\u043f\\u0440\\u0438\\u044f\\u0442\\u0438\\u0439, \\u043d\\u0430\\u043f\\u0440\\u0430\\u0432\\u043b\\u0435\\u043d\\u043d\\u044b\\u0445 \\u043d\\u0430 \\u043c\\u0430\\u043a\\u0441\\u0438\\u043c\\u0430\\u043b\\u044c\\u043d\\u043e \\u0432\\u043e\\u0437\\u043c\\u043e\\u0436\\u043d\\u043e\\u0435 \\u0432\\u043e\\u0441\\u0441\\u0442\\u0430\\u043d\\u043e\\u0432\\u043b\\u0435\\u043d\\u0438\\u0435 \\u0438\\u043b\\u0438 \\u043a\\u043e\\u043c\\u043f\\u0435\\u043d\\u0441\\u0430\\u0446\\u0438\\u044e \\u043d\\u0430\\u0440\\u0443\\u0448\\u0435\\u043d\\u043d\\u044b\\u0445 \\u0438\\u043b\\u0438 \\u043f\\u043e\\u043b\\u043d\\u043e\\u0441\\u0442\\u044c\\u044e \\u0443\\u0442\\u0440\\u0430\\u0447\\u0435\\u043d\\u043d\\u044b\\u0445, \\u0432 \\u0440\\u0435\\u0437\\u0443\\u043b\\u044c\\u0442\\u0430\\u0442\\u0435 \\u0431\\u043e\\u043b\\u0435\\u0437\\u043d\\u0438 \\u0438\\u043b\\u0438 \\u0442\\u0440\\u0430\\u0432\\u043c\\u044b, \\u043d\\u043e\\u0440\\u043c\\u0430\\u043b\\u044c\\u043d\\u044b\\u0445 \\u043f\\u0441\\u0438\\u0445\\u0438\\u0447\\u0435\\u0441\\u043a\\u0438\\u0445 \\u0438 \\u0444\\u0438\\u0437\\u0438\\u043e\\u043b\\u043e\\u0433\\u0438\\u0447\\u0435\\u0441\\u043a\\u0438\\u0445 \\u0444\\u0443\\u043d\\u043a\\u0446\\u0438\\u0439 \\u0447\\u0435\\u043b\\u043e\\u0432\\u0435\\u0447\\u0435\\u0441\\u043a\\u043e\\u0433\\u043e \\u043e\\u0440\\u0433\\u0430\\u043d\\u0438\\u0437\\u043c\\u0430, \\u0435\\u0433\\u043e \\u0442\\u0440\\u0443\\u0434\\u043e\\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u043d\\u043e\\u0441\\u0442\\u0438.","uk":"\\u041d\\u0430\\u0448\\u0430 \\u0440\\u0435\\u0430\\u0431\\u0456\\u043b\\u0456\\u0442\\u0430\\u0446\\u0456\\u044f \\u2013 \\u0446\\u0435 \\u043a\\u043e\\u043c\\u043f\\u043b\\u0435\\u043a\\u0441 \\u0441\\u043f\\u043e\\u0440\\u0442\\u0438\\u0432\\u043d\\u043e \\u2013 \\u043c\\u0435\\u0434\\u0438\\u0447\\u043d\\u0438\\u0445, \\u043f\\u0435\\u0434\\u0430\\u0433\\u043e\\u0433\\u0456\\u0447\\u043d\\u0438\\u0445, \\u043f\\u0441\\u0438\\u0445\\u043e\\u043b\\u043e\\u0433\\u0456\\u0447\\u043d\\u0438\\u0445 \\u0442\\u0430 \\u0456\\u043d\\u0448\\u0438\\u0445 \\u0432\\u0438\\u0434\\u0456\\u0432 \\u0437\\u0430\\u0445\\u043e\\u0434\\u0456\\u0432, \\u0441\\u043f\\u0440\\u044f\\u043c\\u043e\\u0432\\u0430\\u043d\\u0438\\u0445 \\u043d\\u0430 \\u043c\\u0430\\u043a\\u0441\\u0438\\u043c\\u0430\\u043b\\u044c\\u043d\\u043e \\u043c\\u043e\\u0436\\u043b\\u0438\\u0432\\u0435 \\u0432\\u0456\\u0434\\u043d\\u043e\\u0432\\u043b\\u0435\\u043d\\u043d\\u044f \\u0447\\u0438 \\u043a\\u043e\\u043c\\u043f\\u0435\\u043d\\u0441\\u0430\\u0446\\u0456\\u044e \\u043f\\u043e\\u0440\\u0443\\u0448\\u0435\\u043d\\u0438\\u0445 \\u0447\\u0438 \\u043f\\u043e\\u0432\\u043d\\u0456\\u0441\\u0442\\u044e \\u0432\\u0442\\u0440\\u0430\\u0447\\u0435\\u043d\\u0438\\u0445, \\u0432\\u043d\\u0430\\u0441\\u043b\\u0456\\u0434\\u043e\\u043a \\u0445\\u0432\\u043e\\u0440\\u043e\\u0431\\u0438 \\u0447\\u0438 \\u0442\\u0440\\u0430\\u0432\\u043c\\u0438, \\u043d\\u043e\\u0440\\u043c\\u0430\\u043b\\u044c\\u043d\\u0438\\u0445 \\u043f\\u0441\\u0438\\u0445\\u0456\\u0447\\u043d\\u0438\\u0445 \\u0442\\u0430 \\u0444\\u0456\\u0437\\u0456\\u043e\\u043b\\u043e\\u0433\\u0456\\u0447\\u043d\\u0438\\u0445 \\u0444\\u0443\\u043d\\u043a\\u0446\\u0456\\u0439 \\u043b\\u044e\\u0434\\u0441\\u044c\\u043a\\u043e\\u0433\\u043e \\u043e\\u0440\\u0433\\u0430\\u043d\\u0456\\u0437\\u043c\\u0443, \\u0439\\u043e\\u0433\\u043e \\u043f\\u0440\\u0430\\u0446\\u0435\\u0437\\u0434\\u0430\\u0442\\u043d\\u043e\\u0441\\u0442\\u0456."}',
                'features' => '{"ru":"\\u0431\\u0435\\u0441\\u043f\\u043b\\u0430\\u0442\\u043d\\u0430\\u044f \\u043a\\u043e\\u043d\\u0441\\u0443\\u043b\\u044c\\u0442\\u0430\\u0446\\u0438\\u044f \\u0440\\u0435\\u0430\\u0431\\u0438\\u043b\\u0438\\u0442\\u043e\\u043b\\u043e\\u0433\\u0430 \\u0432 \\u043f\\u043e\\u0434\\u0430\\u0440\\u043e\\u043a","uk":"\\u0431\\u0435\\u0437\\u043a\\u043e\\u0448\\u0442\\u043e\\u0432\\u043d\\u0430 \\u043a\\u043e\\u043d\\u0441\\u0443\\u043b\\u044c\\u0442\\u0430\\u0446\\u0456\\u044f \\u0440\\u0435\\u0430\\u0431\\u0456\\u043b\\u0456\\u0442\\u043e\\u043b\\u043e\\u0433\\u0430 \\u0443 \\u043f\\u043e\\u0434\\u0430\\u0440\\u0443\\u043d\\u043e\\u043a"}',
                'image' => 'uP0LTmkG9X0gv3LIyBktvuphqz3B8gZRpPoXpguK.png',
            'address' => '{"ru":"\\u0443\\u043b. \\u0411\\u0443\\u0447\\u043c\\u044b (\\u0423\\u0431\\u043e\\u0440\\u0435\\u0432\\u0438\\u0447\\u0430), 1\\u0431 \\u0422\\u041e\\u0426 \\"\\u041a\\u043e\\u043d\\u0442\\u0438\\u043d\\u0435\\u043d\\u0442\\" \\u043c. \\u0413\\u0435\\u0440\\u043e\\u0435\\u0432 \\u0442\\u0440\\u0443\\u0434\\u0430","uk":"\\u0432\\u0443\\u043b. \\u0411\\u0443\\u0447\\u043c\\u0438 (\\u0423\\u0431\\u043e\\u0440\\u0435\\u0432\\u0438\\u0447\\u0430), 1\\u0431 \\u0422\\u041e\\u0426 \\"\\u041a\\u043e\\u043d\\u0442\\u0438\\u043d\\u0435\\u043d\\u0442\\" \\u043c. \\u0413\\u0435\\u0440\\u043e\\u0457\\u0432 \\u043f\\u0440\\u0430\\u0446\\u0456"}',
                'lat' => '50.031662853447045',
                'lng' => '36.34277361390175',
                'phone' => '[{"layout":"phone","key":"crziN7UK2OtfXEmq","attributes":{"phone":"068-714-20-69"}}]',
                'scheduler' => 'Пн-Сб с 8:00 до 22:00, Нд с 8:00 до 20:00',
                'created_at' => '2023-02-04 10:48:57',
                'updated_at' => '2023-02-04 11:13:36',
            ),
        ));


    }
}
