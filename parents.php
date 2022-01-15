<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parent's Details</title>
</head>
<body>
<?php  
    include_once 'studentheader.php';
    ?>
     <div class="parentsdetails">
       <form action="submitparents.php" method="POST">
                <fieldset class="fieldsetstudent" >
                  <legend class="legendtitle">Father's Details</legend>
                  <label for="studname">Student_Full_Name:</label>
                  <input type="text" name="studname" id="studname" placeholder="Pat...">
                  <label for="admname">Student_ADM:</label>
                  <input type="text" name="admname" id="admname" placeholder="DICT/...."><br><br>
                  <label for="ffname">First_Name:</label>
                  <input type="text" name="ffname" id="ffname" placeholder="Pat...">
                  <label for="fmname">Middle_Name:</label>
                  <input type="text" name="fmname" id="fmname" placeholder="Waf....">
                  <label for="flname">Last_Name:</label>
                  <input type="text" name="flname" id="flname" placeholder="Maso...">
                  <label for="fidno">ID_No:</label>
                  <input type="text" name="fidno" id="fidno" placeholder="25125..."><br><br>
                  <label for="fphone">Phone_No:</label>
                  <input type="text" name="fphone" id="fphone" placeholder="0700...">
            </div>
            <br><br>
        
          <div class="parentsdetails">
                <fieldset class="fieldsetstudent" >
                  <legend class="legendtitle">Mother's Details</legend>
                  <label for="mfname">First_Name:</label>
                  <input type="text" name="mfname" id="mfname" placeholder="Mag...">
                  <label for="mmname">Middle_Name:</label>
                  <input type="text" name="mmname" id="mmname" placeholder="Waf....">
                  <label for="mlname">Last_Name:</label>
                  <input type="text" name="mlname" id="mlname" placeholder="Maso...">
                  <label for="midno">ID_No:</label>
                  <input type="text" name="midno" id="midno" placeholder="2635125..."><br><br>
                  <label for="mophone">Phone_No:</label>
                  <input type="text" name="mophone" id="mophone" placeholder="0700...">
            </div>
            <div class="parentsdetails">
                <fieldset class="fieldsetstudent" >
                  <legend class="legendtitle">Guardian Details</legend>
                  <label for="gfname">First_Name:</label>
                  <input type="text" name="gfname" id="gfname" placeholder="Otis...">
                  <label for="gmname">Middle_Name:</label>
                  <input type="text" name="gmname" id="gmname" placeholder="Waf....">
                  <label for="glname">Last_Name:</label>
                  <input type="text" name="glname" id="glname" placeholder="Maso...">
                  <label for="gidno">ID_No:</label>
                  <input type="text" name="gidno" id="gidno" placeholder="2635125..."><br><br>
                  <label for="gphone">Phone_No:</label>
                  <input type="text" name="gphone" id="gphone" placeholder="0700...">
            </div><br><br>
            <fieldset class="fieldsetstudent" style="text-align:center">
            <input type="submit" name="submit" value="Save">
            <input type="reset" name="reset" value="Refresh">
           
        </fieldset>
        </form>
</body>
</html>