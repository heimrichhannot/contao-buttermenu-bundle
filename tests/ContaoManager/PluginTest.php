<?php

/*
 * Copyright (c) 2018 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\ButterMenuBundle\Test\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\DelegatingParser;
use Contao\ManagerPlugin\Config\ContainerBuilder;
use Contao\ManagerPlugin\PluginLoader;
use HeimrichHannot\ButterMenuBundle\ContaoButterMenuBundle;
use HeimrichHannot\ButterMenuBundle\ContaoManager\Plugin;
use HeimrichHannot\EncoreBundle\HeimrichHannotContaoEncoreBundle;
use PHPUnit\Framework\TestCase;
use PHPUnit_Framework_MockObject_Matcher_InvokedCount as InvokedCount;

/**
 * Test the plugin class
 * Class PluginTest.
 */
class PluginTest extends TestCase
{
    /**
     * @var ContainerBuilder
     */
    private $container;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->container = new ContainerBuilder($this->mockPluginLoader($this->never()), []);
    }

    /**
     * Tests the object instantiation.
     */
    public function testInstantiation()
    {
        static::assertInstanceOf('HeimrichHannot\ButterMenuBundle\ContaoManager\Plugin', new Plugin());
    }

    /**
     * Tests the bundle contao invocation.
     */
    public function testGetBundles()
    {
        $plugin = new Plugin();

        /** @var BundleConfig[] $bundles */
        $bundles = $plugin->getBundles(new DelegatingParser());

        static::assertCount(1, $bundles);
        static::assertInstanceOf(BundleConfig::class, $bundles[0]);
        static::assertEquals(ContaoButterMenuBundle::class, $bundles[0]->getName());
        static::assertEquals([ContaoCoreBundle::class, HeimrichHannotContaoEncoreBundle::class], $bundles[0]->getLoadAfter());
    }

    /**
     * Test extend configuration.
     */
    public function testAddExtensionConfig()
    {
        $plugin = new Plugin();

        $extensionConfigs = $plugin->getExtensionConfig('', [[]], $this->container);

        $this->assertNotEmpty($extensionConfigs);
    }

    /**
     * Test extend configuration with security config.
     */
    public function testAddEncoreConfig()
    {
        $plugin = new Plugin();

        $extensionConfigs = $plugin->getExtensionConfig('huh_encore', [[]], $this->container);

        $this->assertNotEmpty($extensionConfigs);
        $this->assertArrayHasKey('huh', $extensionConfigs);
        $this->assertArrayHasKey('encore', $extensionConfigs['huh']);
        $this->assertArrayHasKey('entries', $extensionConfigs['huh']['encore']);
        $this->assertArrayHasKey(0, $extensionConfigs['huh']['encore']['entries']);
        $this->assertEquals(['name' => 'contao-buttermenu-bundle', 'file' => 'vendor/heimrichhannot/contao-buttermenu-bundle/src/Resources/public/js/contao-buttermenu-bundle.es6.js'], $extensionConfigs['huh']['encore']['entries'][0]);
    }

    /**
     * Mocks the plugin loader.
     *
     * @param InvokedCount $expects
     * @param array        $plugins
     *
     * @return PluginLoader|\PHPUnit_Framework_MockObject_MockObject
     */
    private function mockPluginLoader(InvokedCount $expects, array $plugins = [])
    {
        $pluginLoader = $this->createMock(PluginLoader::class);

        $pluginLoader->expects($expects)->method('getInstancesOf')->with(PluginLoader::EXTENSION_PLUGINS)->willReturn($plugins);

        return $pluginLoader;
    }
}
