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
            'fullname' => 'sunny afuwape',
            'email' => 'sunny@surehustle.com',
            'username' => 'sunny',
            'password' => Hash::make('12345678'),
            'status' => 'active',
            'level_id' => 1
        ]);
    }
}
