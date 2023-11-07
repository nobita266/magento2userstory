<?php
// File: Vendor/Module/Plugin/ProductDescription.php

namespace Yaman\Ymodule\Plugin;
//user story 6

class ModifyProductDescription
{
    public function afterToHtml(\Magento\Catalog\Block\Product\View\Description $subject, $result)
    {
        // Modify or replace description content as needed
        $customDescription = 'Yaman Sample description';
        return $customDescription;
    }
}
