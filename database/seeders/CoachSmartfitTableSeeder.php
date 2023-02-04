<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoachSmartfitTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('coach_smartfit')->delete();
        
        \DB::table('coach_smartfit')->insert(array (
            0 => 
            array (
                'coach_id' => 45,
                'smartfit_id' => 331,
            ),
        ));
        
        
    }
}