<?php

/*
 * Copyright (c) 2022 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\ButterMenuBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\FrontendTemplate;
use HeimrichHannot\EncoreBundle\Asset\FrontendAsset;

/**
 * @Hook("parseFrontendTemplate")
 */
class ParseFrontendTemplateListener
{
    private FrontendAsset $encoreAsset;

    public function __construct(FrontendAsset $encoreAsset)
    {
        $this->encoreAsset = $encoreAsset;
    }

    public function __invoke(string $buffer, string $templateName, FrontendTemplate $template): string
    {
        if (str_starts_with($templateName, 'nav_buttermenu_')) {
            $this->encoreAsset->addActiveEntrypoint('contao-buttermenu-bundle');
        }

        return $buffer;
    }
}
