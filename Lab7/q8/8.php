<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['string1'], $_POST['string2'])) {
        $string1 = $_POST['string1'];
        $string2 = $_POST['string2']; 
        $concatenated = $string1 . " " . $string2;
        echo "<p>Concatenated String: $concatenated</p>";
    }
    ?>