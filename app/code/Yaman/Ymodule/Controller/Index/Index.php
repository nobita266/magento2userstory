<?php
namespace Yaman\Ymodule\Controller\Index;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context ;
use Magento\Framework\View\Result\PageFactory;
use Yaman\Ymodule\saini\Test;

// use Magento\Framework\App\Helper\Context;

// use Magento\Setup\Module\I18n\Context;

class Index extends Action{

   
    protected $test;
    public function __construct(Context $context, Test $test)
    {
        
        parent::__construct($context);
        $this->test=$test;

        
    }
    public function execute()
    {
        $this->test->getParams();
    }


}