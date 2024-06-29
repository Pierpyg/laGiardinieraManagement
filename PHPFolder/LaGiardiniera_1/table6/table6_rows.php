<?php

$items = [
    ['id' => 1, 'unit' => 'CARTON', 'description' => "BORSE SHOPPER NONNA MATI' PICCOLE (KG. 9,8)"],
    ['id' => 2, 'unit' => 'CARTON', 'description' => "BORSE SHOPPER NONNA MATI' GRANDI (KG. 9,8)"],
    ['id' => 3, 'unit' => 'ROLL', 'description' => 'BOLLINI TRASPARENTI PER PACCHETTI (1RT = 1500 PZ)'],
    ['id' => 4, 'unit' => 'KG', 'description' => 'CARTA DA BANCO PER VASSOI N°3 E N°4 (MULTIPLI DI KG 5)'],
    ['id' => 5, 'unit' => 'KG', 'description' => 'CARTA DA BANCO PER VASSOI N°6 E N°7 (MULTIPLI DI KG 5)'],
    ['id' => 6, 'unit' => 'KG', 'description' => 'CARTA DA BANCO PER VASSOI N°9 E N°10 (MULTIPLI DI KG 5)'],
    ['id' => 7, 'unit' => 'PCS', 'description' => 'DEPLIANT PASTA PRONTA DA INFORNARE'],
    ['id' => 8, 'unit' => 'PCS', 'description' => 'DEPLIANT TRE ANTE PASTA FRESCA'],
    ['id' => 9, 'unit' => 'ROLL', 'description' => 'NASTRO RAFFIA PER PACCHETTI (1ROTOLO=100MT)'],
    ['id' => 10, 'unit' => 'CARTON', 'description' => 'PERGAMINO 160X160 (PER SCATOLO DA 1 TEGAMINO) 200PZ'],
    ['id' => 11, 'unit' => 'CARTON', 'description' => 'PERGAMINO 170X235 200PZ'],
    ['id' => 12, 'unit' => 'CARTON', 'description' => 'PERGAMINO 200X285 200PZ'],
    ['id' => 13, 'unit' => 'CARTON', 'description' => 'PERGAMINO 225X320 200PZ'],
    ['id' => 14, 'unit' => 'CARTON', 'description' => 'PERGAMINO 250X355 200PZ'],
    ['id' => 15, 'unit' => 'CARTON', 'description' => 'PERGAMINO 310X310 200PZ'],
    ['id' => 16, 'unit' => 'PIECES', 'description' => 'SCATOLO TIPO 1 (VASSOIO N°7)'],
    ['id' => 17, 'unit' => 'PIECES', 'description' => 'SCATOLO TIPO 2 (VASSOIO N°6)'],
    ['id' => 18, 'unit' => 'PIECES', 'description' => 'SCATOLO TIPO 3 (VASSOIO N°4)'],
    ['id' => 19, 'unit' => 'PIECES', 'description' => 'SCATOLO TIPO 4 (VASSOIO N°3)'],
    ['id' => 20, 'unit' => 'PIECES', 'description' => 'SCATOLO TIPO 5 (N.2 PIROFILE DA 4 PORZIONI)'],
    ['id' => 21, 'unit' => 'PIECES', 'description' => 'SCATOLO TIPO 6 (N.1 PIROFILE DA 6 PORZIONI)'],
    ['id' => 22, 'unit' => 'PIECES', 'description' => 'SCATOLO TIPO 7 (N.1 PIROFILE DA 4 PORZIONI)'],
    ['id' => 23, 'unit' => 'PIECES', 'description' => 'SCATOLO TIPO 8 (N.1 PIROFILE DA 2 PORZIONI)'],
    ['id' => 24, 'unit' => 'CARTON', 'description' => 'VASSOI N°3 (2 PORZIONI) 200PZ'],
    ['id' => 25, 'unit' => 'CARTON', 'description' => 'VASSOI N°4 (4 PORZIONI) 200PZ'],
    ['id' => 26, 'unit' => 'CARTON', 'description' => 'VASSOI N°6 (6 PORZIONI) 200PZ'],
    ['id' => 27, 'unit' => 'CARTON', 'description' => 'VASSOI N°7 (8 PORZIONI) 200PZ'],
    ['id' => 28, 'unit' => 'CARTON', 'description' => 'VASSOI N°9 (10 PORZIONI) 100PZ'],
    ['id' => 29, 'unit' => 'CARTON', 'description' => 'VASSOI N°10 (12 PORZIONI) 100PZ'],
    ['id' => 30, 'unit' => 'PIECES', 'description' => 'VASCHETTA DA 1000 CC (CF 50)'],
    ['id' => 31, 'unit' => 'PIECES', 'description' => 'VASCHETTA DA 2000 CC (CF 50)'],
    ['id' => 32, 'unit' => 'PIECES', 'description' => 'FARINA DI SEMOLA DI GRANO DURO (CF KG 1)']
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

