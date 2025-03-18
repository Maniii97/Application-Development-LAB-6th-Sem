<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['number'])) {
        $number = $_POST['number'];
        if (is_numeric($number) && intval($number) == $number) {
            if ($number % 2 == 0) {
                echo "<p>$number is even.</p>";
            } else {
                echo "<p>$number is odd.</p>";
            }
        } else {
            echo "<p>Please enter a valid integer.</p>";
        }
    } elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['number'])) {
        $number = $_GET['number'];
        if (is_numeric($number) && intval($number) == $number) {
            if ($number % 2 == 0) {
                echo "<p>$number is even.</p>";
            } else {
                echo "<p>$number is odd.</p>";
            }
        } else {
            echo "<p>Please enter a valid integer.</p>";
        }
    }
    ?>