<?php
    var_dump($_POST);
    // Null coalesce operator
    $test = $_POST["Availability"] ?? false;
    var_dump($test);
?>