<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture and sanitize form inputs
    $name = htmlspecialchars($_POST["name"] ?? '');
    $email = filter_var($_POST["email"] ?? '', FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars($_POST["password"] ?? '');
    $gender = htmlspecialchars($_POST["gender"] ?? 'Not specified');
    $course = htmlspecialchars($_POST["course"] ?? 'Not selected');

    // Validation
    if (empty($name) || empty($email) || empty($password)) {
        echo "Please fill in all required fields.<br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!<br>";
    } else {
        // Output captured data
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Password: $password<br>";
        echo "Gender: $gender<br>";
        echo "Course: $course<br>";
    }
}

?>
