<?php
session_start(); 

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "lagiardinieramanagement"; 


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error); 
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conferma_ordine_pv =$_POST['conford'];
    $giorno_arrivo = $_POST['giorno_arrivo']; 
    $data_arrivo = htmlspecialchars($_POST['data_arrivo']); 
    $note = htmlspecialchars($_POST['note']); 
    $nome_responsabile_pv = htmlspecialchars($_POST['nome_responsabile_pv']); 
    $firma_responsabile_pv = htmlspecialchars($_POST['firma_responsabile_pv']); 
    
    $nome_prodotto = $_POST['nome_prodotti']; 
    $valore = $_POST['valore']; 
    
    $inserimentoAvvenuto = false; 
    
    // Preparation of SQL query for inserting data into table 'order4'
    $stmt = $conn->prepare("INSERT INTO order4 (conferma_ordine_pv, giorno_arrivo, data_arrivo, nome_prodotto, 
                                                 valore, note, nome_responsabile_pv, firma_responsabile_pv) 
                                                 VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
    // Checks whether the query preparation was successful
    if (!$stmt) {
        die("Error in query preparation: " . $conn->error); 
    }
    
    // Binding of the prepared query parameters
    $stmt->bind_param("ssssisss", $conferma_ordine_pv, $giorno_arrivo, $data_arrivo, $nome_prodotto, $val, 
                                  $note, $nome_responsabile_pv, $firma_responsabile_pv);
    
    // Iteration through the array of values to perform the insertion for each selected product
    foreach ($valore as $index => $val) {
        if (!empty($val)) { 
            $nome_prodotti = htmlspecialchars($nome_prodotto[$index]); 
            $quantita_key = 'quantita_' . $val; 
            
            
            if (isset($_POST[$quantita_key])) {
                $quantita = $_POST[$quantita_key]; 
                
                // Binding of the updated parameters of the prepared query
                $stmt->bind_param("ssssisss", $conferma_ordine_pv, $giorno_arrivo, $data_arrivo, $nome_prodotti, 
                                              $quantita, $note, $nome_responsabile_pv, $firma_responsabile_pv);
                
                // Executing the prepared query
                if ($stmt->execute()) {
                    $inserimentoAvvenuto = true; 
                } else {
                    echo "Error in query execution: {$stmt->error}<br>"; 
                }
            }
        }
    }
   
    $stmt->close();
}


$conn->close();

if ($inserimentoAvvenuto) {
    header("Location: ../order2/order5.php");
    exit();
} else {
    echo "No data entered.";
}
?>

