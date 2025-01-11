<!DOCTYPE html>
<?php include 'server.php'; ?>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <link rel="stylesheet" href="newcss.css">
    </head>
    <body>
        <?php 
        if(isset($_SESSION['message'])): ?>
        <div class="msg">
            <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message']);?>
        </div>
        <?php endif ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<div class="input-group"><!-- comment -->
<label>Name:</label>
<input type="text" name="name" value ="">
</div>
<div class="input-group"><!-- comment -->
<label>Address:</label>
<input type="text" name="address" value ="">
</div>
<div class="input-group">
<button type="submit" class="button" name="save"> Save</button>
</div>
 
</form>
    </body>
</html>
