<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JornadaLaboral;

class JornadaLaboralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JornadaLaboral::factory()->count(100)->create();
    }
}
