<?php
session_start();
include "database.php";
if(!$conn)
{
  echo "error";
}
if(isset($_POST["submitbtn"])){
  if(isset($_POST["name"])){
    $_SESSION['USER']=$_POST["name"];
  }
$img=$_FILES['img'];
$imgname=$img['name'];
$imgtemp=$img['tmp_name'];
$exe=explode(".",$imgname);
$end=strtolower(end($exe));
$uni=uniqid("",true).".".$end;
$fd="images/".$uni;
$name=$_POST["name"];

$profession=$_POST["profession"];

$dob=$_POST["dob"];

$gender=$_POST["gender"];

$nationality=$_POST["Nationality"];

$marriage=$_POST["marriage"];

$phone=$_POST["phone"];

$email=$_POST["email"];

$address=$_POST["address"];

$pgi=$_POST['pgi'];

$pgnoc=$_POST['pgnoc'];

$pgyear=$_POST['pgyear'];

$pgper=$_POST['pgper'];

$gi=$_POST['gi'];

$gnoc=$_POST['gnoc'];

$giyear=$_POST['giyear'];

$giper=$_POST['giper'];

$hi=$_POST['hi'];

$hiyear=$_POST['hiyear'];

$hiper=$_POST['hiper'];

$si=$_POST['si'];

$siyear=$_POST['siyear'];

$siper=$_POST['siper'];

$plang=$_POST['plang'];

$pconcepts=$_POST['pconcepts'];

$paoi=$_POST['paoi'];

$c1=$_POST['c1'];

$w1=$_POST['w1'];

$c2=$_POST['c2'];

$w2=$_POST['w2'];

$p1=$_POST['p1'];

$pd1=$_POST['pd1'];

$p2=$_POST['p2'];

$pd2=$_POST['pd2'];

$achieve=$_POST['achieve'];

$lang=$_POST['lang'];

$interest=$_POST['interest'];

$ref=$_POST['ref'];

$sql ="INSERT INTO table1(image,NAME,DATEOFBIRTH,profession,GENDER,NATIONALITY,MARTIALSTATUS,EMAIL,CONTACTNO,ADDRESS,PG_NAMEOFINSTITUTE,pgnoc,PG_YEAROFPASSING,PG_PERCENTAGE,G_NAMEOFINSTITUTE,gnoc,G_YEAROFPASSING,G_PERCENTAGE,HS_NAMEOFINSTITUTE,HS_YEAROFPASSING,HS_PERCENTAGE,SSC_NAMEOFINSTITUTE,SSC_YEAROFPASSING,SSC_PERCENTAGE,TS_LANGUAGESKNOWN,TS_CONCEPTS,areaofinterest,COMPANYNAME_1,WORKDONE_1,COMPANYNAME_2,WORKDONE_2,PROJECTNAME1,WORKDONE_P1,PROJECTNAME2,WORKDONE_P2,ACHIEVEMENTS,LANGUAGESKNOWN,INTEREST,ref)
values('$uni','$name','$dob','$profession','$gender','$nationality','$marriage','$email','$phone','$address','$pgi','$pgnoc','$pgyear','$pgper','$gi','$gnoc','$giyear','$giper','$hi','$hiyear','$hiper','$si','$siyear','$siper','$plang','$pconcepts','$paoi','$c1','$w1','$c2','$w2','$p1','$pd1','$p2','$pd2','$achieve','$lang','$interest','$ref')";
if(mysqli_query($conn,$sql)){
  move_uploaded_file($imgtemp,$fd);
  header("location:selection.php");
}else{
  echo mysqli_error($conn);
}

}
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
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
   <h1>CV BULIDER WEBSITE</h1>
   <br>
   <hr>
    <form class="container-sm form-group form"  action="index.php" method="post" enctype="multipart/form-data">
      <div class="Personal">
      <div class="input-group">
        <p class="m-2 p-2">Uplode image :</p>
        <input class="form-control m-2 p-2" type="file" name="img">
      </div>
        <h2 class="text-center text-dark"><b class="text-primary">Personal</b> information </h2>
        <div class="input-group">
          <p class="m-2 p-2">Name :</p>
          <input class="form-control m-2 p-2" type="text" name="name" placeholder="Enter your name" requried>
        </div>
        <div class="input-group">
          <p class="m-2 p-2">Profession :</p>
        <input class="form-control m-2 p-2" type="text" name="profession" placeholder="Enter your profession" requried>
      </div>
        <div class="input-group">
          <p class="m-2 p-2">Date of birth :</p>
          <input class="form-control m-2 p-2" type="date" requried name="dob">
        </div>
        <div class="input-group">
          <p class="m-2 p-2">Gender :</p>
        <select name="gender" class="form-control m-2 p-2"  requried placeholder="gender">
          <option>male</option>
          <option>female</option>
        </select>
      </div>
        <div class="input-group">
          <p class="m-2 p-2">Nationality :</p>
          <input class="form-control m-2 p-2" type="text" name="Nationality" requried placeholder="Nationality">
        </div>
        <div class="input-group">
          <p class="m-2 p-2">Martial status :</p>
          <select name="marriage" class="form-control m-2 p-2" requried >
            <option>married</option>
            <option>unmarried</option>
          </select>
        </div>
      </div>
      <hr>
      <div class="contact">
        <h2 class="text-center text-dark"><b class="text-primary">Contact</b> information </h2>
        <div class="input-group">
          <p class="m-2 p-2">Contact Number :</p>
          <input class="form-control m-2 p-2" type="number" name="phone" min="1000000000" max="9999999999" requried placeholder="contactnumber">
        </div>
        <div class="input-group">
          <p class="m-2 p-2">Email :</p>
          <input class="form-control m-2 p-2" type="email" name="email" placeholder="email" requried>
        </div>
        <div class="input-group">
          <p class="m-2 p-2">Address :</p>
          <input class="form-control m-2 p-2" type="text" name="address" placeholder="address" requried>
        </div>
      </div>
      <hr>
      <div class="education">
        <h2 class="text-center text-dark"><b class="text-primary">Academic </b> Qualifications </h2>
        <br>
        <div class="Pg">
          <h4 class="text-left text-dark m-2">Post Graduation</h4>
          <div class="input-group">
            <p class="m-2 p-2">Name of the institution :</p>
            <input class="form-control m-2 p-2" type="text" name="pgi" placeholder="enter the name of the institution">
          </div>
          <div class="input-group">
            <p class="m-2 p-2">Name of the course :</p>
            <input class="form-control m-2 p-2" type="text" name="pgnoc" placeholder="enter the name of the course">
          </div>
          <div class="input-group">
            <p class="m-2 p-2">Year of passing :</p>
            <input class="form-control m-2 p-2" type="number"min="1950"max="2030" name="pgyear" placeholder="year of passing">
          </div>
          <div class="input-group">
            <p class="m-2 p-2">Percentage :</p>
            <input class="form-control m-2 p-2" type="number" name="pgper" placeholder="percentage">
          </div>
        </div>
        <div class="g">
          <h4 class="text-left text-dark m-2">Graduation</h4>
          <div class="input-group">
            <p class="m-2 p-2">Name of the institution :</p>
            <input class="form-control m-2 p-2" type="text" name="gi" placeholder="enter the name of the institution">
          </div>
          <div class="input-group">
            <p class="m-2 p-2">Name of the course :</p>
            <input class="form-control m-2 p-2" type="text" name="gnoc" placeholder="enter the name of the course">
          </div>
          <div class="input-group">
            <p class="m-2 p-2">Year of passing :</p>
            <input class="form-control m-2 p-2" type="number"min="1950"max="2030" name="giyear" placeholder="year of passing">
          </div>
          <div class="input-group">
            <p class="m-2 p-2">Percentage :</p>
            <input class="form-control m-2 p-2" type="number" name="giper" placeholder="percentage">
         </div>
        </div>
        <div class="hs">
          <h4 class="text-left text-dark m-2">High school</h4>
          <div class="input-group">
           <p class="m-2 p-2">Name of the institution :</p>
           <input class="form-control m-2 p-2" type="text" name="hi" placeholder="enter the name of the highschool">
          </div>
          <div class="input-group">
            <p class="m-2 p-2">Year of passing :</p>
            <input class="form-control m-2 p-2" type="number"min="1950"max="2030" name="hiyear" placeholder="year of passing">
          </div>
            <div class="input-group">
              <p class="m-2 p-2">Percentage :</p>
              <input class="form-control m-2 p-2" type="number" name="hiper" placeholder="percentage">
          </div>
        </div>
        <div class="ssc">
          <h4 class="text-left text-dark m-2">Schooling</h4>
          <div class="input-group">
            <p class="m-2 p-2">Name of the institution :</p>
            <input class="form-control m-2 p-2" type="text" name="si" placeholder="enter the name of the school">
          </div>
          <div class="input-group">
            <p class="m-2 p-2">Year of passing :</p>
            <input class="form-control m-2 p-2" type="number"min="1950"max="2030" name="siyear" placeholder="year of passing">
          </div>
          <div class="input-group">
            <p class="m-2 p-2">Percentage :</p>
            <input class="form-control m-2 p-2" type="number" name="siper" placeholder="percentage">
        </div>
      </div>
      <hr>
      <div class="techincal">
        <h2 class="text-center text-dark"><b class="text-primary">Technical</b> skills </h2>
        <div class="input-group">
          <p class="m-2 p-2">Languages known :</p>
          <input class="form-control m-2 p-2" type="text" name="plang" placeholder="programming languages known">
        </div>
        <div class="input-group">
          <p class="m-2 p-2">Concepts :</p>
          <input class="form-control m-2 p-2" type="text" name="pconcepts" placeholder="concepts Known">
        </div>
        <div class="input-group">
          <p class="m-2 p-2"> Area of interest :</p>
          <input class="form-control m-2 p-2" type="text" name="paoi" placeholder="">
        </div>
      </div>
      <hr>
      <div class="work">
        <h2 class="text-center text-dark"><b class="text-primary">Work</b> experience</h2>
        <div class="input-group">
          <p class="m-2 p-2">Company Name :</p>
          <input class="form-control m-2 p-2" type="text" name="c1" placeholder="Enter the company name ">
        </div>
        <div class="input-group">
          <p class="m-2 p-2">Work done :</p>
          <input class="form-control m-2 p-2" type="text" name="w1" placeholder="work done">
        </div>
        <div class="input-group">
          <p class="m-2 p-2">Company Name :</p>
          <input class="form-control m-2 p-2" type="text" name="c2" placeholder="Enter the company name ">
        </div>
        <div class="input-group">
          <p class="m-2 p-2">Work done :</p>
          <input class="form-control m-2 p-2" type="text" name="w2" placeholder="work done">
        </div>
      </div>
      <hr>
      <div class="project">
        <h2 class="text-center text-dark"><b class="text-primary">Project</b> experience</h2>
        <div class="input-group">
          <p class="m-2 p-2">Project Name :</p>
          <input class="form-control m-2 p-2" type="text" name="p1" placeholder="Enter the Project name ">
        </div>
        <div class="input-group">
          <p class="m-2 p-2">Work done :</p>
          <input class="form-control m-2 p-2" type="text" name="pd1" placeholder="work done">
        </div>
        <div class="input-group">
          <p class="m-2 p-2">Project Name :</p>
          <input class="form-control m-2 p-2" type="text" name="p2" placeholder="Enter the Project name ">
        </div>
        <div class="input-group">
          <p class="m-2 p-2">Work done :</p>
          <input class="form-control m-2 p-2" type="text" name="pd2" placeholder="work done">
        </div>
      </div>
      <hr>
      <div class="other">
        <div class="input-group">
          <p class="m-2 p-2">Achievements :</p>
          <textarea class="form-control m-2 p-2" name="achieve" placeholder="Achievements" cols="80" rows="4"></textarea>
        </div>
        <div class="input-group">
          <p class="m-2 p-2">Languages known :</p>
          <input class="form-control m-2 p-2" type="text" name="lang" placeholder="languages known">
        </div>
        <div class="input-group">
          <p class="m-2 p-2">Hobbies:</p>
          <textarea  class="form-control m-2 p-2" name="interest" placeholder="Hobbies" rows="4" cols="80"></textarea>
        </div>
      </div>
      <div class="input-group">
        <p class="m-2 p-2">Reference:</p>
        <textarea class="form-control m-2 p-2" type="text" name="ref" placeholder=""></textarea>
      </div>
      <input type="submit" class="btn btn-success ml-auto mr-auto d-block" name="submitbtn"></input>
    </form>
  </body>
</html>
