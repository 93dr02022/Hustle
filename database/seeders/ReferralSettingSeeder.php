<?php

namespace Database\Seeders;

use App\Models\ReferralSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReferralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReferralSetting::create(['referral_amount' => 500]);
    }
}
