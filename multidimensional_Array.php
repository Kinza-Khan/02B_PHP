<!-- multidimensional Array -->
<?php
 $students = [   
       ["ali",21,"karachi"],
        ["huzaifa",22,"lahore","h12@Gmail.com"],
        ['aqsa',23,"multan","aq@gmail.com",  56000]
 ] ;
 ?>
 <h1>for loop</h1>
<?php 
for($i=0;$i<count($students);$i++){
            // echo $students[$i];
        for($j=0;$j<count($students[$i]);$j++){
                echo $students[$i][$j]. " ";
        }   
        echo "<br>";
}
?>
    <h1>multidimensional array by foreach loop</h1>
<?php
foreach($students as $singleStd){
        foreach($singleStd as $std){
                    echo $std . " ";
        }
        echo "<br>";
}

?>