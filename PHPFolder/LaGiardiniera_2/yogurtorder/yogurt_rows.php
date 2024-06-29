<?php

function stampaTabella($categoria, $righe, $unita) {
    echo '<table class="table">';
    echo '<tr>';
    echo '<th colspan="4">' . $categoria . '</th>';
    echo '<th>' . $unita . '</th>';
    echo '<th></th>';
    echo '<th>X</th>';
    echo '</tr>';
    foreach ($righe as $riga) {
        echo '<tr>';
        echo '<td colspan="3" style="text-align: left;">' . $riga[0] . '</td>';
        echo '<td>' . ($riga[1] ?? '') . '</td>';
        echo '<td><input type="text" name="kg[]"></td>';
        echo '<td>c</td>';
        echo '<td><input type="checkbox" name="quantita[]"></td>';
        echo '<input type="hidden" name="categoria[]" value="' . $categoria . '">';
        echo '</tr>';
    }
    echo '</table>';
}
?>

<div id="line1">
    <?php
    stampaTabella("PRODOTTI", [
        ["<input type='text' name='nome_prodotto[]' placeholder='Enter product name'>", ""],
        ["<input type='text' name='nome_prodotto[]' placeholder='Enter product name'>", ""],
        ["<input type='text' name='nome_prodotto[]' placeholder='Enter product name'>", ""],
        ["<input type='text' name='nome_prodotto[]' placeholder='Enter product name'>", ""],
        ["<input type='text' name='nome_prodotto[]' placeholder='Enter product name'>", ""],
        ["<input type='text' name='nome_prodotto[]' placeholder='Enter product name'>", ""],
        ["<input type='text' name='nome_prodotto[]' placeholder='Enter product name'>", ""],
        ["<input type='text' name='nome_prodotto[]' placeholder='Enter product name'>", ""],
    ], "KG");
    stampaTabella("YOGURT KG 3", [
        ["<input type='hidden' name='nome_prodotto[]' value='YOGURT VANIGLIA 3KG'> YOGURT VANIGLIA 3KG", ""],
        ["<input type='hidden' name='nome_prodotto[]' value='YOGURT FRAGOLA 3KG'> YOGURT FRAGOLA 3KG", "6"],
        ["<input type='hidden' name='nome_prodotto[]' value='YOGURT ALBICOCCA 3KG'> YOGURT ALBICOCCA 3KG", "6"],
        ["<input type='hidden' name='nome_prodotto[]' value='YOGURT BANANA 3KG'> YOGURT BANANA 3KG", "6"],
        ["<input type='hidden' name='nome_prodotto[]' value='YOGURT F.D.BOSCO 3KG'> YOGURT F.D.BOSCO 3KG", ""],
        ["<input type='hidden' name='nome_prodotto[]' value='YOGURT LIMONE 3KG'> YOGURT LIMONE 3KG", ""],
        ["<input type='hidden' name='nome_prodotto[]' value='YOGURT BIANC NAT 3KG'> YOGURT BIANC NAT 3KG", ""],
        ["<input type='hidden' name='nome_prodotto[]' value='YOGURT BIA S.Z.A. 3KG'> YOGURT BIA S.Z.A. 3KG", ""],
    ], "KG");
    ?>
</div>
<div id="line1">
    <?php
    stampaTabella("PARTICOLARITA' RICOTTE",[
        ["<input type='text' name='nome_prodotto[]' placeholder='Enter ricotta name'>", ""],
        ["<input type='text' name='nome_prodotto[]' placeholder='Enter ricotta name'>", ""],
        ["<input type='text' name='nome_prodotto[]' placeholder='Enter ricotta name'>", ""],
        ["<input type='text' name='nome_prodotto[]' placeholder='Enter ricotta name'>", ""],
        ["<input type='text' name='nome_prodotto[]' placeholder='Enter ricotta name'>", ""],
        ["<input type='text' name='nome_prodotto[]' placeholder='Enter ricotta name'>", ""],
        ["<input type='text' name='nome_prodotto[]' placeholder='Enter ricotta name'>", ""],
        ["<input type='text' name='nome_prodotto[]' placeholder='Enter ricotta name'>", ""],
    ], "KG");
    stampaTabella("YOGURT g 140", [
        ["<input type='hidden' name='nome_prodotto[]' value='BUFARELLO VANIGLIA'> BUFARELLO VANIGLIA", ""],
        ["<input type='hidden' name='nome_prodotto[]' value='BUFARELLO FRAGOLA'> BUFARELLO FRAGOLA", ""],
        ["<input type='hidden' name='nome_prodotto[]' value='BUFARELLO ALBICOCCA'> BUFARELLO ALBICOCCA", ""],
        ["<input type='hidden' name='nome_prodotto[]' value='BUFARELLO BANANA'> BUFARELLO BANANA", ""],
        ["<input type='hidden' name='nome_prodotto[]' value='BUFARELLO FR. BOSCO'> BUFARELLO FR. BOSCO", ""],
        ["<input type='hidden' name='nome_prodotto[]' value='BUFARELLO LIMONE'> BUFARELLO LIMONE", ""],
        ["<input type='hidden' name='nome_prodotto[]' value='BUFARELLO B NATURALE'> BUFARELLO B NATURALE", ""],
        ["<input type='hidden' name='nome_prodotto[]' value='BUFARELLO NATUR S/Z'> BUFARELLO NATUR S/Z", ""],
    ], "KG");
    ?>
</div>
<div id="line1">
    <?php
    stampaTabella("POLISTIROLI CON GHIACCIO", [
        ["<input type='hidden' name='nome_prodotto[]' value='POL. KG3 CON KG2 GHIACCIO'> POL. KG3 CON KG2 GHIACCIO", ""],
        ["<input type='hidden' name='nome_prodotto[]' value='POL. KG5 CON KG4 GHIACCIO'> POL. KG5 CON KG4 GHIACCIO", ""],
    ], "PZ");
    stampaTabella("CONFEZIONAMENTO",  [
        ["<input type='text' name='nome_prodotto[]'>", ""],
        ["<input type='text' name='nome_prodotto[]'>", ""],
        ["<input type='text' name='nome_prodotto[]'>", ""],
    ], "SPEDIZ.");
 ?>
</div>


