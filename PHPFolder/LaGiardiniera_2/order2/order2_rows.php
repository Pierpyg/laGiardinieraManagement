<?php

$piatti = [
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
    "TRONCHETTI PRIMAVERA",
    "CAVATELLI AL TEGAMINO",
    "FUSILLI QUAD. NONNA",
    "GNOCCHI SORRENTINA"
];

foreach ($piatti as $piatto) {
    echo "<tr>
        <td colspan='2'>$piatto</td>
        <td>N.<input type='number' name='quantita_2[]' class='number'></td>
        <td class='c'>c</td>
        <td>N.<input type='number' name='quantita_4[]' class='number'></td>
        <td class='c'>c</td>
        <td>N.<input type='number' name='quantita_6[]' class='number'></td>
        <td class='c'>c</td>
        <input type='hidden' name='piatti[]' value='$piatto'> <!-- Campo di input nascosto per il nome del piatto -->
    </tr>";
}
?>
