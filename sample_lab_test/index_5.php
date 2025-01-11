<!DOCTYPE html>
<html lang=en>
<head>
<title>HTML5 Lab Test </title>
</head>

<body>
    <script>
        function submitData(){
            var object=document.getElementsByTagName("Object");
            var type=document.getElementByTagName("Type");
            var MesDisplay="";
            if(isblank(object)){
                MesDisplay="You need to enter the object field";
            }else-if(isblank(type)){
               MesDisplay="You need to select an object type"; 
            }else{
                form.submit();
            }
        }
    </script>
    <h1 style="text-align:center;color:blue">Object Classification</h1>
    <form method="post">
        <label>Object: </label>
        <input name=Object type="text"><br>
        <label>Type: </label>
        <input type="radio" name="type" value="Metal">Metal
        <input type="radio" name="type" value="Wood">Wood
        <input type="radio" name="type" value="Liquid">Liquid
        <input type="radio" name="type" value="Plants">Plants
        <input type="radio" name="type" value="Animal">Animals
        <input type="radio" name="type" value="Humans">Humans
        <input type="radio" name="type" value="Others">Others<br>
        <input type="submit" onclick="submitData()">
    </form>
    <h1><h1>
    
    
</body>
</html>
