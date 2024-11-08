<?php

namespace HeimrichHannot\ButterMenuBundle\Asset;

use HeimrichHannot\ButterMenuBundle\HeimrichHannotButterMenuBundle;
use HeimrichHannot\EncoreContracts\EncoreEntry;
use HeimrichHannot\EncoreContracts\EncoreExtensionInterface;

class EncoreExtension implements EncoreExtensionInterface
{

    public function getBundle(): string
    {
        return HeimrichHannotButterMenuBundle::class;
    }

    public function getEntries(): array
    {
        return [
            EncoreEntry::create('contao-buttermenu-bundle', 'public/js/contao-buttermenu-bundle.es6.js'),
        ];
    }
}