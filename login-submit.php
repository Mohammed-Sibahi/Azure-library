

<?php

session_start();

$firstname = $_POST['firstname'];

$lastname = $_POST['lastname'];

$email = $_POST['email'];

$password = $_POST['password'];

$rememberMe = $_POST['rememberMe'];

if (($email == 'test@email.com' && $password == 'test.123')) {

    $_SESSION['email'] = $email;

    if ($rememberMe == 'on') {
        setcookie('email', $email, time() + (68400 * 300), '/');
        setcookie('password', $password, time() + (68400 * 300), '/');
    }
    header('Location: index.php');
} else {
    header('Location: login.php?message=Invalid Username or Password');
}
?>