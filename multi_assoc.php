<?php
 $students = [   
    ["name"=>"ali","age"=>21,"city"=>"karachi"],
     ["name"=>"huzaifa","age"=>22,"city"=>"lahore","email"=>"h12@Gmail.com"],
     ["name"=>'aqsa',"age"=>23,"city"=>"multan","email"=>"aq@gmail.com",  "salary"=>56000]
] ;
$std = [   
    "std1"=>["ali",21,"karachi"],
    "std2"=>["aqsa",23,"karachi","aq@gmail.com"],
    "std3"=>["hamza",22,"karachi","hamza@gmail.com",70000],
] ;
?>

<?php


 
?>
<h2>foreach</h2>
<?php
// foreach
foreach($students as $std){
        foreach($std as $value){
                echo $value . " " ;
        }
        echo "<br>";
}
$allEmp = ["student_1"=>"huzaifa","student_2"=>"musfirah","student_3"=>"arhama"];
    $keys = array_keys($allEmp);
    //  print_r($keys);
    for($i=0;$i<count($keys);$i++){
                echo $allEmp[$keys[$i]] ." ";
    }




?>