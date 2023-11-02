<?php
namespace Yaman\Ymodule\Observer;

use Magento\Framework\DB\LoggerInterface as DBLoggerInterface;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Psr\Log\LoggerInterface;


class Userstory3 implements ObserverInterface{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger=$logger;

        
    }

    public function execute(Observer $observer){
        $pr=$observer->getProduct();
        $prname=$pr->getName();
        $this->logger->info("Nobita product".$prname);
        


    }


}