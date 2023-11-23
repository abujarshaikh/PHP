<!-- Write a menu driven program to perform various file operations. Accept filename from
user. 
a) Display type of file.
b) Display last modification time of file
c) Display the size of file
d) Delete the file -->
<!DOCTYPE html>
<html>

<head>
    <title>File Operations</title>
</head>

<body>
    <h2>File Operations</h2>
    <form method="post" action="">
        <label for="filename">Enter the filename:</label>
        <input type="text" name="filename" id="filename" required><br><br>

        <label>Choose an operation:</label>
        <select name="operation">
            <option value="display_type">Display type of file</option>
            <option value="display_modification_time">Display last modification time</option>
            <option value="display_size">Display file size</option>
            <option value="delete_file">Delete the file</option>
        </select><br><br>

        <input type="submit" name="submit" value="Perform Operation">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $filename = $_POST['filename'];
        $operation = $_POST['operation'];

        if (file_exists($filename)) {
            switch ($operation) {
                case "display_type":
                    $fileType = mime_content_type($filename);
                    echo "<p>Type of file: $fileType</p>";
                    break;
                case "display_modification_time":
                    $modificationTime = date("Y-m-d H:i:s", filemtime($filename));
                    echo "<p>Last Modification Time: $modificationTime</p>";
                    break;
                case "display_size":
                    $fileSize = filesize($filename);
                    echo "<p>File Size: $fileSize bytes</p>";
                    break;
                case "delete_file":
                    if (unlink($filename)) {
                        echo "<p>'$filename' has been deleted.</p>";
                    } else {
                        echo "<p>Error deleting '$filename'. Please check file permissions.</p>";
                    }
                    break;
            }
        } else {
            echo "<p>The specified file does not exist.</p>";
        }
    }
    ?>
</body>

</html>