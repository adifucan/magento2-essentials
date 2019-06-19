<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Essentials\BlockRendering\Controller\Template;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\LayoutInterface;

/**
 * Creates a custom template block and a custom template file that displays "Hello World" and renders this block.
 */
class Index extends Action implements HttpGetActionInterface
{
    /**
     * @var LayoutInterface
     */
    private $layout;

    /**
     * @param Context $context
     * @param LayoutInterface $layout
     */
    public function __construct(
        Context $context,
        LayoutInterface $layout
    ) {
        parent::__construct($context);
        $this->layout = $layout;
    }

    /**
     * @return ResponseInterface|ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Framework\View\Element\Text $block */
        $block = $this->layout->createBlock(
            \Essentials\BlockRendering\Block\HelloWorld::class,
            'hello.world.template.block'
        );

        /** @var \Magento\Framework\Controller\Result\Raw $resultRaw */
        $resultRaw = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $resultRaw->setContents($block->toHtml());

        return $resultRaw;
    }
}
