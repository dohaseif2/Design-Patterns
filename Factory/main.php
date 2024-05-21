<?php
require_once 'CafeFactory.php';


$cafeFactory = new CafeFactory();

$tae=$cafeFactory->getDrink("coffee");
$tae->prepare();

$coffee=$cafeFactory->getDrink("tea");
$coffee->prepare();

$juice=$cafeFactory->getDrink("juice");
$juice->prepare();

$hotChocolete=$cafeFactory->getDrink("hotChocolete");
if($hotChocolete !==null){
    $hotChocolete->prepare();
}else{
    echo "this drink not exist";
}

