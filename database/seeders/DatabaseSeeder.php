<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Admin::create([
            'uid'      => uid(),
            'email'    => 'logic@surehustle.com',
            'username' => 'logic',
            'password' => Hash::make('12345678'),
        ]);


        $this->call(CountriesTableSeeder::class);
        $this->call(AdvertisementsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(SettingsHeroTableSeeder::class);
        $this->call(NewsletterSettingsTableSeeder::class);
        $this->call(SettingsAuthTableSeeder::class);
        $this->call(SettingsCommissionTableSeeder::class);
        $this->call(SettingsCurrencyTableSeeder::class);
        $this->call(SettingsFooterTableSeeder::class);
        $this->call(SettingsGeneralTableSeeder::class);
        $this->call(SettingsMediaTableSeeder::class);
        $this->call(SettingsPublishTableSeeder::class);
        $this->call(SettingsSecurityTableSeeder::class);
        $this->call(SettingsSeoTableSeeder::class);
        $this->call(SettingsWithdrawalTableSeeder::class);
        $this->call(SettingsAppearanceTableSeeder::class);
        $this->call(BlogSettingsTableSeeder::class);
        $this->call(OfflinePaymentSettingsTableSeeder::class);
        $this->call(PaystackSettingsTableSeeder::class);
        $this->call(CashfreeSettingsTableSeeder::class);
        $this->call(XenditSettingsTableSeeder::class);
        $this->call(FlutterwaveSettingsTableSeeder::class);
        $this->call(JazzcashSettingsTableSeeder::class);
        $this->call(MercadopagoSettingsTableSeeder::class);
        $this->call(MollieSettingsTableSeeder::class);
        $this->call(PaymobSettingsTableSeeder::class);
        $this->call(PaypalSettingsTableSeeder::class);
        $this->call(PaytabsSettingsTableSeeder::class);
        $this->call(PaytrSettingsTableSeeder::class);
        $this->call(ProjectsSettingsTableSeeder::class);
        $this->call(ProjectsPlansTableSeeder::class);
        $this->call(ProjectsBiddingPlansTableSeeder::class);
        $this->call(RazorpaySettingsTableSeeder::class);
        $this->call(StripeSettingsTableSeeder::class);
        $this->call(VnpaySettingsTableSeeder::class);
        $this->call(NowpaymentsSettingsTableSeeder::class);
        $this->call(YoucanpaySettingsTableSeeder::class);
        $this->call(EpointSettingsTableSeeder::class);
        $this->call(LiveChatSettingsTableSeeder::class);

        $this->call([
            CategorySeeder::class,
            StatesTableSeeder::class,
            ProjectCategoryAndSkillSeeder::class,
            ReferralSettingSeeder::class
        ]);

        // if (App::environment('local')) {
        $this->call([
            UserSeeder::class,
            StatesTableSeeder::class,
            GigSeeder::class
        ]);
        // }
    }
}
