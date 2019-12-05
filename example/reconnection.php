<?php
require __DIR__ . '/../vendor/autoload.php';
use YjtecCloud\Client\YjtecCloud;
//Error while sending STMT_PREPARE packet. PID=941
$result = YjtecCloud::rpc()
        ->product('scenter')
        ->action('getLoginUser')
        ->options(['phone',['13072419652']])
        ->request();
var_dump($result);
