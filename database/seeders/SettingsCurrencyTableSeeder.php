<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsCurrencyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('settings_currency')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Naira',
                'code' => 'NGN',
                'exchange_rate' => '465',
            ),
        ));
    }
}
