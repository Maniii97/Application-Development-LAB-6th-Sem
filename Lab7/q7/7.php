<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse a String</title>
    
</head>
<body>
    <h1>Reverse a String</h1>
    <form method="post">
        <label for="reverse_string">Enter a String:</label>
        <input type="text" id="reverse_string" name="reverse_string" required>
        <button type="submit" name="reverse">Reverse String</button>
    </form>

    <?php
    if (isset($_POST["reverse"])) {
        $stringToReverse = $_POST["reverse_string"];
        $reversedString = strrev($stringToReverse);
        echo "<p>The reversed string is: <strong>$reversedString</strong></p>";
    }
    ?>
</body>
</html>
