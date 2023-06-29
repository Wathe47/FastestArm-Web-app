<?php

if (isset($_POST['submit'])) {
  

          $hostName = "localhost";
          $userName = "root";
          $password = "";
          $dbName = "baseball";

          $con= mysqli_connect($hostName,$userName,$password,$dbName);
          if($con)
          echo "connection is success". "</br>";
          else echo "damn";
          
          // $db=mysqli_select_db($con,$dbName)
          // or exit("Couldn't select Data Base.");
          // echo "selecting database is success"."</br>";

          
          $speed=$_POST['speed'];
          $sql="INSERT INTO showspeed (speed) VALUES (?);";
          $stmt = mysqli_stmt_init($con);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
              header("location: ./fa - inputSpeed.html?error=stmtfailed");
              exit();
          }
      
          mysqli_stmt_bind_param($stmt, "s", $speed);
          mysqli_stmt_execute($stmt);

          header("Location: ./fa - inputSpeed.html");
          // $sql="INSERT INTO showspeed ('speed') VALUES
          // ($speed)";

          // $rs = mysqli_query($con, $sql);

      
    }

?>