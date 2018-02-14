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
    public function testAllLanguagesAreTested()
    {
        $languages = glob(__DIR__ . '/../../src/Carbon/Lang/*.php');
        $tests = array_map(function ($file) {
            return strtolower(substr(basename($file), 0, -8));
        }, glob(__DIR__ . '/*Test.php'));
        $missingLanguages = count(array_filter($languages, function ($language) use ($tests) {
            $file = str_replace(array('_', '-'), '', strtolower(substr(basename($language), 0, -4)));
            if (!in_array($file, $tests)) {
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
    public function testDiffForHumansLocalizedIn'.$name.'()
    {
        Carbon::setLocale(\''.$locale.'\');

        $scope = $this;
        $this->wrapWithNonDstDate(function () use ($scope) {
            $d = Carbon::now()->subSecond();
            $scope->assertSame(\''.\Carbon\Carbon::now()->subSecond()->diffForHumans().'\', $d->diffForHumans());

            $d = Carbon::now()->subSeconds(2);
            $scope->assertSame(\''.\Carbon\Carbon::now()->subSeconds(2)->diffForHumans().'\', $d->diffForHumans());

            $d = Carbon::now()->subMinute();
            $scope->assertSame(\''.\Carbon\Carbon::now()->subMinute()->diffForHumans().'\', $d->diffForHumans());

            $d = Carbon::now()->subMinutes(2);
            $scope->assertSame(\''.\Carbon\Carbon::now()->subMinutes(2)->diffForHumans().'\', $d->diffForHumans());

            $d = Carbon::now()->subHour();
            $scope->assertSame(\''.\Carbon\Carbon::now()->subHour()->diffForHumans().'\', $d->diffForHumans());

            $d = Carbon::now()->subHours(2);
            $scope->assertSame(\''.\Carbon\Carbon::now()->subHours(2)->diffForHumans().'\', $d->diffForHumans());

            $d = Carbon::now()->subDay();
            $scope->assertSame(\''.\Carbon\Carbon::now()->subDay()->diffForHumans().'\', $d->diffForHumans());

            $d = Carbon::now()->subDays(2);
            $scope->assertSame(\''.\Carbon\Carbon::now()->subDays(2)->diffForHumans().'\', $d->diffForHumans());

            $d = Carbon::now()->subWeek();
            $scope->assertSame(\''.\Carbon\Carbon::now()->subWeek()->diffForHumans().'\', $d->diffForHumans());

            $d = Carbon::now()->subWeeks(2);
            $scope->assertSame(\''.\Carbon\Carbon::now()->subWeeks(2)->diffForHumans().'\', $d->diffForHumans());

            $d = Carbon::now()->subMonth();
            $scope->assertSame(\''.\Carbon\Carbon::now()->subMonth()->diffForHumans().'\', $d->diffForHumans());

            $d = Carbon::now()->subMonths(2);
            $scope->assertSame(\''.\Carbon\Carbon::now()->subMonths(2)->diffForHumans().'\', $d->diffForHumans());

            $d = Carbon::now()->subYear();
            $scope->assertSame(\''.\Carbon\Carbon::now()->subYear()->diffForHumans().'\', $d->diffForHumans());

            $d = Carbon::now()->subYears(2);
            $scope->assertSame(\''.\Carbon\Carbon::now()->subYears(2)->diffForHumans().'\', $d->diffForHumans());

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
