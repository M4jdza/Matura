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
    <div class="bibl">Knjiga utisaka</div>

    <nav>
        <ul>
            <a href="index.php">
                <li>Početna</li>
            </a>
            <a href="autor.php">
                <li>O autoru</li>
            </a>
            <a href="uputstvo.php">
                <li>Uputstvo</li>
            </a>
        </ul>
    </nav>
</header>

<?php

include('konekcija.php');

$ime = $imeErr = $email = $emailErr = $komentar = $komentarErr = $poruka = "";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['name'])) {
        $ime = $_POST['name'];
        $imeErr = "";
    } else $imeErr = "Obavezno polje.";

    if (!empty($_POST['email']) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['email'];
        $emailErr = "";
    } else $emailErr = "Obavezno polje.";

    if (!empty(trim($_POST['komentar']))) {
        $komentar = $_POST['komentar'];
        $komentarErr = "";
    } else $komentarErr = "Obavezno polje.";


    if ($ime != "" && $email != "" && $komentar != "") {
        $sql = "INSERT INTO Utisak(Ime, Email, Komentar)
        VALUES ('$ime', '$email', '$komentar')";
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

<main>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <div class="parent">
            <div class="element">
                <label for="name">Ime:</label>
                <input type="text" name="name"> <br>
                <?php echo $imeErr; ?>
            </div>
            <div class="element">
                <label for="email">Email:</label>
                <input type="email" name="email"> <br>
                <?php echo $emailErr; ?>
            </div>
            <div class="element">
                <label for="com">Komentar:</label>
                <textarea type="text" name="komentar" rows="10" cols="20"> </textarea>
                <?php echo $komentarErr; ?>
            </div>
            <button type="submit">Potvrdi</button>
        </div>
        <?php echo $poruka; ?>
    </form>
</main>

<footer> &copy; Muzej Srbije</footer>

<body>
</body>

</html>