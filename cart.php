<?php
session_start();

// Check if form data is submitted via AJAX
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
  // Retrieve the submitted product name and price
  $productName = $_POST['productName'];
  $price = $_POST['price'];

  // Create a new item array
  $item = array(
    'productName' => $productName,
    'price' => $price
  );

  // Store the item in the cart session variable
  $_SESSION['cart'][] = $item;

  // Send a success response
  echo "Item added to cart successfully.";
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cart</title>
  <style type="text/css">
    table {
      margin-top: 50px;
    }
   button{
			background-color: royalblue;
			color: white;
			border: none;
			height: 40px;
			width: 90px;
			border-radius: 7px;
		}
		button:hover{
			background-color: darkblue;
		}
  </style>
</head>
<body>
  <table cellpadding="25px;" align="center" id="cartTable">
    <tr>
      <th>Product Name</th>
      <th>Price</th>
    </tr>
    <?php
    // Check if the cart session variable is set
    if (isset($_SESSION['cart'])) {
      // Iterate over the cart items and display them in the table
      foreach ($_SESSION['cart'] as $item) {
        $productName = $item['productName'];
        $price = $item['price'];
        echo "<tr><td>$productName</td><td>$price</td></tr>";
      }
    }
    ?>
  </table>
  <button onclick="calculateTotal()">Total</button>
  <button onclick="clear()">checked</button>

  <script>
    function calculateTotal() {
      var cartTable = document.getElementById('cartTable');
      var rows = cartTable.getElementsByTagName('tr');
      var total = 0;

      // Start from index 1 to skip the header row
      for (var i = 1; i < rows.length; i++) {
        var row = rows[i];
        var priceCell = row.cells[1];
        var price = parseFloat(priceCell.textContent.replace('$', ''));
        total += price;
      }

      alert('Total: $' + total.toFixed(2));
    }
  </script>
</body>
</html>
