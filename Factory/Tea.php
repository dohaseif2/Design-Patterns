<?php
require_once 'CafeInterface.php';

class Tea implements Cafe{
    public function prepare(){
        echo " preparing tea ...<br>";
    }
}

