<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Mvc\Model;

use IntegrationTester;

class UnderscoreCallCest
{
    /**
     * Tests Phalcon\Mvc\Model :: __call()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function mvcModelCall(IntegrationTester $I)
    {
        $I->wantToTest("Mvc\Model - __call()");
        $I->skipTest('Need implementation');
    }
}
