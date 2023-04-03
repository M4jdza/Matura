<?php
$servername = "localhost";
$username = "root";
$password = "";
$name = "el_recnik_b8";

$conn = mysqli_connect($servername, $username, $password, $name);

if (!$conn) {
  die("Greska pri povezivanju: " . mysqli_connect_error());
}
echo '
        <script type="text/javascript">
          window.onload = function () {
            console.log("Uspesno povezan sa bazom"); 
          } 
        </script>
     ';
