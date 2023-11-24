<!-- Write a menu driven program to perform the following operations on an associative array
a. Reverse the order of each element’s key-value pair.
b. Traverse the element in an array in random order.
c. Convert the array elements into individual variables.
d. Display the elements of an array along with key. -->

<?php
$associativeArray = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "four" => 4,
    "five" => 5
);
while (true) {
    // Display the menu
    echo "Associative Array Operations Menu:\n";
    echo "a) Reverse the order of each element's key-value pair\n";
    echo "b) Traverse the elements in random order\n";
    echo "c) Convert the array elements into individual variables\n";
    echo "d) Display the elements of the array along with keys\n";
    echo "q) Quit\n";
    // Read user's choice
    echo "Enter your choice: ";
    $choice = trim(fgets(STDIN));
    switch ($choice) {
        case 'a':
            // Reverse the order of each element's key-value pair
            $reversedArray = array_flip($associativeArray);
            print_r($reversedArray);
            break;
        case 'b':
            // Traverse the elements in random order
            $randomKeys = array_keys($associativeArray);
            shuffle($randomKeys);
            $randomArray = array();
            foreach ($randomKeys as $key) {
                $randomArray[$key] = $associativeArray[$key];
            }
            print_r($randomArray);
            break;
        case 'c':
            // Convert the array elements into individual variables
            extract($associativeArray);
            echo "Variables: one=$one, two=$two, three=$three, four=$four, five=$five\n";
            break;
        case 'd':
            // Display the elements of the array along with keys
            foreach ($associativeArray as $key => $value) {
                echo "$key => $value\n";
            }
            break;
        case 'q':
            // Quit the program
            echo "Exiting the program. Goodbye!\n";
            exit;
        default:
            echo "Invalid choice. Please choose a valid option.\n";
            break;
    }
}
?>