<html>
    <button>

    </button>
</html>
<?php
class Car {
    var $name ;
    var $type;
    var $colour;
    function __construct($name,$type,$colour)
    {
        $this->name=$name;
        $this->colour=$colour;
        $this->type=$type;

        $this->message();
    }   
    public function message(){
        echo"<br>My Car is ".$this->colour." " . $this->type . " !<br>";
    }
}

$Car1= new Car("bibi","BMW","red");
echo"hello world!<br>";
echo"you";
?>