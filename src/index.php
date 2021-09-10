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
    <form action="delivery.php" method="post">
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
</body>
</html>