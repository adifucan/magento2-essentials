<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Essentials\Layout\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Controller\ResultFactory;

/**
 * Action that creates a page with the text "Hello World" in the content container using layout and a template.
 */
class Index extends Action implements HttpGetActionInterface
{
    /**
     * @return ResponseInterface|ResultInterface
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
