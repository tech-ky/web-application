<!DOCTYPE html>
<html lang=en>
<head>
</head>
<body>
    <script>
        var x = 0;
        var output = "";
        for (x = 20; x >= 5; x--) {
        if (x % 3 == 0 && x % 2 == 1)
        output = output + x;
        }
document.write(output); 
    </script>
</body>
</html>
