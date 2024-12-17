<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EvaluacionDesempeño;

class EvaluacionDesempenoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EvaluacionDesempeño::factory()->count(50)->create(); 
}
}