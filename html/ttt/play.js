var grid = {0:" ", 1:" ", 2:" ",
            3:" ", 4:" ", 5:" ",
            6:" ", 7:" ", 8:" "
            };
var winner = "";

$(document).ready(function(){
    $(".cell").click(function(){
      $(this).text("X");
      grid[$(this).attr("id")]="X";
      sendJson();
    });
  });

  function sendJson() {
    var posting = $.post( "/ttt/play.php", { "grid": grid }, function( data ) {
        $("#a").text(data.winner);
        grid = data.grid;
        winner = data.winner;
        console.log(data.grid);
      }, "json" );
   
}