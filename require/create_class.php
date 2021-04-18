<?php
    include_once 'conn.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $code = $_POST['code'];

    $sql = "SELECT USERNAME from teacher_details WHERE PASSWORD= '$password'";
    $result = mysqli_query($conn, $sql);
    if(!$result) { 
        header("Location: ../teacher.html?create=failed");
        echo "<p class='error'>Error: No such username exist</p>";
     }
else {
    
    $sql = "INSERT INTO teacher_code (USERNAME, EMAIL, DATE, CODE) VALUES ('$username', '$email', '$date','$code');";
    if ($conn->query($sql) === TRUE) {
        $query = "CREATE TABLE $code (
                   ID int(11) AUTO_INCREMENT,
                   STUNAME varchar(255) NOT NULL,
                   ROLLNO int(10) NOT NULL,
                   EMAIL varchar(255) NOT NULL,
                   PRIMARY KEY  (ID)
                   )";
        mysqli_query($conn, $query);
        header("Location: ../teacher.html?create=success");
    } else {
        header("Location: ../teacher.html?error");
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

    $conn->close();

?>