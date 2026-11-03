<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars(trim($_POST['fullName']));
    $usn     = htmlspecialchars(trim($_POST['usn']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $phone   = htmlspecialchars(trim($_POST['phone']));
    $dob     = htmlspecialchars(trim($_POST['dob']));
    $address = nl2br(htmlspecialchars(trim($_POST['address'])));
    $course  = htmlspecialchars(trim($_POST['course']));

    echo "<div class='success-card'>";

    echo "<h3>Registration Successful!</h3>";

    echo "<p><strong>Name:</strong> " . $name . "</p>";

    echo "<p><strong>USN:</strong> " . $usn . "</p>";

    echo "<p><strong>Email:</strong> " . $email . "</p>";

    echo "<p><strong>Phone:</strong> " . $phone . "</p>";

    echo "<p><strong>DOB:</strong> " . $dob . "</p>";

    echo "<p><strong>Address:</strong><br>" . $address . "</p>";

    echo "<p><strong>Course:</strong> " . $course . "</p>";

    echo "</div>";
}

?>