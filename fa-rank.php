<?php
if(isset($_GET["error"])){
echo $_GET["error"];
}

header("refresh: 5");

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "baseball";

$con= mysqli_connect($hostName,$userName,$password,$dbName)
or die("Couldn't connect to database");
 
 
$db=mysqli_select_db($con,$dbName)
 or exit("Couldn't select Data Base.");

?>

<!DOCTYPE html><html>
<head>

<link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"><link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<style class="cp-pen-styles">


*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  min-height: 450px;
  height: 100vh;
  margin: 0;
  background: -webkit-radial-gradient(ellipse farthest-corner at center top, #000000 0%, #ffffff 100%);
  background: radial-gradient(ellipse farthest-corner at center top, #000000 0%, #ffffff 100%);
  color: #fff;
  font-family: 'Open Sans', sans-serif;
}

/*--------------------
Leaderboard
--------------------*/
body{
    zoom: 1.4; 
    -moz-transform: scale(1.4); 
    -moz-transform-origin: 0 0;
}



.leaderboard {
  position: absolute;
  top: 50%;
  left: 30%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  width: 285px;
  height: 308px;
  background: -webkit-linear-gradient(top, #202020, #181c26);
  background: linear-gradient(to bottom, #494949, #181c26);
  border-radius: 10px;
  box-shadow: 0 7px 30px rgba(62, 9, 11, 0.3);
}

#l2{
  zoom: 1.1; 
    -moz-transform: scale(1.1); 
    -moz-transform-origin: 0 0;
    position: absolute;
  top: 55%;
  left: 70%;
  width: 35%;
  opacity: 0.9;
}

#l1{
  zoom: 1.1; 
    -moz-transform: scale(1.1); 
    -moz-transform-origin: 0 0;
    position: absolute;
  top: 55%;
  left: 30%;
  width: 35%;
  opacity: 0.9;
}

.leaderboard h1 {
  font-size: 20px;
  color: white;
  font-weight: 350;
  padding: 15px 5px 25px;
}
.leaderboard h1 svg {
  width: 25px;
  height: 26px;
  position: relative;
  top: 3px;
  margin-right: 50px;
  vertical-align: baseline;
}
.leaderboard ol {
  counter-reset: leaderboard;
}
.leaderboard ol li {
  position: relative;
  z-index: 1;
  font-size: 14px;
  counter-increment: leaderboard;
  padding: 18px 10px 18px 50px;
  cursor: pointer;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transform: translateZ(0) scale(1, 1);
          transform: translateZ(0) scale(1, 1);
}
.leaderboard ol li::before {
  content: counter(leaderboard);
  position: absolute;
  z-index: 2;
  top: 15px;
  left: 15px;
  width: 20px;
  height: 20px;
  line-height: 20px;
  color: #b97174;
  background: #fff;
  border-radius: 20px;
  text-align: center;
}
.leaderboard ol li mark {
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 18px 10px 18px 50px;
  margin: 0;
  background: none;
  color: rgb(0, 0, 0);
  font-weight: 6000;
}
.leaderboard ol li mark::before, .leaderboard ol li mark::after {
  content: '';
  position: absolute;
  z-index: 1;
  bottom: -11px;
  left: -9px;
  border-top: 10px solid white;
  border-left: 10px solid transparent;
  -webkit-transition: all .1s ease-in-out;
  transition: all .1s ease-in-out;
  opacity: 0;
}
.leaderboard ol li mark::after {
  left: auto;
  right: -9px;
  border-left: none;
  border-right: 10px solid transparent;
}
.leaderboard ol li small {
  position: relative;
  z-index: 2;
  display: block;
  text-align: right;
}
.leaderboard ol li::after {
  content: '';
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: white;
  box-shadow: 0 3px 0 rgba(0, 0, 0, 0.08);
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
  color: #000000;
  opacity: 0;
}
.leaderboard ol li:nth-child(1) {
  background: gold;
}
.leaderboard ol li:nth-child(1)::after {
  background: white;
}
.leaderboard ol li:nth-child(2) {
  background: gray;
}
.leaderboard ol li:nth-child(2)::after {
  background: white;
  box-shadow: 0 2px 0 rgba(0, 0, 0, 0.08);
}
.leaderboard ol li:nth-child(2) mark::before, .leaderboard ol li:nth-child(2) mark::after {
  border-top: 6px solid silver;
  bottom: -7px;
}
.leaderboard ol li:nth-child(3) {
  background: #CD7F32;
}
.leaderboard ol li:nth-child(3)::after {
  background: white;
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.11);
}
.leaderboard ol li:nth-child(3) mark::before, .leaderboard ol li:nth-child(3) mark::after {
  border-top: 2px solid #CD7F32;
  bottom: -3px;
}
.leaderboard ol li:nth-child(4) {
  background: rgb(230, 230, 230);
}
.leaderboard ol li:nth-child(4)::after {
  background: white;
  box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.15);
  color: black;
}
.leaderboard ol li:nth-child(4) mark::before, .leaderboard ol li:nth-child(4) mark::after {
  top: -7px;
  bottom: auto;
  border-top: none;
  border-bottom: 6px solid white;
  color: black;
}
.leaderboard ol li:nth-child(5) {
  background: rgb(230, 230, 230);
  border-radius: 0 0 10px 10px;
}
.leaderboard ol li:nth-child(5)::after {
  background: white;
  box-shadow: 0 -2.5px 0 rgba(0, 0, 0, 0.12);
  border-radius: 0 0 10px 10px;
}
.leaderboard ol li:nth-child(5) mark::before, .leaderboard ol li:nth-child(5) mark::after {
  top: -9px;
  bottom: auto;
  border-top: none;
  border-bottom: 8px solid white;
}
.leaderboard ol li:hover {
  z-index: 2;
  overflow: visible;
}
.leaderboard ol li:hover::after {
  opacity: 1;
  color: black;
  -webkit-transform: scaleX(1.06) scaleY(1.03);
          transform: scaleX(1.06) scaleY(1.03);
}
.leaderboard ol li:hover mark::before, .leaderboard ol li:hover mark::after {
  opacity: 1;
  -webkit-transition: all .35s ease-in-out;
  transition: all .35s ease-in-out;
}
.vid{
  width: 100%;
  height: 100%;
  opacity: 0.7;
  filter: blur(4px);
  position: fixed;
}

.hide-content {background: transparent; background-size: cover;}

.bar{
  position:fixed;
  width: 100%;
  z-index: 1;
  height: 100px;
  background-color: rgb(255, 255, 255);
  opacity: 0.75;
}
.bar2{
  position:fixed;
  width: 2px;
  left: 50%;
  z-index: 2;
  border-radius: 10px;
  top: 10px;
  height: 80px;
  background-color: rgb(0, 0, 0);
  opacity: 0.5;
}
.hcon .header {
  position: relative;
  width: 100%; 
  height: 100px;
  background: transparent;
  left: 60%;
  top: 30px;
  font-size: 55px;
  font-weight: 1000;
  font-family:Arial, Helvetica, sans-serif;
  z-index: 10;
}
.hcon .header2{
  position: relative;
  width: 100%; 
  background: transparent;
  left: -50%;
  top: -63px;
  font-size: 25px;
  font-family:Arial, Helvetica, sans-serif;
  z-index: 10;
}

.hcon .header3{
  position: relative;
  width: 100%; 
  height: 100px;
  background: transparent;
  left: -50%;
  top: -60px;
  font-size: 15px;
  font-family:Arial, Helvetica, sans-serif;
  z-index: 10;
  letter-spacing: 4px;
}

.hcon{
  position: fixed;
  left: 50%;
  transform: translate(-50%);
  z-index: 10;
  color: black;
}

.logo {
  position: fixed;
  z-index: 10;
  width: 60px;
  height: auto;
  top: 20px;
  left: 45%;
}

mark{
  
  font-size: 17px;
  text-shadow: white ;
  font-weight: 506;

}

.m4 {
  font-size: 16px;
  color: rgb(86, 86, 86);
  font-weight: 360;
}
mark:hover{
  color: #000000;
}
small{
  color: rgb(54, 54, 54);
  font-weight: 700;
}

.bar3{
  width: 100%;
  color: #000000;
  z-index: 10;
  position: fixed;
  bottom: 0px;
  text-align: center;
  padding: 5px;
  font-size: 10px;
  background-color: white;
}

span{
  margin-left: 10px;
}

</style>
</head>
<body>


<div class="bar"></div>
<div class="bar2"></div>
<div class="bar3">All Rights Reserved ®</div>
<img src="uom.png" alt="logo" class="logo">

<div class="hcon">
<div class="header">LEADERBOARD</div>
<div class="header2">Fastest Arm 2023</div>
<div class="header3">University of Moratuwa</div>
</div>
<video autoplay muted loop class="vid">
  <source src="vid1.mp4" type="video/mp4">
</video> 

<?php 

$nrb = [];
$srb = [];
$nrg = [];
$srg = [];

for($i=1;$i<6;$i++){

  $q1 = "SELECT DISTINCT * FROM (
    SELECT *
    FROM playerdetails
    WHERE gender = 'male'
    ORDER BY `speed` DESC
    LIMIT $i
) AS T
ORDER BY T.`speed` ASC
LIMIT 1;";


$result=mysqli_query($con,$q1)
or die("Something is wrong with your SQL statement.");


 if ($row= mysqli_fetch_array($result)) {
       $nrb[$i-1]=$row['name'];
       $srb[$i-1] = $row['speed']; 
 }

}


for($i=1;$i<6;$i++){


    $q2 = "select * from ((select * from playerdetails where gender = 'female'
    ORDER BY `speed` DESC limit $i ) AS T) 
    ORDER BY T.`speed` ASC limit 1;";

    // $q1= "SELECT *FROM 
    // (SELECT name, speed, DENSE_RANK()  OVER
    // (ORDER BY speed DESC) AS SPEED_RANK
    // FROM playerdetails)
    // WHERE SPEED_RANK = 2;";

   $result2=mysqli_query($con,$q2)
   or die("Something is wrong with your SQL statement.");


    if ($row2= mysqli_fetch_array($result2)) {
        $nrg[$i-1]=$row2['name'];
        $srg[$i-1] = $row2['speed']; 
  }
}   

?>

<div class="leaderboard" id="l1">
  <h1>
    <svg class="ico-cup">
      <use xlink:href="#cup"></use>
    </svg>
    Leading Players - Boys
  </h1>
  <ol>
    <li>
      <mark> <?php echo $nrb[0] ?> </mark>
      <small><?php echo $srb[0] ?><span>kmph</span></small>
    </li>
    <li>
      <mark> <?php echo $nrb[1] ?> </mark>
      <small><?php  echo $srb[1] ?><span>kmph</span></small>
    </li>
    <li>
      <mark> <?php echo $nrb[2] ?> </mark>
      <small><?php echo $srb[2] ?><span>kmph</span></small>
    </li>    
    <li>
      <mark> <?php echo $nrb[3] ?> </mark>
      <small><?php echo $srb[3] ?><span>kmph</span></small>
    </li>  
    <li>
      <mark> <?php echo $nrb[4] ?> </mark>
      <small><?php echo $srb[4] ?><span>kmph</span></small>
    </li>   

  </ol>
</div>



<div class="leaderboard" id="l2">
    <h1>
      <svg class="ico-cup">
      <use xlink:href="#cup"></use>
      </svg>
      Leading Players - Girls
    </h1>
    <ol>
    <li>
      <mark> <?php echo $nrg[0] ?> </mark>
      <small><?php echo $srg[0] ?><span>kmph</span></small>
    </li>
    <li>
      <mark> <?php echo $nrg[1] ?> </mark>
      <small><?php echo $srg[1] ?><span>kmph</span></small>
    </li>
    <li>
      <mark> <?php echo $nrg[2] ?> </mark>
      <small><?php echo $srg[2] ?><span>kmph</span></small>
    </li>    
    <li>
      <mark> <?php echo $nrg[3] ?> </mark>
      <small><?php echo $srg[3] ?><span>kmph</span></small>
    </li>  
    <li>
      <mark> <?php echo $nrg[4] ?> </mark>
      <small><?php echo $srg[4] ?><span>kmph</span></small>
    </li>   



</body>
</html>

