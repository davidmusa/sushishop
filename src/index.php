<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SushiShop</title>
</head>
<body>
    MENU for SUSHISHOP
    <div class="row">
        <div id="order_form" class="column">
                    <p>Nigiri- Please choose amount</p>
                    <input type="number" id="nigiri" name="nigiri" min="0" value="0">
                    <br>

                    <p>California- Please choose amount</p>
                    <input type="number" id="cali" name="cali" min="0" value="0">
                    <br>

                    <p>Tempura- Please choose amount</p>
                    <input type="number" id="tempura" name="tempura" min="0" value="0">
                    <br>

                    <p>Avocado- Please choose amount</p>
                    <input type="number" id="avocado" name="avocado" min="0" value="0">
                    <br>

                    <button onclick="get_receipt()">Preview</button>
        </div>
        <div id="receipt" class="column" style="background:#ececec;">
            Order to get your receipt here...
        </div>
    </div>

        <?php 
        
        ?>

    <script>

        function get_receipt() {

            var loader = '<div class="lds-grid"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>';
            document.getElementById("receipt").innerHTML = loader;

            var q_nigiri = document.getElementById("nigiri").value;
            var q_california = document.getElementById("cali").value;
            var q_tempura = document.getElementById("tempura").value;
            var q_avocado = document.getElementById("avocado").value;

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("receipt").innerHTML = this.responseText;
                }
            };

            xhttp.open("POST", "delivery.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("submit=true&nigiri=" + q_nigiri + "&cali=" + q_california + "&tempura=" + q_tempura + "&avocado=" + q_avocado);
        }
    </script>      

</body>
</html>