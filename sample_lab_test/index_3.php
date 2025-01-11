

<!DOCTYPE html>
<html lang=en>
<head>
</head>
<body>
<?php 
$x = 20;
$sum=0;
while ($x >= 0) {
    if($x%2==1)
    {
        $sum+=$x;
    }
$x--;  
}
echo $sum;
?>
</body>
</html>