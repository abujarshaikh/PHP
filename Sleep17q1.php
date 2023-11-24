<!-- Write a PHP script to sort the following associative array :
array(“Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40") in
a) ascending order sort by Value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key  -->
<?php
$associativeArray = array(
    "Sagar" => "31",
    "Vicky" => "41",
    "Leena" => "39",
    "Ramesh" => "40"
);
// Sort in ascending order by value
asort($associativeArray);
echo "Ascending Order Sort by Value:\n";
print_r($associativeArray);
echo "<br>";
echo "<br>";
// Sort in ascending order by key
ksort($associativeArray);
echo "Ascending Order Sort by Key:\n";
print_r($associativeArray);
echo "<br>";
echo "<br>";
// Sort in descending order by value
arsort($associativeArray);
echo "Descending Order Sort by Value:\n";
print_r($associativeArray);
echo "<br>";
echo "<br>";
// Sort in descending order by key
krsort($associativeArray);
echo "Descending Order Sort by Key:\n";
print_r($associativeArray);
echo "<br>";
echo "<br>";
?>