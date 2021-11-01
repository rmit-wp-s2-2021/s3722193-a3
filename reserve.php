<?php
    //call the validation for reserve form
    require_once('validation.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reserve</title>
    <!-- call the css -->
    <link rel="stylesheet" type="text/css" href="styles/reserve.css">
    <h2 class="header">Reservation</h2>
</head>

<body>
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-20">
                <!-- reserve form -->
                <form method="post">
                    <!-- create user input values -->
                    <div class="left">
                        <img src="media/name.png" class="icon">
                        <label for="name">Name</label>       
                        <input type="text" class="form-control" id="name" name="name" <?php displayValue($_POST, 'name'); ?> />
                        <?php displayError($errors, 'name'); ?>
                    </div>

                    <div class="right">
                        <img src="media/meal.png" class="icon">
                        <label for="meal">Meal</label>
                        <select class="form-control" id="meal" name="meal" <?php displayValue($_POST, 'meal'); ?> >
                        <option value="breakfast">Breakfast</option>
                        <option value="lunch">Lunch</option>
                        <option value="dinner">Dinner</option>
                        </select>
                        <?php displayError($errors, 'meal'); ?>
                    </div>

                    <div class="left">
                        <img src="media/date.png" class="icon">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" <?php displayValue($_POST, 'date'); ?> />
                        <?php displayError($errors, 'Date'); ?>
                    </div>

                    <div class="right">
                        <img src="media/time.png" class="icon">
                        <label for="time">Time</label>
                        <input type="text" class="form-control" id="time" name="time" <?php displayValue($_POST, 'time'); ?> />
                        <?php displayError($errors, 'time'); ?>
                    </div>

                    <div class="left">
                        <img src="media/guest.png" class="icon">
                        <label for="guests">Guests</label>
                        <input type="text" class="form-control" id="guests" name="guests" <?php displayValue($_POST, 'guests'); ?> />
                        <?php displayError($errors, 'guests'); ?>
                    </div>

                    <div class="right">
                        <img src="media/food.png" class="icon">
                        <label for="food-pref">Food preferences</label>
                        <input type="text" class="form-control" id="food-pref" name="food-pref" <?php displayValue($_POST, 'food-pref'); ?> />
                        <?php displayError($errors, 'food-pref'); ?>
                    </div>

                    <div class="left">
                        <img src="media/special.png" class="icon">
                        <label for="special-req">Special requests</label>
                        <input type="text" class="form-control" id="special-req" name="special-req" <?php displayValue($_POST, 'special-req'); ?> />
                        <?php displayError($errors, 'special-req'); ?>
                    </div>

                    <!-- submit button -->
                    <button type="submit" class="btn btn-primary mr-5" name="reserve" value="reserve">Reserve Table</button>
                </form>
            </div>
        </div>
    </div>
</body>


