<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lagiardinieramanagement";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to calculate prices and margins
function calcolaPrezziEMargini($prezzo_acquisto, $iva_acquisto, $prezzo_vendita, $iva_vendita) {
    // Converts values to float
    $prezzo_acquisto_float = floatval($prezzo_acquisto);
    $iva_acquisto_float = floatval($iva_acquisto);
    $prezzo_vendita_float = floatval($prezzo_vendita);
    $iva_vendita_float = floatval($iva_vendita);
    
    // Calculate the prices with VAT
    $prezzo_ivato_acquisto = $prezzo_acquisto_float * (1 + $iva_acquisto_float / 100);
    $prezzo_ivato_vendita = $prezzo_vendita_float * (1 + $iva_vendita_float / 100);
    
    // Calculate the percentage margin and the margin in euros
    $margine_percentuale = (($prezzo_vendita_float - $prezzo_acquisto_float) / $prezzo_acquisto_float) * 100;
    $margine_euro = $prezzo_vendita_float - $prezzo_acquisto_float;
    // Returns an array with the calculations performed
    return [
        'prezzo_ivato_acquisto' => $prezzo_ivato_acquisto,
        'prezzo_ivato_vendita' => $prezzo_ivato_vendita,
        'margine_percentuale' => $margine_percentuale,
        'margine_euro' => $margine_euro
    ];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $azienda = $_POST['azienda'];
    $prodotti = $_POST['prodotti'];
    $iva_acquisto = $_POST['ivaacquisto'];
    $prezzo_acquisto = $_POST['prezzoacquisto'];
    $iva_vendita = $_POST['ivavendita'];
    $prezzo_vendita = $_POST['prezzovendita'];
    $unita_acquisto = $_POST['unitaacquisto'];
    $unita_vendita = $_POST['unitavendita'];
    
    // Cycle through each product
    foreach ($prodotti as $index => $prodotto) {
        // Checks whether the product is empty and skips the iteration if it is
        if (empty($prodotto)) {
            continue;
        }
        
        // Gets and assigns data for each product
        $iva_acquisto_prodotto = $iva_acquisto[$index];
        $prezzo_acquisto_prodotto = $prezzo_acquisto[$index];
        $iva_vendita_prodotto = $iva_vendita[$index];
        $prezzo_vendita_prodotto = $prezzo_vendita[$index];
        $unita_acquisto_prodotto = $unita_acquisto[$index];
        $unita_vendita_prodotto = $unita_vendita[$index];
        
        // Calculate prices and margins
        $calcoli = calcolaPrezziEMargini($prezzo_acquisto_prodotto, $iva_acquisto_prodotto, 
                                         $prezzo_vendita_prodotto, $iva_vendita_prodotto);
        
        // Query to enter data into the database
        $sql = "INSERT INTO table2 (Azienda, Prodotto, IvaPercentualeAcquisto, PrezzoAcquisto, PrezzoIvatoAcquisto, 
                                      UnitàAcquisto, IvaPercentualeVendita, PrezzoVendita, PrezzoIvatoVendita, 
                                      UnitàVendita, MarginePercentuale, MargineEuro)
                VALUES ('$azienda', '$prodotto', '$iva_acquisto_prodotto', '$prezzo_acquisto_prodotto', 
                        '{$calcoli['prezzo_ivato_acquisto']}', '$unita_acquisto_prodotto', 
                        '$iva_vendita_prodotto', '$prezzo_vendita_prodotto', 
                        '{$calcoli['prezzo_ivato_vendita']}', '$unita_vendita_prodotto', 
                        '{$calcoli['margine_percentuale']}', '{$calcoli['margine_euro']}')";
        
        // Runs the query and checks if it was successful
        if ($conn->query($sql) === TRUE) {
            echo "New record successfully created for $prodotto<br>";
        } else {
            // Print an error message if the query failed
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Closes the connection to the database
$conn->close();
?>





