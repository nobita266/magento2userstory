<?php
namespace Yaman\Ymodule\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class Userstory32 implements ObserverInterface{
    protected $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger=$logger;
        
    }
    public function execute(Observer $observer){
        $response=$observer->getEvent()->getData('response')->getBody();
        

        $this->logger->info("Nobita html".$response);

    }
}