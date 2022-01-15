
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student Details</title>
</head>
<body>
<?php  
    include_once 'studentheader.php';
?>
<div class="studentform">
      <form action="submitstudent.php" method="POST">
          <fieldset class="fieldsetstudent" >
            <legend class="legendtitle">Student Details</legend>
            <label for="fname">First_Name:</label>
            <input type="text" name="fname" id="fname" placeholder="Pet..." required>
            <label for="mname">Middle_Name:</label>
            <input type="text" name="mname" id="mname" placeholder="Nyo...." required>
            <label for="lname">Last_Name:</label>
            <input type="text" name="lname" id="lname" placeholder="Maso..." required>
            <label for="idno">ID_No:</label>
            <input type="text" name="idno" id="idno" placeholder="3335125..." required><br><br>
            <label for="phone">Phone_No:</label>
            <input type="text" name="phone" id="phone" placeholder="0700..." required>
            <label for="dob">D.O.B</label>
            <input type="date" name="dob" id="dob" required >
            <select name="maritalstatus" id="maritalstatus" class="maritalstatus" required>
                <label for="maritalstatus">Marital_Status:</label>
                <option value="SINGLE">SINGLE</option>
                <option value="MARRIED">MARRIED</option>
                <option value="DIVORCED">DIVORCED</option>
                <option value="WIDOW">WIDOW</option>
            </select>
            <select name="gender" id="gender" class="gender">
                <option value="MALE">MALE</option>
                <option value="FEMALE">FEMALE</option>
                <option value="Others">Others</option>
               
            </select>
            <select name="religion" id="religion" class="religion">
                <option value="CHRISTIAN">CHRISTIAN</option>
                <option value="MUSLIM">MUSLIM</option>
                <option value="PAGAN">PAGAN</option>
                <option value="Others">Others</option>
            </select> 
        </fieldset><br><br>
        <fieldset class="fieldsetstudent" style="text-align:center">
            <input type="submit" name="Save" value="Save">
            <input type="reset" name="Refresh" value="Refresh">
        
        </fieldset>

</body>
</html>