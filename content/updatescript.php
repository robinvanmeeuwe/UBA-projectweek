<?php
include_once("./scripts/db_connect.php");
include_once("./content/sanitize.php");
    // Null coalesce operator
    $Availability = $_POST["Availability"] = true ?? false;
    $updaterow = "UPDATE `book` SET `Barcode` = '" . sanitize($_POST["barcode"]) .  
    "', `Name` = '" . sanitize($_POST["Name"]) .  
    "', `Description` = '" . sanitize($_POST["Description"]) . 
    "' `Availability` = '" . $Availability . 
    "' WHERE `book`.`BookID` = 1";
    echo $updaterow;
$conn->query($updaterow);
$conn->close();
header("location: ./index.php?content=administratie");
?>