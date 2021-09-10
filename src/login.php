<?php

session_start();

//1. INPUT
//2. VALIDATE INPUT
//3. BUSINESS LOGIC
//4. OUTPUT

$validated = false;

    $price_nigiri = 2;
    $price_cali = 3;
    $price_tempura = 4;
    $price_avocado = 1;

    $error = "";

if(isset($_POST['submit'])){
    $temp_nigiri = htmlspecialchars($_POST['nigiri']);
    $temp_california = htmlspecialchars($_POST['california']);
    $temp_tempura = htmlspecialchars($_POST['tempura']);
    $temp_avocado = htmlspecialchars($_POST['avocado']);

    if(isset($_POST['nigiri'])) {
        if(is_numeric($temp_nigiri) == true){
                if($temp_nigiri <= 50){
                $price_nigiri = $temp_nigiri;
            }else{
                $error .= "<br>Maximum order is reached";
                }
            }else{
                $error .= "<br>Please add a correct amount";
                }     
            }    
    if(isset($_POST['california'])) {
        if(is_numeric($temp_california) == true){
                if($temp_california <= 50){
                $price_cali = $temp_california;
            }else{
                $error .= "<br>Maximum order is reached";
                }
            }else{
                $error .= "<br>Please add a correct amount";
                }
            }
            
    if(isset($_POST['tempura'])) {        
        if(is_numeric($temp_tempura) == true){
                if($temp_tempura <= 50){
                $price_tempura = $temp_tempura;
            }else{
                $error .= "<br>Maximum order is reached>";
                }
            }else{
                $error .= "<br>Please add a correct amount";
                }
            }
         
    if(isset($_POST['avocado'])) {
        if(is_numeric($temp_avocado) == true){
                if($temp_avocado <= 50){
                $price_avocado = $temp_avocado;
            }else{
                $error .= "<br>Maximum order is reached>";
                }
            }else{
                $error .= "<br>Please add a correct amount";
                }
            }

    if(empty($error)){
                $validated = true;
            } 
        }

        if ($validated == true) {
            $nigiri_amount = $temp_nigiri * $price_nigiri;

            echo " $nigiri_amount "
            $order = $price_nigiri + $price_cali + $price_tempura + $price_avocado; 
            echo "Total order = " . $order . "<br>"; 
            }

            $nigiri_amount = $temp_nigiri * $price_nigiri;

            echo " $nigiri_amount "

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

    <?php 
    
    

    ?>
    
</body>
</html>
    