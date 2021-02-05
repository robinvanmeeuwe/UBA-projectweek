<?php
include_once("./scripts/db_connect.php");
var_dump($_GET);

$getrows = "select * from `book` where BookID = " . $_GET['bookid'];
$result = $conn->query($getrows);
$row = mysqli_fetch_assoc($result);
// <th scope='row'>" . $row["BookID"] . "</th>
// <td>" . $row["Barcode"] . "</td>
// <td>" . $row["Name"] . "</td>
// <td>" . $row["Description"] . "</td>
// <td>" . $Availability . "</td>
if ($row["Availability"] == true){
    $Availability = false;
}
else{
    $Availability = true;
}
echo $row["Description"];
echo ("
<div class='container-fluid margin-fix'>
    <div class='row'>

        <div class='col-4'></div>

        <div class='card col-4 registratie-margin-top registratie-margin-bottom'>
            <div class='card-body'>
                <div class='text-center'>
                    <h4 class='card-subtitle mb-2 text-muted'>Boeken lenen</h4>
                </div>

                <form action='./index.php?content=updatescript' method='POST'>
                    <div class='form-container'>
                        <div class='form-row'>
                            <div class='form-group col-12'>
                                <label>barcode</label>
                                <input type='text' name='barcode' class='form-control' id='barcode' placeholder='barcode' value='" . $row["Barcode"] . "'>
                            </div>
                        </div>
                        <div class='form-row'>
                        <div class='form-group col-12'>
                            <label>Name</label>
                            <input type='text' name='Name' class='form-control' id='Name' placeholder='Name' value='" . $row["Name"] . "'>
                        </div>
                    </div>
                    <div class='form-row'>
                    <div class='form-group col-12'>
                        <label>Description</label>
                        <div class='form-floating'>
                            <textarea name='Description' id='Description' class='form-control' id='floatingTextarea2' style='height: 100px'  value=''>" . $row["Description"] . "</textarea>
                        </div>
                    </div>
                </div>

                <div class='form-row'>
                <div class='form-group col-12'>
                    <label>Availability</label>
                    <input type='checkbox' name='Availability' class='form-control' id='Availability' placeholder='Availability' checked='" . $Availability . "'>
                </div>
            </div>
            <div class='form-row'>
                        </div>
                        <button type='submit' class='btn btn-lg btn-block registratie-button'>Klaar</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class='col-4'></div>
<script>
document.getElementById('barcode').setAttribute('size', '20');
document.getElementById('Name').setAttribute('size', '20');
document.getElementById('Description').setAttribute('size', '20');
document.getElementById('').setAttribute('size', '20');
</script>
");
// $updaterow = "DELETE FROM `book` WHERE `book`.`BookID` = " . $_GET["bookid"];
// echo $updaterow;
// $conn->query($updaterow);
// $conn->close();
// header("location: ./index.php?content=administratie");