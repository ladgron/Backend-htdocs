<!DOCTYPE HTML>
<html>
<head>
    <style>.error {color: #FF0000;}</style>
</head>
<body>

    <?php
    // Exempel: Vecka 01 - Måndag den 11 januari 2021 kl. 13:00
    date_default_timezone_set("Europe/Stockholm");
    $swedWeekDays = array("Söndag", "Måndag", "Tisdag", "Onsdag", "Tordag", "Fredag", "Lördag");
    echo "<h2>Vecka " . date("W") . " - " . $swedWeekDays[date("w")] . " den " . date("j M Y") . " kl. " . date("H:i") . "</h2><br>";

    // define variables and set to empty values
    $nameErr = $famnameErr = "";
    $name = $famname = $namewithoutspace = $famnamewithoutspace = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters
            if (!preg_match("/^[a-zA-Z-Ä-ä-Å-å-Ö-ö' ]*$/", $name)) {
                $nameErr = "Du för inte använda siffror eller specialtecken.";
            }
        }
        if (empty($_POST["famname"])) {
            $famnameErr = "Family name is required";
        } else {
            $famname = test_input($_POST["famname"]);
            // check if name only contains letters
            if (!preg_match("/^[a-zA-Z-Ä-ä-Å-å-Ö-ö' ]*$/", $famname)) {
                $famnameErr = "Du för inte använda siffror eller specialtecken.";
            }
        }

        //Namnet (förnamn och efternamn tillsammans utan mellanslag), får inte vara längre än 20 tecken.
        // Ta bort alla blanka tecken.
        $namewithoutspace = str_replace(' ', '', $name);
        $famnamewithoutspace = str_replace(' ', '', $famname);

        if (mb_strlen($famnamewithoutspace) + mb_strlen($namewithoutspace) > 20) {
            $famnameErr = "Förnamn och efternamn tillsammans kan inte vara längre än 20 tecken.";
            $nameErr = "Förnamn och efternamn tillsammans kan inte vara längre än 20 tecken.";
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h3>För att skapa en email address fyll i formuläret:</h3>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Namn: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        Efternamn: <input type="text" name="famname" value="<?php echo $famname; ?>">
        <span class="error">* <?php echo $famnameErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Skicka">
    </form>

    <?php
    // Byta ut alla stora bokstäver till små.
    $namewithoutspace = mb_strtolower($namewithoutspace);
    $famnamewithoutspace = mb_strtolower($famnamewithoutspace);

    // Byt ut å och ä mot a (överallt) - Byt ut ö mot o (överallt).
    $swedcharacter = array('ä', 'ö', 'å');
    $Engcharacter = array('a', 'o', 'a');
    $namewithoutspace = str_replace($swedcharacter, $Engcharacter, $namewithoutspace);
    $famnamewithoutspace = str_replace($swedcharacter, $Engcharacter, $famnamewithoutspace);

    // Visa e-postadressen under formuläret.
    $printEmail = "<h3>Här är din Email: " . $namewithoutspace . "." . $famnamewithoutspace . "@yh.nackademin.se</h3><br>";

    if ($famnameErr == "" && $nameErr == "" && $namewithoutspace != "") {
        echo $printEmail;
    }

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    ?>

</body>
</html>