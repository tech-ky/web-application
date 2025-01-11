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
        <h2>Given Salary</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Salary</th>
            </tr>
        <?php
        // Create a salary table
        $salary = array("Peter"=>3800, "Lily"=>2300, "Helen"=>3100);
        foreach ($salary as $name => $amount) {
        echo "<tr><td>$name</td><td>\$$amount</td></tr>";
        }
        
        // increase by 5% 
        foreach($salary as $name=>$value){
            $salary[$name]=$value*1.05;
        }
        
        //calculate average 
        $average_salary=array_sum($salary)/count($salary);
        echo "</table><h2>Salary after 5% increase</h2>";
        echo"<table><tr><th>Name</th><th>Salary</th></tr>";
        foreach ($salary as $name => $amount) {
        echo "<tr><td>$name</td><td>\$$amount</td></tr>";
        }
        echo" </table>The average Salary is $average_salary";
        
        //sort the value 
        arsort($salary);
        echo "<h2>Salary after sorting the value</h2>";
        echo"<table><tr><th>Name</th><th>Salary</th></tr>";
        foreach ($salary as $name => $amount) {
        echo "<tr><td>$name</td><td>\$$amount</td></tr>";
        }
        
        //sort the name 
        ksort($salary);
        echo "</table><h2>Salary after sorting the name</h2>";
        echo"<table><tr><th>Name</th><th>Salary</th></tr>";
        foreach ($salary as $name => $amount) {
        echo "<tr><td>$name</td><td>\$$amount</td></tr>";
        }
        ?>
     </table>
    </body>
</html>