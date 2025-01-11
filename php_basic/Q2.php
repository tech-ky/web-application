<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
// Item prices and quantities
$hamburger_price = 4.95;
$hamburger_qty = 2;
$milkshake_price = 1.95;
$milkshake_qty = 1;
$coffee_price = 0.85;
$coffee_qty = 1;

// Calculations
$hamburger_total = $hamburger_price * $hamburger_qty;
$milkshake_total = $milkshake_price * $milkshake_qty;
$coffee_total = $coffee_price * $coffee_qty;
$pre_tax_total = $hamburger_total + $milkshake_total + $coffee_total;

$sales_tax_rate = 0.07;
$sales_tax = $pre_tax_total * $sales_tax_rate;

$pre_tax_tip_rate = 0.10;
$pre_tax_tip = $pre_tax_total * $pre_tax_tip_rate;

$total_with_tax = $pre_tax_total + $sales_tax;
$final_total = $total_with_tax + $pre_tax_tip;
?>
        <style>
            td th{
                text-align:right;
            }
            .dp{
                
            }
            </style>
        <table>
            <tr>
                <th>Items</th>
                <th>Price</th>
                <th>Quantity</th>
                <th class="dp">Total</th>
            </tr>
            <tr>
                <td>Hamburger </td>
                <td><?php echo $hamburger_price?> </td>
                <td><?php echo $hamburger_qty?> </td>
                <td class="dp"><?php echo number_format($hamburger_total,2)?> </td>
            </tr>
            
            <tr>
                <td>Chocolate Milkshake</td>
                <td><?php echo $milkshake_price?> </td>
                <td><?php echo $milkshake_qty?> </td>
                <td class="dp"><?php echo $milkshake_total?> </td>
            </tr>
            
            <tr>
                <td>Coffee </td>
                <td><?php echo $coffee_price?> </td>
                <td><?php echo $coffee_qty?> </td>
                <td class="dp"><?php echo $coffee_total?> </td>
            </tr>
            
            <tr>
                <td> </td>
                <td> </td>
                <td>Total Before Tax Total </td>
                <td class="dp"><?php echo number_format($pre_tax_total,2)?> </td>
            </tr>
            
            <tr>
                <td></td>
                <td></td>
                <td>Post-Tax Total</td>
                <td class="dp"><?php echo number_format($sales_tax,2)?> </td>
            </tr>
            
            <tr>
                <td></td>
                <td></td>
                <td>Total Cost</td>
                <td class="dp"><?php echo number_format($final_total,2) ?> </td>
            </tr>
            
            
        </table>

    </body>
</html>
