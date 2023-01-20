<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('schedules')->delete();
        
        \DB::table('schedules')->insert(array (
            0 => 
            array (
                'id' => 1,
                'club_id' => 2,
                'created_at' => '2023-01-17 14:13:27',
                'updated_at' => '2023-01-17 14:13:27',
            ),
            1 => 
            array (
                'id' => 2,
                'club_id' => 6,
                'created_at' => '2023-01-19 08:57:30',
                'updated_at' => '2023-01-19 08:57:30',
            ),
            2 => 
            array (
                'id' => 3,
                'club_id' => 7,
                'created_at' => '2023-01-19 09:35:26',
                'updated_at' => '2023-01-19 09:35:26',
            ),
            3 => 
            array (
                'id' => 4,
                'club_id' => 9,
                'created_at' => '2023-01-19 10:27:38',
                'updated_at' => '2023-01-19 10:27:38',
            ),
            4 => 
            array (
                'id' => 5,
                'club_id' => 10,
                'created_at' => '2023-01-19 11:31:06',
                'updated_at' => '2023-01-19 11:31:06',
            ),
            5 => 
            array (
                'id' => 6,
                'club_id' => 11,
                'created_at' => '2023-01-19 12:20:56',
                'updated_at' => '2023-01-19 12:20:56',
            ),
            6 => 
            array (
                'id' => 7,
                'club_id' => 12,
                'created_at' => '2023-01-19 13:08:20',
                'updated_at' => '2023-01-19 13:08:20',
            ),
            7 => 
            array (
                'id' => 8,
                'club_id' => 51,
                'created_at' => '2023-01-19 13:45:35',
                'updated_at' => '2023-01-19 13:45:35',
            ),
            8 => 
            array (
                'id' => 9,
                'club_id' => 52,
                'created_at' => '2023-01-19 14:35:50',
                'updated_at' => '2023-01-19 14:35:50',
            ),
            9 => 
            array (
                'id' => 10,
                'club_id' => 53,
                'created_at' => '2023-01-20 08:22:27',
                'updated_at' => '2023-01-20 08:22:27',
            ),
            10 => 
            array (
                'id' => 11,
                'club_id' => 54,
                'created_at' => '2023-01-20 08:46:00',
                'updated_at' => '2023-01-20 08:46:00',
            ),
            11 => 
            array (
                'id' => 12,
                'club_id' => 55,
                'created_at' => '2023-01-20 09:07:16',
                'updated_at' => '2023-01-20 09:07:16',
            ),
            12 => 
            array (
                'id' => 13,
                'club_id' => 58,
                'created_at' => '2023-01-20 10:05:49',
                'updated_at' => '2023-01-20 10:05:49',
            ),
        ));
        
        
    }
}