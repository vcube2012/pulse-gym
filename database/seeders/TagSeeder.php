<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Направление'],
            ['name' => 'здоровье'],
            ['name' => 'план занятий'],
            ['name' => 'питание'],
        ];
        foreach ($data as $datum) {
            Tag::create($datum);
        }
    }
}
