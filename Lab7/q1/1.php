<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name'])) {
        $name = $_POST['name'];
        echo "<p>Hello, $name!</p>";
    } elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['name'])) {
        $name = $_GET['name']; 
                echo "<p>Hello, $name!</p>";
    }
    ?>