<?php

function sanitizeFormPassword($inputText){
    $inputText = strip_tags($inputText);
    return $inputText;
}

function sanitizeFormUsername($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ","",$inputText);
    return $inputText;
}

function sanitizeFormString($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));

    return $inputText;
}

function sanitizeFormEmail($inputText){
    $inputText = strip_tags($inputText);
    $inputText = strtolower($inputText);
}

if(isset($_POST['loginButton'])){
    //code about pressed 
}

if(isset($_POST['registerButton'])){

    $username = sanitizeFormUsername($_POST['$username']);

    $firstname = sanitizeFormString($_POST['$firstname']);

    $lastname = sanitizeFormString($_POST['$lastname']);

    $email = sanitizeFormEmail($_POST['$email']);
    $email = sanitizeFormEmail($_POST['$email2']);

    $password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['password2']);

}

?>