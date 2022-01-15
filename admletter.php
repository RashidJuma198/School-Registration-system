<?php
include_once 'connect.php';
include_once 'admheader.php';

$sql ="SELECT *FROM educationdetails;";
$query =mysqli_query($conn,$sql);


while($row=mysqli_fetch_assoc($query)){
    $serid=$row['User_ID'];
    $name=$row['Full_Names'];
    $primaryname=$row['Primary_Name'];
    $kcpeyear=$row['Kcpe_Year'];
    $kcpeindex=$row['Index_No'];
    $kcpegrade=$row['Kcpe_Grade'];
    $secname=$row['Secondary_Name'];
    $kcseyear=$row['Kcse_Year'];
    $kcseindex=$row['Kcse_Index'];
    $Kse_Grade=$row['Kcse_Grade'];
    $Institutn_Name=$row['Institution_Name'];
    $Date_of_Admission=$row['Date_Of_Admission'];
    $Department=$row['Department'];
    $Course=$row['Course'];
    $Module=$row['Module'];
    $Adm_No=$row['Adm_No'];
    $Course_Duration=$row['Course_Duration'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
</style>
    <script type="text/javascript">
     window.print();
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="print.css">
</head>
<body>
<hr>
<h3 style=color:black >REGISTRAR</h3>
<hr>
 <h4>REF:000<input type="text" value="<?php echo $serid?>"></h4>
 <h4>KCSE INDEX: <input type="text" value="<?php echo $kcseindex?>"></h4>
 <h4>Date Of Admission: <input type="text" value="<?php echo $Date_of_Admission?>"></h4>
 <h4>Dear : <input type="text" value="<?php echo $name?>"></h4>
 <h4>Admission No: <input type="text" value="<?php echo $Adm_No?>"></h4>
 <h4>Course Duration: <input type="text" value="<?php echo $Course_Duration?>"></h4>
  <p class="adm" style="text-align:center;"><u><b>ADMISSION LETTER</b></u></p>
  <p class="para">Further to your application for admission in <input type="text" value="<?php echo  $Institutn_Name?>"> <br>, we are pleased to inform you
that you have been offered a place to pursue <input type="text" value="<?php echo $Course?>"> </p>
<p class="para" >NOTE CAREFULLY: In addition to having the minimum entry requirements for admission into respective
programs, students must attain the stipulated contact hours and pass the internal exams in their respective coursesdetails
of which are outlined in the Academic policy. <br>
4. HEALTH REQUIREMENTS.<br>
a) You must be physically and mentally fit to pursue the training program. Forms to enable you get a complete
medical check-up is enclosed. You should therefore present yourself to a registered medical practitioner who should
complete the form so as to make it available by the day you report.<br>
b) The Institute will not accommodate expectant students of whatever status. Any students who become
expectant while undergoing a training program in the Institute will be required to seek leave of absence for a period
of one year before resuming her studies. The Institute reserves the right to require a medical examination of any
student any time during training.<br>
5. CODE OF REGULATIONS<br>
a) As a condition of admission you will be required to undertake in writing your commitment to the rules and
regulations and abide by all rules and regulations for students at this Institute on admission.
b) Lectures for regular courses are conducted from Monday to Friday.
Welcome to a TVET Institution of choice.</p>

<p class="para">Sincerely,<br><br>KENNEDY SIMIYU <br>REGISTRAR<br><input type="text" value="<?php echo  $Institutn_Name?>"></P>
</body>
</html>

