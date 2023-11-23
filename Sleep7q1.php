<?php
$associativeArray = []; // Initialize an associative array
while (true) {
    // Display the menu
    echo "Associative Array Operations Menu:\n";
    echo "a) Split the array into chunks\n";
    echo "b) Sort the array by values without changing the keys\n";
    echo "c) Filter even elements from the array\n";
    echo "q) Quit\n";
    // Read user's choice
    echo "Enter your choice: ";
    $choice = trim(fgets(STDIN));
    switch ($choice) {
        case 'a':
            // Split the array into chunks
            echo "Enter the number of elements per chunk: ";
            $chunkSize = trim(fgets(STDIN));
            $chunks = array_chunk($associativeArray, $chunkSize);
            print_r($chunks);
            break;
        case 'b':
            // Sort the array by values without changing the keys
            asort($associativeArray);
            print_r($associativeArray);
            break;
        case 'c':
            // Filter even elements from the array
            $evenElements = array_filter($associativeArray, function ($value) {
                return ($value % 2) == 0;
            });
            print_r($evenElements);
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