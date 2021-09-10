<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SushiShop</title>
</head>
<body>
    MENU for SUSHISHOP
    <form action="index.php" method="post" onclick="demand()">
            <p>Nigiri- Please choose amount</p>
            <input type="number" name="nigiri" min="0" value="0">
            <br>

            <p>California- Please choose amount</p>
            <input type="number" name="cali" min="0" value="0">
            <br>

            <p>Tempura- Please choose amount</p>
            <input type="number" name="tempura" min="0" value="0">
            <br>

            <p>Avocado- Please choose amount</p>
            <input type="number" name="avocado" min="0" value="0">
            <br>

            <input type="submit" value="submit" name="submit">
        </form>

        <?php 
        
        ?>

    <script>

    function demand() {
        console.log("This box is number: ");

        document.getElementById("result").innerHTML = "Loading...";

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("result").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "delivery.php=", true);
        xhttp.send();
    }


    </script>      

</body>
</html>