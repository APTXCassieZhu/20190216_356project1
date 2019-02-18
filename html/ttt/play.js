var grid = {0:" ", 1:" ", 2:" ",
            3:" ", 4:" ", 5:" ",
            6:" ", 7:" ", 8:" "
            };
var winner = "";

$(document).ready(function(){
    $(".cell").click(function(){
      if (winner == ""){
      $(this).text("X");
      grid[$(this).attr("id")]="X";
      sendJson();
      }
    });
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
      }, "json" );
   
}