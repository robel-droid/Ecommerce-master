<?php
session_start();

$user="root";
$pword="";
$server="localhost";
$db="Ecommerce";

try {
    $pdo=new PDO("mysql:host=$server;dbname=$db",$user,$pword);
    // echo "connected successfully!";
}
catch (PDOException $pe) {
    die("could not connect to the database $db".$pe->getmessage());
}

if(isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username=:username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $username;

        // redirect to home page
        header("Location: Home.html");
        exit();
    } else {
       include 'SIGNIN.php';
    }
}
?>
