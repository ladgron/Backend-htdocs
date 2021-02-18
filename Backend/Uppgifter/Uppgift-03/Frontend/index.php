<?php
include 'App.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Express Webshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="container">

    <body style='background-color:#e6e6e6'>

        <div class="text-center"><img src="images/photo_2021-01-25_22-41-33.jpg" width="600" height="300" ;alt="logo bild"></div> <br>

        <hr style="height:10px;border-width:0;color:gray;background-color:gray"><br>

        <h3 class="display-10 text-left">Products > Women's clothing</h3>

        <?php
        App::main();
        ?>

    </body>

</html>