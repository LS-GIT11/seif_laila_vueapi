<?php

namespace Database\Seeders;

use App\Models\Flavour;
use Illuminate\Database\Seeder;

class FlavourSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Flavour::factory(10)->create();
    }
}
