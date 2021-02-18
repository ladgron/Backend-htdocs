<?php

/***************************************
 * 
 *                CREATE
 *          Skapa en ny kontakt
 * 
 ***************************************/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("database.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $textMessage = $_POST['textMessage'];


    // Remove all illegal characters from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === true) {
        echo ("$email is not a valid email address");
    } else {
        $nameNew = filter_var($name, FILTER_SANITIZE_STRING);
        //echo $nameNew;
        $textMessageNew = filter_var($textMessage, FILTER_SANITIZE_STRING);
        //echo $textMessageNew;

        $stmt = $conn->prepare("INSERT INTO messages (name, email, textMessage)
    VALUES (:name, :email, :textMessage)");

        $stmt->bindParam(':name', $nameNew);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':textMessage', $textMessageNew);

        $stmt->execute();
        $last_id = $conn->lastInsertId();
    }
}
?>
Tack för ditt meddelande! <br>
<a href="index.php">Klicka här för att skicka ett till meddelande!</a>