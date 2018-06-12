<?php
class Test extends BaseTest{
	
	private $_test;
	
	public function __construct($test){
		$this->_test = $test;
	}

	public function EchoTest(){
		echo $this->_test;
	}
	
}