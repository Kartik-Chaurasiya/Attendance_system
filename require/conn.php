<?php
         //Get Heroku ClearDB connection information
         $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
         $cleardb_server = $cleardb_url["host"];
         $cleardb_username = $cleardb_url["user"];
         $cleardb_password = $cleardb_url["pass"];
         $cleardb_db = substr($cleardb_url["path"],1);
         $active_group = 'default';
         $query_builder = TRUE;
         // Connect to DB
         $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
         
         if(! $conn ) {
            die('Could not connect: ' . $mysqli -> error);
         }

         $query = "SELECT ID FROM teacher_details";
         $result = mysqli_query($conn, $query);
             
         if(empty($result)) {
                         $query = "CREATE TABLE teacher_details (
                                   ID int(11) AUTO_INCREMENT,
                                   NAME varchar(255) NOT NULL,
                                   USERNAME varchar(255) NOT NULL,
                                   PASSWORD varchar(255) NOT NULL,
                                   EMAIL varchar(255) NOT NULL,
                                   PRIMARY KEY  (ID)
                                   )";
                         $result = mysqli_query($conn, $query);
         }

         $query = "SELECT ID FROM teacher_code";
         $result = mysqli_query($conn, $query);
             
         if(empty($result)) {
                         $query = "CREATE TABLE teacher_code (
                                   ID int(11) AUTO_INCREMENT,
                                   USERNAME varchar(255) NOT NULL,
                                   EMAIL varchar(255) NOT NULL,
                                   DATE DATETIME NOT NULL,
                                   CODE varchar(255) NOT NULL,
                                   PRIMARY KEY  (ID)
                                   )";
                         $result = mysqli_query($conn, $query);
         }
      ?>