<?php
namespace Yaman\Ymodule\Controller;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RouterInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\RequestInterface;
class Router   implements RouterInterface{
    protected $actionFactory;
    protected $_response;
    public function __construct(ActionFactory $actionFactory,ResponseInterface $response){
        $this->actionFactory= $actionFactory;
        $this->_response=$response;
    }
    public function match(RequestInterface $request){
        $identifier=trim($request->getPathInfo());
        dump($identifier);

    
    }

    

    
}