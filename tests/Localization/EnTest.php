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

use Carbon\Carbon;
use Tests\AbstractTestCase;

class EnTest extends AbstractTestCase
{
    public function testDiffForHumansLocalizedInEnglish()
    {
        Carbon::setLocale('en');

        $scope = $this;
        $this->wrapWithNonDstDate(function () use ($scope) {
            $d = Carbon::now()->subSeconds(1);
            $scope->assertSame('1 second ago', $d->diffForHumans());

            $d = Carbon::now()->subSeconds(2);
            $scope->assertSame('2 seconds ago', $d->diffForHumans());

            $d = Carbon::now()->subMinutes(1);
            $scope->assertSame('1 minute ago', $d->diffForHumans());

            $d = Carbon::now()->subMinutes(2);
            $scope->assertSame('2 minutes ago', $d->diffForHumans());

            $d = Carbon::now()->subHours(1);
            $scope->assertSame('1 hour ago', $d->diffForHumans());

            $d = Carbon::now()->subHours(2);
            $scope->assertSame('2 hours ago', $d->diffForHumans());

            $d = Carbon::now()->subDays(1);
            $scope->assertSame('1 day ago', $d->diffForHumans());

            $d = Carbon::now()->subDays(2);
            $scope->assertSame('2 days ago', $d->diffForHumans());

            $d = Carbon::now()->subWeeks(1);
            $scope->assertSame('1 week ago', $d->diffForHumans());

            $d = Carbon::now()->subWeeks(2);
            $scope->assertSame('2 weeks ago', $d->diffForHumans());

            $d = Carbon::now()->subMonths(1);
            $scope->assertSame('1 month ago', $d->diffForHumans());

            $d = Carbon::now()->subMonths(2);
            $scope->assertSame('2 months ago', $d->diffForHumans());

            $d = Carbon::now()->subYears(1);
            $scope->assertSame('1 year ago', $d->diffForHumans());

            $d = Carbon::now()->subYears(2);
            $scope->assertSame('2 years ago', $d->diffForHumans());

            $d = Carbon::now()->addSecond();
            $scope->assertSame('1 second from now', $d->diffForHumans());

            $d = Carbon::now()->addSecond();
            $d2 = Carbon::now();
            $scope->assertSame('1 second after', $d->diffForHumans($d2));
            $scope->assertSame('1 second before', $d2->diffForHumans($d));

            $scope->assertSame('1 second', $d->diffForHumans($d2, true));
            $scope->assertSame('2 seconds', $d2->diffForHumans($d->addSecond(), true));
        });
    }

    public function testDiffForHumansUsingShortUnitsEnglish()
    {
        Carbon::setLocale('en');

        $scope = $this;
        $this->wrapWithNonDstDate(function () use ($scope) {
            $d = Carbon::now()->subSecond();
            $scope->assertSame('1s ago', $d->diffForHumans(null, false, true));

            $d = Carbon::now()->subSeconds(2);
            $scope->assertSame('2s ago', $d->diffForHumans(null, false, true));

            $d = Carbon::now()->subMinute();
            $scope->assertSame('1m ago', $d->diffForHumans(null, false, true));

            $d = Carbon::now()->subMinutes(2);
            $scope->assertSame('2m ago', $d->diffForHumans(null, false, true));

            $d = Carbon::now()->subHour();
            $scope->assertSame('1h ago', $d->diffForHumans(null, false, true));

            $d = Carbon::now()->subHours(2);
            $scope->assertSame('2h ago', $d->diffForHumans(null, false, true));

            $d = Carbon::now()->subDay();
            $scope->assertSame('1d ago', $d->diffForHumans(null, false, true));

            $d = Carbon::now()->subDays(2);
            $scope->assertSame('2d ago', $d->diffForHumans(null, false, true));

            $d = Carbon::now()->subWeek();
            $scope->assertSame('1w ago', $d->diffForHumans(null, false, true));

            $d = Carbon::now()->subWeeks(2);
            $scope->assertSame('2w ago', $d->diffForHumans(null, false, true));

            $d = Carbon::now()->subMonth();
            $scope->assertSame('1mo ago', $d->diffForHumans(null, false, true));

            $d = Carbon::now()->subMonths(2);
            $scope->assertSame('2mos ago', $d->diffForHumans(null, false, true));

            $d = Carbon::now()->subYear();
            $scope->assertSame('1yr ago', $d->diffForHumans(null, false, true));

            $d = Carbon::now()->subYears(2);
            $scope->assertSame('2yrs ago', $d->diffForHumans(null, false, true));

            $d = Carbon::now()->addSecond();
            $scope->assertSame('1s from now', $d->diffForHumans(null, false, true));

            $d = Carbon::now()->addSecond();
            $d2 = Carbon::now();
            $scope->assertSame('1s after', $d->diffForHumans($d2, false, true));
            $scope->assertSame('1s before', $d2->diffForHumans($d, false, true));

            $scope->assertSame('1s', $d->diffForHumans($d2, true, true));
            $scope->assertSame('2s', $d2->diffForHumans($d->addSecond(), true, true));
        });
    }
}
