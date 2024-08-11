<?php

namespace Database\Seeders;

use App\Models\Journey;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JourneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Journey::factory(20)->create();
    }
}
