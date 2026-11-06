<?php
require './order_functions.php';

// check cookie
if (isset($_COOKIE['lastVisit'])) {
   $last = htmlspecialchars($_COOKIE['lastVisit']);
   $welcomeBack = "Hello again. Last time visited {$last}.";
} else {
   $welcomeBack = 'Hello new customer';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Food Counter</title>
   <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">

   <h1>Food Counter</h1>
   <p>Order Food and Drink</p>
   <p class="welcome-note"><?= $welcomeBack ?></p>

   <h2>Place Order</h2>

   <form action="process_order.php" method="post">

      <p><label for="dessert">Dessert:</label></p>
      <select name="dessert" id="dessert">
         <option value="none">Choose a dessert</option>
         <option value="Chocolate Cake" <?= dessertSelected('Chocolate Cake'); ?>>Chocolate Cake</option>
         <option value="Cupcake" <?= dessertSelected('Cupcake'); ?>>Cupcake</option>
         <option value="Ice Cream" <?= dessertSelected('Ice Cream'); ?>>Ice Cream</option>
         <option value="Fried Oreo" <?= dessertSelected('Fried Oreo'); ?>>Fried Oreo</option>
      </select>

      <p><label for="drink">Drink:</label></p>
      <select name="drink" id="drink">
         <option value="none">Choose a drink</option>
         <option value="Coke" <?= drinkSelected('Coke'); ?>>Coke</option>
         <option value="Milk" <?= drinkSelected('Milk'); ?>>Milk</option>
         <option value="Coffee" <?= drinkSelected('Coffee'); ?>>Coffee</option>
         <option value="Vietnamese Coffee" <?= drinkSelected('Vietnamese Coffee'); ?>>Vietnamese Coffee</option>
         <option value="Water" <?= drinkSelected('Water'); ?>>Water</option>
      </select>

      <p>Drink Size:</p>

      <div class="sizes">
         <label>
            <input type="radio" name="drinkSize" value="Small" <?= drinkSizeSelected('Small'); ?>>
            Small
         </label>

         <label>
            <input type="radio" name="drinkSize" value="Medium" <?= drinkSizeSelected('Medium'); ?>>
            Medium
         </label>

         <label>
            <input type="radio" name="drinkSize" value="Large" <?= drinkSizeSelected('Large'); ?>>
            Large
         </label>
      </div>

      <p><button type="submit">Place Order</button></p>

   </form>

   <p><a href="forget_order.php">Forget Order</a></p>

</div>

</body>
</html>