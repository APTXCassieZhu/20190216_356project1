var grid = new Array(9);
var gameover = false;

for(var i=0; i<=8; i++){
    grid = ' ';
}

function clickCell(x){
    document.getElementById(x).innerHTML = "X";
}

