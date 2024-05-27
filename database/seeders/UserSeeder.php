<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     //create 10 users
    //     User::factory()->count(10)->create();
    // }

    public function run() : void {
        \App\Models\User::factory()->create([
            'name' => 'ibrahim',
            'email' => 'test@example.com',
            'password'=>'zibrana',
        ]);
    }
}
