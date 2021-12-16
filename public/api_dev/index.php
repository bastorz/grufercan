<?php
$dominioPermitido = "http://localhost";
header("Access-Control-Allow-Origin: $dominioPermitido");
header("Access-Control-Allow-Headers: content-type");
header("Access-Control-Allow-Methods: OPTIONS,GET,PUT,POST,DELETE");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$input = file_get_contents('php://input');
echo($input);


$filename = './db/news/noticia1.json';
// read the file if present
$handle = @fopen($filename, 'r+');
// create the file if needed
if ($handle === null)
{
    $handle = fopen($filename, 'w+');
}

if ($handle)
{
    // seek to the end
    fseek($handle, 0, SEEK_END);

    // are we at the end of is the file empty
    if (ftell($handle) > 0)
    {
        // move back a byte
        fseek($handle, -1, SEEK_END);

        // add the trailing comma
        fwrite($handle, ',', 1);
        // add the new json string
        fwrite($handle, $input . "]");
    }
    else
    {
        // write the first event inside an array
        fwrite($handle, "[" . $input . "]");
    }

        // close the handle on the file
        fclose($handle);
}
}
