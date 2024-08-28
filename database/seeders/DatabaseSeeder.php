<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'firstName' => 'nathaniel',
            'lastName' => 'alvarez',
            'gender' => 'male',
            'dateOfBirth' => '2004-08-08',
            'phoneNumber' => '9266887267',
            'email' => 'nathaniel@gmail.com',
            'password' => Hash::make('nathaniel'),
        ]);
    }
}
