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

    

    function Move($grid) {
        global $grid;
        if($grid['4'] == " "){
            $grid['4'] == "O";
            return $gridl;
        }else if ($grid['4'] == "X" && $grid['0']== " "){
            $grid['0'] == "O";
            return $gridl;
        }else{
            for($x = 0; $x < 3; $x++){
                //[] 
                //X 
                //X
                if($grid[strval($x+0)] == " " && $grid[strval($x+3)] == "X" &&$grid[strval($x+6)] == "X"){
                    $grid[strval($x+0)] = "O";
                    return $gridl;
                }
                //X 
                //[] 
                //X
                if($grid[strval($x+0)] == "X" && $grid[strval($x+3)] == " " &&$grid[strval($x+6)] == "X"){
                    $grid[strval($x+3)] = "O";
                    return $gridl;
                }
                //X 
                //X 
                //[]
                if($grid[strval($x+0)] == "X" && $grid[strval($x+3)] == "X" &&$grid[strval($x+6)] == " "){
                    $grid[strval($x+6)] = "O";
                    return $gridl;
                }
                //[] X X
                if($grid[strval($x*3+0)] == " " && $grid[strval($x*3+1)] == "X" &&$grid[strval($x*3+2)] == "X"){
                    $grid[strval($x*3+0)] = "O";
                    return $gridl;
                }
                //X [] X
                if($grid[strval($x*3+0)] == "X" && $grid[strval($x*3+1)] == " " &&$grid[strval($x*3+2)] == "X"){
                    $grid[strval($x*3+1)] = "O";
                    return $gridl;
                }
                //X X []
                if($grid[strval($x*3+0)] == "X" && $grid[strval($x*3+1)] == "X" &&$grid[strval($x*3+2)] == " "){
                    $grid[strval($x*3+2)] = "O";
                    return $gridl;
                }
            }
            //X
            // X
            //  []
            if($grid['0'] == "X" && $grid['4'] == "X" &&$grid['8'] == " "){
                $grid[8] = "O";
                return $gridl;
            }
            //X
            // []
            //   X
            if($grid['0'] == "X" && $grid['4'] == " " &&$grid['8'] == "X"){
                $grid[4] = "O";
                return $gridl;
            }
            //[]
            //  X
            //   X
            if($grid['0'] == " " && $grid['4'] == "X" &&$grid['8'] == "X"){
                $grid[0] = "O";
                return $gridl;
            }
            //    X
            //  X
            //[]  
            if($grid['2'] == "X" && $grid['4'] == "X" &&$grid['6'] == " "){
                $grid[6] = "O";
                return $gridl;
            }
            //   X
            // []
            //X  
            if($grid['2'] == "X" && $grid['4'] == " " &&$grid['6'] == "X"){
                $grid[4] = "O";
                return $gridl;
            }
            //  []
            // X
            //X  
            if($grid['2'] == " " && $grid['4'] == "X" &&$grid['6'] == "X"){
                $grid[2] = "O";
                return $gridl;
            }
        }
        for($x=0;$x<9;$x++){
            if($grid[strval($x)] == " "){
                grid[strval($x)] == "O";
                return $gridl;
            }
        }
    }


    //header('Access-Control-Allow-Origin:*');//注意！跨域要加这个头 上面那个没有
    $winner = check();
    if($winner == ""){
        Move($grid);
    }
    $myjson -> grid = $grid;
    $myjson -> winner = $winner;
    echo json_encode($myjson);
?>