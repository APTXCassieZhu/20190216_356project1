<?php
    $grid = $_POST["grid"];
    $winner = "";

    function Check(){
        global $grid,$winner;
        for($x = 0; $x < 3; $x++){
            if($grid[strval($x+0)] == "X" && $grid[strval($x+3)] == "X" && $grid[strval($x+6)] == "X"){
                return "X";
            }
            if($grid[strval($x*3+0)] == "X" && $grid[strval($x*3+1)] == "X" && $grid[strval($x*3+2)] == "X"){
                return "X";
            }
            if($grid[strval($x+0)] == "O" && $grid[strval($x+3)] == "O" && $grid[strval($x+6)] == "O"){
                return "O";
            }
            if($grid[strval($x*3+0)] == "O" && $grid[strval($x*3+1)] == "O" && $grid[strval($x*3+2)] == "O"){
                return "O";
            }
        }
        if($grid['0'] == "X" && $grid['4'] == "X" && $grid['8'] == "X"){
            return "X";
        }
        if($grid['2'] == "X" && $grid['4'] == "X" && $grid['6'] == "X"){
            return "X";
        }
        if($grid['0'] == "O" && $grid['4'] == "O" && $grid['8'] == "O"){
            return "O";
        }
        if($grid['2'] == "O" && $grid['4'] == "O" && $grid['6'] == "O"){
            return "O";
        }
        return "";
    }

    
    function Move() {
        global $grid,$winner;
        if($grid['4'] == " "){
            $grid['4'] == "O";
        }else{
            for($x = 0; $x < 3; $x++){
                if($grid['0'] == "X" && $grid['1'] == "X"){

                }
            }
        }
    }


    //header('Access-Control-Allow-Origin:*');//注意！跨域要加这个头 上面那个没有
    $winner = check();
    $myjson -> grid = $grid;
    $myjson -> winner = $winner;
    echo json_encode($myjson);
?>