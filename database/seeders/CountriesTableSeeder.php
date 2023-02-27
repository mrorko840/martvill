<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'United States',
                'code' => 'US',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Canada',
                'code' => 'CA',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Afghanistan',
                'code' => 'AF',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Albania',
                'code' => 'AL',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Algeria',
                'code' => 'DZ',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'American Samoa',
                'code' => 'AS',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Andorra',
                'code' => 'AD',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Angola',
                'code' => 'AO',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Anguilla',
                'code' => 'AI',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Antarctica',
                'code' => 'AQ',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Antigua and/or Barbuda',
                'code' => 'AG',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Argentina',
                'code' => 'AR',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Armenia',
                'code' => 'AM',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Aruba',
                'code' => 'AW',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Australia',
                'code' => 'AU',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Austria',
                'code' => 'AT',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Azerbaijan',
                'code' => 'AZ',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Bahamas',
                'code' => 'BS',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Bahrain',
                'code' => 'BH',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Bangladesh',
                'code' => 'BD',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Barbados',
                'code' => 'BB',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Belarus',
                'code' => 'BY',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Belgium',
                'code' => 'BE',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Belize',
                'code' => 'BZ',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Benin',
                'code' => 'BJ',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Bermuda',
                'code' => 'BM',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Bhutan',
                'code' => 'BT',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Bolivia',
                'code' => 'BO',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Bosnia and Herzegovina',
                'code' => 'BA',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Botswana',
                'code' => 'BW',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Bouvet Island',
                'code' => 'BV',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Brazil',
                'code' => 'BR',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'British lndian Ocean Territory',
                'code' => 'IO',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Brunei Darussalam',
                'code' => 'BN',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Bulgaria',
                'code' => 'BG',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Burkina Faso',
                'code' => 'BF',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Burundi',
                'code' => 'BI',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Cambodia',
                'code' => 'KH',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Cameroon',
                'code' => 'CM',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Cape Verde',
                'code' => 'CV',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Cayman Islands',
                'code' => 'KY',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Central African Republic',
                'code' => 'CF',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Chad',
                'code' => 'TD',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Chile',
                'code' => 'CL',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'China',
                'code' => 'CN',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Christmas Island',
                'code' => 'CX',
            ),
            46 => 
            array (
                'id' => 47,
            'name' => 'Cocos (Keeling) Islands',
                'code' => 'CC',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Colombia',
                'code' => 'CO',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Comoros',
                'code' => 'KM',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Congo',
                'code' => 'CG',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Cook Islands',
                'code' => 'CK',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Costa Rica',
                'code' => 'CR',
            ),
            52 => 
            array (
                'id' => 53,
            'name' => 'Croatia (Hrvatska)',
                'code' => 'HR',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Cuba',
                'code' => 'CU',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Cyprus',
                'code' => 'CY',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Czech Republic',
                'code' => 'CZ',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Democratic Republic of Congo',
                'code' => 'CD',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Denmark',
                'code' => 'DK',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Djibouti',
                'code' => 'DJ',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Dominica',
                'code' => 'DM',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Dominican Republic',
                'code' => 'DO',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'East Timor',
                'code' => 'TP',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Ecudaor',
                'code' => 'EC',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Egypt',
                'code' => 'EG',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'El Salvador',
                'code' => 'SV',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Equatorial Guinea',
                'code' => 'GQ',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Eritrea',
                'code' => 'ER',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Estonia',
                'code' => 'EE',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Ethiopia',
                'code' => 'ET',
            ),
            69 => 
            array (
                'id' => 70,
            'name' => 'Falkland Islands (Malvinas)',
                'code' => 'FK',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Faroe Islands',
                'code' => 'FO',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Fiji',
                'code' => 'FJ',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Finland',
                'code' => 'FI',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'France',
                'code' => 'FR',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'France, Metropolitan',
                'code' => 'FX',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'French Guiana',
                'code' => 'GF',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'French Polynesia',
                'code' => 'PF',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'French Southern Territories',
                'code' => 'TF',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Gabon',
                'code' => 'GA',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Gambia',
                'code' => 'GM',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Georgia',
                'code' => 'GE',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Germany',
                'code' => 'DE',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Ghana',
                'code' => 'GH',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Gibraltar',
                'code' => 'GI',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Greece',
                'code' => 'GR',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Greenland',
                'code' => 'GL',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Grenada',
                'code' => 'GD',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Guadeloupe',
                'code' => 'GP',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Guam',
                'code' => 'GU',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Guatemala',
                'code' => 'GT',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Guinea',
                'code' => 'GN',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Guinea-Bissau',
                'code' => 'GW',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Guyana',
                'code' => 'GY',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Haiti',
                'code' => 'HT',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Heard and Mc Donald Islands',
                'code' => 'HM',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Honduras',
                'code' => 'HN',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Hong Kong',
                'code' => 'HK',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Hungary',
                'code' => 'HU',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Iceland',
                'code' => 'IS',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'India',
                'code' => 'IN',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Indonesia',
                'code' => 'ID',
            ),
            101 => 
            array (
                'id' => 102,
            'name' => 'Iran (Islamic Republic of)',
                'code' => 'IR',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Iraq',
                'code' => 'IQ',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Ireland',
                'code' => 'IE',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Israel',
                'code' => 'IL',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Italy',
                'code' => 'IT',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Ivory Coast',
                'code' => 'CI',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Jamaica',
                'code' => 'JM',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Japan',
                'code' => 'JP',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Jordan',
                'code' => 'JO',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Kazakhstan',
                'code' => 'KZ',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Kenya',
                'code' => 'KE',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Kiribati',
                'code' => 'KI',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Korea, Democratic People\'s Republic of',
                'code' => 'KP',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Korea, Republic of',
                'code' => 'KR',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Kuwait',
                'code' => 'KW',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Kyrgyzstan',
                'code' => 'KG',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Lao People\'s Democratic Republic',
                'code' => 'LA',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Latvia',
                'code' => 'LV',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Lebanon',
                'code' => 'LB',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Lesotho',
                'code' => 'LS',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Liberia',
                'code' => 'LR',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Libyan Arab Jamahiriya',
                'code' => 'LY',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Liechtenstein',
                'code' => 'LI',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Lithuania',
                'code' => 'LT',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Luxembourg',
                'code' => 'LU',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Macau',
                'code' => 'MO',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Macedonia',
                'code' => 'MK',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Madagascar',
                'code' => 'MG',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Malawi',
                'code' => 'MW',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Malaysia',
                'code' => 'MY',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Maldives',
                'code' => 'MV',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Mali',
                'code' => 'ML',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Malta',
                'code' => 'MT',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Marshall Islands',
                'code' => 'MH',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Martinique',
                'code' => 'MQ',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Mauritania',
                'code' => 'MR',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Mauritius',
                'code' => 'MU',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Mayotte',
                'code' => 'TY',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Mexico',
                'code' => 'MX',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Micronesia, Federated States of',
                'code' => 'FM',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Moldova, Republic of',
                'code' => 'MD',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Monaco',
                'code' => 'MC',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Mongolia',
                'code' => 'MN',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Montserrat',
                'code' => 'MS',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Morocco',
                'code' => 'MA',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Mozambique',
                'code' => 'MZ',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Myanmar',
                'code' => 'MM',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Namibia',
                'code' => 'NA',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Nauru',
                'code' => 'NR',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Nepal',
                'code' => 'NP',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Netherlands',
                'code' => 'NL',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Netherlands Antilles',
                'code' => 'AN',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'New Caledonia',
                'code' => 'NC',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'New Zealand',
                'code' => 'NZ',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Nicaragua',
                'code' => 'NI',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Niger',
                'code' => 'NE',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Nigeria',
                'code' => 'NG',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Niue',
                'code' => 'NU',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Norfork Island',
                'code' => 'NF',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Northern Mariana Islands',
                'code' => 'MP',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Norway',
                'code' => 'NO',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Oman',
                'code' => 'OM',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Pakistan',
                'code' => 'PK',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Palau',
                'code' => 'PW',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'Panama',
                'code' => 'PA',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Papua New Guinea',
                'code' => 'PG',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Paraguay',
                'code' => 'PY',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Peru',
                'code' => 'PE',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Philippines',
                'code' => 'PH',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Pitcairn',
                'code' => 'PN',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Poland',
                'code' => 'PL',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Portugal',
                'code' => 'PT',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Puerto Rico',
                'code' => 'PR',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Qatar',
                'code' => 'QA',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Republic of South Sudan',
                'code' => 'SS',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Reunion',
                'code' => 'RE',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Romania',
                'code' => 'RO',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Russian Federation',
                'code' => 'RU',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Rwanda',
                'code' => 'RW',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Saint Kitts and Nevis',
                'code' => 'KN',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Saint Lucia',
                'code' => 'LC',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Saint Vincent and the Grenadines',
                'code' => 'VC',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Samoa',
                'code' => 'WS',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'San Marino',
                'code' => 'SM',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Sao Tome and Principe',
                'code' => 'ST',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'Saudi Arabia',
                'code' => 'SA',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Senegal',
                'code' => 'SN',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Serbia',
                'code' => 'RS',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'Seychelles',
                'code' => 'SC',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Sierra Leone',
                'code' => 'SL',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'Singapore',
                'code' => 'SG',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'Slovakia',
                'code' => 'SK',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'Slovenia',
                'code' => 'SI',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Solomon Islands',
                'code' => 'SB',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Somalia',
                'code' => 'SO',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'South Africa',
                'code' => 'ZA',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'South Georgia South Sandwich Islands',
                'code' => 'GS',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'Spain',
                'code' => 'ES',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'Sri Lanka',
                'code' => 'LK',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'St. Helena',
                'code' => 'SH',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'St. Pierre and Miquelon',
                'code' => 'PM',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Sudan',
                'code' => 'SD',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'Suriname',
                'code' => 'SR',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'Svalbarn and Jan Mayen Islands',
                'code' => 'SJ',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'Swaziland',
                'code' => 'SZ',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Sweden',
                'code' => 'SE',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'Switzerland',
                'code' => 'CH',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Syrian Arab Republic',
                'code' => 'SY',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'Taiwan',
                'code' => 'TW',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Tajikistan',
                'code' => 'TJ',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'Tanzania, United Republic of',
                'code' => 'TZ',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Thailand',
                'code' => 'TH',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'Togo',
                'code' => 'TG',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Tokelau',
                'code' => 'TK',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Tonga',
                'code' => 'TO',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'Trinidad and Tobago',
                'code' => 'TT',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'Tunisia',
                'code' => 'TN',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'Turkey',
                'code' => 'TR',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'Turkmenistan',
                'code' => 'TM',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'Turks and Caicos Islands',
                'code' => 'TC',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'Tuvalu',
                'code' => 'TV',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Uganda',
                'code' => 'UG',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'Ukraine',
                'code' => 'UA',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'United Arab Emirates',
                'code' => 'AE',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'United Kingdom',
                'code' => 'GB',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'United States minor outlying islands',
                'code' => 'UM',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'Uruguay',
                'code' => 'UY',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Uzbekistan',
                'code' => 'UZ',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Vanuatu',
                'code' => 'VU',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'Vatican City State',
                'code' => 'VA',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'Venezuela',
                'code' => 'VE',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'Vietnam',
                'code' => 'VN',
            ),
            233 => 
            array (
                'id' => 234,
            'name' => 'Virgin Islands (British)',
                'code' => 'VG',
            ),
            234 => 
            array (
                'id' => 235,
            'name' => 'Virgin Islands (U.S.)',
                'code' => 'VI',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'Wallis and Futuna Islands',
                'code' => 'WF',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'Western Sahara',
                'code' => 'EH',
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'Yemen',
                'code' => 'YE',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Yugoslavia',
                'code' => 'YU',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Zaire',
                'code' => 'ZR',
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Zambia',
                'code' => 'ZM',
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'Zimbabwe',
                'code' => 'ZW',
            ),
        ));
        
        
    }
}