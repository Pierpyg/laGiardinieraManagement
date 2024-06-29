<?php
// Cycle 50 times to create 50 rows of table
for ($i = 0; $i < 50; $i++) {
    // Print an HTML table row for each iteration of the loop
    echo '
        <tr>
            <!-- Input field for product name -->
            <td><input type="text" name="prodotti[]"></td>
        
            <!-- Selection for VAT on purchase -->
            <td>
                <select name="ivaacquisto[]">
                    <option value=""></option>
                    <option value="4">4%</option>
                    <option value="10">10%</option>
                    <option value="22">22%</option>
                </select>
            </td>
                
            <!-- Input range for purchase price, with step of 0.01 -->
            <td><input type="number" name="prezzoacquisto[]" step="0.01"></td>
                
            <!-- Column for the first ivato price, initially set at € 0.00 -->
            <td>€ 0,00</td>
            
            <!-- Input field for purchasing units -->
            <td><input type="number" name="unitaacquisto[]"></td>
            
            <!-- Selection by VAT on sale -->
            <td>
                <select name="ivavendita[]">
                    <option value=""></option>
                    <option value="4">4%</option>
                    <option value="10">10%</option>
                    <option value="22">22%</option>
                </select>
            </td>
                
            <!-- Input range for selling price, with step of 0.01 -->
            <td><input type="number" name="prezzovendita[]" step="0.01"></td>
                
            <!-- Column for the second ivato price, initially set at € 0.00 -->
            <td>€ 0,00</td>
                
            <!-- Input field for sales units -->
            <td><input type="number" name="unitavendita[]"></td>
                
            <!-- Column for % margin, initially set to € 0.00 -->
            <td>€ 0,00</td>
                
            <!-- Column for margin in €, initially set to € 0.00 -->
            <td>€ 0,00</td>
        </tr>';
}
?>


