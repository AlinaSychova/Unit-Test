<?php
set_include_path("C:\xampp\htdocs\mySite");
include_once "index.php";

class MyClassTest extends PHPUnit\Framework\TestCase {
function testProperty(){	
$prop1=new Prop();
$prop1 = "Хорошего дня!";
$this->assertEquals("Хорошего дня!", $prop1->Publ_getProperty());
	}
function testCount(){
$count = new Count();
$count = 0;
$this->assertEquals(0,$count->plusOne );
}
}
?>

