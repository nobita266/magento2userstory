<?php
// File: Vendor/Module/Plugin/ProductDescription.php

namespace Yaman\Ymodule\Plugin;

class ModifyProductDescription
{
    public function afterToHtml(\Magento\Catalog\Block\Product\View\Description $subject, $result)
    {
        // Modify or replace description content as needed
        $customDescription = 'Sample description';
        return $customDescription;
    }
}