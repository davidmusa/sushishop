<?php

session_start();

//1. INPUT
//2. VALIDATE INPUT
//3. BUSINESS LOGIC
//4. OUTPUT

$validated = false;

    $n = 0;
    $c = 0;
    $t = 0;
    $a = 0;

    $error = "";

if(isset($_POST['submit'])){
    $temp_nigiri = htmlspecialchars($_POST['nigiri']);
    $temp_california = htmlspecialchars($_POST['california']);
    $temp_tempura = htmlspecialchars($_POST['tempura']);
    $temp_avocado = htmlspecialchars($_POST['avocado']);

    if(is_numeric($temp_nigiri) == true){
        if ($temp_nigiri >= 0){
            if($temp_nigiri <= 50){
            $n = $temp_nigiri;
        }else{
            $error .= "<br>Maximum number is reached on X";
            }
        }else{
            $error .= "<br>X is lower than 0";
            }
        }else{
            $error .= "<br>Please input a number on X";
            }                
    
    if(is_numeric($temp_california) == true){
        if ($temp_california >= 0){
            if($temp_california <= 50){
            $c = $temp_california;
        }else{
            $error .= "<br>Maximum number is reached on Y";
            }
        }else{
            $error .= "<br>Y is lower than 0";
            }
        }else{
            $error .= "<br>Please input a number on Y";
            }
            
    if(is_numeric($temp_tempura) == true){
        if ($temp_tempura >= 0){
            if($temp_tempura <= 50){
            $t = $temp_tempura;
        }else{
            $error .= "<br>Maximum number is reached on Y";
            }
        }else{
            $error .= "<br>Y is lower than 0";
            }
        }else{
            $error .= "<br>Please input a number on Y";
            }
    
    if(is_numeric($temp_avocado) == true){
        if ($temp_avocado >= 0){
            if($temp_avocado <= 50){
            $a = $temp_avocado;
        }else{
            $error .= "<br>Maximum number is reached on Y";
            }
        }else{
            $error .= "<br>Y is lower than 0";
            }
        }else{
            $error .= "<br>Please input a number on Y";
            }

    if(empty($error)){
                $validated = true;
            } 
        }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
</head>
<body>
    <div style="font-size: 50px;">Receipt</div>
// 1 echo only
</body>
</html>
    