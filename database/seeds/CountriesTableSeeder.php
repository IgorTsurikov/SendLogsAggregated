<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = array(
            array('cnt_code' => 'US', 'cnt_title' => 'United States'),
            array('cnt_code' => 'CA', 'cnt_title' => 'Canada'),
            array('cnt_code' => 'AF', 'cnt_title' => 'Afghanistan'),
            array('cnt_code' => 'AL', 'cnt_title' => 'Albania'),
            array('cnt_code' => 'DZ', 'cnt_title' => 'Algeria'),
            array('cnt_code' => 'AS', 'cnt_title' => 'American Samoa'),
            array('cnt_code' => 'AD', 'cnt_title' => 'Andorra'),
            array('cnt_code' => 'AO', 'cnt_title' => 'Angola'),
            array('cnt_code' => 'AI', 'cnt_title' => 'Anguilla'),
            array('cnt_code' => 'AQ', 'cnt_title' => 'Antarctica'),
            array('cnt_code' => 'AG', 'cnt_title' => 'Antigua and/or Barbuda'),
            array('cnt_code' => 'AR', 'cnt_title' => 'Argentina'),
            array('cnt_code' => 'AM', 'cnt_title' => 'Armenia'),
            array('cnt_code' => 'AW', 'cnt_title' => 'Aruba'),
            array('cnt_code' => 'AU', 'cnt_title' => 'Australia'),
            array('cnt_code' => 'AT', 'cnt_title' => 'Austria'),
            array('cnt_code' => 'AZ', 'cnt_title' => 'Azerbaijan'),
            array('cnt_code' => 'BS', 'cnt_title' => 'Bahamas'),
            array('cnt_code' => 'BH', 'cnt_title' => 'Bahrain'),
            array('cnt_code' => 'BD', 'cnt_title' => 'Bangladesh'),
            array('cnt_code' => 'BB', 'cnt_title' => 'Barbados'),
            array('cnt_code' => 'BY', 'cnt_title' => 'Belarus'),
            array('cnt_code' => 'BE', 'cnt_title' => 'Belgium'),
            array('cnt_code' => 'BZ', 'cnt_title' => 'Belize'),
            array('cnt_code' => 'BJ', 'cnt_title' => 'Benin'),
            array('cnt_code' => 'BM', 'cnt_title' => 'Bermuda'),
            array('cnt_code' => 'BT', 'cnt_title' => 'Bhutan'),
            array('cnt_code' => 'BO', 'cnt_title' => 'Bolivia'),
            array('cnt_code' => 'BA', 'cnt_title' => 'Bosnia and Herzegovina'),
            array('cnt_code' => 'BW', 'cnt_title' => 'Botswana'),
            array('cnt_code' => 'BV', 'cnt_title' => 'Bouvet Island'),
            array('cnt_code' => 'BR', 'cnt_title' => 'Brazil'),
            array('cnt_code' => 'IO', 'cnt_title' => 'British lndian Ocean Territory'),
            array('cnt_code' => 'BN', 'cnt_title' => 'Brunei Darussalam'),
            array('cnt_code' => 'BG', 'cnt_title' => 'Bulgaria'),
            array('cnt_code' => 'BF', 'cnt_title' => 'Burkina Faso'),
            array('cnt_code' => 'BI', 'cnt_title' => 'Burundi'),
            array('cnt_code' => 'KH', 'cnt_title' => 'Cambodia'),
            array('cnt_code' => 'CM', 'cnt_title' => 'Cameroon'),
            array('cnt_code' => 'CV', 'cnt_title' => 'Cape Verde'),
            array('cnt_code' => 'KY', 'cnt_title' => 'Cayman Islands'),
            array('cnt_code' => 'CF', 'cnt_title' => 'Central African Republic'),
            array('cnt_code' => 'TD', 'cnt_title' => 'Chad'),
            array('cnt_code' => 'CL', 'cnt_title' => 'Chile'),
            array('cnt_code' => 'CN', 'cnt_title' => 'China'),
            array('cnt_code' => 'CX', 'cnt_title' => 'Christmas Island'),
            array('cnt_code' => 'CC', 'cnt_title' => 'Cocos (Keeling) Islands'),
            array('cnt_code' => 'CO', 'cnt_title' => 'Colombia'),
            array('cnt_code' => 'KM', 'cnt_title' => 'Comoros'),
            array('cnt_code' => 'CG', 'cnt_title' => 'Congo'),
            array('cnt_code' => 'CK', 'cnt_title' => 'Cook Islands'),
            array('cnt_code' => 'CR', 'cnt_title' => 'Costa Rica'),
            array('cnt_code' => 'HR', 'cnt_title' => 'Croatia (Hrvatska)'),
            array('cnt_code' => 'CU', 'cnt_title' => 'Cuba'),
            array('cnt_code' => 'CY', 'cnt_title' => 'Cyprus'),
            array('cnt_code' => 'CZ', 'cnt_title' => 'Czech Republic'),
            array('cnt_code' => 'CD', 'cnt_title' => 'Democratic Republic of Congo'),
            array('cnt_code' => 'DK', 'cnt_title' => 'Denmark'),
            array('cnt_code' => 'DJ', 'cnt_title' => 'Djibouti'),
            array('cnt_code' => 'DM', 'cnt_title' => 'Dominica'),
            array('cnt_code' => 'DO', 'cnt_title' => 'Dominican Republic'),
            array('cnt_code' => 'TP', 'cnt_title' => 'East Timor'),
            array('cnt_code' => 'EC', 'cnt_title' => 'Ecudaor'),
            array('cnt_code' => 'EG', 'cnt_title' => 'Egypt'),
            array('cnt_code' => 'SV', 'cnt_title' => 'El Salvador'),
            array('cnt_code' => 'GQ', 'cnt_title' => 'Equatorial Guinea'),
            array('cnt_code' => 'ER', 'cnt_title' => 'Eritrea'),
            array('cnt_code' => 'EE', 'cnt_title' => 'Estonia'),
            array('cnt_code' => 'ET', 'cnt_title' => 'Ethiopia'),
            array('cnt_code' => 'FK', 'cnt_title' => 'Falkland Islands (Malvinas)'),
            array('cnt_code' => 'FO', 'cnt_title' => 'Faroe Islands'),
            array('cnt_code' => 'FJ', 'cnt_title' => 'Fiji'),
            array('cnt_code' => 'FI', 'cnt_title' => 'Finland'),
            array('cnt_code' => 'FR', 'cnt_title' => 'France'),
            array('cnt_code' => 'FX', 'cnt_title' => 'France, Metropolitan'),
            array('cnt_code' => 'GF', 'cnt_title' => 'French Guiana'),
            array('cnt_code' => 'PF', 'cnt_title' => 'French Polynesia'),
            array('cnt_code' => 'TF', 'cnt_title' => 'French Southern Territories'),
            array('cnt_code' => 'GA', 'cnt_title' => 'Gabon'),
            array('cnt_code' => 'GM', 'cnt_title' => 'Gambia'),
            array('cnt_code' => 'GE', 'cnt_title' => 'Georgia'),
            array('cnt_code' => 'DE', 'cnt_title' => 'Germany'),
            array('cnt_code' => 'GH', 'cnt_title' => 'Ghana'),
            array('cnt_code' => 'GI', 'cnt_title' => 'Gibraltar'),
            array('cnt_code' => 'GR', 'cnt_title' => 'Greece'),
            array('cnt_code' => 'GL', 'cnt_title' => 'Greenland'),
            array('cnt_code' => 'GD', 'cnt_title' => 'Grenada'),
            array('cnt_code' => 'GP', 'cnt_title' => 'Guadeloupe'),
            array('cnt_code' => 'GU', 'cnt_title' => 'Guam'),
            array('cnt_code' => 'GT', 'cnt_title' => 'Guatemala'),
            array('cnt_code' => 'GN', 'cnt_title' => 'Guinea'),
            array('cnt_code' => 'GW', 'cnt_title' => 'Guinea-Bissau'),
            array('cnt_code' => 'GY', 'cnt_title' => 'Guyana'),
            array('cnt_code' => 'HT', 'cnt_title' => 'Haiti'),
            array('cnt_code' => 'HM', 'cnt_title' => 'Heard and Mc Donald Islands'),
            array('cnt_code' => 'HN', 'cnt_title' => 'Honduras'),
            array('cnt_code' => 'HK', 'cnt_title' => 'Hong Kong'),
            array('cnt_code' => 'HU', 'cnt_title' => 'Hungary'),
            array('cnt_code' => 'IS', 'cnt_title' => 'Iceland'),
            array('cnt_code' => 'IN', 'cnt_title' => 'India'),
            array('cnt_code' => 'ID', 'cnt_title' => 'Indonesia'),
            array('cnt_code' => 'IR', 'cnt_title' => 'Iran (Islamic Republic of)'),
            array('cnt_code' => 'IQ', 'cnt_title' => 'Iraq'),
            array('cnt_code' => 'IE', 'cnt_title' => 'Ireland'),
            array('cnt_code' => 'IL', 'cnt_title' => 'Israel'),
            array('cnt_code' => 'IT', 'cnt_title' => 'Italy'),
            array('cnt_code' => 'CI', 'cnt_title' => 'Ivory Coast'),
            array('cnt_code' => 'JM', 'cnt_title' => 'Jamaica'),
            array('cnt_code' => 'JP', 'cnt_title' => 'Japan'),
            array('cnt_code' => 'JO', 'cnt_title' => 'Jordan'),
            array('cnt_code' => 'KZ', 'cnt_title' => 'Kazakhstan'),
            array('cnt_code' => 'KE', 'cnt_title' => 'Kenya'),
            array('cnt_code' => 'KI', 'cnt_title' => 'Kiribati'),
            array('cnt_code' => 'KP', 'cnt_title' => 'Korea, Democratic People\'s Republic of'),
            array('cnt_code' => 'KR', 'cnt_title' => 'Korea, Republic of'),
            array('cnt_code' => 'KW', 'cnt_title' => 'Kuwait'),
            array('cnt_code' => 'KG', 'cnt_title' => 'Kyrgyzstan'),
            array('cnt_code' => 'LA', 'cnt_title' => 'Lao People\'s Democratic Republic'),
            array('cnt_code' => 'LV', 'cnt_title' => 'Latvia'),
            array('cnt_code' => 'LB', 'cnt_title' => 'Lebanon'),
            array('cnt_code' => 'LS', 'cnt_title' => 'Lesotho'),
            array('cnt_code' => 'LR', 'cnt_title' => 'Liberia'),
            array('cnt_code' => 'LY', 'cnt_title' => 'Libyan Arab Jamahiriya'),
            array('cnt_code' => 'LI', 'cnt_title' => 'Liechtenstein'),
            array('cnt_code' => 'LT', 'cnt_title' => 'Lithuania'),
            array('cnt_code' => 'LU', 'cnt_title' => 'Luxembourg'),
            array('cnt_code' => 'MO', 'cnt_title' => 'Macau'),
            array('cnt_code' => 'MK', 'cnt_title' => 'Macedonia'),
            array('cnt_code' => 'MG', 'cnt_title' => 'Madagascar'),
            array('cnt_code' => 'MW', 'cnt_title' => 'Malawi'),
            array('cnt_code' => 'MY', 'cnt_title' => 'Malaysia'),
            array('cnt_code' => 'MV', 'cnt_title' => 'Maldives'),
            array('cnt_code' => 'ML', 'cnt_title' => 'Mali'),
            array('cnt_code' => 'MT', 'cnt_title' => 'Malta'),
            array('cnt_code' => 'MH', 'cnt_title' => 'Marshall Islands'),
            array('cnt_code' => 'MQ', 'cnt_title' => 'Martinique'),
            array('cnt_code' => 'MR', 'cnt_title' => 'Mauritania'),
            array('cnt_code' => 'MU', 'cnt_title' => 'Mauritius'),
            array('cnt_code' => 'TY', 'cnt_title' => 'Mayotte'),
            array('cnt_code' => 'MX', 'cnt_title' => 'Mexico'),
            array('cnt_code' => 'FM', 'cnt_title' => 'Micronesia, Federated States of'),
            array('cnt_code' => 'MD', 'cnt_title' => 'Moldova, Republic of'),
            array('cnt_code' => 'MC', 'cnt_title' => 'Monaco'),
            array('cnt_code' => 'MN', 'cnt_title' => 'Mongolia'),
            array('cnt_code' => 'MS', 'cnt_title' => 'Montserrat'),
            array('cnt_code' => 'MA', 'cnt_title' => 'Morocco'),
            array('cnt_code' => 'MZ', 'cnt_title' => 'Mozambique'),
            array('cnt_code' => 'MM', 'cnt_title' => 'Myanmar'),
            array('cnt_code' => 'NA', 'cnt_title' => 'Namibia'),
            array('cnt_code' => 'NR', 'cnt_title' => 'Nauru'),
            array('cnt_code' => 'NP', 'cnt_title' => 'Nepal'),
            array('cnt_code' => 'NL', 'cnt_title' => 'Netherlands'),
            array('cnt_code' => 'AN', 'cnt_title' => 'Netherlands Antilles'),
            array('cnt_code' => 'NC', 'cnt_title' => 'New Caledonia'),
            array('cnt_code' => 'NZ', 'cnt_title' => 'New Zealand'),
            array('cnt_code' => 'NI', 'cnt_title' => 'Nicaragua'),
            array('cnt_code' => 'NE', 'cnt_title' => 'Niger'),
            array('cnt_code' => 'NG', 'cnt_title' => 'Nigeria'),
            array('cnt_code' => 'NU', 'cnt_title' => 'Niue'),
            array('cnt_code' => 'NF', 'cnt_title' => 'Norfork Island'),
            array('cnt_code' => 'MP', 'cnt_title' => 'Northern Mariana Islands'),
            array('cnt_code' => 'NO', 'cnt_title' => 'Norway'),
            array('cnt_code' => 'OM', 'cnt_title' => 'Oman'),
            array('cnt_code' => 'PK', 'cnt_title' => 'Pakistan'),
            array('cnt_code' => 'PW', 'cnt_title' => 'Palau'),
            array('cnt_code' => 'PA', 'cnt_title' => 'Panama'),
            array('cnt_code' => 'PG', 'cnt_title' => 'Papua New Guinea'),
            array('cnt_code' => 'PY', 'cnt_title' => 'Paraguay'),
            array('cnt_code' => 'PE', 'cnt_title' => 'Peru'),
            array('cnt_code' => 'PH', 'cnt_title' => 'Philippines'),
            array('cnt_code' => 'PN', 'cnt_title' => 'Pitcairn'),
            array('cnt_code' => 'PL', 'cnt_title' => 'Poland'),
            array('cnt_code' => 'PT', 'cnt_title' => 'Portugal'),
            array('cnt_code' => 'PR', 'cnt_title' => 'Puerto Rico'),
            array('cnt_code' => 'QA', 'cnt_title' => 'Qatar'),
            array('cnt_code' => 'SS', 'cnt_title' => 'Republic of South Sudan'),
            array('cnt_code' => 'RE', 'cnt_title' => 'Reunion'),
            array('cnt_code' => 'RO', 'cnt_title' => 'Romania'),
            array('cnt_code' => 'RU', 'cnt_title' => 'Russian Federation'),
            array('cnt_code' => 'RW', 'cnt_title' => 'Rwanda'),
            array('cnt_code' => 'KN', 'cnt_title' => 'Saint Kitts and Nevis'),
            array('cnt_code' => 'LC', 'cnt_title' => 'Saint Lucia'),
            array('cnt_code' => 'VC', 'cnt_title' => 'Saint Vincent and the Grenadines'),
            array('cnt_code' => 'WS', 'cnt_title' => 'Samoa'),
            array('cnt_code' => 'SM', 'cnt_title' => 'San Marino'),
            array('cnt_code' => 'ST', 'cnt_title' => 'Sao Tome and Principe'),
            array('cnt_code' => 'SA', 'cnt_title' => 'Saudi Arabia'),
            array('cnt_code' => 'SN', 'cnt_title' => 'Senegal'),
            array('cnt_code' => 'RS', 'cnt_title' => 'Serbia'),
            array('cnt_code' => 'SC', 'cnt_title' => 'Seychelles'),
            array('cnt_code' => 'SL', 'cnt_title' => 'Sierra Leone'),
            array('cnt_code' => 'SG', 'cnt_title' => 'Singapore'),
            array('cnt_code' => 'SK', 'cnt_title' => 'Slovakia'),
            array('cnt_code' => 'SI', 'cnt_title' => 'Slovenia'),
            array('cnt_code' => 'SB', 'cnt_title' => 'Solomon Islands'),
            array('cnt_code' => 'SO', 'cnt_title' => 'Somalia'),
            array('cnt_code' => 'ZA', 'cnt_title' => 'South Africa'),
            array('cnt_code' => 'GS', 'cnt_title' => 'South Georgia South Sandwich Islands'),
            array('cnt_code' => 'ES', 'cnt_title' => 'Spain'),
            array('cnt_code' => 'LK', 'cnt_title' => 'Sri Lanka'),
            array('cnt_code' => 'SH', 'cnt_title' => 'St. Helena'),
            array('cnt_code' => 'PM', 'cnt_title' => 'St. Pierre and Miquelon'),
            array('cnt_code' => 'SD', 'cnt_title' => 'Sudan'),
            array('cnt_code' => 'SR', 'cnt_title' => 'Suricnt_title'),
            array('cnt_code' => 'SJ', 'cnt_title' => 'Svalbarn and Jan Mayen Islands'),
            array('cnt_code' => 'SZ', 'cnt_title' => 'Swaziland'),
            array('cnt_code' => 'SE', 'cnt_title' => 'Sweden'),
            array('cnt_code' => 'CH', 'cnt_title' => 'Switzerland'),
            array('cnt_code' => 'SY', 'cnt_title' => 'Syrian Arab Republic'),
            array('cnt_code' => 'TW', 'cnt_title' => 'Taiwan'),
            array('cnt_code' => 'TJ', 'cnt_title' => 'Tajikistan'),
            array('cnt_code' => 'TZ', 'cnt_title' => 'Tanzania, United Republic of'),
            array('cnt_code' => 'TH', 'cnt_title' => 'Thailand'),
            array('cnt_code' => 'TG', 'cnt_title' => 'Togo'),
            array('cnt_code' => 'TK', 'cnt_title' => 'Tokelau'),
            array('cnt_code' => 'TO', 'cnt_title' => 'Tonga'),
            array('cnt_code' => 'TT', 'cnt_title' => 'Trinidad and Tobago'),
            array('cnt_code' => 'TN', 'cnt_title' => 'Tunisia'),
            array('cnt_code' => 'TR', 'cnt_title' => 'Turkey'),
            array('cnt_code' => 'TM', 'cnt_title' => 'Turkmenistan'),
            array('cnt_code' => 'TC', 'cnt_title' => 'Turks and Caicos Islands'),
            array('cnt_code' => 'TV', 'cnt_title' => 'Tuvalu'),
            array('cnt_code' => 'UG', 'cnt_title' => 'Uganda'),
            array('cnt_code' => 'UA', 'cnt_title' => 'Ukraine'),
            array('cnt_code' => 'AE', 'cnt_title' => 'United Arab Emirates'),
            array('cnt_code' => 'GB', 'cnt_title' => 'United Kingdom'),
            array('cnt_code' => 'UM', 'cnt_title' => 'United States minor outlying islands'),
            array('cnt_code' => 'UY', 'cnt_title' => 'Uruguay'),
            array('cnt_code' => 'UZ', 'cnt_title' => 'Uzbekistan'),
            array('cnt_code' => 'VU', 'cnt_title' => 'Vanuatu'),
            array('cnt_code' => 'VA', 'cnt_title' => 'Vatican City State'),
            array('cnt_code' => 'VE', 'cnt_title' => 'Venezuela'),
            array('cnt_code' => 'VN', 'cnt_title' => 'Vietnam'),
            array('cnt_code' => 'VG', 'cnt_title' => 'Virgin Islands (British)'),
            array('cnt_code' => 'VI', 'cnt_title' => 'Virgin Islands (U.S.)'),
            array('cnt_code' => 'WF', 'cnt_title' => 'Wallis and Futuna Islands'),
            array('cnt_code' => 'EH', 'cnt_title' => 'Western Sahara'),
            array('cnt_code' => 'YE', 'cnt_title' => 'Yemen'),
            array('cnt_code' => 'YU', 'cnt_title' => 'Yugoslavia'),
            array('cnt_code' => 'ZR', 'cnt_title' => 'Zaire'),
            array('cnt_code' => 'ZM', 'cnt_title' => 'Zambia'),
            array('cnt_code' => 'ZW', 'cnt_title' => 'Zimbabwe'),
        );

        DB::table('countries')->insert($countries);
    }
}