<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can add your email sending logic here or store the data in a database.
    // For now, let's just print the data.

    echo "Name: $name\n";
    echo "Email: $email\n";
    echo "Message: $message\n";
}
