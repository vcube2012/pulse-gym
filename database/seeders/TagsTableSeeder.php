<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sort' => 1,
                'slug' => 'napravlenie',
                'name' => '{"uk":"\\u041d\\u0430\\u043f\\u0440\\u0430\\u0432\\u043b\\u0435\\u043d\\u0438\\u0435","ru":"\\u041d\\u0430\\u043f\\u0440\\u0430\\u0432\\u043b\\u0435\\u043d\\u0438\\u0435"}',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-25 15:46:09',
            ),
            1 => 
            array (
                'id' => 2,
                'sort' => 2,
                'slug' => 'zdorove',
                'name' => '{"uk":"\\u0437\\u0434\\u043e\\u0440\\u043e\\u0432\\u044c\\u0435","ru":"\\u0437\\u0434\\u043e\\u0440\\u043e\\u0432\\u044c\\u0435"}',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-25 15:46:09',
            ),
            2 => 
            array (
                'id' => 3,
                'sort' => 3,
                'slug' => 'plan-zaniatii',
                'name' => '{"uk":"\\u043f\\u043b\\u0430\\u043d \\u0437\\u0430\\u043d\\u044f\\u0442\\u0438\\u0439","ru":"\\u043f\\u043b\\u0430\\u043d \\u0437\\u0430\\u043d\\u044f\\u0442\\u0438\\u0439"}',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-25 15:46:09',
            ),
            3 => 
            array (
                'id' => 4,
                'sort' => 4,
                'slug' => 'pitanie',
                'name' => '{"uk":"\\u043f\\u0438\\u0442\\u0430\\u043d\\u0438\\u0435","ru":"\\u043f\\u0438\\u0442\\u0430\\u043d\\u0438\\u0435"}',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-25 15:46:09',
            ),
        ));
        
        
    }
}