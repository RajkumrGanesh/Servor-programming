<?php
class fruit{
    public $name;
    public $color;
    function set_name($name){
        $this->name=$name;   
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color=$color;
    }
    function get_color(){
        return $this->color;
    }
}
$apple=new fruit();
var_dump($apple instanceof fruit);
$mango = new fruit();
$apple->set_name('apple');
$mango->set_name('mango');
$apple->set_color('red');
$mango->set_color('yellow');
echo "Name:".$apple->get_name();
echo "<br>";
echo "color:".$apple->get_color();
echo "<br>";
echo "name:".$mango->get_name();
echo "<br>";
echo "color:".$mango->get_color();
?><hr>
<h1>constructer in php</h1>
<?php
class car{
    public $name;
    function __construct($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
}
$audi= new car("audi");
echo $audi->get_name();?><hr>
<h1>destructor</h1>
<?php
class code{
    public $name;
    function __construct($name){
        $this->name=$name;
    }
    function __destruct(){
        echo $this->name;
    }
}
$html=new code("html");?>
<?php echo "<br>";?>
<h1>Access modifyers</h1>
<?php
class flower{
    public $name;
    protected $color;
    private $no_of_piece;
    function get_name($n){
        $this->name=$n;
    }
    protected function get_color($n){
        $this->color=$n;
    }
    private function get_piece($no){
        $this->piece=$no;
    }
}
$lotus=new flower();
$lotus->get_name("lotus");
$lotus->get_color("pink");
$lotus->get_piece("2");?><hr>
