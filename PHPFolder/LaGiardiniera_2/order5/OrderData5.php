<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "lagiardinieramanagement"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$conferma_ordine_pv = ($_POST['conford']);
$giorno_arrivo = strtoupper($_POST['giorno_arrivo']);
$data_arrivo = $_POST['data_arrivo'];
$nomi_prodotti = $_POST['nome_prodotto']; 
$quantita_prodotti = $_POST['quantita']; 
$note = $_POST['note'];
$nome_responsabile_pv = $_POST['nome_responsabile_pv'];
$firma_responsabile_pv = $_POST['firma_responsabile_pv'];


$record_inseriti = false;

for ($i = 0; $i < count($nomi_prodotti); $i++) { 
    $nome_prodotto = $conn->real_escape_string($nomi_prodotti[$i]); 
    $quantita_prodotto = $conn->real_escape_string($quantita_prodotti[$i]); 
    
    if (!empty($nome_prodotto)) {
        $sql = "INSERT INTO order5 (conferma_ordine_pv, giorno_arrivo, data_arrivo, nome_prodotto, valore, 
                                     note, nome_responsabile_pv, firma_responsabile_pv)
                VALUES ('$conferma_ordine_pv','$giorno_arrivo', '$data_arrivo', '$nome_prodotto', 
                        '$quantita_prodotto', '$note', '$nome_responsabile_pv', '$firma_responsabile_pv')";
        
        if ($conn->query($sql) === TRUE) {
            
            $record_inseriti = true;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();

if ($record_inseriti) {
    header("Location: ../order2/order1.php");
    exit();
}
?>
