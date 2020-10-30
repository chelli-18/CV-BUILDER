<?php
session_start();
include "database.php";
if(isset($_SESSION['USER'])){
  $name=$_SESSION['USER'];
$sql="SELECT * FROM table1 WHERE NAME='$name'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style media="screen">
      .parent{
        width:600px;
        position: relative;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border:1px solid lightpink;
        box-shadow: 0 2px 10px lightpink;
      }
    </style>

    <?php if(isset($_GET['mess'])){
      if($_GET['mess']=="t1"){
        ?>
      <link rel="stylesheet" href="temp1.css">
        <?php
      }else{
      }
    } ?>
    <?php if(isset($_GET['mess'])){
      if($_GET['mess']=="t2"){
        ?>
      <link rel="stylesheet" href="temp2.css">
        <?php
      }else{
      }
    } ?>
    <?php if(isset($_GET['mess'])){
      if($_GET['mess']=="t3"){
        ?>
      <link rel="stylesheet" href="temp3.css">
        <?php
      }else{
      }
    } ?>
  </head>
<body>
  <h1 class="text-center">curriculum vitae</h1>
  <br>
  <div class="parent">
    <div class="images">
      <img src="images/<?php echo $row["image"]; ?>"  width="350" alt="">
    </div>
    <div class="contactinfo">
      <p><?php echo $row['NAME']?></p>
      <p><?php echo $row['CONTACTNO']?></p>
      <p><?php echo $row['EMAIL']?></p>
    </div>
    <div class="personalprofile">
      <p>Personal profile</p>
      <p><?php echo $row['profession']?></p>
      <p><?php echo $row['GENDER']?></p>
      <p><?php echo $row['DATEOFBIRTH']?></p>
      <p><?php echo $row['MARTIALSTATUS']?></p>
      <p><?php echo $row['ADDRESS']?></p>
      <p><?php echo $row['NATIONALITY']?></p>
    </div>
    <div class="education">
      <p>eductaion history</p>
      <p><?php echo $row['PG_NAMEOFINSTITUTE']?></p>
      <p><?php echo $row['pgnoc']?></p>
      <p>year of passing:<?php echo $row['PG_YEAROFPASSING']?></p>
      <p><?php echo $row['PG_PERCENTAGE']?>%</p>
      <p><?php echo $row['G_NAMEOFINSTITUTE']?></p>
      <p><?php echo $row['gnoc']?></p>
      <p>year of passing:<?php echo $row['G_YEAROFPASSING']?></p>
      <p><?php echo $row['G_PERCENTAGE']?>%</p>
      <p><?php echo $row['HS_NAMEOFINSTITUTE']?></p>
      <p>year of passing:<?php echo $row['HS_YEAROFPASSING']?></p>
      <p><?php echo $row['HS_PERCENTAGE']?></p>
      <p><?php echo $row['SSC_NAMEOFINSTITUTE']?></p>
      <p>year of passing:<?php echo $row['SSC_YEAROFPASSING']?></p>
      <p><?php echo $row['SSC_PERCENTAGE']?>%</p>
    </div>
    <?php
      if($row['TS_LANGUAGESKNOWN']!=""||$row['TS_CONCEPTS']!=""){
      ?>
      <div  class="skills">
        <p>areas of expertise</p>
        <p><?php echo $row['TS_LANGUAGESKNOWN']?></p>
        <p><?php echo $row['TS_CONCEPTS']?></p>
        <p><?php echo $row['areaofinterest']?></p>
      </div>
    <?php
      }
     ?>
    <div class="work">
      <p>work experience</p>
      <p><?php echo $row['COMPANYNAME_1']?></p>
      <p><?php echo $row['WORKDONE_1']?></p>
      <p><?php echo $row['COMPANYNAME_2']?></p>
      <p><?php echo $row['WORKDONE_2']?></p>
    </div>
    <div class="project">
      <p>project expertise</p>
      <p><?php echo $row['PROJECTNAME1']?></p>
      <p><?php echo $row['WORKDONE_P1']?></p>
      <p><?php echo $row['PROJECTNAME2']?></p>
      <p><?php echo $row['WORKDONE_P2']?></p>
    </div>
    <div class="achieve">
      <p>ACHIEVEMENTS</p>
      <p><?php echo $row['ACHIEVEMENTS']?></p>
    </div>
    <div class="other">
      <p>others</p>
      <p><?php echo $row['LANGUAGESKNOWN']?></p>
      <p>Hobbies :<?php echo $row['INTEREST']?></p>
      <p><?php echo $row['ref']?></p>
    </div>
    </div>
</body>

<?php
}else{
  header("location:index.php");
}
 ?>
