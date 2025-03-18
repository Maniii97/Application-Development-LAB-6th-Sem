<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['number'])) {
        $number = $_POST['number'];
        if (is_numeric($number)) {
            $square = $number * $number;
            echo "<p>The square of $number is $square.</p>";
        } else {
            echo "<p>Please enter a valid number.</p>";
        }
    } elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['number'])) {
        $number = $_GET['number'];
        if (is_numeric($number)) {
            $square = $number * $number;
            echo "<p>The square of $number is $square.</p>";
        } else {
            echo "<p>Please enter a valid number.</p>";
        }
    }
    ?>