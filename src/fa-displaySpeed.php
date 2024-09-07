
<?php
if(isset($_POST['submit']))
{
    header("refresh:0");
}


$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "baseball";

$con= mysqli_connect($hostName,$userName,$password,$dbName)
or die("Couldn't connect to database");

 
$db=mysqli_select_db($con,$dbName)
 or exit("Couldn't select Data Base.");
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        @font-face{ 
            font-family:'digital-clock-font'; 
            src: url('Technology-BoldItalic.ttf');
         }
        body{
            background-color:black;
            font-family: digital-clock-font;
            color:greenyellow;
            font-size: 160px;
            letter-spacing: 20px;
        
        }

        h1{
            margin:auto;
            position:absolute;
            top: 50%;
            left: 35%;
            transform: translate(-50%,-50%);
        }
        span{
            margin:auto;
            position:absolute;
            top: 70%;
            left: 170%;
            transform: translate(-50%,-50%);
            font-size: 110px;
        }
    </style>
</head>
<body>


<?php 

    $q1 = "SELECT * FROM showspeed WHERE throwCount=(SELECT max(throwCount) FROM showspeed);";
    $q2 = "SELECT * FROM lastid WHERE id=(SELECT max(id) FROM lastid)";

$result=mysqli_query($con,$q1) and $result2=mysqli_query($con,$q2)
or print("Something is wrong with your SQL statement.");


 if ($row= mysqli_fetch_array($result)) {
       $value=$row['speed'];
       $throwCount = $row['throwCount'];
 } else echo "error fetch speed";

 if($row = mysqli_fetch_array($result2)){
    $lastID = $row['lastID'];
 } else echo "error on lastid";


 if($lastID == $throwCount) {
    ?>
    <meta http-equiv="refresh" content="1">
    <?php 
 }
 else{
    $sql="INSERT INTO lastid (lastID) VALUES (?);";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ./fa - inputSpeed.html?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $throwCount);
    mysqli_stmt_execute($stmt);


?>
<meta http-equiv="refresh" content="10">

    <h1><?php echo $value ?> <span>kmph</span> </h1>
    
    <?php } ?>

</body>
</html>