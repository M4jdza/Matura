<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Србија и суседи</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="flex">
        <h1>Основна Школа "Соња Маринковић"</h1>
        <?php require('nav.php'); ?>
    </header>

    <main class="flex">
        <div>
            <h2>Србија и њени суседи</h2>
        </div>
        <div class="drzave flex">
            <pre>
                Г

                Е

                О

                Г

                Р

                А

                Ф

                И

                Ј

                А
            </pre>
            <img class="slika" src="slike/SRBIJA.jpg" alt="slika">

            <div class="srbija font flex absolute">
                <img src="slike/Zastave/Srbija.png" alt="Српска застава" width="25" height="20" data-ime="srbija" onmouseover="pusti(this)">
                <p onclick="otvori(this)" data-ime="srbija" id="srbija">Србија</p>
            </div>

            <div class="madjarska font flex absolute">
                <img src="slike/Zastave/madjarska.png" alt="Мађарска застава" width="25" height="20" data-ime="madjarska" onmouseover="pusti(this)">
                <p onclick="otvori(this)" data-ime="madjarska">Мађарска</p>
            </div>

            <div class="rumunija font flex absolute">
                <img src="slike/Zastave/Rumunija.jpg" alt="Румунска застава" width="25" height="20" data-ime="rumunija" onmouseover="pusti(this)">
                <p onclick="otvori(this)"  data-ime="rumunija">Румунија</p>
            </div>

            <div class="bugarska font flex absolute">
                <img src="slike/Zastave/Bugarska.png" alt="Бугарска застава" width="25" height="20" data-ime="bugarska" onmouseover="pusti(this)">
                <p onclick="otvori(this)" data-ime="bugarska">Бугарска</p>
            </div>

            <div class="makedonija font flex absolute">
                <img src="slike/Zastave/Makedonija.png" alt="Македонска застава" width="25" height="20" data-ime="makedonija" onmouseover="pusti(this)">
                <p onclick="otvori(this)" data-ime="makedonija">Македонија</p>
            </div>

            <div class="albanija font flex absolute">
                <img src="slike/Zastave/Albanija.jpg" alt="Албанска застава" width="25" height="20" data-ime="albanija" onmouseover="pusti(this)">
                <p onclick="otvori(this)" data-ime="albanija">Албанија</p>
            </div>

            <div class="crnaGora font flex absolute">
                <img src="slike/Zastave/Cg.png" alt="Црногорска застава" width="25" height="20" data-ime="cg" onmouseover="pusti(this)">
                <p onclick="otvori(this)" data-ime="cg">Црна Гора</p>
            </div>

            <div class="bih font flex absolute">
                <img src="slike/Zastave/bih.jpg" alt="Босанска застава" width="25" height="20" data-ime="bosna" onmouseover="pusti(this)">
                <p onclick="otvori(this)" data-ime="bosna">Bosna i Hercegovina</p>
            </div>

            <div class="hrvatska font flex absolute">
                <img src="slike/Zastave/Hrvatska.png" alt="Хрватска застава" width="25" height="20" data-ime="hrvatska" onmouseover="pusti(this)">
                <p onclick="otvori(this)" data-ime="hrvatska">Хрватска</p>
            </div>
        </div>
    </main>

    <footer>
        <div class="footerCont">
            <p>Copyright &copy; Основна Школа "Соња Маринковић"</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>