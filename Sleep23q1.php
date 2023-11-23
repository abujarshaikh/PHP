<?php
$stack = []; // Initialize an empty stack
while (true) {
// Display the menu
echo "Stack Operations Menu:\n";
echo "a) Insert an element into the stack\n";
echo "b) Delete an element from the stack\n";
echo "c) Display the contents of the stack\n";
echo "q) Quit\n";
// Read user's choice
echo "Enter your choice: ";
$choice = trim(fgets(STDIN));
switch ($choice) {
case 'a':
// Insert an element into the stack
echo "Enter the element to insert: ";
$element = trim(fgets(STDIN));
array_push($stack, $element);
echo "Element '$element' inserted into the stack.\n";
break;
case 'b':
// Delete an element from the stack
if (empty($stack)) {
echo "Stack is empty. Cannot delete.\n";
} else {
$deletedElement = array_pop($stack);
echo "Element '$deletedElement' deleted from the stack.\n";
}
break;
case 'c':
// Display the contents of the stack
if (empty($stack)) {
echo "Stack is empty.\n";
} else {
echo "Stack Contents: " . implode(', ', $stack) . "\n";
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