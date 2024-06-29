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
    
    
    $conferma_ordine_pv = isset($_POST['conferma_ordine_pv']) ? htmlspecialchars($_POST['conferma_ordine_pv']) : '';
    $giorno_arrivo = isset($_POST['giorno_arrivo']) ? strtoupper($_POST['giorno_arrivo']) : '';
    $data_arrivo = isset($_POST['data_arrivo']) ? htmlspecialchars($_POST['data_arrivo']) : '';
    $note = isset($_POST['note']) ? htmlspecialchars($_POST['note']) : '';
    $nome_responsabile_pv = isset($_POST['nome_responsabile_pv']) ? htmlspecialchars($_POST['nome_responsabile_pv']) : '';
    $firma_responsabile_pv = isset($_POST['firma_responsabile_pv']) ? htmlspecialchars($_POST['firma_responsabile_pv']) : '';
    
    
    $nomi_prodotti = $_POST['nome_prodotto'];
    $quantita_monouso_1 = $_POST['quantita_monouso_1'];
    $quantita_monouso_2 = $_POST['quantita_monouso_2'];
    $quantita_monouso_4 = $_POST['quantita_monouso_4'];
    $quantita_monouso_6 = $_POST['quantita_monouso_6'];
    $nomi_prodotti_2 = $_POST['nome_prodotto_2'];
    $quantita_tegamini = $_POST['quantita_tegamini'];
    
    $inserimentoAvvenuto = false;
    
    // Calculation of totals for all columns
    $totale_monouso_1 = 0;
    $totale_monouso_2 = 0;
    $totale_monouso_4 = 0;
    $totale_monouso_6 = 0;
    $totale_tegamini = 0;
    
    // Function to update the total, also checking if the value is not empty
    function aggiornaTotale(&$totale, $valore) {
        if ($valore !== '') {
            $totale += (float) $valore;
        }
    }
    
    // Perform insertion for each product
    for ($i = 0; $i < count($nomi_prodotti); $i++) {
        // Sanitizing and escaping data to avoid SQL injection
        $nome_prodotto = $conn->real_escape_string($nomi_prodotti[$i]);
        $quantita_monouso_1_val = isset($quantita_monouso_1[$i]) ? $conn->real_escape_string($quantita_monouso_1[$i]) : '';
        $quantita_monouso_2_val = isset($quantita_monouso_2[$i]) ? $conn->real_escape_string($quantita_monouso_2[$i]) : '';
        $quantita_monouso_4_val = isset($quantita_monouso_4[$i]) ? $conn->real_escape_string($quantita_monouso_4[$i]) : '';
        $quantita_monouso_6_val = isset($quantita_monouso_6[$i]) ? $conn->real_escape_string($quantita_monouso_6[$i]) : '';
        $nome_prodotto_2 = isset($nomi_prodotti_2[$i]) ? $conn->real_escape_string($nomi_prodotti_2[$i]) : '';
        $quantita_tegamini_val = isset($quantita_tegamini[$i]) ? $conn->real_escape_string($quantita_tegamini[$i]) : '';
        
        // Check that the product name is not blank
        if (!empty($nome_prodotto)) {
            // Update totals
            aggiornaTotale($totale_monouso_1, $quantita_monouso_1_val);
            aggiornaTotale($totale_monouso_2, $quantita_monouso_2_val);
            aggiornaTotale($totale_monouso_4, $quantita_monouso_4_val);
            aggiornaTotale($totale_monouso_6, $quantita_monouso_6_val);
            aggiornaTotale($totale_tegamini, $quantita_tegamini_val);
            
            
            // Query for inserting data into the database table
            $sql = "INSERT INTO order1 (conferma_ordine_pv, giorno_arrivo, data_arrivo, nome_prodotto, 
                                         quantita_monouso_1, quantita_monouso_2, quantita_monouso_4, 
                                         quantita_monouso_6, nome_prodotto_2, quantita_tegamini, note, 
                                         nome_responsabile_pv, firma_responsabile_pv)
                    VALUES ('$conferma_ordine_pv', '$giorno_arrivo', '$data_arrivo', '$nome_prodotto', 
                            '$quantita_monouso_1_val', '$quantita_monouso_2_val', '$quantita_monouso_4_val', 
                            '$quantita_monouso_6_val', '$nome_prodotto_2', '$quantita_tegamini_val', '$note', 
                            '$nome_responsabile_pv', '$firma_responsabile_pv')";
            
            if ($conn->query($sql) === TRUE) {
                $inserimentoAvvenuto = true;
            } else {
                echo "Error: {$sql} <br> {$conn->error}<br>";
            }
        }
    }
    
    // Insertion of line "TOTAL" for nome_prodotto and nome_prodotto_2
    if (!empty($nomi_prodotti)) {
        $sql_totale = "INSERT INTO ordine1 (conferma_ordine_pv, nome_prodotto, nome_prodotto_2, 
                                            quantita_monouso_1, quantita_monouso_2, quantita_monouso_4, 
                                            quantita_monouso_6, quantita_tegamini, note, nome_responsabile_pv, 
                                            firma_responsabile_pv)
                       VALUES ('$conferma_ordine_pv', 'TOTAL', 'TOTAL', '$totale_monouso_1', 
                                '$totale_monouso_2', '$totale_monouso_4', '$totale_monouso_6', 
                                '$totale_tegamini', '$note', '$nome_responsabile_pv', 
                                '$firma_responsabile_pv')";
        $conn->query($sql_totale);
    }
    
    if ($inserimentoAvvenuto) {
        echo "New records successfully created<br>";
    }
    
    $conn->close();
    // If input was successful, redirects after one second
    if ($inserimentoAvvenuto) {
        header("Location: ../order2/order2.php");
        exit();
    }
}
?>


