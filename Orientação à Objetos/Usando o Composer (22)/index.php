<?php
require 'vendor/autoload.php';

use \classes\matematica\Basica;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

if (true) {
    // create a log channel
    $log = new Logger('name');
    $log->pushHandler(new StreamHandler('teste.log', Logger::WARNING));

    echo "Arquivo gerado com sucesso."."</br>";
}else{
    echo "Arquivo não gerado.";
}

$m = new \classes\matematica\Basica();
echo $m->somar(10, 10);

// add records to the log
$log->warning('Foo');
$log->error('Bar');