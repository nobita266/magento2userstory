<?php
 namespace Yaman\Ymodule\plugin;
 
class ProductAddOnSaleLabel{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result){
        $price=$subject->getFinalPrice();
        if($price <60){
            $result .=" On Sale!";
        }
        return $result;
    }

}