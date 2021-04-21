<?php
         $dbhost = '	sql202.epizy.com';
         $dbuser = 'epiz_28432376';
         $dbpass = 'n2QwpbAm2k7AMJk';
		   $dbname = 'a_sys';
         $port = '	3306';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
         
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