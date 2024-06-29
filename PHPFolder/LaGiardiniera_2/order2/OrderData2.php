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
    $confermaordine =$_POST['conford']; 
    $giorno = strtoupper($_POST['giorno']);
    $data = htmlspecialchars($_POST['data']);
    
    $note = htmlspecialchars($_POST['note']);
    $nome = htmlspecialchars($_POST['nome']);
    $firma = htmlspecialchars($_POST['firma']);
    
    $piatti = $_POST['piatti'];
    $quantita_2 = $_POST['quantita_2'];
    $quantita_4 = $_POST['quantita_4'];
    $quantita_6 = $_POST['quantita_6'];
    $inserimentoAvvenuto = false;
    foreach ($piatti as $index => $piatto) {
        
        
        $quant_2 = $quantita_2[$index];
        $quant_4 = $quantita_4[$index];
        $quant_6 = $quantita_6[$index];
        if (!empty($quant_2 || $quant_4 || $quant_6)) {
            
            $sql_insert = "INSERT INTO order2 (conferma_ordine_pv, giorno_arrivo, data_arrivo, nome_prodotto, 
                                                pirofila_2, pirofila_4, pirofila_6, note, nome_responsabile_pv, 
                                                firma_responsabile_pv)
                           VALUES('$confermaordine', '$giorno', '$data', '$piatto', '$quant_2','$quant_4',
                                  '$quant_6' , '$note', '$nome', '$firma')";
            
            if ($conn->query($sql_insert) === TRUE) {
                $inserimentoAvvenuto = true;
            } else {
                echo "Error: {$sql_insert} <br> {$conn->error}<br>";
            }
        }
    }
    
}

$conn->close();
if ($inserimentoAvvenuto) {
    header("Location: ../order2/order3.php");
    exit();
}
?>
