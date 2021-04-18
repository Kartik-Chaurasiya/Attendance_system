<?php
    include_once 'conn.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $rollno = $_POST['rollno'];
    $code = strtolower($_POST['code']);

    $sql = "SELECT USERNAME from teacher_code WHERE CODE= '$code'";
    $result = mysqli_query($conn, $sql);
    if(!$result) { 
        header("Location: ../student.html?NO Class");
        echo "<p class='error'>Error: No such Class exist</p>";
     }
else {
    $sql = "SELECT STUNAME from '$code' WHERE ROLLNO= '$rollno'";
    $result = mysqli_query($conn, $sql);
    if($result) { 
        header("Location: ../student.html?Student already exist");
        echo "<p class='error'>Error: Student already exist</p>";
     }
    else {
    $sql = "INSERT INTO $code (STUNAME, EMAIL, ROLLNO) VALUES ('$name', '$email', $rollno);";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../student.html?attendance=success");
    } else {
        header("Location: ../student.html?error");
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
}

    $conn->close();

?>