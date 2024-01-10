<?php
// single dimensional array or index array
$allStudents = ["ali","aqsa","hamza","rafay",21,22,23,19];
// associative array 
$allEmp = ["student_1"=>"huzaifa","student_2"=>"musfirah","student_3"=>"arhama"];
//  echo $allStudents[4];
// print_r($allStudents);
// var_dump($allStudents);

// for($i=0;$i<=6;$i++){
//         echo $allStudents[$i]. "<br>";
// }

for($i=0;$i<count($allStudents);$i++){
        echo $allStudents[$i]."<br>";
}
foreach($allStudents as $singleStd){
        echo $singleStd ." ";
}
?>
<br>
<?php
foreach($allEmp as $k => $emp){
            echo  $k . " : " . $emp . " ";
}
?>