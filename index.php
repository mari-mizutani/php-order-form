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

require 'form-view.php';



$userEmail = $_POST['email'];
$userStreet = $_POST['street'];
$userStreetNumber = $_POST['streetnumber'];
$userCity = $_POST['city'];
$userZipcode = $_POST['zipcode'];

$to = "example@example.com";
$body = "";
$body .= "Email: " . $userEmail. "\r\n";
$body .= "Street: " . $userStreet. "\r\n";
$body .= "Street Number: " . $userStreetNumber. "\r\n";
$body .= "City: " . $userCity. "\r\n";
$body .= "Zipcode: " . $userZipcode. "\r\n";

mail($to,$body);


$message_sent = false;
// make sure if it's not empty
if(isset($_POST['email']) && $_POST['email'] != '') {

    // Validate e-mail
    if ( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

        //submit the form
        $userEmail = $_POST['email'];
        $userStreet = $_POST['street'];
        $userStreetNumber = $_POST['streetnumber'];
        $userCity = $_POST['city'];
        $userZipcode = $_POST['zipcode'];
        
        $to = "example@example.com";
        $body = "";
        $body .= "Email: " . $userEmail. "\r\n";
        $body .= "Street: " . $userStreet. "\r\n";
        $body .= "Street Number: " . $userStreetNumber. "\r\n";
        $body .= "City: " . $userCity. "\r\n";
        $body .= "Zipcode: " . $userZipcode. "\r\n";
        
        // mail($to,$body);
        $message_sent = true;
    }
    else{
        $invalid_class_name = "form_invalid";
    }

}