<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table4</title>
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
	<form action="TableData4.php" method="post">
		<table id="tabella2">

			<tr>
				<th colspan="9"><br>LIST OF ITEMS FOR PASTA FRESCA PURCHASE ORDER OFFICE<br><br>
			</tr>

			<tr>
				<td colspan="9" class="spazio"><br></td>
			</tr>

			<tr>
				<th colspan="3">DATE</th>

			</tr>

			<tr>
				<td colspan="3"><input type="date" name="data"></td>

			</tr>

			<tr>
				<td colspan="9" class="spazio"><br></td>
			</tr>

			<tr>
				<th colspan="4">STORE</th>
				<th colspan="1" style="background-color: white;"></th>
				<th colspan="4">REQUESTOR'S NAME</th>
			</tr>

			<tr>
				<td colspan="4"><input type="text" name="puntovendita"></td>
				<td colspan="1"></td>
				<td colspan="4"><input type="text" name="nomerichiedente"></td>
			</tr>

			<tr>
				<td colspan="9" class="spazio"><br></td>
			</tr>

			<tr>
				<th colspan="1">N°</th>
				<th colspan="2">QUANTITY</th>
				<th colspan="2">U.M.</th>
				<th colspan="4">ITEM DESCRIPTION</th>
			</tr>
    <?php include 'table4_rows.php'; ?>
                
        <tr>
				<td colspan="9" class="spazio"><br></td>
			</tr>

			<tr>
				<th colspan="9" style="text-align: center;">NOTES</th>
			</tr>

			<tr>
				<td colspan="9" style="text-align: center;"><input type="text"
					name="note">
			
			</tr>

			<tr>
				<td colspan="9" class="spazio"><br>
				<br></td>
			</tr>

			<tr>
				<th colspan="4">APPLICANT SIGNATURE</th>
				<th colspan="1" style="background-color: white;"></th>
				<th colspan="4">PURCHASING SIGNATURE</th>
			</tr>

			<tr>
				<td colspan="4"><input type="text" name="firmarichiedente"></td>
				<td colspan="1"></td>
				<td colspan="4"><input type="text" name="firmaufficioacquisti"></td>
			</tr>

		</table>
		<div style="display: flex; justify-content: center; gap: 5px;
			 padding: 1rem; ">
    			<button type="submit">Submit</button>
    			<button type="reset">Reset</button>
    		</div>
	</form>
</body>
</html>