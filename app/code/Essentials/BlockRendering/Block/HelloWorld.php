<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Essentials\BlockRendering\Block;

use Magento\Framework\View\Element\Template;

/**
 * Block sets template.
 */
class HelloWorld extends Template
{
    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('Essentials_BlockRendering::hello_world.phtml');
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return 'Hello World from template!';
    }
}
