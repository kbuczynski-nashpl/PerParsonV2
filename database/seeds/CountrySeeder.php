<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['name' => 'Afghanistan', 'short_name' => 'AF'],
            ['name' => 'Åland Islands', 'short_name' => 'AX'],
            ['name' => 'Albania', 'short_name' => 'AL'],
            ['name' => 'Algeria', 'short_name' => 'DZ'],
            ['name' => 'American Samoa', 'short_name' => 'AS'],
            ['name' => 'Andorra', 'short_name' => 'AD'],
            ['name' => 'Angola', 'short_name' => 'AO'],
            ['name' => 'Anguilla', 'short_name' => 'AI'],
            ['name' => 'Antarctica', 'short_name' => 'AQ'],
            ['name' => 'Antigua and Barbuda', 'short_name' => 'AG'],
            ['name' => 'Argentina', 'short_name' => 'AR'],
            ['name' => 'Armenia', 'short_name' => 'AM'],
            ['name' => 'Aruba', 'short_name' => 'AW'],
            ['name' => 'Australia', 'short_name' => 'AU'],
            ['name' => 'Austria', 'short_name' => 'AT'],
            ['name' => 'Azerbaijan', 'short_name' => 'AZ'],
            ['name' => 'Bahamas', 'short_name' => 'BS'],
            ['name' => 'Bahrain', 'short_name' => 'BH'],
            ['name' => 'Bangladesh', 'short_name' => 'BD'],
            ['name' => 'Barbados', 'short_name' => 'BB'],
            ['name' => 'Belarus', 'short_name' => 'BY'],
            ['name' => 'Belgium', 'short_name' => 'BE'],
            ['name' => 'Belize', 'short_name' => 'BZ'],
            ['name' => 'Benin', 'short_name' => 'BJ'],
            ['name' => 'Bermuda', 'short_name' => 'BM'],
            ['name' => 'Bhutan', 'short_name' => 'BT'],
            ['name' => 'Bolivia, Plurinational State of', 'short_name' => 'BO'],
            ['name' => 'Bonaire, Sint Eustatius and Saba', 'short_name' => 'BQ'],
            ['name' => 'Bosnia and Herzegovina', 'short_name' => 'BA'],
            ['name' => 'Botswana', 'short_name' => 'BW'],
            ['name' => 'Bouvet Island', 'short_name' => 'BV'],
            ['name' => 'Brazil', 'short_name' => 'BR'],
            ['name' => 'British Indian Ocean Territory', 'short_name' => 'IO'],
            ['name' => 'Brunei Darussalam', 'short_name' => 'BN'],
            ['name' => 'Bulgaria', 'short_name' => 'BG'],
            ['name' => 'Burkina Faso', 'short_name' => 'BF'],
            ['name' => 'Burundi', 'short_name' => 'BI'],
            ['name' => 'Cambodia', 'short_name' => 'KH'],
            ['name' => 'Cameroon', 'short_name' => 'CM'],
            ['name' => 'Canada', 'short_name' => 'CA'],
            ['name' => 'Cape Verde', 'short_name' => 'CV'],
            ['name' => 'Cayman Islands', 'short_name' => 'KY'],
            ['name' => 'Central African Republic', 'short_name' => 'CF'],
            ['name' => 'Chad', 'short_name' => 'TD'],
            ['name' => 'Chile', 'short_name' => 'CL'],
            ['name' => 'China', 'short_name' => 'CN'],
            ['name' => 'Christmas Island', 'short_name' => 'CX'],
            ['name' => 'Cocos (Keeling) Islands', 'short_name' => 'CC'],
            ['name' => 'Colombia', 'short_name' => 'CO'],
            ['name' => 'Comoros', 'short_name' => 'KM'],
            ['name' => 'Congo', 'short_name' => 'CG'],
            ['name' => 'Congo, the Democratic Republic of the', 'short_name' => 'CD'],
            ['name' => 'Cook Islands', 'short_name' => 'CK'],
            ['name' => 'Costa Rica', 'short_name' => 'CR'],
            ['name' => 'Côte d\'Ivoire', 'short_name' => 'CI'],
            ['name' => 'Croatia', 'short_name' => 'HR'],
            ['name' => 'Cuba', 'short_name' => 'CU'],
            ['name' => 'Curaçao', 'short_name' => 'CW'],
            ['name' => 'Cyprus', 'short_name' => 'CY'],
            ['name' => 'Czech Republic', 'short_name' => 'CZ'],
            ['name' => 'Denmark', 'short_name' => 'DK'],
            ['name' => 'Djibouti', 'short_name' => 'DJ'],
            ['name' => 'Dominica', 'short_name' => 'DM'],
            ['name' => 'Dominican Republic', 'short_name' => 'DO'],
            ['name' => 'Ecuador', 'short_name' => 'EC'],
            ['name' => 'Egypt', 'short_name' => 'EG'],
            ['name' => 'El Salvador', 'short_name' => 'SV'],
            ['name' => 'Equatorial Guinea', 'short_name' => 'GQ'],
            ['name' => 'Eritrea', 'short_name' => 'ER'],
            ['name' => 'Estonia', 'short_name' => 'EE'],
            ['name' => 'Ethiopia', 'short_name' => 'ET'],
            ['name' => 'Falkland Islands (Malvinas)', 'short_name' => 'FK'],
            ['name' => 'Faroe Islands', 'short_name' => 'FO'],
            ['name' => 'Fiji', 'short_name' => 'FJ'],
            ['name' => 'Finland', 'short_name' => 'FI'],
            ['name' => 'France', 'short_name' => 'FR'],
            ['name' => 'French Guiana', 'short_name' => 'GF'],
            ['name' => 'French Polynesia', 'short_name' => 'PF'],
            ['name' => 'French Southern Territories', 'short_name' => 'TF'],
            ['name' => 'Gabon', 'short_name' => 'GA'],
            ['name' => 'Gambia', 'short_name' => 'GM'],
            ['name' => 'Georgia', 'short_name' => 'GE'],
            ['name' => 'Germany', 'short_name' => 'DE'],
            ['name' => 'Ghana', 'short_name' => 'GH'],
            ['name' => 'Gibraltar', 'short_name' => 'GI'],
            ['name' => 'Greece', 'short_name' => 'GR'],
            ['name' => 'Greenland', 'short_name' => 'GL'],
            ['name' => 'Grenada', 'short_name' => 'GD'],
            ['name' => 'Guadeloupe', 'short_name' => 'GP'],
            ['name' => 'Guam', 'short_name' => 'GU'],
            ['name' => 'Guatemala', 'short_name' => 'GT'],
            ['name' => 'Guernsey', 'short_name' => 'GG'],
            ['name' => 'Guinea', 'short_name' => 'GN'],
            ['name' => 'Guinea-Bissau', 'short_name' => 'GW'],
            ['name' => 'Guyana', 'short_name' => 'GY'],
            ['name' => 'Haiti', 'short_name' => 'HT'],
            ['name' => 'Heard Island and McDonald Mcdonald Islands', 'short_name' => 'HM'],
            ['name' => 'Holy See (Vatican City State)', 'short_name' => 'VA'],
            ['name' => 'Honduras', 'short_name' => 'HN'],
            ['name' => 'Hong Kong', 'short_name' => 'HK'],
            ['name' => 'Hungary', 'short_name' => 'HU'],
            ['name' => 'Iceland', 'short_name' => 'IS'],
            ['name' => 'India', 'short_name' => 'IN'],
            ['name' => 'Indonesia', 'short_name' => 'ID'],
            ['name' => 'Iran, Islamic Republic of', 'short_name' => 'IR'],
            ['name' => 'Iraq', 'short_name' => 'IQ'],
            ['name' => 'Ireland', 'short_name' => 'IE'],
            ['name' => 'Isle of Man', 'short_name' => 'IM'],
            ['name' => 'Israel', 'short_name' => 'IL'],
            ['name' => 'Italy', 'short_name' => 'IT'],
            ['name' => 'Jamaica', 'short_name' => 'JM'],
            ['name' => 'Japan', 'short_name' => 'JP'],
            ['name' => 'Jersey', 'short_name' => 'JE'],
            ['name' => 'Jordan', 'short_name' => 'JO'],
            ['name' => 'Kazakhstan', 'short_name' => 'KZ'],
            ['name' => 'Kenya', 'short_name' => 'KE'],
            ['name' => 'Kiribati', 'short_name' => 'KI'],
            ['name' => 'Korea, Democratic People\'s Republic of', 'short_name' => 'KP'],
            ['name' => 'Korea, Republic of', 'short_name' => 'KR'],
            ['name' => 'Kuwait', 'short_name' => 'KW'],
            ['name' => 'Kyrgyzstan', 'short_name' => 'KG'],
            ['name' => 'Lao People\'s Democratic Republic', 'short_name' => 'LA'],
            ['name' => 'Latvia', 'short_name' => 'LV'],
            ['name' => 'Lebanon', 'short_name' => 'LB'],
            ['name' => 'Lesotho', 'short_name' => 'LS'],
            ['name' => 'Liberia', 'short_name' => 'LR'],
            ['name' => 'Libya', 'short_name' => 'LY'],
            ['name' => 'Liechtenstein', 'short_name' => 'LI'],
            ['name' => 'Lithuania', 'short_name' => 'LT'],
            ['name' => 'Luxembourg', 'short_name' => 'LU'],
            ['name' => 'Macao', 'short_name' => 'MO'],
            ['name' => 'Macedonia, the Former Yugoslav Republic of', 'short_name' => 'MK'],
            ['name' => 'Madagascar', 'short_name' => 'MG'],
            ['name' => 'Malawi', 'short_name' => 'MW'],
            ['name' => 'Malaysia', 'short_name' => 'MY'],
            ['name' => 'Maldives', 'short_name' => 'MV'],
            ['name' => 'Mali', 'short_name' => 'ML'],
            ['name' => 'Malta', 'short_name' => 'MT'],
            ['name' => 'Marshall Islands', 'short_name' => 'MH'],
            ['name' => 'Martinique', 'short_name' => 'MQ'],
            ['name' => 'Mauritania', 'short_name' => 'MR'],
            ['name' => 'Mauritius', 'short_name' => 'MU'],
            ['name' => 'Mayotte', 'short_name' => 'YT'],
            ['name' => 'Mexico', 'short_name' => 'MX'],
            ['name' => 'Micronesia, Federated States of', 'short_name' => 'FM'],
            ['name' => 'Moldova, Republic of', 'short_name' => 'MD'],
            ['name' => 'Monaco', 'short_name' => 'MC'],
            ['name' => 'Mongolia', 'short_name' => 'MN'],
            ['name' => 'Montenegro', 'short_name' => 'ME'],
            ['name' => 'Montserrat', 'short_name' => 'MS'],
            ['name' => 'Morocco', 'short_name' => 'MA'],
            ['name' => 'Mozambique', 'short_name' => 'MZ'],
            ['name' => 'Myanmar', 'short_name' => 'MM'],
            ['name' => 'Namibia', 'short_name' => 'NA'],
            ['name' => 'Nauru', 'short_name' => 'NR'],
            ['name' => 'Nepal', 'short_name' => 'NP'],
            ['name' => 'Netherlands', 'short_name' => 'NL'],
            ['name' => 'New Caledonia', 'short_name' => 'NC'],
            ['name' => 'New Zealand', 'short_name' => 'NZ'],
            ['name' => 'Nicaragua', 'short_name' => 'NI'],
            ['name' => 'Niger', 'short_name' => 'NE'],
            ['name' => 'Nigeria', 'short_name' => 'NG'],
            ['name' => 'Niue', 'short_name' => 'NU'],
            ['name' => 'Norfolk Island', 'short_name' => 'NF'],
            ['name' => 'Northern Mariana Islands', 'short_name' => 'MP'],
            ['name' => 'Norway', 'short_name' => 'NO'],
            ['name' => 'Oman', 'short_name' => 'OM'],
            ['name' => 'Pakistan', 'short_name' => 'PK'],
            ['name' => 'Palau', 'short_name' => 'PW'],
            ['name' => 'Palestine, State of', 'short_name' => 'PS'],
            ['name' => 'Panama', 'short_name' => 'PA'],
            ['name' => 'Papua New Guinea', 'short_name' => 'PG'],
            ['name' => 'Paraguay', 'short_name' => 'PY'],
            ['name' => 'Peru', 'short_name' => 'PE'],
            ['name' => 'Philippines', 'short_name' => 'PH'],
            ['name' => 'Pitcairn', 'short_name' => 'PN'],
            ['name' => 'Poland', 'short_name' => 'PL'],
            ['name' => 'Portugal', 'short_name' => 'PT'],
            ['name' => 'Puerto Rico', 'short_name' => 'PR'],
            ['name' => 'Qatar', 'short_name' => 'QA'],
            ['name' => 'Réunion', 'short_name' => 'RE'],
            ['name' => 'Romania', 'short_name' => 'RO'],
            ['name' => 'Russian Federation', 'short_name' => 'RU'],
            ['name' => 'Rwanda', 'short_name' => 'RW'],
            ['name' => 'Saint Barthélemy', 'short_name' => 'BL'],
            ['name' => 'Saint Helena, Ascension and Tristan da Cunha', 'short_name' => 'SH'],
            ['name' => 'Saint Kitts and Nevis', 'short_name' => 'KN'],
            ['name' => 'Saint Lucia', 'short_name' => 'LC'],
            ['name' => 'Saint Martin (French part)', 'short_name' => 'MF'],
            ['name' => 'Saint Pierre and Miquelon', 'short_name' => 'PM'],
            ['name' => 'Saint Vincent and the Grenadines', 'short_name' => 'VC'],
            ['name' => 'Samoa', 'short_name' => 'WS'],
            ['name' => 'San Marino', 'short_name' => 'SM'],
            ['name' => 'Sao Tome and Principe', 'short_name' => 'ST'],
            ['name' => 'Saudi Arabia', 'short_name' => 'SA'],
            ['name' => 'Senegal', 'short_name' => 'SN'],
            ['name' => 'Serbia', 'short_name' => 'RS'],
            ['name' => 'Seychelles', 'short_name' => 'SC'],
            ['name' => 'Sierra Leone', 'short_name' => 'SL'],
            ['name' => 'Singapore', 'short_name' => 'SG'],
            ['name' => 'Sint Maarten (Dutch part)', 'short_name' => 'SX'],
            ['name' => 'Slovakia', 'short_name' => 'SK'],
            ['name' => 'Slovenia', 'short_name' => 'SI'],
            ['name' => 'Solomon Islands', 'short_name' => 'SB'],
            ['name' => 'Somalia', 'short_name' => 'SO'],
            ['name' => 'South Africa', 'short_name' => 'ZA'],
            ['name' => 'South Georgia and the South Sandwich Islands', 'short_name' => 'GS'],
            ['name' => 'South Sudan', 'short_name' => 'SS'],
            ['name' => 'Spain', 'short_name' => 'ES'],
            ['name' => 'Sri Lanka', 'short_name' => 'LK'],
            ['name' => 'Sudan', 'short_name' => 'SD'],
            ['name' => 'Suriname', 'short_name' => 'SR'],
            ['name' => 'Svalbard and Jan Mayen', 'short_name' => 'SJ'],
            ['name' => 'Swaziland', 'short_name' => 'SZ'],
            ['name' => 'Sweden', 'short_name' => 'SE'],
            ['name' => 'Switzerland', 'short_name' => 'CH'],
            ['name' => 'Syrian Arab Republic', 'short_name' => 'SY'],
            ['name' => 'Taiwan', 'short_name' => 'TW'],
            ['name' => 'Tajikistan', 'short_name' => 'TJ'],
            ['name' => 'Tanzania, United Republic of', 'short_name' => 'TZ'],
            ['name' => 'Thailand', 'short_name' => 'TH'],
            ['name' => 'Timor-Leste', 'short_name' => 'TL'],
            ['name' => 'Togo', 'short_name' => 'TG'],
            ['name' => 'Tokelau', 'short_name' => 'TK'],
            ['name' => 'Tonga', 'short_name' => 'TO'],
            ['name' => 'Trinidad and Tobago', 'short_name' => 'TT'],
            ['name' => 'Tunisia', 'short_name' => 'TN'],
            ['name' => 'Turkey', 'short_name' => 'TR'],
            ['name' => 'Turkmenistan', 'short_name' => 'TM'],
            ['name' => 'Turks and Caicos Islands', 'short_name' => 'TC'],
            ['name' => 'Tuvalu', 'short_name' => 'TV'],
            ['name' => 'Uganda', 'short_name' => 'UG'],
            ['name' => 'Ukraine', 'short_name' => 'UA'],
            ['name' => 'United Arab Emirates', 'short_name' => 'AE'],
            ['name' => 'United Kingdom', 'short_name' => 'GB'],
            ['name' => 'United States', 'short_name' => 'US'],
            ['name' => 'United States Minor Outlying Islands', 'short_name' => 'UM'],
            ['name' => 'Uruguay', 'short_name' => 'UY'],
            ['name' => 'Uzbekistan', 'short_name' => 'UZ'],
            ['name' => 'Vanuatu', 'short_name' => 'VU'],
            ['name' => 'Venezuela, Bolivarian Republic of', 'short_name' => 'VE'],
            ['name' => 'Viet Nam', 'short_name' => 'VN'],
            ['name' => 'Virgin Islands, British', 'short_name' => 'VG'],
            ['name' => 'Virgin Islands, U.S.', 'short_name' => 'VI'],
            ['name' => 'Wallis and Futuna', 'short_name' => 'WF'],
            ['name' => 'Western Sahara', 'short_name' => 'EH'],
            ['name' => 'Yemen', 'short_name' => 'YE'],
            ['name' => 'Zambia', 'short_name' => 'ZM'],
            ['name' => 'Zimbabwe', 'short_name' => 'ZW'],
        ];

        foreach ($countries as $country) {
            Country::factory()->create([
                'name'       => $country['name'],
                'short_name' => $country['short_name'],
            ]);
        }
    }
}
