<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Http\Response\Cookies;

use UnitTester;

class GetDICest
{
    /**
     * Tests Phalcon\Http\Response\Cookies :: getDI()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function httpResponseCookiesGetDI(UnitTester $I)
    {
        $I->wantToTest('Http\Response\Cookies - getDI()');

        $I->skipTest('Need implementation');
    }
}
