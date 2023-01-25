<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        Student::factory()->create([
            'studentName' => 'Adriana',
            'studentSurname1' => 'Aguilar',
            'studentSurname2'=> 'Ruiz',
            'studentEmail' => 'adriana@gmail.com',
            'studentPassword' => 'password',
            'studentImage' => 'https://st2.depositphotos.com/1006318/5909/v/950/depositphotos_59094623-stock-illustration-female-avatar-woman.jpg',
        ]);
        
        Student::factory()->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
