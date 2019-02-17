var grid = new Array(9);
var gameover = false;

$(document).ready(function(){
    $(".cell").click(function(){
      $(this).text("X");
      grid[$(this).attr("id")]="X";
      sendJson();
    });
  });





  function sendJson() {

    var posting = $.post( "/ttt/play.php", { "grid": grid } );
}