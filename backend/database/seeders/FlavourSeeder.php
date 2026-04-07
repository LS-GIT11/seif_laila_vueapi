<?php

namespace Database\Seeders;

use App\Models\Flavour;
use Illuminate\Database\Seeder;

class FlavourSeeder extends Seeder
{
    public function run(): void
    {
        Flavour::factory(20)->create();
    }
}
