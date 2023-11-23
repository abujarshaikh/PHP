<!-- Write a PHP script to accept 2 strings from the user, the first string should be a sentence and
second can be a word.
a. Delete a small part from first string after accepting position and number of characters to
remove.
b. Insert the given small string in the given big string at specified position without removing
any characters from the big string. -->
<!DOCTYPE html>
<html>

<head>
    <title>String Manipulation</title>
</head>

<body>
    <h2>String Manipulation</h2>
    <form method="post" action="">
        <label for="inputSentence">Enter a sentence:</label>
        <input type="text" name="inputSentence" id="inputSentence" required><br><br>

        <label for="inputWord">Enter a word to insert:</label>
        <input type="text" name="inputWord" id="inputWord" required><br><br>

        <label for="position">Enter the position to insert the word:</label>
        <input type="number" name="position" id="position" required><br><br>

        <label for="numChars">Number of characters to delete:</label>
        <input type="number" name="numChars" id="numChars" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $sentence = $_POST['inputSentence'];
        $word = $_POST['inputWord'];
        $position = $_POST['position'];
        $numChars = $_POST['numChars'];

        if ($position >= 0 && $position <= strlen($sentence)) {
            // Delete a small part from the sentence
            $deletedPart = substr($sentence, $position, $numChars);
            $sentence = substr_replace($sentence, '', $position, $numChars);

            // Insert the given word at the specified position
            $sentence = substr_replace($sentence, $word, $position, 0);

            echo "<h3>Modified Sentence:</h3>";
            echo $sentence;
            echo "<p>Deleted Part: $deletedPart</p>";
        } else {
            echo "<p>Invalid position. Position should be between 0 and the length of the sentence.</p>";
        }
    }
    ?>
</body>

