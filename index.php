<?php 
    session_start();

    if(!isset($_SESSION['username'])) {
	header('Location: login.php');
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Calculator</title>
</head>
<body>
    <h1>Welcome! <?php echo $_SESSION['username'];?> <br><br> Here are the prices:</h1>
    <a href="logout.php">Logout</a>
    <ul>
        <li>Fishball - 30</li>
        <li>Kikiam - 40</li>
        <li>Corndog - 50</li>
    </ul>

    <form action="Index2.php" method="post">
        <label for="item">Select Item:</label>
        <select id="item" name="item">
            <option value="fishball">Fishball</option>
            <option value="kikiam">Kikiam</option>
            <option value="corndog">Corndog</option>
        </select><br><br>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity">
        <br>
        <br>

        <label for="money">Cash:</label>
        <input type="number" id="money" name="money">
        <br>
        <br>

        <input type="submit" name="submit">
    </form>
</body>
<?php 
    $welcomeMessage = isset($_SESSION['username']) ? "Welcome " . $_SESSION['username'] . " to the canteen" : "Welcome to the canteen";
    ?>
</html>
