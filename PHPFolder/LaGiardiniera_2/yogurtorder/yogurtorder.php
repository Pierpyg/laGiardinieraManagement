<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yogurt</title>
    <link rel="stylesheet" href="../../../CSS2/styleTable.css">
    <link rel="stylesheet" href="../../../CSS2/yogurt.css">
</head>
	<body>
	<form action="YogurtData.php" method="post">
        <h1>STORE: <input type="text" name="" id=""></h1>
        <div class="tables-container">
            <table>
                <tr>
                    <th>ORDER N°</th>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Enter order number" name="n_ordine"></td>
                </tr>
            </table>
    
            <table>
                <tr>
                    <th>CLI. COD.</th>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Enter client code" name="cod_cli"></td>
                </tr>
            </table>
    
            <table class="line">
                <tr>
                    <th>DAY</th>
                    <th>DATE</th>
                <tr>
                    <td>
                        <select name="giorno_arrivo">
                            <?php
                            
                            $giorni = array('MON' => 'Monday', 'TUE' => 'Tuesday', 'WED' => 'Wednesday', 
                                            'THU' => 'Thursday', 'FRI' => 'Friday', 'SAT' => 'Saturday', 
                                             'SUN' => 'Sunday');
                            foreach ($giorni as $sigla => $nome) {
                                echo "<option value='$sigla'>$nome</option>";
                            }
                            ?>
                        </select>   	
                    </td>
                    <td><input type="date"  name="data_arrivo"></td>
                </tr>
            </table>
    
            <table class="line">
                <tr>
                    <th>HOUR</th>
                    <th>STOCK</th>
                </tr>
                <tr>
                    <td><input type="time" name="ora" ></td>
                    <td><input type="text" placeholder="Enter stock" name="carico"></td>
                </tr>
            </table>
    
            <table>
                <tr>
                    <th>TOT. MOZZ. KG</th>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Enter total mozzarella kg" name="tot_mozz_kg"></td>
                </tr>
                 
            </table>
   
        </div>
                <?php include 'yogurt_rows.php'; ?>
        <footer>
            <table class="table">
                <tr>
                    <th>DELIVERY MANAGER'S SIGNATURE</th>
                    <th>DRIVER'S LEGIBLE SIGNATURE</th>
                </tr>
                <th><input class="note" type="text" name="f_resp_cons_1"></th>
                <th><input class="note" type="text" name="f_autista"></th>
            </table>
        </footer>
                <div>
                    <table class="table">
                        <tr>
                            <th>NOTES</th>
                            <th>LEGIBLE SIGNATURE SALES OFFICE</th>
                        </tr>
                        <th><input class="note" type="text" name="note"></th>
                        <th><input class="note" type="text" name="f_uff_vend"></th>
                    </table>
                </div>
                <div>
                    <table class="table">
                        <tr>
                            <th>Order Opening</th>
                            <th class="caption">DELIVERY MANAGER'S SIGNATURE</th>
                            <th class="caption">DRIVER'S LEGIBLE SIGNATURE</th>
                            <th>Order Closure</th>
                        </tr>
                        <th><input class="note" type="text" name="apertura_ord"></th>
                        <th><input class="note" type="text" name="f_resp_cons_2"></th>
                        <th><input class="note" type="text" name="f_autista_2"></th>
                        <th><input class="note" type="text" name="chiusura_ord"></th>
                    </table>
                </div>
        <button id="invia" class="button">Submit</button>
    </form>
    </body>
</html>