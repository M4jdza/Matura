<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortiranje tabele</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require('utilities/header.php') ?>

    <main>
        <h1>Efekti tabele</h1>

        <hr class="hr">

        <table id="Tabela">
            <tr>
                <th>Rbr</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Škola</th>
                <th>Poeni</th>
            </tr>
            <tr>
                <td>1.</td>
                <td>Pera</td>
                <td>Mikic</td>
                <td>OŠ “Vuk Karadžić”</td>
                <td>54</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Mika</td>
                <td>Zikic</td>
                <td>OŠ “Ivo Andrić”</td>
                <td>42</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Mika</td>
                <td>Zikic</td>
                <td>OŠ “Ivo Andrić”</td>
                <td>43</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Mika</td>
                <td>Mikic</td>
                <td>OŠ “Ivo Andrić”</td>
                <td>89</td>
            </tr>
        </table>

        <hr class="hr">

        <div class="dugmici">
            <button onclick="sortTable(4)">Sortiraj</button>
            <button onclick="obojiNeparne()">Oboji neparne</button>
            <button onclick="polozili(4)">Polozili</button>
            <button onclick="nisuPolozili(4)">Nisu polozili</button>
            <button onclick="izdvoji(4)">Izdvoji one koji su polozili</button>
        </div>
    </main>

    <?php require('utilities/footer.php') ?>

    <script src="js/script.js"></script>
</body>

</html>