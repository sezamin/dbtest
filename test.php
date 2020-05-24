<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Index;
try {
    $app = new Index();
    $app->run();
}catch (Exception $e){
    echo $e->getMessage();
}
