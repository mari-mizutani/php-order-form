<?php
//this line makes PHP behave in a more strict way
declare(strict_types=1);

//we are going to use session variables so we need to enable sessions
session_start();

function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

//your products with their price.
$products = [
    ['name' => 'Club Ham', 'price' => 3.20],
    ['name' => 'Club Cheese', 'price' => 3],
    ['name' => 'Club Cheese & Ham', 'price' => 4],
    ['name' => 'Club Chicken', 'price' => 4],
    ['name' => 'Club Salmon', 'price' => 5]
];

$products = [
    ['name' => 'Cola', 'price' => 2],
    ['name' => 'Fanta', 'price' => 2],
    ['name' => 'Sprite', 'price' => 2],
    ['name' => 'Ice-tea', 'price' => 3],
];

$totalValue = 0;



// define variables and set to empty values
$emailErr = $streetErr = $streetnumberErr = $cityErr = $zipcodeErr = "";
$email = $street = $streetnumber = $city = $zipcode = "";




if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ( empty($_POST["email"]) ){
        $emailErr ="Email is required";

    }else{
        $email = test_input($_POST["email"]);
        //check if e-mail address is well-formed
        if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
            $emailErr = "Invalid email format";
        }
    }

    if ( empty($_POST["street"]) ){
        $streetErr = "Street name is required";
    }else{
        $street = test_input($_POST["street"]);
    }

    if ( empty($_POST["streetnumber"]) ){
        $streetnumberErr = "Street number is required";
    }else{
        $streetnumber = test_input($_POST["streetnumber"]);
        //make sure if street numbers are only numbers
        if (!is_numeric($streetnumber)){
            $streetnumberErr = "Invalid Street number";
        } 
    }

    if ( empty($_POST["city"]) ){
        $cityErr = "City name is required";
    }else{
        $city = test_input($_POST["city"]);
    }

    if ( empty($_POST["zipcode"]) ){
        $zipcodeErr = "Zipcode is required";
    }else{
        $zipcode = test_input($_POST["zipcode"]);
        //make sure if zipcode is only numbers
        if (!is_numeric($zipcode)){
            $zipcodeErr = "Invalid zipcode";
        } 
    }      
    
}

//valid info and order sent
if( !empty($_POST["email"]) && filter_var($email, FILTER_VALIDATE_EMAIL) && 
    !empty($_POST["street"]) &&
    !empty($_POST["streetnumber"]) && is_numeric($streetnumber) &&
    !empty($_POST["city"]) &&
    !empty($_POST["zipcode"]) && is_numeric($zipcode) ){
        $mailSent = "Your order was sent!";
}else{
    $mailSent = " ";
}

// Set session variables
$_SESSION["email"] = $_POST["email"];
$_SESSION["street"] = $_POST["street"];
$_SESSION["streetnumber"] = $_POST["streetnumber"];
$_SESSION["city"] = $_POST["city"];
$_SESSION["zipcode"] = $_POST["zipcode"];


function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}


require 'form-view.php';