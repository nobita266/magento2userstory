<?php
namespace Yaman\Ymodule\Controller;
// use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RouterInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\Action\Forword;
class Router   implements RouterInterface{
    protected $actionFactory;
    protected $_response;
    
    public function __construct(ActionFactory $actionFactory,ResponseInterface $response){
        $this->actionFactory= $actionFactory;
        $this->_response=$response;
    }
    public function match(RequestInterface $request){
        dump($request);
        $identifier=trim($request->getPathInfo(),'/');
        dump($identifier);
        $parts = preg_split('/(?=[A-Z])/', $identifier, -1, PREG_SPLIT_NO_EMPTY);
        $lowerArray=array_map('strtolower', $parts);
        dump($parts);
        if(count($parts)===3){
            $request->setModuleName($lowerArray[0]);
            $request->setControllerName($lowerArray[1]);
            $request->setActionName($lowerArray[2]);
            dump($request);
            return $this->actionFactory->create(Forword::class, ['request'=>$request]);

        }
        return NULL;
        
      

    
    }

    

    
}