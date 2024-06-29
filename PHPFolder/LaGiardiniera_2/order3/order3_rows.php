<body>
    <?php
    
    function generateTable($tables) {
        foreach ($tables as $table) {
            echo "<table id='table'>";
            echo "<thead><tr><th colspan='4'>{$table['title']}</th></tr></thead>";
            echo "<tbody>";
            foreach ($table['rows'] as $row) {
                echo "<tr>";
                echo "<td colspan='2'>{$row[0]}</td>";
                echo "<td>{$row[1]}<input type='number' name='valore[]' class='number'></td>";
                echo "<td class='c'>c</td>";  
                echo '<input type="hidden" name="categoria[]" value="' . htmlspecialchars($table['title']) . '">';
                echo '<input type="hidden" name="nome_prodotto[]" value="' . htmlspecialchars($row[0]) . '">';
                echo '<input type="hidden" name="unita[]" value="' . htmlspecialchars($row[1]) . '">';
                echo "</tr>";
            }
            echo "</tbody></table>";
            }
        }

    // Definition of two multidimensional arrays for data tables
    $tables1 = [
        [
            "title" => "PASTA FRESCA SEMPLICE",
            "rows" => [
                ["CALAMARATA", "KG"],
                ["CAVATELLI", "KG"],
                ["CORTECCE", "KG"],
                ["FUSILLI", "KG"],
                ["GIGLI", "KG"],
                ["GNOCCHI DI PATATE", "KG"],
                ["LASAGNETTE", "KG"],
                ["MACCHERONI AL PETTINE", "KG"],
                ["MACCHERONI CALABRESI", "KG"],
                ["ORECCHIETTE", "KG"],
                ["PACCHERI", "KG"],
                ["PAPPARDELLE", "KG"],
                ["STROZZAPRETI", "KG"],
                ["TEGLIATELLE", "KG"],
                ["TEGLIATELLE VERDI", "KG"],
                ["TAGLIOLINI", "KG"],
                ["TROFIE", "KG"],
            ],
        ],
        [
            "title" => "PASTA FRESCA A MANO RIPIENA",
            "rows" => [
                ["CAPPELLACCI CON RICOTTA", "KG"],
                ["CARAMELLE BIANCHE", "KG"],
                ["CARAMELLE ROSSE RIPIENE", "KG"],
                ["CARAMELLE TRICOLORI", "KG"],
                ["CARAMELLE VERDI RIPIENE", "KG"],
                ["RAVIOLI A MANO RIC. PARM.", "KG"],
                ["TORTELLI AP PROSCIUTTO", "KG"],
                ["TORTELLI AL RADICCHIO", "KG"],
                ["TORTELLI ALLA ZUCCA", "KG"],
                ["TORTELLI RIC. SPINACI", "KG"],
                ["TORTELLI VERDI RIC. SPIN.", "KG"],
                ["TORTELLINI", "KG"],
            ],
        ],
    ];

    $tables2 = [
        [
            "title" => "PASTA FRESCA A MANO",
            "rows" => [
                ["CAVATELLI TRADIZIONALI", "KG"],
                ["LAGANE BIANCHE", "KG"],
                ["LAGANE ROSSE", "KG"],
                ["LAGANE TRICOLORI", "KG"],
                ["LAGANE VERDI", "KG"],
                ["SCIALATIELLI", "KG"],
                ["SCIALATIELLI AMALFITANI", "KG"],
                ["SFOGLIA", "KG"],
                ["SFOGLIA ROSSA", "KG"],
                ["SFOGLIA VERDE", "KG"],
                ["SPAGHETTI ALLA CHITARRA", "KG"],
            ],
        ],
        [
            "title" => "DOLCI",
            "rows" => [
                ["BABA' MONO PORZ. CLASSICO *", "N."],
                ["BABA' MONO PORZ.ALLA CREMA", "N."],
                ["BABA' DA KG 1.2", "N."],
                ["BABA' DA KG 2,5", "N."],
                ["BABA' DA KG 3", "N."],
                ["PASTIERA DA KG 0.6", "N."],
                ["PASTIERA DA KG 1", "N."],
                ["TIRAMISU' MONO PORZIONE", "N."],
                ["TIRAMISU' DA 2 PORZIONI", "N."],
                ["TIRAMISU' DA 4 PORZIONI", "N."],
                ["CHEESECAKE DA 1 PORZIONI", "N."],
                ["CHEESECAKE DA 3 PORZIONI", "N."],
                ["CHEESECAKE DA 10 PORZIONI", "N."],
                ["CANNOLO CUOR DI BUFALA *", "N."],
                ["CHIACCHIERE multipli di 200 gr", "KG"],
                ["CIOCCOLA' CON LATTE DI BUFALA", "N."],
                ["PROFITEROLES MONO", "N."],
                ["PROFITEROLES 2 PORZIONI", "N."],
                ["PROFITEROLES 4 PORZIONI", "N."],
            ],
        ],
    ];
    ?>
    <!-- Container for dynamically generated tables -->
    <div id="line1">
    <!-- Generation of first set tables -->
        <?php generateTable($tables1); ?>
    </div>
    <hr>
    <div id="line2">
    <!-- Generation of second set tables -->
        <?php generateTable($tables2); ?>
    </div>
</body>
