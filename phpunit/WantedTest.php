<?php
require_once 'PHPUnit/Autoload.php';
class WantedTest extends PHPUnit_Framework_TestCase{
	public function testAddbuy(){
		$i=1;
		$this->assertEquals("000",isset($i));
	}
}