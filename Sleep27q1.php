<?php
// Function to copy the content of one file to another
function copyFileContents($sourceFile, $destinationFile)
{
    if (file_exists($sourceFile)) {
        // Read the content of the source file
        $content = file_get_contents($sourceFile);
        // Write the content to the destination file
        if (file_put_contents($destinationFile, $content) !== false) {
            echo "File content copied successfully!\n";
        } else {
            echo "Error writing to the destination file.\n";
        }
    } else {
        echo "Source file does not exist.\n";
    }
}
// Get file names from the user
$sourceFileName = readline("Enter the source file name: ");
$destinationFileName = readline("Enter the destination file name: ");
// Call the function to copy file contents
copyFileContents($sourceFileName, $destinationFileName);
?>