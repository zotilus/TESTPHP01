<?php

echo (Demo::$var . "<br>");

Demo::$var++;
echo (Demo::$var . "<br>");

DemoExtends::affcompteur();

$demo= new Demo();
Demo::$var++;

$demo1= new Demo();

$demo::affcompteur();
$demo1::affcompteur();


// *****************************************************
class Demo
{

    public static int $var = 10;

    public static function affcompteur()
    {
        
        echo "Je suis dans demo et j'incremente var : ".self::$var."<br>";
    }

    public static function build()
    {
        return new self;  // NE PAS OUBLIER !!!
    }
}

// *****************************************************
// Les héritiers partagent donc la même valeur de la var $var

class DemoExtends extends Demo
{


}

