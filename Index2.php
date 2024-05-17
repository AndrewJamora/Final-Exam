<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>
<body>
    <?php
    session_start();

    if(!isset($_SESSION['username'])) {
	header('Location: login.php');
} 
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $item = $_POST['item'];
        $quantity = $_POST['quantity'];
        $moneyPaid = $_POST['money'];

        // Prices for each item
        $prices = [
            'fishball' => 30,
            'kikiam' => 40,
            'corndog' => 50,
        ];
        $price = $prices[$item];
        $totalCost = $quantity * $price;
        $change = $moneyPaid - $totalCost;
    }

    echo "<h2> The total cost is</h2>";
    echo $totalCost;
    echo "<h2> Your change is </h2>";
    echo $change;
    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo "<br> Thank you $username for ordering!";
    }
    ?>
</body>
</html>