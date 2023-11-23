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
// Sort in ascending order by key
ksort($associativeArray);
echo "Ascending Order Sort by Key:\n";
print_r($associativeArray);
// Sort in descending order by value
arsort($associativeArray);
echo "Descending Order Sort by Value:\n";
print_r($associativeArray);
// Sort in descending order by key
krsort($associativeArray);
echo "Descending Order Sort by Key:\n";
print_r($associativeArray);
?>