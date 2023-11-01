<?php
namespace Yaman\Ymodule\Plugin;
class ChangeCopyRightText{
    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject,$result){
        return "New COpyRight Text";
    }
}