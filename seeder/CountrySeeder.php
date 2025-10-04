<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('countries')->truncate();

        collect([
            [
                'name' => ['en' => 'Afghanistan', 'ar' => 'أفغانستان'],
                'iso' => 'AF',
                'code' => '+93',
            ],
            [
                'name' => ['en' => 'Albania', 'ar' => 'ألبانيا'],
                'iso' => 'AL',
                'code' => '+355',
            ],
            [
                'name' => ['en' => 'Algeria', 'ar' => 'الجزائر'],
                'iso' => 'DZ',
                'code' => '+213',
            ],
            [
                'name' => ['en' => 'Andorra', 'ar' => 'أندورا'],
                'iso' => 'AD',
                'code' => '+376',
            ],
            [
                'name' => ['en' => 'Angola', 'ar' => 'أنغولا'],
                'iso' => 'AO',
                'code' => '+244',
            ],
            [
                'name' => ['en' => 'Antigua and Barbuda', 'ar' => 'أنتيغوا وبربودا'],
                'iso' => 'AG',
                'code' => '+1-268',
            ],
            [
                'name' => ['en' => 'Argentina', 'ar' => 'الأرجنتين'],
                'iso' => 'AR',
                'code' => '+54',
            ],
            [
                'name' => ['en' => 'Armenia', 'ar' => 'أرمينيا'],
                'iso' => 'AM',
                'code' => '+374',
            ],
            [
                'name' => ['en' => 'Australia', 'ar' => 'أستراليا'],
                'iso' => 'AU',
                'code' => '+61',
            ],
            [
                'name' => ['en' => 'Austria', 'ar' => 'النمسا'],
                'iso' => 'AT',
                'code' => '+43',
            ],
            [
                'name' => ['en' => 'Azerbaijan', 'ar' => 'أذربيجان'],
                'iso' => 'AZ',
                'code' => '+994',
            ],
            [
                'name' => ['en' => 'Bahamas', 'ar' => 'الباهاما'],
                'iso' => 'BS',
                'code' => '+1-242',
            ],
            [
                'name' => ['en' => 'Bahrain', 'ar' => 'البحرين'],
                'iso' => 'BH',
                'code' => '+973',
            ],
            [
                'name' => ['en' => 'Bangladesh', 'ar' => 'بنغلاديش'],
                'iso' => 'BD',
                'code' => '+880',
            ],
            [
                'name' => ['en' => 'Barbados', 'ar' => 'بربادوس'],
                'iso' => 'BB',
                'code' => '+1-246',
            ],
            [
                'name' => ['en' => 'Belarus', 'ar' => 'بيلاروسيا'],
                'iso' => 'BY',
                'code' => '+375',
            ],
            [
                'name' => ['en' => 'Belgium', 'ar' => 'بلجيكا'],
                'iso' => 'BE',
                'code' => '+32',
            ],
            [
                'name' => ['en' => 'Belize', 'ar' => 'بليز'],
                'iso' => 'BZ',
                'code' => '+501',
            ],
            [
                'name' => ['en' => 'Benin', 'ar' => 'بنين'],
                'iso' => 'BJ',
                'code' => '+229',
            ],
            [
                'name' => ['en' => 'Bhutan', 'ar' => 'بوتان'],
                'iso' => 'BT',
                'code' => '+975',
            ],
            [
                'name' => ['en' => 'Bolivia', 'ar' => 'بوليفيا'],
                'iso' => 'BO',
                'code' => '+591',
            ],
            [
                'name' => ['en' => 'Bosnia and Herzegovina', 'ar' => 'البوسنة والهرسك'],
                'iso' => 'BA',
                'code' => '+387',
            ],
            [
                'name' => ['en' => 'Botswana', 'ar' => 'بوتسوانا'],
                'iso' => 'BW',
                'code' => '+267',
            ],
            [
                'name' => ['en' => 'Brazil', 'ar' => 'البرازيل'],
                'iso' => 'BR',
                'code' => '+55',
            ],
            [
                'name' => ['en' => 'Brunei', 'ar' => 'بروناي'],
                'iso' => 'BN',
                'code' => '+673',
            ],
            [
                'name' => ['en' => 'Bulgaria', 'ar' => 'بلغاريا'],
                'iso' => 'BG',
                'code' => '+359',
            ],
            [
                'name' => ['en' => 'Burkina Faso', 'ar' => 'بوركينا فاسو'],
                'iso' => 'BF',
                'code' => '+226',
            ],
            [
                'name' => ['en' => 'Burundi', 'ar' => 'بوروندي'],
                'iso' => 'BI',
                'code' => '+257',
            ],
            [
                'name' => ['en' => 'Cabo Verde', 'ar' => 'الرأس الأخضر'],
                'iso' => 'CV',
                'code' => '+238',
            ],
            [
                'name' => ['en' => 'Cambodia', 'ar' => 'كمبوديا'],
                'iso' => 'KH',
                'code' => '+855',
            ],
            [
                'name' => ['en' => 'Cameroon', 'ar' => 'الكاميرون'],
                'iso' => 'CM',
                'code' => '+237',
            ],
            [
                'name' => ['en' => 'Canada', 'ar' => 'كندا'],
                'iso' => 'CA',
                'code' => '+1',
            ],
            [
                'name' => ['en' => 'Central African Republic', 'ar' => 'جمهورية أفريقيا الوسطى'],
                'iso' => 'CF',
                'code' => '+236',
            ],
            [
                'name' => ['en' => 'Chad', 'ar' => 'تشاد'],
                'iso' => 'TD',
                'code' => '+235',
            ],
            [
                'name' => ['en' => 'Chile', 'ar' => 'تشيلي'],
                'iso' => 'CL',
                'code' => '+56',
            ],
            [
                'name' => ['en' => 'China', 'ar' => 'الصين'],
                'iso' => 'CN',
                'code' => '+86',
            ],
            [
                'name' => ['en' => 'Colombia', 'ar' => 'كولومبيا'],
                'iso' => 'CO',
                'code' => '+57',
            ],
            [
                'name' => ['en' => 'Comoros', 'ar' => 'جزر القمر'],
                'iso' => 'KM',
                'code' => '+269',
            ],
            [
                'name' => ['en' => 'Costa Rica', 'ar' => 'كوستاريكا'],
                'iso' => 'CR',
                'code' => '+506',
            ],
            [
                'name' => ['en' => 'Croatia', 'ar' => 'كرواتيا'],
                'iso' => 'HR',
                'code' => '+385',
            ],
            [
                'name' => ['en' => 'Cuba', 'ar' => 'كوبا'],
                'iso' => 'CU',
                'code' => '+53',
            ],
            [
                'name' => ['en' => 'Cyprus', 'ar' => 'قبرص'],
                'iso' => 'CY',
                'code' => '+357',
            ],
            [
                'name' => ['en' => 'Czechia', 'ar' => 'التشيك'],
                'iso' => 'CZ',
                'code' => '+420',
            ],
            [
                'name' => ['en' => 'Denmark', 'ar' => 'الدنمارك'],
                'iso' => 'DK',
                'code' => '+45',
            ],
            [
                'name' => ['en' => 'Djibouti', 'ar' => 'جيبوتي'],
                'iso' => 'DJ',
                'code' => '+253',
            ],
            [
                'name' => ['en' => 'Dominica', 'ar' => 'دومينيكا'],
                'iso' => 'DM',
                'code' => '+1-767',
            ],
            [
                'name' => ['en' => 'Dominican Republic', 'ar' => 'جمهورية الدومينيكان'],
                'iso' => 'DO',
                'code' => '+1-809',
            ],
            [
                'name' => ['en' => 'Ecuador', 'ar' => 'الإكوادور'],
                'iso' => 'EC',
                'code' => '+593',
            ],
            [
                'name' => ['en' => 'Egypt', 'ar' => 'مصر'],
                'iso' => 'EG',
                'code' => '+20',
            ],
            [
                'name' => ['en' => 'El Salvador', 'ar' => 'السلفادور'],
                'iso' => 'SV',
                'code' => '+503',
            ],
            [
                'name' => ['en' => 'Equatorial Guinea', 'ar' => 'غينيا الاستوائية'],
                'iso' => 'GQ',
                'code' => '+240',
            ],
            [
                'name' => ['en' => 'Eritrea', 'ar' => 'إريتريا'],
                'iso' => 'ER',
                'code' => '+291',
            ],
            [
                'name' => ['en' => 'Estonia', 'ar' => 'إستونيا'],
                'iso' => 'EE',
                'code' => '+372',
            ],
            [
                'name' => ['en' => 'Eswatini', 'ar' => 'إسواتيني'],
                'iso' => 'SZ',
                'code' => '+268',
            ],
            [
                'name' => ['en' => 'Ethiopia', 'ar' => 'إثيوبيا'],
                'iso' => 'ET',
                'code' => '+251',
            ],
            [
                'name' => ['en' => 'Fiji', 'ar' => 'فيجي'],
                'iso' => 'FJ',
                'code' => '+679',
            ],
            [
                'name' => ['en' => 'Finland', 'ar' => 'فنلندا'],
                'iso' => 'FI',
                'code' => '+358',
            ],
            [
                'name' => ['en' => 'France', 'ar' => 'فرنسا'],
                'iso' => 'FR',
                'code' => '+33',
            ],
            [
                'name' => ['en' => 'Gabon', 'ar' => 'الغابون'],
                'iso' => 'GA',
                'code' => '+241',
            ],
            [
                'name' => ['en' => 'Gambia', 'ar' => 'غامبيا'],
                'iso' => 'GM',
                'code' => '+220',
            ],
            [
                'name' => ['en' => 'Georgia', 'ar' => 'جورجيا'],
                'iso' => 'GE',
                'code' => '+995',
            ],
            [
                'name' => ['en' => 'Germany', 'ar' => 'ألمانيا'],
                'iso' => 'DE',
                'code' => '+49',
            ],
            [
                'name' => ['en' => 'Ghana', 'ar' => 'غانا'],
                'iso' => 'GH',
                'code' => '+233',
            ],
            [
                'name' => ['en' => 'Greece', 'ar' => 'اليونان'],
                'iso' => 'GR',
                'code' => '+30',
            ],
            [
                'name' => ['en' => 'Grenada', 'ar' => 'غرينادا'],
                'iso' => 'GD',
                'code' => '+1-473',
            ],
            [
                'name' => ['en' => 'Guatemala', 'ar' => 'غواتيمالا'],
                'iso' => 'GT',
                'code' => '+502',
            ],
            [
                'name' => ['en' => 'Guinea', 'ar' => 'غينيا'],
                'iso' => 'GN',
                'code' => '+224',
            ],
            [
                'name' => ['en' => 'Guinea-Bissau', 'ar' => 'غينيا بيساو'],
                'iso' => 'GW',
                'code' => '+245',
            ],
            [
                'name' => ['en' => 'Guyana', 'ar' => 'غيانا'],
                'iso' => 'GY',
                'code' => '+592',
            ],
            [
                'name' => ['en' => 'Haiti', 'ar' => 'هايتي'],
                'iso' => 'HT',
                'code' => '+509',
            ],
            [
                'name' => ['en' => 'Honduras', 'ar' => 'هندوراس'],
                'iso' => 'HN',
                'code' => '+504',
            ],
            [
                'name' => ['en' => 'Hungary', 'ar' => 'المجر'],
                'iso' => 'HU',
                'code' => '+36',
            ],
            [
                'name' => ['en' => 'Iceland', 'ar' => 'آيسلندا'],
                'iso' => 'IS',
                'code' => '+354',
            ],
            [
                'name' => ['en' => 'India', 'ar' => 'الهند'],
                'iso' => 'IN',
                'code' => '+91',
            ],
            [
                'name' => ['en' => 'Indonesia', 'ar' => 'إندونيسيا'],
                'iso' => 'ID',
                'code' => '+62',
            ],
            [
                'name' => ['en' => 'Iran', 'ar' => 'إيران'],
                'iso' => 'IR',
                'code' => '+98',
            ],
            [
                'name' => ['en' => 'Iraq', 'ar' => 'العراق'],
                'iso' => 'IQ',
                'code' => '+964',
            ],
            [
                'name' => ['en' => 'Ireland', 'ar' => 'أيرلندا'],
                'iso' => 'IE',
                'code' => '+353',
            ],
            [
                'name' => ['en' => 'Israel', 'ar' => 'إسرائيل'],
                'iso' => 'IL',
                'code' => '+972',
            ],
            [
                'name' => ['en' => 'Italy', 'ar' => 'إيطاليا'],
                'iso' => 'IT',
                'code' => '+39',
            ],
            [
                'name' => ['en' => 'Jamaica', 'ar' => 'جامايكا'],
                'iso' => 'JM',
                'code' => '+1-876',
            ],
            [
                'name' => ['en' => 'Japan', 'ar' => 'اليابان'],
                'iso' => 'JP',
                'code' => '+81',
            ],
            [
                'name' => ['en' => 'Jordan', 'ar' => 'الأردن'],
                'iso' => 'JO',
                'code' => '+962',
            ],
            [
                'name' => ['en' => 'Kazakhstan', 'ar' => 'كازاخستان'],
                'iso' => 'KZ',
                'code' => '+7',
            ],
            [
                'name' => ['en' => 'Kenya', 'ar' => 'كينيا'],
                'iso' => 'KE',
                'code' => '+254',
            ],
            [
                'name' => ['en' => 'Kiribati', 'ar' => 'كيريباتي'],
                'iso' => 'KI',
                'code' => '+686',
            ],
            [
                'name' => ['en' => 'Kuwait', 'ar' => 'الكويت'],
                'iso' => 'KW',
                'code' => '+965',
            ],
            [
                'name' => ['en' => 'Kyrgyzstan', 'ar' => 'قيرغيزستان'],
                'iso' => 'KG',
                'code' => '+996',
            ],
            [
                'name' => ['en' => 'Laos', 'ar' => 'لاوس'],
                'iso' => 'LA',
                'code' => '+856',
            ],
            [
                'name' => ['en' => 'Latvia', 'ar' => 'لاتفيا'],
                'iso' => 'LV',
                'code' => '+371',
            ],
            [
                'name' => ['en' => 'Lebanon', 'ar' => 'لبنان'],
                'iso' => 'LB',
                'code' => '+961',
            ],
            [
                'name' => ['en' => 'Lesotho', 'ar' => 'ليسوتو'],
                'iso' => 'LS',
                'code' => '+266',
            ],
            [
                'name' => ['en' => 'Liberia', 'ar' => 'ليبيريا'],
                'iso' => 'LR',
                'code' => '+231',
            ],
            [
                'name' => ['en' => 'Libya', 'ar' => 'ليبيا'],
                'iso' => 'LY',
                'code' => '+218',
            ],
            [
                'name' => ['en' => 'Liechtenstein', 'ar' => 'ليختنشتاين'],
                'iso' => 'LI',
                'code' => '+423',
            ],
            [
                'name' => ['en' => 'Lithuania', 'ar' => 'ليتوانيا'],
                'iso' => 'LT',
                'code' => '+370',
            ],
            [
                'name' => ['en' => 'Luxembourg', 'ar' => 'لوكسمبورغ'],
                'iso' => 'LU',
                'code' => '+352',
            ],
            [
                'name' => ['en' => 'Madagascar', 'ar' => 'مدغشقر'],
                'iso' => 'MG',
                'code' => '+261',
            ],
            [
                'name' => ['en' => 'Malawi', 'ar' => 'مالاوي'],
                'iso' => 'MW',
                'code' => '+265',
            ],
            [
                'name' => ['en' => 'Malaysia', 'ar' => 'ماليزيا'],
                'iso' => 'MY',
                'code' => '+60',
            ],
            [
                'name' => ['en' => 'Maldives', 'ar' => 'المالديف'],
                'iso' => 'MV',
                'code' => '+960',
            ],
            [
                'name' => ['en' => 'Mali', 'ar' => 'مالي'],
                'iso' => 'ML',
                'code' => '+223',
            ],
            [
                'name' => ['en' => 'Malta', 'ar' => 'مالطا'],
                'iso' => 'MT',
                'code' => '+356',
            ],
            [
                'name' => ['en' => 'Marshall Islands', 'ar' => 'جزر مارشال'],
                'iso' => 'MH',
                'code' => '+692',
            ],
            [
                'name' => ['en' => 'Mauritania', 'ar' => 'موريتانيا'],
                'iso' => 'MR',
                'code' => '+222',
            ],
            [
                'name' => ['en' => 'Mauritius', 'ar' => 'موريشيوس'],
                'iso' => 'MU',
                'code' => '+230',
            ],
            [
                'name' => ['en' => 'Mexico', 'ar' => 'المكسيك'],
                'iso' => 'MX',
                'code' => '+52',
            ],
            [
                'name' => ['en' => 'Micronesia', 'ar' => 'ميكرونيسيا'],
                'iso' => 'FM',
                'code' => '+691',
            ],
            [
                'name' => ['en' => 'Moldova', 'ar' => 'مولدوفا'],
                'iso' => 'MD',
                'code' => '+373',
            ],
            [
                'name' => ['en' => 'Monaco', 'ar' => 'موناكو'],
                'iso' => 'MC',
                'code' => '+377',
            ],
            [
                'name' => ['en' => 'Mongolia', 'ar' => 'منغوليا'],
                'iso' => 'MN',
                'code' => '+976',
            ],
            [
                'name' => ['en' => 'Montenegro', 'ar' => 'الجبل الأسود'],
                'iso' => 'ME',
                'code' => '+382',
            ],
            [
                'name' => ['en' => 'Morocco', 'ar' => 'المغرب'],
                'iso' => 'MA',
                'code' => '+212',
            ],
            [
                'name' => ['en' => 'Mozambique', 'ar' => 'موزمبيق'],
                'iso' => 'MZ',
                'code' => '+258',
            ],
            [
                'name' => ['en' => 'Myanmar', 'ar' => 'ميانمار'],
                'iso' => 'MM',
                'code' => '+95',
            ],
            [
                'name' => ['en' => 'Namibia', 'ar' => 'ناميبيا'],
                'iso' => 'NA',
                'code' => '+264',
            ],
            [
                'name' => ['en' => 'Nauru', 'ar' => 'ناورو'],
                'iso' => 'NR',
                'code' => '+674',
            ],
            [
                'name' => ['en' => 'Nepal', 'ar' => 'نيبال'],
                'iso' => 'NP',
                'code' => '+977',
            ],
            [
                'name' => ['en' => 'Netherlands', 'ar' => 'هولندا'],
                'iso' => 'NL',
                'code' => '+31',
            ],
            [
                'name' => ['en' => 'New Zealand', 'ar' => 'نيوزيلندا'],
                'iso' => 'NZ',
                'code' => '+64',
            ],
            [
                'name' => ['en' => 'Nicaragua', 'ar' => 'نيكاراغوا'],
                'iso' => 'NI',
                'code' => '+505',
            ],
            [
                'name' => ['en' => 'Niger', 'ar' => 'النيجر'],
                'iso' => 'NE',
                'code' => '+227',
            ],
            [
                'name' => ['en' => 'Nigeria', 'ar' => 'نيجيريا'],
                'iso' => 'NG',
                'code' => '+234',
            ],
            [
                'name' => ['en' => 'North Korea', 'ar' => 'كوريا الشمالية'],
                'iso' => 'KP',
                'code' => '+850',
            ],
            [
                'name' => ['en' => 'North Macedonia', 'ar' => 'مقدونيا الشمالية'],
                'iso' => 'MK',
                'code' => '+389',
            ],
            [
                'name' => ['en' => 'Norway', 'ar' => 'النرويج'],
                'iso' => 'NO',
                'code' => '+47',
            ],
            [
                'name' => ['en' => 'Oman', 'ar' => 'عُمان'],
                'iso' => 'OM',
                'code' => '+968',
            ],
            [
                'name' => ['en' => 'Pakistan', 'ar' => 'باكستان'],
                'iso' => 'PK',
                'code' => '+92',
            ],
            [
                'name' => ['en' => 'Palau', 'ar' => 'بالاو'],
                'iso' => 'PW',
                'code' => '+680',
            ],
            [
                'name' => ['en' => 'Palestine', 'ar' => 'فلسطين'],
                'iso' => 'PS',
                'code' => '+970',
            ],
            [
                'name' => ['en' => 'Panama', 'ar' => 'بنما'],
                'iso' => 'PA',
                'code' => '+507',
            ],
            [
                'name' => ['en' => 'Papua New Guinea', 'ar' => 'بابوا غينيا الجديدة'],
                'iso' => 'PG',
                'code' => '+675',
            ],
            [
                'name' => ['en' => 'Paraguay', 'ar' => 'باراغواي'],
                'iso' => 'PY',
                'code' => '+595',
            ],
            [
                'name' => ['en' => 'Peru', 'ar' => 'بيرو'],
                'iso' => 'PE',
                'code' => '+51',
            ],
            [
                'name' => ['en' => 'Philippines', 'ar' => 'الفلبين'],
                'iso' => 'PH',
                'code' => '+63',
            ],
            [
                'name' => ['en' => 'Poland', 'ar' => 'بولندا'],
                'iso' => 'PL',
                'code' => '+48',
            ],
            [
                'name' => ['en' => 'Portugal', 'ar' => 'البرتغال'],
                'iso' => 'PT',
                'code' => '+351',
            ],
            [
                'name' => ['en' => 'Qatar', 'ar' => 'قطر'],
                'iso' => 'QA',
                'code' => '+974',
            ],
            [
                'name' => ['en' => 'Romania', 'ar' => 'رومانيا'],
                'iso' => 'RO',
                'code' => '+40',
            ],
            [
                'name' => ['en' => 'Russia', 'ar' => 'روسيا'],
                'iso' => 'RU',
                'code' => '+7',
            ],
            [
                'name' => ['en' => 'Rwanda', 'ar' => 'رواندا'],
                'iso' => 'RW',
                'code' => '+250',
            ],
            [
                'name' => ['en' => 'Saint Kitts and Nevis', 'ar' => 'سانت كيتس ونيفيس'],
                'iso' => 'KN',
                'code' => '+1-869',
            ],
            [
                'name' => ['en' => 'Saint Lucia', 'ar' => 'سانت لوسيا'],
                'iso' => 'LC',
                'code' => '+1-758',
            ],
            [
                'name' => ['en' => 'Saint Vincent and the Grenadines', 'ar' => 'سانت فنسنت وجزر غرينادين'],
                'iso' => 'VC',
                'code' => '+1-784',
            ],
            [
                'name' => ['en' => 'Samoa', 'ar' => 'ساموا'],
                'iso' => 'WS',
                'code' => '+685',
            ],
            [
                'name' => ['en' => 'San Marino', 'ar' => 'سان مارينو'],
                'iso' => 'SM',
                'code' => '+378',
            ],
            [
                'name' => ['en' => 'Sao Tome and Principe', 'ar' => 'ساو تومي وبرينسيب'],
                'iso' => 'ST',
                'code' => '+239',
            ],
            [
                'name' => ['en' => 'Saudi Arabia', 'ar' => 'السعودية'],
                'iso' => 'SA',
                'code' => '+966',
            ],
            [
                'name' => ['en' => 'Senegal', 'ar' => 'السنغال'],
                'iso' => 'SN',
                'code' => '+221',
            ],
            [
                'name' => ['en' => 'Serbia', 'ar' => 'صربيا'],
                'iso' => 'RS',
                'code' => '+381',
            ],
            [
                'name' => ['en' => 'Seychelles', 'ar' => 'سيشل'],
                'iso' => 'SC',
                'code' => '+248',
            ],
            [
                'name' => ['en' => 'Sierra Leone', 'ar' => 'سيراليون'],
                'iso' => 'SL',
                'code' => '+232',
            ],
            [
                'name' => ['en' => 'Singapore', 'ar' => 'سنغافورة'],
                'iso' => 'SG',
                'code' => '+65',
            ],
            [
                'name' => ['en' => 'Suriname', 'ar' => 'سورينام'],
                'iso' => 'SR',
                'code' => '597',
            ],
            [
                'name' => ['en' => 'Svalbard and Jan Mayen', 'ar' => 'سفالبارد ويان ماين'],
                'iso' => 'SJ',
                'code' => '47',
            ],
            [
                'name' => ['en' => 'Sweden', 'ar' => 'السويد'],
                'iso' => 'SE',
                'code' => '46',
            ],
            [
                'name' => ['en' => 'Switzerland', 'ar' => 'سويسرا'],
                'iso' => 'CH',
                'code' => '41',
            ],
            [
                'name' => ['en' => 'Syrian Arab Republic', 'ar' => 'سوريا'],
                'iso' => 'SY',
                'code' => '963',
            ],
            [
                'name' => ['en' => 'Taiwan', 'ar' => 'تايوان'],
                'iso' => 'TW',
                'code' => '886',
            ],
            [
                'name' => ['en' => 'Tajikistan', 'ar' => 'طاجيكستان'],
                'iso' => 'TJ',
                'code' => '992',
            ],
            [
                'name' => ['en' => 'Tanzania, United Republic of', 'ar' => 'تنزانيا'],
                'iso' => 'TZ',
                'code' => '255',
            ],
            [
                'name' => ['en' => 'Thailand', 'ar' => 'تايلاند'],
                'iso' => 'TH',
                'code' => '66',
            ],
            [
                'name' => ['en' => 'Timor-Leste', 'ar' => 'تيمور الشرقية'],
                'iso' => 'TL',
                'code' => '670',
            ],
            [
                'name' => ['en' => 'Togo', 'ar' => 'توغو'],
                'iso' => 'TG',
                'code' => '228',
            ],
            [
                'name' => ['en' => 'Tokelau', 'ar' => 'توكيلاو'],
                'iso' => 'TK',
                'code' => '690',
            ],
            [
                'name' => ['en' => 'Tonga', 'ar' => 'تونغا'],
                'iso' => 'TO',
                'code' => '676',
            ],
            [
                'name' => ['en' => 'Trinidad and Tobago', 'ar' => 'ترينيداد وتوباغو'],
                'iso' => 'TT',
                'code' => '1868',
            ],
            [
                'name' => ['en' => 'Tunisia', 'ar' => 'تونس'],
                'iso' => 'TN',
                'code' => '216',
            ],
            [
                'name' => ['en' => 'Turkey', 'ar' => 'تركيا'],
                'iso' => 'TR',
                'code' => '90',
            ],
            [
                'name' => ['en' => 'Turkmenistan', 'ar' => 'تركمانستان'],
                'iso' => 'TM',
                'code' => '993',
            ],
            [
                'name' => ['en' => 'Turks and Caicos Islands', 'ar' => 'جزر تركس وكايكوس'],
                'iso' => 'TC',
                'code' => '1649',
            ],
            [
                'name' => ['en' => 'Tuvalu', 'ar' => 'توفالو'],
                'iso' => 'TV',
                'code' => '688',
            ],
            [
                'name' => ['en' => 'Uganda', 'ar' => 'أوغندا'],
                'iso' => 'UG',
                'code' => '256',
            ],
            [
                'name' => ['en' => 'Ukraine', 'ar' => 'أوكرانيا'],
                'iso' => 'UA',
                'code' => '380',
            ],
            [
                'name' => ['en' => 'United Arab Emirates', 'ar' => 'الإمارات العربية المتحدة'],
                'iso' => 'AE',
                'code' => '971',
            ],
            [
                'name' => ['en' => 'United Kingdom', 'ar' => 'المملكة المتحدة'],
                'iso' => 'GB',
                'code' => '44',
            ],
            [
                'name' => ['en' => 'United States', 'ar' => 'الولايات المتحدة'],
                'iso' => 'US',
                'code' => '1',
            ],
            [
                'name' => ['en' => 'Uruguay', 'ar' => 'أوروغواي'],
                'iso' => 'UY',
                'code' => '598',
            ],
            [
                'name' => ['en' => 'Uzbekistan', 'ar' => 'أوزبكستان'],
                'iso' => 'UZ',
                'code' => '998',
            ],
            [
                'name' => ['en' => 'Vanuatu', 'ar' => 'فانواتو'],
                'iso' => 'VU',
                'code' => '678',
            ],
            [
                'name' => ['en' => 'Venezuela', 'ar' => 'فنزويلا'],
                'iso' => 'VE',
                'code' => '58',
            ],
            [
                'name' => ['en' => 'Viet Nam', 'ar' => 'فيتنام'],
                'iso' => 'VN',
                'code' => '84',
            ],
            [
                'name' => ['en' => 'Western Sahara', 'ar' => 'الصحراء الغربية'],
                'iso' => 'EH',
                'code' => '212',
            ],
            [
                'name' => ['en' => 'Yemen', 'ar' => 'اليمن'],
                'iso' => 'YE',
                'code' => '967',
            ],
            [
                'name' => ['en' => 'Zambia', 'ar' => 'زامبيا'],
                'iso' => 'ZM',
                'code' => '260',
            ],
            [
                'name' => ['en' => 'Zimbabwe', 'ar' => 'زيمبابوي'],
                'iso' => 'ZW',
                'code' => '263',
            ],
        ])->each(fn($country) => Country::create($country));
    }
}
