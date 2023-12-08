<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #e3e3e3;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
</head>
<body>

      <h2>Billing System</h2>

    <table>
        <tr>
            <th>Item</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Item 1</td>
            <td>2</td>
            <td>$10.00</td>
            <td>$20.00</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Item 2</td>
            <td>1</td>
            <td>$15.00</td>
            <td>$15.00</td>
        </tr>
        <!-- Add more rows as needed -->
    </table>

    <h3>Total: $35.00</h3>

    <button class="button">Pay Now</button>

    <form id="billingForm" action="save_data.php" method="post">
        <!-- Include additional hidden fields to send data to the server -->
        <input type="hidden" name="item" value="1">
        <input type="hidden" name="description" value="Item 1">
        <input type="hidden" name="quantity" value="2">
        <input type="hidden" name="price" value="10.00">
        <input type="hidden" name="total" value="20.00">

        <button type="submit" class="button">Pay Now</button>
    </form>

    <!-- Your existing HTML content -->

</body>
</html>

