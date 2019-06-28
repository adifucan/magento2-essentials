/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
define([
    'jquery'
], function ($) {
    'use strict';

    var date = new Date();
    var now = date.toLocaleTimeString();

    /**
     * Get current date.
     *
     * @param {Object} config
     * @param {HTMLElement} element
     * @return {String}
     */
    return function (config, element) {
        $(element).text(now);
    };
});
