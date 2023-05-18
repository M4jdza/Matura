<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pocetna</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<header>
    <div class="bibl">Elektronski rečnik</div>

    <nav>
        <ul>
            <a href="index.php">
                <li>Rečnik</li>
            </a>
            <a href="nova_rec.php">
                <li>Dodavanje novih reči</li>
            </a>
            <a href="uputstvo.php">
                <li>Autor</li>
            </a>
        </ul>
    </nav>
</header>

<main>

    <?php

    include('konekcija.php');

    $engleskaRec = $engleskaRecErr = $srpskaRec = $srpskaRecErr = $opis = $poruka = "";

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['erec'])) {
            $engleskaRec = $_POST['erec'];
            $engleskaRecErr = "";
        } else
            $engleskaRecErr = "Obavezno polje.";

        if (!empty($_POST['srec'])) {
            $srpskaRec = $_POST['srec'];
            $srpskaRecErr = "";
        } else
            $srpskaRecErr = "Obavezno polje.";

            $opis = $_POST['opis'];

        if (!empty($engleskaRec) && !empty($srpskaRec)) {
            $sql = "INSERT INTO Recnik(Engleski, Srpski, Opis)
        VALUES ('$engleskaRec', '$srpskaRec', '$opis')";
            if ($conn->query($sql) === TRUE) {
                $poruka = 'Uspesno uneto';
            } else {
                $poruka = "Greska: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo '<script type="text/javascript">
                console.log("Greska."); 
              </script>';
        }
        mysqli_close($conn);
    }

    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <div class="parent">
            <div class="element">
                <label for="erec">Engleska rec:</label>
                <input type="text" name="erec">
                <?php echo $engleskaRecErr ?> <br>
            </div>
            <div class="element">
                <label for="srec">Srpska rec:</label>
                <input type="text" name="srec">
                <?php echo $srpskaRecErr ?> <br>
            </div>
            <div class="element">
                <label for="com">Opis:</label>
                <textarea type="text" name="opis" rows="10" cols="20"> </textarea>
            </div>
            <button type="submit">Snimi</button>
            <?php echo $poruka ?>
        </div>
    </form>

</main>

<footer> &copy; Osnovna Škola "Sonja Marinković"</footer>

<body>
</body>

</html>