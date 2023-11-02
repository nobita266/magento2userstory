<?php
namespace Yaman\Ymodule\Plugin;

// use Magento\TestFramework\Event\Magento;
use \Magento\Theme\Block\Html\Header;


class changeWelcome{
    public function afterGetWelcome(){
        return "Yaman saini cool";

    }
}
