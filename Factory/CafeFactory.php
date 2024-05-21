<?php
require_once 'tea.php';
require_once 'coffee.php';
require_once 'juice.php';

Class CafeFactory{
    public Function getDrink($drinkName){
        
        if($drinkName == "coffee"){
            return new Coffee();
        }else if($drinkName == "tea"){
            return new Tea();
        }else if($drinkName == "juice"){
            return new Juice();
        }else{
            return null;
        }
    }
}
