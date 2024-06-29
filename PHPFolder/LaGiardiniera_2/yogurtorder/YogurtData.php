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
    
    
    $conferma_ordine_pv =$_POST['conford'];
    $n_ordine = isset($_POST['n_ordine']) ? htmlspecialchars($_POST['n_ordine']) : '';
    $cod_cli = isset($_POST['cod_cli']) ? htmlspecialchars($_POST['cod_cli']) : '';
    $giorno_arrivo = isset($_POST['giorno_arrivo']) ? $_POST['giorno_arrivo'] : '';
    $data_arrivo = isset($_POST['data_arrivo']) ? htmlspecialchars($_POST['data_arrivo']) : '';
    $ora = isset($_POST['ora']) ? htmlspecialchars($_POST['ora']) : '';
    $carico = isset($_POST['carico']) ? htmlspecialchars($_POST['carico']) : '';
    $tot_mozz_kg = isset($_POST['tot_mozz_kg']) ? htmlspecialchars($_POST['tot_mozz_kg']) : '';
    $note = isset($_POST['note']) ? htmlspecialchars($_POST['note']) : '';
    $f_resp_cons_1 = isset($_POST['f_resp_cons_1']) ? htmlspecialchars($_POST['f_resp_cons_1']) : '';
    $f_autista = isset($_POST['f_autista']) ? htmlspecialchars($_POST['f_autista']) : '';
    $f_uff_vend = isset($_POST['f_uff_vend']) ? htmlspecialchars($_POST['f_uff_vend']) : '';
    $apertura_ord = isset($_POST['apertura_ord']) ? htmlspecialchars($_POST['apertura_ord']) : '';
    $f_resp_cons_2 = isset($_POST['f_resp_cons_2']) ? htmlspecialchars($_POST['f_resp_cons_2']) : '';
    $f_autista_2 = isset($_POST['f_autista_2']) ? htmlspecialchars($_POST['f_autista_2']) : '';
    $chiusura_ord = isset($_POST['chiusura_ord']) ? htmlspecialchars($_POST['chiusura_ord']) : '';
    
    
    $categorie = $_POST['categoria'];
    $nomi_prodotti = $_POST['nome_prodotto'];
    $kg = $_POST['kg'];
    $quantita = isset($_POST['quantita']) ? $_POST['quantita'] : [];
    $inserimentoAvvenuto = false;
    
    for ($i = 0; $i < count($nomi_prodotti); $i++) {
        $categoria = $conn->real_escape_string($categorie[$i]);
        $nome_prodotto = $conn->real_escape_string($nomi_prodotti[$i]);
        $kg_val = $conn->real_escape_string($kg[$i]);
        $quantita_val = isset($quantita[$i]) ? 1 : 0;
        
        
        if (!empty($nome_prodotto)) {
            
            $sql = "INSERT INTO yogurtorder (conferma_ordine_pv, n_ordine, cod_cli, giorno_arrivo, 
                                              data_arrivo, ora, carico, tot_mozz_kg, categoria, nome_prodotto, 
                                              kg, quantita, f_resp_cons_1, f_autista, note, f_uff_vend, 
                                              apertura_ord, f_resp_cons_2, f_autista_2, chiusura_ord)
                    VALUES ('$conferma_ordine_pv', '$n_ordine', '$cod_cli', '$giorno_arrivo', '$data_arrivo', 
                            '$ora', '$carico', '$tot_mozz_kg', '$categoria', '$nome_prodotto', '$kg_val', 
                            '$quantita_val', '$f_resp_cons_1', '$f_autista', '$note', '$f_uff_vend', 
                            '$apertura_ord', '$f_resp_cons_2', '$f_autista_2', '$chiusura_ord')";
            
            if ($conn->query($sql) === TRUE) {
                $inserimentoAvvenuto = true;
            } else {
                echo "Error: {$sql} <br> {$conn->error}<br>";
            }
        }
    }
    if ($inserimentoAvvenuto) {
        echo "New records successfully created<br>";
    }
    
    $conn->close();
}
?>




