<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Essentials\ClassPreference\Block\Html;

/**
 * Html page footer block
 */
class Footer extends \Magento\Theme\Block\Html\Footer
{
    /**
     * @inheritdoc
     */
    public function getCopyright(): string
    {
        $copyright = parent::getCopyright();

        return '| ' . $copyright . ' |';
    }
}
