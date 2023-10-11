<?php


class AppDevice
{
    public $ram='1GB';
    public $inch='4inch';
    public $space='16GB';
    public $color='Silver';


    public function doubleHomePressed(){
        echo 'You have pressed the Home Button Twice';
    }
}

$iphone6plus=new AppDevice();

$iphone6plus->ram='2GB';
$iphone6plus->inch='5 inch';
$iphone6plus->space='32GB';
$iphone6plus->color='Gold';
$iphone6plus->doubleHomePressed();


echo '<pre>';
var_dump($iphone6plus);
echo  '</pre>';

$iphone7plus=new AppDevice();

$iphone7plus->ram='4GB';
$iphone7plus->inch='6inch';
$iphone7plus->space='256GB';
$iphone7plus->color='Silver';

echo '<pre>';
var_dump($iphone7plus);
echo  '</pre>';


