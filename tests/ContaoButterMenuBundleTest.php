<?php

/*
 * Copyright (c) 2018 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\UtilsBundle\Tests;

use HeimrichHannot\ButterMenuBundle\ContaoButterMenuBundle;
use PHPUnit\Framework\TestCase;

class ContaoButterMenuBundleTest extends TestCase
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
