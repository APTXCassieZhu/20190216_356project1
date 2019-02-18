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
            print "11 ";
            $grid[4] = "O";
            return " ";
        }else if ($grid['4'] == "X" && $grid['0'] == " "){
            print "22 ";
            $grid[0] = "O";
            return " ";
        }else{
            for($x = 0; $x < 3; $x++){
                //[] 
                //X 
                //X
                if($grid[strval($x+0)] == " " && $grid[strval($x+3)] == "X" &&$grid[strval($x+6)] == "X"){
                    $grid[strval($x+0)] = "O";
                    return " ";
                }
                //X 
                //[] 
                //X
                if($grid[strval($x+0)] == "X" && $grid[strval($x+3)] == " " &&$grid[strval($x+6)] == "X"){
                    $grid[strval($x+3)] = "O";
                    return " ";
                }
                //X 
                //X 
                //[]
                if($grid[strval($x+0)] == "X" && $grid[strval($x+3)] == "X" &&$grid[strval($x+6)] == " "){
                    $grid[strval($x+6)] = "O";
                    return " ";
                }
                //[] X X
                if($grid[strval($x*3+0)] == " " && $grid[strval($x*3+1)] == "X" &&$grid[strval($x*3+2)] == "X"){
                    $grid[strval($x*3+0)] = "O";
                    return " ";
                }
                //X [] X
                if($grid[strval($x*3+0)] == "X" && $grid[strval($x*3+1)] == " " &&$grid[strval($x*3+2)] == "X"){
                    $grid[strval($x*3+1)] = "O";
                    return " ";
                }
                //X X []
                if($grid[strval($x*3+0)] == "X" && $grid[strval($x*3+1)] == "X" &&$grid[strval($x*3+2)] == " "){
                    $grid[strval($x*3+2)] = "O";
                    return " ";
                }
            }
            //X
            // X
            //  []
            if($grid['0'] == "X" && $grid['4'] == "X" &&$grid['8'] == " "){
                $grid[8] = "O";
                return " ";
            }
            //X
            // []
            //   X
            if($grid['0'] == "X" && $grid['4'] == " " &&$grid['8'] == "X"){
                $grid[4] = "O";
                return " ";
            }
            //[]
            //  X
            //   X
            if($grid['0'] == " " && $grid['4'] == "X" &&$grid['8'] == "X"){
                $grid[0] = "O";
                return " ";
            }
            //    X
            //  X
            //[]  
            if($grid['2'] == "X" && $grid['4'] == "X" &&$grid['6'] == " "){
                $grid[6] = "O";
                return " ";
            }
            //   X
            // []
            //X  
            if($grid['2'] == "X" && $grid['4'] == " " &&$grid['6'] == "X"){
                $grid[4] = "O";
                return " ";
            }
            //  []
            // X
            //X  
            if($grid['2'] == " " && $grid['4'] == "X" &&$grid['6'] == "X"){
                $grid[2] = "O";
                return " ";
            }
        }
        for($x=0;$x<9;$x++){
            if($grid[strval($x)] == " "){
                $grid[$x] = "O";
                return " ";
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