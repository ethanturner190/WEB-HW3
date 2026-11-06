<?php

session_start();

// Save the customer's order
function order(): string {
   $dessert = trim($_POST['dessert'] ?? 'none');
   $drink = trim($_POST['drink'] ?? 'none');
   $drinkSize = trim($_POST['drinkSize'] ?? '');

   $_SESSION['dessert'] = $dessert !== '' && $dessert !== 'none'
      ? $dessert
      : '(not selected)';

   $_SESSION['drink'] = $drink !== '' && $drink !== 'none'
      ? $drink
      : '(not selected)';

   $_SESSION['drinkSize'] = $drinkSize !== ''
      ? $drinkSize
      : '(not selected)';

   return "Dessert: " . htmlspecialchars($_SESSION['dessert']) . "<br>"
      . "Drink: " . htmlspecialchars($_SESSION['drink']) . "<br>"
      . "Drink size: " . htmlspecialchars($_SESSION['drinkSize']);
}

// Remember the selected dessert
function dessertSelected(string $dessert): string {
   return ($_SESSION['dessert'] ?? '') === $dessert ? 'selected' : '';
}

// Remember the selected drink
function drinkSelected(string $drink): string {
   return ($_SESSION['drink'] ?? '') === $drink ? 'selected' : '';
}

// Remember the drink size
function drinkSizeSelected(string $drinkSize): string {
   return ($_SESSION['drinkSize'] ?? '') === $drinkSize ? 'checked' : '';
}