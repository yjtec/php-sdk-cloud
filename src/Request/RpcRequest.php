<?php
namespace YjtecCloud\Client\Request;
use Hprose\Socket\Client;
class RpcRequest extends Request
{
/**
 * @throws ClientException
 * @throws Exception
 */
    private $clients;
    protected function response()
    {
        $action  = $this->action;
        $client  = $this->createClient($this);
        $options = $this->options;
        try {
            if (!empty($this->prefix)) {
                return $client->{$this->prefix}->$action(...$options);
            }
            return $client->$action(...$options);
        } catch (\Exception $exception) {
            var_dump($exception->getMessage());
        }
    }

    public function createClient(Request $request)
    {
        if($this->clients[md5($request->config['uri'])]){
            return $this->clients[md5($request->config['uri'])];
            
        }else{
            $client =  new Client($request->config['uri'], false);
            $this->clients[md5($request->config['uri'])] = $client;
            return $client;
        }
    }
}
