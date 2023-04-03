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

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <div class="parent">
            <div class="element">
                <label for="erec">Engleska rec:</label>
                <input type="email" name="erec"> <br>
            </div>
            <div class="element">
                <label for="srec">Srpska rec:</label>
                <input type="email" name="srec"> <br>
            </div>
            <div class="element">
                <label for="com">Opis:</label>
                <textarea type="text" name="opis" rows="10" cols="20"> </textarea>
            </div>
            <button type="submit">Snimi</button>
        </div>
    </form>

</main>

<footer> &copy; Osnovna Škola "Sonja Marinković"</footer>

<body>
</body>

</html>