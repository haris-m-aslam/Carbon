<?php

/*
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Localization;

use Tests\AbstractTestCase;

class LanguagesCoverageTest extends AbstractTestCase
{
    public static $languages = array(
        'aa' => 'Afar',
        'ab' => 'Abkhazian',
        'ae' => 'Avestan',
        'af' => 'Afrikaans',
        'ak' => 'Akan',
        'am' => 'Amharic',
        'an' => 'Aragonese',
        'ar' => 'Arabic',
        'as' => 'Assamese',
        'av' => 'Avaric',
        'ay' => 'Aymara',
        'az' => 'Azerbaijani',
        'ba' => 'Bashkir',
        'be' => 'Belarusian',
        'bg' => 'Bulgarian',
        'bh' => 'Bihari',
        'bi' => 'Bislama',
        'bm' => 'Bambara',
        'bn' => 'Bengali',
        'bo' => 'Tibetan',
        'br' => 'Breton',
        'bs' => 'Bosnian',
        'ca' => 'Catalan',
        'ce' => 'Chechen',
        'ch' => 'Chamorro',
        'co' => 'Corsican',
        'cr' => 'Cree',
        'cs' => 'Czech',
        'cu' => 'OldChurchSlavonic',
        'cv' => 'Chuvash',
        'cy' => 'Welsh',
        'da' => 'Danish',
        'de' => 'German',
        'dv' => 'Divehi',
        'dz' => 'Dzongkha',
        'ee' => 'Ewe',
        'el' => 'Greek',
        'en' => 'English',
        'eo' => 'Esperanto',
        'es' => 'Spanish',
        'et' => 'Estonian',
        'eu' => 'Basque',
        'fa' => 'Persian',
        'ff' => 'Fulah',
        'fi' => 'Finnish',
        'fj' => 'Fijian',
        'fo' => 'Faroese',
        'fr' => 'French',
        'fy' => 'WesternFrisian',
        'ga' => 'Irish',
        'gd' => 'ScottishGaelic',
        'gl' => 'Galician',
        'gn' => 'Guarani',
        'gu' => 'Gujarati',
        'gv' => 'Manx',
        'ha' => 'Hausa',
        'he' => 'Hebrew',
        'hi' => 'Hindi',
        'ho' => 'HiriMotu',
        'hr' => 'Croatian',
        'ht' => 'Haitian',
        'hu' => 'Hungarian',
        'hy' => 'Armenian',
        'hz' => 'Herero',
        'ia' => 'Interlingua',
        'id' => 'Indonesian',
        'ie' => 'Interlingue',
        'ig' => 'Igbo',
        'ii' => 'SichuanYi',
        'ik' => 'Inupiaq',
        'io' => 'Ido',
        'is' => 'Icelandic',
        'it' => 'Italian',
        'iu' => 'Inuktitut',
        'ja' => 'Japanese',
        'jv' => 'Javanese',
        'ka' => 'Georgian',
        'kg' => 'Kongo',
        'ki' => 'Kikuyu',
        'kj' => 'Kwanyama',
        'kk' => 'Kazakh',
        'kl' => 'Kalaallisut',
        'km' => 'Khmer',
        'kn' => 'Kannada',
        'ko' => 'Korean',
        'kr' => 'Kanuri',
        'ks' => 'Kashmiri',
        'ku' => 'Kurdish',
        'kv' => 'Komi',
        'kw' => 'Cornish',
        'ky' => 'Kirghiz',
        'la' => 'Latin',
        'lb' => 'Luxembourgish',
        'lg' => 'Ganda',
        'li' => 'Limburgish',
        'ln' => 'Lingala',
        'lo' => 'Lao',
        'lt' => 'Lithuanian',
        'lu' => 'LubaKatanga',
        'lv' => 'Latvian',
        'mg' => 'Malagasy',
        'mh' => 'Marshallese',
        'mi' => 'Maori',
        'mk' => 'Macedonian',
        'ml' => 'Malayalam',
        'mn' => 'Mongolian',
        'mo' => 'Moldavian',
        'mr' => 'Marathi',
        'ms' => 'Malay',
        'mt' => 'Maltese',
        'my' => 'Burmese',
        'na' => 'Nauru',
        'nb' => 'NorwegianBokmal',
        'nd' => 'NorthNdebele',
        'ne' => 'Nepali',
        'ng' => 'Ndonga',
        'nl' => 'Dutch',
        'nn' => 'NorwegianNynorsk',
        'no' => 'Norwegian',
        'nr' => 'SouthNdebele',
        'nv' => 'Navajo',
        'ny' => 'Chichewa',
        'oc' => 'Occitan',
        'oj' => 'Ojibwa',
        'om' => 'Oromo',
        'or' => 'Oriya',
        'os' => 'Ossetian',
        'pa' => 'Panjabi',
        'pi' => 'Pali',
        'pl' => 'Polish',
        'ps' => 'Pashto',
        'pt' => 'Portuguese',
        'qu' => 'Quechua',
        'rc' => 'Reunionese',
        'rm' => 'Romansh',
        'rn' => 'Kirundi',
        'ro' => 'Romanian',
        'ru' => 'Russian',
        'rw' => 'Kinyarwanda',
        'sa' => 'Sanskrit',
        'sc' => 'Sardinian',
        'sd' => 'Sindhi',
        'se' => 'NorthernSami',
        'sg' => 'Sango',
        'sh' => 'SerboCroatian',
        'si' => 'Sinhalese',
        'sk' => 'Slovak',
        'sl' => 'Slovenian',
        'sm' => 'Samoan',
        'sn' => 'Shona',
        'so' => 'Somali',
        'sq' => 'Albanian',
        'sr' => 'Serbian',
        'ss' => 'Swati',
        'st' => 'Sotho',
        'su' => 'Sundanese',
        'sv' => 'Swedish',
        'sw' => 'Swahili',
        'ta' => 'Tamil',
        'te' => 'Telugu',
        'tg' => 'Tajik',
        'th' => 'Thai',
        'ti' => 'Tigrinya',
        'tk' => 'Turkmen',
        'tl' => 'Tagalog',
        'tn' => 'Tswana',
        'to' => 'Tonga',
        'tr' => 'Turkish',
        'ts' => 'Tsonga',
        'tt' => 'Tatar',
        'tw' => 'Twi',
        'ty' => 'Tahitian',
        'ug' => 'Uighur',
        'uk' => 'Ukrainian',
        'ur' => 'Urdu',
        'uz' => 'Uzbek',
        've' => 'Venda',
        'vi' => 'VietNamese',
        'vo' => 'Volapuk',
        'wa' => 'Walloon',
        'wo' => 'Wolof',
        'xh' => 'Xhosa',
        'yi' => 'Yiddish',
        'yo' => 'Yoruba',
        'za' => 'Zhuang',
        'zh' => 'Chinese',
        'zu' => 'Zulu',
    );

    public static function generateLanguageMethodCode($method, $numbers)
    {
        return implode('', array_map(function ($number) use ($method) {
            return '
            $d = Carbon::now()->'.$method.'('.$number.');
            $scope->assertSame(\''.\Carbon\Carbon::now()->$method($number)->diffForHumans().'\', $d->diffForHumans());'.
            "\n";
        }, $numbers));
    }

    /**
     * @group i
     */
    public function testAllLanguagesAreTested()
    {
        $languages = glob(__DIR__ . '/../../src/Carbon/Lang/*.php');
        $tests = array_map(function ($file) {
            return strtolower(substr(basename($file), 0, -8));
        }, glob(__DIR__ . '/*Test.php'));
        $missingLanguages = count(array_filter($languages, function ($language) use ($tests) {
            $file = str_replace(array('_', '-'), '', strtolower(substr(basename($language), 0, -4)));
            if (!in_array($file, $tests)) {
                $code = file_get_contents($language);
                preg_match_all('/\d+/', $code, $numbers, PREG_PATTERN_ORDER);
                $numbers = array_map('intval', $numbers[0]);
                $numbers[] = 1;
                $numbers[] = 2;
                $numbers = array_unique($numbers);
                sort($numbers, SORT_NUMERIC);
                $locale = substr(basename($language), 0, -4);
                $name = explode('_', strtolower($locale));
                $name = implode('', array_map('ucfirst', $name));
                \Carbon\Carbon::setLocale($locale);
                file_put_contents(__DIR__ . "/{$name}Test.php", '<?php

/*
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Localization;

use Carbon\Carbon;
use Tests\AbstractTestCase;

class '.$name.'Test extends AbstractTestCase
{
    public function testDiffForHumansLocalizedIn'.(strlen($name) === 2 ? LanguagesCoverageTest::$languages[strtolower($name)] : $name).'()
    {
        Carbon::setLocale(\''.$locale.'\');

        $scope = $this;
        $this->wrapWithNonDstDate(function () use ($scope) {'.
            LanguagesCoverageTest::generateLanguageMethodCode('subSeconds', $numbers).
            LanguagesCoverageTest::generateLanguageMethodCode('subMinutes', $numbers).
            LanguagesCoverageTest::generateLanguageMethodCode('subHours', $numbers).
            LanguagesCoverageTest::generateLanguageMethodCode('subDays', $numbers).
            LanguagesCoverageTest::generateLanguageMethodCode('subWeeks', $numbers).
            LanguagesCoverageTest::generateLanguageMethodCode('subMonths', $numbers).
            LanguagesCoverageTest::generateLanguageMethodCode('subYears', $numbers).'
            $d = Carbon::now()->addSecond();
            $scope->assertSame(\''.\Carbon\Carbon::now()->addSecond()->diffForHumans().'\', $d->diffForHumans());

            $d = Carbon::now()->addSecond();
            $d2 = Carbon::now();
            $scope->assertSame(\''.\Carbon\Carbon::now()->addSecond()->diffForHumans(\Carbon\Carbon::now()).'\', $d->diffForHumans($d2));
            $scope->assertSame(\''.\Carbon\Carbon::now()->diffForHumans(\Carbon\Carbon::now()->addSecond()).'\', $d2->diffForHumans($d));

            $scope->assertSame(\''.\Carbon\Carbon::now()->addSecond()->diffForHumans(\Carbon\Carbon::now(), true).'\', $d->diffForHumans($d2, true));
            $scope->assertSame(\''.\Carbon\Carbon::now()->diffForHumans(\Carbon\Carbon::now()->addSecond()->addSecond(), true).'\', $d2->diffForHumans($d->addSecond(), true));
        });
    }
}
');
            }

            return !in_array(
                str_replace(array('_', '-'), '', strtolower(substr(basename($language), 0, -4))),
                $tests
            );
        }));

        $this->assertSame(0, $missingLanguages);
    }
}
