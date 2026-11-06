<?php
session_start();

// Clear the saved order
unset($_SESSION['dessert'], $_SESSION['drink'], $_SESSION['drinkSize']);

session_destroy();

// Return to the order form
header('Location: index.php');
exit;