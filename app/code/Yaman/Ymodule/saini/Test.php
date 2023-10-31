<?php
namespace Yaman\Ymodule\saini;

use Magento\AdobeStockAssetApi\Api\Data\CategoryInterface;

    class Test{
        private $categoryInterface;
        private $arrayData;
        private $stringValue;
        public function __construct(CategoryInterface $categoryInterface,array $arrayData=['1','2','3'], string $stringValue="oolalal")
         {
            $this->categoryInterface=$categoryInterface;
            $this->arrayData=$arrayData;
            $this->stringValue=$stringValue;
            
         }
        public function getParams(){
            echo "arrayData";
             print_r($this->arrayData);
             echo "string Value". $this->stringValue;
         }

    }