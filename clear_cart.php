<?php
session_start();

// Clear the cart session
unset($_SESSION['cart']);

// Redirect back to the cart page
header('Location: cart.php');
exit;
?>
