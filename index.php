<?php

class MyClass
{
    public static $prop1 = "Хорошего дня!"; // публичное свойство класса 

    public static $count = 0; // публичное статическое свойство класса 
    
    public static function Publ_getProperty()
    {
		echo "Привет! </br>";
		return self::$prop1."</br>";
	}

    public static function plusOne()
    {
        return "День: " . ++self::$count . ".<br />"; // возращаем значение свойства $count, увеличивая значение $count на 1 при каждом новом вызове (итерации)
    }
}

do
{
    // вызываем метод plusOne() класса MyClass без явного обьявления нового обьекта класса MyClass
    echo MyClass::plusOne();
    echo MyClass::Publ_getProperty();
} while ( MyClass::$count < 10 );

?>
