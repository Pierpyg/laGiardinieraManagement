<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table2</title>
    <link href="../../../CSS1/styleTable.css" rel="stylesheet" type="text/css">
</head>

<body>

    <header>
        <a href="../table1/table1.php" class="button">Table 1</a>
        <a href="../table2/table2.php" class="button">Table 2</a>
        <a href="../table3/table3.php" class="button">Table 3</a>
        <a href="../table4/table4.php" class="button">Table 4</a>
        <a href="../table5/table5.php" class="button">Table 5</a>
        <a href="../table6/table6.php" class="button">Table 6</a>
    </header>
	<form action="TableData2.php" method="post">
        <table id="tabella1">
    
            <tr>
                <th colspan="11">MARGIN PRINCES</th>
            </tr>
            <tr>
                <td colspan="11" class="spazio"><br></td>
            <tr>
                <th>Company:</th>
            </tr>
            <tr>
                <td><input type="text" name="azienda"></td>
            </tr>
            <tr>
                <td colspan="11" id="aziendaMargin"><br><br></td>
            <tr>
    
    
            <tr>
                <th>PRODUCTS</th>
                <th>VAT %</th>
                <th>PURCHASE PRICE</th>
                <th>PRICE INCLUDING VAT</th>
                <th>UNITS</th>
                <th>VAT %</th>
                <th>SELLING PRICE</th>
                <th>PRICE INCLUDING VAT</th>
                <th>UNITS</th>
                <th>MARGIN %</th>
                <th>MARGIN IN €</th>
            </tr>
    
            <?php include 'table2_rows.php'; ?>
    
        </table>
    	<div style="display: flex; justify-content: center; gap: 5px;
			 padding: 1rem; ">
    			<button type="submit"> Submit</button>
    			<button type="reset">Reset</button>
    		</div>
	</form>
</body>

</html>
