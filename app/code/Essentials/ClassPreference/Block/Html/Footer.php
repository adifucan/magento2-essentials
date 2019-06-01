<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Essentials\ClassPreference\Block\Html;

/**
 * Html page footer block
 */
class Footer
{
    /**
     * Copyright information
     *
     * @var string
     */
    private $copyright;

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Retrieve copyright information
     *
     * @return string
     */
    public function getCopyright(): string
    {
        if (!$this->copyright) {
            $this->copyright = $this->scopeConfig->getValue(
                'design/footer/copyright',
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE
            );
        }
        return __($this->copyright);
    }
}
