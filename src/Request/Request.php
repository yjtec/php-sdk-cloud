<?php
namespace YjtecCloud\Client\Request;


use Hprose\Socket\Client;
use YjtecCloud\Client\Config\Config;

class Request
{
    private $uri;
    private $prefix = '';
    private $options = [];
    public function product($product){
        $this->product = $product;
        $this->config = Config::get($product);
        return $this;
    }

    public function action($action){
        $this->action = $action;
        return $this;
    }

    public function options($options){
        $this->options = $options;
        return $this;
    }

    public function prefix($prefix){
        $this->prefix = $prefix;
        return $this;
    }

    public function request()
    {
        $result = $this->response();

        return $result;
    }

    /**
     * @throws ClientException
     * @throws Exception
     */
    private function response()
    {
        $action = $this->action;
        $client = $this->createClient($this);
        $options = $this->options;
        try {
            if (!empty($this->prefix)) {
                return $client->{$this->prefix}->$action(...$options);
            }
            return $client->$action(...$options);
        } catch (\Exception $exception) {
            //var_dump($exception);
        }
    }

    public function createClient(Request $request)
    {
        return new Client($request->config['uri'],false);
    }
}
