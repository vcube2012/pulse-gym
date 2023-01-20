<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blog_tag')->delete();
        
        \DB::table('blog_tag')->insert(array (
            0 => 
            array (
                'id' => 1,
                'blog_id' => 1,
                'tag_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 5,
                'blog_id' => 2,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'blog_id' => 4,
                'tag_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 7,
                'blog_id' => 5,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 8,
                'blog_id' => 6,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 9,
                'blog_id' => 7,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 10,
                'blog_id' => 8,
                'tag_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 11,
                'blog_id' => 10,
                'tag_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 12,
                'blog_id' => 9,
                'tag_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}