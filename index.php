<?php

class MyClass
{
    public static $prop1 = "Have a good day!"; 

    public static $count = 0; 
    
    public static function Publ_getProperty()
    {
		echo "Hello! </br>";
		return self::$prop1."</br>";
	}

    public static function plusOne()
    {
        return "Day: " . ++self::$count . ".<br />"; 
    }
}

do
{
   
    echo MyClass::plusOne();
    echo MyClass::Publ_getProperty();
} while ( MyClass::$count < 10 );

?>
