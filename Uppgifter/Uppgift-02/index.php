<?php

include 'App.php';

$productType = $_GET['type'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tindrashopping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="container">

    <body style='background-color:#e6e6e6'>

        <div class="text-center"><img src="images/photo_2021-01-20_09-24-20.jpg" width="800" height="400" ;alt="logo bild"></div> <br>


        <div class="text-center">

            <button type="button" class="btn btn-warning btn-lg"><span class="badge squared-pill text-light">
                    <a class="text-dark" href="?type=women clothing">Women's clothing</a>
                </span></button>
            <button type="button" class="btn btn-warning btn-lg"><span class="badge squared-pill text-light">
                    <a class="text-dark" href="?type=men clothing">Men's clothing</a>
                </span></button>
            <button type="button" class="btn btn-warning btn-lg"><span class="badge squared-pill text-light">
                    <a class="text-dark" href="?type=jewelery">Jewelery</a>
                </span></button>

        </div>
        <br>
        <hr style="height:10px;border-width:0;color:gray;background-color:gray"><br>

        <h3 class="display-10 text-left">Products >
            <?php
            echo $productType;
            ?>

        </h3>

        <?php
        App::main($productType);
        ?>



    </body>

</html>