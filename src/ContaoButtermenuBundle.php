<?php
/**
 * Copyright (c) 2018 Heimrich & Hannot GmbH
 *
 * @author  Rico Kaltofen <r.kaltofen@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

namespace HeimrichHannot\ButterMenuBundle;


use HeimrichHannot\ButterMenuBundle\DependencyInjection\ButterMenuExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ContaoButterMenuBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        return new ButterMenuExtension();
    }
}
