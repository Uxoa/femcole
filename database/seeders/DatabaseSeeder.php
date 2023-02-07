<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Grade;

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
        
        /* User::factory()->create([
            'name' => 'Adriana',
            'surname1' => 'Aguilar',
            'surname2'=> 'Ruiz',
            'email' => 'adriana@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'image' => 'https://st2.depositphotos.com/1006318/5909/v/950/depositphotos_59094623-stock-illustration-female-avatar-woman.jpg',
            'isAdmin' => false,
        ]);
        
        User::factory()->create([
            'name' => 'Bea',
            'surname1' => 'De Ávila',
            'surname2'=> 'Jiménez',
            'email' => 'bea@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'image' => 'https://st2.depositphotos.com/1006318/5909/v/950/depositphotos_59094623-stock-illustration-female-avatar-woman.jpg',
            'isAdmin' => true,
        ]); */

        User::factory()->create(['name' => 'admin', 'email' => 'admin@admin.com', 'isAdmin' => true]);
        User::factory()->create(['name' => 'user1', 'email' => 'user1@user1.com', 'isAdmin' => false]);

        /* User::factory(3)->create();

        Grade::factory()
            ->has(User::factory()->count(2))
            ->create(); */

        User::factory()->create([
            'name' => 'Adriana',
            'surname1' => 'Aguilar',
            'surname2'=> 'Ruiz',
            'email' => 'adriana@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'image' => 'https://st2.depositphotos.com/1006318/5909/v/950/depositphotos_59094623-stock-illustration-female-avatar-woman.jpg',
            'isAdmin' => false,
        ]);

        Grade::factory()->create([
            'user_id'=> '3',
            'grade'=> '10',
            'trimester' => '1T',
            'subject' => 'Inglés',
            'exam' => '1',
            'schoolYear' => '2023',
        ]);

        User::factory()->create([
            'name' => 'Ana',
            'surname1' => 'Rueda',
            'surname2'=> 'Guiu',
            'email' => 'ana@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'image' => 'https://st2.depositphotos.com/1006318/5909/v/950/depositphotos_59094623-stock-illustration-female-avatar-woman.jpg',
            'isAdmin' => false,
        ]);

        Grade::factory()->create([
            'user_id'=> '4',
            'grade'=> '8',
            'trimester' => '2T',
            'subject' => 'Lengua',
            'exam' => '1',
            'schoolYear' => '2023',
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
