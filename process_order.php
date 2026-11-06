<?php
require './order_functions.php';

// Only process submitted forms
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
   header('Location: index.php');
   exit;
}

// Save the order
$orderSummary = order();

// Remember the visit for one day
$visitStamp = date('l, F j, Y g:i a');
setcookie('lastVisit', $visitStamp, time() + 86400, '/');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Order Receipt</title>
   <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">

   <h1>Food Counter</h1>
   <h2>Receipt</h2>

   <hr>

   <p>Current order:</p>

   <div class="receipt">
      <?= $orderSummary; ?>
   </div>

   <p>Thanks twin</p>

   <p><a href="index.php">Order Again</a></p>
   <p><a href="forget_order.php">Forget Order</a></p>

</div>

</body>
</html>