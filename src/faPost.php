<?php

if (isset($_POST['submit'])) {

  // if (isset($_POST['name']) && isset($_POST['faculty']) &&
  //     isset($_POST['gender']) && isset($_POST['batch']) &&
  //     isset($_POST['phone']) && isset($_POST['speed'])) {

          $hostName = "localhost";
          $userName = "root";
          $password = "";
          $dbName = "baseball";

          $con= mysqli_connect($hostName,$userName,$password,$dbName)
          or die("Couldn't connect to database");
          echo "connection is success". "</br>";
          
          $db=mysqli_select_db($con,$dbName)
          or exit("Couldn't select Data Base.");
          echo "selecting database is success"."</br>";


          $name=$_POST['name'];
          $gender=$_POST['gender'];
          $faculty=$_POST['faculty'];
          $batch=$_POST['batch'];
          $phone=$_POST['phone'];
          $speed=$_POST['speed'];
          if($name == "" ||  $gender == "" || $faculty == "" || $batch == "" || $phone == "" || $speed == ""){
            header("location: ./fa-form.html?error=empty");
            exit();
          }
          $sql="INSERT INTO `playerdetails` (`name`, `gender`, `faculty`, `batch`, `phone`, `speed`) VALUES (?,?,?,?,?,?);";
          $stmt = mysqli_stmt_init($con);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
              header("location: ./fa-form.html?error=stmtfailed");
              exit();
          }
      
          mysqli_stmt_bind_param($stmt, "ssssss", $name,$gender,$faculty,$batch,$phone,$speed);
          mysqli_stmt_execute($stmt);

          header("Location: ./fa-form.html");
          // if(!mysqli_query($con,$sql)){
          //   header("Location:\http://localhost/fa/fa-form.html");
          //   exit();
          //   //die('Error:'.mysql_error());
          //   }
          
          //   header("Location:\http://localhost/fa/fa-form.html");
          //   exit();
          // $rs = mysqli_query($con, $sql);

          // echo "<script> location.href='\http://localhost/fa/fa-form.html?error=userDoesntExist'; </script>";
          // //header("location: \http://localhost/fa/fa-form.html?error = emptyInputs");
          // exit();


      }
    // }

?>