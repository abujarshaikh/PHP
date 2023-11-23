<!-- Write a PHP program to read two file names from user and append content of first file into -->
<!-- second file.  -->
<!DOCTYPE html>
<html>

<head>
    <title>File Append</title>
</head>

<body>
    <h2>Append Contents of One File to Another</h2>
    <form method="post" action="">
        <label for="firstFile">Enter the name of the first file:</label>
        <input type="text" name="firstFile" id="firstFile" required><br><br>

        <label for="secondFile">Enter the name of the second file:</label>
        <input type="text" name="secondFile" id="secondFile" required><br><br>

        <input type="submit" name="submit" value="Append Files">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $firstFileName = $_POST['firstFile'];
        $secondFileName = $_POST['secondFile'];

        if (file_exists($firstFileName) && file_exists($secondFileName)) {
            $firstFileContent = file_get_contents($firstFileName);
            $secondFileContent = file_get_contents($secondFileName);

            $combinedContent = $secondFileContent . $firstFileContent;

            if (file_put_contents($secondFileName, $combinedContent) !== false) {
                echo "<p>Contents from '$firstFileName' have been appended to '$secondFileName'.</p>";
            } else {
                echo "<p>Error appending the contents. Please check file permissions.</p>";
            }
        } else {
            echo "<p>One or both of the specified files do not exist.</p>";
        }
    }
    ?>
</body>

</html>