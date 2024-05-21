<?php 
require_once 'CafeInterface.php';

class juice implements Cafe{
    public function prepare(){
        echo " preparing juice ...<br>";
    }
}

?>