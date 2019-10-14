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

namespace Phalcon\Test\Unit\Loader;

use UnitTester;

class RegisterCest
{
    /**
     * Tests Phalcon\Loader :: register()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function loaderRegister(UnitTester $I)
    {
        $I->wantToTest('Loader - register()');

        $I->skipTest('Need implementation');
    }
}
