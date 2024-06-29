<?php
// Starts a new session or resumes an existing one
session_start();

// Data for database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lagiardinieramanagement";

// Create a new connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gets and sanitizes the data submitted via the form
    $data = htmlspecialchars($_POST['data']);
    $puntovendita = htmlspecialchars($_POST['puntovendita']);
    $nomerichiedente = htmlspecialchars($_POST['nomerichiedente']);
    $note = htmlspecialchars($_POST['note']);
    $firmarichiedente = htmlspecialchars($_POST['firmarichiedente']);
    $firmaufficioacquisti = htmlspecialchars($_POST['firmaufficioacquisti']);
    
    // Gets item data from the form
    $numeri = $_POST['numero'];
    $quantita = $_POST['quantita'];
    $ums = $_POST['um'];
    $descrizioni = $_POST['descrizionemerce'];
    
    // Variable to keep track of the entry made
    $inserimentoAvvenuto = false;
    
    // Cycle through each quantity
    foreach ($quantita as $index => $quant) {
        // Checks whether the quantity is not empty
        if (!empty($quant)) {
            // Sanitize article data
            $numero = htmlspecialchars($numeri[$index]);
            $um = htmlspecialchars($ums[$index]);
            $descrizionemerce = htmlspecialchars($descrizioni[$index]);
            
            // Query to enter data into the database
            $sql_insert = "INSERT INTO table1 (Data, PuntoVendita, NomeRichiedente, Numero, Quantita, UM, 
                                                 DescrizioneMerce, Note, FirmaRichiedente, FirmaUfficioAcquisti)
                           VALUES('$data', '$puntovendita', '$nomerichiedente', '$numero', '$quant', '$um', 
                                  '$descrizionemerce', '$note', '$firmarichiedente', '$firmaufficioacquisti')";
            
            // Runs the query and checks if it was successful
            if ($conn->query($sql_insert) === TRUE) {
                $inserimentoAvvenuto = true;
            } else {
                // Print an error message if the query failed
                echo "Error: {$sql_insert} <br> {$conn->error}<br>";
            }
        }
    }
    
    // If at least one entry was successful, prints a confirmation message
    if ($inserimentoAvvenuto) {
        echo "New record successfully created<br>";
    }
}

// Closes the connection to the database
$conn->close();
?>


