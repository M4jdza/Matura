<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Početna</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <div class="bibl">Biblioketa</div>

        <nav>
            <ul>
                <a href="index.php">
                    <li>Početna</li>
                </a>
                <a href="biblioteka.xml">
                    <li>Pregled</li>
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
    $korIme1 = "Test";
    $pass1 = "test123";
    $korIme2 = "Test2";
    $pass2 = "test2123";
    $poruka = "";

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $unetoIme = $_POST["name"];
        $unetaSifra = $_POST["password"];

        if ($unetoIme == $korIme1 || $unetoIme == $korIme2) {
            if ($unetoIme == $korIme1 && $unetaSifra == $pass1) {
                $poruka = $korIme1 . ", dobrodosli na stranicu!";
            } else if ($unetoIme == $korIme2 && $unetaSifra == $pass2) {
                $poruka =  $korIme2 . ", dobrodosli na stranicu!";
            } else {
                $poruka = "Neuspesna prijava.";
            }
        } else {
            $poruka = "Nalog ne postoji";
        }
    }
    ?>
    <main>
        <p class="mozete"> <strong>Možete se logovati sa sledećim nalozima: </strong></p> <br>

        <div class="nalozi">
            <div>
                Korisnicko ime: <?php echo $korIme1; ?> <br>
                Lozinka: <?php echo $pass1; ?> <br>
            </div>

            <div>
                Korisnicko ime: <?php echo $korIme2; ?> <br>
                Lozinka: <?php echo $pass2; ?> <br>
            </div>
        </div>

        <hr class="hr">

        <p>Unesite parametre za logovanje. <a href="#" class="link">Registrujte se</a> ako nemate nalog</p>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <fieldset>
                <legend>Forma za logovanje</legend>

                <label for="name">Korisnicko ime</label> <br>
                <input type="text" name="name"> <br><br>
                <label for="password">Lozinka</label> <br>
                <input type="password" name="password"> <br>
            </fieldset>
            <button class="dugme" type="submit">Prijava</button>
        </form>
        <?php echo $poruka; ?>
    </main>

    <footer> &copy; Gradska biblioteka</footer>

</body>

</html>