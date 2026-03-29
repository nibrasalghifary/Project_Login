<?php
require_once 'user.php';

$resultHTML = "";
$fName = $lName = $pNumber = $addr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fName = $_POST['firstname'];
    $lName = $_POST['lastname'];
    $pNumber = $_POST['phone'];
    $addr = $_POST['address'];

    $user = new UserData($fName, $lName, $pNumber, $addr);
    
    $resultHTML = $user->printResult();
}
?>