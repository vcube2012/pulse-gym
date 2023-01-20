<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoachSpecializationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('coach_specialization')->delete();
        
        \DB::table('coach_specialization')->insert(array (
            0 => 
            array (
                'coach_id' => 1,
                'specialization_id' => 10,
            ),
            1 => 
            array (
                'coach_id' => 1,
                'specialization_id' => 11,
            ),
            2 => 
            array (
                'coach_id' => 1,
                'specialization_id' => 12,
            ),
            3 => 
            array (
                'coach_id' => 1,
                'specialization_id' => 13,
            ),
            4 => 
            array (
                'coach_id' => 1,
                'specialization_id' => 14,
            ),
            5 => 
            array (
                'coach_id' => 1,
                'specialization_id' => 3,
            ),
            6 => 
            array (
                'coach_id' => 2,
                'specialization_id' => 10,
            ),
            7 => 
            array (
                'coach_id' => 2,
                'specialization_id' => 11,
            ),
            8 => 
            array (
                'coach_id' => 2,
                'specialization_id' => 12,
            ),
            9 => 
            array (
                'coach_id' => 2,
                'specialization_id' => 15,
            ),
            10 => 
            array (
                'coach_id' => 2,
                'specialization_id' => 3,
            ),
            11 => 
            array (
                'coach_id' => 2,
                'specialization_id' => 14,
            ),
            12 => 
            array (
                'coach_id' => 2,
                'specialization_id' => 5,
            ),
            13 => 
            array (
                'coach_id' => 4,
                'specialization_id' => 3,
            ),
            14 => 
            array (
                'coach_id' => 4,
                'specialization_id' => 16,
            ),
            15 => 
            array (
                'coach_id' => 4,
                'specialization_id' => 17,
            ),
            16 => 
            array (
                'coach_id' => 6,
                'specialization_id' => 10,
            ),
            17 => 
            array (
                'coach_id' => 6,
                'specialization_id' => 2,
            ),
            18 => 
            array (
                'coach_id' => 6,
                'specialization_id' => 6,
            ),
            19 => 
            array (
                'coach_id' => 6,
                'specialization_id' => 7,
            ),
            20 => 
            array (
                'coach_id' => 8,
                'specialization_id' => 16,
            ),
            21 => 
            array (
                'coach_id' => 8,
                'specialization_id' => 8,
            ),
            22 => 
            array (
                'coach_id' => 8,
                'specialization_id' => 3,
            ),
            23 => 
            array (
                'coach_id' => 8,
                'specialization_id' => 14,
            ),
            24 => 
            array (
                'coach_id' => 8,
                'specialization_id' => 17,
            ),
            25 => 
            array (
                'coach_id' => 8,
                'specialization_id' => 2,
            ),
            26 => 
            array (
                'coach_id' => 9,
                'specialization_id' => 3,
            ),
            27 => 
            array (
                'coach_id' => 9,
                'specialization_id' => 14,
            ),
            28 => 
            array (
                'coach_id' => 10,
                'specialization_id' => 17,
            ),
            29 => 
            array (
                'coach_id' => 10,
                'specialization_id' => 14,
            ),
            30 => 
            array (
                'coach_id' => 10,
                'specialization_id' => 8,
            ),
            31 => 
            array (
                'coach_id' => 15,
                'specialization_id' => 2,
            ),
            32 => 
            array (
                'coach_id' => 15,
                'specialization_id' => 16,
            ),
            33 => 
            array (
                'coach_id' => 15,
                'specialization_id' => 3,
            ),
            34 => 
            array (
                'coach_id' => 15,
                'specialization_id' => 13,
            ),
            35 => 
            array (
                'coach_id' => 16,
                'specialization_id' => 16,
            ),
            36 => 
            array (
                'coach_id' => 16,
                'specialization_id' => 17,
            ),
            37 => 
            array (
                'coach_id' => 16,
                'specialization_id' => 3,
            ),
            38 => 
            array (
                'coach_id' => 16,
                'specialization_id' => 2,
            ),
            39 => 
            array (
                'coach_id' => 25,
                'specialization_id' => 3,
            ),
            40 => 
            array (
                'coach_id' => 25,
                'specialization_id' => 16,
            ),
            41 => 
            array (
                'coach_id' => 25,
                'specialization_id' => 2,
            ),
            42 => 
            array (
                'coach_id' => 26,
                'specialization_id' => 14,
            ),
            43 => 
            array (
                'coach_id' => 26,
                'specialization_id' => 3,
            ),
            44 => 
            array (
                'coach_id' => 38,
                'specialization_id' => 16,
            ),
            45 => 
            array (
                'coach_id' => 38,
                'specialization_id' => 3,
            ),
            46 => 
            array (
                'coach_id' => 38,
                'specialization_id' => 2,
            ),
            47 => 
            array (
                'coach_id' => 39,
                'specialization_id' => 15,
            ),
            48 => 
            array (
                'coach_id' => 39,
                'specialization_id' => 2,
            ),
            49 => 
            array (
                'coach_id' => 39,
                'specialization_id' => 14,
            ),
            50 => 
            array (
                'coach_id' => 39,
                'specialization_id' => 3,
            ),
            51 => 
            array (
                'coach_id' => 42,
                'specialization_id' => 15,
            ),
            52 => 
            array (
                'coach_id' => 42,
                'specialization_id' => 16,
            ),
            53 => 
            array (
                'coach_id' => 42,
                'specialization_id' => 3,
            ),
            54 => 
            array (
                'coach_id' => 43,
                'specialization_id' => 15,
            ),
            55 => 
            array (
                'coach_id' => 43,
                'specialization_id' => 2,
            ),
            56 => 
            array (
                'coach_id' => 43,
                'specialization_id' => 3,
            ),
            57 => 
            array (
                'coach_id' => 43,
                'specialization_id' => 16,
            ),
            58 => 
            array (
                'coach_id' => 43,
                'specialization_id' => 5,
            ),
            59 => 
            array (
                'coach_id' => 43,
                'specialization_id' => 17,
            ),
            60 => 
            array (
                'coach_id' => 43,
                'specialization_id' => 6,
            ),
            61 => 
            array (
                'coach_id' => 43,
                'specialization_id' => 7,
            ),
        ));
        
        
    }
}