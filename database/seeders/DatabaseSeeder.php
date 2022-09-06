<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Club;
use App\Models\Services;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory()->create([
             'name' => 'tsar',
             'is_admin' => true,
             'email' => 'vcube.su@gmail.com',
             'password' => Hash::make('rybakvasya')
         ]);
        $this->call([
            ClubSeeder::class,
            TagSeeder::class,
            BlogSeeder::class,
            FeedbackSeeder::class,
            ServicesSeeder::class,
            PriceCategorySeeder::class,
            CoachSeeder::class,
            SpecializationSeeder::class
        ]);
    }
}
