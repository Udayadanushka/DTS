<?php
// Assuming your MySQL database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Loop through the POST data and insert each row into the database
foreach ($_POST['item'] as $key => $item) {
    $description = $_POST['description'][$key];
    $quantity = $_POST['quantity'][$key];
    $price = $_POST['price'][$key];
    $total = $_POST['total'][$key];

    // Insert data into the database
    $sql = "INSERT INTO billing_data (item, description, quantity, price, total) VALUES ('$item', '$description', '$quantity', '$price', '$total')";

    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
