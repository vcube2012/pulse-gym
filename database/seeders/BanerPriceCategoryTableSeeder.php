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
                'baner_id' => 4,
                'price_category_id' => 2,
            ),
            1 => 
            array (
                'baner_id' => 5,
                'price_category_id' => 2,
            ),
        ));
        
        
    }
}