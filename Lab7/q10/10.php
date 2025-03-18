<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Validation</title>
</head>
<body>
    <h1>Login Validation</h1>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" name="login">Login</button>
    </form>

    <?php
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "admin" && $password === "1234") {
            echo "<p>Login Successful</p>";
        } else {
            echo "<p>Invalid Credentials</p>";
        }
    }
    ?>
</body>
</html>
