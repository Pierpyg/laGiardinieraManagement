<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestionalelacontadina";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $conferma_ordine_pv =$_POST['conford']; 
    $giorno_arrivo = isset($_POST['giorno_arrivo']) ? strtoupper($_POST['giorno_arrivo']) : '';
    $data_arrivo = isset($_POST['data_arrivo']) ? $_POST['data_arrivo'] : '';
    $categoria = $_POST['categoria']; 
    $nome_prodotto = $_POST['nome_prodotto']; 
    $unita = $_POST['unita']; 
    $valore = $_POST['valore']; 
    $note = isset($_POST['note']) ? $_POST['note'] : '';
    $nome_responsabile_pv = isset($_POST['nome_responsabile_pv']) ? $_POST['nome_responsabile_pv'] : '';
    $firma_responsabile_pv = isset($_POST['firma_responsabile_pv']) ? $_POST['firma_responsabile_pv'] : '';
    
    // Prepares SQL query for data entry
    $sql = "INSERT INTO ordine3 (conferma_ordine_pv, giorno_arrivo, data_arrivo, categoria, nome_prodotto, 
                                 unita, valore, note, nome_responsabile_pv, firma_responsabile_pv) VALUES ";
    
    // Construct the values to be included in the SQL query
    $values = array();
    for ($i = 0; $i < count($nome_prodotto); $i++) {
        // Checks if the value is not empty before adding it to the query
        if (!empty($valore[$i])) {
            $categoria_sql = $conn->real_escape_string($categoria[$i]);
            $nome_prodotto_sql = $conn->real_escape_string($nome_prodotto[$i]);
            $unita_sql = $conn->real_escape_string($unita[$i]);
            $valore_sql = $conn->real_escape_string($valore[$i]);
            
            // Add the values to the list of values to be entered
            $values[] = "('$conferma_ordine_pv', '$giorno_arrivo', '$data_arrivo', '$categoria_sql', 
                          '$nome_prodotto_sql', '$unita_sql', '$valore_sql', '$note', '$nome_responsabile_pv', 
                          '$firma_responsabile_pv')";
        }
    }
    
    // Check if there are values to be entered
    if (!empty($values)) {
        // Merge all comma separated values for SQL query
        $sql .= implode(", ", $values);
        
        // Run the insertion query
        if ($conn->query($sql) === TRUE) {
            // Data successfully inserted, set inserimentoAvvenuto to true
            $inserimentoAvvenuto = true;
        } else {
            echo "Error in query execution: " . $conn->error;
            $inserimentoAvvenuto = false;
        }
    } else {
        echo "No data to be entered into the database.";
        $inserimentoAvvenuto = false;
    }
    
    
    $conn->close();

    if ($inserimentoAvvenuto) {
        header("Location: ../order2/order4.php");
        exit();
    }
}
?>


