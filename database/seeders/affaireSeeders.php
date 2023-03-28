<?php

namespace Database\Seeders;

use App\Models\Affaire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class affaireSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Affaire::factory(10)->create();
    }
}
