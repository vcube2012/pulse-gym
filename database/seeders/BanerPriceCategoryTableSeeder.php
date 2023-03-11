<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BanerPriceCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('baner_price_category')->delete();
        
        \DB::table('baner_price_category')->insert(array (
            0 => 
            array (
                'baner_id' => 2,
                'price_category_id' => 4,
            ),
            1 => 
            array (
                'baner_id' => 1,
                'price_category_id' => 4,
            ),
            2 => 
            array (
                'baner_id' => 7,
                'price_category_id' => 4,
            ),
        ));
        
        
    }
}