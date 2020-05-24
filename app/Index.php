<?php


namespace App;
use Sezamin\Db\Connection;


class Index
{
    function run(){
        $c = new Connection();
        $c->setConfig(['NAME'=>'lessons', 'PASSWORD'=>'dev']);
        $c->connect();
        $q = $c->query();
        $result = $q->selectRaw("SELECT * FROM users");

        print_r($result);
    }
}