<?php
namespace Yaman\Ymodule\Controller;

use Magento\Framework\App\Action\Forward;
use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\RouterInterface;


class Router implements RouterInterface
{
    protected $actionFactory;
    protected $response;
    public function __construct(
        ActionFactory $actionFactory,
        ResponseInterface $response
    ) {
        $this->actionFactory = $actionFactory;
        $this->response = $response;
    }
    
    public function match(RequestInterface $request): ?ActionInterface
    {
        // dump($request);
                                                                                                             
        $identifier = trim($request->getPathInfo(), '/');
        
        $lastWord = $identifier;
        dump($lastWord);

            $url=[];
            $finalurl=""; 
            $cnt=0;   
            for($i=0;$i<strlen($lastWord);$i++){
                if($i != 0 && $lastWord[$i]>="A" && $lastWord[$i]<="Z"){
                    $lower = strtolower($lastWord[$i]);
                    array_push($url,$finalurl);
                    $finalurl = "";
                    $finalurl = $finalurl.$lower;
                    $cnt=$cnt+1;
                }else{
                    $lower = strtolower($lastWord[$i]);
                    $finalurl = $finalurl.$lower;    
                }
            }

            array_push($url,$finalurl);  
            // dump($url);

        if ($cnt===2) {
            $request->setModuleName($url[0]);
            $request->setControllerName($url[1]);
            $request->setActionName($url[2]);
            // dump($request);
            return $this->actionFactory->create(Forward::class, ['request' => $request]);
        }
        return null;
    }
}