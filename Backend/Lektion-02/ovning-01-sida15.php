<h1>Hämta för- och efternamn med GET-request</h1>
<ul>
    <li><a href="exempel-01.php">exempel-01.php</a>
    <li><a href="exempel-01.php?firstname=Annika">exempel-01.php?firstname=Annika</a>
    <li><a href="exempel-01.php?lastname=Rengfelt">exempel-01.php?lastname=Rengfelt</a>
    <li><a href="exempel-01.php?firstname=Annika&lastname=Rengfelt">exempel-01.php?firstname=Annika&lastname=Rengfelt</a>
</ul>

<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";

$firstname = $_GET['firstname'] ?? "SAKNAS";
$lastname = $_GET['lastname'] ?? "SAKNAS";
echo "<p>Hej $firstname $lastname!</p>";
?>