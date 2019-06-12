<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Essentials\RouterLog\Observer;

use Magento\Framework\App\RouterListInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

/**
 * Log list of routers for any request.
 */
class RouterLog implements ObserverInterface
{
    /**
     * @var RouterListInterface
     */
    private $routerList;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param LoggerInterface $logger
     * @param RouterListInterface $routerList
     */
    public function __construct(
        LoggerInterface $logger,
        RouterListInterface $routerList
    ) {
        $this->logger = $logger;
        $this->routerList = $routerList;
    }

    /**
     * Log list of routers for any request.
     *
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer): void
    {
        foreach ($this->routerList as $route) {
            $this->logger->info('Router: ' . \get_class($route));
        }
    }
}
