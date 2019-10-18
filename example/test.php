<?php
require __DIR__ . '/../vendor/autoload.php';
use YjtecCloud\Client\YjtecCloud;

$result = YjtecCloud::rpc()
    ->product('scenter')
    ->prefix('cas')
    ->action('getByName')
    ->options(['13072419652'])
    ->request();
// $result = YjtecCloud::http()
//     ->product('cas')
//     ->action('getByName')
//     ->request();
var_dump($result);
