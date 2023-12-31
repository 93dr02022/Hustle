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
            'first_name' => 'sunday',
            'last_name' => 'afuwape',
            'email' => 'sunny@surehustle.com',
            'username' => 'sunny',
            'password' => Hash::make('12345678'),
            'status' => 'verified',
            'level_id' => 2,
            'country_id' => 160,
            'state_id' => fake()->randomElement([2671, 2674]),
            'account_type' => 'seller'
        ]);

        User::create([
            'uid' => uid(),
            'first_name' => 'sunday',
            'last_name' => 'afuwape',
            'email' => 'afuwapesunday12@gmail.com',
            'username' => 'logic',
            'password' => Hash::make('12345678'),
            'status' => 'verified',
            'level_id' => 2,
            'country_id' => 160,
            'state_id' => fake()->randomElement([2671, 2674]),
            'account_type' => 'seller'
        ]);

        User::create([
            'uid' => uid(),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => 'josh@surehustle.com',
            'username' => 'joshy',
            'password' => Hash::make('12345678'),
            'status' => 'active',
            'country_id' => 160,
            'state_id' => fake()->randomElement([2671, 2674]),
            'level_id' => 1
        ]);


        collect()->times(200)->each(function () {
            User::create([
                'uid' => uid(),
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'email' => fake()->unique()->email(),
                'username' => fake()->unique()->userName(),
                'password' => Hash::make('12345678'),
                'status' => 'verified',
                'level_id' => 2,
                'country_id' => 160,
                'state_id' => fake()->randomElement([2671, 2674]),
                'account_type' => 'seller'
            ]);
        });
    }
}
