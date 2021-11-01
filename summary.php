<?php   
$name = $_POST['name'];
$meal = $_POST['meal'];
$date = $_POST['date'];
$time = $_POST['time'];
$guests = $_POST['guests'];
$foodPref = $_POST['food-pref'];
$specialReq = $_POST['special-req'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="styles/reserve.css">
    <title>Summary</title>
    <h1 class="header">Reservation Confirmation</h1>
</head>

<body>
    <h3>Name: <?php echo $name ?></h3>
    <h3>Meal: <?php echo $meal ?></h3>
    <h3>Date: <?php echo $date ?></h3>
    <h3>Time: <?php echo $time ?></h3>
    <h3>Guests: <?php echo $guests ?></h3>
    <h3>Food Preferences: <?php echo $foodPref ?></h3>
    <h3>Special requests: <?php echo $specialReq ?></h3>
</body>

</html>