<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Interest Calculator</title>
    
</head>
<body>
    <h1>Simple Interest Calculator</h1>
    <form method="post">
        <label for="principal">Principal Amount (P):</label>
        <input type="number" id="principal" name="principal" step="0.01" required>
        
        <label for="rate">Rate of Interest (R) in %:</label>
        <input type="number" id="rate" name="rate" step="0.01" required>
        
        <label for="time">Time (T) in years:</label>
        <input type="number" id="time" name="time" step="0.01" required>
        
        <button type="submit">Calculate Simple Interest</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $principal = $_POST["principal"];
        $rate = $_POST["rate"];
        $time = $_POST["time"];
        
        // Calculate Simple Interest
        $simple_interest = ($principal * $rate * $time) / 100;

        // Display the result
        echo "<p>The calculated Simple Interest is: <strong>" . $simple_interest . "</strong></p>";
    }
    ?>
</body>
</html>
