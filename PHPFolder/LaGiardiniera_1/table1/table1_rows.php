<?php
// Defines an array of items, each item is an associative array containing id, unit and description.
$items = [
    ['id' => 1, 'unit' => 'CARTON', 'description' => 'BUSTE DA GR. 1000 NEUTRE PER ALIMENTI PER PV'],
    ['id' => 2, 'unit' => 'CARTON', 'description' => 'BUSTE DA GR. 500 NEUTRE PER ALIMENTI PER PV'],
    ['id' => 3, 'unit' => 'CARTON', 'description' => 'BUSTE DA GR. 250 NEUTRE PER ALIMENTI PER PV'],
    ['id' => 4, 'unit' => 'PCS', 'description' => 'BUSTA PER SOTTOVUOTO 20x30/105 GROF/LISC(CONF. DA 100 PZ)'],
    ['id' => 5, 'unit' => 'PCS', 'description' => 'BUSTA PER SOTTOVUOTO 25x30/105 GROF/LISC(CONF. DA 100 PZ)'],
    ['id' => 6, 'unit' => 'PCS', 'description' => 'BUSTA PER SOTTOVUOTO 25x35/105 GROF/LISC(CONF. DA 100 PZ)'],
    ['id' => 7, 'unit' => 'PCS', 'description' => 'BUSTA PER SOTTOVUOTO 45x70/105 GROF/LISC(CONF. DA 100 PZ)'],
    ['id' => 8, 'unit' => 'CARTON', 'description' => 'BORSE SHOPPER ISTITUZIONALI GRANDI'],
    ['id' => 9, 'unit' => 'CARTON', 'description' => 'BORSE SHOPPER ISTITUZIONALI PICCOLE'],
    ['id' => 10, 'unit' => 'CARTON', 'description' => 'BUSTE 50x70 TRASPARENTI'],
    ['id' => 11, 'unit' => 'PACK', 'description' => 'FOGLIO HD TRASPARENTE PER PROSCIUTTO PACCO DA KG10'],
    ['id' => 12, 'unit' => 'PACK', 'description' => 'VASCHETTE P/PROSCIUTTO (C.F. DA 200 PZ)'],
    ['id' => 13, 'unit' => 'CARTON', 'description' => 'SACC. CARTA AVANA 19x38 PER PANE (CART. 1000 PZ)'],
    ['id' => 14, 'unit' => 'CARTON', 'description' => 'SACC. CARTA AVANA 22x50 PER PANE (CART. 1000 PZ)'],
    ['id' => 15, 'unit' => 'CARTON', 'description' => 'SACC. CARTA AVANA 30x60 PER PANE (CART. 500 PZ)'],
    ['id' => 16, 'unit' => 'CARTON', 'description' => "SACC. IN COTONE ECRU' 30x33 CON LACCETTO (PZ 50)"],
    ['id' => 17, 'unit' => 'CARTON', 'description' => "SACC. IN COTONE ECRU' 30x45 CON LACCETTO (PZ 50)"],
    ['id' => 18, 'unit' => 'CARTON', 'description' => "SACC. IN COTONE ECRU' 40x50 CON LACCETTO (PZ 50)"],
    ['id' => 19, 'unit' => 'PCS', 'description' => 'TALLONCINO PANE GRANO TENERO'],
    ['id' => 20, 'unit' => 'PCS', 'description' => 'TALLONCINO PANE GRANO DURO'],
    ['id' => 21, 'unit' => 'PACK', 'description' => 'NASTRO ADES. PER IMBALLO LA CONTADINA (CF DA 36 PZ)'],
    ['id' => 22, 'unit' => 'CARTON', 'description' => 'SACCHI BIANCHI SPAZZATURA (CONF. 20 KG)'],
    ['id' => 23, 'unit' => 'PCS', 'description' => 'GUANTI IN PVC USA E GETTA PER PANE E PROSCIUTTO'],
    ['id' => 24, 'unit' => 'PCS', 'description' => 'ROTOLO CARTA ULTIMA ROLL'],
    ['id' => 25, 'unit' => 'PCS', 'description' => 'DEPLIANT PICCOLO']
];
// Cycles through each item in the $items array.
foreach ($items as $item) {
    // Create an HTML table row for each item.
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

