<?php

/****************************************
 * 
 *                READ
 * Läs tabellen messages från databasen
 * Presentera resultatet i en HTML-tabell
 * 
 ***************************************/

// Hämta $conn (en instans av PDO)
require_once("database.php");

// Förbered en SQL-sats
$stmt = $conn->prepare("SELECT * FROM messages");

// Kör SQL-satsen
$stmt->execute();

// Hämta alla rader som finns i messages
// fetchAll()
// Returns an array containing all of the result set rows
$result = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Meddelande listan</title>
</head>

<body class="container">

    <?php
    $table = "
      <table class ='table table-hover'>
          <tr>
             <th>Namn</th>
             <th>E-post</th>
             <th>Meddelande</th>            
          </tr>
     ";


    foreach ($result as $key => $value) {
        $id = $value['id'];

        $table .= "
                <tr>
                 <td>$value[name]</td>
                 <td>$value[email]</td>
                 <td>$value[textMessage]</td>

                 <td>
                     <a href='delete.php?id=$value[id]' 
                     class='btn btn-sm btn-outline-danger'>Radera</a>
                 </td>     
                </tr>
              
            ";
    }
    $table .= "</table>";
    echo $table;
    ?>

    <a href='deleteall.php' class='btn btn-sm btn-outline-danger'>
        Radera alla meddelanden
    </a>

    <hr>
    <footer class="text-center">
        Copywrite &copy;
        <?php echo "Admin" . " " . date('Y');
        ?>
    </footer>


</body>

</html>