<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vremenska prognoza</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="head">
            <h1>Turistička agencija "Planinar"</h1>
        </div>
    </header>

    <nav> <?php include('header.php'); ?> </nav>

    <main>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <select name="gradovi" id="gradovi" onchange="newSrc();">
                <option value="https://naslovi.net/vremenska-prognoza/beograd" data-grad="beograd" selected>Beograd</option>
                <option value="https://naslovi.net/vremenska-prognoza/novi-sad" data-grad="novisad">Novi Sad</option>
                <option value="https://naslovi.net/vremenska-prognoza/smederevo" data-grad="smederevo">Smederevo</option>
                <option value="https://naslovi.net/vremenska-prognoza/kraljevo" data-grad="kraljevo">Kraljevo</option>
                <option value="https://naslovi.net/vremenska-prognoza/valjevo" data-grad="valjevo">Valjevo</option>
                <option value="https://naslovi.net/vremenska-prognoza/nis" data-grad="nis">Niš</option>
                <option value="https://naslovi.net/vremenska-prognoza/kragujevac" data-grad="kragujevac">Kragujevac</option>
                <option value="https://naslovi.net/vremenska-prognoza/cacak" data-grad="cacak">Čačak</option>
                <option value="https://naslovi.net/vremenska-prognoza/jagodina" data-grad="jagodina">Jagodina</option>
            </select>
            <br>
            <iframe src="https://naslovi.net/vremenska-prognoza/" frameborder="2" width="400" height="500" id="iframe"></iframe>
        </form>
    </main>

    <footer>
        <div>
            <p>&copy; Turistička agencija "Planinar"</p>
        </div>
    </footer>


    <script src="js/script.js"></script>
</body>

</html>