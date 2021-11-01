<?php
//error handling 
function displayError($errors, $name) {
    if(isset($errors[$name]))
        echo "<div class='text-danger'>{$errors[$name]}</div>";
}

function displayValue($form, $name) {
    if(isset($form[$name]))
        echo 'value="' . htmlspecialchars($form[$name]) . '"';
}

//once reservation is validated, redirect to summary.php
function redirect($location) {
    header("Location: $location");
    exit();
}

//reserve validation
function reserve(&$form) {
    $errors = [];

    $key = 'name';
    if(!isset($form[$key]) || preg_match('/^\s*$/', $form[$key]) === 1)
        $errors[$key] = 'Name is required.';

    $key = 'meal';
    if(!isset($form[$key]) || preg_match('/^\s*$/', $form[$key]) === 1)
        $errors[$key] = 'Meal option is required';

    $key = 'date';
    if(!isset($form[$key]) || preg_match('/^\s*$/', $form[$key]) === 1) 
    $errors[$key] = 'Date is required.';

    $key = 'time';
    if(!isset($form[$key]) || preg_match('/^\s[1-24] + [:] + \d{2}$/', $form[$key]) === 1)
    $errors[$key] = 'Time is required. Time must be in 24hour format (e.g. 2pm = 14:00)';

    $key = 'guests';
    if(!isset($form[$key]) || preg_match('/^\s[1-10]*$/', $form[$key]) === 1)
    $errors[$key] = 'Guests are required. Guests cannot exceed 10';

    $key = 'food-pref';
    if(!isset($form[$key]) || preg_match('/^\s*$/', $form[$key]) === 1)

    $key = 'special-req';
    if(!isset($form[$key]) || preg_match('/^\s*$/', strlen($form[$key]) <= 600))
    $errors[$key] = 'Special request cannot exceed 600 characters';

    return $errors;
}
?>