<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = User::create([
            "name"=> "Dharshan",
            "email"=> "jhon@example.com",
            "password"=> bcrypt("password"),
        ]);

        $user->createToken("Dharshan")->plainTextToken;

        User::factory()->count(5)->create();
    }
}
