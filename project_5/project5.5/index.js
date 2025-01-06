var button = document.getElementById("button")
var label = document.getElementById("label")

button.addEventListener("click",change_label1);
button.addEventListener("dblclick",change_label2);

function change_label1(){
    label.innerHTML="";
    label.innerHTML="you click 1 time";
}

function change_label2(){
    label.innerHTML="";
    label.innerHTML="you click 2 time";
}