<?php

namespace yaman\Ymodule\Block;

use Magento\Framework\View\Element\Template;

class MessageBlock extends Template
{
    public function getMessage()
    {
        return "This is displayed on all pages.";
    }
}