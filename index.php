<?php
// echo "hello  ! this is a simple php script";
// echo phpversion();
// $myname = "John Doe";
// var_dump($myname)
$a=10;
$b=3;
echo "<br>Sum:".($a+$b);
echo"<br> Modulo:".($a%$b);

$age=24;
$agevalue=24.0;
if($age===$agevalue){
    echo"<br>Equal:True ";

}
else{
 echo"<br>NotEqual:False";
}

if($age < 45 && $age>20){
    echo"<br>age is between 45 and 20";
}
else{
    echo"<br>age is not in between 45 and 20";
}
for($i=10;$i<20;$i++){
    echo"<br>Index :$i";
}
$fruits = array("apple","banana","Mango","orange");
foreach($fruits as $fruit){
    echo"<br> Fruit: $fruit";
}


function greet($name){
    echo"hello $name";
}

function division($x,$y){
    if($y==0){
        throw new Exception("Division with zero is not allowed");
    }
    return $x/$y;
}

try{
    echo "<br> Division : ".division(10,0);
}catch(Exception $e){
    echo"<br> Error : ".$e->getMessage();
}
$p =(int) readline("enter any number:");
$q =(int) readline("enter any number:");
echo($p+$q);



?>