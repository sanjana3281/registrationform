<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    

    echo "<h1>Form Submission Successful</h1>";
    echo "<p><strong>Name:</strong> $fname</p>";
    echo "<p><strong>Name:</strong> $lname</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Address:</strong> $address</p>";
} else {
    echo "<h1>Error: Invalid Request</h1>";
}
?>
