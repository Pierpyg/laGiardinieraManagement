<?php
// Array of elements with details of each item
$items = [
    ['id' => 1, 'unit' => 'PACK.', 'description' => 'ROTOLI BILANCIA BIZERBA (CF DA 30 PZ)'],
    ['id' => 2, 'unit' => 'PACK.', 'description' => 'ROTOLI REG. CASSA CASIO (CF DA 50 PZ) SPECIFARE MODELLO'],
    ['id' => 3, 'unit' => 'PCS', 'description' => 'PELLICOLA PER ALIMENTI'],
    ['id' => 4, 'unit' => 'PCS', 'description' => 'POLISTIROLO BASE DA KG 2 CUBO (CONF.DA 24 PZ)'],
    ['id' => 5, 'unit' => 'PCS', 'description' => 'POLISTIROLO COPERCHIO DA KG 2 CUBO (CONF.DA 24 PZ)'],
    ['id' => 6, 'unit' => 'PCS', 'description' => 'POLISTIROLO BASE DA KG 4 CUBO (CONF.DA 12 PZ)'],
    ['id' => 7, 'unit' => 'PCS', 'description' => 'POLISTIROLO COPERCHIO DA KG 4 CUBO (CONF.DA 12PZ)'],
    ['id' => 8, 'unit' => 'CARTON', 'description' => 'TENDINASTRO VERDE'],
    ['id' => 9, 'unit' => 'CARTON', 'description' => 'ROTOLO NUMERI PER ELIMINACODA'],
    ['id' => 10, 'unit' => 'PACCO', 'description' => 'VASCHETTE OVALE P/BURRATA GR.500 (C.F. DA 200 PZ)'],
    ['id' => 11, 'unit' => 'PCS', 'description' => 'COLTELLO A DUE MANICI "DICK" CM 30'],
    ['id' => 12, 'unit' => 'PCS', 'description' => 'COLTELLO DICK 15 CM/ROSSO PER PROSCIUTTO'],
    ['id' => 13, 'unit' => 'PCS', 'description' => 'COLTELLO DICK CM 30 PER FORMAGGIO'],
    ['id' => 14, 'unit' => 'PCS', 'description' => 'COLTELLO DICK CM 30 M/ROSSO PER PROSCIUTTO'],
    ['id' => 15, 'unit' => 'PCS', 'description' => 'COLTELLO M/GIALLO SWIBO CM 25 PER  PANE'],
    ['id' => 16, 'unit' => 'PCS', 'description' => 'MOLLA AFFETTATI'],
    ['id' => 17, 'unit' => 'PCS', 'description' => 'GUANTO IN ACCIAIO'],
    ['id' => 18, 'unit' => 'PCS', 'description' => 'TENDINASTRO VERDE'],
    ['id' => 19, 'unit' => 'KG', 'description' => 'INCARTO IDEABRILL P/CACIOTTA MORBIDOSA FT 25X37'],
    ['id' => 20, 'unit' => 'KG', 'description' => 'INCARTO IDEABRILL P/CACIOTTA MORBIDOSA FT 37X50'],
    ['id' => 21, 'unit' => 'PCS', 'description' => 'BORSE PER BOTTIGLIE VINO'],
    ['id' => 22, 'unit' => 'PACK', 'description' => 'VASCHETTA RICOTTA GR. 750 (PZ 400)']
];

// Cycles through each element of the array $items
foreach ($items as $item) {
    // Print one row of the HTML table for each element
    echo "<tr>
        <td colspan='1'>{$item['id']}</td>
        <td colspan='2'><input type='text' name='quantita[]'></td>
        <td colspan='2'>{$item['unit']}</td>
        <td colspan='4'>{$item['description']}</td>
        <input type='hidden' name='numero[]' value='{$item['id']}'>
        <input type='hidden' name='um[]' value='{$item['unit']}'>
        <input type='hidden' name='descrizionemerce[]' value='{$item['description']}'>
    </tr>";
}
?>
