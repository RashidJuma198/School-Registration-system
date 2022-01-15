<?php
include_once 'connect.php';

if(isset($_POST['submit']))
 {

        $studnames=$_POST['studname'];
        $studanmission=$_POST['admname'];
        $ffirstname=$_POST['ffname'];
        $fmiddlename=$_POST['fmname'];
        $flastname=$_POST['flname'];
        $fidno=$_POST['fidno'];
        $fphone=$_POST['fphone'];
        $mfirstname=$_POST['mfname'];
        $mmiddlename=$_POST['mmname'];
        $mlastname=$_POST['mlname'];
        $midno=$_POST['midno'];
        $mophone=$_POST['mophone'];
        $gfirstname=$_POST['gfname'];
        $gmiddlename=$_POST['gmname'];
        $glastname=$_POST['glname'];
        $gidno=$_POST['gidno'];
        $gphone=$_POST['gphone'];


        //sending data into the database
        $sql="insert into parentsdetails(Student_Full_Name,Adm_No,Father_First_Name,
        Father_Middle_Name,Father_Last_Name,Father_ID_No,Father_Phone,
        Mother_First_Name,Mother_Middle_Name,Mother_Last_Name,Mother_ID_No,Mother_Phone,
        Guardian_First_Name,Guardian_Middle_Name,Guardian_Last_Name,Guardian_ID_No,Guardian_Phone)
        values('$studnames','$studanmission','$ffirstname','$fmiddlename','$flastname','$fidno','$fphone',
        '$mfirstname','$mmiddlename','$mlastname','$midno','$mophone','$gfirstname',
        '$gmiddlename','$glastname','$gidno','$gphone');";

        //running the sql query
        //$results=mysqli_query($conn,$sql);

        //checking if the data has been entered correctly

        if( $conn->query($sql)===TRUE){
            header("location:education.php");
        }else{
            echo "Record Not Entered:".$conn->error;
        }
    }
