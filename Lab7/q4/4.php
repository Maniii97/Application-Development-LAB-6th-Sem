<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Celsius to Fahrenheit</title>
   
</head>
<body>
    <h1>Convert Celsius to Fahrenheit</h1>
    <form method="post">
        <label for="celsius">Enter Temperature in Celsius:</label>
        <input type="number" id="celsius" name="celsius" step="0.01" required>
        <button type="submit">Convert</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["celsius"])) {
        $celsius = $_POST["celsius"];
        $fahrenheit = ($celsius * 9/5) + 32;
        echo "<p>The temperature in Fahrenheit is: <strong>" . $fahrenheit . "°F</strong></p>";
    }
    ?>
</body>
</html>
