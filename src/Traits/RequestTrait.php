<?php 
namespace YjtecCloud\Client\Traits;
use YjtecCloud\Client\Request\RpcRequest;
use YjtecCloud\Client\Request\HttpRequest;
Trait RequestTrait{
    public static function rpc(){
        return new RpcRequest();
    }

    public static function http(){
        return new HttpRequest();
    }
}
?>