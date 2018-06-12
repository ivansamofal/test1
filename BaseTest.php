<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 12.06.2018
 * Time: 13:14
 */

class BaseTest implements TestInterface{
    public function CheckSomething(){
        $this->doSomeThingNew();
    }

    public function doSomeThingNew(){
        echo 300;
    }
}