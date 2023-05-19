<?php
// Connect to the database
$user="root";
$pword="";
$server="localhost";
$db="Ecommerce";

try {
    $pdo=new PDO("mysql:host=$server;dbname=$db",$user,$pword);
   
}
catch (PDOException $pe) {
    die("could not connect to the database $db".$pe->getMessage());
}

if(isset($_POST['signup']))
{

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $birthdate=$_POST['birthdate'];
    $kifleketema=$_POST['kifleketema'];
    $kebele=$_POST['kebele'];
    $homeno=$_POST['homeno'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if($firstname=="" or $lastname=="" or $username=="" or $password=="")
    {
        echo '<br><br><br><br><br><h1 style="color:red">Please fill all the required input places.</h1>';
    }
    else
    {
        $sql="INSERT INTO users(firstname,lastname,username,birthdate,kifleketema,kebele,homeno,email,password) VALUES (:firstname,:lastname,:username,:birthdate,:kifleketema,:kebele,:homeno,:email,:password)";
        try {
            $stmt=$pdo->prepare($sql);
            $stmt->execute(['firstname'=>$firstname,'lastname'=>$lastname,'username'=>$username,'birthdate'=>$birthdate,'kifleketema'=>$kifleketema,'kebele'=>$kebele,'homeno'=>$homeno,'email'=>$email,'password'=>$hashed_password]);
            include 'Home.html';
        } catch(PDOException $e) {
            echo "Error executing the SQL statement: " . $e->getMessage();
            echo "SQL query: " . $sql;
        }
    }
}
?>
