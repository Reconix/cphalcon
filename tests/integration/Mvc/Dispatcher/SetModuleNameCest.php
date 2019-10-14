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

namespace Phalcon\Test\Integration\Mvc\Dispatcher;

use IntegrationTester;

/**
 * Class SetModuleNameCest
 */
class SetModuleNameCest
{
    /**
     * Tests Phalcon\Mvc\Dispatcher :: setModuleName()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function mvcDispatcherSetModuleName(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Dispatcher - setModuleName()');
        $I->skipTest('Need implementation');
    }
}
