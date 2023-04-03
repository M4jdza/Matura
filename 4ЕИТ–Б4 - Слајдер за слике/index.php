<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Слајдер за слике</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="naslov">
            <p>Основна Школа "Соња Маринковић"</p>
        </div>

        <nav>
            <ul>
                <a href="index.php">
                    <li>Почетна</li>
                </a>
                <a href="autor.php">
                    <li>О аутору</li>
                </a>
                <a href="uputstvo.php">
                    <li>Упутство</li>
                </a>
            </ul>
        </nav>
    </header>

    <main>

        <div class="pikaso">
            <div>
                П
                <br>
                И
                <br>
                К
                <br>
                А
                <br>
                С
                <br>
                О
            </div>
        </div>

        <div class="slike">
            <img src="slike/001.jpg" class="active" id="slika1" alt="001">
            <img src="slike/002.jpg" id="slika2" alt="002">
            <img src="slike/003.jpg" id="slika3" alt="003">
            <img src="slike/004.jpg" id="slika4" alt="004">
            <img src="slike/005.jpg" id="slika5" alt="005">
            <div class="opis">
                <br>
                <br>
                <h1 id="naslov">Stari gitarista</h1>
                <br>
                <br>
                <p id="years">1903</p>
                <br>
                <br>
                <p id="text">Stari gitarista je uljana slika Pabla Pikasa, koju je stvorio krajem 1903. i početkom 1904. Na njoj je prikazan stariji muzičar, iznemoglog čoveka sa izlizanom odećom, koji je pogrbljen nad gitarom dok svira na ulicama Barselone u Španiji.</p>
                <br>
                <br>
            </div>
        </div>
    </main>
    <div class="indikator">
        <span class="dot active" id="slika1-indikator"></span>
        <span class="dot" id="slika2-indikator"></span>
        <span class="dot" id="slika3-indikator"></span>
        <span class="dot" id="slika4-indikator"></span>
        <span class="dot" id="slika5-indikator"></span>
    </div>

    <footer>
        <p>Copyright &copy; Основна школа "Соња Маринковић"</p>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>