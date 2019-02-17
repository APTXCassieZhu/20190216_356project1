<?php
    //header('Access-Control-Allow-Origin:*');//注意！跨域要加这个头 上面那个没有
    $gird = json_decode($_POST["grid"],true);
    $gird['8'] = "O";
    $myjson -> gird = $grid;
    $myjson -> winner = "me";
    echo json_encode($myjson); 
?>