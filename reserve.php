<?php
//call the validation for reserve form
require_once('validation.php');
?>
<?php
$errors = [];
if (isset($_POST['reserve'])) {
    $errors = reserve($_POST);

    if (count($errors) === 0)
        redirect('summary.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reserve</title>
    <!-- call the css + appropriate validation links -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/reserve.css">
    <script src="plugins/jquery.validate.js"></script>
    <h2 class="header">Reservation</h2>
</head>

<body>
    <div class="container" style="margin-top:30px">
        <!-- reserve form -->
        <form method="post">
            <!-- create user input values -->
            <div class="box box1">
                <img src="media/name.png" class="icon">
                <label for="meal">Name</label>
                <input type="text" class="input" id="name" name="name" placeholder="Name" <?php displayValue($_POST, 'name'); ?> />
                <?php displayError($errors, 'name'); ?>
            </div>

            <div class="box box2">
                <img src="media/meal.png" class="icon">
                <label for="meal">Meal</label>
                <select class="input" id="meal" name="meal" <?php displayValue($_POST, 'meal'); ?>>
                    <option value="breakfast">Breakfast</option>
                    <option value="lunch">Lunch</option>
                    <option value="dinner">Dinner</option>
                </select>
                <?php displayError($errors, 'meal'); ?>
            </div>

            <div class="box box1">
                <img src="media/date.png" class="icon">
                <label for="date">Date</label>
                <input type="date" class="input" id="date" name="date" <?php displayValue($_POST, 'date'); ?> />
                <?php displayError($errors, 'date'); ?>
            </div>

            <div class="box box2">
                <img src="media/time.png" class="icon">
                <label for="time">Time</label>
                <input type="text" class="input" id="time" name="time" placeholder="24hour format (13:30)" <?php displayValue($_POST, 'time'); ?> />
                <?php displayError($errors, 'time'); ?>
            </div>

            <div class="box box1">
                <img src="media/guest.png" class="icon">
                <label for="guests">Guests</label>
                <input type="text" class="input" id="guests" name="guests" placeholder="1-10" <?php displayValue($_POST, 'guests'); ?> />
                <?php displayError($errors, 'guests'); ?>
            </div>

            <div class="box box2">
                <img src="media/food.png" class="icon">
                <label for="food-pref">Food preferences</label>
                <input type="text" class="input" id="food-pref" name="food-pref" placeholder="Vegetarian, Vegan, Gluten Free" <?php displayValue($_POST, 'food-pref'); ?> />
                <?php displayError($errors, 'food-pref'); ?>
            </div>

            <div class="special">
                <img src="media/special.png" class="icon">
                <label for="special-req">Special requests</label>
                <input type="text" class="input" id="special-req" name="special-req" placeholder="Quiet table, Table near a window, Inside table, Outisde table" <?php displayValue($_POST, 'special-req'); ?> />
                <?php displayError($errors, 'special-req'); ?>
            </div>

            <!-- submit button -->
            <button type="submit" class="btn btn-primary mr-5" name="reserve" value="reserve">Reserve Table</button>
        </form>
    </div>
</body>