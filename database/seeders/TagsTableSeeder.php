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
                'name' => 'Направление',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-17 08:24:21',
            ),
            1 => 
            array (
                'id' => 2,
                'sort' => 2,
                'slug' => 'zdorove',
                'name' => 'здоровье',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-17 08:24:21',
            ),
            2 => 
            array (
                'id' => 3,
                'sort' => 3,
                'slug' => 'plan-zaniatii',
                'name' => 'план занятий',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-17 08:24:21',
            ),
            3 => 
            array (
                'id' => 4,
                'sort' => 4,
                'slug' => 'pitanie',
                'name' => 'питание',
                'created_at' => '2023-01-17 08:24:21',
                'updated_at' => '2023-01-17 08:24:21',
            ),
        ));
        
        
    }
}