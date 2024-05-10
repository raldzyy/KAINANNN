<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANONG ORDER MO?</title>
</head>
<body>
    <?php
        session_start();

        if (!isset($_SESSION['username'])) {
            header("Location: login.php");
            exit;
        }

        $username = $_SESSION['username'];
        echo "<h1>Welcome to the Canteen, <span style='color: red;'>$username</span>!</h1>";
    ?>

    <h2>ANONG ORDER MO?</h2>
    <form action="orderna.php" method="post">
        <p><b>Quantity</b></p>
        <ul>
            <li>Chicken Wings w rice = 160php</li>
            <li>beef tapsi = 200php</li>
            <li>Sisig with egg = php</li>
        </ul>
        <b>Choose your order: </b>
        <select name="select_all">
            <option value="Chicken Wings">Chicken Wings</option><option value="beef tapsi">beef tapsi</option><option value="Sisig with egg">Sisig with egg</option>
        </select><br><br>
        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity"><br><br>
        <label for="cash">Cash:</label>
        <input type="text" id="cash" name="cash"> <br><br>
        <input type="submit" value="Submit Order">
    </form>
</body>
</html>
