<?php

namespace Database\Seeders;

use App\Models\Club;
use App\Models\Schedule;
use App\Models\ScheduleService;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Club::all() as $club) {
            $schedule = Schedule::query()->firstOrCreate(['club_id' => $club->id]);
            foreach (Service::all() as $item) {
                $data = [
                    [
                        'recruiting' => true,
                        'day' => 1,
                        'from' => '8:00',
                        'service_id' => $item->id,
                        'schedule_id' => $schedule->id
                    ],
                    [
                        'recruiting' => true,
                        'day' => 2,
                        'from' => '9:00',
                        'service_id' => $item->id,
                        'schedule_id' => $schedule->id
                    ],
                    [
                        'recruiting' => true,
                        'day' => 3,
                        'from' => '9:00',
                        'service_id' => $item->id,
                        'schedule_id' => $schedule->id
                    ],
                    [
                        'recruiting' => true,
                        'day' => 4,
                        'from' => '9:00',
                        'service_id' => $item->id,
                        'schedule_id' => $schedule->id
                    ],
                    [
                        'recruiting' => true,
                        'day' => 5,
                        'from' => '9:00',
                        'service_id' => $item->id,
                        'schedule_id' => $schedule->id
                    ],
                    [
                        'recruiting' => true,
                        'day' => 6,
                        'from' => '9:00',
                        'service_id' => $item->id,
                        'schedule_id' => $schedule->id
                    ],
                ];
                ScheduleService::insert($data);
            }
        }

    }
}
