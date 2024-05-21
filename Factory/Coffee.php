<?php 
require_once 'CafeInterface.php';

class Coffee implements Cafe{
    public function prepare(){
        echo " preparing coffee ...<br> ";
    }
}
