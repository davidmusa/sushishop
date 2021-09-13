<?php

session_start();

//1. INPUT
//2. VALIDATE INPUT
//3. BUSINESS LOGIC
//4. OUTPUT

////////////////////////
//constants
////////////////////////
$tps = 0.05;
$tvq = 0.10;

$price_nigiri = 2;
$price_cali = 3;
$price_tempura = 4;
$price_avocado = 1;
////////////////////////
//end constants
////////////////////////

//getting the input
$quantity_nigiri = 0;
$quantity_cali = 0;
$quantity_tempura = 0;
$quantity_avocado = 0;

//input validation
$errors = Array();

if (isset($_POST['submit'])) {
    if (isset($_POST['nigiri'])) {
        $quantity_nigiri = htmlspecialchars($_POST['nigiri']);
        if (is_numeric($quantity_nigiri)) {
            if ($quantity_nigiri < 0) {
                $errors[] = "You can only buy a positive amount, otherwise go to another universe...";
            }
        } else {
            $errors[] = "Quantity of nigiri must be a number...";
        } 
    } else {
        $errors[] = "You did not submit the quantity of nigiri...";
    }
    if (isset($_POST['cali'])) {
        $quantity_cali = htmlspecialchars($_POST['cali']);
        if (is_numeric($quantity_cali)) {
            if ($quantity_cali < 0) {
                $errors[] = "You can only buy a positive amount, otherwise go to another universe...";
            }
        } else {
            $errors[] = "Quantity of cali must be a number...";
        } 
    } else {
        $errors[] = "You did not submit the quantity of cali...";
    }
    if (isset($_POST['tempura'])) {
        $quantity_tempura = htmlspecialchars($_POST['tempura']);
        if (is_numeric($quantity_tempura)) {
            if ($quantity_tempura < 0) {
                $errors[] = "You can only buy a positive amount, otherwise go to another universe...";
            }
        } else {
            $errors[] = "Quantity of tempura must be a number...";
        } 
    } else {
        $errors[] = "You did not submit the quantity of tempura...";
    }
    if (isset($_POST['avocado'])) {
        $quantity_avocado = htmlspecialchars($_POST['avocado']);
        if (is_numeric($quantity_avocado)) {
            if ($quantity_avocado < 0) {
                $errors[] = "You can only buy a positive amount, otherwise go to another universe...";
            }
        } else {
            $errors[] = "Quantity of avocado must be a number...";
        } 
    } else {
        $errors[] = "You did not submit the quantity of avocado...";
    }
} else {
    $errors[] = "Error, you did not submit the form...";
}

//output
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
    +
    
    <div id="result">
        <?php 
            $number_or_errors = count($errors);
            if ($number_or_errors > 0) {
                //show the errors
                for ($i = 0; $i < $number_or_errors; $i++) {
                    echo $errors[$i] . "<br>";
                }
            } else {
                //show detailed receipt
                echo "Nigiri : " . $quantity_nigiri . " ........... " . $price_nigiri * $quantity_nigiri . "$<br>";
                echo "Cali : " . $quantity_cali . " ........... " . $price_cali * $quantity_cali. "$<br>";
                echo "Tempura : " . $quantity_tempura . " ........... " . $price_tempura * $quantity_tempura. "$<br>";
                echo "Avocado : " . $quantity_avocado . " ........... " . $price_avocado * $quantity_avocado. "$<br>";

                //calculate TPS and TVQ
                $sub_total = 0;
                $sub_total += $price_nigiri * $quantity_nigiri + $price_cali * $quantity_cali + $price_tempura * $quantity_tempura + $price_avocado * $quantity_avocado;

                $total = $sub_total + $sub_total * $tps;
                $pay_tps = $sub_total * $tps;
                $pay_tvq = $total * $tvq;
                $total += $total * $tvq;
                echo "<br><br>Your subtotal is: " . $sub_total . "$<br><br>";
                echo "TPS is: " . $pay_tps . "$<br>";
                echo "TVQ is: " . $pay_tvq . "$<br><br>";
                echo "________________________" . "<br><br>";
                echo "Total is: " . $total . "$";
            }
        ?>
    </div>
</body>
</html>
    