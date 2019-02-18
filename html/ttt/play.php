<?php
    function Move() {
        if($grid['4'] = " "){
            $grid['4'] = "O";
        }else{
            for($x = 0; $x < 3; $x++){
                for($y = 0; $y < 3; $y++){
                    
                }
            }
        }
    }


    //header('Access-Control-Allow-Origin:*');//注意！跨域要加这个头 上面那个没有
    $grid = $_POST["grid"];

    $myjson -> grid = $grid;
    $myjson -> winner = "me";
    echo json_encode($myjson);
?>