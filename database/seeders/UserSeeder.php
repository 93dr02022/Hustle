<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'uid' => uid(),
            'first_name' => 'sunny',
            'last_name' => 'afuwape',
            'email' => 'sunny@surehustle.com',
            'username' => 'sunny',
            'password' => Hash::make('12345678'),
            'status' => 'active',
            'level_id' => 1
        ]);

        User::create([
            'uid' => uid(),
            'first_name' => 'joshy',
            'last_name' => 'afuwape',
            'email' => 'joshy@surehustle.com',
            'username' => 'joshy',
            'password' => Hash::make('12345678'),
            'status' => 'active',
            'level_id' => 2
        ]);
    }
}
