

<?php

session_start();

if (isset($_SESSION['email'])) {
    header('login.php');
}
$firstname = $_POST['firstname'];

$lastname = $_POST['lastname'];

$email = $_POST['email'];

$password = $_POST['password'];

$phonenumber = $_POST['phonenumber'];

if ($country == 'Syria') {
    header('location: users.php?message=Sorry! Syria is not supported yet.');
} else {
    $contactInfo = 'First Name: ' . $firstname . ' - Last Name: ' . $lastname . ' - Email: ' . $email . ' - Password: ' . $password . ' - Phone Number: ' . $phonenumber . ' - Company Size: ' . $companysize . ' - Role: ' . $role . ' - Description: ' . $description . ' | Contact created successfully at ' . date('yyyy/mm/dd');
}
file_put_contents('newcontact.txt', $contactInfo);

header('Location: index.php?message=You have been registered');

?>