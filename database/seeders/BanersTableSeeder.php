<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BanersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('baners')->delete();
        
        \DB::table('baners')->insert(array (
            0 => 
            array (
                'id' => 4,
                'title' => '{"ru":"fghfdgjfkghjhghf","uk":"fgxhnmnbvnc bvcx"}',
                'sub_title' => '{"ru":"asfhgdjmnvbcv","uk":"vxbncmbbnbvcx"}',
                'type' => 'freeze',
                'created_at' => '2023-02-27 14:38:48',
                'updated_at' => '2023-02-27 14:38:48',
                'slug' => 'freeze',
                'name' => NULL,
                'mobile_title' => NULL,
                'mobile_sub_title' => NULL,
            ),
            1 => 
            array (
                'id' => 5,
                'title' => '{"ru":"coachcoachcoachcoachcoach","uk":"coachcoachcoach"}',
                'sub_title' => '{"ru":"coachcoachcoachcoach","uk":"coachcoachcoachcoach"}',
                'type' => 'personal-coach',
                'created_at' => '2023-02-27 14:39:46',
                'updated_at' => '2023-02-27 14:39:46',
                'slug' => 'coach',
                'name' => NULL,
                'mobile_title' => NULL,
                'mobile_sub_title' => NULL,
            ),
        ));
        
        
    }
}