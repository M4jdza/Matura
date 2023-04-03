<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Звукови инструмената</title>
    <link rel="stylesheet" href="css/index.css">
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
                М
                <br>
                У
                <br>
                З
                <br>
                И
                <br>
                Ч
                <br>
                К
                <br>
                А
            </div>
            <div>
                К
                <br>
                У
                <br>
                Л
                <br>
                Т
                <br>
                У
                <br>
                Р
                <br>
                А
            </div>
        </div>

        <table>
            <tr>
                <th>Назив инструмента</th>
                <th>Слика инструмента</th>
                <th>Звук инструмента</th>
            </tr>

            <tr>
                <td>
                    <p>Гитара</p>
                </td>
                <td><img id="instrument" src="slike/gitara.jpg" onclick="link()" alt="gitara"></td>
                <td>
                    <img src="slike/zvucnik.svg" id="zvucnik" alt="gitara">
                    <br>
                    <a href="#">Сазнајте више</a>
                </td>
            </tr>

            <tr>
                <td>
                    <p>Виолина</p>
                </td>
                <td><img id="instrument" src="slike/violina.jpg" alt="violina"></td>
                <td>
                    <img src="slike/zvucnik.svg" id="zvucnik" alt="violina">
                    <br>
                    <a href="#">Сазнајте више</a>
                </td>
            </tr>

            <tr>
                <td>
                    <p>Клавир</p>
                </td>
                <td><img id="instrument" src="slike/klavir.jpg" alt="klavir"></td>
                <td>
                    <img src="slike/zvucnik.svg" id="zvucnik" alt="klavir">
                    <br>
                    <a href="#">Сазнајте више</a>
                </td>
            </tr>

            <tr>
                <td>
                    <p>Бубњеви</p>
                </td>
                <td><img id="instrument" src="slike/bubnjevi.jpg" alt="bubnjevi"></td>
                <td>
                    <img src="slike/zvucnik.svg" id="zvucnik" alt="bubnjevi">
                    <br>
                    <a href="#">Сазнајте више</a>
                </td>
            </tr>

            <tr>
                <td>
                    <p>Хармоника</p>
                </td>
                <td><img id="instrument" src="slike/harmonika.jpg" alt="harmonika"></td>
                <td>
                    <img src="slike/zvucnik.svg" id="zvucnik" alt="harmonika">
                    <br>
                    <a href="#">Сазнајте више</a>
                </td>
            </tr>

            <tr>
                <td>
                    <p>Контрафагот</p>
                </td>
                <td><img id="instrument" src="slike/kontrafor.webp" alt="kontrafor"></td>
                <td>
                    <img src="slike/zvucnik.svg" id="zvucnik" alt="kontrafor">
                    <br>
                    <a href="#">Сазнајте више</a>
                </td>
            </tr>
        </table>

    </main>

    <footer>
        <p>Copyright &copy; Основна школа "Соња Маринковић"</p>
    </footer>

    <script src="js/script.js"></script>

</body>

</html>