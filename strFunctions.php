<?php
$allData = "hello this is ali. He is intelligent. ali is kind heart nature student";
echo strlen($allData);
echo "<br>";
print_r(explode('.',$allData));
echo "<br>";
echo  ucwords($allData);
echo "<br>";
$name = "ali";
echo strcmp($name,"ali");
echo "<br>";
echo str_replace('ali','huzaifa',$allData);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($allData,'this');
echo "<br>";
echo str_word_count($allData);
?>