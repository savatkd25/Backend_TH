<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FormacionAcademica;

class FormacionAcademicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FormacionAcademica::factory()->count(500)->create();
    }
}
