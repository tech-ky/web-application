<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php  
// function example:
function myFunction() {
  echo "This text comes from a function";
}

// create array:
$myArr = ["Volvo", 15, ["apples", "bananas"], myFunction()];

// calling the function from the array item:
$myArr[3]();
?>  

</body>



</html>