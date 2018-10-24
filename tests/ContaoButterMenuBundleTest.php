<?php

/*
 * Copyright (c) 2018 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\ButterMenuBundle\Tests;

use Contao\TestCase\ContaoTestCase;
use HeimrichHannot\ButterMenuBundle\ContaoButterMenuBundle;

class ContaoButterMenuBundleTest extends ContaoTestCase
{
    /**
     * Tests the object instantiation.
     */
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoButterMenuBundle();
        $this->assertInstanceOf(ContaoButterMenuBundle::class, $bundle);
    }
}
