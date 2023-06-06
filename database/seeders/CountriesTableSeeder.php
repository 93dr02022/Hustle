<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Schema;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        $countries = [
            [
                'id' => 1,
                'code' => 'AF',
                'name' => 'Afghanistan',
                'phonecode' => 93,
                'is_active' => 1,
                'emoji' => '🇦🇫',
                'currency_code' => 'AFN',
                'currency_name' => 'Afghani'
            ],
            [
                'id' => 2,
                'code' => 'AL',
                'name' => 'Albania',
                'phonecode' => 355,
                'is_active' => 1,
                'emoji' => '🇦🇱',
                'currency_code' => 'ALL',
                'currency_name' => 'Lek'
            ],
            [
                'id' => 3,
                'code' => 'DZ',
                'name' => 'Algeria',
                'phonecode' => 213,
                'is_active' => 1,
                'emoji' => '🇩🇿',
                'currency_code' => 'DZD',
                'currency_name' => 'Algerian Dinar'
            ],
            [
                'id' => 4,
                'code' => 'AS',
                'name' => 'American Samoa',
                'phonecode' => 1684,
                'is_active' => 1,
                'emoji' => '🇦🇸',
                'currency_code' => 'USD',
                'currency_name' => 'US Dollar'
            ],
            [
                'id' => 5,
                'code' => 'AD',
                'name' => 'Andorra',
                'phonecode' => 376,
                'is_active' => 1,
                'emoji' => '🇦🇩',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 6,
                'code' => 'AO',
                'name' => 'Angola',
                'phonecode' => 244,
                'is_active' => 1,
                'emoji' => '🇦🇴',
                'currency_code' => 'AOA',
                'currency_name' => 'Kwanza'
            ],
            [
                'id' => 7,
                'code' => 'AI',
                'name' => 'Anguilla',
                'phonecode' => 1264,
                'is_active' => 1,
                'emoji' => '🇦🇮',
                'currency_code' => 'XCD',
                'currency_name' => 'East Caribbean Dollar'
            ],
            [
                'id' => 8,
                'code' => 'AQ',
                'name' => 'Antarctica',
                'phonecode' => 0,
                'is_active' => 1,
                'emoji' => '🇦🇶', 'currency_code' => '',
                'currency_name' => ''
            ],
            [
                'id' => 9,
                'code' => 'AG',
                'name' => 'Antigua And Barbuda',
                'phonecode' => 1268,
                'is_active' => 1,
                'emoji' => '🇦🇬',
                'currency_code' => 'XCD',
                'currency_name' => 'East Caribbean Dollar'
            ],
            [
                'id' => 10,
                'code' => 'AR',
                'name' => 'Argentina',
                'phonecode' => 54,
                'is_active' => 1,
                'emoji' => '🇦🇷',
                'currency_code' => 'ARS',
                'currency_name' => 'Argentine Peso'
            ],
            [
                'id' => 11,
                'code' => 'AM',
                'name' => 'Armenia',
                'phonecode' => 374,
                'is_active' => 1,
                'emoji' => '🇦🇲',
                'currency_code' => 'AMD',
                'currency_name' => 'Armenian Dram'
            ],
            [
                'id' => 12,
                'code' => 'AW',
                'name' => 'Aruba',
                'phonecode' => 297,
                'is_active' => 1,
                'emoji' => '🇦🇼',
                'currency_code' => 'AWG',
                'currency_name' => 'Aruban Florin'
            ],
            [
                'id' => 13,
                'code' => 'AU',
                'name' => 'Australia',
                'phonecode' => 61,
                'is_active' => 1,
                'emoji' => '🇦🇺',
                'currency_code' => 'AUD',
                'currency_name' => 'Australian Dollar'
            ],
            [
                'id' => 14,
                'code' => 'AT',
                'name' => 'Austria',
                'phonecode' => 43,
                'is_active' => 1,
                'emoji' => '🇦🇹',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 15,
                'code' => 'AZ',
                'name' => 'Azerbaijan',
                'phonecode' => 994,
                'is_active' => 1,
                'emoji' => '🇦🇿',
                'currency_code' => 'AZN',
                'currency_name' => 'Azerbaijanian Manat'
            ],
            [
                'id' => 16,
                'code' => 'BS',
                'name' => 'Bahamas The',
                'phonecode' => 1242,
                'is_active' => 1,
                'emoji' => '🇧🇸',
                'currency_code' => 'BSD',
                'currency_name' => 'Bahamian Dollar'
            ],
            [
                'id' => 17,
                'code' => 'BH',
                'name' => 'Bahrain',
                'phonecode' => 973,
                'is_active' => 1,
                'emoji' => '🇧🇭',
                'currency_code' => 'BHD',
                'currency_name' => 'Bahraini Dinar'
            ],
            [
                'id' => 18,
                'code' => 'BD',
                'name' => 'Bangladesh',
                'phonecode' => 880,
                'is_active' => 1,
                'emoji' => '🇧🇩',
                'currency_code' => 'BDT',
                'currency_name' => 'Taka'
            ],
            [
                'id' => 19,
                'code' => 'BB',
                'name' => 'Barbados',
                'phonecode' => 1246,
                'is_active' => 1,
                'emoji' => '🇧🇧',
                'currency_code' => 'BBD',
                'currency_name' => 'Barbados Dollar'
            ],
            [
                'id' => 20,
                'code' => 'BY',
                'name' => 'Belarus',
                'phonecode' => 375,
                'is_active' => 1,
                'emoji' => '🇧🇾',
                'currency_code' => 'BYR',
                'currency_name' => 'Belarusian Ruble'
            ],
            [
                'id' => 21,
                'code' => 'BE',
                'name' => 'Belgium',
                'phonecode' => 32,
                'is_active' => 1,
                'emoji' => '🇧🇪',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 22,
                'code' => 'BZ',
                'name' => 'Belize',
                'phonecode' => 501,
                'is_active' => 1,
                'emoji' => '🇧🇿',
                'currency_code' => 'BZD',
                'currency_name' => 'Belize Dollar'
            ],
            [
                'id' => 23,
                'code' => 'BJ',
                'name' => 'Benin',
                'phonecode' => 229,
                'is_active' => 1,
                'emoji' => '🇧🇯',
                'currency_code' => 'XOF',
                'currency_name' => 'CFA Franc BCEAO'
            ],
            [
                'id' => 24,
                'code' => 'BM',
                'name' => 'Bermuda',
                'phonecode' => 1441,
                'is_active' => 1,
                'emoji' => '🇧🇲',
                'currency_code' => 'BMD',
                'currency_name' => 'Bermudian Dollar'
            ],
            [
                'id' => 25,
                'code' => 'BT',
                'name' => 'Bhutan',
                'phonecode' => 975,
                'is_active' => 1,
                'emoji' => '🇧🇹',
                'currency_code' => 'BTN',
                'currency_name' => 'Ngultrum'
            ],
            [
                'id' => 26,
                'code' => 'BO',
                'name' => 'Bolivia',
                'phonecode' => 591,
                'is_active' => 1,
                'emoji' => '🇧🇴',
                'currency_code' => 'BOB',
                'currency_name' => 'Boliviano'
            ],
            [
                'id' => 27,
                'code' => 'BA',
                'name' => 'Bosnia and Herzegovina',
                'phonecode' => 387,
                'is_active' => 1,
                'emoji' => '🇧🇦',
                'currency_code' => 'BAM',
                'currency_name' => 'Convertible Mark'
            ],
            [
                'id' => 28,
                'code' => 'BW',
                'name' => 'Botswana',
                'phonecode' => 267,
                'is_active' => 1,
                'emoji' => '🇧🇼',
                'currency_code' => 'BWP',
                'currency_name' => 'Pula'
            ],
            [
                'id' => 29,
                'code' => 'BV',
                'name' => 'Bouvet Island',
                'phonecode' => 0,
                'is_active' => 1,
                'emoji' => '🇧🇻',
                'currency_code' => 'NOK',
                'currency_name' => 'Norwegian Krone'
            ],
            [
                'id' => 30,
                'code' => 'BR',
                'name' => 'Brazil',
                'phonecode' => 55,
                'is_active' => 1,
                'emoji' => '🇧🇷',
                'currency_code' => 'BRL',
                'currency_name' => 'Brazilian Real'
            ],
            [
                'id' => 31,
                'code' => 'IO',
                'name' => 'British Indian Ocean Territory',
                'phonecode' => 246,
                'is_active' => 1,
                'emoji' => '🇧🇴',
                'currency_code' => 'USD',
                'currency_name' => 'US Dollar'
            ],
            [
                'id' => 32,
                'code' => 'BN',
                'name' => 'Brunei',
                'phonecode' => 673,
                'is_active' => 1,
                'emoji' => '🇧🇳',
                'currency_code' => 'BND',
                'currency_name' => 'Brunei Dollar'
            ],
            [
                'id' => 33,
                'code' => 'BG',
                'name' => 'Bulgaria',
                'phonecode' => 359,
                'is_active' => 1,
                'emoji' => '🇧🇬',
                'currency_code' => 'BGN',
                'currency_name' => 'Bulgarian Lev'
            ],
            [
                'id' => 34,
                'code' => 'BF',
                'name' => 'Burkina Faso',
                'phonecode' => 226,
                'is_active' => 1,
                'emoji' => '🇧🇫',
                'currency_code' => 'XOF',
                'currency_name' => 'CFA Franc BCEAO'
            ],
            [
                'id' => 35,
                'code' => 'BI',
                'name' => 'Burundi',
                'phonecode' => 257,
                'is_active' => 1,
                'emoji' => '🇧🇮',
                'currency_code' => 'BIF',
                'currency_name' => 'Burundi Franc'
            ],
            [
                'id' => 36,
                'code' => 'KH',
                'name' => 'Cambodia',
                'phonecode' => 855,
                'is_active' => 1,
                'emoji' => '🇰🇭',
                'currency_code' => 'KHR',
                'currency_name' => 'Riel'
            ],
            [
                'id' => 37,
                'code' => 'CM',
                'name' => 'Cameroon',
                'phonecode' => 237,
                'is_active' => 1,
                'emoji' => '🇨🇲',
                'currency_code' => 'XAF',
                'currency_name' => 'CFA Franc BEAC'
            ],
            [
                'id' => 38,
                'code' => 'CA',
                'name' => 'Canada',
                'phonecode' => 1,
                'is_active' => 1,
                'emoji' => '🇨🇦',
                'currency_code' => 'CAD',
                'currency_name' => 'Canadian Dollar'
            ],
            [
                'id' => 39,
                'code' => 'CV',
                'name' => 'Cape Verde',
                'phonecode' => 238,
                'is_active' => 1,
                'emoji' => '🇨🇻',
                'currency_code' => 'CVE',
                'currency_name' => 'Cabo Verde Escudo'
            ],
            [
                'id' => 40,
                'code' => 'KY',
                'name' => 'Cayman Islands',
                'phonecode' => 1345,
                'is_active' => 1,
                'emoji' => '🇰🇾',
                'currency_code' => 'KYD',
                'currency_name' => 'Cayman Islands Dollar'
            ],
            [
                'id' => 41,
                'code' => 'CF',
                'name' => 'Central African Republic',
                'phonecode' => 236,
                'is_active' => 1,
                'emoji' => '🇨🇫',
                'currency_code' => 'XAF',
                'currency_name' => 'CFA Franc BEAC'
            ],
            [
                'id' => 42,
                'code' => 'TD',
                'name' => 'Chad',
                'phonecode' => 235,
                'is_active' => 1,
                'emoji' => '🇹🇩',
                'currency_code' => 'XAF',
                'currency_name' => 'CFA Franc BEAC'
            ],
            [
                'id' => 43,
                'code' => 'CL',
                'name' => 'Chile',
                'phonecode' => 56,
                'is_active' => 1,
                'emoji' => '🇨🇱',
                'currency_code' => 'CLP',
                'currency_name' => 'Chilean Peso'
            ],
            [
                'id' => 44,
                'code' => 'CN',
                'name' => 'China',
                'phonecode' => 86,
                'is_active' => 1,
                'emoji' => '🇨🇳',
                'currency_code' => 'CNY',
                'currency_name' => 'Yuan Renminbi'
            ],
            [
                'id' => 45,
                'code' => 'CX',
                'name' => 'Christmas Island',
                'phonecode' => 61,
                'is_active' => 1,
                'emoji' => '🇨🇽',
                'currency_code' => 'AUD',
                'currency_name' => 'Australian Dollar'
            ],
            [
                'id' => 46,
                'code' => 'CC',
                'name' => 'Cocos (Keeling) Islands',
                'phonecode' => 672,
                'is_active' => 1,
                'emoji' => '🇨🇨',
                'currency_code' => 'AUD',
                'currency_name' => 'Australian Dollar'
            ],
            [
                'id' => 47,
                'code' => 'CO',
                'name' => 'Colombia',
                'phonecode' => 57,
                'is_active' => 1,
                'emoji' => '🇨🇴',
                'currency_code' => 'COP',
                'currency_name' => 'Colombian Peso'
            ],
            [
                'id' => 48,
                'code' => 'KM',
                'name' => 'Comoros',
                'phonecode' => 269,
                'is_active' => 1,
                'emoji' => '🇰🇲',
                'currency_code' => 'KMF',
                'currency_name' => 'Comoro Franc'
            ],
            [
                'id' => 49,
                'code' => 'CG',
                'name' => 'Congo',
                'phonecode' => 242,
                'is_active' => 1,
                'emoji' => '🇨🇬',
                'currency_code' => 'XAF',
                'currency_name' => 'CFA Franc BEAC'
            ],
            [
                'id' => 50,
                'code' => 'CD',
                'name' => 'Congo The Democratic Republic Of The',
                'phonecode' => 242,
                'is_active' => 1,
                'emoji' => '🇨🇩',
                'currency_code' => 'CDF',
                'currency_name' => 'Congolese Franc'
            ],
            [
                'id' => 51,
                'code' => 'CK',
                'name' => 'Cook Islands',
                'phonecode' => 682,
                'is_active' => 1,
                'emoji' => '🇨🇰',
                'currency_code' => 'NZD',
                'currency_name' => 'New Zealand Dollar'
            ],
            [
                'id' => 52,
                'code' => 'CR',
                'name' => 'Costa Rica',
                'phonecode' => 506,
                'is_active' => 1,
                'emoji' => '🇨🇷',
                'currency_code' => 'CRC',
                'currency_name' => 'Costa Rican Colon'
            ],
            [
                'id' => 53,
                'code' => 'CI',
                'name' => 'Cote D Ivoire (Ivory Coast)',
                'phonecode' => 225,
                'is_active' => 1,
                'emoji' => '🇨🇮',
                'currency_code' => 'XOF',
                'currency_name' => 'CFA Franc BCEAO'
            ],
            [
                'id' => 54,
                'code' => 'HR',
                'name' => 'Croatia (Hrvatska)',
                'phonecode' => 385,
                'is_active' => 1,
                'emoji' => '🇭🇷',
                'currency_code' => 'HRK',
                'currency_name' => 'Croatian Kuna'
            ],
            [
                'id' => 55,
                'code' => 'CU',
                'name' => 'Cuba',
                'phonecode' => 53,
                'is_active' => 1,
                'emoji' => '🇨🇺',
                'currency_code' => 'CUC',
                'currency_name' => 'Peso Convertible'
            ],
            [
                'id' => 56,
                'code' => 'CY',
                'name' => 'Cyprus',
                'phonecode' => 357,
                'is_active' => 1,
                'emoji' => '🇨🇾',
                'currency_code' => 'CYP',
                'currency_name' => 'Cyprus Pound'
            ],
            [
                'id' => 57,
                'code' => 'CZ',
                'name' => 'Czech Republic',
                'phonecode' => 420,
                'is_active' => 1,
                'emoji' => '🇨🇿',
                'currency_code' => 'CZK',
                'currency_name' => 'Czech Koruna'
            ],
            [
                'id' => 58,
                'code' => 'DK',
                'name' => 'Denmark',
                'phonecode' => 45,
                'is_active' => 1,
                'emoji' => '🇩🇰',
                'currency_code' => 'DKK',
                'currency_name' => 'Danish Krone'
            ],
            [
                'id' => 59,
                'code' => 'DJ',
                'name' => 'Djibouti',
                'phonecode' => 253,
                'is_active' => 1,
                'emoji' => '🇩🇯',

                'currency_code' => 'DJF',
                'currency_name' => 'Djibouti Franc'
            ],
            [
                'id' => 60,
                'code' => 'DM',
                'name' => 'Dominica',
                'phonecode' => 1767,
                'is_active' => 1,
                'emoji' => '🇩🇲',
                'currency_code' => 'XCD',
                'currency_name' => 'East Caribbean Dollar'
            ],
            [
                'id' => 61,
                'code' => 'DO',
                'name' => 'Dominican Republic',
                'phonecode' => 1809,
                'is_active' => 1,
                'emoji' => '🇩🇴', 'currency_code' => 'DOP',
                'currency_name' => 'Dominican Peso'
            ],
            [
                'id' => 62,
                'code' => 'TP',
                'name' => 'East Timor',
                'phonecode' => 670,
                'is_active' => 1,
                'emoji' => '🇹🇷', 'currency_code' => 'USD',
                'currency_name' => 'US Dollar'
            ],
            [
                'id' => 63,
                'code' => 'EC',
                'name' => 'Ecuador',
                'phonecode' => 593,
                'is_active' => 1,
                'emoji' => '🇪🇨', 'currency_code' => 'USD',
                'currency_name' => 'US Dollar'
            ],
            [
                'id' => 64,
                'code' => 'EG',
                'name' => 'Egypt',
                'phonecode' => 20,
                'is_active' => 1,
                'emoji' => '🇪🇬', 'currency_code' => 'EGP',
                'currency_name' => 'Egyptian Pound'
            ],
            [
                'id' => 65,
                'code' => 'SV',
                'name' => 'El Salvador',
                'phonecode' => 503,
                'is_active' => 1,
                'emoji' => '🇸🇻', 'currency_code' => 'SVC',
                'currency_name' => 'El Salvador Colon'
            ],
            [
                'id' => 66,
                'code' => 'GQ',
                'name' => 'Equatorial Guinea',
                'phonecode' => 240,
                'is_active' => 1,
                'emoji' => '🇬🇶', 'currency_code' => 'XAF',
                'currency_name' => 'CFA Franc BEAC'
            ],
            [
                'id' => 67,
                'code' => 'ER',
                'name' => 'Eritrea',
                'phonecode' => 291,
                'is_active' => 1,
                'emoji' => '🇪🇷', 'currency_code' => 'ERN',
                'currency_name' => 'Nakfa'
            ],
            [
                'id' => 68,
                'code' => 'EE',
                'name' => 'Estonia',
                'phonecode' => 372,
                'is_active' => 1,
                'emoji' => '🇪🇪', 'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 69,
                'code' => 'ET',
                'name' => 'Ethiopia',
                'phonecode' => 251,
                'is_active' => 1,
                'emoji' => '🇪🇹',
                'currency_code' => 'ETB',
                'currency_name' => 'Ethiopian Birr'
            ],
            [
                'id' => 70,
                'code' => 'XA',
                'name' => 'External Territories of Australia',
                'phonecode' => 61,
                'is_active' => 1,
                'emoji' => '🇦🇺',
                'currency_code' => 'AUD',
                'currency_name' => 'Australian Dollar'
            ],
            [
                'id' => 71,
                'code' => 'FK',
                'name' => 'Falkland Islands',
                'phonecode' => 500,
                'is_active' => 1,
                'emoji' => '🇫🇰',
                'currency_code' => 'FKP',
                'currency_name' => 'Falkland Islands Pound'
            ],
            [
                'id' => 72,
                'code' => 'FO',
                'name' => 'Faroe Islands',
                'phonecode' => 298,
                'is_active' => 1,
                'emoji' => '🇫🇴',
                'currency_code' => 'DKK',
                'currency_name' => 'Danish Krone'
            ],
            [
                'id' => 73,
                'code' => 'FJ',
                'name' => 'Fiji Islands',
                'phonecode' => 679,
                'is_active' => 1,
                'emoji' => '🇫🇯',
                'currency_code' => 'FJD',
                'currency_name' => 'Fiji Dollar'
            ],
            [
                'id' => 74,
                'code' => 'FI',
                'name' => 'Finland',
                'phonecode' => 358,
                'is_active' => 1,
                'emoji' => '🇫🇮',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 75,
                'code' => 'FR',
                'name' => 'France',
                'phonecode' => 33,
                'is_active' => 1,
                'emoji' => '🇫🇷',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 76,
                'code' => 'GF',
                'name' => 'French Guiana',
                'phonecode' => 594,
                'is_active' => 1,
                'emoji' => '🇫🇷',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 77,
                'code' => 'PF',
                'name' => 'French Polynesia',
                'phonecode' => 689,
                'is_active' => 1,
                'emoji' => '🇵🇫',
                'currency_code' => 'XPF',
                'currency_name' => 'CFP Franc'
            ],
            [
                'id' => 78,
                'code' => 'TF',
                'name' => 'French Southern Territories',
                'phonecode' => 0,
                'is_active' => 1,
                'emoji' => '🇫🇷',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 79,
                'code' => 'GA',
                'name' => 'Gabon',
                'phonecode' => 241,
                'is_active' => 1,
                'emoji' => '🇬🇦',
                'currency_code' => 'XAF',
                'currency_name' => 'CFA Franc BEAC'
            ],
            [
                'id' => 80,
                'code' => 'GM',
                'name' => 'Gambia The',
                'phonecode' => 220,
                'is_active' => 1,
                'emoji' => '🇬🇲',
                'currency_code' => 'GMD',
                'currency_name' => 'Dalasi'
            ],
            [
                'id' => 81,
                'code' => 'GE',
                'name' => 'Georgia',
                'phonecode' => 995,
                'is_active' => 1,
                'emoji' => '🇬🇪',
                'currency_code' => 'GEL',
                'currency_name' => 'Lari'
            ],
            [
                'id' => 82,
                'code' => 'DE',
                'name' => 'Germany',
                'phonecode' => 49,
                'is_active' => 1,
                'emoji' => '🇩🇪',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 83,
                'code' => 'GH',
                'name' => 'Ghana',
                'phonecode' => 233,
                'is_active' => 1,
                'emoji' => '🇬🇭',
                'currency_code' => 'GHS',
                'currency_name' => 'Ghana Cedi'
            ],
            [
                'id' => 84,
                'code' => 'GI',
                'name' => 'Gibraltar',
                'phonecode' => 350,
                'is_active' => 1,
                'emoji' => '🇬🇮',
                'currency_code' => 'GIP',
                'currency_name' => 'Gibraltar Pound'
            ],
            [
                'id' => 85,
                'code' => 'GR',
                'name' => 'Greece',
                'phonecode' => 30,
                'is_active' => 1,
                'emoji' => '🇬🇷',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 86,
                'code' => 'GL',
                'name' => 'Greenland',
                'phonecode' => 299,
                'is_active' => 1,
                'emoji' => '🇬🇱',
                'currency_code' => 'DKK',
                'currency_name' => 'Danish Krone'
            ],
            [
                'id' => 87,
                'code' => 'GD',
                'name' => 'Grenada',
                'phonecode' => 1473,
                'is_active' => 1,
                'emoji' => '🇬🇩',
                'currency_code' => 'XCD',
                'currency_name' => 'East Caribbean Dollar'
            ],
            [
                'id' => 88,
                'code' => 'GP',
                'name' => 'Guadeloupe',
                'phonecode' => 590,
                'is_active' => 1,
                'emoji' => '🇬🇵',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 89,
                'code' => 'GU',
                'name' => 'Guam',
                'phonecode' => 1671,
                'is_active' => 1,
                'emoji' => '🇬🇺',
                'currency_code' => 'USD',
                'currency_name' => 'US Dollar'
            ],
            [
                'id' => 90,
                'code' => 'GT',
                'name' => 'Guatemala',
                'phonecode' => 502,
                'is_active' => 1,
                'emoji' => '🇬🇹',
                'currency_code' => 'GTQ',
                'currency_name' => 'Quetzal'
            ],
            [
                'id' => 91,
                'code' => 'XU',
                'name' => 'Guernsey and Alderney',
                'phonecode' => 44,
                'is_active' => 1,
                'emoji' => '🇬🇬',
                'currency_code' => 'GBP',
                'currency_name' => 'Pound Sterling'
            ],
            [
                'id' => 92,
                'code' => 'GN',
                'name' => 'Guinea',
                'phonecode' => 224,
                'is_active' => 1,
                'emoji' => '🇬🇳',
                'currency_code' => 'GNF',
                'currency_name' => 'Guinea Franc'
            ],
            [
                'id' => 93,
                'code' => 'GW',
                'name' => 'Guinea-Bissau',
                'phonecode' => 245,
                'is_active' => 1,
                'emoji' => '🇬🇼',
                'currency_code' => 'XOF',
                'currency_name' => 'CFA Franc BCEAO'
            ],
            [
                'id' => 94,
                'code' => 'GY',
                'name' => 'Guyana',
                'phonecode' => 592,
                'is_active' => 1,
                'emoji' => '🇬🇾',
                'currency_code' => 'GYD',
                'currency_name' => 'Guyana Dollar'
            ],
            [
                'id' => 95,
                'code' => 'HT',
                'name' => 'Haiti',
                'phonecode' => 509,
                'is_active' => 1,
                'emoji' => '🇭🇹',
                'currency_code' => 'HTG',
                'currency_name' => 'Gourde'
            ],
            [
                'id' => 96,
                'code' => 'HM',
                'name' => 'Heard and McDonald Islands',
                'phonecode' => 0,
                'is_active' => 1,
                'emoji' => '🇭🇲',
                'currency_code' => 'AUD',
                'currency_name' => 'Australian Dollar'
            ],
            [
                'id' => 97,
                'code' => 'HN',
                'name' => 'Honduras',
                'phonecode' => 504,
                'is_active' => 1,
                'emoji' => '🇭🇳',
                'currency_code' => 'HNL',
                'currency_name' => 'Lempira'
            ],
            [
                'id' => 98,
                'code' => 'HK',
                'name' => 'Hong Kong S.A.R.',
                'phonecode' => 852,
                'is_active' => 1,
                'emoji' => '🇭🇰',
                'currency_code' => 'HKD',
                'currency_name' => 'Hong Kong Dollar'
            ],
            [
                'id' => 99,
                'code' => 'HU',
                'name' => 'Hungary',
                'phonecode' => 36,
                'is_active' => 1,
                'emoji' => '🇭🇺',
                'currency_code' => 'HUF',
                'currency_name' => 'Forint'
            ],
            [
                'id' => 100,
                'code' => 'IS',
                'name' => 'Iceland',
                'phonecode' => 354,
                'is_active' => 1,
                'emoji' => '🇮🇸',
                'currency_code' => 'ISK',
                'currency_name' => 'Iceland Krona'
            ],
            [
                'id' => 101,
                'code' => 'IN',
                'name' => 'India',
                'phonecode' => 91,
                'is_active' => 1,
                'emoji' => '🇮🇳',
                'currency_code' => 'INR',
                'currency_name' => 'Indian Rupee'
            ],
            [
                'id' => 102,
                'code' => 'ID',
                'name' => 'Indonesia',
                'phonecode' => 62,
                'is_active' => 1,
                'emoji' => '🇮🇩',
                'currency_code' => 'IDR',
                'currency_name' => 'Rupiah'
            ],
            [
                'id' => 103,
                'code' => 'IR',
                'name' => 'Iran',
                'phonecode' => 98,
                'is_active' => 1,
                'emoji' => '🇮🇷',
                'currency_code' => 'IRR',
                'currency_name' => 'Iranian Rial'
            ],
            [
                'id' => 104,
                'code' => 'IQ',
                'name' => 'Iraq',
                'phonecode' => 964,
                'is_active' => 1,
                'emoji' => '🇮🇶',
                'currency_code' => 'IQD',
                'currency_name' => 'Iraqi Dinar'
            ],
            [
                'id' => 105,
                'code' => 'IE',
                'name' => 'Ireland',
                'phonecode' => 353,
                'is_active' => 1,
                'emoji' => '🇮🇪',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 106,
                'code' => 'IL',
                'name' => 'Israel',
                'phonecode' => 972,
                'is_active' => 1,
                'emoji' => '🇮🇱',
                'currency_code' => 'ILS',
                'currency_name' => 'New Israeli Sheqel'
            ],
            [
                'id' => 107,
                'code' => 'IT',
                'name' => 'Italy',
                'phonecode' => 39,
                'is_active' => 1,
                'emoji' => '🇮🇹',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 108,
                'code' => 'JM',
                'name' => 'Jamaica',
                'phonecode' => 1876,
                'is_active' => 1,
                'emoji' => '🇯🇲',
                'currency_code' => 'JMD',
                'currency_name' => 'Jamaican Dollar'
            ],
            [
                'id' => 109,
                'code' => 'JP',
                'name' => 'Japan',
                'phonecode' => 81,
                'is_active' => 1,
                'emoji' => '🇯🇵',
                'currency_code' => 'JPY',
                'currency_name' => 'Yen'
            ],
            [
                'id' => 110,
                'code' => 'XJ',
                'name' => 'Jersey',
                'phonecode' => 44,
                'is_active' => 1,
                'emoji' => '🇯🇪',
                'currency_code' => 'GBP',
                'currency_name' => 'Pound Sterling'
            ],
            [
                'id' => 111,
                'code' => 'JO',
                'name' => 'Jordan',
                'phonecode' => 962,
                'is_active' => 1,
                'emoji' => '🇯🇴',
                'currency_code' => 'JOD',
                'currency_name' => 'Jordanian Dinar'
            ],
            [
                'id' => 112,
                'code' => 'KZ',
                'name' => 'Kazakhstan',
                'phonecode' => 7,
                'is_active' => 1,
                'emoji' => '🇰🇿',
                'currency_code' => 'KZT',
                'currency_name' => 'Tenge'
            ],
            [
                'id' => 113,
                'code' => 'KE',
                'name' => 'Kenya',
                'phonecode' => 254,
                'is_active' => 1,
                'emoji' => '🇰🇪',
                'currency_code' => 'KES',
                'currency_name' => 'Kenyan Shilling'
            ],
            [
                'id' => 114,
                'code' => 'KI',
                'name' => 'Kiribati',
                'phonecode' => 686,
                'is_active' => 1,
                'emoji' => '🇰🇮',
                'currency_code' => 'AUD',
                'currency_name' => 'Australian Dollar'
            ],
            [
                'id' => 115,
                'code' => 'KP',
                'name' => 'Korea North',
                'phonecode' => 850,
                'is_active' => 1,
                'emoji' => '🇰🇵',
                'currency_code' => 'KPW',
                'currency_name' => 'North Korean Won'
            ],
            [
                'id' => 116,
                'code' => 'KR',
                'name' => 'Korea South',
                'phonecode' => 82,
                'is_active' => 1,
                'emoji' => '🇰🇷',
                'currency_code' => 'KRW',
                'currency_name' => 'Won'
            ],
            [
                'id' => 117,
                'code' => 'KW',
                'name' => 'Kuwait',
                'phonecode' => 965,
                'is_active' => 1,
                'emoji' => '🇰🇼',
                'currency_code' => 'KWD',
                'currency_name' => 'Kuwaiti Dinar'
            ],
            [
                'id' => 118,
                'code' => 'KG',
                'name' => 'Kyrgyzstan',
                'phonecode' => 996,
                'is_active' => 1,
                'emoji' => '🇰🇬',
                'currency_code' => 'KGS',
                'currency_name' => 'Som'
            ],
            [
                'id' => 119,
                'code' => 'LA',
                'name' => 'Laos',
                'phonecode' => 856,
                'is_active' => 1,
                'emoji' => '🇱🇦',
                'currency_code' => 'LAK',
                'currency_name' => 'Kip'
            ],
            [
                'id' => 120,
                'code' => 'LV',
                'name' => 'Latvia',
                'phonecode' => 371,
                'is_active' => 1,
                'emoji' => '🇱🇻',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 121,
                'code' => 'LB',
                'name' => 'Lebanon',
                'phonecode' => 961,
                'is_active' => 1,
                'emoji' => '🇱🇧',
                'currency_code' => 'LBP',
                'currency_name' => 'Lebanese Pound'
            ],
            [
                'id' => 122,
                'code' => 'LS',
                'name' => 'Lesotho',
                'phonecode' => 266,
                'is_active' => 1,
                'emoji' => '🇱🇸',
                'currency_code' => 'LSL',
                'currency_name' => 'Loti'
            ],
            [
                'id' => 123,
                'code' => 'LR',
                'name' => 'Liberia',
                'phonecode' => 231,
                'is_active' => 1,
                'emoji' => '🇱🇷',
                'currency_code' => 'LRD',
                'currency_name' => 'Liberian Dollar'
            ],
            [
                'id' => 124,
                'code' => 'LY',
                'name' => 'Libya',
                'phonecode' => 218,
                'is_active' => 1,
                'emoji' => '🇱🇾',
                'currency_code' => 'LYD',
                'currency_name' => 'Libyan Dinar'
            ],
            [
                'id' => 125,
                'code' => 'LI',
                'name' => 'Liechtenstein',
                'phonecode' => 423,
                'is_active' => 1,
                'emoji' => '🇱🇮',
                'currency_code' => 'CHF',
                'currency_name' => 'Swiss Franc'
            ],
            [
                'id' => 126,
                'code' => 'LT',
                'name' => 'Lithuania',
                'phonecode' => 370,
                'is_active' => 1,
                'emoji' => '🇱🇹',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 127,
                'code' => 'LU',
                'name' => 'Luxembourg',
                'phonecode' => 352,
                'is_active' => 1,
                'emoji' => '🇱🇺',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 128,
                'code' => 'MO',
                'name' => 'Macau S.A.R.',
                'phonecode' => 853,
                'is_active' => 1,
                'emoji' => '🇲🇴',
                'currency_code' => 'MOP',
                'currency_name' => 'Pataca'
            ],
            [
                'id' => 129,
                'code' => 'MK',
                'name' => 'Macedonia',
                'phonecode' => 389,
                'is_active' => 1,
                'emoji' => '🇲🇰',
                'currency_code' => 'MKD',
                'currency_name' => 'Denar'
            ],
            [
                'id' => 130,
                'code' => 'MG',
                'name' => 'Madagascar',
                'phonecode' => 261,
                'is_active' => 1,
                'emoji' => '🇲🇬',
                'currency_code' => 'MGA',
                'currency_name' => 'Malagasy Ariary'
            ],
            [
                'id' => 131,
                'code' => 'MW',
                'name' => 'Malawi',
                'phonecode' => 265,
                'is_active' => 1,
                'emoji' => '🇲🇼',
                'currency_code' => 'MWK',
                'currency_name' => 'Kwacha'
            ],
            [
                'id' => 132,
                'code' => 'MY',
                'name' => 'Malaysia',
                'phonecode' => 60,
                'is_active' => 1,
                'emoji' => '🇲🇾',
                'currency_code' => 'MYR',
                'currency_name' => 'Malaysian Ringgit'
            ],
            [
                'id' => 133,
                'code' => 'MV',
                'name' => 'Maldives',
                'phonecode' => 960,
                'is_active' => 1,
                'emoji' => '🇲🇻',
                'currency_code' => 'MVR',
                'currency_name' => 'Rufiyaa'
            ],
            [
                'id' => 134,
                'code' => 'ML',
                'name' => 'Mali',
                'phonecode' => 223,
                'is_active' => 1,
                'emoji' => '🇲🇱',
                'currency_code' => 'XOF',
                'currency_name' => 'CFA Franc BCEAO'
            ],
            [
                'id' => 135,
                'code' => 'MT',
                'name' => 'Malta',
                'phonecode' => 356,
                'is_active' => 1,
                'emoji' => '🇲🇹',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 136,
                'code' => 'XM',
                'name' => 'Isle of Man',
                'phonecode' => 44,
                'is_active' => 1,
                'emoji' => '🇮🇲',
                'currency_code' => 'GBP',
                'currency_name' => 'Pound Sterling'
            ],
            [
                'id' => 137,
                'code' => 'MH',
                'name' => 'Marshall Islands',
                'phonecode' => 692,
                'is_active' => 1,
                'emoji' => '🇲🇭',
                'currency_code' => 'USD',
                'currency_name' => 'US Dollar'
            ],
            [
                'id' => 138,
                'code' => 'MQ',
                'name' => 'Martinique',
                'phonecode' => 596,
                'is_active' => 1,
                'emoji' => '🇲🇶',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 139,
                'code' => 'MR',
                'name' => 'Mauritania',
                'phonecode' => 222,
                'is_active' => 1,
                'emoji' => '🇲🇷',
                'currency_code' => 'MRO',
                'currency_name' => 'Ouguiya'
            ],
            [
                'id' => 140,
                'code' => 'MU',
                'name' => 'Mauritius',
                'phonecode' => 230,
                'is_active' => 1,
                'emoji' => '🇲🇺',
                'currency_code' => 'MUR',
                'currency_name' => 'Mauritian Rupee'
            ],
            [
                'id' => 141,
                'code' => 'YT',
                'name' => 'Mayotte',
                'phonecode' => 269,
                'is_active' => 1,
                'emoji' => '🇾🇹',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 142,
                'code' => 'MX',
                'name' => 'Mexico',
                'phonecode' => 52,
                'is_active' => 1,
                'emoji' => '🇲🇽',
                'currency_code' => 'MXN',
                'currency_name' => 'Mexican Peso'
            ],
            [
                'id' => 143,
                'code' => 'FM',
                'name' => 'Micronesia',
                'phonecode' => 691,
                'is_active' => 1,
                'emoji' => '🇫🇲',
                'currency_code' => 'USD',
                'currency_name' => 'US Dollar'
            ],
            [
                'id' => 144,
                'code' => 'MD',
                'name' => 'Moldova',
                'phonecode' => 373,
                'is_active' => 1,
                'emoji' => '🇲🇩',
                'currency_code' => 'MDL',
                'currency_name' => 'Moldovan Leu'
            ],
            [
                'id' => 145,
                'code' => 'MC',
                'name' => 'Monaco',
                'phonecode' => 377,
                'is_active' => 1,
                'emoji' => '🇲🇨',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 146,
                'code' => 'MN',
                'name' => 'Mongolia',
                'phonecode' => 976,
                'is_active' => 1,
                'emoji' => '🇲🇳',
                'currency_code' => 'MNT',
                'currency_name' => 'Tugrik'
            ],
            [
                'id' => 147,
                'code' => 'MS',
                'name' => 'Montserrat',
                'phonecode' => 1664,
                'is_active' => 1,
                'emoji' => '🇲🇸',
                'currency_code' => 'XCD',
                'currency_name' => 'East Caribbean Dollar'
            ],
            [
                'id' => 148,
                'code' => 'MA',
                'name' => 'Morocco',
                'phonecode' => 212,
                'is_active' => 1,
                'emoji' => '🇲🇦',
                'currency_code' => 'MAD',
                'currency_name' => 'Moroccan Dirham'
            ],
            [
                'id' => 149,
                'code' => 'MZ',
                'name' => 'Mozambique',
                'phonecode' => 258,
                'is_active' => 1,
                'emoji' => '🇲🇿',
                'currency_code' => 'MZN',
                'currency_name' => 'Mozambique Metical'
            ],
            [
                'id' => 150,
                'code' => 'MM',
                'name' => 'Myanmar',
                'phonecode' => 95,
                'is_active' => 1,
                'emoji' => '🇲🇲',
                'currency_code' => 'MMK',
                'currency_name' => 'Kyat'
            ],
            [
                'id' => 151,
                'code' => 'NA',
                'name' => 'Namibia',
                'phonecode' => 264,
                'is_active' => 1,
                'emoji' => '🇳🇦',
                'currency_code' => 'NAD',
                'currency_name' => 'Namibia Dollar'
            ],
            [
                'id' => 152,
                'code' => 'NR',
                'name' => 'Nauru',
                'phonecode' => 674,
                'is_active' => 1,
                'emoji' => '🇳🇷',
                'currency_code' => 'AUD',
                'currency_name' => 'Australian Dollar'
            ],
            [
                'id' => 153,
                'code' => 'NP',
                'name' => 'Nepal',
                'phonecode' => 977,
                'is_active' => 1,
                'emoji' => '🇳🇵',
                'currency_code' => 'NPR',
                'currency_name' => 'Nepalese Rupee'
            ],
            [
                'id' => 154,
                'code' => 'AN',
                'name' => 'Netherlands Antilles',
                'phonecode' => 599,
                'is_active' => 1,
                'emoji' => '🇳🇱',
                'currency_code' => 'ANG',
                'currency_name' => 'Netherlands Antillian Guilder'
            ],
            [
                'id' => 155,
                'code' => 'NL',
                'name' => 'Netherlands',
                'phonecode' => 31,
                'is_active' => 1,
                'emoji' => '🇳🇱',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 156,
                'code' => 'NC',
                'name' => 'New Caledonia',
                'phonecode' => 687,
                'is_active' => 1,
                'emoji' => '🇳🇨',
                'currency_code' => 'XPF',
                'currency_name' => 'CFP Franc'
            ],
            [
                'id' => 157,
                'code' => 'NZ',
                'name' => 'New Zealand',
                'phonecode' => 64,
                'is_active' => 1,
                'emoji' => '🇳🇿',
                'currency_code' => 'NZD',
                'currency_name' => 'New Zealand Dollar'
            ],
            [
                'id' => 158,
                'code' => 'NI',
                'name' => 'Nicaragua',
                'phonecode' => 505,
                'is_active' => 1,
                'emoji' => '🇳🇮',
                'currency_code' => 'NIO',
                'currency_name' => 'Cordoba Oro'
            ],
            [
                'id' => 159,
                'code' => 'NE',
                'name' => 'Niger',
                'phonecode' => 227,
                'is_active' => 1,
                'emoji' => '🇳🇪',
                'currency_code' => 'XOF',
                'currency_name' => 'CFA Franc BCEAO'
            ],
            [
                'id' => 160,
                'code' => 'NG',
                'name' => 'Nigeria',
                'phonecode' => 234,
                'is_active' => 1,
                'emoji' => '🇳🇬',
                'currency_code' => 'NGN',
                'currency_name' => 'Naira'
            ],
            [
                'id' => 161,
                'code' => 'NU',
                'name' => 'Niue',
                'phonecode' => 683,
                'is_active' => 1,
                'emoji' => '🇳🇺',
                'currency_code' => 'NZD',
                'currency_name' => 'New Zealand Dollar'
            ],
            [
                'id' => 162,
                'code' => 'NF',
                'name' => 'Norfolk Island',
                'phonecode' => 672,
                'is_active' => 1,
                'emoji' => '🇳🇫',
                'currency_code' => 'AUD',
                'currency_name' => 'Australian Dollar'
            ],
            [
                'id' => 163,
                'code' => 'MP',
                'name' => 'Northern Mariana Islands',
                'phonecode' => 1670,
                'is_active' => 1,
                'emoji' => '🇲🇵',
                'currency_code' => 'USD',
                'currency_name' => 'US Dollar'
            ],
            [
                'id' => 164,
                'code' => 'NO',
                'name' => 'Norway',
                'phonecode' => 47,
                'is_active' => 1,
                'emoji' => '🇳🇴',
                'currency_code' => 'NOK',
                'currency_name' => 'Norwegian Krone'
            ],
            [
                'id' => 165,
                'code' => 'OM',
                'name' => 'Oman',
                'phonecode' => 968,
                'is_active' => 1,
                'emoji' => '🇴🇲',
                'currency_code' => 'OMR',
                'currency_name' => 'Rial Omani'
            ],
            [
                'id' => 166,
                'code' => 'PK',
                'name' => 'Pakistan',
                'phonecode' => 92,
                'is_active' => 1,
                'emoji' => '🇵🇰',
                'currency_code' => 'PKR',
                'currency_name' => 'Pakistan Rupee'
            ],
            [
                'id' => 167,
                'code' => 'PW',
                'name' => 'Palau',
                'phonecode' => 680,
                'is_active' => 1,
                'emoji' => '🇵🇼',
                'currency_code' => 'USD',
                'currency_name' => 'US Dollar'
            ],
            [
                'id' => 168,
                'code' => 'PS',
                'name' => 'Palestinian Territory Occupied',
                'phonecode' => 970,
                'is_active' => 1,
                'emoji' => '🇵🇸',
                'currency_code' => 'ILS',
                'currency_name' => 'Israeli Shekel'
            ],
            [
                'id' => 169,
                'code' => 'PA',
                'name' => 'Panama',
                'phonecode' => 507,
                'is_active' => 1,
                'emoji' => '🇵🇦',
                'currency_code' => 'PAB',
                'currency_name' => 'Balboa'
            ],
            [
                'id' => 170,
                'code' => 'PG',
                'name' => 'Papua new Guinea',
                'phonecode' => 675,
                'is_active' => 1,
                'emoji' => '🇵🇬',
                'currency_code' => 'PGK',
                'currency_name' => 'Kina'
            ],
            [
                'id' => 171,
                'code' => 'PY',
                'name' => 'Paraguay',
                'phonecode' => 595,
                'is_active' => 1,
                'emoji' => '🇵🇾',
                'currency_code' => 'PYG',
                'currency_name' => 'Guarani'
            ],
            [
                'id' => 172,
                'code' => 'PE',
                'name' => 'Peru',
                'phonecode' => 51,
                'is_active' => 1,
                'emoji' => '🇵🇪',
                'currency_code' => 'PEN',
                'currency_name' => 'Nuevo Sol'
            ],
            [
                'id' => 173,
                'code' => 'PH',
                'name' => 'Philippines',
                'phonecode' => 63,
                'is_active' => 1,
                'emoji' => '🇵🇭',
                'currency_code' => 'PHP',
                'currency_name' => 'Philippine Peso'
            ],
            [
                'id' => 174,
                'code' => 'PN',
                'name' => 'Pitcairn Island',
                'phonecode' => 0,
                'is_active' => 1,
                'emoji' => '🇵🇳',
                'currency_code' => 'NZD',
                'currency_name' => 'New Zealand Dollar'
            ],
            [
                'id' => 175,
                'code' => 'PL',
                'name' => 'Poland',
                'phonecode' => 48,
                'is_active' => 1,
                'emoji' => '🇵🇱',
                'currency_code' => 'PLN',
                'currency_name' => 'Zloty'
            ],
            [
                'id' => 176,
                'code' => 'PT',
                'name' => 'Portugal',
                'phonecode' => 351,
                'is_active' => 1,
                'emoji' => '🇵🇹',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 177,
                'code' => 'PR',
                'name' => 'Puerto Rico',
                'phonecode' => 1787,
                'is_active' => 1,
                'emoji' => '🇵🇷',
                'currency_code' => 'USD',
                'currency_name' => 'US Dollar'
            ],
            [
                'id' => 178,
                'code' => 'QA',
                'name' => 'Qatar',
                'phonecode' => 974,
                'is_active' => 1,
                'emoji' => '🇶🇦',
                'currency_code' => 'QAR',
                'currency_name' => 'Qatari Rial'
            ],
            [
                'id' => 179,
                'code' => 'RE',
                'name' => 'Reunion',
                'phonecode' => 262,
                'is_active' => 1,
                'emoji' => '🇷🇪',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 180,
                'code' => 'RO',
                'name' => 'Romania',
                'phonecode' => 40,
                'is_active' => 1,
                'emoji' => '🇷🇴',
                'currency_code' => 'RON',
                'currency_name' => 'New Leu'
            ],
            [
                'id' => 181,
                'code' => 'RU',
                'name' => 'Russia',
                'phonecode' => 70,
                'is_active' => 1,
                'emoji' => '🇷🇺',
                'currency_code' => 'RUB',
                'currency_name' => 'Russian Ruble'
            ],
            [
                'id' => 182,
                'code' => 'RW',
                'name' => 'Rwanda',
                'phonecode' => 250,
                'is_active' => 1,
                'emoji' => '🇷🇼',
                'currency_code' => 'RWF',
                'currency_name' => 'Rwanda Franc'
            ],
            [
                'id' => 183,
                'code' => 'SH',
                'name' => 'Saint Helena',
                'phonecode' => 290,
                'is_active' => 1,
                'emoji' => '🇸🇭',
                'currency_code' => 'SHP',
                'currency_name' => 'Saint Helena Pound'
            ],
            [
                'id' => 184,
                'code' => 'KN',
                'name' => 'Saint Kitts And Nevis',
                'phonecode' => 1869,
                'is_active' => 1,
                'emoji' => '🇰🇳',
                'currency_code' => 'XCD',
                'currency_name' => 'East Caribbean Dollar'
            ],
            [
                'id' => 185,
                'code' => 'LC',
                'name' => 'Saint Lucia',
                'phonecode' => 1758,
                'is_active' => 1,
                'emoji' => '🇱🇨',
                'currency_code' => 'XCD',
                'currency_name' => 'East Caribbean Dollar'
            ],
            [
                'id' => 186,
                'code' => 'PM',
                'name' => 'Saint Pierre and Miquelon',
                'phonecode' => 508,
                'is_active' => 1,
                'emoji' => '🇵🇲',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 187,
                'code' => 'VC',
                'name' => 'Saint Vincent And The Grenadines',
                'phonecode' => 1784,
                'is_active' => 1,
                'emoji' => '🇻🇨',
                'currency_code' => 'XCD',
                'currency_name' => 'East Caribbean Dollar'
            ],
            [
                'id' => 188,
                'code' => 'WS',
                'name' => 'Samoa',
                'phonecode' => 684,
                'is_active' => 1,
                'emoji' => '🇼🇸',
                'currency_code' => 'WST',
                'currency_name' => 'Tala'
            ],
            [
                'id' => 189,
                'code' => 'SM',
                'name' => 'San Marino',
                'phonecode' => 378,
                'is_active' => 1,
                'emoji' => '🇸🇲',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 190,
                'code' => 'ST',
                'name' => 'Sao Tome and Principe',
                'phonecode' => 239,
                'is_active' => 1,
                'emoji' => '🇸🇹',
                'currency_code' => 'STD',
                'currency_name' => 'Dobra'
            ],
            [
                'id' => 191,
                'code' => 'SA',
                'name' => 'Saudi Arabia',
                'phonecode' => 966,
                'is_active' => 1,
                'emoji' => '🇸🇦',
                'currency_code' => 'SAR',
                'currency_name' => 'Saudi Riyal'
            ],
            [
                'id' => 192,
                'code' => 'SN',
                'name' => 'Senegal',
                'phonecode' => 221,
                'is_active' => 1,
                'emoji' => '🇸🇳',
                'currency_code' => 'XOF',
                'currency_name' => 'CFA Franc BCEAO'
            ],
            [
                'id' => 193,
                'code' => 'RS',
                'name' => 'Serbia',
                'phonecode' => 381,
                'is_active' => 1,
                'emoji' => '🇷🇸',
                'currency_code' => 'RSD',
                'currency_name' => 'Serbian Dinar'
            ],
            [
                'id' => 194,
                'code' => 'SC',
                'name' => 'Seychelles',
                'phonecode' => 248,
                'is_active' => 1,
                'emoji' => '🇸🇨',
                'currency_code' => 'SCR',
                'currency_name' => 'Seychelles Rupee'
            ],
            [
                'id' => 195,
                'code' => 'SL',
                'name' => 'Sierra Leone',
                'phonecode' => 232,
                'is_active' => 1,
                'emoji' => '🇸🇱',
                'currency_code' => 'SLL',
                'currency_name' => 'Leone'
            ],
            [
                'id' => 196,
                'code' => 'SG',
                'name' => 'Singapore',
                'phonecode' => 65,
                'is_active' => 1,
                'emoji' => '🇸🇬',
                'currency_code' => 'SGD',
                'currency_name' => 'Singapore Dollar'
            ],
            [
                'id' => 197,
                'code' => 'SK',
                'name' => 'Slovakia',
                'phonecode' => 421,
                'is_active' => 1,
                'emoji' => '🇸🇰',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 198,
                'code' => 'SI',
                'name' => 'Slovenia',
                'phonecode' => 386,
                'is_active' => 1,
                'emoji' => '🇸🇮',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 199,
                'code' => 'XG',
                'name' => 'Smaller Territories of the UK',
                'phonecode' => 44,
                'is_active' => 1,
                'emoji' => '🇬🇧',
                'currency_code' => 'GBP',
                'currency_name' => 'Pound Sterling'
            ],
            [
                'id' => 200,
                'code' => 'SB',
                'name' => 'Solomon Islands',
                'phonecode' => 677,
                'is_active' => 1,
                'emoji' => '🇸🇧',
                'currency_code' => 'SBD',
                'currency_name' => 'Solomon Islands Dollar'
            ],
            [
                'id' => 201,
                'code' => 'SO',
                'name' => 'Somalia',
                'phonecode' => 252,
                'is_active' => 1,
                'emoji' => '🇸🇴',
                'currency_code' => 'SOS',
                'currency_name' => 'Somali Shilling'
            ],
            [
                'id' => 202,
                'code' => 'ZA',
                'name' => 'South Africa',
                'phonecode' => 27,
                'is_active' => 1,
                'emoji' => '🇿🇦',
                'currency_code' => 'ZAR',
                'currency_name' => 'Rand'
            ],
            [
                'id' => 203,
                'code' => 'GS',
                'name' => 'South Georgia',
                'phonecode' => 0,
                'is_active' => 1,
                'emoji' => '🇬🇸',
                'currency_code' => 'GBP',
                'currency_name' => 'Pound Sterling'
            ],
            [
                'id' => 204,
                'code' => 'SS',
                'name' => 'South Sudan',
                'phonecode' => 211,
                'is_active' => 1,
                'emoji' => '🇸🇸',
                'currency_code' => 'SSP',
                'currency_name' => 'South Sudanese Pound'
            ],
            [
                'id' => 205,
                'code' => 'ES',
                'name' => 'Spain',
                'phonecode' => 34,
                'is_active' => 1,
                'emoji' => '🇪🇸',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 206,
                'code' => 'LK',
                'name' => 'Sri Lanka',
                'phonecode' => 94,
                'is_active' => 1,
                'emoji' => '🇱🇰',
                'currency_code' => 'LKR',
                'currency_name' => 'Sri Lanka Rupee'
            ],
            [
                'id' => 207,
                'code' => 'SD',
                'name' => 'Sudan',
                'phonecode' => 249,
                'is_active' => 1,
                'emoji' => '🇸🇩',

                'currency_code' => 'SDG',
                'currency_name' => 'Sudanese Pound'
            ],
            [
                'id' => 208,
                'code' => 'SR',
                'name' => 'Suriname',
                'phonecode' => 597,
                'is_active' => 1,
                'emoji' => '🇸🇷',
                'currency_code' => 'SRD',
                'currency_name' => 'Surinamese Dollar'
            ],
            [
                'id' => 209,
                'code' => 'SJ',
                'name' => 'Svalbard And Jan Mayen Islands',
                'phonecode' => 47,
                'is_active' => 1,
                'emoji' => '🇸🇯',
                'currency_code' => 'NOK',
                'currency_name' => 'Norwegian Krone'
            ],
            [
                'id' => 210,
                'code' => 'SZ',
                'name' => 'Swaziland',
                'phonecode' => 268,
                'is_active' => 1,
                'emoji' => '🇸🇿',
                'currency_code' => 'SZL',
                'currency_name' => 'Lilangeni'
            ],
            [
                'id' => 211,
                'code' => 'SE',
                'name' => 'Sweden',
                'phonecode' => 46,
                'is_active' => 1,
                'emoji' => '🇸🇪',
                'currency_code' => 'SEK',
                'currency_name' => 'Swedish Krona'
            ],
            [
                'id' => 212,
                'code' => 'CH',
                'name' => 'Switzerland',
                'phonecode' => 41,
                'is_active' => 1,
                'emoji' => '🇨🇭',
                'currency_code' => 'CHF',
                'currency_name' => 'Swiss Franc'
            ],
            [
                'id' => 213,
                'code' => 'SY',
                'name' => 'Syria',
                'phonecode' => 963,
                'is_active' => 1,
                'emoji' => '🇸🇾',
                'currency_code' => 'SYP',
                'currency_name' => 'Syrian Pound'
            ],
            [
                'id' => 214,
                'code' => 'TW',
                'name' => 'Taiwan',
                'phonecode' => 886,
                'is_active' => 1,
                'emoji' => '🇹🇼',
                'currency_code' => 'TWD',
                'currency_name' => 'New Taiwan Dollar'
            ],
            [
                'id' => 215,
                'code' => 'TJ',
                'name' => 'Tajikistan',
                'phonecode' => 992,
                'is_active' => 1,
                'emoji' => '🇹🇯',
                'currency_code' => 'TJS',
                'currency_name' => 'Somoni'
            ],
            [
                'id' => 216,
                'code' => 'TZ',
                'name' => 'Tanzania',
                'phonecode' => 255,
                'is_active' => 1,
                'emoji' => '🇹🇿',

                'currency_code' => 'TZS',
                'currency_name' => 'Tanzanian Shilling'
            ],
            [
                'id' => 217,
                'code' => 'TH',
                'name' => 'Thailand',
                'phonecode' => 66,
                'is_active' => 1,
                'emoji' => '🇹🇭',
                'currency_code' => 'THB',
                'currency_name' => 'Baht'
            ],
            [
                'id' => 218,
                'code' => 'TG',
                'name' => 'Togo',
                'phonecode' => 228,
                'is_active' => 1,
                'emoji' => '🇹🇬',
                'currency_code' => 'XOF',
                'currency_name' => 'CFA Franc BCEAO'
            ],
            [
                'id' => 219,
                'code' => 'TK',
                'name' => 'Tokelau',
                'phonecode' => 690,
                'is_active' => 1,
                'emoji' => '🇹🇰',
                'currency_code' => 'NZD',
                'currency_name' => 'New Zealand Dollar'
            ],
            [
                'id' => 220,
                'code' => 'TO',
                'name' => 'Tonga',
                'phonecode' => 676,
                'is_active' => 1,
                'emoji' => '🇹🇴',
                'currency_code' => 'TOP',
                'currency_name' => 'Pa\'anga'
            ],
            [
                'id' => 221,
                'code' => 'TT',
                'name' => 'Trinidad And Tobago',
                'phonecode' => 1868,
                'is_active' => 1,
                'emoji' => '🇹🇹',
                'currency_code' => 'TTD',
                'currency_name' => 'Trinidad and Tobago Dollar'
            ],
            [
                'id' => 222,
                'code' => 'TN',
                'name' => 'Tunisia',
                'phonecode' => 216,
                'is_active' => 1,
                'emoji' => '🇹🇳',
                'currency_code' => 'TND',
                'currency_name' => 'Tunisian Dinar'
            ],
            [
                'id' => 223,
                'code' => 'TR',
                'name' => 'Turkey',
                'phonecode' => 90,
                'is_active' => 1,
                'emoji' => '🇹🇷',
                'currency_code' => 'TRY',
                'currency_name' => 'Turkish Lira'
            ],
            [
                'id' => 224,
                'code' => 'TM',
                'name' => 'Turkmenistan',
                'phonecode' => 7370,
                'is_active' => 1,
                'emoji' => '🇹🇲',
                'currency_code' => 'TMT',
                'currency_name' => 'Turkmenistan New Manat'
            ],
            [
                'id' => 225,
                'code' => 'TC',
                'name' => 'Turks And Caicos Islands',
                'phonecode' => 1649,
                'is_active' => 1,
                'emoji' => '🇹🇨',
                'currency_code' => 'USD',
                'currency_name' => 'US Dollar'
            ],
            [
                'id' => 226,
                'code' => 'TV',
                'name' => 'Tuvalu',
                'phonecode' => 688,
                'is_active' => 1,
                'emoji' => '🇹🇻',
                'currency_code' => 'AUD',
                'currency_name' => 'Australian Dollar'
            ],
            [
                'id' => 227,
                'code' => 'UG',
                'name' => 'Uganda',
                'phonecode' => 256,
                'is_active' => 1,
                'emoji' => '🇺🇬',
                'currency_code' => 'UGX',
                'currency_name' => 'Uganda Shilling'
            ],
            [
                'id' => 228,
                'code' => 'UA',
                'name' => 'Ukraine',
                'phonecode' => 380,
                'is_active' => 1,
                'emoji' => '🇺🇦',
                'currency_code' => 'UAH',
                'currency_name' => 'Hryvnia'
            ],
            [
                'id' => 229,
                'code' => 'AE',
                'name' => 'United Arab Emirates',
                'phonecode' => 971,
                'is_active' => 1,
                'emoji' => '🇦🇪',
                'currency_code' => 'AED',
                'currency_name' => 'UAE Dirham'
            ],
            [
                'id' => 230,
                'code' => 'GB',
                'name' => 'United Kingdom',
                'phonecode' => 44,
                'is_active' => 1,
                'emoji' => '🇬🇧',
                'currency_code' => 'GBP',
                'currency_name' => 'Pound Sterling'
            ],
            [
                'id' => 231,
                'code' => 'US',
                'name' => 'United States',
                'phonecode' => 1,
                'is_active' => 1,
                'emoji' => '🇺🇸',
                'currency_code' => 'USD',
                'currency_name' => 'US Dollar'
            ],
            [
                'id' => 232,
                'code' => 'UM',
                'name' => 'United States Minor Outlying Islands',
                'phonecode' => 1,
                'is_active' => 1,
                'emoji' => '🇺🇲',
                'currency_code' => 'USD',
                'currency_name' => 'US Dollar'
            ],
            [
                'id' => 233,
                'code' => 'UY',
                'name' => 'Uruguay',
                'phonecode' => 598,
                'is_active' => 1,
                'emoji' => '🇺🇾',
                'currency_code' => 'UYU',
                'currency_name' => 'Peso Uruguayo'
            ],
            [
                'id' => 234,
                'code' => 'UZ',
                'name' => 'Uzbekistan',
                'phonecode' => 998,
                'is_active' => 1,
                'emoji' => '🇺🇿',
                'currency_code' => 'UZS',
                'currency_name' => 'Uzbekistan Sum'
            ],
            [
                'id' => 235,
                'code' => 'VU',
                'name' => 'Vanuatu',
                'phonecode' => 678,
                'is_active' => 1,
                'emoji' => '🇻🇺',
                'currency_code' => 'VUV',
                'currency_name' => 'Vatu'
            ],
            [
                'id' => 236,
                'code' => 'VA',
                'name' => 'Vatican City State (Holy See)',
                'phonecode' => 39,
                'is_active' => 1,
                'emoji' => '🇻🇦',
                'currency_code' => 'EUR',
                'currency_name' => 'Euro'
            ],
            [
                'id' => 237,
                'code' => 'VE',
                'name' => 'Venezuela',
                'phonecode' => 58,
                'is_active' => 1,
                'emoji' => '🇻🇪',
                'currency_code' => 'VEF',
                'currency_name' => 'Bolivar Fuerte'
            ],
            [
                'id' => 238,
                'code' => 'VN',
                'name' => 'Vietnam',
                'phonecode' => 84,
                'is_active' => 1,
                'emoji' => '🇻🇳',
                'currency_code' => 'VND',
                'currency_name' => 'Dong'
            ],
            [
                'id' => 239,
                'code' => 'VG',
                'name' => 'Virgin Islands (British)',
                'phonecode' => 1284,
                'is_active' => 1,
                'emoji' => '🇻🇬',
                'currency_code' => 'USD',
                'currency_name' => 'US Dollar'
            ],
            [
                'id' => 240,
                'code' => 'VI',
                'name' => 'Virgin Islands (US)',
                'phonecode' => 1340,
                'is_active' => 1,
                'emoji' => '🇻🇮',
                'currency_code' => 'USD',
                'currency_name' => 'US Dollar'
            ],
            [
                'id' => 241,
                'code' => 'WF',
                'name' => 'Wallis And Futuna Islands',
                'phonecode' => 681,
                'is_active' => 1,
                'emoji' => '🇼🇫',
                'currency_code' => 'XPF',
                'currency_name' => 'CFP franc (franc Pacifique)'
            ],
            [
                'id' => 242,
                'code' => 'EH',
                'name' => 'Western Sahara',
                'phonecode' => 212,
                'is_active' => 1,
                'emoji' => '🇪🇭',
                'currency_code' => 'DZD',
                'currency_name' => 'Algerian dinar'
            ],
            [
                'id' => 243,
                'code' => 'YE',
                'name' => 'Yemen',
                'phonecode' => 967,
                'is_active' => 1,
                'emoji' => '🇾🇪',
                'currency_code' => 'YER',
                'currency_name' => 'Yemeni Rial'
            ],
            [
                'id' => 244,
                'code' => 'YU',
                'name' => 'Yugoslavia',
                'phonecode' => 38,
                'is_active' => 1,
                'emoji' => '🇾u',
                'currency_code' => 'YUM',
                'currency_name' => 'Yugoslav dinar'
            ],
            [
                'id' => 245,
                'code' => 'ZM',
                'name' => 'Zambia',
                'phonecode' => 260,
                'is_active' => 1,
                'emoji' => '🇿🇲',
                'currency_code' => 'ZMW',
                'currency_name' => 'Zambian Kwacha'
            ],
            [
                'id' => 246,
                'code' => 'ZW',
                'name' => 'Zimbabwe',
                'phonecode' => 263,
                'is_active' => 1,
                'emoji' => '🇿🇼',
                'currency_code' => 'ZWL',
                'currency_name' => 'Zimbabwe Dollar'
            ],
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('countries')->truncate();
        Schema::enableForeignKeyConstraints();
        DB::table('countries')->insert($countries);
    }
}
