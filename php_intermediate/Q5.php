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
        <style>
            table {
            border-collapse: collapse;
          }
            th ,td{
               border:solid black;
            }
        </style>
        <table>
            <tr>
                <th>Fahrenheit</th>
                <th>Celsius</th>
            </tr> 
        <?php
        $F= -50;
        while($F<=350){
            $C = number_format(5 / 9 * ($F - 32), 2);
            
            // Apply background color for temperatures below freezing point
            if ($F < 32) {
                echo "<tr style='background-color: yellow;'><td>$F</td><td>$C</td></tr>"; 
            } 
            // Apply background color for temperatures between freezing and boiling points
            elseif ($F < 212) {
                echo "<tr style='background-color: blue;'><td>$F</td><td>$C</td></tr>"; 
            } 
            // Apply background color for temperatures above boiling point
            else {
                echo "<tr style='background-color: red;'><td>$F</td><td>$C</td></tr>"; 
            }
            $F+=5;
        }
        ?>
        </table>
    </body>
</html>