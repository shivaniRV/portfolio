<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    // Do something with the data
    // For example, you can store it in a database or send an email
    
    // Redirect the user to a thank you page
    header("Location: thank_you.html");
    exit();
}
?>
