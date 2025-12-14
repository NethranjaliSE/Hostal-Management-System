<?php
session_start();
include('db_config.php'); // This should connect to your database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data safely
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $studentnumber = mysqli_real_escape_string($conn, $_POST['studentnumber']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $faculty = mysqli_real_escape_string($conn, $_POST['faculty']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    // Secure password hashing
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Build INSERT query
    $sql = "INSERT INTO students (username, password, studentnumber, email, faculty, gender)
            VALUES ('$username', '$hashed_password', '$studentnumber', '$email', '$faculty', '$gender')";

    if ($conn->query($sql) === TRUE) {
        // Save session data if needed
        $_SESSION['username'] = $username;

        // Redirect to success page
        header("Location: registration_success.php");
        exit();
    } else {
        // Show error if insert fails
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
