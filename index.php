<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
$stdName = "ali";
echo  "<h1>".$stdName."</h1>";
?>


<?php
$num1 = 12.14 ;
$num2 = 12.5;
$result  = $num1 * $num2 ;

$stdEmail = "ali@gmail.com";
?>
<h1><?php echo $stdEmail ?></h1>

<h2><?php echo $result ?></h2>


<?php
function breakLine(){
    echo "<br>";
}

function fun2(){
    echo "happy new year";
}

function fun(){
    return "happy new year";
}
fun2();
breakLine();
echo fun();
breakLine();
?>

<?php
$allStudents = ["ali","aqsa","hamza","huzaifa"];
echo $allStudents[0]. " " . $allStudents[1]. " " . $allStudents[2]. " " . $allStudents[3];
breakLine();
var_dump($allStudents);
breakLine();
print_r($allStudents);
?>

</body>
</html>