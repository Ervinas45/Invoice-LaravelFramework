<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(['name' => 'Sąskaita faktūra']);
        Type::create(['name' => 'PVM Sąskaita faktūra']);
        Type::create(['name' => 'Išankstinė sąskaita faktūra']);
        Type::create(['name' => 'Išankstinė PVM sąskaita faktūra']);
    }
}
