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
        <h1>Sortiranje tabele</h1>

        <hr class="hr">

        <table id="Tabela">
            <tr>
                <th onclick="sortTable(0)"><a href="#">Rbr</a></th>
                <th onclick="sortTable(1)"><a href="#">Ime</th>
                <th onclick="sortTable(0)"><a href="#">Prezime</th>
            </tr>
            <tr>
                <td>1.</td>
                <td>Pera</td>
                <td>Mikic</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Mika</td>
                <td>Zikic</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Zika</td>
                <td>Peric</td>
            </tr>
        </table>
    </main>

    <?php require('utilities/footer.php') ?>

    <script src="js/script.js"></script>
</body>

</html>