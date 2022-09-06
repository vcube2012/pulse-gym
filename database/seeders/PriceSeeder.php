<?php

namespace Database\Seeders;

use App\Models\Club;
use App\Models\Price;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Club::get() as $item) {
            $item->price()->attach(Price::all()->value('id'));
        }
    }
}
