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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Slotify</title>
</head>
<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="post">
            <h2>Login to your Account</h2>
            
            <p>
                <label for="loginUsername">Username</label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. joshPatel" required>
            </p>
            
            <p>
                <label for="loginPassword">Password</label>
                <input id="loginPassword" name="loginPassword" type="password" required>
            </p>

            <button type="submit" name="loginButton">LOG IN</button>
            


        </form>

        <form id="registerForm" action="register.php" method="post">
            <h2>Create new account</h2>
            
            
            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="e.g. joshPatel" required>
            </p>
            <p>
                <label for="firstname">First name</label>
                <input id="firstname" name="firstname" type="text" placeholder="e.g. josh" required>
            </p>
            <p>
                <label for="lastname">Last name</label>
                <input id="lastname" name="lastname" type="text" placeholder="e.g. Patel" required>
            </p>
            <p>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="e.g. josh@gmail.com" required>
            </p>
            <p>
                <label for="email2">Confirm email</label>
                <input id="email2" name="email2" type="email" placeholder="e.g. josh@gmail.com" required>
            </p>


            <p>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" required>
            </p>

            <p>
            <label for="password2">Confirm password</label>
            <input id="password2" name="password2" type="password" required>
            </p>

            <button type="submit" name="registerButton">SIGN UP</button>
            


        </form>

    </div>

</body>
</html>