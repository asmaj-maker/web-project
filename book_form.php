<?php
$connection = mysqli_connect(hostname: 'localhost', username: 'root', password: '', database: 'book_db');

// Check database connection
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    // Use prepared statement to avoid SQL injection
    $stmt = $connection->prepare("INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);

    if ($stmt->execute()) {
        // Redirect on success
        header("Location: book.php");
    } else {
        echo "Something went wrong. Please try again.";
    }

    $stmt->close();
} else {
    echo "No data submitted.";
}

$connection->close();
?>