<?php
include_once 'connect.php';
if(isset($_POST['Save'])){
$firstname=$_POST['fname'];
$middlename=$_POST['mname'];
$lastname=$_POST['lname'];
$idno=$_POST['idno'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$maritalstatus=$_POST['maritalstatus'];
$gender=$_POST['gender'];
$religion=$_POST['religion'];

//sending data into the database
$sql="insert into studentdetails(First_Name,Middle_Name,Last_Name,ID_No,Phone_No,Date_Of_Birth,
Marital_Status,Gender,Religion)values('$firstname','$middlename','$lastname','$idno','$phone',
'$dob','$maritalstatus','$gender','$religion');";
 //running the sql query
 //$results=mysqli_query($conn,$sql);

 //checking if the data has been entered correctly

 if( $conn->query($sql)===TRUE){
     header("location:parents.php");
 }else{
     echo "Record Not Entered:".$conn->error;
 }
}