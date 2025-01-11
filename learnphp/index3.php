<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        <labeL>quantity:</labeL><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
    <?php
    $item="pizzas";
    $price=5.99;
    $quantity=$_POST["quantity"];
    $total=null;
    $total = $quantity*$price;
    echo"You have Ordered{$quantity} x{$item}/s <br> Your total is : {$total}";
    ?>
</html>