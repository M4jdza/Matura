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
                <li>Uputstvo</li>
            </a>
        </ul>
    </nav>
</header>

<?php

include('konekcija.php');

$engleska = $opis = $prevod = $srpska = $poruka = "";

if (isset($_POST['smer'])) {
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $prevod = $_POST['smer'];

        switch ($prevod) {
            case 'se':
                $srpska = $_POST['srec'];
                $query = "SELECT * FROM Recnik WHERE Srpski = '$srpska' ";
                $results = mysqli_query($conn, $query);
                $row_count = mysqli_num_rows($results);

                while ($row = mysqli_fetch_array($results)) {
                    $engleska = $row['Engleski'];
                    $opis = $row['Opis'];
                }
                break;

            case 'es':
                $engleska = $_POST['erec'];
                $query = "SELECT * FROM Recnik WHERE Engleski = '$engleska' ";
                $results = mysqli_query($conn, $query);
                $row_count = mysqli_num_rows($results);

                while ($row = mysqli_fetch_array($results)) {
                    $srpska = $row['Srpski'];
                    $opis = $row['Opis'];
                }
                break;

            default:
                $poruka = "Pogresan izbor.";
                break;
        }
    }
}
?>

<main>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <div class="parent">
            <div class="element">
                <label for="smer">Smer:</label>
                <select name="smer" id="idk">
                    <option value="nista">Selektuj smer prevodjenja</option>
                    <option value="se">Srpsko - Engleski</option>
                    <option value="es">Englesko - Srpski</option>
                </select>
            </div>
            <div class="element">
                <label for="erec">Engleska rec:</label>
                <input type="text" name="erec" value="<?php echo $engleska; ?>"> <br>
            </div>
            <div class="element">
                <label for="srec">Srpska rec:</label>
                <input type="text" name="srec" value="<?php echo $srpska; ?>"> <br>
            </div>
            <div class="element">
                <label for="com">Opis:</label>
                <textarea type="text" name="opis" rows="10" cols="20"> <?php echo $opis; ?> </textarea>
            </div>
            <button type="submit">Prevedi</button>

            <?php echo $poruka; ?>
        </div>
    </form>

</main>

<footer> &copy; Osnovna Škola "Sonja Marinković"</footer>

<body>
</body>

</html>