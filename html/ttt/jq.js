var grid = [" ", " ", " ",
            " ", " ", " ",
            " ", " ", " "];
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
        
        $.post( "/ttt/play", { "grid": grid }, function( data ) {
        console.log(data);
        $("#a").text(data.winner);
        grid = data.grid;
        winner = data.winner;
        for(var i=0; i<9;i++){
            $('#' + i).text(data.grid[i]);
           }
      }, "json" );
   
}