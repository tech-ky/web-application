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
        <main>
            <style>
                .footer{
                    
                }
            </style>
            <form action="process.php" method="post">
                <table>
                    <tr class="footer">
                        <td>Name :</td>
                        <td><input type="text" name="name" id="name" placeholder="Enter your name"></td>
                    </tr>
                    
                    <tr>
                        <td>Email :</td>
                        <td><input type="email" name="email" id="email" placeholder="Enter your email"></td>
                    </tr>
                    
                    <tr>
                        <td>Password :  </td>
                        <td><input type="password" name="password" id="password" placeholder="Set your password"></td>
                    </tr>
                    
                    <tr>
                        <td>Gender :</td>
                        <td><input  type="radio" name="gender" value="male">Male<input type="radio" name="gender" value="female">Female</td>
                    </tr>
                        <td>Course :</td>
                                <td><select name="course" id="course">
                                        <option value="DCPE">DCPE</option>
                                        <option value="DEEE">DEEE</option>
                                        <option value="DBE">DBE</option>
                                        <option value="DASE">DASE</option>
                            </select></td>
                </table>
                <input type="submit" value="submit">
            </form>
        </main>
        <?php
        // put your code here
        ?>
    </body>
</html>
