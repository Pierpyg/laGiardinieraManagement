<?php

$pasta_pronta_prodotti = array(
    "CANELLONI CUORE VERDE",
    "CANELLONI DELLA NONNA",
    "CANELLONI DI MAMMA",
    "CONCHIGLIE LIGURI",
    "CONCHIGLIONI DI MAMMA",
    "FAGOTTINO NONNA MATI",
    "FAZZOLETTO DEL BOSCAIOLO",
    "FAZZOLETTO EDEN",
    "LASAGNA SAPORI DI PAESTUM",
    "LASAGNA CONTADINA",
    "LASAGNA CREMA DI ZUCCA",
    "LASAGNA EMILIANA",
    "LASAGNA FIORI ZUCCA",
    "LASAGNA NAPOLETANA",
    "LASAGNA VERDE RAGU' BIANCO",
    "LASAGNA AL PESTO",
    "MEDAGLIONE FANTASIOSO",
    "MEDAGLIONE TRICOLORE",
    "PACCHETTI GOLOSI",
    "PARMIGIANA MELANZANE",
    "PARMIGIANA ZUCCHINE",
    "RAVIOLI MONTANARA",
    "RAVIOLI ALL'ITALIANA",
    "RAVIOLI BUONGUSTAIO",
    "SCRIGNO BOSCAIOLO",
    "SFOGLIATELLA FANTASIA DI SAP.",
    "SFOGLIATELLA CAPRESE",
    "TRONCHETTI PRIMAVERA"
);


$tegamini_prodotti = array(
    "CAVATELLI AL TEGAMINO",
    "FUSILLI QUAD. NONNA",
    "GNOCCHI SORRENTINA"
);
?>

<table class="table">
    <thead>
        <tr>
            <th colspan="2">PASTA PRONTA</th>
            <th colspan="2">MONOUSO 1 PRZ.</th>
            <th colspan="2">MONOUSO 2 PRZ.</th>
            <th colspan="2">MONOUSO 4 PRZ.</th>
            <th colspan="2">MONOUSO 6 PRZ.</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pasta_pronta_prodotti as $prodotto) { ?>
            <tr>
                <td colspan="2"><?php echo $prodotto; ?></td>
                <td>N.<input type="number" name="quantita_monouso_1[]" class="number"></td>
                <td class="c">c</td>
                <td>N.<input type="number" name="quantita_monouso_2[]" class="number"></td>
                <td class="c">c</td>
                <td>N.<input type="number" name="quantita_monouso_4[]" class="number"></td>
                <td class="c">c</td>
                <td>N.<input type="number" name="quantita_monouso_6[]" class="number"></td>
                <td class="c">c</td>
                <td><input type="hidden" name="nome_prodotto[]" value="<?php echo htmlspecialchars($prodotto); ?>"></td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2">TOTAL</td>
            <td colspan="2">TOT. N°</td>
            <td colspan="2">TOT. N°</td>
            <td colspan="2">TOT. N°</td>
            <td colspan="2">TOT. N°</td>
        </tr>
    </tfoot>
</table>


<table class="table">
    <thead>
        <tr>
            <th colspan="2">PASTA PRONTA</th>
            <th colspan="2">TEGAMINI</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tegamini_prodotti as $prodotto) { ?>
            <tr>
                <td colspan="2"><?php echo $prodotto; ?></td>
                <td>N.<input type="number" name="quantita_tegamini[]" class="number"></td>
                <td class="c">c</td>
                <td><input type="hidden" name="nome_prodotto_2[]" value="<?php echo htmlspecialchars($prodotto); ?>"></td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2">TOTAL</td>
            <td colspan="2">TOT. N°</td>
        </tr>
    </tfoot>
</table>



