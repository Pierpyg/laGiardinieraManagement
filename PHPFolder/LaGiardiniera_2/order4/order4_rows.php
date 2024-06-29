<?php

$items = [
    ['name' => 'crostini', 'unit' => 'MULT DI 12', 'description' => 'CROSTINI CONDITI'],
    ['name' => 'grissini', 'unit' => 'MULT DI 13', 'description' => 'MINI GRISSINI'],
    ['name' => 'tarallini', 'unit' => 'MULT DI 16', 'description' => 'TARALLINI']
];

echo '<!-- order 1 -->
<div id="line1">
    <form method="post" action="ordine4.php">
    <table class="table">
        <thead>
            <tr>
                <th><br></th>
            </tr>
        </thead>
        <tbody>';

foreach ($items as $item) {
    $name = $item['name'];
    echo "<tr>
        <td colspan='2'>{$item['description']} - {$item['unit']}</td>
        <td>N.<select name='quantita_{$item['name']}' id='quantita_{$name}'>
            <option value='0'>0</option>";
    for ($i = 1; $i <= 12; $i++) {
        $value = $i * (int) filter_var($item['unit'], FILTER_SANITIZE_NUMBER_INT);
        echo "<option value='$value'>$value</option>";
    }
    echo "</select></td>
        <td class='c'>c</td>
    </tr>";
    echo "<input type='hidden' name='valore[]' value='{$name}'>";
    echo "<input type='hidden' name='nome_prodotti[]' value='{$item['description']}'>";
}

echo '</tbody>
    </table>
    <br>
    
    <!-- order 2 -->
    <table class="table">
        <thead>
            <tr>
                <th>TARALLI</th>
            </tr>
            <tr>
                <th>N.B. FOR TARALLI, ORDER IN MULTIPLES OF 10 PCS.</th>
            </tr>
        </thead>
        <tbody>';

$taralli_items = [
    'TARALLI AL MATTONE AI 5 CEREALI',
    'TARALLI AL MATT- SEMPLICI C/FINOCCHIETTO',
    'TARALLI AL MATTONE OLIVE',
    'TARALLI AL MATTONE PATATE',
    'TARALLI AL MATTONE S/SEMI ALL\'OLIO',
    'TARALLI AL MATT- MESSICANA',
    'TARALLI AL MATTONE CIPOLLA/UVETTA'
];

foreach ($taralli_items as $index => $description) {
    echo "<tr>
        <td colspan='2'>{$description}</td>
        <td>N.<select name='quantita_tarallini_{$index}' id='quantita_tarallini_{$index}'>
            <option value='0'>0</option>";
    for ($i = 1; $i <= 20; $i++) {
        $value = $i * 10;
        echo "<option value='$value'>$value</option>";
    }
    echo "</select></td>
        <td class='c'>c</td>
    </tr>";
    
    echo "<input type='hidden' name='valore[]' value='tarallini_{$index}'>";
    echo "<input type='hidden' name='nome_prodotti[]' value='{$description}'>";
}

echo '</tbody>
    </table>
</div>';
?>

