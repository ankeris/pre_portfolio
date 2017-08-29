var inputBox = document.getElementById('textInput');

inputBox.onkeyup = function(){
    document.getElementById('textDisplay').innerHTML = inputBox.value;
}