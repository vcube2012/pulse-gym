<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClubCoachTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('club_coach')->delete();
        
        \DB::table('club_coach')->insert(array (
            0 => 
            array (
                'coach_id' => 1,
                'club_id' => 1,
            ),
            1 => 
            array (
                'coach_id' => 28,
                'club_id' => 51,
            ),
            2 => 
            array (
                'coach_id' => 27,
                'club_id' => 51,
            ),
            3 => 
            array (
                'coach_id' => 31,
                'club_id' => 52,
            ),
            4 => 
            array (
                'coach_id' => 30,
                'club_id' => 52,
            ),
            5 => 
            array (
                'coach_id' => 2,
                'club_id' => 1,
            ),
            6 => 
            array (
                'coach_id' => 3,
                'club_id' => 2,
            ),
            7 => 
            array (
                'coach_id' => 4,
                'club_id' => 2,
            ),
            8 => 
            array (
                'coach_id' => 5,
                'club_id' => 5,
            ),
            9 => 
            array (
                'coach_id' => 8,
                'club_id' => 6,
            ),
            10 => 
            array (
                'coach_id' => 7,
                'club_id' => 6,
            ),
            11 => 
            array (
                'coach_id' => 6,
                'club_id' => 6,
            ),
            12 => 
            array (
                'coach_id' => 12,
                'club_id' => 7,
            ),
            13 => 
            array (
                'coach_id' => 11,
                'club_id' => 7,
            ),
            14 => 
            array (
                'coach_id' => 10,
                'club_id' => 7,
            ),
            15 => 
            array (
                'coach_id' => 9,
                'club_id' => 7,
            ),
            16 => 
            array (
                'coach_id' => 13,
                'club_id' => 8,
            ),
            17 => 
            array (
                'coach_id' => 14,
                'club_id' => 8,
            ),
            18 => 
            array (
                'coach_id' => 18,
                'club_id' => 9,
            ),
            19 => 
            array (
                'coach_id' => 17,
                'club_id' => 9,
            ),
            20 => 
            array (
                'coach_id' => 16,
                'club_id' => 9,
            ),
            21 => 
            array (
                'coach_id' => 15,
                'club_id' => 9,
            ),
            22 => 
            array (
                'coach_id' => 21,
                'club_id' => 10,
            ),
            23 => 
            array (
                'coach_id' => 20,
                'club_id' => 10,
            ),
            24 => 
            array (
                'coach_id' => 19,
                'club_id' => 10,
            ),
            25 => 
            array (
                'coach_id' => 26,
                'club_id' => 11,
            ),
            26 => 
            array (
                'coach_id' => 25,
                'club_id' => 11,
            ),
            27 => 
            array (
                'coach_id' => 24,
                'club_id' => 11,
            ),
            28 => 
            array (
                'coach_id' => 23,
                'club_id' => 11,
            ),
            29 => 
            array (
                'coach_id' => 22,
                'club_id' => 11,
            ),
            30 => 
            array (
                'coach_id' => 29,
                'club_id' => 52,
            ),
            31 => 
            array (
                'coach_id' => 36,
                'club_id' => 53,
            ),
            32 => 
            array (
                'coach_id' => 35,
                'club_id' => 53,
            ),
            33 => 
            array (
                'coach_id' => 34,
                'club_id' => 53,
            ),
            34 => 
            array (
                'coach_id' => 33,
                'club_id' => 53,
            ),
            35 => 
            array (
                'coach_id' => 32,
                'club_id' => 53,
            ),
            36 => 
            array (
                'coach_id' => 25,
                'club_id' => 53,
            ),
            37 => 
            array (
                'coach_id' => 37,
                'club_id' => 56,
            ),
            38 => 
            array (
                'coach_id' => 38,
                'club_id' => 56,
            ),
            39 => 
            array (
                'coach_id' => 41,
                'club_id' => 57,
            ),
            40 => 
            array (
                'coach_id' => 40,
                'club_id' => 57,
            ),
            41 => 
            array (
                'coach_id' => 39,
                'club_id' => 57,
            ),
            42 => 
            array (
                'coach_id' => 42,
                'club_id' => 58,
            ),
            43 => 
            array (
                'coach_id' => 43,
                'club_id' => 58,
            ),
            44 => 
            array (
                'coach_id' => 44,
                'club_id' => 58,
            ),
        ));
        
        
    }
}