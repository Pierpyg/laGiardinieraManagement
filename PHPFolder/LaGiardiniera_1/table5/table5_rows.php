<?php

$items = [
    ['id' => 1, 'unit' => 'CARTON', 'description' => 'BORSE SHOPPER ISTITUZIONALI GRANDI   (KG. 9.5)'],
    ['id' => 2, 'unit' => 'CARTON', 'description' => 'BORSE SHOPPER ISTITUZIONALI PICCOLE (KG. 9.5)'],
    ['id' => 3, 'unit' => 'CARTON', 'description' => 'BUSTE DA GR. 1000 TRASPARENTI (KG. 9.6)'],
    ['id' => 4, 'unit' => 'CARTON', 'description' => 'BUSTE DA GR. 500   TRASPARENTI (KG. 9.6)'],
    ['id' => 5, 'unit' => 'CARTON', 'description' => 'BUSTE DA GR. 250   TRASPARENTI (KG. 9.6)'],
    ['id' => 6, 'unit' => 'PCS', 'description' => 'BUSTA PER SOTTOVUOTO 20x30/105 (CONF. DA 100 PZ.)'],
    ['id' => 7, 'unit' => 'PCS', 'description' => 'BUSTA PER SOTTOVUOTO 25x30/105 (CONF. DA 100 PZ.)'],
    ['id' => 8, 'unit' => 'PCS', 'description' => 'BUSTA PER SOTTOVUOTO 25x35/105 (CONF. DA 100 PZ.)'],
    ['id' => 9, 'unit' => 'PCS', 'description' => 'BUSTA PER SOTTOVUOTO 35x45/105 (CONF. DA 100 PZ.)'],
    ['id' => 10, 'unit' => 'PCS', 'description' => 'BUSTA PER SOTTOVUOTO 45x70/105 (CONF. DA 100 PZ.)'],
    ['id' => 11, 'unit' => 'CARTON', 'description' => 'TRASPARENTI'],
    ['id' => 12, 'unit' => 'CARTON', 'description' => 'FOGLIO HD TRASPARENTE PER PROSCIUTTO PACCO DA KG. 10'],
    ['id' => 13, 'unit' => 'PCS', 'description' => 'VASCHETTA P/PROSCIUTTO (CF. DA 200 PZ.)'],
    ['id' => 14, 'unit' => 'PCS', 'description' => 'VASCHETTA PIANA RICOTTA GR. 750 (PZ. 400)'],
    ['id' => 15, 'unit' => 'PCS', 'description' => 'VASCHETTA OVALE P/BURRATA GR. 500 (CF. DA 300 PZ.)'],
    ['id' => 16, 'unit' => 'CARTON', 'description' => 'SACC. CARTA AVANA 19x38 PER PANE (CART. 1000 PZ.)'],
    ['id' => 17, 'unit' => 'CARTON', 'description' => 'SACC. CARTA AVANA 22x44 PER PANE (CART. 1000 PZ.)'],
    ['id' => 18, 'unit' => 'CARTON', 'description' => 'SACC. CARTA AVANA 30x60 PER PANE (CART. 1000 PZ.)'],
    ['id' => 19, 'unit' => 'PCS', 'description' => 'TENDINASTRO VERDE'],
    ['id' => 20, 'unit' => 'PCS', 'description' => 'NASTRO ADES. PER IMBALLO LA CONTADINA (CF. DA 36 PZ.)'],
    ['id' => 21, 'unit' => 'CARTON', 'description' => 'GUANTI CARTENE PER PANE E PROSC. (CF. DA 100 PZ.)'],
    ['id' => 22, 'unit' => 'PIECES', 'description' => 'SCATOLO TIPO 6 (N.1 PIROFILE DA 6 PORZIONI)'],
    ['id' => 23, 'unit' => 'PCS', 'description' => 'ROTOLO CARTA ULTIMA ROLL'],
    ['id' => 24, 'unit' => 'PCS', 'description' => 'ROTOLI BILANCIA BIZERBA/BERKEL (OGNI CONF. E\' DA 4 PZ.)'],
    ['id' => 25, 'unit' => 'PCS', 'description' => 'ROTOLI REG. CASSA MOD. AXON HYDRA (S80 x L80) (OGNI CONF. E\' DA 5 PZ.)'],
    ['id' => 26, 'unit' => 'PCS', 'description' => 'ROTOLI REG. CASSA MOD. EPSON'],
    ['id' => 27, 'unit' => 'PCS', 'description' => 'ROTOLI REG. CASSA ALTRO MODELLO'],
    ['id' => 28, 'unit' => 'PCS', 'description' => 'PELLICOLA PER ALIMENTI'],
    ['id' => 29, 'unit' => 'PCS', 'description' => 'POLISTIROLO BASE DA KG. 2 CUBO (CF. DA 24 PZ.)'],
    ['id' => 30, 'unit' => 'PCS', 'description' => 'POLISTIROLO COPERCHIO DA KG. 2 CUBO (CF. DA 24 PZ.)'],
    ['id' => 31, 'unit' => 'PCS', 'description' => 'POLISTIROLO BASE DA KG. 4 CUBO (CF. DA 12 PZ.)'],
    ['id' => 32, 'unit' => 'PCS', 'description' => 'POLISTIROLO COPERCHIO DA KG. 4 CUBO (CF. DA 12 PZ.)'],
    ['id' => 33, 'unit' => 'PCS', 'description' => 'ROTOLO NUMERI PER ELIMINA CODE'],
    ['id' => 34, 'unit' => 'KG', 'description' => 'INCARTO IDEABRILL P/CACIOTTA MORBIDOSA FT 25x37'],
    ['id' => 35, 'unit' => 'KG', 'description' => 'INCARTO IDEABRILL P/CACIOTTA MORBIDOSA FT 37x50'],
    ['id' => 36, 'unit' => 'PCS', 'description' => 'BORSA VOLLEY PER BOTTIGLIE VINO'],
    ['id' => 37, 'unit' => 'PCS', 'description' => 'BIS MAGNUM BUSTA STAMP. CON POSATE E TOVAGLIOLO 38X38 (CF 10 PZ)']
];

foreach ($items as $item) {
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
