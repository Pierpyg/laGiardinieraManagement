<?php
$items = [
    ['id' => 1, 'unit' => 'ROLL', 'description' => 'ROTOLI REG. CASSA CASIO (CF DA 50 PZ) SPECIFARE MODELLO'],
    ['id' => 2, 'unit' => 'KG', 'description' => 'CARTA DA BANCO PER VASSOI N°3 E N°4 (MULTIPLI DI KG 5)'],
    ['id' => 3, 'unit' => 'KG', 'description' => 'CARTA DA BANCO PER VASSOI N°6 E N°7 (MULTIPLI DI KG 5)'],
    ['id' => 4, 'unit' => 'KG', 'description' => 'CARTA DA BANCO PER VASSOI N°9 E N°10 (MULTIPLI DI KG 5)'],
    ['id' => 5, 'unit' => 'PCS', 'description' => 'DEPLIANT PASTA PRONTA DA INFORNARE'],
    ['id' => 6, 'unit' => 'PCS', 'description' => 'DEPLIANT TRE ANTE PASTA FRESCA'],
    ['id' => 7, 'unit' => 'ROLL', 'description' => 'NASTRO RAFFIA PER PACCHETTI (1ROTOLO=100MT)'],
    ['id' => 8, 'unit' => 'PACKAGE', 'description' => 'PERGAMINO 160X160 (PER SCATOLO DA 1 TEGAMINO) 200PZ'],
    ['id' => 9, 'unit' => 'PACKAGE', 'description' => 'PERGAMINO 170X235 200PZ'],
    ['id' => 10, 'unit' => 'PACKAGE', 'description' => 'PERGAMINO 200X285 200PZ'],
    ['id' => 11, 'unit' => 'PACKAGE', 'description' => 'PERGAMINO 225X320 200PZ'],
    ['id' => 12, 'unit' => 'PACKAGE', 'description' => 'PERGAMINO 250X355 200PZ'],
    ['id' => 13, 'unit' => 'PACKAGE', 'description' => 'PERGAMINO 310X310 (PER SCATOLO DA 4 TEGAMINI) 200PZ'],
    ['id' => 14, 'unit' => 'PACKAGE', 'description' => 'BORSE SHOPPER TRASPARENTI PICCOLE ECM (9.6 KG)'],
    ['id' => 15, 'unit' => 'PACKAGE', 'description' => 'BORSE SHOPPER TRASPARENTI MEDIE ECM (9.6 KG)'],
    ['id' => 16, 'unit' => 'PACKAGE', 'description' => 'BORSE SHOPPER TRASPARENTI GRANDI ECM (9.6 KG)'],
    ['id' => 17, 'unit' => 'PIECES', 'description' => 'SCATOLO TIPO 1 (VASSOIO N°7)'],
    ['id' => 18, 'unit' => 'PIECES', 'description' => 'SCATOLO TIPO 2 (VASSOIO N°6)'],
    ['id' => 19, 'unit' => 'PIECES', 'description' => 'SCATOLO TIPO 3 (VASSOIO N°4)'],
    ['id' => 20, 'unit' => 'PIECES', 'description' => 'SCATOLO TIPO 4 (VASSOIO N°3)'],
    ['id' => 21, 'unit' => 'PIECES', 'description' => 'SCATOLO TIPO 5 (N.2 PIROFILE DA 4 PORZIONI)'],
    ['id' => 22, 'unit' => 'PIECES', 'description' => 'SCATOLO TIPO 6 (N.1 PIROFILE DA 6 PORZIONI)'],
    ['id' => 23, 'unit' => 'PIECES', 'description' => 'SCATOLO TIPO 7 (N.1 PIROFILE DA 4 PORZIONI)'],
    ['id' => 24, 'unit' => 'PIECES', 'description' => 'SCATOLO TIPO 8 (N.1 PIROFILE DA 2 PORZIONI)'],
    ['id' => 25, 'unit' => 'PACKAGE', 'description' => 'VASSOI N°3 (2 PORZIONI) 400PZ'],
    ['id' => 26, 'unit' => 'PACKAGE', 'description' => 'VASSOI N°4 (4 PORZIONI) 200PZ'],
    ['id' => 27, 'unit' => 'PACKAGE', 'description' => 'VASSOI N°6 (6 PORZIONI) 200PZ'],
    ['id' => 28, 'unit' => 'PACKAGE', 'description' => 'VASSOI N°7 (8 PORZIONI) 200PZ'],
    ['id' => 29, 'unit' => 'PACKAGE', 'description' => 'VASSOI N°9 (10 PORZIONI) 100PZ'],
    ['id' => 30, 'unit' => 'PACKAGE', 'description' => 'VASSOI N°10 (12 PORZIONI) 100PZ'],
    ['id' => 31, 'unit' => 'PACKAGE', 'description' => 'VASCHETTA FIOCCO PER BABA\' 1000 CC (CF 50)'],
    ['id' => 32, 'unit' => 'PACKAGE', 'description' => 'VASCHETTA FIOCCO PER BABA\' 2000 CC (CF 50)']
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
