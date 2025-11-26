<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  
        //
        Student::create([ 
            'name' => 'Haseeb Ashraf',
            'email' => fake()->unique()->safeEmail(),
        ]);

        Student::create([
            'name' => 'Mujeeb',
            'email' => fake()->unique()->safeEmail(),
        ]);

        Student::create([
            'name' => 'Muneeb',
            'email' => fake()->unique()->safeEmail(),
        ]);
    }
}
