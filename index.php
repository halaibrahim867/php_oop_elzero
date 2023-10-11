<?php


class AppDevice
{
    public $ram='1GB';
    public $inch='4inch';
    public $space='16GB';
    public $color='Silver';
    public $ownerName;
    //const OWNERNAME=5;
    private $lock;
    public $name;


    /*
    public function setOwnerName(){

        if(strlen($this->ownerName) < self::OWNERNAME){
            echo 'Owner Name cannot be less thane'. self::OWNERNAME .'characters';
        }else{
            echo 'Your Name has been set';
        }
    }*/

    public function changeSpace($r,$in,$s, $c)
    {
        $this->ram=$r;
        $this->inch=$in;
        $this->space=$s;
        $this->color=$c;
    }

    public function changeLock($l){
        $this->lock= sha1($l);
    }
   final public function sayHello($n){
        $this->name=$n;
        echo 'Welcome To: '.$n.'<br>';
    }

}

class Sony extends AppDevice
{
    public $camera='25MB';


}
/*
$iphone6plus=new AppDevice();

$iphone6plus->changeSpace('2GB','5 Inch','32GB','Gold');
$iphone6plus->changeLock('hala123');
*/
/*
$iphone6plus->ram='2GB';
$iphone6plus->inch='5 inch';
$iphone6plus->space='32GB';
$iphone6plus->color='Gold';
$iphone6plus->ownerName='hi';
//$iphone6plus->setOwnerName();
*/
//to print const
/*
echo '<br>';
echo AppDevice::OWNERNAME;
echo '<br>';

echo $iphone6plus::OWNERNAME;
*/
/*
echo '<pre>';
var_dump($iphone6plus);
echo  '</pre>';
*/
$iphone7plus=new AppDevice();
$iphone7plus->changeSpace('4GB','7 Inch','128GB','Silver');
$iphone7plus->sayHello('iPhone7');
/*
$iphone7plus->ram='4GB';
$iphone7plus->inch='6inch';
$iphone7plus->space='256GB';
$iphone7plus->color='Silver';
*/
echo '<pre>';
print_r($iphone7plus);
echo  '</pre>';

$sony=new Sony();
$sony->changeSpace('2GB','5Inch','64GB','Black');
$sony->sayHello('Sony');
echo '<pre>';
print_r($sony);
echo  '</pre>';

