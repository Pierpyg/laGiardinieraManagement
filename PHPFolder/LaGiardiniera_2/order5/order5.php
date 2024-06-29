<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order 5</title>
        <link rel="stylesheet" href="../../../CSS2/styleTable.css">
    </head>
    <body>
    	<header class="tag">
            <?php 
                $orders = [
                    'Order 1' => '../order1/order1.php',
                    'Order 2' => '../order2/order2.php',
                    'Order 3' => '../order3/order3.php',
                    'Order 4' => '../order4/order4.php',
                    'Order 5' => '../order5/order5.php',
                ];
                foreach ($orders as $orderName => $orderPath): ?>
                <button onclick="location.href='<?php echo $orderPath; ?>';" class="button"><?php echo $orderName; ?></button>
            <?php endforeach; ?>
        </header>
    	<form action="OrderData5.php" method="post">
        	<h1 style="color: black;">ORDER CONFIRMATION:<input type="text" name="conford"> </h1>
        	<h2>CHECK THE BOX CORRESPONDING TO THE DAY OF ITEMS ARRIVAL AT THE STORE.</h2>
        		
        		<div id="arrivo">
        			<table>
        				<caption id="settimana">ARRIVAL DAY</caption>
        				<tr>
                            <th>MON <input type="radio" name="giorno_arrivo" value="mon"></th>
            				<th>TUE <input type="radio" name="giorno_arrivo" value="tue"></th>
            				<th>WED <input type="radio" name="giorno_arrivo" value="wed"></th>
            				<th>THU <input type="radio" name="giorno_arrivo" value="thu"></th>
            				<th>FRI <input type="radio" name="giorno_arrivo" value="fri"></th>
            				<th>SAT <input type="radio" name="giorno_arrivo" value="sat"></th>
            				<th>SUN <input type="radio" name="giorno_arrivo" value="sun"></th>					
                        </tr>
        			</table>
        			<table>
        				<caption>ARRIVAL DATE</caption>
        				<th><input type="date" name="data_arrivo" id="data"></th>
        			</table>
        		</div>
        
        		<!-- order 1 -->
        		<table class="table">
        			<thead>
        				<tr>
        					<th>PASTA FRESCA SEMPLICE</th>
        					<th>N.</th>
        					<th>KG</th>
        					<th class="c">c</th>
        				</tr>
        			</thead>
        			<tbody>
        				<!-- For loop to print column rows -->
                        <?php for ($i = 0; $i < 10; $i++): ?>
                        <tr>
        					<td><input type="text" name="nome_prodotto[]"
        						 class="note"></td>
        					<td>N.<input type="number" name="quantita[]" class="number"></td>
        					<td>Kg</td>
        					<td class="c">c</td>
        				</tr>
                        <?php endfor; ?>
                    </tbody>
        		</table>
        
            <footer>
            	<div class="table">
            		<div>
            			<table>
            				<caption>NOTES</caption>
            				<th><input type="text" name="note" placeholder="additional notes..."
            					class="note"></th>
            			</table>
            		</div>
            		<div>
            			<table>
            				<caption>STORE MANAGER</caption>
            				<tr>
            					<th>NAME</th>
            					<th>SIGNATURE</th>
            				</tr>
            				<th><input class="note" type="text" name="nome_responsabile_pv"
            					id=""></th>
            				<th><input class="note" type="text" name="firma_responsabile_pv"
            					id=""></th>
            			</table>
            		</div>
            	</div>
            	<button id="invia" type="submit" class="button">Submit</button>
            </footer>
        </form>
    </body>
</html>
