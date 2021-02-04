<?php

//benodigde gegevens voor mysql server
include("./connect_db.php");

// contection  met mysqli

$sql = "SELECT * FROM `books`";
$result = mysqli_query($connection, $sql);
$tbody = "";
while ($record = mysqli_fetch_assoc($result)) {
    $tbody .= "<tr>
                <th scope='row'>{$record["id"]}</th>
                <td>{$record["firstname"]}</td>
                <td>{$record["lastname"]}</td>
                <td><a href='./index.php?content=update&id=" . $record["id"] . " '>
                <img src='./img/icons/b_edit.png' alt='pencil'>
                </td>
                 </tr>";
}

?>

<div class="container">
            <!-- De eerste drie Grid cards -->
            <div class="row row-cols-1 row-cols-md-3">
            <!-- Card 1 -->
            <div class="col mb-4">
                <div class="card h-100">
                <img src="./img/temp.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text"></p>
                    <button type="button" class="btn btn-danger btn-lg btn-block"><a href="https://duckduckgo.com/" class="shop-buttons">Voeg toe</a></button>
                </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col mb-4">
                <div class="card h-100">
                <img src="./img/temp.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a short card.</p>
                    <button type="button" class="btn btn-danger btn-lg btn-block"><a href="https://duckduckgo.com/" class="shop-buttons">Voeg toe</a></button>
                </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col mb-4">
                <div class="card h-100">
                <img src="./img/temp.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    <button type="button" class="btn btn-danger btn-lg btn-block"><a href="https://duckduckgo.com/" class="shop-buttons">Voeg toe</a></button>
                </div>
                </div>
            </div>

        </div>
</div>

<!-- De tweede container -->
<div class="container">
            <!-- De tweede laag Grid cards -->
            <div class="row row-cols-1 row-cols-md-3">
            <!-- Card 1 -->
            <div class="col mb-4">
                <div class="card h-100">
                <img src="./img/temp.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <button type="button" class="btn btn-danger btn-lg btn-block"><a href="https://duckduckgo.com/" class="shop-buttons">Voeg toe</a></button>
                </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col mb-4">
                <div class="card h-100">
                <img src="./img/temp.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a short card.</p>
                    <button type="button" class="btn btn-danger btn-lg btn-block"><a href="https://duckduckgo.com/" class="shop-buttons">Voeg toe</a></button>
                </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col mb-4">
                <div class="card h-100">
                <img src="./img/temp.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    <button type="button" class="btn btn-danger btn-lg btn-block"><a href="https://duckduckgo.com/" class="shop-buttons">Voeg toe</a></button>
                </div>
                </div>
            </div>

        </div>
</div>