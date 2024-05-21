<?php
class Singletone{
    private static $instance;
    private function __construct(){}

    public static function getInstance(){
        if(!self::$instance){
            self::$instance=new Singletone();
        }
        return self::$instance;   
    }
    public function display(){
        echo "singletone design pattern";
    }
}

$singleton = Singletone::getInstance();
$singleton->display();