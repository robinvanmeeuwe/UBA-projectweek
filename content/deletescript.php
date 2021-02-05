<?php
include_once("./scripts/db_connect.php");


$deleterow = "DELETE FROM `book` WHERE `book`.`BookID` = " . $_GET["bookid"];
echo $deleterow;
$conn->query($deleterow);
$conn->close();
header("location: ./index.php?content=administratie");