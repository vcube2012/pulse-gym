<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BanerClubTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('baner_club')->delete();
        
        \DB::table('baner_club')->insert(array (
            0 => 
            array (
                'club_id' => 6,
                'baner_id' => 4,
            ),
            1 => 
            array (
                'club_id' => 9,
                'baner_id' => 4,
            ),
            2 => 
            array (
                'club_id' => 51,
                'baner_id' => 4,
            ),
            3 => 
            array (
                'club_id' => 52,
                'baner_id' => 4,
            ),
            4 => 
            array (
                'club_id' => 55,
                'baner_id' => 4,
            ),
            5 => 
            array (
                'club_id' => 57,
                'baner_id' => 4,
            ),
            6 => 
            array (
                'club_id' => 5,
                'baner_id' => 4,
            ),
            7 => 
            array (
                'club_id' => 8,
                'baner_id' => 4,
            ),
            8 => 
            array (
                'club_id' => 10,
                'baner_id' => 4,
            ),
            9 => 
            array (
                'club_id' => 12,
                'baner_id' => 4,
            ),
            10 => 
            array (
                'club_id' => 53,
                'baner_id' => 4,
            ),
            11 => 
            array (
                'club_id' => 54,
                'baner_id' => 4,
            ),
            12 => 
            array (
                'club_id' => 58,
                'baner_id' => 4,
            ),
            13 => 
            array (
                'club_id' => 1,
                'baner_id' => 4,
            ),
            14 => 
            array (
                'club_id' => 2,
                'baner_id' => 4,
            ),
            15 => 
            array (
                'club_id' => 3,
                'baner_id' => 4,
            ),
            16 => 
            array (
                'club_id' => 7,
                'baner_id' => 4,
            ),
            17 => 
            array (
                'club_id' => 4,
                'baner_id' => 4,
            ),
            18 => 
            array (
                'club_id' => 56,
                'baner_id' => 4,
            ),
            19 => 
            array (
                'club_id' => 11,
                'baner_id' => 4,
            ),
            20 => 
            array (
                'club_id' => 9,
                'baner_id' => 5,
            ),
            21 => 
            array (
                'club_id' => 5,
                'baner_id' => 5,
            ),
            22 => 
            array (
                'club_id' => 55,
                'baner_id' => 5,
            ),
        ));
        
        
    }
}