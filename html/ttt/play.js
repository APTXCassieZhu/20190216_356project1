var grid = {0:" ", 1:" ", 2:" ",
            3:" ", 4:" ", 5:" ",
            6:" ", 7:" ", 8:" "
            };
var winner = "";

$(document).ready(function(){
  if (winner = ""){
    $(".cell").click(function(){
      $(this).text("X");
      grid[$(this).attr("id")]="X";
      sendJson();
      console.log("111");
    });
  }
  });

  function sendJson() {
        
        $.post( "/ttt/play.php", { "grid": grid }, function( data ) {
        console.log(data);
        $("#a").text(data.winner);
        grid = data.grid;
        winner = data.winner;
        for(var i=0; i<9;i++){
            $('#' + i).text(data.grid[i]);
           }
   
        console.log(data.grid);
        console.log("lalal");
      }, "json" );
   
}