<?php 

include 'App.php';

$productType = $_GET['type'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swedshopping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="container">

    <h1 class="display-1 text-center"><b>Swedshopping</b></a></h1> <br><br>

    <div class="text-center">
        <span class="badge rounded-pill bg-success text-light">
            <a class="text-light" href="?type=women clothing">Women clothing</a>
        </span>
        <span class="badge rounded-pill bg-success text-light">
            <a class="text-light" href="?type=men clothing">Men clothing</a>
        </span>
        <span class="badge rounded-pill bg-success text-light">
            <a class="text-light" href="?type=jewelery">Jewelery</a>
        </span>

    </div>
    <hr><br>

    <h3 class="display-10 text-left">Products - 
    <?php 
    echo $productType;
    ?>
    </h3>
  
    <?php 
    App::main($productType);
    ?>
    

    
</body>

</html>