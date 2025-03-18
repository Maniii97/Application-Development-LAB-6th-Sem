<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Length Finder</title>
    
</head>
<body>
    <h1>Find String Length</h1>
    <form method="post">
        <label for="string_length">Enter a String:</label>
        <input type="text" id="string_length" name="string_length" required>
        <button type="submit" name="find_length">Find Length</button>
    </form>

    <?php
    if (isset($_POST["find_length"])) {
        $inputString = $_POST["string_length"];
        $length = strlen($inputString);
        echo "<p>The length of the string is: <strong>$length</strong></p>";
    }
    ?>
</body>
</html>
