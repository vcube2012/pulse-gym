<?php

namespace Database\Seeders;

use App\Models\Club;
use App\Models\Coach;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coach::factory(10)->create();
        foreach (Club::query()->get() as $item) {
            $item->coach()->sync(Coach::get()->value('id'));
        }
    }
}
