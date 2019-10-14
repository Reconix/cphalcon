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

namespace Phalcon\Test\Integration\Paginator\Adapter\Model;

use IntegrationTester;

/**
 * Class SetRepositoryCest
 */
class SetRepositoryCest
{
    /**
     * Tests Phalcon\Paginator\Adapter\Model :: setRepository()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function paginatorAdapterModelSetRepository(IntegrationTester $I)
    {
        $I->wantToTest('Paginator\Adapter\Model - setRepository()');
        $I->skipTest('Need implementation');
    }
}
