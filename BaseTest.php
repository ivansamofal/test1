<?php
/**
 * Created by PhpStorm.
 * User: ioan
 * Date: 12.06.2018
 * Time: 13:14
 */

class BaseTest {
    public function CheckSomething(){
        $this->doSomeThing();
    }

    private function doSomeThing(){
        echo 300;
    }
}