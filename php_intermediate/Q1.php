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
        for($num=1;$num<=50;$num++){
            if( $num % 2 == 0)
            {
                echo  '<span style="color: red;">'. $num .'</span>';
                if( $num % 10 == 0){
                    echo"<br>";
                }
            }else{
                if($num%7==0){
                    echo'<span style="color: blue;">'. $num .'</span>';    
                }else{
                    echo'<span style="color: black;">'. $num .'</span>';
                }
                }
                
            }
        ?>
    </body>
</html>
