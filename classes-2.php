<h1>Inheritence</h1>
<?php 
class fruit{
    public $name;
    public $color;
    public function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    public function message(){
        echo "my name is {$this->name} and my colour is{$this->color}";
    }
}    
    class apple extends fruit{
        public function intro(){
            echo "am very delicious fruit";
        }
    }
$apple=new apple("apple","red");
$apple->message();
$apple->intro();?><hr>
<h1>constants in php</h1>
<?php
class goodbye{
    const leaving="be care ful";
    function byebye(){
        echo self::leaving;
    }
}
$raju= new goodbye();
$raju->byebye();?><hr>
<h1>abstracts in php</h1>
<?php
abstract class car{
    public $name;
    public function __construct($name){
        $this->name=$name;
    }
    abstract public function intro():string;
}
class audi extends car{
    public function intro():string{
        return "the car name is $this->name!";
    }
}
class bmw extends car{
    public function intro():string{
        return "the car name is $this->name!";
    }
}
$audi=new audi("audi");
echo $audi->intro();
echo("<br>");
$bmw= new bmw("bwm");
echo $bmw->intro();
?><hr>
<h1>Interfaces</h1>
<?php
interface animals{
    public function makesound();
}
class cat implements animals{
    public function makesound(){
        echo "meow";
    }
}
class dog implements animals{
    public function makesound(){
        echo "bark";
    }
}
$cat= new cat;
$dog = new dog;
$animal=array($cat,$dog);
foreach($animal as $animals){
    $animals->makesound();
}?><hr>
<h1>Traits</h1>
<?php
trait message1{
    public function msg1(){
        echo "oop is fun";
    }
}
trait message2{
    public function msg2(){
        echo "oop reduces code depulication";
    }
}
class welcome{
    use message1;
}
class welcome2{
    use message1,message2;
}
$obj= new welcome();
$obj->msg1();
echo "<br>";
$obj2=new welcome2();
$obj2->msg1();
$obj2->msg2();?><hr>
<h1>public static methods</h1>
<?php
class greeting{
    public static function welcome(){
        echo "hi all";
    }
}
greeting::welcome();?><hr>
<h1>static properties</h1>
<?php
class pi{
    public static $value="raju";
}
class x extends pi{
    public function xstatic(){
        return parent::$value;
    }
}
echo x::$value;
$x=new x();
echo $x->xstatic();?><hr>
<h1>