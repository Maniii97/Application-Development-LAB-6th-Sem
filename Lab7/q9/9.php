<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check for Palindrome</title>
   
</head>
<body>
    <h1>Palindrome Checker</h1>
    <form method="post">
        <label for="word">Enter a Word:</label>
        <input type="text" id="word" name="word" required>
        <button type="submit" name="check_palindrome">Check Palindrome</button>
    </form>

    <?php
    if (isset($_POST["check_palindrome"])) {
        $word = $_POST["word"];
        $reversedWord = strrev($word);

        if (strcasecmp($word, $reversedWord) == 0) {
            echo "<p><strong>'$word'</strong> is a Palindrome.</p>";
        } else {
            echo "<p><strong>'$word'</strong> is Not a Palindrome.</p>";
        }
    }
    ?>
</body>
</html>
