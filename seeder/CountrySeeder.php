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
                'code' => '+93',
                'iso' => 'AF',
            ],
            [
                'name' => [
                    'en' => 'Albania',
                    'ar' => 'ألبانيا',
                ],
                'code' => '+355',
                'iso' => 'AL',
            ],
            [
                'name' => [
                    'en' => 'Algeria',
                    'ar' => 'الجزائر',
                ],
                'code' => '+213',
                'iso' => 'DZ',
            ],
            [
                'name' => [
                    'en' => 'Andorra',
                    'ar' => 'أندورا',
                ],
                'code' => '+376',
                'iso' => 'AD',
            ],
            [
                'name' => [
                    'en' => 'Angola',
                    'ar' => 'أنغولا',
                ],
                'code' => '+244',
                'iso' => 'AO',
            ],
            [
                'name' => [
                    'en' => 'Antigua and Barbuda',
                    'ar' => 'أنتيغوا وبربودا',
                ],
                'code' => '+1-268',
                'iso' => 'AG',
            ],
            [
                'name' => [
                    'en' => 'Argentina',
                    'ar' => 'الأرجنتين',
                ],
                'code' => '+54',
                'iso' => 'AR',
            ],
            [
                'name' => [
                    'en' => 'Armenia',
                    'ar' => 'أرمينيا',
                ],
                'code' => '+374',
                'iso' => 'AM',
            ],
            [
                'name' => [
                    'en' => 'Australia',
                    'ar' => 'أستراليا',
                ],
                'code' => '+61',
                'iso' => 'AU',
            ],
            [
                'name' => [
                    'en' => 'Austria',
                    'ar' => 'النمسا',
                ],
                'code' => '+43',
                'iso' => 'AT',
            ],
            [
                'name' => [
                    'en' => 'Azerbaijan',
                    'ar' => 'أذربيجان',
                ],
                'code' => '+994',
                'iso' => 'AZ',
            ],
            [
                'name' => [
                    'en' => 'Bahamas',
                    'ar' => 'الباهاما',
                ],
                'code' => '+1-242',
                'iso' => 'BS',
            ],
            [
                'name' => [
                    'en' => 'Bahrain',
                    'ar' => 'البحرين',
                ],
                'code' => '+973',
                'iso' => 'BH',
            ],
            [
                'name' => [
                    'en' => 'Bangladesh',
                    'ar' => 'بنغلاديش',
                ],
                'code' => '+880',
                'iso' => 'BD',
            ],
            [
                'name' => [
                    'en' => 'Barbados',
                    'ar' => 'بربادوس',
                ],
                'code' => '+1-246',
                'iso' => 'BB',
            ],
            [
                'name' => [
                    'en' => 'Belarus',
                    'ar' => 'بيلاروسيا',
                ],
                'code' => '+375',
                'iso' => 'BY',
            ],
            [
                'name' => [
                    'en' => 'Belgium',
                    'ar' => 'بلجيكا',
                ],
                'code' => '+32',
                'iso' => 'BE',
            ],
            [
                'name' => [
                    'en' => 'Belize',
                    'ar' => 'بليز',
                ],
                'code' => '+501',
                'iso' => 'BZ',
            ],
            [
                'name' => [
                    'en' => 'Benin',
                    'ar' => 'بنين',
                ],
                'code' => '+229',
                'iso' => 'BJ',
            ],
            [
                'name' => [
                    'en' => 'Bhutan',
                    'ar' => 'بوتان',
                ],
                'code' => '+975',
                'iso' => 'BT',
            ],
            [
                'name' => [
                    'en' => 'Bolivia',
                    'ar' => 'بوليفيا',
                ],
                'code' => '+591',
                'iso' => 'BO',
            ],
            [
                'name' => [
                    'en' => 'Bosnia and Herzegovina',
                    'ar' => 'البوسنة والهرسك',
                ],
                'code' => '+387',
                'iso' => 'BA',
            ],
            [
                'name' => [
                    'en' => 'Botswana',
                    'ar' => 'بوتسوانا',
                ],
                'code' => '+267',
                'iso' => 'BW',
            ],
            [
                'name' => [
                    'en' => 'Brazil',
                    'ar' => 'البرازيل',
                ],
                'code' => '+55',
                'iso' => 'BR',
            ],
            [
                'name' => [
                    'en' => 'Brunei',
                    'ar' => 'بروناي',
                ],
                'code' => '+673',
                'iso' => 'BN',
            ],
            [
                'name' => [
                    'en' => 'Bulgaria',
                    'ar' => 'بلغاريا',
                ],
                'code' => '+359',
                'iso' => 'BG',
            ],
            [
                'name' => [
                    'en' => 'Burkina Faso',
                    'ar' => 'بوركينا فاسو',
                ],
                'code' => '+226',
                'iso' => 'BF',
            ],
            [
                'name' => [
                    'en' => 'Burundi',
                    'ar' => 'بوروندي',
                ],
                'code' => '+257',
                'iso' => 'BI',
            ],
            [
                'name' => [
                    'en' => 'Cabo Verde',
                    'ar' => 'الرأس الأخضر',
                ],
                'code' => '+238',
                'iso' => 'CV',
            ],
            [
                'name' => [
                    'en' => 'Cambodia',
                    'ar' => 'كمبوديا',
                ],
                'code' => '+855',
                'iso' => 'KH',
            ],
            [
                'name' => [
                    'en' => 'Cameroon',
                    'ar' => 'الكاميرون',
                ],
                'code' => '+237',
                'iso' => 'CM',
            ],
            [
                'name' => [
                    'en' => 'Canada',
                    'ar' => 'كندا',
                ],
                'code' => '+1',
                'iso' => 'CA',
            ],
            [
                'name' => [
                    'en' => 'Central African Republic',
                    'ar' => 'جمهورية أفريقيا الوسطى',
                ],
                'code' => '+236',
                'iso' => 'CF',
            ],
            [
                'name' => [
                    'en' => 'Chad',
                    'ar' => 'تشاد',
                ],
                'code' => '+235',
                'iso' => 'TD',
            ],
            [
                'name' => [
                    'en' => 'Chile',
                    'ar' => 'تشيلي',
                ],
                'code' => '+56',
                'iso' => 'CL',
            ],
            [
                'name' => [
                    'en' => 'China',
                    'ar' => 'الصين',
                ],
                'code' => '+86',
                'iso' => 'CN',
            ],
            [
                'name' => [
                    'en' => 'Colombia',
                    'ar' => 'كولومبيا',
                ],
                'code' => '+57',
                'iso' => 'CO',
            ],
            [
                'name' => [
                    'en' => 'Comoros',
                    'ar' => 'جزر القمر',
                ],
                'code' => '+269',
                'iso' => 'KM',
            ],
            [
                'name' => [
                    'en' => 'Costa Rica',
                    'ar' => 'كوستاريكا',
                ],
                'code' => '+506',
                'iso' => 'CR',
            ],
            [
                'name' => [
                    'en' => 'Croatia',
                    'ar' => 'كرواتيا',
                ],
                'code' => '+385',
                'iso' => 'HR',
            ],
            [
                'name' => [
                    'en' => 'Cuba',
                    'ar' => 'كوبا',
                ],
                'code' => '+53',
                'iso' => 'CU',
            ],
            [
                'name' => [
                    'en' => 'Cyprus',
                    'ar' => 'قبرص',
                ],
                'code' => '+357',
                'iso' => 'CY',
            ],
            [
                'name' => [
                    'en' => 'Czechia',
                    'ar' => 'التشيك',
                ],
                'code' => '+420',
                'iso' => 'CZ',
            ],
            [
                'name' => [
                    'en' => 'Denmark',
                    'ar' => 'الدنمارك',
                ],
                'code' => '+45',
                'iso' => 'DK',
            ],
            [
                'name' => [
                    'en' => 'Djibouti',
                    'ar' => 'جيبوتي',
                ],
                'code' => '+253',
                'iso' => 'DJ',
            ],
            [
                'name' => [
                    'en' => 'Dominica',
                    'ar' => 'دومينيكا',
                ],
                'code' => '+1-767',
                'iso' => 'DM',
            ],
            [
                'name' => [
                    'en' => 'Dominican Republic',
                    'ar' => 'جمهورية الدومينيكان',
                ],
                'code' => '+1-809',
                'iso' => 'DO',
            ],
            [
                'name' => [
                    'en' => 'Ecuador',
                    'ar' => 'الإكوادور',
                ],
                'code' => '+593',
                'iso' => 'EC',
            ],
            [
                'name' => [
                    'en' => 'Egypt',
                    'ar' => 'مصر',
                ],
                'code' => '+20',
                'iso' => 'EG',
            ],
            [
                'name' => [
                    'en' => 'El Salvador',
                    'ar' => 'السلفادور',
                ],
                'code' => '+503',
                'iso' => 'SV',
            ],
            [
                'name' => [
                    'en' => 'Equatorial Guinea',
                    'ar' => 'غينيا الاستوائية',
                ],
                'code' => '+240',
                'iso' => 'GQ',
            ],
            [
                'name' => [
                    'en' => 'Eritrea',
                    'ar' => 'إريتريا',
                ],
                'code' => '+291',
                'iso' => 'ER',
            ],
            [
                'name' => [
                    'en' => 'Estonia',
                    'ar' => 'إستونيا',
                ],
                'code' => '+372',
                'iso' => 'EE',
            ],
            [
                'name' => [
                    'en' => 'Eswatini',
                    'ar' => 'إسواتيني',
                ],
                'code' => '+268',
                'iso' => 'SZ',
            ],
            [
                'name' => [
                    'en' => 'Ethiopia',
                    'ar' => 'إثيوبيا',
                ],
                'code' => '+251',
                'iso' => 'ET',
            ],
            [
                'name' => [
                    'en' => 'Fiji',
                    'ar' => 'فيجي',
                ],
                'code' => '+679',
                'iso' => 'FJ',
            ],
            [
                'name' => [
                    'en' => 'Finland',
                    'ar' => 'فنلندا',
                ],
                'code' => '+358',
                'iso' => 'FI',
            ],
            [
                'name' => [
                    'en' => 'France',
                    'ar' => 'فرنسا',
                ],
                'code' => '+33',
                'iso' => 'FR',
            ],
            [
                'name' => [
                    'en' => 'Gabon',
                    'ar' => 'الغابون',
                ],
                'code' => '+241',
                'iso' => 'GA',
            ],
            [
                'name' => [
                    'en' => 'Gambia',
                    'ar' => 'غامبيا',
                ],
                'code' => '+220',
                'iso' => 'GM',
            ],
            [
                'name' => [
                    'en' => 'Georgia',
                    'ar' => 'جورجيا',
                ],
                'code' => '+995',
                'iso' => 'GE',
            ],
            [
                'name' => [
                    'en' => 'Germany',
                    'ar' => 'ألمانيا',
                ],
                'code' => '+49',
                'iso' => 'DE',
            ],
            [
                'name' => [
                    'en' => 'Ghana',
                    'ar' => 'غانا',
                ],
                'code' => '+233',
                'iso' => 'GH',
            ],
            [
                'name' => [
                    'en' => 'Greece',
                    'ar' => 'اليونان',
                ],
                'code' => '+30',
                'iso' => 'GR',
            ],
            [
                'name' => [
                    'en' => 'Grenada',
                    'ar' => 'غرينادا',
                ],
                'code' => '+1-473',
                'iso' => 'GD',
            ],
            [
                'name' => [
                    'en' => 'Guatemala',
                    'ar' => 'غواتيمالا',
                ],
                'code' => '+502',
                'iso' => 'GT',
            ],
            [
                'name' => [
                    'en' => 'Guinea',
                    'ar' => 'غينيا',
                ],
                'code' => '+224',
                'iso' => 'GN',
            ],
            [
                'name' => [
                    'en' => 'Guinea-Bissau',
                    'ar' => 'غينيا بيساو',
                ],
                'code' => '+245',
                'iso' => 'GW',
            ],
            [
                'name' => [
                    'en' => 'Guyana',
                    'ar' => 'غيانا',
                ],
                'code' => '+592',
                'iso' => 'GY',
            ],
            [
                'name' => [
                    'en' => 'Haiti',
                    'ar' => 'هايتي',
                ],
                'code' => '+509',
                'iso' => 'HT',
            ],
            [
                'name' => [
                    'en' => 'Honduras',
                    'ar' => 'هندوراس',
                ],
                'code' => '+504',
                'iso' => 'HN',
            ],
            [
                'name' => [
                    'en' => 'Hungary',
                    'ar' => 'المجر',
                ],
                'code' => '+36',
                'iso' => 'HU',
            ],
            [
                'name' => [
                    'en' => 'Iceland',
                    'ar' => 'آيسلندا',
                ],
                'code' => '+354',
                'iso' => 'IS',
            ],
            [
                'name' => [
                    'en' => 'India',
                    'ar' => 'الهند',
                ],
                'code' => '+91',
                'iso' => 'IN',
            ],
            [
                'name' => [
                    'en' => 'Gabon',
                    'ar' => 'الغابون',
                ],
                'code' => '+241',
                'iso' => 'GA',
            ],
            [
                'name' => [
                    'en' => 'Gambia',
                    'ar' => 'غامبيا',
                ],
                'code' => '+220',
                'iso' => 'GM',
            ],
            [
                'name' => [
                    'en' => 'Georgia',
                    'ar' => 'جورجيا',
                ],
                'code' => '+995',
                'iso' => 'GE',
            ],
            [
                'name' => [
                    'en' => 'Germany',
                    'ar' => 'ألمانيا',
                ],
                'code' => '+49',
                'iso' => 'DE',
            ],
            [
                'name' => [
                    'en' => 'Ghana',
                    'ar' => 'غانا',
                ],
                'code' => '+233',
                'iso' => 'GH',
            ],
            [
                'name' => [
                    'en' => 'Greece',
                    'ar' => 'اليونان',
                ],
                'code' => '+30',
                'iso' => 'GR',
            ],
            [
                'name' => [
                    'en' => 'Grenada',
                    'ar' => 'غرينادا',
                ],
                'code' => '+1-473',
                'iso' => 'GD',
            ],
            [
                'name' => [
                    'en' => 'Guatemala',
                    'ar' => 'غواتيمالا',
                ],
                'code' => '+502',
                'iso' => 'GT',
            ],
            [
                'name' => [
                    'en' => 'Guinea',
                    'ar' => 'غينيا',
                ],
                'code' => '+224',
                'iso' => 'GN',
            ],
            [
                'name' => [
                    'en' => 'Guinea-Bissau',
                    'ar' => 'غينيا بيساو',
                ],
                'code' => '+245',
                'iso' => 'GW',
            ],
            [
                'name' => [
                    'en' => 'Guyana',
                    'ar' => 'غيانا',
                ],
                'code' => '+592',
                'iso' => 'GY',
            ],
            [
                'name' => [
                    'en' => 'Haiti',
                    'ar' => 'هايتي',
                ],
                'code' => '+509',
                'iso' => 'HT',
            ],
            [
                'name' => [
                    'en' => 'Honduras',
                    'ar' => 'هندوراس',
                ],
                'code' => '+504',
                'iso' => 'HN',
            ],
            [
                'name' => [
                    'en' => 'Hungary',
                    'ar' => 'المجر',
                ],
                'code' => '+36',
                'iso' => 'HU',
            ],
            [
                'name' => [
                    'en' => 'Iceland',
                    'ar' => 'آيسلندا',
                ],
                'code' => '+354',
                'iso' => 'IS',
            ],
            [
                'name' => [
                    'en' => 'India',
                    'ar' => 'الهند',
                ],
                'code' => '+91',
                'iso' => 'IN',
            ],
            [
                'name' => [
                    'en' => 'Indonesia',
                    'ar' => 'إندونيسيا',
                ],
                'code' => '+62',
                'iso' => 'ID',
            ],
            [
                'name' => [
                    'en' => 'Iran',
                    'ar' => 'إيران',
                ],
                'code' => '+98',
                'iso' => 'IR',
            ],
            [
                'name' => [
                    'en' => 'Iraq',
                    'ar' => 'العراق',
                ],
                'code' => '+964',
                'iso' => 'IQ',
            ],
            [
                'name' => [
                    'en' => 'Ireland',
                    'ar' => 'أيرلندا',
                ],
                'code' => '+353',
                'iso' => 'IE',
            ],
            [
                'name' => [
                    'en' => 'Israel',
                    'ar' => 'إسرائيل',
                ],
                'code' => '+972',
                'iso' => 'IL',
            ],
            [
                'name' => [
                    'en' => 'Italy',
                    'ar' => 'إيطاليا',
                ],
                'code' => '+39',
                'iso' => 'IT',
            ],
            [
                'name' => [
                    'en' => 'Jamaica',
                    'ar' => 'جامايكا',
                ],
                'code' => '+1-876',
                'iso' => 'JM',
            ],
            [
                'name' => [
                    'en' => 'Japan',
                    'ar' => 'اليابان',
                ],
                'code' => '+81',
                'iso' => 'JP',
            ],
            [
                'name' => [
                    'en' => 'Jordan',
                    'ar' => 'الأردن',
                ],
                'code' => '+962',
                'iso' => 'JO',
            ],
            [
                'name' => [
                    'en' => 'Kazakhstan',
                    'ar' => 'كازاخستان',
                ],
                'code' => '+7',
                'iso' => 'KZ',
            ],
            [
                'name' => [
                    'en' => 'Kenya',
                    'ar' => 'كينيا',
                ],
                'code' => '+254',
                'iso' => 'KE',
            ],
            [
                'name' => [
                    'en' => 'Kiribati',
                    'ar' => 'كيريباتي',
                ],
                'code' => '+686',
                'iso' => 'KI',
            ],
            [
                'name' => [
                    'en' => 'Kuwait',
                    'ar' => 'الكويت',
                ],
                'code' => '+965',
                'iso' => 'KW',
            ],
            [
                'name' => [
                    'en' => 'Kyrgyzstan',
                    'ar' => 'قيرغيزستان',
                ],
                'code' => '+996',
                'iso' => 'KG',
            ],
            [
                'name' => [
                    'en' => 'Laos',
                    'ar' => 'لاوس',
                ],
                'code' => '+856',
                'iso' => 'LA',
            ],
            [
                'name' => [
                    'en' => 'Latvia',
                    'ar' => 'لاتفيا',
                ],
                'code' => '+371',
                'iso' => 'LV',
            ],
            [
                'name' => [
                    'en' => 'Lebanon',
                    'ar' => 'لبنان',
                ],
                'code' => '+961',
                'iso' => 'LB',
            ],
            [
                'name' => [
                    'en' => 'Lesotho',
                    'ar' => 'ليسوتو',
                ],
                'code' => '+266',
                'iso' => 'LS',
            ],
            [
                'name' => [
                    'en' => 'Liberia',
                    'ar' => 'ليبيريا',
                ],
                'code' => '+231',
                'iso' => 'LR',
            ],
            [
                'name' => [
                    'en' => 'Libya',
                    'ar' => 'ليبيا',
                ],
                'code' => '+218',
                'iso' => 'LY',
            ],
            [
                'name' => [
                    'en' => 'Liechtenstein',
                    'ar' => 'ليختنشتاين',
                ],
                'code' => '+423',
                'iso' => 'LI',
            ],
            [
                'name' => [
                    'en' => 'Lithuania',
                    'ar' => 'ليتوانيا',
                ],
                'code' => '+370',
                'iso' => 'LT',
            ],
            [
                'name' => [
                    'en' => 'Luxembourg',
                    'ar' => 'لوكسمبورغ',
                ],
                'code' => '+352',
                'iso' => 'LU',
            ],
            [
                'name' => [
                    'en' => 'Madagascar',
                    'ar' => 'مدغشقر',
                ],
                'code' => '+261',
                'iso' => 'MG',
            ],
            [
                'name' => [
                    'en' => 'Malawi',
                    'ar' => 'مالاوي',
                ],
                'code' => '+265',
                'iso' => 'MW',
            ],
            [
                'name' => [
                    'en' => 'Malaysia',
                    'ar' => 'ماليزيا',
                ],
                'code' => '+60',
                'iso' => 'MY',
            ],
            [
                'name' => [
                    'en' => 'Maldives',
                    'ar' => 'المالديف',
                ],
                'code' => '+960',
                'iso' => 'MV',
            ],
            [
                'name' => [
                    'en' => 'Mali',
                    'ar' => 'مالي',
                ],
                'code' => '+223',
                'iso' => 'ML',
            ],
            [
                'name' => [
                    'en' => 'Malta',
                    'ar' => 'مالطا',
                ],
                'code' => '+356',
                'iso' => 'MT',
            ],
            [
                'name' => [
                    'en' => 'Marshall Islands',
                    'ar' => 'جزر مارشال',
                ],
                'code' => '+692',
                'iso' => 'MH',
            ],
            [
                'name' => [
                    'en' => 'Mauritania',
                    'ar' => 'موريتانيا',
                ],
                'code' => '+222',
                'iso' => 'MR',
            ],
            [
                'name' => [
                    'en' => 'Mauritius',
                    'ar' => 'موريشيوس',
                ],
                'code' => '+230',
                'iso' => 'MU',
            ],
            [
                'name' => [
                    'en' => 'Mexico',
                    'ar' => 'المكسيك',
                ],
                'code' => '+52',
                'iso' => 'MX',
            ],
            [
                'name' => [
                    'en' => 'Micronesia',
                    'ar' => 'ميكرونيسيا',
                ],
                'code' => '+691',
                'iso' => 'FM',
            ],
            [
                'name' => [
                    'en' => 'Moldova',
                    'ar' => 'مولدوفا',
                ],
                'code' => '+373',
                'iso' => 'MD',
            ],
            [
                'name' => [
                    'en' => 'Monaco',
                    'ar' => 'موناكو',
                ],
                'code' => '+377',
                'iso' => 'MC',
            ],
            [
                'name' => [
                    'en' => 'Mongolia',
                    'ar' => 'منغوليا',
                ],
                'code' => '+976',
                'iso' => 'MN',
            ],
            [
                'name' => [
                    'en' => 'Montenegro',
                    'ar' => 'الجبل الأسود',
                ],
                'code' => '+382',
                'iso' => 'ME',
            ],
            [
                'name' => [
                    'en' => 'Morocco',
                    'ar' => 'المغرب',
                ],
                'code' => '+212',
                'iso' => 'MA',
            ],
            [
                'name' => [
                    'en' => 'Mozambique',
                    'ar' => 'موزمبيق',
                ],
                'code' => '+258',
                'iso' => 'MZ',
            ],
            [
                'name' => [
                    'en' => 'Myanmar',
                    'ar' => 'ميانمار',
                ],
                'code' => '+95',
                'iso' => 'MM',
            ],
            [
                'name' => [
                    'en' => 'Namibia',
                    'ar' => 'ناميبيا',
                ],
                'code' => '+264',
                'iso' => 'NA',
            ],
            [
                'name' => [
                    'en' => 'Nauru',
                    'ar' => 'ناورو',
                ],
                'code' => '+674',
                'iso' => 'NR',
            ],
            [
                'name' => [
                    'en' => 'Nepal',
                    'ar' => 'نيبال',
                ],
                'code' => '+977',
                'iso' => 'NP',
            ],
            [
                'name' => [
                    'en' => 'Netherlands',
                    'ar' => 'هولندا',
                ],
                'code' => '+31',
                'iso' => 'NL',
            ],
            [
                'name' => [
                    'en' => 'New Zealand',
                    'ar' => 'نيوزيلندا',
                ],
                'code' => '+64',
                'iso' => 'NZ',
            ],
            [
                'name' => [
                    'en' => 'Nicaragua',
                    'ar' => 'نيكاراغوا',
                ],
                'code' => '+505',
                'iso' => 'NI',
            ],
            [
                'name' => [
                    'en' => 'Niger',
                    'ar' => 'النيجر',
                ],
                'code' => '+227',
                'iso' => 'NE',
            ],
            [
                'name' => [
                    'en' => 'Nigeria',
                    'ar' => 'نيجيريا',
                ],
                'code' => '+234',
                'iso' => 'NG',
            ],
            [
                'name' => [
                    'en' => 'North Korea',
                    'ar' => 'كوريا الشمالية',
                ],
                'code' => '+850',
                'iso' => 'KP',
            ],
            [
                'name' => [
                    'en' => 'North Macedonia',
                    'ar' => 'مقدونيا الشمالية',
                ],
                'code' => '+389',
                'iso' => 'MK',
            ],
            [
                'name' => [
                    'en' => 'Norway',
                    'ar' => 'النرويج',
                ],
                'code' => '+47',
                'iso' => 'NO',
            ],
            [
                'name' => [
                    'en' => 'Oman',
                    'ar' => 'عُمان',
                ],
                'code' => '+968',
                'iso' => 'OM',
            ],
            [
                'name' => [
                    'en' => 'Pakistan',
                    'ar' => 'باكستان',
                ],
                'code' => '+92',
                'iso' => 'PK',
            ],
            [
                'name' => [
                    'en' => 'Palau',
                    'ar' => 'بالاو',
                ],
                'code' => '+680',
                'iso' => 'PW',
            ],
            [
                'name' => [
                    'en' => 'Palestine',
                    'ar' => 'فلسطين',
                ],
                'code' => '+970',
                'iso' => 'PS',
            ],
            [
                'name' => [
                    'en' => 'Panama',
                    'ar' => 'بنما',
                ],
                'code' => '+507',
                'iso' => 'PA',
            ],
            [
                'name' => [
                    'en' => 'Papua New Guinea',
                    'ar' => 'بابوا غينيا الجديدة',
                ],
                'code' => '+675',
                'iso' => 'PG',
            ],
            [
                'name' => [
                    'en' => 'Paraguay',
                    'ar' => 'باراغواي',
                ],
                'code' => '+595',
                'iso' => 'PY',
            ],
            [
                'name' => [
                    'en' => 'Peru',
                    'ar' => 'بيرو',
                ],
                'code' => '+51',
                'iso' => 'PE',
            ],
            [
                'name' => [
                    'en' => 'Philippines',
                    'ar' => 'الفلبين',
                ],
                'code' => '+63',
                'iso' => 'PH',
            ],
            [
                'name' => [
                    'en' => 'Poland',
                    'ar' => 'بولندا',
                ],
                'code' => '+48',
                'iso' => 'PL',
            ],
            [
                'name' => [
                    'en' => 'Portugal',
                    'ar' => 'البرتغال',
                ],
                'code' => '+351',
                'iso' => 'PT',
            ],
            [
                'name' => [
                    'en' => 'Qatar',
                    'ar' => 'قطر',
                ],
                'code' => '+974',
                'iso' => 'QA',
            ],
            [
                'name' => [
                    'en' => 'Romania',
                    'ar' => 'رومانيا',
                ],
                'code' => '+40',
                'iso' => 'RO',
            ],
            [
                'name' => [
                    'en' => 'Russia',
                    'ar' => 'روسيا',
                ],
                'code' => '+7',
                'iso' => 'RU',
            ],
            [
                'name' => [
                    'en' => 'Rwanda',
                    'ar' => 'رواندا',
                ],
                'code' => '+250',
                'iso' => 'RW',
            ],
            [
                'name' => [
                    'en' => 'Saint Kitts and Nevis',
                    'ar' => 'سانت كيتس ونيفيس',
                ],
                'code' => '+1-869',
                'iso' => 'KN',
            ],
            [
                'name' => [
                    'en' => 'Saint Lucia',
                    'ar' => 'سانت لوسيا',
                ],
                'code' => '+1-758',
                'iso' => 'LC',
            ],
            [
                'name' => [
                    'en' => 'Saint Vincent and the Grenadines',
                    'ar' => 'سانت فنسنت وجزر غرينادين',
                ],
                'code' => '+1-784',
                'iso' => 'VC',
            ],
            [
                'name' => [
                    'en' => 'Samoa',
                    'ar' => 'ساموا',
                ],
                'code' => '+685',
                'iso' => 'WS',
            ],
            [
                'name' => [
                    'en' => 'San Marino',
                    'ar' => 'سان مارينو',
                ],
                'code' => '+378',
                'iso' => 'SM',
            ],
            [
                'name' => [
                    'en' => 'Sao Tome and Principe',
                    'ar' => 'ساو تومي وبرينسيب',
                ],
                'code' => '+239',
                'iso' => 'ST',
            ],
            [
                'name' => [
                    'en' => 'Saudi Arabia',
                    'ar' => 'السعودية',
                ],
                'code' => '+966',
                'iso' => 'SA',
            ],
            [
                'name' => [
                    'en' => 'Senegal',
                    'ar' => 'السنغال',
                ],
                'code' => '+221',
                'iso' => 'SN',
            ],
            [
                'name' => [
                    'en' => 'Serbia',
                    'ar' => 'صربيا',
                ],
                'code' => '+381',
                'iso' => 'RS',
            ],
            [
                'name' => [
                    'en' => 'Seychelles',
                    'ar' => 'سيشل',
                ],
                'code' => '+248',
                'iso' => 'SC',
            ],
            [
                'name' => [
                    'en' => 'Sierra Leone',
                    'ar' => 'سيراليون',
                ],
                'code' => '+232',
                'iso' => 'SL',
            ],
            [
                'name' => [
                    'en' => 'Singapore',
                    'ar' => 'سنغافورة',
                ],
                'code' => '+65',
                'iso' => 'SG',
            ],
            [
                'name' => [
                    'en' => 'Suriname',
                    'ar' => 'سورينام'
                ],
                'code' => '597',
                'iso' => 'SR',
            ],
            [
                'name' => [
                    'en' => 'Svalbard and Jan Mayen',
                    'ar' => 'سفالبارد ويان ماين'
                ],
                'code' => '47',
                'iso' => 'SJ',
            ],
            [
                'name' => [
                    'en' => 'Sweden',
                    'ar' => 'السويد'
                ],
                'code' => '46',
                'iso' => 'SE',
            ],
            [
                'name' => [
                    'en' => 'Switzerland',
                    'ar' => 'سويسرا'
                ],
                'code' => '41',
                'iso' => 'CH',
            ],
            [
                'name' => [
                    'en' => 'Syrian Arab Republic',
                    'ar' => 'سوريا'
                ],
                'code' => '963',
                'iso' => 'SY',
            ],
            [
                'name' => [
                    'en' => 'Taiwan',
                    'ar' => 'تايوان'
                ],
                'code' => '886',
                'iso' => 'TW',
            ],
            [
                'name' => [
                    'en' => 'Tajikistan',
                    'ar' => 'طاجيكستان'
                ],
                'code' => '992',
                'iso' => 'TJ',
            ],
            [
                'name' => [
                    'en' => 'Tanzania, United Republic of',
                    'ar' => 'تنزانيا'
                ],
                'code' => '255',
                'iso' => 'TZ',
            ],
            [
                'name' => [
                    'en' => 'Thailand',
                    'ar' => 'تايلاند'
                ],
                'code' => '66',
                'iso' => 'TH',
            ],
            [
                'name' => [
                    'en' => 'Timor-Leste',
                    'ar' => 'تيمور الشرقية'
                ],
                'code' => '670',
                'iso' => 'TL',
            ],
            [
                'name' => [
                    'en' => 'Togo',
                    'ar' => 'توغو'
                ],
                'code' => '228',
                'iso' => 'TG',
            ],
            [
                'name' => [
                    'en' => 'Tokelau',
                    'ar' => 'توكيلاو'
                ],
                'code' => '690',
                'iso' => 'TK',
            ],
            [
                'name' => [
                    'en' => 'Tonga',
                    'ar' => 'تونغا'
                ],
                'code' => '676',
                'iso' => 'TO',
            ],
            [
                'name' => [
                    'en' => 'Trinidad and Tobago',
                    'ar' => 'ترينيداد وتوباغو'
                ],
                'code' => '1868',
                'iso' => 'TT',
            ],
            [
                'name' => [
                    'en' => 'Tunisia',
                    'ar' => 'تونس'
                ],
                'code' => '216',
                'iso' => 'TN',
            ],
            [
                'name' => [
                    'en' => 'Turkey',
                    'ar' => 'تركيا'
                ],
                'code' => '90',
                'iso' => 'TR',
            ],
            [
                'name' => [
                    'en' => 'Turkmenistan',
                    'ar' => 'تركمانستان'
                ],
                'code' => '993',
                'iso' => 'TM',
            ],
            [
                'name' => [
                    'en' => 'Turks and Caicos Islands',
                    'ar' => 'جزر تركس وكايكوس'
                ],
                'code' => '1649',
                'iso' => 'TC',
            ],
            [
                'name' => [
                    'en' => 'Tuvalu',
                    'ar' => 'توفالو'
                ],
                'code' => '688',
                'iso' => 'TV',
            ],
            [
                'name' => [
                    'en' => 'Uganda',
                    'ar' => 'أوغندا'
                ],
                'code' => '256',
                'iso' => 'UG',
            ],
            [
                'name' => [
                    'en' => 'Ukraine',
                    'ar' => 'أوكرانيا'
                ],
                'code' => '380',
                'iso' => 'UA',
            ],
            [
                'name' => [
                    'en' => 'United Arab Emirates',
                    'ar' => 'الإمارات العربية المتحدة'
                ],
                'code' => '971',
                'iso' => 'AE',
            ],
            [
                'name' => [
                    'en' => 'United Kingdom',
                    'ar' => 'المملكة المتحدة'
                ],
                'code' => '44',
                'iso' => 'GB',
            ],
            [
                'name' => [
                    'en' => 'United States',
                    'ar' => 'الولايات المتحدة'
                ],
                'code' => '1',
                'iso' => 'US',
            ],
            [
                'name' => [
                    'en' => 'Uruguay',
                    'ar' => 'أوروغواي'
                ],
                'code' => '598',
                'iso' => 'UY',
            ],
            [
                'name' => [
                    'en' => 'Uzbekistan',
                    'ar' => 'أوزبكستان'
                ],
                'code' => '998',
                'iso' => 'UZ',
            ],
            [
                'name' => [
                    'en' => 'Vanuatu',
                    'ar' => 'فانواتو'
                ],
                'code' => '678',
                'iso' => 'VU',
            ],
            [
                'name' => [
                    'en' => 'Venezuela',
                    'ar' => 'فنزويلا'
                ],
                'code' => '58',
                'iso' => 'VE',
            ],
            [
                'name' => [
                    'en' => 'Viet Nam',
                    'ar' => 'فيتنام'
                ],
                'code' => '84',
                'iso' => 'VN',
            ],
            [
                'name' => [
                    'en' => 'Western Sahara',
                    'ar' => 'الصحراء الغربية'
                ],
                'code' => '212',
                'iso' => 'EH',
            ],
            [
                'name' => [
                    'en' => 'Yemen',
                    'ar' => 'اليمن'
                ],
                'code' => '967',
                'iso' => 'YE',
            ],
            [
                'name' => [
                    'en' => 'Zambia',
                    'ar' => 'زامبيا'
                ],
                'code' => '260',
                'iso' => 'ZM',
            ],
            [
                'name' => [
                    'en' => 'Zimbabwe',
                    'ar' => 'زيمبابوي'
                ],
                'code' => '263',
                'iso' => 'ZW',
            ],
        ];

        DB::table('countries')->insert($countries);
    }
}
