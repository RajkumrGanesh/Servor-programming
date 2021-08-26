<h1>Welcome programme:</h1>
<?php
echo "PHP practices";?><br><hr>
<h1>Local variable</h1>
<?php 
$x=50;
$y=20;
$z=10;
echo "The value of local variable:".$x+$y; ?><br><hr>
<h1>Global and Global array variable</h1>
<?php
function calculate(){
    global $x,$z;
    $y=$x+$z;
    $z=5;
    echo "<p>The value of local variable is:$z</p>";
    echo "Global function is:$y";
}
calculate();
echo "<p>The outside function is value:$z</p>"; ?><br>
<?php 
$a=10;
$b=20;
function calc(){
    $GLOBALS['b']=$GLOBALS['a']+$GLOBALS['b'];
}
calc();
echo "Global array:$b"; ?><hr>
<h1>String operations</h1>
<?php
echo strlen("Raj kumar");?><br>
<?php
echo str_word_count("Ganesh");?><br>
<?php echo strrev("Geetha");?><br>
<?php echo strpos("Elon musk","Elon");?><br>
<?php echo str_replace("kumar","Rashu","Rajkumar")?><hr>
<h1>PHP numbers</h1>
<?php
$c=10;
$d=20.0;
$e=acos(8);
$f=1e23252;
var_dump(is_integer($x));
var_dump(is_float($d));
var_dump($e);
var_dump($f)?><hr>
<h1>Math in php</h1>
<?php 
echo (pi());?>
<?php echo (min(1,2,3,4,5));
echo (max(1,2,3,4,5));?><hr>
<h1>Consants in php</h1>
<?php 
define("Greeting","Hello world");
echo Greeting;?>
<?php define('cars',["audi","maruthi","BMW"]);
echo cars[0];?>
<?php define('coding','web development');
function code(){
    echo coding;
}
code();?><hr>
<h1>IF Else statement</h1>
<?php  
$g=date("H");
if($g<20){
    echo "have a good day";
}
else{
    echo "have a good night";
}?><hr>
<h1>Switch statements</h1>
<?php $h="red";
switch($h){
    case "red":
        echo "Its red";
        break;
    case "green":
        echo "Itss green";
        break;
    default:
        echo("Not in above colors") ;          
}
?><hr>
<h1>Loops</h1>
<?php 
$i=1;
    while($i<5){
        echo "The upcoming number is:$i";
        $i++;
    }
?>

