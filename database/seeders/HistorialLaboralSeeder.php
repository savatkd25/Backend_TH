<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HistorialLaboral;

class HistorialLaboralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HistorialLaboral::factory()->count(10)->create();
    }
}
