<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            [
                'name' => [
                    'en' => 'Afghanistan',
                    'ar' => 'أفغانستان',
                ],
                'iso' => 'AF',
                'phone_code' => '+93',
            ],
            [
                'name' => [
                    'en' => 'Albania',
                    'ar' => 'ألبانيا',
                ],
                'iso' => 'AL',
                'phone_code' => '+355',
            ],
            [
                'name' => [
                    'en' => 'Algeria',
                    'ar' => 'الجزائر',
                ],
                'iso' => 'DZ',
                'phone_code' => '+213',
            ],
            [
                'name' => [
                    'en' => 'Andorra',
                    'ar' => 'أندورا',
                ],
                'iso' => 'AD',
                'phone_code' => '+376',
            ],
            [
                'name' => [
                    'en' => 'Angola',
                    'ar' => 'أنغولا',
                ],
                'iso' => 'AO',
                'phone_code' => '+244',
            ],
            [
                'name' => [
                    'en' => 'Antigua and Barbuda',
                    'ar' => 'أنتيغوا وبربودا',
                ],
                'iso' => 'AG',
                'phone_code' => '+1-268',
            ],
            [
                'name' => [
                    'en' => 'Argentina',
                    'ar' => 'الأرجنتين',
                ],
                'iso' => 'AR',
                'phone_code' => '+54',
            ],
            [
                'name' => [
                    'en' => 'Armenia',
                    'ar' => 'أرمينيا',
                ],
                'iso' => 'AM',
                'phone_code' => '+374',
            ],
            [
                'name' => [
                    'en' => 'Australia',
                    'ar' => 'أستراليا',
                ],
                'iso' => 'AU',
                'phone_code' => '+61',
            ],
            [
                'name' => [
                    'en' => 'Austria',
                    'ar' => 'النمسا',
                ],
                'iso' => 'AT',
                'phone_code' => '+43',
            ],
            [
                'name' => [
                    'en' => 'Azerbaijan',
                    'ar' => 'أذربيجان',
                ],
                'iso' => 'AZ',
                'phone_code' => '+994',
            ],
            [
                'name' => [
                    'en' => 'Bahamas',
                    'ar' => 'الباهاما',
                ],
                'iso' => 'BS',
                'phone_code' => '+1-242',
            ],
            [
                'name' => [
                    'en' => 'Bahrain',
                    'ar' => 'البحرين',
                ],
                'iso' => 'BH',
                'phone_code' => '+973',
            ],
            [
                'name' => [
                    'en' => 'Bangladesh',
                    'ar' => 'بنغلاديش',
                ],
                'iso' => 'BD',
                'phone_code' => '+880',
            ],
            [
                'name' => [
                    'en' => 'Barbados',
                    'ar' => 'بربادوس',
                ],
                'iso' => 'BB',
                'phone_code' => '+1-246',
            ],
            [
                'name' => [
                    'en' => 'Belarus',
                    'ar' => 'بيلاروسيا',
                ],
                'iso' => 'BY',
                'phone_code' => '+375',
            ],
            [
                'name' => [
                    'en' => 'Belgium',
                    'ar' => 'بلجيكا',
                ],
                'iso' => 'BE',
                'phone_code' => '+32',
            ],
            [
                'name' => [
                    'en' => 'Belize',
                    'ar' => 'بليز',
                ],
                'iso' => 'BZ',
                'phone_code' => '+501',
            ],
            [
                'name' => [
                    'en' => 'Benin',
                    'ar' => 'بنين',
                ],
                'iso' => 'BJ',
                'phone_code' => '+229',
            ],
            [
                'name' => [
                    'en' => 'Bhutan',
                    'ar' => 'بوتان',
                ],
                'iso' => 'BT',
                'phone_code' => '+975',
            ],
            [
                'name' => [
                    'en' => 'Bolivia',
                    'ar' => 'بوليفيا',
                ],
                'iso' => 'BO',
                'phone_code' => '+591',
            ],
            [
                'name' => [
                    'en' => 'Bosnia and Herzegovina',
                    'ar' => 'البوسنة والهرسك',
                ],
                'iso' => 'BA',
                'phone_code' => '+387',
            ],
            [
                'name' => [
                    'en' => 'Botswana',
                    'ar' => 'بوتسوانا',
                ],
                'iso' => 'BW',
                'phone_code' => '+267',
            ],
            [
                'name' => [
                    'en' => 'Brazil',
                    'ar' => 'البرازيل',
                ],
                'iso' => 'BR',
                'phone_code' => '+55',
            ],
            [
                'name' => [
                    'en' => 'Brunei',
                    'ar' => 'بروناي',
                ],
                'iso' => 'BN',
                'phone_code' => '+673',
            ],
            [
                'name' => [
                    'en' => 'Bulgaria',
                    'ar' => 'بلغاريا',
                ],
                'iso' => 'BG',
                'phone_code' => '+359',
            ],
            [
                'name' => [
                    'en' => 'Burkina Faso',
                    'ar' => 'بوركينا فاسو',
                ],
                'iso' => 'BF',
                'phone_code' => '+226',
            ],
            [
                'name' => [
                    'en' => 'Burundi',
                    'ar' => 'بوروندي',
                ],
                'iso' => 'BI',
                'phone_code' => '+257',
            ],
            [
                'name' => [
                    'en' => 'Cabo Verde',
                    'ar' => 'الرأس الأخضر',
                ],
                'iso' => 'CV',
                'phone_code' => '+238',
            ],
            [
                'name' => [
                    'en' => 'Cambodia',
                    'ar' => 'كمبوديا',
                ],
                'iso' => 'KH',
                'phone_code' => '+855',
            ],
            [
                'name' => [
                    'en' => 'Cameroon',
                    'ar' => 'الكاميرون',
                ],
                'iso' => 'CM',
                'phone_code' => '+237',
            ],
            [
                'name' => [
                    'en' => 'Canada',
                    'ar' => 'كندا',
                ],
                'iso' => 'CA',
                'phone_code' => '+1',
            ],
            [
                'name' => [
                    'en' => 'Central African Republic',
                    'ar' => 'جمهورية أفريقيا الوسطى',
                ],
                'iso' => 'CF',
                'phone_code' => '+236',
            ],
            [
                'name' => [
                    'en' => 'Chad',
                    'ar' => 'تشاد',
                ],
                'iso' => 'TD',
                'phone_code' => '+235',
            ],
            [
                'name' => [
                    'en' => 'Chile',
                    'ar' => 'تشيلي',
                ],
                'iso' => 'CL',
                'phone_code' => '+56',
            ],
            [
                'name' => [
                    'en' => 'China',
                    'ar' => 'الصين',
                ],
                'iso' => 'CN',
                'phone_code' => '+86',
            ],
            [
                'name' => [
                    'en' => 'Colombia',
                    'ar' => 'كولومبيا',
                ],
                'iso' => 'CO',
                'phone_code' => '+57',
            ],
            [
                'name' => [
                    'en' => 'Comoros',
                    'ar' => 'جزر القمر',
                ],
                'iso' => 'KM',
                'phone_code' => '+269',
            ],
            [
                'name' => [
                    'en' => 'Costa Rica',
                    'ar' => 'كوستاريكا',
                ],
                'iso' => 'CR',
                'phone_code' => '+506',
            ],
            [
                'name' => [
                    'en' => 'Croatia',
                    'ar' => 'كرواتيا',
                ],
                'iso' => 'HR',
                'phone_code' => '+385',
            ],
            [
                'name' => [
                    'en' => 'Cuba',
                    'ar' => 'كوبا',
                ],
                'iso' => 'CU',
                'phone_code' => '+53',
            ],
            [
                'name' => [
                    'en' => 'Cyprus',
                    'ar' => 'قبرص',
                ],
                'iso' => 'CY',
                'phone_code' => '+357',
            ],
            [
                'name' => [
                    'en' => 'Czechia',
                    'ar' => 'التشيك',
                ],
                'iso' => 'CZ',
                'phone_code' => '+420',
            ],
            [
                'name' => [
                    'en' => 'Denmark',
                    'ar' => 'الدنمارك',
                ],
                'iso' => 'DK',
                'phone_code' => '+45',
            ],
            [
                'name' => [
                    'en' => 'Djibouti',
                    'ar' => 'جيبوتي',
                ],
                'iso' => 'DJ',
                'phone_code' => '+253',
            ],
            [
                'name' => [
                    'en' => 'Dominica',
                    'ar' => 'دومينيكا',
                ],
                'iso' => 'DM',
                'phone_code' => '+1-767',
            ],
            [
                'name' => [
                    'en' => 'Dominican Republic',
                    'ar' => 'جمهورية الدومينيكان',
                ],
                'iso' => 'DO',
                'phone_code' => '+1-809',
            ],
            [
                'name' => [
                    'en' => 'Ecuador',
                    'ar' => 'الإكوادور',
                ],
                'iso' => 'EC',
                'phone_code' => '+593',
            ],
            [
                'name' => [
                    'en' => 'Egypt',
                    'ar' => 'مصر',
                ],
                'iso' => 'EG',
                'phone_code' => '+20',
            ],
            [
                'name' => [
                    'en' => 'El Salvador',
                    'ar' => 'السلفادور',
                ],
                'iso' => 'SV',
                'phone_code' => '+503',
            ],
            [
                'name' => [
                    'en' => 'Equatorial Guinea',
                    'ar' => 'غينيا الاستوائية',
                ],
                'iso' => 'GQ',
                'phone_code' => '+240',
            ],
            [
                'name' => [
                    'en' => 'Eritrea',
                    'ar' => 'إريتريا',
                ],
                'iso' => 'ER',
                'phone_code' => '+291',
            ],
            [
                'name' => [
                    'en' => 'Estonia',
                    'ar' => 'إستونيا',
                ],
                'iso' => 'EE',
                'phone_code' => '+372',
            ],
            [
                'name' => [
                    'en' => 'Eswatini',
                    'ar' => 'إسواتيني',
                ],
                'iso' => 'SZ',
                'phone_code' => '+268',
            ],
            [
                'name' => [
                    'en' => 'Ethiopia',
                    'ar' => 'إثيوبيا',
                ],
                'iso' => 'ET',
                'phone_code' => '+251',
            ],
            [
                'name' => [
                    'en' => 'Fiji',
                    'ar' => 'فيجي',
                ],
                'iso' => 'FJ',
                'phone_code' => '+679',
            ],
            [
                'name' => [
                    'en' => 'Finland',
                    'ar' => 'فنلندا',
                ],
                'iso' => 'FI',
                'phone_code' => '+358',
            ],
            [
                'name' => [
                    'en' => 'France',
                    'ar' => 'فرنسا',
                ],
                'iso' => 'FR',
                'phone_code' => '+33',
            ],
            [
                'name' => [
                    'en' => 'Gabon',
                    'ar' => 'الغابون',
                ],
                'iso' => 'GA',
                'phone_code' => '+241',
            ],
            [
                'name' => [
                    'en' => 'Gambia',
                    'ar' => 'غامبيا',
                ],
                'iso' => 'GM',
                'phone_code' => '+220',
            ],
            [
                'name' => [
                    'en' => 'Georgia',
                    'ar' => 'جورجيا',
                ],
                'iso' => 'GE',
                'phone_code' => '+995',
            ],
            [
                'name' => [
                    'en' => 'Germany',
                    'ar' => 'ألمانيا',
                ],
                'iso' => 'DE',
                'phone_code' => '+49',
            ],
            [
                'name' => [
                    'en' => 'Ghana',
                    'ar' => 'غانا',
                ],
                'iso' => 'GH',
                'phone_code' => '+233',
            ],
            [
                'name' => [
                    'en' => 'Greece',
                    'ar' => 'اليونان',
                ],
                'iso' => 'GR',
                'phone_code' => '+30',
            ],
            [
                'name' => [
                    'en' => 'Grenada',
                    'ar' => 'غرينادا',
                ],
                'iso' => 'GD',
                'phone_code' => '+1-473',
            ],
            [
                'name' => [
                    'en' => 'Guatemala',
                    'ar' => 'غواتيمالا',
                ],
                'iso' => 'GT',
                'phone_code' => '+502',
            ],
            [
                'name' => [
                    'en' => 'Guinea',
                    'ar' => 'غينيا',
                ],
                'iso' => 'GN',
                'phone_code' => '+224',
            ],
            [
                'name' => [
                    'en' => 'Guinea-Bissau',
                    'ar' => 'غينيا بيساو',
                ],
                'iso' => 'GW',
                'phone_code' => '+245',
            ],
            [
                'name' => [
                    'en' => 'Guyana',
                    'ar' => 'غيانا',
                ],
                'iso' => 'GY',
                'phone_code' => '+592',
            ],
            [
                'name' => [
                    'en' => 'Haiti',
                    'ar' => 'هايتي',
                ],
                'iso' => 'HT',
                'phone_code' => '+509',
            ],
            [
                'name' => [
                    'en' => 'Honduras',
                    'ar' => 'هندوراس',
                ],
                'iso' => 'HN',
                'phone_code' => '+504',
            ],
            [
                'name' => [
                    'en' => 'Hungary',
                    'ar' => 'المجر',
                ],
                'iso' => 'HU',
                'phone_code' => '+36',
            ],
            [
                'name' => [
                    'en' => 'Iceland',
                    'ar' => 'آيسلندا',
                ],
                'iso' => 'IS',
                'phone_code' => '+354',
            ],
            [
                'name' => [
                    'en' => 'India',
                    'ar' => 'الهند',
                ],
                'iso' => 'IN',
                'phone_code' => '+91',
            ],
            [
                'name' => [
                    'en' => 'Gabon',
                    'ar' => 'الغابون',
                ],
                'iso' => 'GA',
                'phone_code' => '+241',
            ],
            [
                'name' => [
                    'en' => 'Gambia',
                    'ar' => 'غامبيا',
                ],
                'iso' => 'GM',
                'phone_code' => '+220',
            ],
            [
                'name' => [
                    'en' => 'Georgia',
                    'ar' => 'جورجيا',
                ],
                'iso' => 'GE',
                'phone_code' => '+995',
            ],
            [
                'name' => [
                    'en' => 'Germany',
                    'ar' => 'ألمانيا',
                ],
                'iso' => 'DE',
                'phone_code' => '+49',
            ],
            [
                'name' => [
                    'en' => 'Ghana',
                    'ar' => 'غانا',
                ],
                'iso' => 'GH',
                'phone_code' => '+233',
            ],
            [
                'name' => [
                    'en' => 'Greece',
                    'ar' => 'اليونان',
                ],
                'iso' => 'GR',
                'phone_code' => '+30',
            ],
            [
                'name' => [
                    'en' => 'Grenada',
                    'ar' => 'غرينادا',
                ],
                'iso' => 'GD',
                'phone_code' => '+1-473',
            ],
            [
                'name' => [
                    'en' => 'Guatemala',
                    'ar' => 'غواتيمالا',
                ],
                'iso' => 'GT',
                'phone_code' => '+502',
            ],
            [
                'name' => [
                    'en' => 'Guinea',
                    'ar' => 'غينيا',
                ],
                'iso' => 'GN',
                'phone_code' => '+224',
            ],
            [
                'name' => [
                    'en' => 'Guinea-Bissau',
                    'ar' => 'غينيا بيساو',
                ],
                'iso' => 'GW',
                'phone_code' => '+245',
            ],
            [
                'name' => [
                    'en' => 'Guyana',
                    'ar' => 'غيانا',
                ],
                'iso' => 'GY',
                'phone_code' => '+592',
            ],
            [
                'name' => [
                    'en' => 'Haiti',
                    'ar' => 'هايتي',
                ],
                'iso' => 'HT',
                'phone_code' => '+509',
            ],
            [
                'name' => [
                    'en' => 'Honduras',
                    'ar' => 'هندوراس',
                ],
                'iso' => 'HN',
                'phone_code' => '+504',
            ],
            [
                'name' => [
                    'en' => 'Hungary',
                    'ar' => 'المجر',
                ],
                'iso' => 'HU',
                'phone_code' => '+36',
            ],
            [
                'name' => [
                    'en' => 'Iceland',
                    'ar' => 'آيسلندا',
                ],
                'iso' => 'IS',
                'phone_code' => '+354',
            ],
            [
                'name' => [
                    'en' => 'India',
                    'ar' => 'الهند',
                ],
                'iso' => 'IN',
                'phone_code' => '+91',
            ],
            [
                'name' => [
                    'en' => 'Indonesia',
                    'ar' => 'إندونيسيا',
                ],
                'iso' => 'ID',
                'phone_code' => '+62',
            ],
            [
                'name' => [
                    'en' => 'Iran',
                    'ar' => 'إيران',
                ],
                'iso' => 'IR',
                'phone_code' => '+98',
            ],
            [
                'name' => [
                    'en' => 'Iraq',
                    'ar' => 'العراق',
                ],
                'iso' => 'IQ',
                'phone_code' => '+964',
            ],
            [
                'name' => [
                    'en' => 'Ireland',
                    'ar' => 'أيرلندا',
                ],
                'iso' => 'IE',
                'phone_code' => '+353',
            ],
            [
                'name' => [
                    'en' => 'Israel',
                    'ar' => 'إسرائيل',
                ],
                'iso' => 'IL',
                'phone_code' => '+972',
            ],
            [
                'name' => [
                    'en' => 'Italy',
                    'ar' => 'إيطاليا',
                ],
                'iso' => 'IT',
                'phone_code' => '+39',
            ],
            [
                'name' => [
                    'en' => 'Jamaica',
                    'ar' => 'جامايكا',
                ],
                'iso' => 'JM',
                'phone_code' => '+1-876',
            ],
            [
                'name' => [
                    'en' => 'Japan',
                    'ar' => 'اليابان',
                ],
                'iso' => 'JP',
                'phone_code' => '+81',
            ],
            [
                'name' => [
                    'en' => 'Jordan',
                    'ar' => 'الأردن',
                ],
                'iso' => 'JO',
                'phone_code' => '+962',
            ],
            [
                'name' => [
                    'en' => 'Kazakhstan',
                    'ar' => 'كازاخستان',
                ],
                'iso' => 'KZ',
                'phone_code' => '+7',
            ],
            [
                'name' => [
                    'en' => 'Kenya',
                    'ar' => 'كينيا',
                ],
                'iso' => 'KE',
                'phone_code' => '+254',
            ],
            [
                'name' => [
                    'en' => 'Kiribati',
                    'ar' => 'كيريباتي',
                ],
                'iso' => 'KI',
                'phone_code' => '+686',
            ],
            [
                'name' => [
                    'en' => 'Kuwait',
                    'ar' => 'الكويت',
                ],
                'iso' => 'KW',
                'phone_code' => '+965',
            ],
            [
                'name' => [
                    'en' => 'Kyrgyzstan',
                    'ar' => 'قيرغيزستان',
                ],
                'iso' => 'KG',
                'phone_code' => '+996',
            ],
            [
                'name' => [
                    'en' => 'Laos',
                    'ar' => 'لاوس',
                ],
                'iso' => 'LA',
                'phone_code' => '+856',
            ],
            [
                'name' => [
                    'en' => 'Latvia',
                    'ar' => 'لاتفيا',
                ],
                'iso' => 'LV',
                'phone_code' => '+371',
            ],
            [
                'name' => [
                    'en' => 'Lebanon',
                    'ar' => 'لبنان',
                ],
                'iso' => 'LB',
                'phone_code' => '+961',
            ],
            [
                'name' => [
                    'en' => 'Lesotho',
                    'ar' => 'ليسوتو',
                ],
                'iso' => 'LS',
                'phone_code' => '+266',
            ],
            [
                'name' => [
                    'en' => 'Liberia',
                    'ar' => 'ليبيريا',
                ],
                'iso' => 'LR',
                'phone_code' => '+231',
            ],
            [
                'name' => [
                    'en' => 'Libya',
                    'ar' => 'ليبيا',
                ],
                'iso' => 'LY',
                'phone_code' => '+218',
            ],
            [
                'name' => [
                    'en' => 'Liechtenstein',
                    'ar' => 'ليختنشتاين',
                ],
                'iso' => 'LI',
                'phone_code' => '+423',
            ],
            [
                'name' => [
                    'en' => 'Lithuania',
                    'ar' => 'ليتوانيا',
                ],
                'iso' => 'LT',
                'phone_code' => '+370',
            ],
            [
                'name' => [
                    'en' => 'Luxembourg',
                    'ar' => 'لوكسمبورغ',
                ],
                'iso' => 'LU',
                'phone_code' => '+352',
            ],
            [
                'name' => [
                    'en' => 'Madagascar',
                    'ar' => 'مدغشقر',
                ],
                'iso' => 'MG',
                'phone_code' => '+261',
            ],
            [
                'name' => [
                    'en' => 'Malawi',
                    'ar' => 'مالاوي',
                ],
                'iso' => 'MW',
                'phone_code' => '+265',
            ],
            [
                'name' => [
                    'en' => 'Malaysia',
                    'ar' => 'ماليزيا',
                ],
                'iso' => 'MY',
                'phone_code' => '+60',
            ],
            [
                'name' => [
                    'en' => 'Maldives',
                    'ar' => 'المالديف',
                ],
                'iso' => 'MV',
                'phone_code' => '+960',
            ],
            [
                'name' => [
                    'en' => 'Mali',
                    'ar' => 'مالي',
                ],
                'iso' => 'ML',
                'phone_code' => '+223',
            ],
            [
                'name' => [
                    'en' => 'Malta',
                    'ar' => 'مالطا',
                ],
                'iso' => 'MT',
                'phone_code' => '+356',
            ],
            [
                'name' => [
                    'en' => 'Marshall Islands',
                    'ar' => 'جزر مارشال',
                ],
                'iso' => 'MH',
                'phone_code' => '+692',
            ],
            [
                'name' => [
                    'en' => 'Mauritania',
                    'ar' => 'موريتانيا',
                ],
                'iso' => 'MR',
                'phone_code' => '+222',
            ],
            [
                'name' => [
                    'en' => 'Mauritius',
                    'ar' => 'موريشيوس',
                ],
                'iso' => 'MU',
                'phone_code' => '+230',
            ],
            [
                'name' => [
                    'en' => 'Mexico',
                    'ar' => 'المكسيك',
                ],
                'iso' => 'MX',
                'phone_code' => '+52',
            ],
            [
                'name' => [
                    'en' => 'Micronesia',
                    'ar' => 'ميكرونيسيا',
                ],
                'iso' => 'FM',
                'phone_code' => '+691',
            ],
            [
                'name' => [
                    'en' => 'Moldova',
                    'ar' => 'مولدوفا',
                ],
                'iso' => 'MD',
                'phone_code' => '+373',
            ],
            [
                'name' => [
                    'en' => 'Monaco',
                    'ar' => 'موناكو',
                ],
                'iso' => 'MC',
                'phone_code' => '+377',
            ],
            [
                'name' => [
                    'en' => 'Mongolia',
                    'ar' => 'منغوليا',
                ],
                'iso' => 'MN',
                'phone_code' => '+976',
            ],
            [
                'name' => [
                    'en' => 'Montenegro',
                    'ar' => 'الجبل الأسود',
                ],
                'iso' => 'ME',
                'phone_code' => '+382',
            ],
            [
                'name' => [
                    'en' => 'Morocco',
                    'ar' => 'المغرب',
                ],
                'iso' => 'MA',
                'phone_code' => '+212',
            ],
            [
                'name' => [
                    'en' => 'Mozambique',
                    'ar' => 'موزمبيق',
                ],
                'iso' => 'MZ',
                'phone_code' => '+258',
            ],
            [
                'name' => [
                    'en' => 'Myanmar',
                    'ar' => 'ميانمار',
                ],
                'iso' => 'MM',
                'phone_code' => '+95',
            ],
            [
                'name' => [
                    'en' => 'Namibia',
                    'ar' => 'ناميبيا',
                ],
                'iso' => 'NA',
                'phone_code' => '+264',
            ],
            [
                'name' => [
                    'en' => 'Nauru',
                    'ar' => 'ناورو',
                ],
                'iso' => 'NR',
                'phone_code' => '+674',
            ],
            [
                'name' => [
                    'en' => 'Nepal',
                    'ar' => 'نيبال',
                ],
                'iso' => 'NP',
                'phone_code' => '+977',
            ],
            [
                'name' => [
                    'en' => 'Netherlands',
                    'ar' => 'هولندا',
                ],
                'iso' => 'NL',
                'phone_code' => '+31',
            ],
            [
                'name' => [
                    'en' => 'New Zealand',
                    'ar' => 'نيوزيلندا',
                ],
                'iso' => 'NZ',
                'phone_code' => '+64',
            ],
            [
                'name' => [
                    'en' => 'Nicaragua',
                    'ar' => 'نيكاراغوا',
                ],
                'iso' => 'NI',
                'phone_code' => '+505',
            ],
            [
                'name' => [
                    'en' => 'Niger',
                    'ar' => 'النيجر',
                ],
                'iso' => 'NE',
                'phone_code' => '+227',
            ],
            [
                'name' => [
                    'en' => 'Nigeria',
                    'ar' => 'نيجيريا',
                ],
                'iso' => 'NG',
                'phone_code' => '+234',
            ],
            [
                'name' => [
                    'en' => 'North Korea',
                    'ar' => 'كوريا الشمالية',
                ],
                'iso' => 'KP',
                'phone_code' => '+850',
            ],
            [
                'name' => [
                    'en' => 'North Macedonia',
                    'ar' => 'مقدونيا الشمالية',
                ],
                'iso' => 'MK',
                'phone_code' => '+389',
            ],
            [
                'name' => [
                    'en' => 'Norway',
                    'ar' => 'النرويج',
                ],
                'iso' => 'NO',
                'phone_code' => '+47',
            ],
            [
                'name' => [
                    'en' => 'Oman',
                    'ar' => 'عُمان',
                ],
                'iso' => 'OM',
                'phone_code' => '+968',
            ],
            [
                'name' => [
                    'en' => 'Pakistan',
                    'ar' => 'باكستان',
                ],
                'iso' => 'PK',
                'phone_code' => '+92',
            ],
            [
                'name' => [
                    'en' => 'Palau',
                    'ar' => 'بالاو',
                ],
                'iso' => 'PW',
                'phone_code' => '+680',
            ],
            [
                'name' => [
                    'en' => 'Palestine',
                    'ar' => 'فلسطين',
                ],
                'iso' => 'PS',
                'phone_code' => '+970',
            ],
            [
                'name' => [
                    'en' => 'Panama',
                    'ar' => 'بنما',
                ],
                'iso' => 'PA',
                'phone_code' => '+507',
            ],
            [
                'name' => [
                    'en' => 'Papua New Guinea',
                    'ar' => 'بابوا غينيا الجديدة',
                ],
                'iso' => 'PG',
                'phone_code' => '+675',
            ],
            [
                'name' => [
                    'en' => 'Paraguay',
                    'ar' => 'باراغواي',
                ],
                'iso' => 'PY',
                'phone_code' => '+595',
            ],
            [
                'name' => [
                    'en' => 'Peru',
                    'ar' => 'بيرو',
                ],
                'iso' => 'PE',
                'phone_code' => '+51',
            ],
            [
                'name' => [
                    'en' => 'Philippines',
                    'ar' => 'الفلبين',
                ],
                'iso' => 'PH',
                'phone_code' => '+63',
            ],
            [
                'name' => [
                    'en' => 'Poland',
                    'ar' => 'بولندا',
                ],
                'iso' => 'PL',
                'phone_code' => '+48',
            ],
            [
                'name' => [
                    'en' => 'Portugal',
                    'ar' => 'البرتغال',
                ],
                'iso' => 'PT',
                'phone_code' => '+351',
            ],
            [
                'name' => [
                    'en' => 'Qatar',
                    'ar' => 'قطر',
                ],
                'iso' => 'QA',
                'phone_code' => '+974',
            ],
            [
                'name' => [
                    'en' => 'Romania',
                    'ar' => 'رومانيا',
                ],
                'iso' => 'RO',
                'phone_code' => '+40',
            ],
            [
                'name' => [
                    'en' => 'Russia',
                    'ar' => 'روسيا',
                ],
                'iso' => 'RU',
                'phone_code' => '+7',
            ],
            [
                'name' => [
                    'en' => 'Rwanda',
                    'ar' => 'رواندا',
                ],
                'iso' => 'RW',
                'phone_code' => '+250',
            ],
            [
                'name' => [
                    'en' => 'Saint Kitts and Nevis',
                    'ar' => 'سانت كيتس ونيفيس',
                ],
                'iso' => 'KN',
                'phone_code' => '+1-869',
            ],
            [
                'name' => [
                    'en' => 'Saint Lucia',
                    'ar' => 'سانت لوسيا',
                ],
                'iso' => 'LC',
                'phone_code' => '+1-758',
            ],
            [
                'name' => [
                    'en' => 'Saint Vincent and the Grenadines',
                    'ar' => 'سانت فنسنت وجزر غرينادين',
                ],
                'iso' => 'VC',
                'phone_code' => '+1-784',
            ],
            [
                'name' => [
                    'en' => 'Samoa',
                    'ar' => 'ساموا',
                ],
                'iso' => 'WS',
                'phone_code' => '+685',
            ],
            [
                'name' => [
                    'en' => 'San Marino',
                    'ar' => 'سان مارينو',
                ],
                'iso' => 'SM',
                'phone_code' => '+378',
            ],
            [
                'name' => [
                    'en' => 'Sao Tome and Principe',
                    'ar' => 'ساو تومي وبرينسيب',
                ],
                'iso' => 'ST',
                'phone_code' => '+239',
            ],
            [
                'name' => [
                    'en' => 'Saudi Arabia',
                    'ar' => 'السعودية',
                ],
                'iso' => 'SA',
                'phone_code' => '+966',
            ],
            [
                'name' => [
                    'en' => 'Senegal',
                    'ar' => 'السنغال',
                ],
                'iso' => 'SN',
                'phone_code' => '+221',
            ],
            [
                'name' => [
                    'en' => 'Serbia',
                    'ar' => 'صربيا',
                ],
                'iso' => 'RS',
                'phone_code' => '+381',
            ],
            [
                'name' => [
                    'en' => 'Seychelles',
                    'ar' => 'سيشل',
                ],
                'iso' => 'SC',
                'phone_code' => '+248',
            ],
            [
                'name' => [
                    'en' => 'Sierra Leone',
                    'ar' => 'سيراليون',
                ],
                'iso' => 'SL',
                'phone_code' => '+232',
            ],
            [
                'name' => [
                    'en' => 'Singapore',
                    'ar' => 'سنغافورة',
                ],
                'iso' => 'SG',
                'phone_code' => '+65',
            ],
            [
                'name' => [
                    'en' => 'Suriname',
                    'ar' => 'سورينام'
                ],
                'iso' => 'SR',
                'phone_code' => '597',
            ],
            [
                'name' => [
                    'en' => 'Svalbard and Jan Mayen',
                    'ar' => 'سفالبارد ويان ماين'
                ],
                'iso' => 'SJ',
                'phone_code' => '47',
            ],
            [
                'name' => [
                    'en' => 'Sweden',
                    'ar' => 'السويد'
                ],
                'iso' => 'SE',
                'phone_code' => '46',
            ],
            [
                'name' => [
                    'en' => 'Switzerland',
                    'ar' => 'سويسرا'
                ],
                'iso' => 'CH',
                'phone_code' => '41',
            ],
            [
                'name' => [
                    'en' => 'Syrian Arab Republic',
                    'ar' => 'سوريا'
                ],
                'iso' => 'SY',
                'phone_code' => '963',
            ],
            [
                'name' => [
                    'en' => 'Taiwan',
                    'ar' => 'تايوان'
                ],
                'iso' => 'TW',
                'phone_code' => '886',
            ],
            [
                'name' => [
                    'en' => 'Tajikistan',
                    'ar' => 'طاجيكستان'
                ],
                'iso' => 'TJ',
                'phone_code' => '992',
            ],
            [
                'name' => [
                    'en' => 'Tanzania, United Republic of',
                    'ar' => 'تنزانيا'
                ],
                'iso' => 'TZ',
                'phone_code' => '255',
            ],
            [
                'name' => [
                    'en' => 'Thailand',
                    'ar' => 'تايلاند'
                ],
                'iso' => 'TH',
                'phone_code' => '66',
            ],
            [
                'name' => [
                    'en' => 'Timor-Leste',
                    'ar' => 'تيمور الشرقية'
                ],
                'iso' => 'TL',
                'phone_code' => '670',
            ],
            [
                'name' => [
                    'en' => 'Togo',
                    'ar' => 'توغو'
                ],
                'iso' => 'TG',
                'phone_code' => '228',
            ],
            [
                'name' => [
                    'en' => 'Tokelau',
                    'ar' => 'توكيلاو'
                ],
                'iso' => 'TK',
                'phone_code' => '690',
            ],
            [
                'name' => [
                    'en' => 'Tonga',
                    'ar' => 'تونغا'
                ],
                'iso' => 'TO',
                'phone_code' => '676',
            ],
            [
                'name' => [
                    'en' => 'Trinidad and Tobago',
                    'ar' => 'ترينيداد وتوباغو'
                ],
                'iso' => 'TT',
                'phone_code' => '1868',
            ],
            [
                'name' => [
                    'en' => 'Tunisia',
                    'ar' => 'تونس'
                ],
                'iso' => 'TN',
                'phone_code' => '216',
            ],
            [
                'name' => [
                    'en' => 'Turkey',
                    'ar' => 'تركيا'
                ],
                'iso' => 'TR',
                'phone_code' => '90',
            ],
            [
                'name' => [
                    'en' => 'Turkmenistan',
                    'ar' => 'تركمانستان'
                ],
                'iso' => 'TM',
                'phone_code' => '993',
            ],
            [
                'name' => [
                    'en' => 'Turks and Caicos Islands',
                    'ar' => 'جزر تركس وكايكوس'
                ],
                'iso' => 'TC',
                'phone_code' => '1649',
            ],
            [
                'name' => [
                    'en' => 'Tuvalu',
                    'ar' => 'توفالو'
                ],
                'iso' => 'TV',
                'phone_code' => '688',
            ],
            [
                'name' => [
                    'en' => 'Uganda',
                    'ar' => 'أوغندا'
                ],
                'iso' => 'UG',
                'phone_code' => '256',
            ],
            [
                'name' => [
                    'en' => 'Ukraine',
                    'ar' => 'أوكرانيا'
                ],
                'iso' => 'UA',
                'phone_code' => '380',
            ],
            [
                'name' => [
                    'en' => 'United Arab Emirates',
                    'ar' => 'الإمارات العربية المتحدة'
                ],
                'iso' => 'AE',
                'phone_code' => '971',
            ],
            [
                'name' => [
                    'en' => 'United Kingdom',
                    'ar' => 'المملكة المتحدة'
                ],
                'iso' => 'GB',
                'phone_code' => '44',
            ],
            [
                'name' => [
                    'en' => 'United States',
                    'ar' => 'الولايات المتحدة'
                ],
                'iso' => 'US',
                'phone_code' => '1',
            ],
            [
                'name' => [
                    'en' => 'Uruguay',
                    'ar' => 'أوروغواي'
                ],
                'iso' => 'UY',
                'phone_code' => '598',
            ],
            [
                'name' => [
                    'en' => 'Uzbekistan',
                    'ar' => 'أوزبكستان'
                ],
                'iso' => 'UZ',
                'phone_code' => '998',
            ],
            [
                'name' => [
                    'en' => 'Vanuatu',
                    'ar' => 'فانواتو'
                ],
                'iso' => 'VU',
                'phone_code' => '678',
            ],
            [
                'name' => [
                    'en' => 'Venezuela',
                    'ar' => 'فنزويلا'
                ],
                'iso' => 'VE',
                'phone_code' => '58',
            ],
            [
                'name' => [
                    'en' => 'Viet Nam',
                    'ar' => 'فيتنام'
                ],
                'iso' => 'VN',
                'phone_code' => '84',
            ],
            [
                'name' => [
                    'en' => 'Western Sahara',
                    'ar' => 'الصحراء الغربية'
                ],
                'iso' => 'EH',
                'phone_code' => '212',
            ],
            [
                'name' => [
                    'en' => 'Yemen',
                    'ar' => 'اليمن'
                ],
                'iso' => 'YE',
                'phone_code' => '967',
            ],
            [
                'name' => [
                    'en' => 'Zambia',
                    'ar' => 'زامبيا'
                ],
                'iso' => 'ZM',
                'phone_code' => '260',
            ],
            [
                'name' => [
                    'en' => 'Zimbabwe',
                    'ar' => 'زيمبابوي'
                ],
                'iso' => 'ZW',
                'phone_code' => '263',
            ],
        ];

        DB::table('countries')->insert($countries);
    }
}
