<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://localhost',
    'asset_url' => 'http://localhost',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:FolumzZ3ObQ6bG0mKeoQmpaSCpoPtUGCR11xAPHnfbI=',
    'cipher' => 'AES-256-CBC',
    'maintenance' => 
    array (
      'driver' => 'file',
    ),
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Intervention\\Image\\ImageServiceProvider',
      23 => 'Cartalyst\\Stripe\\Laravel\\StripeServiceProvider',
      24 => 'Mailjet\\LaravelMailjet\\MailjetServiceProvider',
      25 => 'October\\Rain\\Config\\ServiceProvider',
      26 => 'Unicodeveloper\\Paystack\\PaystackServiceProvider',
      27 => 'LoveyCom\\CashFree\\CashFreeServiceProvider',
      28 => 'Paytabscom\\Laravel_paytabs\\PaypageServiceProvider',
      29 => 'HTMLMin\\HTMLMin\\HTMLMinServiceProvider',
      30 => 'App\\Providers\\AppServiceProvider',
      31 => 'App\\Providers\\AuthServiceProvider',
      32 => 'App\\Providers\\EventServiceProvider',
      33 => 'App\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Js' => 'Illuminate\\Support\\Js',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Vite' => 'Illuminate\\Support\\Facades\\Vite',
      'Image' => 'Intervention\\Image\\Facades\\Image',
      'Stripe' => 'Cartalyst\\Stripe\\Laravel\\Facades\\Stripe',
      'Mailjet' => 'Mailjet\\LaravelMailjet\\Facades\\Mailjet',
      'Paystack' => 'Unicodeveloper\\Paystack\\Facades\\Paystack',
      'HTMLMin' => 'HTMLMin\\HTMLMin\\Facades\\HTMLMin',
    ),
    'mix_url' => NULL,
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'admin' => 
      array (
        'driver' => 'session',
        'provider' => 'admins',
      ),
      'sanctum' => 
      array (
        'driver' => 'sanctum',
        'provider' => NULL,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
      'admins' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\Admin',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'blade-flags' => 
  array (
    'prefix' => 'flag',
    'fallback' => '',
    'class' => '',
    'attributes' => 
    array (
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => 'fd8e341790316fac7d06',
        'secret' => '25470c458b9e0544d804',
        'app_id' => '1614884',
        'options' => 
        array (
          'host' => 'api-us2.pusher.com',
          'port' => '443',
          'scheme' => 'https',
          'encrypted' => true,
          'useTLS' => true,
        ),
        'client_options' => 
        array (
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'C:\\artisan\\riverr\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => 'AKIA525LDBK2M3KUXK3R',
        'secret' => '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',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
    ),
    'prefix' => 'ypdIqwYDKYckPCj_cache_',
  ),
  'carbon-formats' => 
  array (
    'F_d,_Y' => 'F d, Y',
    'F_j_Y' => 'F j Y',
    'F_j,_Y_h_:_i_A' => 'F j, Y h:i A',
    'F_j,_Y' => 'F j, Y',
  ),
  'carbon-locales' => 
  array (
    'en' => 'English',
    'en_001' => 'English (001)',
    'en_150' => 'English (150)',
    'en_AG' => 'English (Antigua and Barbuda)',
    'en_AI' => 'English (Anguilla)',
    'en_AS' => 'English (American Samoa)',
    'en_AT' => 'English (Austria)',
    'en_AU' => 'English (Australia)',
    'en_BB' => 'English (Barbados)',
    'en_BE' => 'English (Belgium)',
    'en_BI' => 'English (Burundi)',
    'en_BM' => 'English (Bermuda)',
    'en_BS' => 'English (Bahamas)',
    'en_BW' => 'English (Botswana)',
    'en_BZ' => 'English (Belize)',
    'en_CA' => 'English (Canada)',
    'en_CC' => 'English (Cocos (Keeling) Islands)',
    'en_CH' => 'English (Switzerland)',
    'en_CK' => 'English (Cook Islands)',
    'en_CM' => 'English (Cameroon)',
    'en_CX' => 'English (Christmas Island)',
    'en_CY' => 'English (Cyprus)',
    'en_DE' => 'English (Germany)',
    'en_DG' => 'English (DG)',
    'en_DK' => 'English (Denmark)',
    'en_DM' => 'English (Dominica)',
    'en_ER' => 'English (Eritrea)',
    'en_FI' => 'English (Finland)',
    'en_FJ' => 'English (Fiji)',
    'en_FK' => 'English (Falkland Islands (Malvinas))',
    'en_FM' => 'English (Micronesia (Federated States of))',
    'en_GB' => 'English (United Kingdom of Great Britain and Northern Ireland)',
    'en_GD' => 'English (Grenada)',
    'en_GG' => 'English (Guernsey)',
    'en_GH' => 'English (Ghana)',
    'en_GI' => 'English (Gibraltar)',
    'en_GM' => 'English (Gambia)',
    'en_GU' => 'English (Guam)',
    'en_GY' => 'English (Guyana)',
    'en_HK' => 'English (Hong Kong)',
    'en_IE' => 'English (Ireland)',
    'en_IL' => 'English (Israel)',
    'en_IM' => 'English (Isle of Man)',
    'en_IN' => 'English (India)',
    'en_IO' => 'English (British Indian Ocean Territory)',
    'en_ISO' => 'English (ISO)',
    'en_JE' => 'English (Jersey)',
    'en_JM' => 'English (Jamaica)',
    'en_KE' => 'English (Kenya)',
    'en_KI' => 'English (Kiribati)',
    'en_KN' => 'English (Saint Kitts and Nevis)',
    'en_KY' => 'English (Cayman Islands)',
    'en_LC' => 'English (Saint Lucia)',
    'en_LR' => 'English (Liberia)',
    'en_LS' => 'English (Lesotho)',
    'en_MG' => 'English (Madagascar)',
    'en_MH' => 'English (Marshall Islands)',
    'en_MO' => 'English (Macao)',
    'en_MP' => 'English (Northern Mariana Islands)',
    'en_MS' => 'English (Montserrat)',
    'en_MT' => 'English (Malta)',
    'en_MU' => 'English (Mauritius)',
    'en_MW' => 'English (Malawi)',
    'en_MY' => 'English (Malaysia)',
    'en_NA' => 'English (Namibia)',
    'en_NF' => 'English (Norfolk Island)',
    'en_NG' => 'English (Nigeria)',
    'en_NL' => 'English (Netherlands)',
    'en_NR' => 'English (Nauru)',
    'en_NU' => 'English (Niue)',
    'en_NZ' => 'English (New Zealand)',
    'en_PG' => 'English (Papua New Guinea)',
    'en_PH' => 'English (Philippines)',
    'en_PK' => 'English (Pakistan)',
    'en_PN' => 'English (Pitcairn)',
    'en_PR' => 'English (Puerto Rico)',
    'en_PW' => 'English (Palau)',
    'en_RW' => 'English (Rwanda)',
    'en_SB' => 'English (Solomon Islands)',
    'en_SC' => 'English (Seychelles)',
    'en_SD' => 'English (Sudan)',
    'en_SE' => 'English (Sweden)',
    'en_SG' => 'English (Singapore)',
    'en_SH' => 'English (Saint Helena, Ascension and Tristan da Cunha)',
    'en_SI' => 'English (Slovenia)',
    'en_SL' => 'English (Sierra Leone)',
    'en_SS' => 'English (South Sudan)',
    'en_SX' => 'English (Sint Maarten (Dutch part))',
    'en_SZ' => 'English (Eswatini)',
    'en_TC' => 'English (Turks and Caicos Islands)',
    'en_TK' => 'English (Tokelau)',
    'en_TO' => 'English (Tonga)',
    'en_TT' => 'English (Trinidad and Tobago)',
    'en_TV' => 'English (Tuvalu)',
    'en_TZ' => 'English (Tanzania, United Republic of)',
    'en_UG' => 'English (Uganda)',
    'en_UM' => 'English (United States Minor Outlying Islands)',
    'en_US' => 'English (United States of America)',
    'en_US_Posix' => 'English (United States of America)',
    'en_VC' => 'English (Saint Vincent and the Grenadines)',
    'en_VG' => 'English (Virgin Islands (British))',
    'en_VI' => 'English (Virgin Islands (U.S.))',
    'en_VU' => 'English (Vanuatu)',
    'en_WS' => 'English (Samoa)',
    'en_ZA' => 'English (South Africa)',
    'en_ZM' => 'English (Zambia)',
    'en_ZW' => 'English (Zimbabwe)',
    'aa' => 'Afar',
    'aa_DJ' => 'Afar (Djibouti)',
    'aa_ER' => 'Afar (Eritrea)',
    'aa_ER@saaho' => 'Afar (ER@saaho)',
    'aa_ET' => 'Afar (Ethiopia)',
    'af' => 'Afrikaans',
    'af_NA' => 'Afrikaans (Namibia)',
    'af_ZA' => 'Afrikaans (South Africa)',
    'agq' => 'Aghem',
    'agr' => 'Aguaruna',
    'agr_PE' => 'Aguaruna (Peru)',
    'ak' => 'Akan',
    'ak_GH' => 'Akan (Ghana)',
    'am' => 'Amharic',
    'am_ET' => 'Amharic (Ethiopia)',
    'an' => 'Aragonese',
    'an_ES' => 'Aragonese (Spain)',
    'anp' => 'Angika',
    'anp_IN' => 'Angika (India)',
    'ar' => 'Arabic',
    'ar_AE' => 'Arabic (United Arab Emirates)',
    'ar_BH' => 'Arabic (Bahrain)',
    'ar_DJ' => 'Arabic (Djibouti)',
    'ar_DZ' => 'Arabic (Algeria)',
    'ar_EG' => 'Arabic (Egypt)',
    'ar_EH' => 'Arabic (Western Sahara)',
    'ar_ER' => 'Arabic (Eritrea)',
    'ar_IL' => 'Arabic (Israel)',
    'ar_IN' => 'Arabic (India)',
    'ar_IQ' => 'Arabic (Iraq)',
    'ar_JO' => 'Arabic (Jordan)',
    'ar_KM' => 'Arabic (Comoros)',
    'ar_KW' => 'Arabic (Kuwait)',
    'ar_LB' => 'Arabic (Lebanon)',
    'ar_LY' => 'Arabic (Libya)',
    'ar_MA' => 'Arabic (Morocco)',
    'ar_MR' => 'Arabic (Mauritania)',
    'ar_OM' => 'Arabic (Oman)',
    'ar_PS' => 'Arabic (Palestine, State of)',
    'ar_QA' => 'Arabic (Qatar)',
    'ar_SA' => 'Arabic (Saudi Arabia)',
    'ar_SD' => 'Arabic (Sudan)',
    'ar_SO' => 'Arabic (Somalia)',
    'ar_SS' => 'Arabic (South Sudan)',
    'ar_SY' => 'Arabic (Syrian Arab Republic)',
    'ar_Shakl' => 'Arabic (Shakl)',
    'ar_TD' => 'Arabic (Chad)',
    'ar_TN' => 'Arabic (Tunisia)',
    'ar_YE' => 'Arabic (Yemen)',
    'as' => 'Assamese',
    'as_IN' => 'Assamese (India)',
    'asa' => 'Asu',
    'ast' => 'Asturian',
    'ast_ES' => 'Asturian (Spain)',
    'ayc' => 'Southern Aymara',
    'ayc_PE' => 'Southern Aymara (Peru)',
    'az' => 'Azerbaijani',
    'az_AZ' => 'Azerbaijani (Azerbaijan)',
    'az_Cyrl' => 'Azerbaijani (Cyrillic)',
    'az_IR' => 'Azerbaijani (Iran (Islamic Republic of))',
    'az_Latn' => 'Azerbaijani (Latin)',
    'bas' => 'Basaa',
    'be' => 'Belarusian',
    'be_BY' => 'Belarusian (Belarus)',
    'be_BY@latin' => 'Belarusian (BY@latin)',
    'bem' => 'Bemba',
    'bem_ZM' => 'Bemba (Zambia)',
    'ber' => 'ber',
    'ber_DZ' => 'ber (Algeria)',
    'ber_MA' => 'ber (Morocco)',
    'bez' => 'Bena',
    'bg' => 'Bulgarian',
    'bg_BG' => 'Bulgarian (Bulgaria)',
    'bhb' => 'Bhili',
    'bhb_IN' => 'Bhili (India)',
    'bho' => 'Bhojpuri',
    'bho_IN' => 'Bhojpuri (India)',
    'bi' => 'Bislama',
    'bi_VU' => 'Bislama (Vanuatu)',
    'bm' => 'Bambara',
    'bn' => 'Bengali',
    'bn_BD' => 'Bengali (Bangladesh)',
    'bn_IN' => 'Bengali (India)',
    'bo' => 'Tibetan',
    'bo_CN' => 'Tibetan (China)',
    'bo_IN' => 'Tibetan (India)',
    'br' => 'Breton',
    'br_FR' => 'Breton (France)',
    'brx' => 'Bodo',
    'brx_IN' => 'Bodo (India)',
    'bs' => 'Bosnian',
    'bs_BA' => 'Bosnian (Bosnia and Herzegovina)',
    'bs_Cyrl' => 'Bosnian (Cyrillic)',
    'bs_Latn' => 'Bosnian (Latin)',
    'byn' => 'Bilin',
    'byn_ER' => 'Bilin (Eritrea)',
    'ca' => 'Catalan, Valencian',
    'ca_AD' => 'Catalan, Valencian (Andorra)',
    'ca_ES' => 'Catalan, Valencian (Spain)',
    'ca_ES_Valencia' => 'Catalan, Valencian (Spain)',
    'ca_FR' => 'Catalan, Valencian (France)',
    'ca_IT' => 'Catalan, Valencian (Italy)',
    'ccp' => 'Chakma',
    'ccp_IN' => 'Chakma (India)',
    'ce' => 'Chechen',
    'ce_RU' => 'Chechen (Russian Federation)',
    'cgg' => 'Chiga',
    'chr' => 'Cherokee',
    'chr_US' => 'Cherokee (United States of America)',
    'ckb' => 'ckb',
    'cmn' => 'Chinese',
    'cmn_TW' => 'Chinese (Taiwan, Province of China)',
    'crh' => 'Crimean Turkish',
    'crh_UA' => 'Crimean Turkish (Ukraine)',
    'cs' => 'Czech',
    'cs_CZ' => 'Czech (Czechia)',
    'csb' => 'Kashubian',
    'csb_PL' => 'Kashubian (Poland)',
    'cu' => 'Church&nbsp;Slavic, Church&nbsp;Slavonic,&nbsp;Old&nbsp;Church&nbsp;Slavonic, Old&nbsp;Slavonic,&nbsp;Old&nbsp;Bulgarian',
    'cv' => 'Chuvash',
    'cv_RU' => 'Chuvash (Russian Federation)',
    'cy' => 'Welsh',
    'cy_GB' => 'Welsh (United Kingdom of Great Britain and Northern Ireland)',
    'da' => 'Danish',
    'da_DK' => 'Danish (Denmark)',
    'da_GL' => 'Danish (Greenland)',
    'dav' => 'Taita',
    'de' => 'German',
    'de_AT' => 'German (Austria)',
    'de_BE' => 'German (Belgium)',
    'de_CH' => 'German (Switzerland)',
    'de_DE' => 'German (Germany)',
    'de_IT' => 'German (Italy)',
    'de_LI' => 'German (Liechtenstein)',
    'de_LU' => 'German (Luxembourg)',
    'dje' => 'Zarma',
    'doi' => 'Dogri (macrolanguage)',
    'doi_IN' => 'Dogri (macrolanguage) (India)',
    'dsb' => 'Lower Sorbian',
    'dsb_DE' => 'Lower Sorbian (Germany)',
    'dua' => 'Duala',
    'dv' => 'Divehi, Dhivehi, Maldivian',
    'dv_MV' => 'Divehi, Dhivehi, Maldivian (Maldives)',
    'dyo' => 'Jola-Fonyi',
    'dz' => 'Dzongkha',
    'dz_BT' => 'Dzongkha (Bhutan)',
    'ebu' => 'Embu',
    'ee' => 'Ewe',
    'ee_TG' => 'Ewe (Togo)',
    'el' => 'Greek&nbsp;(modern)',
    'el_CY' => 'Greek&nbsp;(modern) (Cyprus)',
    'el_GR' => 'Greek&nbsp;(modern) (Greece)',
    'eo' => 'Esperanto',
    'es' => 'Spanish, Castilian',
    'es_419' => 'Spanish, Castilian (419)',
    'es_AR' => 'Spanish, Castilian (Argentina)',
    'es_BO' => 'Spanish, Castilian (Bolivia (Plurinational State of))',
    'es_BR' => 'Spanish, Castilian (Brazil)',
    'es_BZ' => 'Spanish, Castilian (Belize)',
    'es_CL' => 'Spanish, Castilian (Chile)',
    'es_CO' => 'Spanish, Castilian (Colombia)',
    'es_CR' => 'Spanish, Castilian (Costa Rica)',
    'es_CU' => 'Spanish, Castilian (Cuba)',
    'es_DO' => 'Spanish, Castilian (Dominican Republic)',
    'es_EA' => 'Spanish, Castilian (EA)',
    'es_EC' => 'Spanish, Castilian (Ecuador)',
    'es_ES' => 'Spanish, Castilian (Spain)',
    'es_GQ' => 'Spanish, Castilian (Equatorial Guinea)',
    'es_GT' => 'Spanish, Castilian (Guatemala)',
    'es_HN' => 'Spanish, Castilian (Honduras)',
    'es_IC' => 'Spanish, Castilian (IC)',
    'es_MX' => 'Spanish, Castilian (Mexico)',
    'es_NI' => 'Spanish, Castilian (Nicaragua)',
    'es_PA' => 'Spanish, Castilian (Panama)',
    'es_PE' => 'Spanish, Castilian (Peru)',
    'es_PH' => 'Spanish, Castilian (Philippines)',
    'es_PR' => 'Spanish, Castilian (Puerto Rico)',
    'es_PY' => 'Spanish, Castilian (Paraguay)',
    'es_SV' => 'Spanish, Castilian (El Salvador)',
    'es_US' => 'Spanish, Castilian (United States of America)',
    'es_UY' => 'Spanish, Castilian (Uruguay)',
    'es_VE' => 'Spanish, Castilian (Venezuela (Bolivarian Republic of))',
    'et' => 'Estonian',
    'et_EE' => 'Estonian (Estonia)',
    'eu' => 'Basque',
    'eu_ES' => 'Basque (Spain)',
    'ewo' => 'Ewondo',
    'fa' => 'Persian',
    'fa_AF' => 'Persian (Afghanistan)',
    'fa_IR' => 'Persian (Iran (Islamic Republic of))',
    'ff' => 'Fulah',
    'ff_CM' => 'Fulah (Cameroon)',
    'ff_GN' => 'Fulah (Guinea)',
    'ff_MR' => 'Fulah (Mauritania)',
    'ff_SN' => 'Fulah (Senegal)',
    'fi' => 'Finnish',
    'fi_FI' => 'Finnish (Finland)',
    'fil' => 'Filipino',
    'fil_PH' => 'Filipino (Philippines)',
    'fo' => 'Faroese',
    'fo_DK' => 'Faroese (Denmark)',
    'fo_FO' => 'Faroese (Faroe Islands)',
    'fr' => 'French',
    'fr_BE' => 'French (Belgium)',
    'fr_BF' => 'French (Burkina Faso)',
    'fr_BI' => 'French (Burundi)',
    'fr_BJ' => 'French (Benin)',
    'fr_BL' => 'French (Saint Barthélemy)',
    'fr_CA' => 'French (Canada)',
    'fr_CD' => 'French (Congo, Democratic Republic of the)',
    'fr_CF' => 'French (Central African Republic)',
    'fr_CG' => 'French (Congo)',
    'fr_CH' => 'French (Switzerland)',
    'fr_CI' => 'French (Côte d\'Ivoire)',
    'fr_CM' => 'French (Cameroon)',
    'fr_DJ' => 'French (Djibouti)',
    'fr_DZ' => 'French (Algeria)',
    'fr_FR' => 'French (France)',
    'fr_GA' => 'French (Gabon)',
    'fr_GF' => 'French (French Guiana)',
    'fr_GN' => 'French (Guinea)',
    'fr_GP' => 'French (Guadeloupe)',
    'fr_GQ' => 'French (Equatorial Guinea)',
    'fr_HT' => 'French (Haiti)',
    'fr_KM' => 'French (Comoros)',
    'fr_LU' => 'French (Luxembourg)',
    'fr_MA' => 'French (Morocco)',
    'fr_MC' => 'French (Monaco)',
    'fr_MF' => 'French (Saint Martin (French part))',
    'fr_MG' => 'French (Madagascar)',
    'fr_ML' => 'French (Mali)',
    'fr_MQ' => 'French (Martinique)',
    'fr_MR' => 'French (Mauritania)',
    'fr_MU' => 'French (Mauritius)',
    'fr_NC' => 'French (New Caledonia)',
    'fr_NE' => 'French (Niger)',
    'fr_PF' => 'French (French Polynesia)',
    'fr_PM' => 'French (Saint Pierre and Miquelon)',
    'fr_RE' => 'French (Réunion)',
    'fr_RW' => 'French (Rwanda)',
    'fr_SC' => 'French (Seychelles)',
    'fr_SN' => 'French (Senegal)',
    'fr_SY' => 'French (Syrian Arab Republic)',
    'fr_TD' => 'French (Chad)',
    'fr_TG' => 'French (Togo)',
    'fr_TN' => 'French (Tunisia)',
    'fr_VU' => 'French (Vanuatu)',
    'fr_WF' => 'French (Wallis and Futuna)',
    'fr_YT' => 'French (Mayotte)',
    'fur' => 'Friulian',
    'fur_IT' => 'Friulian (Italy)',
    'fy' => 'Western Frisian',
    'fy_DE' => 'Western Frisian (Germany)',
    'fy_NL' => 'Western Frisian (Netherlands)',
    'ga' => 'Irish',
    'ga_IE' => 'Irish (Ireland)',
    'gd' => 'Gaelic, Scottish Gaelic',
    'gd_GB' => 'Gaelic, Scottish Gaelic (United Kingdom of Great Britain and Northern Ireland)',
    'gez' => 'Geez',
    'gez_ER' => 'Geez (Eritrea)',
    'gez_ET' => 'Geez (Ethiopia)',
    'gl' => 'Galician',
    'gl_ES' => 'Galician (Spain)',
    'gom' => 'Konkani, Goan',
    'gom_Latn' => 'Konkani, Goan (Latin)',
    'gsw' => 'Swiss German',
    'gsw_CH' => 'Swiss German (Switzerland)',
    'gsw_FR' => 'Swiss German (France)',
    'gsw_LI' => 'Swiss German (Liechtenstein)',
    'gu' => 'Gujarati',
    'gu_IN' => 'Gujarati (India)',
    'guz' => 'Gusii',
    'gv' => 'Manx',
    'gv_GB' => 'Manx (United Kingdom of Great Britain and Northern Ireland)',
    'ha' => 'Hausa',
    'ha_GH' => 'Hausa (Ghana)',
    'ha_NE' => 'Hausa (Niger)',
    'ha_NG' => 'Hausa (Nigeria)',
    'hak' => 'Hakka Chinese',
    'hak_TW' => 'Hakka Chinese (Taiwan, Province of China)',
    'haw' => 'Hawaiian',
    'he' => 'Hebrew&nbsp;(modern)',
    'he_IL' => 'Hebrew&nbsp;(modern) (Israel)',
    'hi' => 'Hindi',
    'hi_IN' => 'Hindi (India)',
    'hif' => 'Fiji Hindi',
    'hif_FJ' => 'Fiji Hindi (Fiji)',
    'hne' => 'Chhattisgarhi',
    'hne_IN' => 'Chhattisgarhi (India)',
    'hr' => 'Croatian',
    'hr_BA' => 'Croatian (Bosnia and Herzegovina)',
    'hr_HR' => 'Croatian (Croatia)',
    'hsb' => 'Upper Sorbian',
    'hsb_DE' => 'Upper Sorbian (Germany)',
    'ht' => 'Haitian, Haitian Creole',
    'ht_HT' => 'Haitian, Haitian Creole (Haiti)',
    'hu' => 'Hungarian',
    'hu_HU' => 'Hungarian (Hungary)',
    'hy' => 'Armenian',
    'hy_AM' => 'Armenian (Armenia)',
    'i18n' => 'i18n',
    'ia' => 'Interlingua',
    'ia_FR' => 'Interlingua (France)',
    'id' => 'Indonesian',
    'id_ID' => 'Indonesian (Indonesia)',
    'ig' => 'Igbo',
    'ig_NG' => 'Igbo (Nigeria)',
    'ii' => 'Sichuan Yi, Nuosu',
    'ik' => 'Inupiaq',
    'ik_CA' => 'Inupiaq (Canada)',
    'in' => 'in',
    'is' => 'Icelandic',
    'is_IS' => 'Icelandic (Iceland)',
    'it' => 'Italian',
    'it_CH' => 'Italian (Switzerland)',
    'it_IT' => 'Italian (Italy)',
    'it_SM' => 'Italian (San Marino)',
    'it_VA' => 'Italian (Holy See)',
    'iu' => 'Inuktitut',
    'iu_CA' => 'Inuktitut (Canada)',
    'iw' => 'iw',
    'ja' => 'Japanese',
    'ja_JP' => 'Japanese (Japan)',
    'jgo' => 'Ngomba',
    'jmc' => 'Machame',
    'jv' => 'Javanese',
    'ka' => 'Georgian',
    'ka_GE' => 'Georgian (Georgia)',
    'kab' => 'Kabyle',
    'kab_DZ' => 'Kabyle (Algeria)',
    'kam' => 'Kamba',
    'kde' => 'Makonde',
    'kea' => 'Kabuverdianu',
    'khq' => 'Koyra Chiini',
    'ki' => 'Kikuyu, Gikuyu',
    'kk' => 'Kazakh',
    'kk_KZ' => 'Kazakh (Kazakhstan)',
    'kkj' => 'Kako',
    'kl' => 'Kalaallisut, Greenlandic',
    'kl_GL' => 'Kalaallisut, Greenlandic (Greenland)',
    'kln' => 'Kalenjin',
    'km' => 'Central Khmer',
    'km_KH' => 'Central Khmer (Cambodia)',
    'kn' => 'Kannada',
    'kn_IN' => 'Kannada (India)',
    'ko' => 'Korean',
    'ko_KP' => 'Korean (Korea (Democratic People\'s Republic of))',
    'ko_KR' => 'Korean (Korea, Republic of)',
    'kok' => 'Konkani',
    'kok_IN' => 'Konkani (India)',
    'ks' => 'Kashmiri',
    'ks_IN' => 'Kashmiri (India)',
    'ks_IN@devanagari' => 'Kashmiri (IN@devanagari)',
    'ksb' => 'Shambala',
    'ksf' => 'Bafia',
    'ksh' => 'Colognian',
    'ku' => 'Kurdish',
    'ku_TR' => 'Kurdish (Turkey)',
    'kw' => 'Cornish',
    'kw_GB' => 'Cornish (United Kingdom of Great Britain and Northern Ireland)',
    'ky' => 'Kirghiz, Kyrgyz',
    'ky_KG' => 'Kirghiz, Kyrgyz (Kyrgyzstan)',
    'lag' => 'Langi',
    'lb' => 'Luxembourgish, Letzeburgesch',
    'lb_LU' => 'Luxembourgish, Letzeburgesch (Luxembourg)',
    'lg' => 'Ganda',
    'lg_UG' => 'Ganda (Uganda)',
    'li' => 'Limburgan, Limburger, Limburgish',
    'li_NL' => 'Limburgan, Limburger, Limburgish (Netherlands)',
    'lij' => 'Ligurian',
    'lij_IT' => 'Ligurian (Italy)',
    'lkt' => 'Lakota',
    'ln' => 'Lingala',
    'ln_AO' => 'Lingala (Angola)',
    'ln_CD' => 'Lingala (Congo, Democratic Republic of the)',
    'ln_CF' => 'Lingala (Central African Republic)',
    'ln_CG' => 'Lingala (Congo)',
    'lo' => 'Lao',
    'lo_LA' => 'Lao (Lao People\'s Democratic Republic)',
    'lrc' => 'Northern Luri',
    'lrc_IQ' => 'Northern Luri (Iraq)',
    'lt' => 'Lithuanian',
    'lt_LT' => 'Lithuanian (Lithuania)',
    'lu' => 'Luba-Katanga',
    'luo' => 'Luo',
    'luy' => 'Luyia',
    'lv' => 'Latvian',
    'lv_LV' => 'Latvian (Latvia)',
    'lzh' => 'Literary Chinese',
    'lzh_TW' => 'Literary Chinese (Taiwan, Province of China)',
    'mag' => 'Magahi',
    'mag_IN' => 'Magahi (India)',
    'mai' => 'Maithili',
    'mai_IN' => 'Maithili (India)',
    'mas' => 'Masai',
    'mas_TZ' => 'Masai (Tanzania, United Republic of)',
    'mer' => 'Meru',
    'mfe' => 'Morisyen',
    'mfe_MU' => 'Morisyen (Mauritius)',
    'mg' => 'Malagasy',
    'mg_MG' => 'Malagasy (Madagascar)',
    'mgh' => 'Makhuwa-Meetto',
    'mgo' => 'Metaʼ',
    'mhr' => 'Eastern Mari',
    'mhr_RU' => 'Eastern Mari (Russian Federation)',
    'mi' => 'Maori',
    'mi_NZ' => 'Maori (New Zealand)',
    'miq' => 'Mískito',
    'miq_NI' => 'Mískito (Nicaragua)',
    'mjw' => 'Karbi',
    'mjw_IN' => 'Karbi (India)',
    'mk' => 'Macedonian',
    'mk_MK' => 'Macedonian (Macedonia, the former Yugoslav Republic of)',
    'ml' => 'Malayalam',
    'ml_IN' => 'Malayalam (India)',
    'mn' => 'Mongolian',
    'mn_MN' => 'Mongolian (Mongolia)',
    'mni' => 'Manipuri',
    'mni_IN' => 'Manipuri (India)',
    'mo' => 'mo',
    'mr' => 'Marathi',
    'mr_IN' => 'Marathi (India)',
    'ms' => 'Malay',
    'ms_BN' => 'Malay (Brunei Darussalam)',
    'ms_MY' => 'Malay (Malaysia)',
    'ms_SG' => 'Malay (Singapore)',
    'mt' => 'Maltese',
    'mt_MT' => 'Maltese (Malta)',
    'mua' => 'Mundang',
    'my' => 'Burmese',
    'my_MM' => 'Burmese (Myanmar)',
    'mzn' => 'Mazanderani',
    'nan' => 'Min Nan Chinese',
    'nan_TW' => 'Min Nan Chinese (Taiwan, Province of China)',
    'nan_TW@latin' => 'Min Nan Chinese (TW@latin)',
    'naq' => 'Nama',
    'nb' => 'Norwegian Bokmål',
    'nb_NO' => 'Norwegian Bokmål (Norway)',
    'nb_SJ' => 'Norwegian Bokmål (Svalbard and Jan Mayen)',
    'nd' => 'North Ndebele',
    'nds' => 'Low German',
    'nds_DE' => 'Low German (Germany)',
    'nds_NL' => 'Low German (Netherlands)',
    'ne' => 'Nepali',
    'ne_IN' => 'Nepali (India)',
    'ne_NP' => 'Nepali (Nepal)',
    'nhn' => 'Central Nahuatl',
    'nhn_MX' => 'Central Nahuatl (Mexico)',
    'niu' => 'Niuean',
    'niu_NU' => 'Niuean (Niue)',
    'nl' => 'Dutch, Flemish',
    'nl_AW' => 'Dutch, Flemish (Aruba)',
    'nl_BE' => 'Dutch, Flemish (Belgium)',
    'nl_BQ' => 'Dutch, Flemish (Bonaire, Sint Eustatius and Saba)',
    'nl_CW' => 'Dutch, Flemish (Curaçao)',
    'nl_NL' => 'Dutch, Flemish (Netherlands)',
    'nl_SR' => 'Dutch, Flemish (Suriname)',
    'nl_SX' => 'Dutch, Flemish (Sint Maarten (Dutch part))',
    'nmg' => 'Kwasio',
    'nn' => 'Norwegian Nynorsk',
    'nn_NO' => 'Norwegian Nynorsk (Norway)',
    'nnh' => 'Ngiemboon',
    'no' => 'Norwegian',
    'nr' => 'South Ndebele',
    'nr_ZA' => 'South Ndebele (South Africa)',
    'nso' => 'Northern Sotho',
    'nso_ZA' => 'Northern Sotho (South Africa)',
    'nus' => 'Nuer',
    'nyn' => 'Nyankole',
    'oc' => 'Occitan',
    'oc_FR' => 'Occitan (France)',
    'om' => 'Oromo',
    'om_ET' => 'Oromo (Ethiopia)',
    'om_KE' => 'Oromo (Kenya)',
    'or' => 'Oriya',
    'or_IN' => 'Oriya (India)',
    'os' => 'Ossetian, Ossetic',
    'os_RU' => 'Ossetian, Ossetic (Russian Federation)',
    'pa' => 'Panjabi, Punjabi',
    'pa_Arab' => 'Panjabi, Punjabi (Arab)',
    'pa_Guru' => 'Panjabi, Punjabi (Guru)',
    'pa_IN' => 'Panjabi, Punjabi (India)',
    'pa_PK' => 'Panjabi, Punjabi (Pakistan)',
    'pap' => 'Papiamento',
    'pap_AW' => 'Papiamento (Aruba)',
    'pap_CW' => 'Papiamento (Curaçao)',
    'pl' => 'Polish',
    'pl_PL' => 'Polish (Poland)',
    'prg' => 'Prussian',
    'ps' => 'Pashto, Pushto',
    'ps_AF' => 'Pashto, Pushto (Afghanistan)',
    'pt' => 'Portuguese',
    'pt_AO' => 'Portuguese (Angola)',
    'pt_BR' => 'Portuguese (Brazil)',
    'pt_CH' => 'Portuguese (Switzerland)',
    'pt_CV' => 'Portuguese (Cabo Verde)',
    'pt_GQ' => 'Portuguese (Equatorial Guinea)',
    'pt_GW' => 'Portuguese (Guinea-Bissau)',
    'pt_LU' => 'Portuguese (Luxembourg)',
    'pt_MO' => 'Portuguese (Macao)',
    'pt_MZ' => 'Portuguese (Mozambique)',
    'pt_PT' => 'Portuguese (Portugal)',
    'pt_ST' => 'Portuguese (Sao Tome and Principe)',
    'pt_TL' => 'Portuguese (Timor-Leste)',
    'qu' => 'Quechua',
    'qu_BO' => 'Quechua (Bolivia (Plurinational State of))',
    'qu_EC' => 'Quechua (Ecuador)',
    'quz' => 'Cusco Quechua',
    'quz_PE' => 'Cusco Quechua (Peru)',
    'raj' => 'Rajasthani',
    'raj_IN' => 'Rajasthani (India)',
    'rm' => 'Romansh',
    'rn' => 'Rundi',
    'ro' => 'Romanian, Moldavian, Moldovan',
    'ro_MD' => 'Romanian, Moldavian, Moldovan (Moldova, Republic of)',
    'ro_RO' => 'Romanian, Moldavian, Moldovan (Romania)',
    'rof' => 'Rombo',
    'ru' => 'Russian',
    'ru_BY' => 'Russian (Belarus)',
    'ru_KG' => 'Russian (Kyrgyzstan)',
    'ru_KZ' => 'Russian (Kazakhstan)',
    'ru_MD' => 'Russian (Moldova, Republic of)',
    'ru_RU' => 'Russian (Russian Federation)',
    'ru_UA' => 'Russian (Ukraine)',
    'rw' => 'Kinyarwanda',
    'rw_RW' => 'Kinyarwanda (Rwanda)',
    'rwk' => 'Rwa',
    'sa' => 'Sanskrit',
    'sa_IN' => 'Sanskrit (India)',
    'sah' => 'Sakha',
    'sah_RU' => 'Sakha (Russian Federation)',
    'saq' => 'Samburu',
    'sat' => 'Santali',
    'sat_IN' => 'Santali (India)',
    'sbp' => 'Sangu',
    'sc' => 'Sardinian',
    'sc_IT' => 'Sardinian (Italy)',
    'sd' => 'Sindhi',
    'sd_IN' => 'Sindhi (India)',
    'sd_IN@devanagari' => 'Sindhi (IN@devanagari)',
    'se' => 'Northern Sami',
    'se_FI' => 'Northern Sami (Finland)',
    'se_NO' => 'Northern Sami (Norway)',
    'se_SE' => 'Northern Sami (Sweden)',
    'seh' => 'Sena',
    'ses' => 'Koyraboro Senni',
    'sg' => 'Sango',
    'sgs' => 'Samogitian',
    'sgs_LT' => 'Samogitian (Lithuania)',
    'sh' => 'sh',
    'shi' => 'Tachelhit',
    'shi_Latn' => 'Tachelhit (Latin)',
    'shi_Tfng' => 'Tachelhit (Tfng)',
    'shn' => 'Shan',
    'shn_MM' => 'Shan (Myanmar)',
    'shs' => 'Shuswap',
    'shs_CA' => 'Shuswap (Canada)',
    'si' => 'Sinhala, Sinhalese',
    'si_LK' => 'Sinhala, Sinhalese (Sri Lanka)',
    'sid' => 'Sidamo',
    'sid_ET' => 'Sidamo (Ethiopia)',
    'sk' => 'Slovak',
    'sk_SK' => 'Slovak (Slovakia)',
    'sl' => 'Slovene',
    'sl_SI' => 'Slovene (Slovenia)',
    'sm' => 'Samoan',
    'sm_WS' => 'Samoan (Samoa)',
    'smn' => 'Inari Sami',
    'sn' => 'Shona',
    'so' => 'Somali',
    'so_DJ' => 'Somali (Djibouti)',
    'so_ET' => 'Somali (Ethiopia)',
    'so_KE' => 'Somali (Kenya)',
    'so_SO' => 'Somali (Somalia)',
    'sq' => 'Albanian',
    'sq_AL' => 'Albanian (Albania)',
    'sq_MK' => 'Albanian (Macedonia, the former Yugoslav Republic of)',
    'sq_XK' => 'Albanian (XK)',
    'sr' => 'Serbian',
    'sr_Cyrl' => 'Serbian (Cyrillic)',
    'sr_Cyrl_BA' => 'Serbian (Bosnia and Herzegovina) (Cyrillic)',
    'sr_Cyrl_ME' => 'Serbian (Montenegro) (Cyrillic)',
    'sr_Cyrl_XK' => 'Serbian (XK) (Cyrillic)',
    'sr_Latn' => 'Serbian (Latin)',
    'sr_Latn_BA' => 'Serbian (Bosnia and Herzegovina) (Latin)',
    'sr_Latn_ME' => 'Serbian (Montenegro) (Latin)',
    'sr_Latn_XK' => 'Serbian (XK) (Latin)',
    'sr_ME' => 'Serbian (Montenegro)',
    'sr_RS' => 'Serbian (Serbia)',
    'sr_RS@latin' => 'Serbian (RS@latin)',
    'ss' => 'Swati',
    'ss_ZA' => 'Swati (South Africa)',
    'st' => 'Southern Sotho',
    'st_ZA' => 'Southern Sotho (South Africa)',
    'sv' => 'Swedish',
    'sv_AX' => 'Swedish (Åland Islands)',
    'sv_FI' => 'Swedish (Finland)',
    'sv_SE' => 'Swedish (Sweden)',
    'sw' => 'Swahili',
    'sw_CD' => 'Swahili (Congo, Democratic Republic of the)',
    'sw_KE' => 'Swahili (Kenya)',
    'sw_TZ' => 'Swahili (Tanzania, United Republic of)',
    'sw_UG' => 'Swahili (Uganda)',
    'szl' => 'Silesian',
    'szl_PL' => 'Silesian (Poland)',
    'ta' => 'Tamil',
    'ta_IN' => 'Tamil (India)',
    'ta_LK' => 'Tamil (Sri Lanka)',
    'ta_MY' => 'Tamil (Malaysia)',
    'ta_SG' => 'Tamil (Singapore)',
    'tcy' => 'Tulu',
    'tcy_IN' => 'Tulu (India)',
    'te' => 'Telugu',
    'te_IN' => 'Telugu (India)',
    'teo' => 'Teso',
    'teo_KE' => 'Teso (Kenya)',
    'tet' => 'Tetum',
    'tg' => 'Tajik',
    'tg_TJ' => 'Tajik (Tajikistan)',
    'th' => 'Thai',
    'th_TH' => 'Thai (Thailand)',
    'the' => 'Chitwania Tharu',
    'the_NP' => 'Chitwania Tharu (Nepal)',
    'ti' => 'Tigrinya',
    'ti_ER' => 'Tigrinya (Eritrea)',
    'ti_ET' => 'Tigrinya (Ethiopia)',
    'tig' => 'Tigre',
    'tig_ER' => 'Tigre (Eritrea)',
    'tk' => 'Turkmen',
    'tk_TM' => 'Turkmen (Turkmenistan)',
    'tl' => 'Tagalog',
    'tl_PH' => 'Tagalog (Philippines)',
    'tlh' => 'Klingon',
    'tn' => 'Tswana',
    'tn_ZA' => 'Tswana (South Africa)',
    'to' => 'Tongan&nbsp;(Tonga Islands)',
    'to_TO' => 'Tongan&nbsp;(Tonga Islands) (Tonga)',
    'tpi' => 'Tok Pisin',
    'tpi_PG' => 'Tok Pisin (Papua New Guinea)',
    'tr' => 'Turkish',
    'tr_CY' => 'Turkish (Cyprus)',
    'tr_TR' => 'Turkish (Turkey)',
    'ts' => 'Tsonga',
    'ts_ZA' => 'Tsonga (South Africa)',
    'tt' => 'Tatar',
    'tt_RU' => 'Tatar (Russian Federation)',
    'tt_RU@iqtelif' => 'Tatar (RU@iqtelif)',
    'twq' => 'Tasawaq',
    'tzl' => 'Talossan',
    'tzm' => 'Tamazight, Central Atlas',
    'tzm_Latn' => 'Tamazight, Central Atlas (Latin)',
    'ug' => 'Uighur, Uyghur',
    'ug_CN' => 'Uighur, Uyghur (China)',
    'uk' => 'Ukrainian',
    'uk_UA' => 'Ukrainian (Ukraine)',
    'unm' => 'Unami',
    'unm_US' => 'Unami (United States of America)',
    'ur' => 'Urdu',
    'ur_IN' => 'Urdu (India)',
    'ur_PK' => 'Urdu (Pakistan)',
    'uz' => 'Uzbek',
    'uz_Arab' => 'Uzbek (Arab)',
    'uz_Cyrl' => 'Uzbek (Cyrillic)',
    'uz_Latn' => 'Uzbek (Latin)',
    'uz_UZ' => 'Uzbek (Uzbekistan)',
    'uz_UZ@cyrillic' => 'Uzbek (UZ@cyrillic)',
    'vai' => 'Vai',
    'vai_Latn' => 'Vai (Latin)',
    'vai_Vaii' => 'Vai (Vaii)',
    've' => 'Venda',
    've_ZA' => 'Venda (South Africa)',
    'vi' => 'Vietnamese',
    'vi_VN' => 'Vietnamese (Viet Nam)',
    'vo' => 'Volapük',
    'vun' => 'Vunjo',
    'wa' => 'Walloon',
    'wa_BE' => 'Walloon (Belgium)',
    'wae' => 'Walser',
    'wae_CH' => 'Walser (Switzerland)',
    'wal' => 'Wolaytta',
    'wal_ET' => 'Wolaytta (Ethiopia)',
    'wo' => 'Wolof',
    'wo_SN' => 'Wolof (Senegal)',
    'xh' => 'Xhosa',
    'xh_ZA' => 'Xhosa (South Africa)',
    'xog' => 'Soga',
    'yav' => 'Yangben',
    'yi' => 'Yiddish',
    'yi_US' => 'Yiddish (United States of America)',
    'yo' => 'Yoruba',
    'yo_BJ' => 'Yoruba (Benin)',
    'yo_NG' => 'Yoruba (Nigeria)',
    'yue' => 'Cantonese',
    'yue_HK' => 'Cantonese (Hong Kong)',
    'yue_Hans' => 'Cantonese (Hans)',
    'yue_Hant' => 'Cantonese (Hant)',
    'yuw' => 'Yau (Morobe Province)',
    'yuw_PG' => 'Yau (Morobe Province) (Papua New Guinea)',
    'zgh' => 'Standard Moroccan Tamazight',
    'zh' => 'Chinese',
    'zh_CN' => 'Chinese (China)',
    'zh_HK' => 'Chinese (Hong Kong)',
    'zh_Hans' => 'Chinese (Hans)',
    'zh_Hans_HK' => 'Chinese (Hong Kong) (Hans)',
    'zh_Hans_MO' => 'Chinese (Macao) (Hans)',
    'zh_Hans_SG' => 'Chinese (Singapore) (Hans)',
    'zh_Hant' => 'Chinese (Hant)',
    'zh_Hant_HK' => 'Chinese (Hong Kong) (Hant)',
    'zh_Hant_MO' => 'Chinese (Macao) (Hant)',
    'zh_Hant_TW' => 'Chinese (Taiwan, Province of China) (Hant)',
    'zh_MO' => 'Chinese (Macao)',
    'zh_SG' => 'Chinese (Singapore)',
    'zh_TW' => 'Chinese (Taiwan, Province of China)',
    'zh_YUE' => 'Chinese (YUE)',
    'zu' => 'Zulu',
    'zu_ZA' => 'Zulu (South Africa)',
  ),
  'cashfree' => 
  array (
    'appID' => '',
    'secretKey' => '',
    'testURL' => 'https://ces-gamma.cashfree.com',
    'prodURL' => 'https://ces-api.cashfree.com',
    'maxReturn' => 100,
    'isLive' => false,
    'PG' => 
    array (
      'appID' => '',
      'secretKey' => '',
      'testURL' => 'https://test.cashfree.com',
      'prodURL' => 'https://api.cashfree.com',
      'isLive' => false,
    ),
  ),
  'chatify' => 
  array (
    'name' => 'Live chat',
    'storage_disk_name' => 'chat',
    'routes' => 
    array (
      'prefix' => 'inbox',
      'middleware' => 
      array (
        0 => 'web',
        1 => 'auth',
      ),
      'namespace' => 'App\\Http\\Controllers\\Chat',
    ),
    'api_routes' => 
    array (
      'prefix' => 'inbox/api',
      'middleware' => 
      array (
        0 => 'api',
      ),
      'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
    ),
    'pusher' => 
    array (
      'key' => 'fd8e341790316fac7d06',
      'secret' => '25470c458b9e0544d804',
      'app_id' => '1614884',
      'options' => 
      array (
        'cluster' => 'us2',
        'encrypted' => 1,
      ),
    ),
    'user_avatar' => 
    array (
      'folder' => 'users-avatar',
      'default' => 'avatar.png',
    ),
    'gravatar' => 
    array (
      'enabled' => false,
      'image_size' => 200,
      'imageset' => 'identicon',
    ),
    'attachments' => 
    array (
      'folder' => 'attachments',
      'download_route_name' => 'attachments.download',
      'allowed_images' => 
      array (
        0 => 'png',
        1 => 'jpg',
        2 => 'jpeg',
        3 => 'gif',
      ),
      'allowed_files' => 
      array (
        0 => 'zip',
        1 => 'rar',
        2 => 'txt',
        3 => 'pdf',
      ),
      'max_upload_size' => 10,
    ),
    'colors' => 
    array (
      0 => '#2180f3',
      1 => '#2196F3',
      2 => '#00BCD4',
      3 => '#3F51B5',
      4 => '#673AB7',
      5 => '#4CAF50',
      6 => '#FFC107',
      7 => '#FF9800',
      8 => '#ff2522',
      9 => '#9C27B0',
    ),
    'sounds' => 
    array (
      'enabled' => true,
      'public_path' => 'js/chatify/sounds',
      'new_message' => 'new-message-sound.mp3',
    ),
  ),
  'cloudinary' => 
  array (
    'notification_url' => NULL,
    'cloud_url' => '',
    'upload_preset' => '',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'riverr',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => 'correcthustle-instance-1.cr8hsmkceq6e.us-east-1.rds.amazonaws.com',
        'port' => '3306',
        'database' => 'riverr',
        'username' => 'admin',
        'password' => 'Y9D#6!qY7NTro6^',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => 'correcthustle-instance-1.cr8hsmkceq6e.us-east-1.rds.amazonaws.com',
        'port' => '3306',
        'database' => 'riverr',
        'username' => 'admin',
        'password' => 'Y9D#6!qY7NTro6^',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'search_path' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => 'correcthustle-instance-1.cr8hsmkceq6e.us-east-1.rds.amazonaws.com',
        'port' => '3306',
        'database' => 'riverr',
        'username' => 'admin',
        'password' => 'Y9D#6!qY7NTro6^',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'laravel_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'envato' => 
  array (
    'purchase_code' => 'ea342e61-7551-4038-9131-dabeddf10015',
    'username' => 'abdulrafiurabiu',
  ),
  'epoint' => 
  array (
    'public_key' => '',
    'private_key' => '',
  ),
  'excel' => 
  array (
    'exports' => 
    array (
      'chunk_size' => 1000,
      'pre_calculate_formulas' => false,
      'strict_null_comparison' => false,
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'line_ending' => '
',
        'use_bom' => false,
        'include_separator_line' => false,
        'excel_compatibility' => false,
        'output_encoding' => '',
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'imports' => 
    array (
      'read_only' => true,
      'ignore_empty' => false,
      'heading_row' => 
      array (
        'formatter' => 'slug',
      ),
      'csv' => 
      array (
        'delimiter' => NULL,
        'enclosure' => '"',
        'escape_character' => '\\',
        'contiguous' => false,
        'input_encoding' => 'UTF-8',
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'extension_detector' => 
    array (
      'xlsx' => 'Xlsx',
      'xlsm' => 'Xlsx',
      'xltx' => 'Xlsx',
      'xltm' => 'Xlsx',
      'xls' => 'Xls',
      'xlt' => 'Xls',
      'ods' => 'Ods',
      'ots' => 'Ods',
      'slk' => 'Slk',
      'xml' => 'Xml',
      'gnumeric' => 'Gnumeric',
      'htm' => 'Html',
      'html' => 'Html',
      'csv' => 'Csv',
      'tsv' => 'Csv',
      'pdf' => 'Dompdf',
    ),
    'value_binder' => 
    array (
      'default' => 'Maatwebsite\\Excel\\DefaultValueBinder',
    ),
    'cache' => 
    array (
      'driver' => 'memory',
      'batch' => 
      array (
        'memory_limit' => 60000,
      ),
      'illuminate' => 
      array (
        'store' => NULL,
      ),
    ),
    'transactions' => 
    array (
      'handler' => 'db',
      'db' => 
      array (
        'connection' => NULL,
      ),
    ),
    'temporary_files' => 
    array (
      'local_path' => 'C:\\artisan\\riverr\\storage\\framework/cache/laravel-excel',
      'remote_disk' => NULL,
      'remote_prefix' => NULL,
      'force_resync_remote' => NULL,
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\artisan\\riverr\\storage\\app',
        'throw' => false,
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\artisan\\riverr\\storage\\app/public',
        'url' => 'http://localhost/storage',
        'visibility' => 'public',
        'throw' => false,
      ),
      'custom' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\artisan\\riverr\\public\\storage',
        'url' => 'http://localhost:3030/storage',
        'visibility' => 'public',
        'throw' => false,
      ),
      'chat' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\artisan\\riverr\\public\\storage/chat',
        'url' => 'http://localhost:3030/storage/chat',
        'visibility' => 'public',
        'throw' => false,
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => 'AKIA525LDBK2M3KUXK3R',
        'secret' => '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',
        'region' => 'us-east-1',
        'bucket' => 'hustlebucket',
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'throw' => false,
      ),
      'cloudinary' => 
      array (
        'driver' => 'cloudinary',
      ),
    ),
    'links' => 
    array (
      'C:\\artisan\\riverr\\public\\storage' => 'C:\\artisan\\riverr\\storage\\app/public',
    ),
  ),
  'flare' => 
  array (
    'key' => NULL,
    'flare_middleware' => 
    array (
      0 => 'Spatie\\FlareClient\\FlareMiddleware\\RemoveRequestIp',
      1 => 'Spatie\\FlareClient\\FlareMiddleware\\AddGitInformation',
      2 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddNotifierName',
      3 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddEnvironmentInformation',
      4 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddExceptionInformation',
      5 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddDumps',
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddLogs' => 
      array (
        'maximum_number_of_collected_logs' => 200,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddQueries' => 
      array (
        'maximum_number_of_collected_queries' => 200,
        'report_query_bindings' => true,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddJobs' => 
      array (
        'max_chained_job_reporting_depth' => 5,
      ),
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestBodyFields' => 
      array (
        'censor_fields' => 
        array (
          0 => 'password',
          1 => 'password_confirmation',
        ),
      ),
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestHeaders' => 
      array (
        'headers' => 
        array (
          0 => 'API-KEY',
        ),
      ),
    ),
    'send_logs_as_events' => true,
  ),
  'flutterwave' => 
  array (
    'public_key' => '',
    'secret_key' => '',
    'encryption_key' => '',
    'environment' => 'development',
  ),
  'global' => 
  array (
    'dashboard_prefix' => 'dashboard',
    'whatsapp' => '17168156032',
    'purchase_link' => 'https://codecanyon.net/item/riverr-freelance-services-marketplace/39634853',
    'version' => '1.3.2',
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 65536,
      'threads' => 1,
      'time' => 4,
    ),
  ),
  'honey' => 
  array (
    'features' => 
    array (
      0 => 'block-spammers-globally',
      1 => 'rickroll',
    ),
    'environments' => 
    array (
      0 => 'production',
      1 => 'local',
    ),
    'checks' => 
    array (
      0 => 'Lukeraymonddowning\\Honey\\Checks\\UserIsBlockedSpammerCheck',
      1 => 'Lukeraymonddowning\\Honey\\Checks\\PresentButEmptyCheck',
      2 => 'Lukeraymonddowning\\Honey\\Checks\\MinimumTimePassedCheck',
      3 => 'Lukeraymonddowning\\Honey\\Checks\\JavascriptInputFilledCheck',
    ),
    'minimum_time_passed' => 3,
    'spammer_blocking' => 
    array (
      'table_name' => 'spammers',
      'maximum_attempts' => 5,
    ),
    'input_name_selectors' => 
    array (
      'default' => 'static',
      'drivers' => 
      array (
        'static' => 
        array (
          'class' => 'Lukeraymonddowning\\Honey\\InputNameSelectors\\StaticInputNameSelector',
          'names' => 
          array (
            'present_but_empty' => 'honey_present',
            'time_of_page_load' => 'honey_time',
            'javascript_input' => 'honey_javascript',
            'recaptcha_input' => 'honey_recaptcha_token',
          ),
        ),
      ),
    ),
    'input_values' => 
    array (
      'javascript' => 'Lukeraymonddowning\\Honey\\InputValues\\JavascriptInputValue',
      'time_of_page_load' => 'Lukeraymonddowning\\Honey\\InputValues\\TimeOfPageLoadValue',
    ),
    'recaptcha' => 
    array (
      'site_key' => '',
      'secret_key' => '',
      'minimum_score' => 0.5,
      'token_refresh_interval' => 60000,
    ),
  ),
  'htmlmin' => 
  array (
    'blade' => false,
    'force' => false,
    'ignore' => 
    array (
      0 => 'resources/views/emails',
      1 => 'resources/views/html',
      2 => 'resources/views/notifications',
      3 => 'resources/views/markdown',
      4 => 'resources/views/vendor/emails',
      5 => 'resources/views/vendor/html',
      6 => 'resources/views/vendor/notifications',
      7 => 'resources/views/vendor/markdown',
    ),
  ),
  'ide-helper' => 
  array (
    'filename' => '_ide_helper.php',
    'models_filename' => '_ide_helper_models.php',
    'meta_filename' => '.phpstorm.meta.php',
    'include_fluent' => false,
    'include_factory_builders' => false,
    'write_model_magic_where' => true,
    'write_model_external_builder_methods' => true,
    'write_model_relation_count_properties' => true,
    'write_eloquent_model_mixins' => false,
    'include_helpers' => false,
    'helper_files' => 
    array (
      0 => 'C:\\artisan\\riverr/vendor/laravel/framework/src/Illuminate/Support/helpers.php',
    ),
    'model_locations' => 
    array (
      0 => 'app',
    ),
    'ignored_models' => 
    array (
    ),
    'model_hooks' => 
    array (
    ),
    'extra' => 
    array (
      'Eloquent' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'Illuminate\\Database\\Query\\Builder',
      ),
      'Session' => 
      array (
        0 => 'Illuminate\\Session\\Store',
      ),
    ),
    'magic' => 
    array (
    ),
    'interfaces' => 
    array (
    ),
    'custom_db_types' => 
    array (
    ),
    'model_camel_case_properties' => false,
    'type_overrides' => 
    array (
      'integer' => 'int',
      'boolean' => 'bool',
    ),
    'include_class_docblocks' => false,
    'force_fqn' => false,
    'use_generics_annotations' => true,
    'additional_relation_types' => 
    array (
    ),
    'additional_relation_return_types' => 
    array (
    ),
    'post_migrate' => 
    array (
    ),
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'jazzcash' => 
  array (
    'environment' => 'sandbox',
    'sandbox' => 
    array (
      'merchant_id' => '',
      'password' => '',
      'integerity_salt' => '',
      'return_url' => '',
      'endpoint' => 'https://sandbox.jazzcash.com.pk/CustomerPortal/transactionmanagement/merchantform/',
    ),
    'live' => 
    array (
      'merchant_id' => '',
      'password' => '',
      'integerity_salt' => '',
      'return_url' => '',
      'endpoint' => 'https://payments.jazzcash.com.pk/CustomerPortal/transactionmanagement/merchantform',
    ),
  ),
  'languages' => 
  array (
    'af' => 'Afrikaans',
    'ak' => 'Akan',
    'am' => 'አማርኛ',
    'ar' => 'العربية',
    'as' => 'অসমীয়া',
    'az' => 'azərbaycan',
    'be' => 'беларуская',
    'bg' => 'български',
    'bm' => 'bamanakan',
    'bn' => 'বাংলা',
    'bo' => 'བོད་སྐད་',
    'br' => 'brezhoneg',
    'bs' => 'bosanski',
    'ca' => 'català',
    'cs' => 'čeština',
    'cy' => 'Cymraeg',
    'da' => 'dansk',
    'de' => 'Deutsch',
    'de_AT' => 'Österreichisches Deutsch',
    'de_CH' => 'Schweizer Hochdeutsch',
    'dz' => 'རྫོང་ཁ',
    'ee' => 'eʋegbe',
    'el' => 'Ελληνικά',
    'en' => 'English',
    'en_AU' => 'Australian English',
    'en_CA' => 'Canadian English',
    'en_GB' => 'British English',
    'en_US' => 'American English',
    'eo' => 'esperanto',
    'es' => 'español',
    'es_ES' => 'español de España',
    'es_MX' => 'español de México',
    'et' => 'eesti',
    'eu' => 'euskara',
    'fa' => 'فارسی',
    'ff' => 'Pulaar',
    'fi' => 'suomi',
    'fo' => 'føroyskt',
    'fr' => 'français',
    'fr_CA' => 'français canadien',
    'fr_CH' => 'français suisse',
    'fy' => 'West-Frysk',
    'ga' => 'Gaeilge',
    'gd' => 'Gàidhlig',
    'gl' => 'galego',
    'gu' => 'ગુજરાતી',
    'gv' => 'Gaelg',
    'ha' => 'Hausa',
    'he' => 'עברית',
    'hi' => 'हिंदी',
    'hr' => 'hrvatski',
    'hu' => 'magyar',
    'hy' => 'հայերեն',
    'id' => 'Bahasa Indonesia',
    'ig' => 'Igbo',
    'ii' => 'ꆈꌠꉙ',
    'is' => 'íslenska',
    'it' => 'italiano',
    'ja' => '日本語',
    'ka' => 'ქართული',
    'ki' => 'Gikuyu',
    'kk' => 'қазақ тілі',
    'kl' => 'kalaallisut',
    'km' => 'ខ្មែរ',
    'kn' => 'ಕನ್ನಡ',
    'ko' => '한국어',
    'ks' => 'کٲشُر',
    'kw' => 'kernewek',
    'ky' => 'кыргызча',
    'lb' => 'Lëtzebuergesch',
    'lg' => 'Luganda',
    'ln' => 'lingála',
    'lo' => 'ລາວ',
    'lt' => 'lietuvių',
    'lu' => 'Tshiluba',
    'lv' => 'latviešu',
    'mg' => 'Malagasy',
    'mk' => 'македонски',
    'ml' => 'മലയാളം',
    'mn' => 'монгол',
    'mr' => 'मराठी',
    'ms' => 'Bahasa Melayu',
    'mt' => 'Malti',
    'my' => 'ဗမာ',
    'nb' => 'norsk bokmål',
    'nd' => 'isiNdebele',
    'ne' => 'नेपाली',
    'nl' => 'Nederlands',
    'nl_BE' => 'Vlaams',
    'nn' => 'nynorsk',
    'no' => 'norsk',
    'om' => 'Oromoo',
    'or' => 'ଓଡ଼ିଆ',
    'os' => 'ирон',
    'pa' => 'ਪੰਜਾਬੀ',
    'pl' => 'polski',
    'ps' => 'پښتو',
    'pt' => 'português',
    'pt_BR' => 'português do Brasil',
    'pt_PT' => 'português europeu',
    'qu' => 'Runasimi',
    'rm' => 'rumantsch',
    'rn' => 'Ikirundi',
    'ro' => 'română',
    'ro_MD' => 'moldovenească',
    'ru' => 'русский',
    'rw' => 'Kinyarwanda',
    'se' => 'davvisámegiella',
    'sg' => 'Sängö',
    'sh' => 'Srpskohrvatski',
    'si' => 'සිංහල',
    'sk' => 'slovenčina',
    'sl' => 'slovenščina',
    'sn' => 'chiShona',
    'so' => 'Soomaali',
    'sq' => 'shqip',
    'sr' => 'српски',
    'sv' => 'svenska',
    'sw' => 'Kiswahili',
    'ta' => 'தமிழ்',
    'te' => 'తెలుగు',
    'th' => 'ไทย',
    'ti' => 'ትግርኛ',
    'tl' => 'Tagalog',
    'to' => 'lea fakatonga',
    'tr' => 'Türkçe',
    'ug' => 'ئۇيغۇرچە',
    'uk' => 'українська',
    'ur' => 'اردو',
    'uz' => 'oʻzbekcha',
    'vi' => 'Tiếng Việt',
    'yi' => 'ייִדיש',
    'yo' => 'Èdè Yorùbá',
    'zh' => '中文',
    'zh_Hans' => '简体中文',
    'zh_Hant' => '繁體中文',
    'zu' => 'isiZulu',
  ),
  'livewire' => 
  array (
    'class_namespace' => 'App\\Http\\Livewire',
    'view_path' => 'C:\\artisan\\riverr\\resources\\views/livewire',
    'layout' => 'layouts.app',
    'asset_url' => NULL,
    'app_url' => NULL,
    'middleware_group' => 'web',
    'temporary_file_upload' => 
    array (
      'disk' => 'local',
      'rules' => 
      array (
        0 => 'required',
        1 => 'file',
        2 => 'max:122880000000',
      ),
      'directory' => 'tmp',
      'middleware' => 'throttle:60,1',
      'preview_mimes' => 
      array (
        0 => 'png',
        1 => 'gif',
        2 => 'bmp',
        3 => 'svg',
        4 => 'wav',
        5 => 'mp4',
        6 => 'mov',
        7 => 'avi',
        8 => 'wmv',
        9 => 'mp3',
        10 => 'm4a',
        11 => 'jpg',
        12 => 'jpeg',
        13 => 'mpga',
        14 => 'webp',
        15 => 'wma',
      ),
      'max_upload_time' => 5,
    ),
    'manifest_path' => NULL,
    'back_button_cache' => false,
    'render_on_redirect' => false,
  ),
  'log-viewer' => 
  array (
    'enabled' => true,
    'route_domain' => NULL,
    'route_path' => 'dashboard/system/logs',
    'back_to_system_url' => 'http://localhost/dashboard',
    'back_to_system_label' => 'Back to dashboard',
    'timezone' => NULL,
    'middleware' => 
    array (
      0 => 'web',
      1 => 'auth:admin',
    ),
    'api_middleware' => 
    array (
      0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
      1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
    ),
    'hosts' => 
    array (
      'local' => 
      array (
        'name' => 'Local',
      ),
    ),
    'include_files' => 
    array (
      0 => '*.log',
    ),
    'exclude_files' => 
    array (
    ),
    'shorter_stack_trace_excludes' => 
    array (
      0 => '/vendor/symfony/',
      1 => '/vendor/laravel/framework/',
      2 => '/vendor/barryvdh/laravel-debugbar/',
    ),
    'patterns' => 
    array (
      'laravel' => 
      array (
        'log_matching_regex' => '/^\\[(\\d{4}-\\d{2}-\\d{2}[T ]\\d{2}:\\d{2}:\\d{2}\\.?(\\d{6}([\\+-]\\d\\d:\\d\\d)?)?)\\].*/',
        'log_parsing_regex' => '/^\\[(\\d{4}-\\d{2}-\\d{2}[T ]\\d{2}:\\d{2}:\\d{2}\\.?(\\d{6}([\\+-]\\d\\d:\\d\\d)?)?)\\](.*?(\\w+)\\.|.*?)(debug|info|notice|warning|error|critical|alert|emergency|processing|processed|failed)?: (.*?)( in [\\/].*?:[0-9]+)?$/is',
      ),
    ),
    'cache_driver' => NULL,
    'lazy_scan_chunk_size_in_mb' => 50,
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'deprecations' => 
    array (
      'channel' => NULL,
      'trace' => false,
    ),
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'C:\\artisan\\riverr\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'C:\\artisan\\riverr\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
          'connectionString' => 'tls://:',
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => 'C:\\artisan\\riverr\\storage\\logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => '',
        'port' => '',
        'encryption' => 'tls',
        'username' => '',
        'password' => '',
        'timeout' => NULL,
        'local_domain' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs -i',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
      ),
    ),
    'from' => 
    array (
      'address' => 'test@mail.com',
      'name' => 'Riverr',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'C:\\artisan\\riverr\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'maintenance' => 
  array (
    'headline' => '',
    'message' => '',
    'secret' => '',
  ),
  'mercadopago' => 
  array (
    'public_key' => '',
    'access_token' => '',
    'environment' => 'development',
  ),
  'mollie' => 
  array (
    'key' => '',
  ),
  'money' => 
  array (
    'AED' => 
    array (
      'name' => 'UAE Dirham',
      'code' => 784,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'د.إ',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'AFN' => 
    array (
      'name' => 'Afghani',
      'code' => 971,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '؋',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ALL' => 
    array (
      'name' => 'Lek',
      'code' => 8,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'L',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'AMD' => 
    array (
      'name' => 'Armenian Dram',
      'code' => 51,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'դր.',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ANG' => 
    array (
      'name' => 'Netherlands Antillean Guilder',
      'code' => 532,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ƒ',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'AOA' => 
    array (
      'name' => 'Kwanza',
      'code' => 973,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Kz',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ARS' => 
    array (
      'name' => 'Argentine Peso',
      'code' => 32,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'AUD' => 
    array (
      'name' => 'Australian Dollar',
      'code' => 36,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ' ',
    ),
    'AWG' => 
    array (
      'name' => 'Aruban Florin',
      'code' => 533,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ƒ',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'AZN' => 
    array (
      'name' => 'Azerbaijanian Manat',
      'code' => 944,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₼',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BAM' => 
    array (
      'name' => 'Convertible Mark',
      'code' => 977,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'КМ',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BBD' => 
    array (
      'name' => 'Barbados Dollar',
      'code' => 52,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BDT' => 
    array (
      'name' => 'Taka',
      'code' => 50,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '৳',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BGN' => 
    array (
      'name' => 'Bulgarian Lev',
      'code' => 975,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'лв',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => ' ',
    ),
    'BHD' => 
    array (
      'name' => 'Bahraini Dinar',
      'code' => 48,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'ب.د',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BIF' => 
    array (
      'name' => 'Burundi Franc',
      'code' => 108,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BMD' => 
    array (
      'name' => 'Bermudian Dollar',
      'code' => 60,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BND' => 
    array (
      'name' => 'Brunei Dollar',
      'code' => 96,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BOB' => 
    array (
      'name' => 'Boliviano',
      'code' => 68,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Bs.',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BOV' => 
    array (
      'name' => 'Mvdol',
      'code' => 984,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Bs.',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BRL' => 
    array (
      'name' => 'Brazilian Real',
      'code' => 986,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'R$',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'BSD' => 
    array (
      'name' => 'Bahamian Dollar',
      'code' => 44,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BTN' => 
    array (
      'name' => 'Ngultrum',
      'code' => 64,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Nu.',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BWP' => 
    array (
      'name' => 'Pula',
      'code' => 72,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'P',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BYN' => 
    array (
      'name' => 'Belarussian Ruble',
      'code' => 974,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Br',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => ' ',
    ),
    'BZD' => 
    array (
      'name' => 'Belize Dollar',
      'code' => 84,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CAD' => 
    array (
      'name' => 'Canadian Dollar',
      'code' => 124,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CDF' => 
    array (
      'name' => 'Congolese Franc',
      'code' => 976,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CHF' => 
    array (
      'name' => 'Swiss Franc',
      'code' => 756,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'CHF',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CLF' => 
    array (
      'name' => 'Unidades de fomento',
      'code' => 990,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'UF',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'CLP' => 
    array (
      'name' => 'Chilean Peso',
      'code' => 152,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'CNY' => 
    array (
      'name' => 'Yuan Renminbi',
      'code' => 156,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '¥',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'COP' => 
    array (
      'name' => 'Colombian Peso',
      'code' => 170,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'CRC' => 
    array (
      'name' => 'Costa Rican Colon',
      'code' => 188,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₡',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'CUC' => 
    array (
      'name' => 'Peso Convertible',
      'code' => 931,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CUP' => 
    array (
      'name' => 'Cuban Peso',
      'code' => 192,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CVE' => 
    array (
      'name' => 'Cape Verde Escudo',
      'code' => 132,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CZK' => 
    array (
      'name' => 'Czech Koruna',
      'code' => 203,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Kč',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'DJF' => 
    array (
      'name' => 'Djibouti Franc',
      'code' => 262,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fdj',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'DKK' => 
    array (
      'name' => 'Danish Krone',
      'code' => 208,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'kr',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'DOP' => 
    array (
      'name' => 'Dominican Peso',
      'code' => 214,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'DZD' => 
    array (
      'name' => 'Algerian Dinar',
      'code' => 12,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'د.ج',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'EGP' => 
    array (
      'name' => 'Egyptian Pound',
      'code' => 818,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ج.م',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ERN' => 
    array (
      'name' => 'Nakfa',
      'code' => 232,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Nfk',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ETB' => 
    array (
      'name' => 'Ethiopian Birr',
      'code' => 230,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Br',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'EUR' => 
    array (
      'name' => 'Euro',
      'code' => 978,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '€',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'FJD' => 
    array (
      'name' => 'Fiji Dollar',
      'code' => 242,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'FKP' => 
    array (
      'name' => 'Falkland Islands Pound',
      'code' => 238,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GBP' => 
    array (
      'name' => 'Pound Sterling',
      'code' => 826,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GEL' => 
    array (
      'name' => 'Lari',
      'code' => 981,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ლ',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GHS' => 
    array (
      'name' => 'Ghana Cedi',
      'code' => 936,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₵',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GIP' => 
    array (
      'name' => 'Gibraltar Pound',
      'code' => 292,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GMD' => 
    array (
      'name' => 'Dalasi',
      'code' => 270,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'D',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GNF' => 
    array (
      'name' => 'Guinea Franc',
      'code' => 324,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GTQ' => 
    array (
      'name' => 'Quetzal',
      'code' => 320,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Q',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GYD' => 
    array (
      'name' => 'Guyana Dollar',
      'code' => 328,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'HKD' => 
    array (
      'name' => 'Hong Kong Dollar',
      'code' => 344,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'HNL' => 
    array (
      'name' => 'Lempira',
      'code' => 340,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'L',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'HRK' => 
    array (
      'name' => 'Croatian Kuna',
      'code' => 191,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'kn',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'HTG' => 
    array (
      'name' => 'Gourde',
      'code' => 332,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'G',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'HUF' => 
    array (
      'name' => 'Forint',
      'code' => 348,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Ft',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'IDR' => 
    array (
      'name' => 'Rupiah',
      'code' => 360,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Rp',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'ILS' => 
    array (
      'name' => 'New Israeli Sheqel',
      'code' => 376,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₪',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'INR' => 
    array (
      'name' => 'Indian Rupee',
      'code' => 356,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₹',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'IQD' => 
    array (
      'name' => 'Iraqi Dinar',
      'code' => 368,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'ع.د',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'IRR' => 
    array (
      'name' => 'Iranian Rial',
      'code' => 364,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '﷼',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ISK' => 
    array (
      'name' => 'Iceland Krona',
      'code' => 352,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'kr',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'JMD' => 
    array (
      'name' => 'Jamaican Dollar',
      'code' => 388,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'JOD' => 
    array (
      'name' => 'Jordanian Dinar',
      'code' => 400,
      'precision' => 3,
      'subunit' => 100,
      'symbol' => 'د.ا',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'JPY' => 
    array (
      'name' => 'Yen',
      'code' => 392,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => '¥',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KES' => 
    array (
      'name' => 'Kenyan Shilling',
      'code' => 404,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'KSh',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KGS' => 
    array (
      'name' => 'Som',
      'code' => 417,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'som',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KHR' => 
    array (
      'name' => 'Riel',
      'code' => 116,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '៛',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KMF' => 
    array (
      'name' => 'Comoro Franc',
      'code' => 174,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KPW' => 
    array (
      'name' => 'North Korean Won',
      'code' => 408,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₩',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KRW' => 
    array (
      'name' => 'Won',
      'code' => 410,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => '₩',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KWD' => 
    array (
      'name' => 'Kuwaiti Dinar',
      'code' => 414,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'د.ك',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KYD' => 
    array (
      'name' => 'Cayman Islands Dollar',
      'code' => 136,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KZT' => 
    array (
      'name' => 'Tenge',
      'code' => 398,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '〒',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LAK' => 
    array (
      'name' => 'Kip',
      'code' => 418,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₭',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LBP' => 
    array (
      'name' => 'Lebanese Pound',
      'code' => 422,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ل.ل',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LKR' => 
    array (
      'name' => 'Sri Lanka Rupee',
      'code' => 144,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₨',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LRD' => 
    array (
      'name' => 'Liberian Dollar',
      'code' => 430,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LSL' => 
    array (
      'name' => 'Loti',
      'code' => 426,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'L',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LTL' => 
    array (
      'name' => 'Lithuanian Litas',
      'code' => 440,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Lt',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LVL' => 
    array (
      'name' => 'Latvian Lats',
      'code' => 428,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Ls',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LYD' => 
    array (
      'name' => 'Libyan Dinar',
      'code' => 434,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'ل.د',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MAD' => 
    array (
      'name' => 'Moroccan Dirham',
      'code' => 504,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'د.م.',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MDL' => 
    array (
      'name' => 'Moldovan Leu',
      'code' => 498,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'L',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MGA' => 
    array (
      'name' => 'Malagasy Ariary',
      'code' => 969,
      'precision' => 2,
      'subunit' => 5,
      'symbol' => 'Ar',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MKD' => 
    array (
      'name' => 'Denar',
      'code' => 807,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ден',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MMK' => 
    array (
      'name' => 'Kyat',
      'code' => 104,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'K',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MNT' => 
    array (
      'name' => 'Tugrik',
      'code' => 496,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₮',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MOP' => 
    array (
      'name' => 'Pataca',
      'code' => 446,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'P',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MRO' => 
    array (
      'name' => 'Ouguiya',
      'code' => 478,
      'precision' => 2,
      'subunit' => 5,
      'symbol' => 'UM',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MUR' => 
    array (
      'name' => 'Mauritius Rupee',
      'code' => 480,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₨',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MVR' => 
    array (
      'name' => 'Rufiyaa',
      'code' => 462,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'MVR',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MWK' => 
    array (
      'name' => 'Kwacha',
      'code' => 454,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'MK',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MXN' => 
    array (
      'name' => 'Mexican Peso',
      'code' => 484,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MYR' => 
    array (
      'name' => 'Malaysian Ringgit',
      'code' => 458,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'RM',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MZN' => 
    array (
      'name' => 'Mozambique Metical',
      'code' => 943,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'MTn',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'NAD' => 
    array (
      'name' => 'Namibia Dollar',
      'code' => 516,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'NGN' => 
    array (
      'name' => 'Naira',
      'code' => 566,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₦',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'NIO' => 
    array (
      'name' => 'Cordoba Oro',
      'code' => 558,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'C$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'NOK' => 
    array (
      'name' => 'Norwegian Krone',
      'code' => 578,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'kr',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'NPR' => 
    array (
      'name' => 'Nepalese Rupee',
      'code' => 524,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₨',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'NZD' => 
    array (
      'name' => 'New Zealand Dollar',
      'code' => 554,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'OMR' => 
    array (
      'name' => 'Rial Omani',
      'code' => 512,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'ر.ع.',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PAB' => 
    array (
      'name' => 'Balboa',
      'code' => 590,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'B/.',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PEN' => 
    array (
      'name' => 'Sol',
      'code' => 604,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'S/',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PGK' => 
    array (
      'name' => 'Kina',
      'code' => 598,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'K',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PHP' => 
    array (
      'name' => 'Philippine Peso',
      'code' => 608,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₱',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PKR' => 
    array (
      'name' => 'Pakistan Rupee',
      'code' => 586,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₨',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PLN' => 
    array (
      'name' => 'Zloty',
      'code' => 985,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'zł',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => ' ',
    ),
    'PYG' => 
    array (
      'name' => 'Guarani',
      'code' => 600,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => '₲',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'QAR' => 
    array (
      'name' => 'Qatari Rial',
      'code' => 634,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ر.ق',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'RON' => 
    array (
      'name' => 'New Romanian Leu',
      'code' => 946,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Lei',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'RSD' => 
    array (
      'name' => 'Serbian Dinar',
      'code' => 941,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'РСД',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'RUB' => 
    array (
      'name' => 'Russian Ruble',
      'code' => 643,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₽',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'RWF' => 
    array (
      'name' => 'Rwanda Franc',
      'code' => 646,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'FRw',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SAR' => 
    array (
      'name' => 'Saudi Riyal',
      'code' => 682,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ر.س',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SBD' => 
    array (
      'name' => 'Solomon Islands Dollar',
      'code' => 90,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SCR' => 
    array (
      'name' => 'Seychelles Rupee',
      'code' => 690,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₨',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SDG' => 
    array (
      'name' => 'Sudanese Pound',
      'code' => 938,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SEK' => 
    array (
      'name' => 'Swedish Krona',
      'code' => 752,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'kr',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => ' ',
    ),
    'SGD' => 
    array (
      'name' => 'Singapore Dollar',
      'code' => 702,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SHP' => 
    array (
      'name' => 'Saint Helena Pound',
      'code' => 654,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SLL' => 
    array (
      'name' => 'Leone',
      'code' => 694,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Le',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SOS' => 
    array (
      'name' => 'Somali Shilling',
      'code' => 706,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Sh',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SRD' => 
    array (
      'name' => 'Surinam Dollar',
      'code' => 968,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SSP' => 
    array (
      'name' => 'South Sudanese Pound',
      'code' => 728,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'STD' => 
    array (
      'name' => 'Dobra',
      'code' => 678,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Db',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SVC' => 
    array (
      'name' => 'El Salvador Colon',
      'code' => 222,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₡',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SYP' => 
    array (
      'name' => 'Syrian Pound',
      'code' => 760,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£S',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SZL' => 
    array (
      'name' => 'Lilangeni',
      'code' => 748,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'E',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'THB' => 
    array (
      'name' => 'Baht',
      'code' => 764,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '฿',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TJS' => 
    array (
      'name' => 'Somoni',
      'code' => 972,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ЅМ',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TMT' => 
    array (
      'name' => 'Turkmenistan New Manat',
      'code' => 934,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'T',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TND' => 
    array (
      'name' => 'Tunisian Dinar',
      'code' => 788,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'د.ت',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TOP' => 
    array (
      'name' => 'Pa’anga',
      'code' => 776,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'T$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TRY' => 
    array (
      'name' => 'Turkish Lira',
      'code' => 949,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₺',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'TTD' => 
    array (
      'name' => 'Trinidad and Tobago Dollar',
      'code' => 780,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TWD' => 
    array (
      'name' => 'New Taiwan Dollar',
      'code' => 901,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TZS' => 
    array (
      'name' => 'Tanzanian Shilling',
      'code' => 834,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Sh',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'UAH' => 
    array (
      'name' => 'Hryvnia',
      'code' => 980,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₴',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'UGX' => 
    array (
      'name' => 'Uganda Shilling',
      'code' => 800,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'USh',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'USD' => 
    array (
      'name' => 'US Dollar',
      'code' => 840,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'UYU' => 
    array (
      'name' => 'Peso Uruguayo',
      'code' => 858,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'UZS' => 
    array (
      'name' => 'Uzbekistan Sum',
      'code' => 860,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'лв',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'VEF' => 
    array (
      'name' => 'Bolivar',
      'code' => 937,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Bs F',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'VND' => 
    array (
      'name' => 'Dong',
      'code' => 704,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => '₫',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'VUV' => 
    array (
      'name' => 'Vatu',
      'code' => 548,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Vt',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'WST' => 
    array (
      'name' => 'Tala',
      'code' => 882,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'T',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XAF' => 
    array (
      'name' => 'CFA Franc BEAC',
      'code' => 950,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XAG' => 
    array (
      'name' => 'Silver',
      'code' => 961,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'oz t',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XAU' => 
    array (
      'name' => 'Gold',
      'code' => 959,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'oz t',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XCD' => 
    array (
      'name' => 'East Caribbean Dollar',
      'code' => 951,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XDR' => 
    array (
      'name' => 'SDR (Special Drawing Right)',
      'code' => 960,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'SDR',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XOF' => 
    array (
      'name' => 'CFA Franc BCEAO',
      'code' => 952,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XPF' => 
    array (
      'name' => 'CFP Franc',
      'code' => 953,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'YER' => 
    array (
      'name' => 'Yemeni Rial',
      'code' => 886,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '﷼',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ZAR' => 
    array (
      'name' => 'Rand',
      'code' => 710,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'R',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ZMW' => 
    array (
      'name' => 'Zambian Kwacha',
      'code' => 967,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ZK',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ZWL' => 
    array (
      'name' => 'Zimbabwe Dollar',
      'code' => 932,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
  ),
  'nowpayments' => 
  array (
    'api_key' => '',
    'payment_url' => 'https://api-sandbox.nowpayments.io/v1/payment',
    'live' => 0,
  ),
  'paymob' => 
  array (
    'api_key' => '',
    'hmac_hash' => '',
    'merchant_id' => '',
    'iframe_id' => '',
    'integration_id' => '',
    'environment' => 'production',
  ),
  'payouts' => 
  array (
    'paypal' => 
    array (
      'enabled' => true,
      'name' => 'PayPal',
    ),
    'offline' => 
    array (
      'enabled' => true,
      'name' => 'Bank Payout',
    ),
  ),
  'paypal' => 
  array (
    'mode' => 'sandbox',
    'sandbox' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'app_id' => '',
    ),
    'live' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'app_id' => '',
    ),
    'payment_action' => 'Order',
    'currency' => 'USD',
    'notify_url' => '',
    'locale' => 'en_US',
    'validate_ssl' => false,
  ),
  'paystack' => 
  array (
    'publicKey' => 'pk_test_3bd8da389e690954fcee4c4ced8c3b8b5165d196',
    'secretKey' => 'sk_test_02bd57d8af3d34c49ad3e36bee10597a2f1e9761',
    'paymentUrl' => 'https://api.paystack.co',
    'merchantEmail' => 'afuwapesunday12@gmail.com',
  ),
  'paytabs' => 
  array (
    'profile_id' => '',
    'server_key' => '',
    'currency' => 'EGP',
    'region' => 'GLOBAL',
  ),
  'paytr' => 
  array (
    'api_url' => 'https://www.paytr.com/odeme/api/get-token',
    'merchant_id' => '',
    'merchant_key' => '',
    'merchant_salt' => '',
    'environment' => 'development',
  ),
  'purify' => 
  array (
    'default' => 'default',
    'configs' => 
    array (
      'default' => 
      array (
        'Core.Encoding' => 'utf-8',
        'HTML.Doctype' => 'HTML 4.01 Transitional',
        'HTML.Allowed' => 'h1,h2,h3,h4,h5,h6,b,strong,i,em,s,del,a[href|title],ul,ol,li,p[style],br,span,img[width|height|alt|src],blockquote',
        'HTML.ForbiddenElements' => '',
        'CSS.AllowedProperties' => 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align',
        'AutoFormat.AutoParagraph' => false,
        'AutoFormat.RemoveEmpty' => false,
      ),
    ),
    'definitions' => 'Stevebauman\\Purify\\Definitions\\Html5Definition',
    'serializer' => 'C:\\artisan\\riverr\\storage\\app/purify',
    'settings' => 
    array (
      'Core.Encoding' => 'utf-8',
      'Cache.SerializerPath' => 'C:\\artisan\\riverr\\storage\\app/purify',
      'HTML.Doctype' => 'XHTML 1.0 Strict',
      'HTML.Allowed' => 'h1,h2,h3,h4,h5,h6,b,strong,i,em,ul,ol,li,p[style],br,span[class|style],table[summary|class|style],th[abbr|class],tr,tbody[class],td[abbr|class],colgroup,col[style],div[class],blockquote',
      'HTML.ForbiddenElements' => '',
      'CSS.AllowedProperties' => 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align,border',
      'AutoFormat.AutoParagraph' => false,
      'AutoFormat.RemoveEmpty' => false,
    ),
  ),
  'queue' => 
  array (
    'default' => 'database',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 9000,
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'AKIA525LDBK2M3KUXK3R',
        'secret' => 'mzbEVDLdWPF/Ez4eumkkBh7STtrTdVx30D+arXhM',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'razorpay' => 
  array (
    'key_id' => '',
    'key_secret' => '',
  ),
  'recaptcha' => 
  array (
    'site_key' => '',
    'secret_key' => '',
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => 'localhost',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'middleware' => 
    array (
      'verify_csrf_token' => 'App\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'App\\Http\\Middleware\\EncryptCookies',
    ),
  ),
  'seotools' => 
  array (
    'meta' => 
    array (
      'defaults' => 
      array (
        'title' => false,
        'titleBefore' => false,
        'description' => false,
        'separator' => ' - ',
        'keywords' => 
        array (
        ),
        'canonical' => false,
        'robots' => false,
      ),
      'webmaster_tags' => 
      array (
        'google' => NULL,
        'bing' => NULL,
        'alexa' => NULL,
        'pinterest' => NULL,
        'yandex' => NULL,
        'norton' => NULL,
      ),
      'add_notranslate_class' => false,
    ),
    'opengraph' => 
    array (
      'defaults' => 
      array (
        'title' => 'Over 9000 Thousand!',
        'description' => 'For those who helped create the Genki Dama',
        'url' => false,
        'type' => false,
        'site_name' => false,
        'images' => 
        array (
        ),
      ),
    ),
    'twitter' => 
    array (
      'defaults' => 
      array (
      ),
    ),
    'json-ld' => false,
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
      'scheme' => 'https',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => 'AKIA525LDBK2M3KUXK3R',
      'secret' => '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',
      'region' => 'us-east-1',
    ),
    'stripe' => 
    array (
      'secret' => '',
    ),
    'github' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '',
    ),
    'linkedin' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '',
    ),
    'google' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '',
    ),
    'facebook' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '',
    ),
    'twitter' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '',
    ),
    'mailjet' => 
    array (
      'key' => '',
      'secret' => '',
    ),
  ),
  'session' => 
  array (
    'driver' => 'database',
    'lifetime' => 43800,
    'expire_on_close' => false,
    'encrypt' => true,
    'files' => 'C:\\artisan\\riverr\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'aKHETAxPFFAJxHZ_session_',
    'path' => '/',
    'domain' => NULL,
    'secure' => true,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'sitemap' => 
  array (
    'guzzle_options' => 
    array (
      'cookies' => true,
      'connect_timeout' => 10,
      'timeout' => 10,
      'allow_redirects' => false,
    ),
    'execute_javascript' => false,
    'chrome_binary_path' => NULL,
    'crawl_profile' => 'Spatie\\Sitemap\\Crawler\\Profile',
  ),
  'stripe' => 
  array (
    'public_key' => '',
    'secret_key' => '',
  ),
  'tagging' => 
  array (
    'primary_keys_type' => 'integer',
    'normalizer' => '\\Conner\\Tagging\\TaggingUtility::slug',
    'displayer' => '\\Illuminate\\Support\\Str::title',
    'untag_on_delete' => true,
    'delete_unused_tags' => false,
    'delimiter' => '-',
    'tag_model' => '\\Conner\\Tagging\\Model\\Tag',
    'tagged_model' => '\\Conner\\Tagging\\Model\\Tagged',
    'tag_group_model' => '\\Conner\\Tagging\\Model\\TagGroup',
  ),
  'timezones' => 
  array (
    0 => 
    array (
      'label' => 'Pacific/Midway (GMT-11:00)',
      'tzCode' => 'Pacific/Midway',
      'name' => '(GMT-11:00) Midway',
      'utc' => '-11:00',
    ),
    1 => 
    array (
      'label' => 'Pacific/Niue (GMT-11:00)',
      'tzCode' => 'Pacific/Niue',
      'name' => '(GMT-11:00) Alofi',
      'utc' => '-11:00',
    ),
    2 => 
    array (
      'label' => 'Pacific/Pago_Pago (GMT-11:00)',
      'tzCode' => 'Pacific/Pago_Pago',
      'name' => '(GMT-11:00) Pago Pago, Tāfuna, Ta`ū, Taulaga',
      'utc' => '-11:00',
    ),
    3 => 
    array (
      'label' => 'America/Adak (GMT-10:00)',
      'tzCode' => 'America/Adak',
      'name' => '(GMT-10:00) Adak',
      'utc' => '-10:00',
    ),
    4 => 
    array (
      'label' => 'Pacific/Honolulu (GMT-10:00)',
      'tzCode' => 'Pacific/Honolulu',
      'name' => '(GMT-10:00) Honolulu, East Honolulu, Pearl City, Hilo, Kailua',
      'utc' => '-10:00',
    ),
    5 => 
    array (
      'label' => 'Pacific/Rarotonga (GMT-10:00)',
      'tzCode' => 'Pacific/Rarotonga',
      'name' => '(GMT-10:00) Avarua',
      'utc' => '-10:00',
    ),
    6 => 
    array (
      'label' => 'Pacific/Tahiti (GMT-10:00)',
      'tzCode' => 'Pacific/Tahiti',
      'name' => '(GMT-10:00) Faaa, Papeete, Punaauia, Pirae, Mahina',
      'utc' => '-10:00',
    ),
    7 => 
    array (
      'label' => 'Pacific/Marquesas (GMT-09:30)',
      'tzCode' => 'Pacific/Marquesas',
      'name' => '(GMT-09:30) Taiohae',
      'utc' => '-09:30',
    ),
    8 => 
    array (
      'label' => 'America/Anchorage (GMT-09:00)',
      'tzCode' => 'America/Anchorage',
      'name' => '(GMT-09:00) Anchorage, Fairbanks, Eagle River, Badger, Knik-Fairview',
      'utc' => '-09:00',
    ),
    9 => 
    array (
      'label' => 'America/Juneau (GMT-09:00)',
      'tzCode' => 'America/Juneau',
      'name' => '(GMT-09:00) Juneau',
      'utc' => '-09:00',
    ),
    10 => 
    array (
      'label' => 'America/Metlakatla (GMT-09:00)',
      'tzCode' => 'America/Metlakatla',
      'name' => '(GMT-09:00) Metlakatla',
      'utc' => '-09:00',
    ),
    11 => 
    array (
      'label' => 'America/Nome (GMT-09:00)',
      'tzCode' => 'America/Nome',
      'name' => '(GMT-09:00) Nome',
      'utc' => '-09:00',
    ),
    12 => 
    array (
      'label' => 'America/Sitka (GMT-09:00)',
      'tzCode' => 'America/Sitka',
      'name' => '(GMT-09:00) Sitka, Ketchikan',
      'utc' => '-09:00',
    ),
    13 => 
    array (
      'label' => 'America/Yakutat (GMT-09:00)',
      'tzCode' => 'America/Yakutat',
      'name' => '(GMT-09:00) Yakutat',
      'utc' => '-09:00',
    ),
    14 => 
    array (
      'label' => 'Pacific/Gambier (GMT-09:00)',
      'tzCode' => 'Pacific/Gambier',
      'name' => '(GMT-09:00) Gambier',
      'utc' => '-09:00',
    ),
    15 => 
    array (
      'label' => 'America/Los_Angeles (GMT-08:00)',
      'tzCode' => 'America/Los_Angeles',
      'name' => '(GMT-08:00) Los Angeles, San Diego, San Jose, San Francisco, Seattle',
      'utc' => '-08:00',
    ),
    16 => 
    array (
      'label' => 'America/Tijuana (GMT-08:00)',
      'tzCode' => 'America/Tijuana',
      'name' => '(GMT-08:00) Tijuana, Mexicali, Ensenada, Rosarito, Tecate',
      'utc' => '-08:00',
    ),
    17 => 
    array (
      'label' => 'America/Vancouver (GMT-08:00)',
      'tzCode' => 'America/Vancouver',
      'name' => '(GMT-08:00) Vancouver, Surrey, Okanagan, Victoria, Burnaby',
      'utc' => '-08:00',
    ),
    18 => 
    array (
      'label' => 'Pacific/Pitcairn (GMT-08:00)',
      'tzCode' => 'Pacific/Pitcairn',
      'name' => '(GMT-08:00) Adamstown',
      'utc' => '-08:00',
    ),
    19 => 
    array (
      'label' => 'America/Boise (GMT-07:00)',
      'tzCode' => 'America/Boise',
      'name' => '(GMT-07:00) Boise, Meridian, Nampa, Idaho Falls, Pocatello',
      'utc' => '-07:00',
    ),
    20 => 
    array (
      'label' => 'America/Cambridge_Bay (GMT-07:00)',
      'tzCode' => 'America/Cambridge_Bay',
      'name' => '(GMT-07:00) Cambridge Bay',
      'utc' => '-07:00',
    ),
    21 => 
    array (
      'label' => 'America/Chihuahua (GMT-07:00)',
      'tzCode' => 'America/Chihuahua',
      'name' => '(GMT-07:00) Chihuahua, Ciudad Delicias, Cuauhtémoc, Parral, Nuevo Casas Grandes',
      'utc' => '-07:00',
    ),
    22 => 
    array (
      'label' => 'America/Creston (GMT-07:00)',
      'tzCode' => 'America/Creston',
      'name' => '(GMT-07:00) Creston',
      'utc' => '-07:00',
    ),
    23 => 
    array (
      'label' => 'America/Dawson (GMT-07:00)',
      'tzCode' => 'America/Dawson',
      'name' => '(GMT-07:00) Dawson',
      'utc' => '-07:00',
    ),
    24 => 
    array (
      'label' => 'America/Dawson_Creek (GMT-07:00)',
      'tzCode' => 'America/Dawson_Creek',
      'name' => '(GMT-07:00) Fort St. John, Dawson Creek',
      'utc' => '-07:00',
    ),
    25 => 
    array (
      'label' => 'America/Denver (GMT-07:00)',
      'tzCode' => 'America/Denver',
      'name' => '(GMT-07:00) Denver, El Paso, Albuquerque, Colorado Springs, Aurora',
      'utc' => '-07:00',
    ),
    26 => 
    array (
      'label' => 'America/Edmonton (GMT-07:00)',
      'tzCode' => 'America/Edmonton',
      'name' => '(GMT-07:00) Calgary, Edmonton, Fort McMurray, Red Deer, Lethbridge',
      'utc' => '-07:00',
    ),
    27 => 
    array (
      'label' => 'America/Fort_Nelson (GMT-07:00)',
      'tzCode' => 'America/Fort_Nelson',
      'name' => '(GMT-07:00) Fort Nelson',
      'utc' => '-07:00',
    ),
    28 => 
    array (
      'label' => 'America/Hermosillo (GMT-07:00)',
      'tzCode' => 'America/Hermosillo',
      'name' => '(GMT-07:00) Hermosillo, Ciudad Obregón, Nogales, San Luis Río Colorado, Navojoa',
      'utc' => '-07:00',
    ),
    29 => 
    array (
      'label' => 'America/Inuvik (GMT-07:00)',
      'tzCode' => 'America/Inuvik',
      'name' => '(GMT-07:00) Inuvik',
      'utc' => '-07:00',
    ),
    30 => 
    array (
      'label' => 'America/Mazatlan (GMT-07:00)',
      'tzCode' => 'America/Mazatlan',
      'name' => '(GMT-07:00) Culiacán, Mazatlán, Tepic, Los Mochis, La Paz',
      'utc' => '-07:00',
    ),
    31 => 
    array (
      'label' => 'America/Ojinaga (GMT-07:00)',
      'tzCode' => 'America/Ojinaga',
      'name' => '(GMT-07:00) Ciudad Juárez, Manuel Ojinaga, Ojinaga',
      'utc' => '-07:00',
    ),
    32 => 
    array (
      'label' => 'America/Phoenix (GMT-07:00)',
      'tzCode' => 'America/Phoenix',
      'name' => '(GMT-07:00) Phoenix, Tucson, Mesa, Chandler, Gilbert',
      'utc' => '-07:00',
    ),
    33 => 
    array (
      'label' => 'America/Whitehorse (GMT-07:00)',
      'tzCode' => 'America/Whitehorse',
      'name' => '(GMT-07:00) Whitehorse',
      'utc' => '-07:00',
    ),
    34 => 
    array (
      'label' => 'America/Yellowknife (GMT-07:00)',
      'tzCode' => 'America/Yellowknife',
      'name' => '(GMT-07:00) Yellowknife',
      'utc' => '-07:00',
    ),
    35 => 
    array (
      'label' => 'America/Bahia_Banderas (GMT-06:00)',
      'tzCode' => 'America/Bahia_Banderas',
      'name' => '(GMT-06:00) Mezcales, San Vicente, Bucerías, Valle de Banderas',
      'utc' => '-06:00',
    ),
    36 => 
    array (
      'label' => 'America/Belize (GMT-06:00)',
      'tzCode' => 'America/Belize',
      'name' => '(GMT-06:00) Belize City, San Ignacio, Orange Walk, Belmopan, Dangriga',
      'utc' => '-06:00',
    ),
    37 => 
    array (
      'label' => 'America/Chicago (GMT-06:00)',
      'tzCode' => 'America/Chicago',
      'name' => '(GMT-06:00) Chicago, Houston, San Antonio, Dallas, Austin',
      'utc' => '-06:00',
    ),
    38 => 
    array (
      'label' => 'America/Costa_Rica (GMT-06:00)',
      'tzCode' => 'America/Costa_Rica',
      'name' => '(GMT-06:00) San José, Limón, San Francisco, Alajuela, Liberia',
      'utc' => '-06:00',
    ),
    39 => 
    array (
      'label' => 'America/El_Salvador (GMT-06:00)',
      'tzCode' => 'America/El_Salvador',
      'name' => '(GMT-06:00) San Salvador, Soyapango, Santa Ana, San Miguel, Mejicanos',
      'utc' => '-06:00',
    ),
    40 => 
    array (
      'label' => 'America/Guatemala (GMT-06:00)',
      'tzCode' => 'America/Guatemala',
      'name' => '(GMT-06:00) Guatemala City, Mixco, Villa Nueva, Petapa, San Juan Sacatepéquez',
      'utc' => '-06:00',
    ),
    41 => 
    array (
      'label' => 'America/Indiana/Knox (GMT-06:00)',
      'tzCode' => 'America/Indiana/Knox',
      'name' => '(GMT-06:00) Knox',
      'utc' => '-06:00',
    ),
    42 => 
    array (
      'label' => 'America/Indiana/Tell_City (GMT-06:00)',
      'tzCode' => 'America/Indiana/Tell_City',
      'name' => '(GMT-06:00) Tell City',
      'utc' => '-06:00',
    ),
    43 => 
    array (
      'label' => 'America/Managua (GMT-06:00)',
      'tzCode' => 'America/Managua',
      'name' => '(GMT-06:00) Managua, León, Masaya, Chinandega, Matagalpa',
      'utc' => '-06:00',
    ),
    44 => 
    array (
      'label' => 'America/Matamoros (GMT-06:00)',
      'tzCode' => 'America/Matamoros',
      'name' => '(GMT-06:00) Reynosa, Heroica Matamoros, Nuevo Laredo, Piedras Negras, Ciudad Acuña',
      'utc' => '-06:00',
    ),
    45 => 
    array (
      'label' => 'America/Menominee (GMT-06:00)',
      'tzCode' => 'America/Menominee',
      'name' => '(GMT-06:00) Menominee, Iron Mountain, Kingsford, Ironwood, Iron River',
      'utc' => '-06:00',
    ),
    46 => 
    array (
      'label' => 'America/Merida (GMT-06:00)',
      'tzCode' => 'America/Merida',
      'name' => '(GMT-06:00) Mérida, Campeche, Ciudad del Carmen, Kanasín, Valladolid',
      'utc' => '-06:00',
    ),
    47 => 
    array (
      'label' => 'America/Mexico_City (GMT-06:00)',
      'tzCode' => 'America/Mexico_City',
      'name' => '(GMT-06:00) Mexico City, Iztapalapa, Ecatepec de Morelos, Guadalajara, Puebla',
      'utc' => '-06:00',
    ),
    48 => 
    array (
      'label' => 'America/Monterrey (GMT-06:00)',
      'tzCode' => 'America/Monterrey',
      'name' => '(GMT-06:00) Monterrey, Saltillo, Guadalupe, Torreón, Victoria de Durango',
      'utc' => '-06:00',
    ),
    49 => 
    array (
      'label' => 'America/North_Dakota/Beulah (GMT-06:00)',
      'tzCode' => 'America/North_Dakota/Beulah',
      'name' => '(GMT-06:00) Beulah',
      'utc' => '-06:00',
    ),
    50 => 
    array (
      'label' => 'America/North_Dakota/Center (GMT-06:00)',
      'tzCode' => 'America/North_Dakota/Center',
      'name' => '(GMT-06:00) Center',
      'utc' => '-06:00',
    ),
    51 => 
    array (
      'label' => 'America/North_Dakota/New_Salem (GMT-06:00)',
      'tzCode' => 'America/North_Dakota/New_Salem',
      'name' => '(GMT-06:00) Mandan',
      'utc' => '-06:00',
    ),
    52 => 
    array (
      'label' => 'America/Rainy_River (GMT-06:00)',
      'tzCode' => 'America/Rainy_River',
      'name' => '(GMT-06:00) Rainy River',
      'utc' => '-06:00',
    ),
    53 => 
    array (
      'label' => 'America/Rankin_Inlet (GMT-06:00)',
      'tzCode' => 'America/Rankin_Inlet',
      'name' => '(GMT-06:00) Rankin Inlet',
      'utc' => '-06:00',
    ),
    54 => 
    array (
      'label' => 'America/Regina (GMT-06:00)',
      'tzCode' => 'America/Regina',
      'name' => '(GMT-06:00) Saskatoon, Regina, Prince Albert, Moose Jaw, North Battleford',
      'utc' => '-06:00',
    ),
    55 => 
    array (
      'label' => 'America/Resolute (GMT-06:00)',
      'tzCode' => 'America/Resolute',
      'name' => '(GMT-06:00) Resolute',
      'utc' => '-06:00',
    ),
    56 => 
    array (
      'label' => 'America/Swift_Current (GMT-06:00)',
      'tzCode' => 'America/Swift_Current',
      'name' => '(GMT-06:00) Swift Current',
      'utc' => '-06:00',
    ),
    57 => 
    array (
      'label' => 'America/Tegucigalpa (GMT-06:00)',
      'tzCode' => 'America/Tegucigalpa',
      'name' => '(GMT-06:00) Tegucigalpa, San Pedro Sula, Choloma, La Ceiba, El Progreso',
      'utc' => '-06:00',
    ),
    58 => 
    array (
      'label' => 'America/Winnipeg (GMT-06:00)',
      'tzCode' => 'America/Winnipeg',
      'name' => '(GMT-06:00) Winnipeg, Brandon, Kenora, Portage la Prairie, Thompson',
      'utc' => '-06:00',
    ),
    59 => 
    array (
      'label' => 'Pacific/Easter (GMT-06:00)',
      'tzCode' => 'Pacific/Easter',
      'name' => '(GMT-06:00) Easter',
      'utc' => '-06:00',
    ),
    60 => 
    array (
      'label' => 'Pacific/Galapagos (GMT-06:00)',
      'tzCode' => 'Pacific/Galapagos',
      'name' => '(GMT-06:00) Puerto Ayora, Puerto Baquerizo Moreno',
      'utc' => '-06:00',
    ),
    61 => 
    array (
      'label' => 'America/Atikokan (GMT-05:00)',
      'tzCode' => 'America/Atikokan',
      'name' => '(GMT-05:00) Atikokan',
      'utc' => '-05:00',
    ),
    62 => 
    array (
      'label' => 'America/Bogota (GMT-05:00)',
      'tzCode' => 'America/Bogota',
      'name' => '(GMT-05:00) Bogotá, Cali, Medellín, Barranquilla, Cartagena',
      'utc' => '-05:00',
    ),
    63 => 
    array (
      'label' => 'America/Cancun (GMT-05:00)',
      'tzCode' => 'America/Cancun',
      'name' => '(GMT-05:00) Cancún, Chetumal, Playa del Carmen, Cozumel, Felipe Carrillo Puerto',
      'utc' => '-05:00',
    ),
    64 => 
    array (
      'label' => 'America/Cayman (GMT-05:00)',
      'tzCode' => 'America/Cayman',
      'name' => '(GMT-05:00) George Town, West Bay, Bodden Town, East End, North Side',
      'utc' => '-05:00',
    ),
    65 => 
    array (
      'label' => 'America/Detroit (GMT-05:00)',
      'tzCode' => 'America/Detroit',
      'name' => '(GMT-05:00) Detroit, Grand Rapids, Warren, Sterling Heights, Ann Arbor',
      'utc' => '-05:00',
    ),
    66 => 
    array (
      'label' => 'America/Eirunepe (GMT-05:00)',
      'tzCode' => 'America/Eirunepe',
      'name' => '(GMT-05:00) Eirunepé, Benjamin Constant, Envira',
      'utc' => '-05:00',
    ),
    67 => 
    array (
      'label' => 'America/Grand_Turk (GMT-05:00)',
      'tzCode' => 'America/Grand_Turk',
      'name' => '(GMT-05:00) Cockburn Town',
      'utc' => '-05:00',
    ),
    68 => 
    array (
      'label' => 'America/Guayaquil (GMT-05:00)',
      'tzCode' => 'America/Guayaquil',
      'name' => '(GMT-05:00) Guayaquil, Quito, Cuenca, Santo Domingo de los Colorados, Machala',
      'utc' => '-05:00',
    ),
    69 => 
    array (
      'label' => 'America/Havana (GMT-05:00)',
      'tzCode' => 'America/Havana',
      'name' => '(GMT-05:00) Havana, Santiago de Cuba, Camagüey, Holguín, Guantánamo',
      'utc' => '-05:00',
    ),
    70 => 
    array (
      'label' => 'America/Indiana/Indianapolis (GMT-05:00)',
      'tzCode' => 'America/Indiana/Indianapolis',
      'name' => '(GMT-05:00) Indianapolis, Fort Wayne, South Bend, Carmel, Bloomington',
      'utc' => '-05:00',
    ),
    71 => 
    array (
      'label' => 'America/Indiana/Marengo (GMT-05:00)',
      'tzCode' => 'America/Indiana/Marengo',
      'name' => '(GMT-05:00) Marengo',
      'utc' => '-05:00',
    ),
    72 => 
    array (
      'label' => 'America/Indiana/Petersburg (GMT-05:00)',
      'tzCode' => 'America/Indiana/Petersburg',
      'name' => '(GMT-05:00) Petersburg',
      'utc' => '-05:00',
    ),
    73 => 
    array (
      'label' => 'America/Indiana/Vevay (GMT-05:00)',
      'tzCode' => 'America/Indiana/Vevay',
      'name' => '(GMT-05:00) Vevay',
      'utc' => '-05:00',
    ),
    74 => 
    array (
      'label' => 'America/Indiana/Vincennes (GMT-05:00)',
      'tzCode' => 'America/Indiana/Vincennes',
      'name' => '(GMT-05:00) Vincennes, Jasper, Washington, Huntingburg',
      'utc' => '-05:00',
    ),
    75 => 
    array (
      'label' => 'America/Indiana/Winamac (GMT-05:00)',
      'tzCode' => 'America/Indiana/Winamac',
      'name' => '(GMT-05:00) Winamac',
      'utc' => '-05:00',
    ),
    76 => 
    array (
      'label' => 'America/Iqaluit (GMT-05:00)',
      'tzCode' => 'America/Iqaluit',
      'name' => '(GMT-05:00) Iqaluit',
      'utc' => '-05:00',
    ),
    77 => 
    array (
      'label' => 'America/Jamaica (GMT-05:00)',
      'tzCode' => 'America/Jamaica',
      'name' => '(GMT-05:00) Kingston, New Kingston, Spanish Town, Portmore, Montego Bay',
      'utc' => '-05:00',
    ),
    78 => 
    array (
      'label' => 'America/Kentucky/Louisville (GMT-05:00)',
      'tzCode' => 'America/Kentucky/Louisville',
      'name' => '(GMT-05:00) Louisville, Jeffersonville, New Albany, Jeffersontown, Pleasure Ridge Park',
      'utc' => '-05:00',
    ),
    79 => 
    array (
      'label' => 'America/Kentucky/Monticello (GMT-05:00)',
      'tzCode' => 'America/Kentucky/Monticello',
      'name' => '(GMT-05:00) Monticello',
      'utc' => '-05:00',
    ),
    80 => 
    array (
      'label' => 'America/Lima (GMT-05:00)',
      'tzCode' => 'America/Lima',
      'name' => '(GMT-05:00) Lima, Arequipa, Callao, Trujillo, Chiclayo',
      'utc' => '-05:00',
    ),
    81 => 
    array (
      'label' => 'America/Nassau (GMT-05:00)',
      'tzCode' => 'America/Nassau',
      'name' => '(GMT-05:00) Nassau, Lucaya, Freeport, West End, Cooper’s Town',
      'utc' => '-05:00',
    ),
    82 => 
    array (
      'label' => 'America/New_York (GMT-05:00)',
      'tzCode' => 'America/New_York',
      'name' => '(GMT-05:00) New York City, Brooklyn, Queens, Philadelphia, Manhattan',
      'utc' => '-05:00',
    ),
    83 => 
    array (
      'label' => 'America/Nipigon (GMT-05:00)',
      'tzCode' => 'America/Nipigon',
      'name' => '(GMT-05:00) Nipigon',
      'utc' => '-05:00',
    ),
    84 => 
    array (
      'label' => 'America/Panama (GMT-05:00)',
      'tzCode' => 'America/Panama',
      'name' => '(GMT-05:00) Panamá, San Miguelito, Juan Díaz, David, Arraiján',
      'utc' => '-05:00',
    ),
    85 => 
    array (
      'label' => 'America/Pangnirtung (GMT-05:00)',
      'tzCode' => 'America/Pangnirtung',
      'name' => '(GMT-05:00) Pangnirtung',
      'utc' => '-05:00',
    ),
    86 => 
    array (
      'label' => 'America/Port-au-Prince (GMT-05:00)',
      'tzCode' => 'America/Port-au-Prince',
      'name' => '(GMT-05:00) Port-au-Prince, Carrefour, Delmas 73, Pétionville, Port-de-Paix',
      'utc' => '-05:00',
    ),
    87 => 
    array (
      'label' => 'America/Rio_Branco (GMT-05:00)',
      'tzCode' => 'America/Rio_Branco',
      'name' => '(GMT-05:00) Rio Branco, Cruzeiro do Sul, Sena Madureira, Tarauacá, Feijó',
      'utc' => '-05:00',
    ),
    88 => 
    array (
      'label' => 'America/Thunder_Bay (GMT-05:00)',
      'tzCode' => 'America/Thunder_Bay',
      'name' => '(GMT-05:00) Thunder Bay',
      'utc' => '-05:00',
    ),
    89 => 
    array (
      'label' => 'America/Toronto (GMT-05:00)',
      'tzCode' => 'America/Toronto',
      'name' => '(GMT-05:00) Toronto, Montréal, Ottawa, Mississauga, Québec',
      'utc' => '-05:00',
    ),
    90 => 
    array (
      'label' => 'America/AnguillaSandy Hill (GMT-04:00)',
      'tzCode' => 'America/AnguillaSandy Hill',
      'name' => '(GMT-04:00) The Valley, Blowing Point Village, Sandy Ground Village, The Quarter, Sandy Hill',
      'utc' => '-04:00',
    ),
    91 => 
    array (
      'label' => 'America/Antigua (GMT-04:00)',
      'tzCode' => 'America/Antigua',
      'name' => '(GMT-04:00) Saint John’s, Piggotts, Bolands, Codrington, Parham',
      'utc' => '-04:00',
    ),
    92 => 
    array (
      'label' => 'America/Aruba (GMT-04:00)',
      'tzCode' => 'America/Aruba',
      'name' => '(GMT-04:00) Oranjestad, Tanki Leendert, San Nicolas, Santa Cruz, Paradera',
      'utc' => '-04:00',
    ),
    93 => 
    array (
      'label' => 'America/Asuncion (GMT-04:00)',
      'tzCode' => 'America/Asuncion',
      'name' => '(GMT-04:00) Asunción, Ciudad del Este, San Lorenzo, Capiatá, Lambaré',
      'utc' => '-04:00',
    ),
    94 => 
    array (
      'label' => 'America/Barbados (GMT-04:00)',
      'tzCode' => 'America/Barbados',
      'name' => '(GMT-04:00) Bridgetown, Speightstown, Oistins, Bathsheba, Holetown',
      'utc' => '-04:00',
    ),
    95 => 
    array (
      'label' => 'America/Blanc-Sablon (GMT-04:00)',
      'tzCode' => 'America/Blanc-Sablon',
      'name' => '(GMT-04:00) Lévis',
      'utc' => '-04:00',
    ),
    96 => 
    array (
      'label' => 'America/Boa_Vista (GMT-04:00)',
      'tzCode' => 'America/Boa_Vista',
      'name' => '(GMT-04:00) Boa Vista',
      'utc' => '-04:00',
    ),
    97 => 
    array (
      'label' => 'America/Campo_Grande (GMT-04:00)',
      'tzCode' => 'America/Campo_Grande',
      'name' => '(GMT-04:00) Campo Grande, Dourados, Corumbá, Três Lagoas, Ponta Porã',
      'utc' => '-04:00',
    ),
    98 => 
    array (
      'label' => 'America/Caracas (GMT-04:00)',
      'tzCode' => 'America/Caracas',
      'name' => '(GMT-04:00) Caracas, Maracaibo, Maracay, Valencia, Barquisimeto',
      'utc' => '-04:00',
    ),
    99 => 
    array (
      'label' => 'America/Cuiaba (GMT-04:00)',
      'tzCode' => 'America/Cuiaba',
      'name' => '(GMT-04:00) Cuiabá, Várzea Grande, Rondonópolis, Sinop, Barra do Garças',
      'utc' => '-04:00',
    ),
    100 => 
    array (
      'label' => 'America/Curacao (GMT-04:00)',
      'tzCode' => 'America/Curacao',
      'name' => '(GMT-04:00) Willemstad, Sint Michiel Liber',
      'utc' => '-04:00',
    ),
    101 => 
    array (
      'label' => 'America/Dominica (GMT-04:00)',
      'tzCode' => 'America/Dominica',
      'name' => '(GMT-04:00) Roseau, Portsmouth, Berekua, Saint Joseph, Wesley',
      'utc' => '-04:00',
    ),
    102 => 
    array (
      'label' => 'America/Glace_Bay (GMT-04:00)',
      'tzCode' => 'America/Glace_Bay',
      'name' => '(GMT-04:00) Sydney, Glace Bay, Sydney Mines',
      'utc' => '-04:00',
    ),
    103 => 
    array (
      'label' => 'America/Goose_Bay (GMT-04:00)',
      'tzCode' => 'America/Goose_Bay',
      'name' => '(GMT-04:00) Labrador City, Happy Valley-Goose Bay',
      'utc' => '-04:00',
    ),
    104 => 
    array (
      'label' => 'America/Grenada (GMT-04:00)',
      'tzCode' => 'America/Grenada',
      'name' => '(GMT-04:00) Saint George\\\'s, Gouyave, Grenville, Victoria, Saint David’s',
      'utc' => '-04:00',
    ),
    105 => 
    array (
      'label' => 'America/Guadeloupe (GMT-04:00)',
      'tzCode' => 'America/Guadeloupe',
      'name' => '(GMT-04:00) Les Abymes, Baie-Mahault, Le Gosier, Petit-Bourg, Sainte-Anne',
      'utc' => '-04:00',
    ),
    106 => 
    array (
      'label' => 'America/Guyana (GMT-04:00)',
      'tzCode' => 'America/Guyana',
      'name' => '(GMT-04:00) Georgetown, Linden, New Amsterdam, Anna Regina, Bartica',
      'utc' => '-04:00',
    ),
    107 => 
    array (
      'label' => 'America/Halifax (GMT-04:00)',
      'tzCode' => 'America/Halifax',
      'name' => '(GMT-04:00) Halifax, Dartmouth, Charlottetown, Lower Sackville, Truro',
      'utc' => '-04:00',
    ),
    108 => 
    array (
      'label' => 'America/Kralendijk (GMT-04:00)',
      'tzCode' => 'America/Kralendijk',
      'name' => '(GMT-04:00) Kralendijk, Oranjestad, The Bottom',
      'utc' => '-04:00',
    ),
    109 => 
    array (
      'label' => 'America/La_Paz (GMT-04:00)',
      'tzCode' => 'America/La_Paz',
      'name' => '(GMT-04:00) Santa Cruz de la Sierra, Cochabamba, La Paz, Sucre, Oruro',
      'utc' => '-04:00',
    ),
    110 => 
    array (
      'label' => 'America/Lower_Princes (GMT-04:00)',
      'tzCode' => 'America/Lower_Princes',
      'name' => '(GMT-04:00) Cul de Sac, Lower Prince’s Quarter, Koolbaai, Philipsburg',
      'utc' => '-04:00',
    ),
    111 => 
    array (
      'label' => 'America/Manaus (GMT-04:00)',
      'tzCode' => 'America/Manaus',
      'name' => '(GMT-04:00) Manaus, Itacoatiara, Parintins, Manacapuru, Coari',
      'utc' => '-04:00',
    ),
    112 => 
    array (
      'label' => 'America/Marigot (GMT-04:00)',
      'tzCode' => 'America/Marigot',
      'name' => '(GMT-04:00) Marigot',
      'utc' => '-04:00',
    ),
    113 => 
    array (
      'label' => 'America/Martinique (GMT-04:00)',
      'tzCode' => 'America/Martinique',
      'name' => '(GMT-04:00) Fort-de-France, Le Lamentin, Le Robert, Sainte-Marie, Le François',
      'utc' => '-04:00',
    ),
    114 => 
    array (
      'label' => 'America/Moncton (GMT-04:00)',
      'tzCode' => 'America/Moncton',
      'name' => '(GMT-04:00) Moncton, Saint John, Fredericton, Dieppe, Miramichi',
      'utc' => '-04:00',
    ),
    115 => 
    array (
      'label' => 'America/Montserrat (GMT-04:00)',
      'tzCode' => 'America/Montserrat',
      'name' => '(GMT-04:00) Brades, Saint Peters, Plymouth',
      'utc' => '-04:00',
    ),
    116 => 
    array (
      'label' => 'America/Porto_Velho (GMT-04:00)',
      'tzCode' => 'America/Porto_Velho',
      'name' => '(GMT-04:00) Porto Velho, Ji Paraná, Vilhena, Ariquemes, Cacoal',
      'utc' => '-04:00',
    ),
    117 => 
    array (
      'label' => 'America/Port_of_Spain (GMT-04:00)',
      'tzCode' => 'America/Port_of_Spain',
      'name' => '(GMT-04:00) Chaguanas, Mon Repos, San Fernando, Port of Spain, Rio Claro',
      'utc' => '-04:00',
    ),
    118 => 
    array (
      'label' => 'America/Puerto_Rico (GMT-04:00)',
      'tzCode' => 'America/Puerto_Rico',
      'name' => '(GMT-04:00) San Juan, Bayamón, Carolina, Ponce, Caguas',
      'utc' => '-04:00',
    ),
    119 => 
    array (
      'label' => 'America/Santiago (GMT-04:00)',
      'tzCode' => 'America/Santiago',
      'name' => '(GMT-04:00) Santiago, Puente Alto, Antofagasta, Viña del Mar, Valparaíso',
      'utc' => '-04:00',
    ),
    120 => 
    array (
      'label' => 'America/Santo_Domingo (GMT-04:00)',
      'tzCode' => 'America/Santo_Domingo',
      'name' => '(GMT-04:00) Santo Domingo, Santiago de los Caballeros, Santo Domingo Oeste, Santo Domingo Este, San Pedro de Macorís',
      'utc' => '-04:00',
    ),
    121 => 
    array (
      'label' => 'America/St_Barthelemy (GMT-04:00)',
      'tzCode' => 'America/St_Barthelemy',
      'name' => '(GMT-04:00) Gustavia',
      'utc' => '-04:00',
    ),
    122 => 
    array (
      'label' => 'America/St_Kitts (GMT-04:00)',
      'tzCode' => 'America/St_Kitts',
      'name' => '(GMT-04:00) Basseterre, Fig Tree, Market Shop, Saint Paul’s, Middle Island',
      'utc' => '-04:00',
    ),
    123 => 
    array (
      'label' => 'America/St_Lucia (GMT-04:00)',
      'tzCode' => 'America/St_Lucia',
      'name' => '(GMT-04:00) Castries, Bisee, Vieux Fort, Micoud, Soufrière',
      'utc' => '-04:00',
    ),
    124 => 
    array (
      'label' => 'America/St_Thomas (GMT-04:00)',
      'tzCode' => 'America/St_Thomas',
      'name' => '(GMT-04:00) Saint Croix, Charlotte Amalie, Cruz Bay',
      'utc' => '-04:00',
    ),
    125 => 
    array (
      'label' => 'America/St_Vincent (GMT-04:00)',
      'tzCode' => 'America/St_Vincent',
      'name' => '(GMT-04:00) Kingstown, Kingstown Park, Georgetown, Barrouallie, Port Elizabeth',
      'utc' => '-04:00',
    ),
    126 => 
    array (
      'label' => 'America/Thule (GMT-04:00)',
      'tzCode' => 'America/Thule',
      'name' => '(GMT-04:00) Thule',
      'utc' => '-04:00',
    ),
    127 => 
    array (
      'label' => 'America/Tortola (GMT-04:00)',
      'tzCode' => 'America/Tortola',
      'name' => '(GMT-04:00) Road Town',
      'utc' => '-04:00',
    ),
    128 => 
    array (
      'label' => 'Atlantic/Bermuda (GMT-04:00)',
      'tzCode' => 'Atlantic/Bermuda',
      'name' => '(GMT-04:00) Hamilton',
      'utc' => '-04:00',
    ),
    129 => 
    array (
      'label' => 'America/St_Johns (GMT-03:30)',
      'tzCode' => 'America/St_Johns',
      'name' => '(GMT-03:30) St. John\\\'s, Mount Pearl, Corner Brook, Conception Bay South, Bay Roberts',
      'utc' => '-03:30',
    ),
    130 => 
    array (
      'label' => 'America/Araguaina (GMT-03:00)',
      'tzCode' => 'America/Araguaina',
      'name' => '(GMT-03:00) Palmas, Araguaína, Gurupi, Miracema do Tocantins, Porto Franco',
      'utc' => '-03:00',
    ),
    131 => 
    array (
      'label' => 'America/Argentina/Buenos_Aires (GMT-03:00)',
      'tzCode' => 'America/Argentina/Buenos_Aires',
      'name' => '(GMT-03:00) Buenos Aires, La Plata, Mar del Plata, Morón, Bahía Blanca',
      'utc' => '-03:00',
    ),
    132 => 
    array (
      'label' => 'America/Argentina/Catamarca (GMT-03:00)',
      'tzCode' => 'America/Argentina/Catamarca',
      'name' => '(GMT-03:00) San Fernando del Valle de Catamarca, Trelew, Puerto Madryn, Esquel, Rawson',
      'utc' => '-03:00',
    ),
    133 => 
    array (
      'label' => 'America/Argentina/Cordoba (GMT-03:00)',
      'tzCode' => 'America/Argentina/Cordoba',
      'name' => '(GMT-03:00) Córdoba, Rosario, Santa Fe, Resistencia, Santiago del Estero',
      'utc' => '-03:00',
    ),
    134 => 
    array (
      'label' => 'America/Argentina/Jujuy (GMT-03:00)',
      'tzCode' => 'America/Argentina/Jujuy',
      'name' => '(GMT-03:00) San Salvador de Jujuy, San Pedro de Jujuy, Libertador General San Martín, Palpalá, La Quiaca',
      'utc' => '-03:00',
    ),
    135 => 
    array (
      'label' => 'America/Argentina/La_Rioja (GMT-03:00)',
      'tzCode' => 'America/Argentina/La_Rioja',
      'name' => '(GMT-03:00) La Rioja, Chilecito, Arauco, Chamical',
      'utc' => '-03:00',
    ),
    136 => 
    array (
      'label' => 'America/Argentina/Mendoza (GMT-03:00)',
      'tzCode' => 'America/Argentina/Mendoza',
      'name' => '(GMT-03:00) Mendoza, San Rafael, San Martín',
      'utc' => '-03:00',
    ),
    137 => 
    array (
      'label' => 'America/Argentina/Rio_Gallegos (GMT-03:00)',
      'tzCode' => 'America/Argentina/Rio_Gallegos',
      'name' => '(GMT-03:00) Comodoro Rivadavia, Río Gallegos, Caleta Olivia, Pico Truncado, Puerto Deseado',
      'utc' => '-03:00',
    ),
    138 => 
    array (
      'label' => 'America/Argentina/Salta (GMT-03:00)',
      'tzCode' => 'America/Argentina/Salta',
      'name' => '(GMT-03:00) Salta, Neuquén, Santa Rosa, San Carlos de Bariloche, Cipolletti',
      'utc' => '-03:00',
    ),
    139 => 
    array (
      'label' => 'America/Argentina/San_Juan (GMT-03:00)',
      'tzCode' => 'America/Argentina/San_Juan',
      'name' => '(GMT-03:00) San Juan, Chimbas, Santa Lucía, Pocito, Caucete',
      'utc' => '-03:00',
    ),
    140 => 
    array (
      'label' => 'America/Argentina/San_Luis (GMT-03:00)',
      'tzCode' => 'America/Argentina/San_Luis',
      'name' => '(GMT-03:00) San Luis, Villa Mercedes, La Punta, Merlo, Justo Daract',
      'utc' => '-03:00',
    ),
    141 => 
    array (
      'label' => 'America/Argentina/Tucuman (GMT-03:00)',
      'tzCode' => 'America/Argentina/Tucuman',
      'name' => '(GMT-03:00) San Miguel de Tucumán, Yerba Buena, Tafí Viejo, Alderetes, Aguilares',
      'utc' => '-03:00',
    ),
    142 => 
    array (
      'label' => 'America/Argentina/Ushuaia (GMT-03:00)',
      'tzCode' => 'America/Argentina/Ushuaia',
      'name' => '(GMT-03:00) Ushuaia, Río Grande',
      'utc' => '-03:00',
    ),
    143 => 
    array (
      'label' => 'America/Bahia (GMT-03:00)',
      'tzCode' => 'America/Bahia',
      'name' => '(GMT-03:00) Salvador, Feira de Santana, Vitória da Conquista, Itabuna, Camaçari',
      'utc' => '-03:00',
    ),
    144 => 
    array (
      'label' => 'America/Belem (GMT-03:00)',
      'tzCode' => 'America/Belem',
      'name' => '(GMT-03:00) Belém, Ananindeua, Macapá, Parauapebas, Marabá',
      'utc' => '-03:00',
    ),
    145 => 
    array (
      'label' => 'America/Cayenne (GMT-03:00)',
      'tzCode' => 'America/Cayenne',
      'name' => '(GMT-03:00) Cayenne, Matoury, Saint-Laurent-du-Maroni, Kourou, Rémire-Montjoly',
      'utc' => '-03:00',
    ),
    146 => 
    array (
      'label' => 'America/Fortaleza (GMT-03:00)',
      'tzCode' => 'America/Fortaleza',
      'name' => '(GMT-03:00) Fortaleza, São Luís, Natal, Teresina, João Pessoa',
      'utc' => '-03:00',
    ),
    147 => 
    array (
      'label' => 'America/Godthab (GMT-03:00)',
      'tzCode' => 'America/Godthab',
      'name' => '(GMT-03:00) Nuuk, Sisimiut, Ilulissat, Qaqortoq, Aasiaat',
      'utc' => '-03:00',
    ),
    148 => 
    array (
      'label' => 'America/Maceio (GMT-03:00)',
      'tzCode' => 'America/Maceio',
      'name' => '(GMT-03:00) Maceió, Aracaju, Arapiraca, Nossa Senhora do Socorro, São Cristóvão',
      'utc' => '-03:00',
    ),
    149 => 
    array (
      'label' => 'America/Miquelon (GMT-03:00)',
      'tzCode' => 'America/Miquelon',
      'name' => '(GMT-03:00) Saint-Pierre, Miquelon',
      'utc' => '-03:00',
    ),
    150 => 
    array (
      'label' => 'America/Montevideo (GMT-03:00)',
      'tzCode' => 'America/Montevideo',
      'name' => '(GMT-03:00) Montevideo, Salto, Paysandú, Las Piedras, Rivera',
      'utc' => '-03:00',
    ),
    151 => 
    array (
      'label' => 'America/Paramaribo (GMT-03:00)',
      'tzCode' => 'America/Paramaribo',
      'name' => '(GMT-03:00) Paramaribo, Lelydorp, Brokopondo, Nieuw Nickerie, Moengo',
      'utc' => '-03:00',
    ),
    152 => 
    array (
      'label' => 'America/Punta_Arenas (GMT-03:00)',
      'tzCode' => 'America/Punta_Arenas',
      'name' => '(GMT-03:00) Punta Arenas, Puerto Natales',
      'utc' => '-03:00',
    ),
    153 => 
    array (
      'label' => 'America/Recife (GMT-03:00)',
      'tzCode' => 'America/Recife',
      'name' => '(GMT-03:00) Recife, Jaboatão, Jaboatão dos Guararapes, Olinda, Paulista',
      'utc' => '-03:00',
    ),
    154 => 
    array (
      'label' => 'America/Santarem (GMT-03:00)',
      'tzCode' => 'America/Santarem',
      'name' => '(GMT-03:00) Santarém, Altamira, Itaituba, Oriximiná, Alenquer',
      'utc' => '-03:00',
    ),
    155 => 
    array (
      'label' => 'America/Sao_Paulo (GMT-03:00)',
      'tzCode' => 'America/Sao_Paulo',
      'name' => '(GMT-03:00) São Paulo, Rio de Janeiro, Belo Horizonte, Brasília, Curitiba',
      'utc' => '-03:00',
    ),
    156 => 
    array (
      'label' => 'Antarctica/Palmer (GMT-03:00)',
      'tzCode' => 'Antarctica/Palmer',
      'name' => '(GMT-03:00) Palmer',
      'utc' => '-03:00',
    ),
    157 => 
    array (
      'label' => 'Antarctica/Rothera (GMT-03:00)',
      'tzCode' => 'Antarctica/Rothera',
      'name' => '(GMT-03:00) Rothera',
      'utc' => '-03:00',
    ),
    158 => 
    array (
      'label' => 'Atlantic/Stanley (GMT-03:00)',
      'tzCode' => 'Atlantic/Stanley',
      'name' => '(GMT-03:00) Stanley',
      'utc' => '-03:00',
    ),
    159 => 
    array (
      'label' => 'America/Noronha (GMT-02:00)',
      'tzCode' => 'America/Noronha',
      'name' => '(GMT-02:00) Itamaracá',
      'utc' => '-02:00',
    ),
    160 => 
    array (
      'label' => 'Atlantic/South_Georgia (GMT-02:00)',
      'tzCode' => 'Atlantic/South_Georgia',
      'name' => '(GMT-02:00) Grytviken',
      'utc' => '-02:00',
    ),
    161 => 
    array (
      'label' => 'America/Scoresbysund (GMT-01:00)',
      'tzCode' => 'America/Scoresbysund',
      'name' => '(GMT-01:00) Scoresbysund',
      'utc' => '-01:00',
    ),
    162 => 
    array (
      'label' => 'Atlantic/Azores (GMT-01:00)',
      'tzCode' => 'Atlantic/Azores',
      'name' => '(GMT-01:00) Ponta Delgada, Lagoa, Angra do Heroísmo, Rosto de Cão, Rabo de Peixe',
      'utc' => '-01:00',
    ),
    163 => 
    array (
      'label' => 'Atlantic/Cape_Verde (GMT-01:00)',
      'tzCode' => 'Atlantic/Cape_Verde',
      'name' => '(GMT-01:00) Praia, Mindelo, Santa Maria, Cova Figueira, Santa Cruz',
      'utc' => '-01:00',
    ),
    164 => 
    array (
      'label' => 'Africa/Abidjan (GMT+00:00)',
      'tzCode' => 'Africa/Abidjan',
      'name' => '(GMT+00:00) Abidjan, Abobo, Bouaké, Daloa, San-Pédro',
      'utc' => '+00:00',
    ),
    165 => 
    array (
      'label' => 'Africa/Accra (GMT+00:00)',
      'tzCode' => 'Africa/Accra',
      'name' => '(GMT+00:00) Accra, Kumasi, Tamale, Takoradi, Atsiaman',
      'utc' => '+00:00',
    ),
    166 => 
    array (
      'label' => 'Africa/Bamako (GMT+00:00)',
      'tzCode' => 'Africa/Bamako',
      'name' => '(GMT+00:00) Bamako, Sikasso, Mopti, Koutiala, Ségou',
      'utc' => '+00:00',
    ),
    167 => 
    array (
      'label' => 'Africa/Banjul (GMT+00:00)',
      'tzCode' => 'Africa/Banjul',
      'name' => '(GMT+00:00) Serekunda, Brikama, Bakau, Banjul, Farafenni',
      'utc' => '+00:00',
    ),
    168 => 
    array (
      'label' => 'Africa/Bissau (GMT+00:00)',
      'tzCode' => 'Africa/Bissau',
      'name' => '(GMT+00:00) Bissau, Bafatá, Gabú, Bissorã, Bolama',
      'utc' => '+00:00',
    ),
    169 => 
    array (
      'label' => 'Africa/Casablanca (GMT+00:00)',
      'tzCode' => 'Africa/Casablanca',
      'name' => '(GMT+00:00) Casablanca, Rabat, Fès, Sale, Marrakesh',
      'utc' => '+00:00',
    ),
    170 => 
    array (
      'label' => 'Africa/Conakry (GMT+00:00)',
      'tzCode' => 'Africa/Conakry',
      'name' => '(GMT+00:00) Camayenne, Conakry, Nzérékoré, Kindia, Kankan',
      'utc' => '+00:00',
    ),
    171 => 
    array (
      'label' => 'Africa/Dakar (GMT+00:00)',
      'tzCode' => 'Africa/Dakar',
      'name' => '(GMT+00:00) Dakar, Pikine, Touba, Thiès, Thiès Nones',
      'utc' => '+00:00',
    ),
    172 => 
    array (
      'label' => 'Africa/El_Aaiun (GMT+00:00)',
      'tzCode' => 'Africa/El_Aaiun',
      'name' => '(GMT+00:00) Laayoune, Dakhla, Laayoune Plage',
      'utc' => '+00:00',
    ),
    173 => 
    array (
      'label' => 'Africa/Freetown (GMT+00:00)',
      'tzCode' => 'Africa/Freetown',
      'name' => '(GMT+00:00) Freetown, Bo, Kenema, Koidu, Makeni',
      'utc' => '+00:00',
    ),
    174 => 
    array (
      'label' => 'Africa/Lome (GMT+00:00)',
      'tzCode' => 'Africa/Lome',
      'name' => '(GMT+00:00) Lomé, Sokodé, Kara, Atakpamé, Kpalimé',
      'utc' => '+00:00',
    ),
    175 => 
    array (
      'label' => 'Africa/Monrovia (GMT+00:00)',
      'tzCode' => 'Africa/Monrovia',
      'name' => '(GMT+00:00) Monrovia, Gbarnga, Kakata, Bensonville, Harper',
      'utc' => '+00:00',
    ),
    176 => 
    array (
      'label' => 'Africa/Nouakchott (GMT+00:00)',
      'tzCode' => 'Africa/Nouakchott',
      'name' => '(GMT+00:00) Nouakchott, Nouadhibou, Néma, Kaédi, Rosso',
      'utc' => '+00:00',
    ),
    177 => 
    array (
      'label' => 'Africa/Ouagadougou (GMT+00:00)',
      'tzCode' => 'Africa/Ouagadougou',
      'name' => '(GMT+00:00) Ouagadougou, Bobo-Dioulasso, Koudougou, Ouahigouya, Banfora',
      'utc' => '+00:00',
    ),
    178 => 
    array (
      'label' => 'Africa/Sao_Tome (GMT+00:00)',
      'tzCode' => 'Africa/Sao_Tome',
      'name' => '(GMT+00:00) São Tomé, Santo António',
      'utc' => '+00:00',
    ),
    179 => 
    array (
      'label' => 'America/Danmarkshavn (GMT+00:00)',
      'tzCode' => 'America/Danmarkshavn',
      'name' => '(GMT+00:00) Danmarkshavn',
      'utc' => '+00:00',
    ),
    180 => 
    array (
      'label' => 'Antarctica/Troll (GMT+00:00)',
      'tzCode' => 'Antarctica/Troll',
      'name' => '(GMT+00:00) Troll',
      'utc' => '+00:00',
    ),
    181 => 
    array (
      'label' => 'Atlantic/Canary (GMT+00:00)',
      'tzCode' => 'Atlantic/Canary',
      'name' => '(GMT+00:00) Las Palmas de Gran Canaria, Santa Cruz de Tenerife, La Laguna, Telde, Arona',
      'utc' => '+00:00',
    ),
    182 => 
    array (
      'label' => 'Atlantic/Faroe (GMT+00:00)',
      'tzCode' => 'Atlantic/Faroe',
      'name' => '(GMT+00:00) Tórshavn, Klaksvík, Fuglafjørður, Tvøroyri, Miðvágur',
      'utc' => '+00:00',
    ),
    183 => 
    array (
      'label' => 'Atlantic/Madeira (GMT+00:00)',
      'tzCode' => 'Atlantic/Madeira',
      'name' => '(GMT+00:00) Funchal, Câmara de Lobos, São Martinho, Caniço, Machico',
      'utc' => '+00:00',
    ),
    184 => 
    array (
      'label' => 'Atlantic/Reykjavik (GMT+00:00)',
      'tzCode' => 'Atlantic/Reykjavik',
      'name' => '(GMT+00:00) Reykjavík, Kópavogur, Hafnarfjörður, Akureyri, Garðabær',
      'utc' => '+00:00',
    ),
    185 => 
    array (
      'label' => 'Atlantic/St_Helena (GMT+00:00)',
      'tzCode' => 'Atlantic/St_Helena',
      'name' => '(GMT+00:00) Jamestown, Georgetown, Edinburgh of the Seven Seas',
      'utc' => '+00:00',
    ),
    186 => 
    array (
      'label' => 'Europe/Dublin (GMT+00:00)',
      'tzCode' => 'Europe/Dublin',
      'name' => '(GMT+00:00) Dublin, Cork, Luimneach, Gaillimh, Tallaght',
      'utc' => '+00:00',
    ),
    187 => 
    array (
      'label' => 'Europe/Guernsey (GMT+00:00)',
      'tzCode' => 'Europe/Guernsey',
      'name' => '(GMT+00:00) Saint Peter Port, St Martin, Saint Sampson, St Anne, Saint Saviour',
      'utc' => '+00:00',
    ),
    188 => 
    array (
      'label' => 'Europe/Isle_of_Man (GMT+00:00)',
      'tzCode' => 'Europe/Isle_of_Man',
      'name' => '(GMT+00:00) Douglas, Ramsey, Peel, Port Erin, Castletown',
      'utc' => '+00:00',
    ),
    189 => 
    array (
      'label' => 'Europe/Jersey (GMT+00:00)',
      'tzCode' => 'Europe/Jersey',
      'name' => '(GMT+00:00) Saint Helier, Le Hocq',
      'utc' => '+00:00',
    ),
    190 => 
    array (
      'label' => 'Europe/Lisbon (GMT+00:00)',
      'tzCode' => 'Europe/Lisbon',
      'name' => '(GMT+00:00) Lisbon, Porto, Amadora, Braga, Setúbal',
      'utc' => '+00:00',
    ),
    191 => 
    array (
      'label' => 'Europe/London (GMT+00:00)',
      'tzCode' => 'Europe/London',
      'name' => '(GMT+00:00) London, Birmingham, Liverpool, Sheffield, Bristol',
      'utc' => '+00:00',
    ),
    192 => 
    array (
      'label' => 'Africa/Algiers (GMT+01:00)',
      'tzCode' => 'Africa/Algiers',
      'name' => '(GMT+01:00) Algiers, Boumerdas, Oran, Tébessa, Constantine',
      'utc' => '+01:00',
    ),
    193 => 
    array (
      'label' => 'Africa/Bangui (GMT+01:00)',
      'tzCode' => 'Africa/Bangui',
      'name' => '(GMT+01:00) Bangui, Bimbo, Mbaïki, Berbérati, Kaga Bandoro',
      'utc' => '+01:00',
    ),
    194 => 
    array (
      'label' => 'Africa/Brazzaville (GMT+01:00)',
      'tzCode' => 'Africa/Brazzaville',
      'name' => '(GMT+01:00) Brazzaville, Pointe-Noire, Dolisie, Kayes, Owando',
      'utc' => '+01:00',
    ),
    195 => 
    array (
      'label' => 'Africa/Ceuta (GMT+01:00)',
      'tzCode' => 'Africa/Ceuta',
      'name' => '(GMT+01:00) Ceuta, Melilla',
      'utc' => '+01:00',
    ),
    196 => 
    array (
      'label' => 'Africa/Douala (GMT+01:00)',
      'tzCode' => 'Africa/Douala',
      'name' => '(GMT+01:00) Douala, Yaoundé, Garoua, Kousséri, Bamenda',
      'utc' => '+01:00',
    ),
    197 => 
    array (
      'label' => 'Africa/Kinshasa (GMT+01:00)',
      'tzCode' => 'Africa/Kinshasa',
      'name' => '(GMT+01:00) Kinshasa, Masina, Kikwit, Mbandaka, Matadi',
      'utc' => '+01:00',
    ),
    198 => 
    array (
      'label' => 'Africa/Lagos (GMT+01:00)',
      'tzCode' => 'Africa/Lagos',
      'name' => '(GMT+01:00) Lagos, Kano, Ibadan, Kaduna, Port Harcourt',
      'utc' => '+01:00',
    ),
    199 => 
    array (
      'label' => 'Africa/Libreville (GMT+01:00)',
      'tzCode' => 'Africa/Libreville',
      'name' => '(GMT+01:00) Libreville, Port-Gentil, Franceville, Oyem, Moanda',
      'utc' => '+01:00',
    ),
    200 => 
    array (
      'label' => 'Africa/Luanda (GMT+01:00)',
      'tzCode' => 'Africa/Luanda',
      'name' => '(GMT+01:00) Luanda, N’dalatando, Huambo, Lobito, Benguela',
      'utc' => '+01:00',
    ),
    201 => 
    array (
      'label' => 'Africa/Malabo (GMT+01:00)',
      'tzCode' => 'Africa/Malabo',
      'name' => '(GMT+01:00) Bata, Malabo, Ebebiyin, Aconibe, Añisoc',
      'utc' => '+01:00',
    ),
    202 => 
    array (
      'label' => 'Africa/Ndjamena (GMT+01:00)',
      'tzCode' => 'Africa/Ndjamena',
      'name' => '(GMT+01:00) N\\\'Djamena, Moundou, Sarh, Abéché, Kelo',
      'utc' => '+01:00',
    ),
    203 => 
    array (
      'label' => 'Africa/Niamey (GMT+01:00)',
      'tzCode' => 'Africa/Niamey',
      'name' => '(GMT+01:00) Niamey, Zinder, Maradi, Agadez, Alaghsas',
      'utc' => '+01:00',
    ),
    204 => 
    array (
      'label' => 'Africa/Porto-Novo (GMT+01:00)',
      'tzCode' => 'Africa/Porto-Novo',
      'name' => '(GMT+01:00) Cotonou, Abomey-Calavi, Djougou, Porto-Novo, Parakou',
      'utc' => '+01:00',
    ),
    205 => 
    array (
      'label' => 'Africa/Tunis (GMT+01:00)',
      'tzCode' => 'Africa/Tunis',
      'name' => '(GMT+01:00) Tunis, Sfax, Sousse, Kairouan, Bizerte',
      'utc' => '+01:00',
    ),
    206 => 
    array (
      'label' => 'Africa/Windhoek (GMT+01:00)',
      'tzCode' => 'Africa/Windhoek',
      'name' => '(GMT+01:00) Windhoek, Rundu, Walvis Bay, Oshakati, Swakopmund',
      'utc' => '+01:00',
    ),
    207 => 
    array (
      'label' => 'Arctic/Longyearbyen (GMT+01:00)',
      'tzCode' => 'Arctic/Longyearbyen',
      'name' => '(GMT+01:00) Longyearbyen, Olonkinbyen',
      'utc' => '+01:00',
    ),
    208 => 
    array (
      'label' => 'Europe/Amsterdam (GMT+01:00)',
      'tzCode' => 'Europe/Amsterdam',
      'name' => '(GMT+01:00) Amsterdam, Rotterdam, The Hague, Utrecht, Eindhoven',
      'utc' => '+01:00',
    ),
    209 => 
    array (
      'label' => 'Europe/Andorra (GMT+01:00)',
      'tzCode' => 'Europe/Andorra',
      'name' => '(GMT+01:00) Andorra la Vella, les Escaldes, Encamp, Sant Julià de Lòria, la Massana',
      'utc' => '+01:00',
    ),
    210 => 
    array (
      'label' => 'Europe/Belgrade (GMT+01:00)',
      'tzCode' => 'Europe/Belgrade',
      'name' => '(GMT+01:00) Belgrade, Pristina, Niš, Novi Sad, Prizren',
      'utc' => '+01:00',
    ),
    211 => 
    array (
      'label' => 'Europe/Berlin (GMT+01:00)',
      'tzCode' => 'Europe/Berlin',
      'name' => '(GMT+01:00) Berlin, Hamburg, Munich, Köln, Frankfurt am Main',
      'utc' => '+01:00',
    ),
    212 => 
    array (
      'label' => 'Europe/Bratislava (GMT+01:00)',
      'tzCode' => 'Europe/Bratislava',
      'name' => '(GMT+01:00) Bratislava, Košice, Prešov, Nitra, Žilina',
      'utc' => '+01:00',
    ),
    213 => 
    array (
      'label' => 'Europe/Brussels (GMT+01:00)',
      'tzCode' => 'Europe/Brussels',
      'name' => '(GMT+01:00) Brussels, Antwerpen, Gent, Charleroi, Liège',
      'utc' => '+01:00',
    ),
    214 => 
    array (
      'label' => 'Europe/Budapest (GMT+01:00)',
      'tzCode' => 'Europe/Budapest',
      'name' => '(GMT+01:00) Budapest, Debrecen, Miskolc, Szeged, Pécs',
      'utc' => '+01:00',
    ),
    215 => 
    array (
      'label' => 'Europe/Copenhagen (GMT+01:00)',
      'tzCode' => 'Europe/Copenhagen',
      'name' => '(GMT+01:00) Copenhagen, Århus, Odense, Aalborg, Frederiksberg',
      'utc' => '+01:00',
    ),
    216 => 
    array (
      'label' => 'Europe/Gibraltar (GMT+01:00)',
      'tzCode' => 'Europe/Gibraltar',
      'name' => '(GMT+01:00) Gibraltar',
      'utc' => '+01:00',
    ),
    217 => 
    array (
      'label' => 'Europe/Ljubljana (GMT+01:00)',
      'tzCode' => 'Europe/Ljubljana',
      'name' => '(GMT+01:00) Ljubljana, Maribor, Celje, Kranj, Velenje',
      'utc' => '+01:00',
    ),
    218 => 
    array (
      'label' => 'Europe/Luxembourg (GMT+01:00)',
      'tzCode' => 'Europe/Luxembourg',
      'name' => '(GMT+01:00) Luxembourg, Esch-sur-Alzette, Dudelange, Schifflange, Bettembourg',
      'utc' => '+01:00',
    ),
    219 => 
    array (
      'label' => 'Europe/Madrid (GMT+01:00)',
      'tzCode' => 'Europe/Madrid',
      'name' => '(GMT+01:00) Madrid, Barcelona, Valencia, Sevilla, Zaragoza',
      'utc' => '+01:00',
    ),
    220 => 
    array (
      'label' => 'Europe/Malta (GMT+01:00)',
      'tzCode' => 'Europe/Malta',
      'name' => '(GMT+01:00) Birkirkara, Qormi, Mosta, Żabbar, San Pawl il-Baħar',
      'utc' => '+01:00',
    ),
    221 => 
    array (
      'label' => 'Europe/Monaco (GMT+01:00)',
      'tzCode' => 'Europe/Monaco',
      'name' => '(GMT+01:00) Monaco, Monte-Carlo, La Condamine',
      'utc' => '+01:00',
    ),
    222 => 
    array (
      'label' => 'Europe/Oslo (GMT+01:00)',
      'tzCode' => 'Europe/Oslo',
      'name' => '(GMT+01:00) Oslo, Bergen, Trondheim, Stavanger, Drammen',
      'utc' => '+01:00',
    ),
    223 => 
    array (
      'label' => 'Europe/Paris (GMT+01:00)',
      'tzCode' => 'Europe/Paris',
      'name' => '(GMT+01:00) Paris, Marseille, Lyon, Toulouse, Nice',
      'utc' => '+01:00',
    ),
    224 => 
    array (
      'label' => 'Europe/Podgorica (GMT+01:00)',
      'tzCode' => 'Europe/Podgorica',
      'name' => '(GMT+01:00) Podgorica, Nikšić, Herceg Novi, Pljevlja, Budva',
      'utc' => '+01:00',
    ),
    225 => 
    array (
      'label' => 'Europe/Prague (GMT+01:00)',
      'tzCode' => 'Europe/Prague',
      'name' => '(GMT+01:00) Prague, Brno, Ostrava, Pilsen, Olomouc',
      'utc' => '+01:00',
    ),
    226 => 
    array (
      'label' => 'Europe/Rome (GMT+01:00)',
      'tzCode' => 'Europe/Rome',
      'name' => '(GMT+01:00) Rome, Milan, Naples, Turin, Palermo',
      'utc' => '+01:00',
    ),
    227 => 
    array (
      'label' => 'Europe/San_Marino (GMT+01:00)',
      'tzCode' => 'Europe/San_Marino',
      'name' => '(GMT+01:00) Serravalle, Borgo Maggiore, San Marino, Domagnano, Fiorentino',
      'utc' => '+01:00',
    ),
    228 => 
    array (
      'label' => 'Europe/Sarajevo (GMT+01:00)',
      'tzCode' => 'Europe/Sarajevo',
      'name' => '(GMT+01:00) Sarajevo, Banja Luka, Zenica, Tuzla, Mostar',
      'utc' => '+01:00',
    ),
    229 => 
    array (
      'label' => 'Europe/Skopje (GMT+01:00)',
      'tzCode' => 'Europe/Skopje',
      'name' => '(GMT+01:00) Skopje, Bitola, Kumanovo, Prilep, Tetovo',
      'utc' => '+01:00',
    ),
    230 => 
    array (
      'label' => 'Europe/Stockholm (GMT+01:00)',
      'tzCode' => 'Europe/Stockholm',
      'name' => '(GMT+01:00) Stockholm, Göteborg, Malmö, Uppsala, Sollentuna',
      'utc' => '+01:00',
    ),
    231 => 
    array (
      'label' => 'Europe/Tirane (GMT+01:00)',
      'tzCode' => 'Europe/Tirane',
      'name' => '(GMT+01:00) Tirana, Durrës, Elbasan, Vlorë, Shkodër',
      'utc' => '+01:00',
    ),
    232 => 
    array (
      'label' => 'Europe/Vaduz (GMT+01:00)',
      'tzCode' => 'Europe/Vaduz',
      'name' => '(GMT+01:00) Schaan, Vaduz, Triesen, Balzers, Eschen',
      'utc' => '+01:00',
    ),
    233 => 
    array (
      'label' => 'Europe/Vatican (GMT+01:00)',
      'tzCode' => 'Europe/Vatican',
      'name' => '(GMT+01:00) Vatican City',
      'utc' => '+01:00',
    ),
    234 => 
    array (
      'label' => 'Europe/Vienna (GMT+01:00)',
      'tzCode' => 'Europe/Vienna',
      'name' => '(GMT+01:00) Vienna, Graz, Linz, Favoriten, Donaustadt',
      'utc' => '+01:00',
    ),
    235 => 
    array (
      'label' => 'Europe/Warsaw (GMT+01:00)',
      'tzCode' => 'Europe/Warsaw',
      'name' => '(GMT+01:00) Warsaw, Łódź, Kraków, Wrocław, Poznań',
      'utc' => '+01:00',
    ),
    236 => 
    array (
      'label' => 'Europe/Zagreb (GMT+01:00)',
      'tzCode' => 'Europe/Zagreb',
      'name' => '(GMT+01:00) Zagreb, Split, Rijeka, Osijek, Zadar',
      'utc' => '+01:00',
    ),
    237 => 
    array (
      'label' => 'Europe/Zurich (GMT+01:00)',
      'tzCode' => 'Europe/Zurich',
      'name' => '(GMT+01:00) Zürich, Genève, Basel, Lausanne, Bern',
      'utc' => '+01:00',
    ),
    238 => 
    array (
      'label' => 'Africa/Blantyre (GMT+02:00)',
      'tzCode' => 'Africa/Blantyre',
      'name' => '(GMT+02:00) Lilongwe, Blantyre, Mzuzu, Zomba, Kasungu',
      'utc' => '+02:00',
    ),
    239 => 
    array (
      'label' => 'Africa/Bujumbura (GMT+02:00)',
      'tzCode' => 'Africa/Bujumbura',
      'name' => '(GMT+02:00) Bujumbura, Muyinga, Gitega, Ruyigi, Ngozi',
      'utc' => '+02:00',
    ),
    240 => 
    array (
      'label' => 'Africa/Cairo (GMT+02:00)',
      'tzCode' => 'Africa/Cairo',
      'name' => '(GMT+02:00) Cairo, Alexandria, Giza, Port Said, Suez',
      'utc' => '+02:00',
    ),
    241 => 
    array (
      'label' => 'Africa/Gaborone (GMT+02:00)',
      'tzCode' => 'Africa/Gaborone',
      'name' => '(GMT+02:00) Gaborone, Francistown, Molepolole, Selebi-Phikwe, Maun',
      'utc' => '+02:00',
    ),
    242 => 
    array (
      'label' => 'Africa/Harare (GMT+02:00)',
      'tzCode' => 'Africa/Harare',
      'name' => '(GMT+02:00) Harare, Bulawayo, Chitungwiza, Mutare, Gweru',
      'utc' => '+02:00',
    ),
    243 => 
    array (
      'label' => 'Africa/Johannesburg (GMT+02:00)',
      'tzCode' => 'Africa/Johannesburg',
      'name' => '(GMT+02:00) Cape Town, Durban, Johannesburg, Soweto, Pretoria',
      'utc' => '+02:00',
    ),
    244 => 
    array (
      'label' => 'Africa/Juba (GMT+02:00)',
      'tzCode' => 'Africa/Juba',
      'name' => '(GMT+02:00) Juba, Winejok, Malakal, Wau, Kuacjok',
      'utc' => '+02:00',
    ),
    245 => 
    array (
      'label' => 'Africa/Khartoum (GMT+02:00)',
      'tzCode' => 'Africa/Khartoum',
      'name' => '(GMT+02:00) Khartoum, Omdurman, Nyala, Port Sudan, Kassala',
      'utc' => '+02:00',
    ),
    246 => 
    array (
      'label' => 'Africa/Kigali (GMT+02:00)',
      'tzCode' => 'Africa/Kigali',
      'name' => '(GMT+02:00) Kigali, Butare, Gitarama, Musanze, Gisenyi',
      'utc' => '+02:00',
    ),
    247 => 
    array (
      'label' => 'Africa/Lubumbashi (GMT+02:00)',
      'tzCode' => 'Africa/Lubumbashi',
      'name' => '(GMT+02:00) Lubumbashi, Mbuji-Mayi, Kisangani, Kananga, Likasi',
      'utc' => '+02:00',
    ),
    248 => 
    array (
      'label' => 'Africa/Lusaka (GMT+02:00)',
      'tzCode' => 'Africa/Lusaka',
      'name' => '(GMT+02:00) Lusaka, Kitwe, Ndola, Kabwe, Chingola',
      'utc' => '+02:00',
    ),
    249 => 
    array (
      'label' => 'Africa/Maputo (GMT+02:00)',
      'tzCode' => 'Africa/Maputo',
      'name' => '(GMT+02:00) Maputo, Matola, Beira, Nampula, Chimoio',
      'utc' => '+02:00',
    ),
    250 => 
    array (
      'label' => 'Africa/Maseru (GMT+02:00)',
      'tzCode' => 'Africa/Maseru',
      'name' => '(GMT+02:00) Maseru, Mafeteng, Leribe, Maputsoe, Mohale’s Hoek',
      'utc' => '+02:00',
    ),
    251 => 
    array (
      'label' => 'Africa/Mbabane (GMT+02:00)',
      'tzCode' => 'Africa/Mbabane',
      'name' => '(GMT+02:00) Manzini, Mbabane, Big Bend, Malkerns, Nhlangano',
      'utc' => '+02:00',
    ),
    252 => 
    array (
      'label' => 'Africa/Tripoli (GMT+02:00)',
      'tzCode' => 'Africa/Tripoli',
      'name' => '(GMT+02:00) Tripoli, Benghazi, Mişrātah, Tarhuna, Al Khums',
      'utc' => '+02:00',
    ),
    253 => 
    array (
      'label' => 'Asia/Amman (GMT+02:00)',
      'tzCode' => 'Asia/Amman',
      'name' => '(GMT+02:00) Amman, Zarqa, Irbid, Russeifa, Wādī as Sīr',
      'utc' => '+02:00',
    ),
    254 => 
    array (
      'label' => 'Asia/Beirut (GMT+02:00)',
      'tzCode' => 'Asia/Beirut',
      'name' => '(GMT+02:00) Beirut, Ra’s Bayrūt, Tripoli, Sidon, Tyre',
      'utc' => '+02:00',
    ),
    255 => 
    array (
      'label' => 'Asia/Damascus (GMT+02:00)',
      'tzCode' => 'Asia/Damascus',
      'name' => '(GMT+02:00) Aleppo, Damascus, Homs, Ḩamāh, Latakia',
      'utc' => '+02:00',
    ),
    256 => 
    array (
      'label' => 'Asia/Famagusta (GMT+02:00)',
      'tzCode' => 'Asia/Famagusta',
      'name' => '(GMT+02:00) Famagusta, Kyrenia, Protaras, Paralímni, Lápithos',
      'utc' => '+02:00',
    ),
    257 => 
    array (
      'label' => 'Asia/Gaza (GMT+02:00)',
      'tzCode' => 'Asia/Gaza',
      'name' => '(GMT+02:00) Gaza, Khān Yūnis, Jabālyā, Rafaḩ, Dayr al Balaḩ',
      'utc' => '+02:00',
    ),
    258 => 
    array (
      'label' => 'Asia/Hebron (GMT+02:00)',
      'tzCode' => 'Asia/Hebron',
      'name' => '(GMT+02:00) East Jerusalem, Hebron, Nablus, Battir, Ţūlkarm',
      'utc' => '+02:00',
    ),
    259 => 
    array (
      'label' => 'Asia/Jerusalem (GMT+02:00)',
      'tzCode' => 'Asia/Jerusalem',
      'name' => '(GMT+02:00) Jerusalem, Tel Aviv, West Jerusalem, Haifa, Ashdod',
      'utc' => '+02:00',
    ),
    260 => 
    array (
      'label' => 'Asia/Nicosia (GMT+02:00)',
      'tzCode' => 'Asia/Nicosia',
      'name' => '(GMT+02:00) Nicosia, Limassol, Larnaca, Stróvolos, Paphos',
      'utc' => '+02:00',
    ),
    261 => 
    array (
      'label' => 'Europe/Athens (GMT+02:00)',
      'tzCode' => 'Europe/Athens',
      'name' => '(GMT+02:00) Athens, Thessaloníki, Pátra, Piraeus, Lárisa',
      'utc' => '+02:00',
    ),
    262 => 
    array (
      'label' => 'Europe/Bucharest (GMT+02:00)',
      'tzCode' => 'Europe/Bucharest',
      'name' => '(GMT+02:00) Bucharest, Sector 3, Sector 6, Sector 2, Iaşi',
      'utc' => '+02:00',
    ),
    263 => 
    array (
      'label' => 'Europe/Chisinau (GMT+02:00)',
      'tzCode' => 'Europe/Chisinau',
      'name' => '(GMT+02:00) Chisinau, Tiraspol, Bălţi, Bender, Rîbniţa',
      'utc' => '+02:00',
    ),
    264 => 
    array (
      'label' => 'Europe/Helsinki (GMT+02:00)',
      'tzCode' => 'Europe/Helsinki',
      'name' => '(GMT+02:00) Helsinki, Espoo, Tampere, Vantaa, Turku',
      'utc' => '+02:00',
    ),
    265 => 
    array (
      'label' => 'Europe/Kaliningrad (GMT+02:00)',
      'tzCode' => 'Europe/Kaliningrad',
      'name' => '(GMT+02:00) Kaliningrad, Chernyakhovsk, Sovetsk, Baltiysk, Gusev',
      'utc' => '+02:00',
    ),
    266 => 
    array (
      'label' => 'Europe/Kiev (GMT+02:00)',
      'tzCode' => 'Europe/Kiev',
      'name' => '(GMT+02:00) Kyiv, Kharkiv, Donetsk, Odessa, Dnipro',
      'utc' => '+02:00',
    ),
    267 => 
    array (
      'label' => 'Europe/Mariehamn (GMT+02:00)',
      'tzCode' => 'Europe/Mariehamn',
      'name' => '(GMT+02:00) Mariehamn',
      'utc' => '+02:00',
    ),
    268 => 
    array (
      'label' => 'Europe/Riga (GMT+02:00)',
      'tzCode' => 'Europe/Riga',
      'name' => '(GMT+02:00) Riga, Daugavpils, Liepāja, Jelgava, Jūrmala',
      'utc' => '+02:00',
    ),
    269 => 
    array (
      'label' => 'Europe/Sofia (GMT+02:00)',
      'tzCode' => 'Europe/Sofia',
      'name' => '(GMT+02:00) Sofia, Plovdiv, Varna, Burgas, Ruse',
      'utc' => '+02:00',
    ),
    270 => 
    array (
      'label' => 'Europe/Tallinn (GMT+02:00)',
      'tzCode' => 'Europe/Tallinn',
      'name' => '(GMT+02:00) Tallinn, Tartu, Narva, Kohtla-Järve, Pärnu',
      'utc' => '+02:00',
    ),
    271 => 
    array (
      'label' => 'Europe/Uzhgorod (GMT+02:00)',
      'tzCode' => 'Europe/Uzhgorod',
      'name' => '(GMT+02:00) Uzhgorod, Mukachevo, Khust, Berehove, Tyachiv',
      'utc' => '+02:00',
    ),
    272 => 
    array (
      'label' => 'Europe/Vilnius (GMT+02:00)',
      'tzCode' => 'Europe/Vilnius',
      'name' => '(GMT+02:00) Vilnius, Kaunas, Klaipėda, Šiauliai, Panevėžys',
      'utc' => '+02:00',
    ),
    273 => 
    array (
      'label' => 'Europe/Zaporozhye (GMT+02:00)',
      'tzCode' => 'Europe/Zaporozhye',
      'name' => '(GMT+02:00) Luhansk, Sevastopol, Sievierodonetsk, Alchevsk, Lysychansk',
      'utc' => '+02:00',
    ),
    274 => 
    array (
      'label' => 'Africa/Addis_Ababa (GMT+03:00)',
      'tzCode' => 'Africa/Addis_Ababa',
      'name' => '(GMT+03:00) Addis Ababa, Dire Dawa, Mek\\\'ele, Nazrēt, Bahir Dar',
      'utc' => '+03:00',
    ),
    275 => 
    array (
      'label' => 'Africa/Asmara (GMT+03:00)',
      'tzCode' => 'Africa/Asmara',
      'name' => '(GMT+03:00) Asmara, Keren, Massawa, Assab, Mendefera',
      'utc' => '+03:00',
    ),
    276 => 
    array (
      'label' => 'Africa/Dar_es_Salaam (GMT+03:00)',
      'tzCode' => 'Africa/Dar_es_Salaam',
      'name' => '(GMT+03:00) Dar es Salaam, Mwanza, Zanzibar, Arusha, Mbeya',
      'utc' => '+03:00',
    ),
    277 => 
    array (
      'label' => 'Africa/Djibouti (GMT+03:00)',
      'tzCode' => 'Africa/Djibouti',
      'name' => '(GMT+03:00) Djibouti, \\\'Ali Sabieh, Tadjourah, Obock, Dikhil',
      'utc' => '+03:00',
    ),
    278 => 
    array (
      'label' => 'Africa/Kampala (GMT+03:00)',
      'tzCode' => 'Africa/Kampala',
      'name' => '(GMT+03:00) Kampala, Gulu, Lira, Mbarara, Jinja',
      'utc' => '+03:00',
    ),
    279 => 
    array (
      'label' => 'Africa/Mogadishu (GMT+03:00)',
      'tzCode' => 'Africa/Mogadishu',
      'name' => '(GMT+03:00) Mogadishu, Hargeysa, Berbera, Kismayo, Marka',
      'utc' => '+03:00',
    ),
    280 => 
    array (
      'label' => 'Africa/Nairobi (GMT+03:00)',
      'tzCode' => 'Africa/Nairobi',
      'name' => '(GMT+03:00) Nairobi, Mombasa, Nakuru, Eldoret, Kisumu',
      'utc' => '+03:00',
    ),
    281 => 
    array (
      'label' => 'Antarctica/Syowa (GMT+03:00)',
      'tzCode' => 'Antarctica/Syowa',
      'name' => '(GMT+03:00) Syowa',
      'utc' => '+03:00',
    ),
    282 => 
    array (
      'label' => 'Asia/Aden (GMT+03:00)',
      'tzCode' => 'Asia/Aden',
      'name' => '(GMT+03:00) Sanaa, Al Ḩudaydah, Taiz, Aden, Mukalla',
      'utc' => '+03:00',
    ),
    283 => 
    array (
      'label' => 'Asia/Baghdad (GMT+03:00)',
      'tzCode' => 'Asia/Baghdad',
      'name' => '(GMT+03:00) Baghdad, Basrah, Al Mawşil al Jadīdah, Al Başrah al Qadīmah, Mosul',
      'utc' => '+03:00',
    ),
    284 => 
    array (
      'label' => 'Asia/Bahrain (GMT+03:00)',
      'tzCode' => 'Asia/Bahrain',
      'name' => '(GMT+03:00) Manama, Al Muharraq, Ar Rifā‘, Dār Kulayb, Madīnat Ḩamad',
      'utc' => '+03:00',
    ),
    285 => 
    array (
      'label' => 'Asia/Kuwait (GMT+03:00)',
      'tzCode' => 'Asia/Kuwait',
      'name' => '(GMT+03:00) Al Aḩmadī, Ḩawallī, As Sālimīyah, Şabāḩ as Sālim, Al Farwānīyah',
      'utc' => '+03:00',
    ),
    286 => 
    array (
      'label' => 'Asia/Qatar (GMT+03:00)',
      'tzCode' => 'Asia/Qatar',
      'name' => '(GMT+03:00) Doha, Ar Rayyān, Umm Şalāl Muḩammad, Al Wakrah, Al Khawr',
      'utc' => '+03:00',
    ),
    287 => 
    array (
      'label' => 'Asia/Riyadh (GMT+03:00)',
      'tzCode' => 'Asia/Riyadh',
      'name' => '(GMT+03:00) Riyadh, Jeddah, Mecca, Medina, Sulţānah',
      'utc' => '+03:00',
    ),
    288 => 
    array (
      'label' => 'Europe/Istanbul (GMT+03:00)',
      'tzCode' => 'Europe/Istanbul',
      'name' => '(GMT+03:00) Istanbul, Ankara, İzmir, Bursa, Adana',
      'utc' => '+03:00',
    ),
    289 => 
    array (
      'label' => 'Europe/Kirov (GMT+03:00)',
      'tzCode' => 'Europe/Kirov',
      'name' => '(GMT+03:00) Kirov, Kirovo-Chepetsk, Vyatskiye Polyany, Slobodskoy, Kotel’nich',
      'utc' => '+03:00',
    ),
    290 => 
    array (
      'label' => 'Europe/Minsk (GMT+03:00)',
      'tzCode' => 'Europe/Minsk',
      'name' => '(GMT+03:00) Minsk, Homyel\\\', Mahilyow, Vitebsk, Hrodna',
      'utc' => '+03:00',
    ),
    291 => 
    array (
      'label' => 'Europe/Moscow (GMT+03:00)',
      'tzCode' => 'Europe/Moscow',
      'name' => '(GMT+03:00) Moscow, Saint Petersburg, Nizhniy Novgorod, Kazan, Rostov-na-Donu',
      'utc' => '+03:00',
    ),
    292 => 
    array (
      'label' => 'Europe/Simferopol (GMT+03:00)',
      'tzCode' => 'Europe/Simferopol',
      'name' => '(GMT+03:00) Simferopol, Kerch, Yevpatoriya, Yalta, Feodosiya',
      'utc' => '+03:00',
    ),
    293 => 
    array (
      'label' => 'Europe/Volgograd (GMT+03:00)',
      'tzCode' => 'Europe/Volgograd',
      'name' => '(GMT+03:00) Volgograd, Volzhskiy, Kamyshin, Mikhaylovka, Uryupinsk',
      'utc' => '+03:00',
    ),
    294 => 
    array (
      'label' => 'Indian/Antananarivo (GMT+03:00)',
      'tzCode' => 'Indian/Antananarivo',
      'name' => '(GMT+03:00) Antananarivo, Toamasina, Antsirabe, Fianarantsoa, Mahajanga',
      'utc' => '+03:00',
    ),
    295 => 
    array (
      'label' => 'Indian/Comoro (GMT+03:00)',
      'tzCode' => 'Indian/Comoro',
      'name' => '(GMT+03:00) Moroni, Moutsamoudou, Fomboni, Domoni, Tsimbeo',
      'utc' => '+03:00',
    ),
    296 => 
    array (
      'label' => 'Indian/Mayotte (GMT+03:00)',
      'tzCode' => 'Indian/Mayotte',
      'name' => '(GMT+03:00) Mamoudzou, Koungou, Dzaoudzi, Dembeni, Sada',
      'utc' => '+03:00',
    ),
    297 => 
    array (
      'label' => 'Asia/Tehran (GMT+03:30)',
      'tzCode' => 'Asia/Tehran',
      'name' => '(GMT+03:30) Tehran, Mashhad, Isfahan, Karaj, Tabriz',
      'utc' => '+03:30',
    ),
    298 => 
    array (
      'label' => 'Asia/Baku (GMT+04:00)',
      'tzCode' => 'Asia/Baku',
      'name' => '(GMT+04:00) Baku, Ganja, Sumqayıt, Lankaran, Yevlakh',
      'utc' => '+04:00',
    ),
    299 => 
    array (
      'label' => 'Asia/Dubai (GMT+04:00)',
      'tzCode' => 'Asia/Dubai',
      'name' => '(GMT+04:00) Dubai, Sharjah, Abu Dhabi, Ajman City, Ras Al Khaimah City',
      'utc' => '+04:00',
    ),
    300 => 
    array (
      'label' => 'Asia/Muscat (GMT+04:00)',
      'tzCode' => 'Asia/Muscat',
      'name' => '(GMT+04:00) Muscat, Seeb, Şalālah, Bawshar, Sohar',
      'utc' => '+04:00',
    ),
    301 => 
    array (
      'label' => 'Asia/Tbilisi (GMT+04:00)',
      'tzCode' => 'Asia/Tbilisi',
      'name' => '(GMT+04:00) Tbilisi, Kutaisi, Batumi, Sokhumi, Zugdidi',
      'utc' => '+04:00',
    ),
    302 => 
    array (
      'label' => 'Asia/Yerevan (GMT+04:00)',
      'tzCode' => 'Asia/Yerevan',
      'name' => '(GMT+04:00) Yerevan, Gyumri, Vanadzor, Vagharshapat, Hrazdan',
      'utc' => '+04:00',
    ),
    303 => 
    array (
      'label' => 'Europe/Astrakhan (GMT+04:00)',
      'tzCode' => 'Europe/Astrakhan',
      'name' => '(GMT+04:00) Astrakhan, Akhtubinsk, Znamensk, Kharabali, Kamyzyak',
      'utc' => '+04:00',
    ),
    304 => 
    array (
      'label' => 'Europe/Samara (GMT+04:00)',
      'tzCode' => 'Europe/Samara',
      'name' => '(GMT+04:00) Samara, Togliatti-on-the-Volga, Izhevsk, Syzran’, Novokuybyshevsk',
      'utc' => '+04:00',
    ),
    305 => 
    array (
      'label' => 'Europe/Saratov (GMT+04:00)',
      'tzCode' => 'Europe/Saratov',
      'name' => '(GMT+04:00) Saratov, Balakovo, Engel’s, Balashov, Vol’sk',
      'utc' => '+04:00',
    ),
    306 => 
    array (
      'label' => 'Europe/Ulyanovsk (GMT+04:00)',
      'tzCode' => 'Europe/Ulyanovsk',
      'name' => '(GMT+04:00) Ulyanovsk, Dimitrovgrad, Inza, Barysh, Novoul’yanovsk',
      'utc' => '+04:00',
    ),
    307 => 
    array (
      'label' => 'Indian/Mahe (GMT+04:00)',
      'tzCode' => 'Indian/Mahe',
      'name' => '(GMT+04:00) Victoria, Anse Boileau, Bel Ombre, Beau Vallon, Cascade',
      'utc' => '+04:00',
    ),
    308 => 
    array (
      'label' => 'Indian/Mauritius (GMT+04:00)',
      'tzCode' => 'Indian/Mauritius',
      'name' => '(GMT+04:00) Port Louis, Beau Bassin-Rose Hill, Vacoas, Curepipe, Quatre Bornes',
      'utc' => '+04:00',
    ),
    309 => 
    array (
      'label' => 'Indian/Reunion (GMT+04:00)',
      'tzCode' => 'Indian/Reunion',
      'name' => '(GMT+04:00) Saint-Denis, Saint-Paul, Saint-Pierre, Le Tampon, Saint-André',
      'utc' => '+04:00',
    ),
    310 => 
    array (
      'label' => 'Asia/Kabul (GMT+04:30)',
      'tzCode' => 'Asia/Kabul',
      'name' => '(GMT+04:30) Kabul, Kandahār, Mazār-e Sharīf, Herāt, Jalālābād',
      'utc' => '+04:30',
    ),
    311 => 
    array (
      'label' => 'Antarctica/Mawson (GMT+05:00)',
      'tzCode' => 'Antarctica/Mawson',
      'name' => '(GMT+05:00) Mawson',
      'utc' => '+05:00',
    ),
    312 => 
    array (
      'label' => 'Asia/Aqtau (GMT+05:00)',
      'tzCode' => 'Asia/Aqtau',
      'name' => '(GMT+05:00) Shevchenko, Zhanaozen, Beyneu, Shetpe, Yeraliyev',
      'utc' => '+05:00',
    ),
    313 => 
    array (
      'label' => 'Asia/Aqtobe (GMT+05:00)',
      'tzCode' => 'Asia/Aqtobe',
      'name' => '(GMT+05:00) Aktobe, Kandyagash, Shalqar, Khromtau, Embi',
      'utc' => '+05:00',
    ),
    314 => 
    array (
      'label' => 'Asia/Ashgabat (GMT+05:00)',
      'tzCode' => 'Asia/Ashgabat',
      'name' => '(GMT+05:00) Ashgabat, Türkmenabat, Daşoguz, Mary, Balkanabat',
      'utc' => '+05:00',
    ),
    315 => 
    array (
      'label' => 'Asia/Atyrau (GMT+05:00)',
      'tzCode' => 'Asia/Atyrau',
      'name' => '(GMT+05:00) Atyrau, Qulsary, Shalkar, Balykshi, Maqat',
      'utc' => '+05:00',
    ),
    316 => 
    array (
      'label' => 'Asia/Dushanbe (GMT+05:00)',
      'tzCode' => 'Asia/Dushanbe',
      'name' => '(GMT+05:00) Dushanbe, Khujand, Kŭlob, Bokhtar, Istaravshan',
      'utc' => '+05:00',
    ),
    317 => 
    array (
      'label' => 'Asia/Karachi (GMT+05:00)',
      'tzCode' => 'Asia/Karachi',
      'name' => '(GMT+05:00) Karachi, Lahore, Faisalabad, Rawalpindi, Multan',
      'utc' => '+05:00',
    ),
    318 => 
    array (
      'label' => 'Asia/Oral (GMT+05:00)',
      'tzCode' => 'Asia/Oral',
      'name' => '(GMT+05:00) Oral, Aqsay, Zhänibek, Tasqala, Zhumysker',
      'utc' => '+05:00',
    ),
    319 => 
    array (
      'label' => 'Asia/Qyzylorda (GMT+05:00)',
      'tzCode' => 'Asia/Qyzylorda',
      'name' => '(GMT+05:00) Kyzylorda, Baikonur, Novokazalinsk, Aral, Chiili',
      'utc' => '+05:00',
    ),
    320 => 
    array (
      'label' => 'Asia/Samarkand (GMT+05:00)',
      'tzCode' => 'Asia/Samarkand',
      'name' => '(GMT+05:00) Samarkand, Bukhara, Nukus, Qarshi, Jizzax',
      'utc' => '+05:00',
    ),
    321 => 
    array (
      'label' => 'Asia/Tashkent (GMT+05:00)',
      'tzCode' => 'Asia/Tashkent',
      'name' => '(GMT+05:00) Tashkent, Namangan, Andijon, Qo‘qon, Chirchiq',
      'utc' => '+05:00',
    ),
    322 => 
    array (
      'label' => 'Asia/Yekaterinburg (GMT+05:00)',
      'tzCode' => 'Asia/Yekaterinburg',
      'name' => '(GMT+05:00) Yekaterinburg, Chelyabinsk, Ufa, Perm, Orenburg',
      'utc' => '+05:00',
    ),
    323 => 
    array (
      'label' => 'Indian/Kerguelen (GMT+05:00)',
      'tzCode' => 'Indian/Kerguelen',
      'name' => '(GMT+05:00) Port-aux-Français',
      'utc' => '+05:00',
    ),
    324 => 
    array (
      'label' => 'Indian/Maldives (GMT+05:00)',
      'tzCode' => 'Indian/Maldives',
      'name' => '(GMT+05:00) Male, Fuvahmulah, Hithadhoo, Kulhudhuffushi, Thinadhoo',
      'utc' => '+05:00',
    ),
    325 => 
    array (
      'label' => 'Asia/Colombo (GMT+05:30)',
      'tzCode' => 'Asia/Colombo',
      'name' => '(GMT+05:30) Colombo, Dehiwala-Mount Lavinia, Moratuwa, Jaffna, Negombo',
      'utc' => '+05:30',
    ),
    326 => 
    array (
      'label' => 'Asia/Kolkata (GMT+05:30)',
      'tzCode' => 'Asia/Kolkata',
      'name' => '(GMT+05:30) Mumbai, Delhi, Bengaluru, Kolkata, Chennai',
      'utc' => '+05:30',
    ),
    327 => 
    array (
      'label' => 'Asia/Kathmandu (GMT+05:45)',
      'tzCode' => 'Asia/Kathmandu',
      'name' => '(GMT+05:45) Kathmandu, Pokhara, Pātan, Biratnagar, Birgañj',
      'utc' => '+05:45',
    ),
    328 => 
    array (
      'label' => 'Antarctica/Vostok (GMT+06:00)',
      'tzCode' => 'Antarctica/Vostok',
      'name' => '(GMT+06:00) Vostok',
      'utc' => '+06:00',
    ),
    329 => 
    array (
      'label' => 'Asia/Almaty (GMT+06:00)',
      'tzCode' => 'Asia/Almaty',
      'name' => '(GMT+06:00) Almaty, Karagandy, Shymkent, Taraz, Nur-Sultan',
      'utc' => '+06:00',
    ),
    330 => 
    array (
      'label' => 'Asia/Bishkek (GMT+06:00)',
      'tzCode' => 'Asia/Bishkek',
      'name' => '(GMT+06:00) Bishkek, Osh, Jalal-Abad, Karakol, Tokmok',
      'utc' => '+06:00',
    ),
    331 => 
    array (
      'label' => 'Asia/Dhaka (GMT+06:00)',
      'tzCode' => 'Asia/Dhaka',
      'name' => '(GMT+06:00) Dhaka, Chattogram, Khulna, Rājshāhi, Comilla',
      'utc' => '+06:00',
    ),
    332 => 
    array (
      'label' => 'Asia/Omsk (GMT+06:00)',
      'tzCode' => 'Asia/Omsk',
      'name' => '(GMT+06:00) Omsk, Tara, Kalachinsk, Znamenskoye, Tavricheskoye',
      'utc' => '+06:00',
    ),
    333 => 
    array (
      'label' => 'Asia/Qostanay (GMT+06:00)',
      'tzCode' => 'Asia/Qostanay',
      'name' => '(GMT+06:00) Kostanay, Rudnyy, Dzhetygara, Arkalyk, Lisakovsk',
      'utc' => '+06:00',
    ),
    334 => 
    array (
      'label' => 'Asia/Thimphu (GMT+06:00)',
      'tzCode' => 'Asia/Thimphu',
      'name' => '(GMT+06:00) himphu, Punākha, Tsirang, Phuntsholing, Pemagatshel',
      'utc' => '+06:00',
    ),
    335 => 
    array (
      'label' => 'Asia/Urumqi (GMT+06:00)',
      'tzCode' => 'Asia/Urumqi',
      'name' => '(GMT+06:00) Zhongshan, Ürümqi, Zhanjiang, Shihezi, Huocheng',
      'utc' => '+06:00',
    ),
    336 => 
    array (
      'label' => 'Indian/Chagos (GMT+06:00)',
      'tzCode' => 'Indian/Chagos',
      'name' => '(GMT+06:00) British Indian Ocean Territory',
      'utc' => '+06:00',
    ),
    337 => 
    array (
      'label' => 'Asia/Yangon (GMT+06:30)',
      'tzCode' => 'Asia/Yangon',
      'name' => '(GMT+06:30) Yangon, Mandalay, Nay Pyi Taw, Mawlamyine, Kyain Seikgyi Township',
      'utc' => '+06:30',
    ),
    338 => 
    array (
      'label' => 'Indian/Cocos (GMT+06:30)',
      'tzCode' => 'Indian/Cocos',
      'name' => '(GMT+06:30) West Island',
      'utc' => '+06:30',
    ),
    339 => 
    array (
      'label' => 'Antarctica/Davis (GMT+07:00)',
      'tzCode' => 'Antarctica/Davis',
      'name' => '(GMT+07:00) Davis',
      'utc' => '+07:00',
    ),
    340 => 
    array (
      'label' => 'Asia/Bangkok (GMT+07:00)',
      'tzCode' => 'Asia/Bangkok',
      'name' => '(GMT+07:00) Bangkok, Hanoi, Haiphong, Samut Prakan, Mueang Nonthaburi',
      'utc' => '+07:00',
    ),
    341 => 
    array (
      'label' => 'Asia/Barnaul (GMT+07:00)',
      'tzCode' => 'Asia/Barnaul',
      'name' => '(GMT+07:00) Barnaul, Biysk, Rubtsovsk, Novoaltaysk, Gorno-Altaysk',
      'utc' => '+07:00',
    ),
    342 => 
    array (
      'label' => 'Asia/Hovd (GMT+07:00)',
      'tzCode' => 'Asia/Hovd',
      'name' => '(GMT+07:00) Khovd, Ölgii, Ulaangom, Uliastay, Altai',
      'utc' => '+07:00',
    ),
    343 => 
    array (
      'label' => 'Asia/Ho_Chi_Minh (GMT+07:00)',
      'tzCode' => 'Asia/Ho_Chi_Minh',
      'name' => '(GMT+07:00) Ho Chi Minh City, Da Nang, Biên Hòa, Nha Trang, Cần Thơ',
      'utc' => '+07:00',
    ),
    344 => 
    array (
      'label' => 'Asia/Jakarta (GMT+07:00)',
      'tzCode' => 'Asia/Jakarta',
      'name' => '(GMT+07:00) Jakarta, Surabaya, Medan, Bandung, Bekasi',
      'utc' => '+07:00',
    ),
    345 => 
    array (
      'label' => 'Asia/Krasnoyarsk (GMT+07:00)',
      'tzCode' => 'Asia/Krasnoyarsk',
      'name' => '(GMT+07:00) Krasnoyarsk, Abakan, Norilsk, Achinsk, Kyzyl',
      'utc' => '+07:00',
    ),
    346 => 
    array (
      'label' => 'Asia/Novokuznetsk (GMT+07:00)',
      'tzCode' => 'Asia/Novokuznetsk',
      'name' => '(GMT+07:00) Novokuznetsk, Kemerovo, Prokop’yevsk, Leninsk-Kuznetsky, Kiselëvsk',
      'utc' => '+07:00',
    ),
    347 => 
    array (
      'label' => 'Asia/Novosibirsk (GMT+07:00)',
      'tzCode' => 'Asia/Novosibirsk',
      'name' => '(GMT+07:00) Novosibirsk, Berdsk, Iskitim, Akademgorodok, Kuybyshev',
      'utc' => '+07:00',
    ),
    348 => 
    array (
      'label' => 'Asia/Phnom_Penh (GMT+07:00)',
      'tzCode' => 'Asia/Phnom_Penh',
      'name' => '(GMT+07:00) Phnom Penh, Takeo, Sihanoukville, Battambang, Siem Reap',
      'utc' => '+07:00',
    ),
    349 => 
    array (
      'label' => 'Asia/Pontianak (GMT+07:00)',
      'tzCode' => 'Asia/Pontianak',
      'name' => '(GMT+07:00) Pontianak, Tanjung Pinang, Palangkaraya, Singkawang, Sampit',
      'utc' => '+07:00',
    ),
    350 => 
    array (
      'label' => 'Asia/Tomsk (GMT+07:00)',
      'tzCode' => 'Asia/Tomsk',
      'name' => '(GMT+07:00) Tomsk, Seversk, Strezhevoy, Kolpashevo, Asino',
      'utc' => '+07:00',
    ),
    351 => 
    array (
      'label' => 'Asia/Vientiane (GMT+07:00)',
      'tzCode' => 'Asia/Vientiane',
      'name' => '(GMT+07:00) Vientiane, Pakse, Thakhèk, Savannakhet, Luang Prabang',
      'utc' => '+07:00',
    ),
    352 => 
    array (
      'label' => 'Indian/Christmas (GMT+07:00)',
      'tzCode' => 'Indian/Christmas',
      'name' => '(GMT+07:00) Flying Fish Cove',
      'utc' => '+07:00',
    ),
    353 => 
    array (
      'label' => 'Asia/Brunei (GMT+08:00)',
      'tzCode' => 'Asia/Brunei',
      'name' => '(GMT+08:00) Bandar Seri Begawan, Kuala Belait, Seria, Tutong, Bangar',
      'utc' => '+08:00',
    ),
    354 => 
    array (
      'label' => 'Asia/Choibalsan (GMT+08:00)',
      'tzCode' => 'Asia/Choibalsan',
      'name' => '(GMT+08:00) Baruun-Urt, Choibalsan',
      'utc' => '+08:00',
    ),
    355 => 
    array (
      'label' => 'Asia/Hong_Kong (GMT+08:00)',
      'tzCode' => 'Asia/Hong_Kong',
      'name' => '(GMT+08:00) Hong Kong, Kowloon, Tsuen Wan, Yuen Long Kau Hui, Tung Chung',
      'utc' => '+08:00',
    ),
    356 => 
    array (
      'label' => 'Asia/Irkutsk (GMT+08:00)',
      'tzCode' => 'Asia/Irkutsk',
      'name' => '(GMT+08:00) Irkutsk, Ulan-Ude, Bratsk, Angarsk, Ust’-Ilimsk',
      'utc' => '+08:00',
    ),
    357 => 
    array (
      'label' => 'Asia/Kuala_Lumpur (GMT+08:00)',
      'tzCode' => 'Asia/Kuala_Lumpur',
      'name' => '(GMT+08:00) Kota Bharu, Kuala Lumpur, Klang, Kampung Baru Subang, Johor Bahru',
      'utc' => '+08:00',
    ),
    358 => 
    array (
      'label' => 'Asia/Kuching (GMT+08:00)',
      'tzCode' => 'Asia/Kuching',
      'name' => '(GMT+08:00) Kuching, Kota Kinabalu, Sandakan, Tawau, Miri',
      'utc' => '+08:00',
    ),
    359 => 
    array (
      'label' => 'Asia/Macau (GMT+08:00)',
      'tzCode' => 'Asia/Macau',
      'name' => '(GMT+08:00) Macau',
      'utc' => '+08:00',
    ),
    360 => 
    array (
      'label' => 'Asia/Makassar (GMT+08:00)',
      'tzCode' => 'Asia/Makassar',
      'name' => '(GMT+08:00) Makassar, Denpasar, City of Balikpapan, Banjarmasin, Manado',
      'utc' => '+08:00',
    ),
    361 => 
    array (
      'label' => 'Asia/Manila (GMT+08:00)',
      'tzCode' => 'Asia/Manila',
      'name' => '(GMT+08:00) Quezon City, Manila, Caloocan City, Budta, Davao',
      'utc' => '+08:00',
    ),
    362 => 
    array (
      'label' => 'Asia/Shanghai (GMT+08:00)',
      'tzCode' => 'Asia/Shanghai',
      'name' => '(GMT+08:00) Shanghai, Beijing, Tianjin, Guangzhou, Shenzhen',
      'utc' => '+08:00',
    ),
    363 => 
    array (
      'label' => 'Asia/Singapore (GMT+08:00)',
      'tzCode' => 'Asia/Singapore',
      'name' => '(GMT+08:00) Singapore, Woodlands',
      'utc' => '+08:00',
    ),
    364 => 
    array (
      'label' => 'Asia/Taipei (GMT+08:00)',
      'tzCode' => 'Asia/Taipei',
      'name' => '(GMT+08:00) Taipei, Kaohsiung, Taichung, Tainan, Banqiao',
      'utc' => '+08:00',
    ),
    365 => 
    array (
      'label' => 'Asia/Ulaanbaatar (GMT+08:00)',
      'tzCode' => 'Asia/Ulaanbaatar',
      'name' => '(GMT+08:00) Ulan Bator, Erdenet, Darhan, Hovd, Mörön',
      'utc' => '+08:00',
    ),
    366 => 
    array (
      'label' => 'Australia/Perth (GMT+08:00)',
      'tzCode' => 'Australia/Perth',
      'name' => '(GMT+08:00) Perth, Rockingham, Mandurah, Bunbury, Albany',
      'utc' => '+08:00',
    ),
    367 => 
    array (
      'label' => 'Australia/Eucla (GMT+08:45)',
      'tzCode' => 'Australia/Eucla',
      'name' => '(GMT+08:45) Eucla',
      'utc' => '+08:45',
    ),
    368 => 
    array (
      'label' => 'Asia/Chita (GMT+09:00)',
      'tzCode' => 'Asia/Chita',
      'name' => '(GMT+09:00) Chita, Krasnokamensk, Borzya, Petrovsk-Zabaykal’skiy, Aginskoye',
      'utc' => '+09:00',
    ),
    369 => 
    array (
      'label' => 'Asia/Dili (GMT+09:00)',
      'tzCode' => 'Asia/Dili',
      'name' => '(GMT+09:00) Dili, Maliana, Suai, Likisá, Aileu',
      'utc' => '+09:00',
    ),
    370 => 
    array (
      'label' => 'Asia/Jayapura (GMT+09:00)',
      'tzCode' => 'Asia/Jayapura',
      'name' => '(GMT+09:00) Ambon, Jayapura, Sorong, Ternate, Abepura',
      'utc' => '+09:00',
    ),
    371 => 
    array (
      'label' => 'Asia/Khandyga (GMT+09:00)',
      'tzCode' => 'Asia/Khandyga',
      'name' => '(GMT+09:00) Khandyga',
      'utc' => '+09:00',
    ),
    372 => 
    array (
      'label' => 'Asia/Pyongyang (GMT+09:00)',
      'tzCode' => 'Asia/Pyongyang',
      'name' => '(GMT+09:00) Pyongyang, Hamhŭng, Namp’o, Sunch’ŏn, Hŭngnam',
      'utc' => '+09:00',
    ),
    373 => 
    array (
      'label' => 'Asia/Seoul (GMT+09:00)',
      'tzCode' => 'Asia/Seoul',
      'name' => '(GMT+09:00) Seoul, Busan, Incheon, Daegu, Daejeon',
      'utc' => '+09:00',
    ),
    374 => 
    array (
      'label' => 'Asia/Tokyo (GMT+09:00)',
      'tzCode' => 'Asia/Tokyo',
      'name' => '(GMT+09:00) Tokyo, Yokohama, Osaka, Nagoya, Sapporo',
      'utc' => '+09:00',
    ),
    375 => 
    array (
      'label' => 'Asia/Yakutsk (GMT+09:00)',
      'tzCode' => 'Asia/Yakutsk',
      'name' => '(GMT+09:00) Yakutsk, Blagoveshchensk, Belogorsk, Neryungri, Svobodnyy',
      'utc' => '+09:00',
    ),
    376 => 
    array (
      'label' => 'Pacific/Palau (GMT+09:00)',
      'tzCode' => 'Pacific/Palau',
      'name' => '(GMT+09:00) Koror, Koror Town, Kloulklubed, Ulimang, Mengellang',
      'utc' => '+09:00',
    ),
    377 => 
    array (
      'label' => 'Australia/Adelaide (GMT+09:30)',
      'tzCode' => 'Australia/Adelaide',
      'name' => '(GMT+09:30) Adelaide, Adelaide Hills, Mount Gambier, Morphett Vale, Gawler',
      'utc' => '+09:30',
    ),
    378 => 
    array (
      'label' => 'Australia/Broken_Hill (GMT+09:30)',
      'tzCode' => 'Australia/Broken_Hill',
      'name' => '(GMT+09:30) Broken Hill',
      'utc' => '+09:30',
    ),
    379 => 
    array (
      'label' => 'Australia/Darwin (GMT+09:30)',
      'tzCode' => 'Australia/Darwin',
      'name' => '(GMT+09:30) Darwin, Alice Springs, Palmerston, Howard Springs',
      'utc' => '+09:30',
    ),
    380 => 
    array (
      'label' => 'Antarctica/DumontDUrville (GMT+10:00)',
      'tzCode' => 'Antarctica/DumontDUrville',
      'name' => '(GMT+10:00) DumontDUrville',
      'utc' => '+10:00',
    ),
    381 => 
    array (
      'label' => 'Antarctica/Macquarie (GMT+10:00)',
      'tzCode' => 'Antarctica/Macquarie',
      'name' => '(GMT+10:00) Macquarie',
      'utc' => '+10:00',
    ),
    382 => 
    array (
      'label' => 'Asia/Ust-Nera (GMT+10:00)',
      'tzCode' => 'Asia/Ust-Nera',
      'name' => '(GMT+10:00) Ust-Nera',
      'utc' => '+10:00',
    ),
    383 => 
    array (
      'label' => 'Asia/Vladivostok (GMT+10:00)',
      'tzCode' => 'Asia/Vladivostok',
      'name' => '(GMT+10:00) Vladivostok, Khabarovsk, Khabarovsk Vtoroy, Komsomolsk-on-Amur, Ussuriysk',
      'utc' => '+10:00',
    ),
    384 => 
    array (
      'label' => 'Australia/Brisbane (GMT+10:00)',
      'tzCode' => 'Australia/Brisbane',
      'name' => '(GMT+10:00) Brisbane, Gold Coast, Logan City, Townsville, Cairns',
      'utc' => '+10:00',
    ),
    385 => 
    array (
      'label' => 'Australia/Currie (GMT+10:00)',
      'tzCode' => 'Australia/Currie',
      'name' => '(GMT+10:00) Currie',
      'utc' => '+10:00',
    ),
    386 => 
    array (
      'label' => 'Australia/Hobart (GMT+10:00)',
      'tzCode' => 'Australia/Hobart',
      'name' => '(GMT+10:00) Hobart, Launceston, Burnie, Devonport, Sandy Bay',
      'utc' => '+10:00',
    ),
    387 => 
    array (
      'label' => 'Australia/Lindeman (GMT+10:00)',
      'tzCode' => 'Australia/Lindeman',
      'name' => '(GMT+10:00) Lindeman',
      'utc' => '+10:00',
    ),
    388 => 
    array (
      'label' => 'Australia/Melbourne (GMT+10:00)',
      'tzCode' => 'Australia/Melbourne',
      'name' => '(GMT+10:00) Melbourne, Geelong, Bendigo, Ballarat, Melbourne City Centre',
      'utc' => '+10:00',
    ),
    389 => 
    array (
      'label' => 'Australia/Sydney (GMT+10:00)',
      'tzCode' => 'Australia/Sydney',
      'name' => '(GMT+10:00) Sydney, Canberra, Newcastle, Wollongong, Maitland',
      'utc' => '+10:00',
    ),
    390 => 
    array (
      'label' => 'Pacific/Chuuk (GMT+10:00)',
      'tzCode' => 'Pacific/Chuuk',
      'name' => '(GMT+10:00) Weno, Colonia',
      'utc' => '+10:00',
    ),
    391 => 
    array (
      'label' => 'Pacific/GuamVillage (GMT+10:00)',
      'tzCode' => 'Pacific/GuamVillage',
      'name' => '(GMT+10:00) Dededo Village, Yigo Village, Tamuning, Tamuning-Tumon-Harmon Village, Mangilao Village',
      'utc' => '+10:00',
    ),
    392 => 
    array (
      'label' => 'Pacific/Port_Moresby (GMT+10:00)',
      'tzCode' => 'Pacific/Port_Moresby',
      'name' => '(GMT+10:00) Port Moresby, Lae, Mount Hagen, Popondetta, Madang',
      'utc' => '+10:00',
    ),
    393 => 
    array (
      'label' => 'Pacific/Saipan (GMT+10:00)',
      'tzCode' => 'Pacific/Saipan',
      'name' => '(GMT+10:00) Saipan, San Jose Village',
      'utc' => '+10:00',
    ),
    394 => 
    array (
      'label' => 'Australia/Lord_Howe (GMT+10:30)',
      'tzCode' => 'Australia/Lord_Howe',
      'name' => '(GMT+10:30) Lord Howe',
      'utc' => '+10:30',
    ),
    395 => 
    array (
      'label' => 'Antarctica/Casey (GMT+11:00)',
      'tzCode' => 'Antarctica/Casey',
      'name' => '(GMT+11:00) Casey',
      'utc' => '+11:00',
    ),
    396 => 
    array (
      'label' => 'Asia/Magadan (GMT+11:00)',
      'tzCode' => 'Asia/Magadan',
      'name' => '(GMT+11:00) Magadan, Ust-Nera, Susuman, Ola',
      'utc' => '+11:00',
    ),
    397 => 
    array (
      'label' => 'Asia/Sakhalin (GMT+11:00)',
      'tzCode' => 'Asia/Sakhalin',
      'name' => '(GMT+11:00) Yuzhno-Sakhalinsk, Korsakov, Kholmsk, Okha, Nevel’sk',
      'utc' => '+11:00',
    ),
    398 => 
    array (
      'label' => 'Asia/Srednekolymsk (GMT+11:00)',
      'tzCode' => 'Asia/Srednekolymsk',
      'name' => '(GMT+11:00) Srednekolymsk',
      'utc' => '+11:00',
    ),
    399 => 
    array (
      'label' => 'Pacific/Bougainville (GMT+11:00)',
      'tzCode' => 'Pacific/Bougainville',
      'name' => '(GMT+11:00) Arawa, Buka',
      'utc' => '+11:00',
    ),
    400 => 
    array (
      'label' => 'Pacific/Efate (GMT+11:00)',
      'tzCode' => 'Pacific/Efate',
      'name' => '(GMT+11:00) Port-Vila, Luganville, Isangel, Sola, Lakatoro',
      'utc' => '+11:00',
    ),
    401 => 
    array (
      'label' => 'Pacific/Guadalcanal (GMT+11:00)',
      'tzCode' => 'Pacific/Guadalcanal',
      'name' => '(GMT+11:00) Honiara, Malango, Auki, Gizo, Buala',
      'utc' => '+11:00',
    ),
    402 => 
    array (
      'label' => 'Pacific/Kosrae (GMT+11:00)',
      'tzCode' => 'Pacific/Kosrae',
      'name' => '(GMT+11:00) Tofol',
      'utc' => '+11:00',
    ),
    403 => 
    array (
      'label' => 'Pacific/Norfolk (GMT+11:00)',
      'tzCode' => 'Pacific/Norfolk',
      'name' => '(GMT+11:00) Kingston',
      'utc' => '+11:00',
    ),
    404 => 
    array (
      'label' => 'Pacific/Noumea (GMT+11:00)',
      'tzCode' => 'Pacific/Noumea',
      'name' => '(GMT+11:00) Nouméa, Mont-Dore, Dumbéa, Païta, Wé',
      'utc' => '+11:00',
    ),
    405 => 
    array (
      'label' => 'Pacific/Pohnpei (GMT+11:00)',
      'tzCode' => 'Pacific/Pohnpei',
      'name' => '(GMT+11:00) Kolonia, Kolonia Town, Palikir - National Government Center',
      'utc' => '+11:00',
    ),
    406 => 
    array (
      'label' => 'Antarctica/McMurdo (GMT+12:00)',
      'tzCode' => 'Antarctica/McMurdo',
      'name' => '(GMT+12:00) McMurdo',
      'utc' => '+12:00',
    ),
    407 => 
    array (
      'label' => 'Asia/Anadyr (GMT+12:00)',
      'tzCode' => 'Asia/Anadyr',
      'name' => '(GMT+12:00) Anadyr, Bilibino',
      'utc' => '+12:00',
    ),
    408 => 
    array (
      'label' => 'Asia/Kamchatka (GMT+12:00)',
      'tzCode' => 'Asia/Kamchatka',
      'name' => '(GMT+12:00) Petropavlovsk-Kamchatsky, Yelizovo, Vilyuchinsk, Klyuchi, Mil’kovo',
      'utc' => '+12:00',
    ),
    409 => 
    array (
      'label' => 'Pacific/Auckland (GMT+12:00)',
      'tzCode' => 'Pacific/Auckland',
      'name' => '(GMT+12:00) Auckland, Wellington, Christchurch, Manukau City, North Shore',
      'utc' => '+12:00',
    ),
    410 => 
    array (
      'label' => 'Pacific/Fiji (GMT+12:00)',
      'tzCode' => 'Pacific/Fiji',
      'name' => '(GMT+12:00) Suva, Lautoka, Nadi, Labasa, Ba',
      'utc' => '+12:00',
    ),
    411 => 
    array (
      'label' => 'Pacific/Funafuti (GMT+12:00)',
      'tzCode' => 'Pacific/Funafuti',
      'name' => '(GMT+12:00) Funafuti, Savave Village, Tanrake Village, Toga Village, Asau Village',
      'utc' => '+12:00',
    ),
    412 => 
    array (
      'label' => 'Pacific/Kwajalein (GMT+12:00)',
      'tzCode' => 'Pacific/Kwajalein',
      'name' => '(GMT+12:00) Ebaye, Jabat',
      'utc' => '+12:00',
    ),
    413 => 
    array (
      'label' => 'Pacific/Majuro (GMT+12:00)',
      'tzCode' => 'Pacific/Majuro',
      'name' => '(GMT+12:00) Majuro, Arno, Jabor, Wotje, Mili',
      'utc' => '+12:00',
    ),
    414 => 
    array (
      'label' => 'Pacific/Nauru (GMT+12:00)',
      'tzCode' => 'Pacific/Nauru',
      'name' => '(GMT+12:00) Yaren, Baiti, Anabar, Uaboe, Ijuw',
      'utc' => '+12:00',
    ),
    415 => 
    array (
      'label' => 'Pacific/Tarawa (GMT+12:00)',
      'tzCode' => 'Pacific/Tarawa',
      'name' => '(GMT+12:00) Tarawa, Betio Village, Bikenibeu Village',
      'utc' => '+12:00',
    ),
    416 => 
    array (
      'label' => 'Pacific/Wake (GMT+12:00)',
      'tzCode' => 'Pacific/Wake',
      'name' => '(GMT+12:00) Wake',
      'utc' => '+12:00',
    ),
    417 => 
    array (
      'label' => 'Pacific/Wallis (GMT+12:00)',
      'tzCode' => 'Pacific/Wallis',
      'name' => '(GMT+12:00) Mata-Utu, Leava, Alo',
      'utc' => '+12:00',
    ),
    418 => 
    array (
      'label' => 'Pacific/Chatham (GMT+12:45)',
      'tzCode' => 'Pacific/Chatham',
      'name' => '(GMT+12:45) Waitangi',
      'utc' => '+12:45',
    ),
    419 => 
    array (
      'label' => 'Pacific/Apia (GMT+13:00)',
      'tzCode' => 'Pacific/Apia',
      'name' => '(GMT+13:00) Apia, Asau, Mulifanua, Afega, Leulumoega',
      'utc' => '+13:00',
    ),
    420 => 
    array (
      'label' => 'Pacific/Enderbury (GMT+13:00)',
      'tzCode' => 'Pacific/Enderbury',
      'name' => '(GMT+13:00) Enderbury',
      'utc' => '+13:00',
    ),
    421 => 
    array (
      'label' => 'Pacific/Fakaofo (GMT+13:00)',
      'tzCode' => 'Pacific/Fakaofo',
      'name' => '(GMT+13:00) Atafu Village, Nukunonu, Fale old settlement',
      'utc' => '+13:00',
    ),
    422 => 
    array (
      'label' => 'Pacific/Tongatapu (GMT+13:00)',
      'tzCode' => 'Pacific/Tongatapu',
      'name' => '(GMT+13:00) Nuku‘alofa, Lapaha, Neiafu, Pangai, ‘Ohonua',
      'utc' => '+13:00',
    ),
    423 => 
    array (
      'label' => 'Pacific/Kiritimati (GMT+14:00)',
      'tzCode' => 'Pacific/Kiritimati',
      'name' => '(GMT+14:00) Kiritimati',
      'utc' => '+14:00',
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'C:\\artisan\\riverr\\resources\\views',
    ),
    'compiled' => 'C:\\artisan\\riverr\\storage\\framework\\views',
  ),
  'vnpay' => 
  array (
    'tmn_code' => '',
    'hash_secret' => '',
    'environment' => 'development',
    'api_url' => 'https://sandbox.vnpayment.vn/paymentv2/vpcpay.html',
  ),
  'wireui' => 
  array (
    'icons' => 
    array (
      'style' => 'outline',
    ),
    'modal' => 
    array (
      'zIndex' => 'z-50',
      'maxWidth' => '2xl',
      'spacing' => 'p-4',
      'align' => 'start',
      'blur' => false,
    ),
    'card' => 
    array (
      'padding' => 'px-2 py-5 md:px-4',
      'shadow' => 'shadow-md',
      'rounded' => 'rounded-lg',
      'color' => 'bg-white dark:bg-secondary-800',
    ),
    'components' => 
    array (
      'avatar' => 
      array (
        'class' => 'WireUi\\View\\Components\\Avatar',
        'alias' => 'avatar',
      ),
      'icon' => 
      array (
        'class' => 'WireUi\\View\\Components\\Icon',
        'alias' => 'icon',
      ),
      'icon.spinner' => 
      array (
        'class' => 'WireUi\\View\\Components\\Icons\\Spinner',
        'alias' => 'icon.spinner',
      ),
      'color-picker' => 
      array (
        'class' => 'WireUi\\View\\Components\\ColorPicker',
        'alias' => 'color-picker',
      ),
      'input' => 
      array (
        'class' => 'WireUi\\View\\Components\\Input',
        'alias' => 'input',
      ),
      'textarea' => 
      array (
        'class' => 'WireUi\\View\\Components\\Textarea',
        'alias' => 'textarea',
      ),
      'label' => 
      array (
        'class' => 'WireUi\\View\\Components\\Label',
        'alias' => 'label',
      ),
      'error' => 
      array (
        'class' => 'WireUi\\View\\Components\\Error',
        'alias' => 'error',
      ),
      'errors' => 
      array (
        'class' => 'WireUi\\View\\Components\\Errors',
        'alias' => 'errors',
      ),
      'inputs.maskable' => 
      array (
        'class' => 'WireUi\\View\\Components\\Inputs\\MaskableInput',
        'alias' => 'inputs.maskable',
      ),
      'inputs.phone' => 
      array (
        'class' => 'WireUi\\View\\Components\\Inputs\\PhoneInput',
        'alias' => 'inputs.phone',
      ),
      'inputs.currency' => 
      array (
        'class' => 'WireUi\\View\\Components\\Inputs\\CurrencyInput',
        'alias' => 'inputs.currency',
      ),
      'inputs.number' => 
      array (
        'class' => 'WireUi\\View\\Components\\Inputs\\NumberInput',
        'alias' => 'inputs.number',
      ),
      'inputs.password' => 
      array (
        'class' => 'WireUi\\View\\Components\\Inputs\\PasswordInput',
        'alias' => 'inputs.password',
      ),
      'badge' => 
      array (
        'class' => 'WireUi\\View\\Components\\Badge',
        'alias' => 'badge',
      ),
      'badge.circle' => 
      array (
        'class' => 'WireUi\\View\\Components\\CircleBadge',
        'alias' => 'badge.circle',
      ),
      'button' => 
      array (
        'class' => 'WireUi\\View\\Components\\Button',
        'alias' => 'button',
      ),
      'button.circle' => 
      array (
        'class' => 'WireUi\\View\\Components\\CircleButton',
        'alias' => 'button.circle',
      ),
      'dropdown' => 
      array (
        'class' => 'WireUi\\View\\Components\\Dropdown',
        'alias' => 'dropdown',
      ),
      'dropdown.item' => 
      array (
        'class' => 'WireUi\\View\\Components\\Dropdown\\DropdownItem',
        'alias' => 'dropdown.item',
      ),
      'dropdown.header' => 
      array (
        'class' => 'WireUi\\View\\Components\\Dropdown\\DropdownHeader',
        'alias' => 'dropdown.header',
      ),
      'notifications' => 
      array (
        'class' => 'WireUi\\View\\Components\\Notifications',
        'alias' => 'notifications',
      ),
      'datetime-picker' => 
      array (
        'class' => 'WireUi\\View\\Components\\DatetimePicker',
        'alias' => 'datetime-picker',
      ),
      'time-picker' => 
      array (
        'class' => 'WireUi\\View\\Components\\TimePicker',
        'alias' => 'time-picker',
      ),
      'card' => 
      array (
        'class' => 'WireUi\\View\\Components\\Card',
        'alias' => 'card',
      ),
      'native-select' => 
      array (
        'class' => 'WireUi\\View\\Components\\NativeSelect',
        'alias' => 'native-select',
      ),
      'select' => 
      array (
        'class' => 'WireUi\\View\\Components\\Select',
        'alias' => 'select',
      ),
      'select.option' => 
      array (
        'class' => 'WireUi\\View\\Components\\Select\\Option',
        'alias' => 'select.option',
      ),
      'select.user-option' => 
      array (
        'class' => 'WireUi\\View\\Components\\Select\\UserOption',
        'alias' => 'select.user-option',
      ),
      'toggle' => 
      array (
        'class' => 'WireUi\\View\\Components\\Toggle',
        'alias' => 'toggle',
      ),
      'checkbox' => 
      array (
        'class' => 'WireUi\\View\\Components\\Checkbox',
        'alias' => 'checkbox',
      ),
      'radio' => 
      array (
        'class' => 'WireUi\\View\\Components\\Radio',
        'alias' => 'radio',
      ),
      'modal' => 
      array (
        'class' => 'WireUi\\View\\Components\\Modal',
        'alias' => 'modal',
      ),
      'modal.card' => 
      array (
        'class' => 'WireUi\\View\\Components\\ModalCard',
        'alias' => 'modal.card',
      ),
      'dialog' => 
      array (
        'class' => 'WireUi\\View\\Components\\Dialog',
        'alias' => 'dialog',
      ),
    ),
  ),
  'xendit' => 
  array (
    'public_key' => '',
    'secret_key' => '',
  ),
  'youcanpay' => 
  array (
    'public_key' => '',
    'private_key' => '',
  ),
  'blade-icons' => 
  array (
    'sets' => 
    array (
    ),
    'class' => '',
    'attributes' => 
    array (
    ),
    'fallback' => '',
    'components' => 
    array (
      'disabled' => false,
      'default' => 'icon',
    ),
  ),
  'httpauth' => 
  array (
    'type' => 'basic',
    'realm' => 'Secured',
    'username' => 'admin',
    'password' => '1234',
  ),
  'clockwork' => 
  array (
    'enable' => NULL,
    'features' => 
    array (
      'cache' => 
      array (
        'enabled' => true,
        'collect_queries' => true,
        'collect_values' => false,
      ),
      'database' => 
      array (
        'enabled' => true,
        'collect_queries' => true,
        'collect_models_actions' => true,
        'collect_models_retrieved' => false,
        'slow_threshold' => NULL,
        'slow_only' => false,
        'detect_duplicate_queries' => false,
      ),
      'events' => 
      array (
        'enabled' => true,
        'ignored_events' => 
        array (
        ),
      ),
      'log' => 
      array (
        'enabled' => true,
      ),
      'notifications' => 
      array (
        'enabled' => true,
      ),
      'performance' => 
      array (
        'client_metrics' => true,
      ),
      'queue' => 
      array (
        'enabled' => true,
      ),
      'redis' => 
      array (
        'enabled' => true,
      ),
      'routes' => 
      array (
        'enabled' => false,
        'only_namespaces' => 
        array (
          0 => 'App',
        ),
      ),
      'views' => 
      array (
        'enabled' => true,
        'collect_data' => false,
        'use_twig_profiler' => false,
      ),
    ),
    'web' => true,
    'toolbar' => true,
    'requests' => 
    array (
      'on_demand' => false,
      'errors_only' => false,
      'slow_threshold' => NULL,
      'slow_only' => false,
      'sample' => false,
      'except' => 
      array (
        0 => '/horizon/.*',
        1 => '/telescope/.*',
        2 => '/_debugbar/.*',
      ),
      'only' => 
      array (
      ),
      'except_preflight' => true,
    ),
    'artisan' => 
    array (
      'collect' => false,
      'except' => 
      array (
      ),
      'only' => 
      array (
      ),
      'collect_output' => false,
      'except_laravel_commands' => true,
    ),
    'queue' => 
    array (
      'collect' => false,
      'except' => 
      array (
      ),
      'only' => 
      array (
      ),
    ),
    'tests' => 
    array (
      'collect' => false,
      'except' => 
      array (
      ),
    ),
    'collect_data_always' => false,
    'storage' => 'files',
    'storage_files_path' => 'C:\\artisan\\riverr\\storage\\clockwork',
    'storage_files_compress' => false,
    'storage_sql_database' => 'C:\\artisan\\riverr\\storage\\clockwork.sqlite',
    'storage_sql_table' => 'clockwork',
    'storage_expiration' => 10080,
    'authentication' => false,
    'authentication_password' => 'VerySecretPassword',
    'stack_traces' => 
    array (
      'enabled' => true,
      'limit' => 10,
      'skip_vendors' => 
      array (
      ),
      'skip_namespaces' => 
      array (
      ),
      'skip_classes' => 
      array (
      ),
    ),
    'serialization_depth' => 10,
    'serialization_blackbox' => 
    array (
      0 => 'Illuminate\\Container\\Container',
      1 => 'Illuminate\\Foundation\\Application',
      2 => 'Laravel\\Lumen\\Application',
    ),
    'register_helpers' => true,
    'headers' => 
    array (
    ),
    'server_timing' => 10,
  ),
  'iseed::config' => 
  array (
    'path' => '/database/seeders',
    'chunk_size' => 500,
  ),
  'livewire-urls' => 
  array (
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'auto',
    'enable_share_button' => true,
    'register_commands' => false,
    'solution_providers' => 
    array (
      0 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\BadMethodCallSolutionProvider',
      1 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\MergeConflictSolutionProvider',
      2 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\UndefinedPropertySolutionProvider',
      3 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\IncorrectValetDbCredentialsSolutionProvider',
      4 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingAppKeySolutionProvider',
      5 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\DefaultDbNameSolutionProvider',
      6 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\TableNotFoundSolutionProvider',
      7 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingImportSolutionProvider',
      8 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\InvalidRouteActionSolutionProvider',
      9 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\ViewNotFoundSolutionProvider',
      10 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\RunningLaravelDuskInProductionProvider',
      11 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingColumnSolutionProvider',
      12 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownValidationSolutionProvider',
      13 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingMixManifestSolutionProvider',
      14 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingViteManifestSolutionProvider',
      15 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingLivewireComponentSolutionProvider',
      16 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UndefinedViewVariableSolutionProvider',
      17 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\GenericLaravelExceptionSolutionProvider',
    ),
    'ignored_solution_providers' => 
    array (
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => 'C:\\artisan\\riverr',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
    'settings_file_path' => '',
    'recorders' => 
    array (
      0 => 'Spatie\\LaravelIgnition\\Recorders\\DumpRecorder\\DumpRecorder',
      1 => 'Spatie\\LaravelIgnition\\Recorders\\JobRecorder\\JobRecorder',
      2 => 'Spatie\\LaravelIgnition\\Recorders\\LogRecorder\\LogRecorder',
      3 => 'Spatie\\LaravelIgnition\\Recorders\\QueryRecorder\\QueryRecorder',
    ),
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
