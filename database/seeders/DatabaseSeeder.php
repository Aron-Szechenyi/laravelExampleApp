<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\User;
use Database\Factories\CompanyFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User
        User::create([
            'username'=>'admin',
            'email'=>'test1@test.com',
            'password'=>Hash::Make('admin')
        ]);

        User::create([
            'username'=>'root',
            'email'=>'test2@test.com',
            'password'=>Hash::Make('root')
        ]);
        Company::factory()->count(15)->create();
    }
}
