<!--forms required fields-->

<?php

//this will validate that everything in the provided form has been filled out

$nameERR = $emailERR = $genderERR = $websiteERR = "";
$name = $email = $gender = $website = "";

require_once 'formTestIndex.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])) {
        $nameERR = "name is required";
    }
    else {
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}

?>