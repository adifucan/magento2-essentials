<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Essentials\LoggingPlugin\Plugin\App\Action;

use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Psr\Log\LoggerInterface;
use Magento\Framework\App\Action\Action;

/**
 * Log full action name after request dispatch.
 */
class ActionNameLogger
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Log full action name after request dispatch.
     *
     * @param Action $subject
     * @param ResultInterface|ResponseInterface $result
     * @return mixed
     */
    public function afterDispatch(Action $subject, $result)
    {
        $actionName = $subject->getRequest()->getFullActionName();
        $this->logger->info('Full action name: ' . $actionName);

        return $result;
    }
}
