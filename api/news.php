<?php
$dominioPermitido = "http://localhost";
header("Access-Control-Allow-Origin: $dominioPermitido");
header("Access-Control-Allow-Headers: content-type");
header("Access-Control-Allow-Methods: OPTIONS,GET,PUT,POST,DELETE");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  foreach ($_POST as $key => $value) {
    echo "Field " . htmlspecialchars($key) . " is " . htmlspecialchars($value) . "<br>";
  }
}


// $fp = fopen('results.json', 'w');
// fwrite($fp, json_encode($body));
// fclose($fp);
