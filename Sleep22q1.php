<?php
$queue = []; // Initialize an empty queue
while (true) {
    // Display the menu
    echo "Queue Operations Menu:\n";
    echo "a) Insert an element into the queue\n";
    echo "b) Delete an element from the queue\n";
    echo "c) Display the contents of the queue\n";
    echo "q) Quit\n";
    // Read user's choice
    echo "Enter your choice: ";
    $choice = trim(fgets(STDIN));
    switch ($choice) {
        case 'a':
            // Insert an element into the queue
            echo "Enter the element to insert: ";
            $element = trim(fgets(STDIN));
            array_push($queue, $element);
            echo "Element '$element' inserted into the queue.\n";
            break;
        case 'b':
            // Delete an element from the queue (FIFO)
            if (empty($queue)) {
                echo "Queue is empty. Cannot delete.\n";
            } else {
                $deletedElement = array_shift($queue);
                echo "Element '$deletedElement' deleted from the queue.\n";
            }
            break;
        case 'c':
            // Display the contents of the queue
            if (empty($queue)) {
                echo "Queue is empty.\n";
            } else {
                echo "Queue Contents: " . implode(', ', $queue) . "\n";
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