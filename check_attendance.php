<html>

<head>
   <title>Connecting MySQL Server</title>
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
   </script>
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
         <a class="navbar-brand" href="#">Attendance</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  ms-auto">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="home.php">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="signup.html">Sign Up</a>
               </li>
               <li class="nav-item">
                <a class="nav-link" href="require/view_my_codes.php">View my Codes</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <form method="POST">
      <div class="m-3">
         <label class="form-label">UserName</label>
         <input type="text" class="form-control" name="username">
      </div>
      <div class="m-3">
         <label class="form-label">Code</label>
         <input type="text" class="form-control" name="code">
      </div>
      <button type="submit" class="btn btn-primary m-3" name="submit">Submit</button>
   </form>

   <?php
   include_once 'require/conn.php';
   $username = $_POST['username'];
   $code = strtolower($_POST['code']);

   if(isset($_POST['submit'])) { 
      if (!empty($username) and !empty($code)) {
         $sql = "SELECT STUNAME, ROLLNO, EMAIL FROM $code";
         $result = $conn->query($sql);
      if ($result && $result->num_rows) {
      echo "<table class='table table-hover'><tr><th scope='col'>Roll No.</th><th scope='col'>Name</th><th scope='col'>Email</th></tr>";
      // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["ROLLNO"]."</td><td>".$row["STUNAME"]."</td><td>".$row["EMAIL"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
   } 
   else{
      echo '<script>alert("Fill all the fields")</script>';
   }
}
   ?>
</body>

</html>