<?php
    include_once 'conn.php';

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "INSERT INTO teacher_details (NAME, PASSWORD, USERNAME, EMAIL) VALUES ('$name', '$password', '$username','$email');";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../home.php?signup=success");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>