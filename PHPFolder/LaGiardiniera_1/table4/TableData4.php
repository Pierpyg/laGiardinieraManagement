<?php

session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lagiardinieramanagement";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $data = htmlspecialchars($_POST['data']);
    $puntovendita = htmlspecialchars($_POST['puntovendita']);
    $nomerichiedente = htmlspecialchars($_POST['nomerichiedente']);
    $note = htmlspecialchars($_POST['note']);
    $firmarichiedente = htmlspecialchars($_POST['firmarichiedente']);
    $firmaufficioacquisti = htmlspecialchars($_POST['firmaufficioacquisti']);
    
    
    $numeri = $_POST['numero'];
    $quantita = $_POST['quantita'];
    $ums = $_POST['um'];
    $descrizioni = $_POST['descrizionemerce'];
    
    
    $inserimentoAvvenuto = false;
    
    
    foreach ($quantita as $index=>$quant) {
        if (!empty($quant)) {
            
            $numero = htmlspecialchars($numeri[$index]);
            $um = htmlspecialchars($ums[$index]);
            $descrizionemerce = htmlspecialchars($descrizioni[$index]);
            
            
            $sql_insert = "INSERT INTO table4 (Data, PuntoVendita, NomeRichiedente, Numero, Quantita, UM, 
                                                 DescrizioneMerce, Note, FirmaRichiedente, FirmaUfficioAcquisti)
                           VALUES('$data', '$puntovendita', '$nomerichiedente', '$numero', '$quant', '$um', 
                                  '$descrizionemerce', '$note', '$firmarichiedente', '$firmaufficioacquisti')";
            
            
            if ($conn->query($sql_insert) === TRUE) {
                $inserimentoAvvenuto = true;
            } else {
                echo "Error: {$sql_insert} <br> {$conn->error}<br>";
            }
        }
    }
    
    
    if ($inserimentoAvvenuto) {
        echo "New record successfully created<br>";
    }
}


$conn->close();
?>
