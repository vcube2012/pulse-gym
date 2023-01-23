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
//         \App\Models\User::factory()->create([
//             'name' => 'tsar',
//             'is_admin' => true,
//             'email' => 'vcube.su@gmail.com',
//             'password' => Hash::make('rybakvasya')
//         ]);
        $this->call([
//            ClubSeeder::class,
//            TagSeeder::class,
//            BlogSeeder::class,
//            FeedbackSeeder::class,
//            ServicesSeeder::class,
//            PriceCategorySeeder::class,
//            CoachSeeder::class,
//            SpecializationSeeder::class
        ]);
//        $this->call(CoachesTableSeeder::class);
//        $this->call(ClubsTableSeeder::class);
//        $this->call(ClubCoachTableSeeder::class);
//        $this->call(PriceCategoriesTableSeeder::class);
//        $this->call(PricesTableSeeder::class);
//        $this->call(ServicesTableSeeder::class);
//
//        $this->call(ClubPriceCategoryTableSeeder::class);
//        $this->call(ClubServiceTableSeeder::class);
//        $this->call(SpecializationsTableSeeder::class);
//
//        $this->call(CoachSpecializationTableSeeder::class);
//        $this->call(MediaTableSeeder::class);
//        $this->call(SchedulesTableSeeder::class);
//
//        $this->call(ScheduleServicesTableSeeder::class);
//        $this->call(TagsTableSeeder::class);
//        $this->call(ActionEventsTableSeeder::class);
//        $this->call(FeedbackTableSeeder::class);
        $this->call(BlogsTableSeeder::class);

        $this->call(BlogTagTableSeeder::class);
    }
}
