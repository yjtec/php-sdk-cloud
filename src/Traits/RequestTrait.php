<?php 
namespace YjtecCloud\Client\Traits;
use YjtecCloud\Client\Request\RpcRequest;
Trait RequestTrait{
    public static function rpc(){
        return new RpcRequest();
    }
}
?>