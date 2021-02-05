<?php
include_once("./scripts/db_connect.php");

$getrows = "select * from `book`";
$result = $conn->query($getrows);


echo("<table class='table table-striped'>
        <thead>
            <tr>
            <th scope='col'>id</th>
            <th scope='col'>barcode</th>
            <th scope='col'>Name</th>
            <th scope='col'>Description</th>
            <th scope='col'>availability</th>
            <th scope='col'>update</th>
            <th scope='col'>delete</th>
            </tr>
        </thead>
        <tbody>");
while($row = mysqli_fetch_assoc($result)) {
    if ($row["Availability"] == true){
        $Availability = "available";
    }
    else{
        $Availability = "unavailable";
    }
    echo("<tr>
            <th scope='row'>" . $row["BookID"] . "</th>
            <td>" . $row["Barcode"] . "</td>
            <td>" . $row["Name"] . "</td>
            <td>" . $row["Description"] . "</td>
            <td>" . $Availability . "</td>
          <td><a class='nav-link' href='index.php?content=update&bookid=" . $row["BookID"] . "'>update</a></td>          
          <td><a class='nav-link' href='index.php?content=Deletescript&bookid=" . $row["BookID"] . "'>delete</a></td>

            </tr>"); 
}
echo("  </tbody>
        </table>");
$conn->close();
?>