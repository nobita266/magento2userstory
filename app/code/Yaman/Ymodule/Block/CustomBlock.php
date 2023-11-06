<?php

namespace Yaman\Ymodule\Block;

use Magento\Framework\View\Element\Template;

class CustomBlock extends Template
{
    // public function _toHtml()
    // {
    //     // Implement custom rendering logic here
    //     return "Custom Block Content";
    // }

    public function _afterToHtml($html)
    {
        // Implement post-rendering logic here
        return "<h1>hello world</h1>";
    }
}