<?php
include_once 'connect.php';

if(isset($_POST['submit1'])){
    
$fullname=$_POST['fullname'];
$primary=$_POST['primaryname'];
$kcpeyear=$_POST['kcpeyear'];
$indexno=$_POST['indexno'];
$gradekcpe=$_POST['gradekcpe'];
$secondary=$_POST['secondaryname'];
$kcseyear=$_POST['kcseyear'];
$inedexnokcse=$_POST['indexnokcse'];
$gradekcse=$_POST['gradekcse'];
$institutionname=$_POST['institutionname'];
$admyear=$_POST['admyear'];
$department=$_POST['department'];
$course=$_POST['course'];
$module=$_POST['module'];
$adm=$_POST['adm'];
$duration=$_POST['duration'];

//sending data into the database
$sql="insert into educationdetails(Full_Names,Primary_Name,Kcpe_Year,Index_No,Kcpe_Grade,Secondary_Name,Kcse_Year,Kcse_Index,Kcse_Grade
,Institution_Name,Date_Of_Admission,Department,Course,Module,Adm_No,Course_Duration)values('$fullname','$primary','$kcpeyear','$indexno','$gradekcpe','$secondary','$kcseyear','$inedexnokcse','$gradekcse',
'$institutionname','$admyear','$department','$course','$module','$adm','$duration');";

 //running the sql query
 //$results=mysqli_query($conn,$sql);

 //checking if the data has been entered correctly

 if( $conn->query($sql)===TRUE){
     header("location:education.php");
 }else{
     echo "Record Not Entered:".$conn->error;
 }
}
