<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="studentstyle.css">
    <title>Education Details</title>
</head>
<body>
<?php  
    include_once 'studentheader.php';
    ?>
    <div class="schoolinfo">
        <FOrm action="submiteducation.php" method="POST">
           <fieldset class="edudetails">
               <legend class="legendtitle">Education Background</legend>
               <label for="fullname">Full_Names:</label>
               <input type="text" name="fullname" id="fullname" required placeholder="Peter Masombo...."><br><br>
               <label for="primaryname">Primary School:</label>
               <input type="text" name="primaryname" id="primaryname" required placeholder="AC Butenge Pri...">
               <label for="kcpe">KCPE year:</label>
               <input type="date" name="kcpeyear" id="kcpe"> 
               <label for="indexno">IndexNo:</label>
               <input type="text" name="indexno" id="indexno" required placeholder="55685.....">
               <label for="gradekcpe">Grade:</label>
               <input type="text" name="gradekcpe" id="gradekcpe" required placeholder="A-">
               <br><br>
               <label for="secondaryname">Second. School:</label>
               <input type="text" name="secondaryname" id="secondaryname" required placeholder="AC Butenge Sec..."> 
               <label for="kcseyear">KCSE year:</label>
               <input type="date" name="kcseyear" id="kcse"> 
               <label for="indexnokcse">IndexNo:</label>
               <input type="text" name="indexnokcse" id="indexnokcse" required placeholder="78685.....">
               <label for="gradekcse">Grade:</label>
               <input type="text" name="gradekcse" id="gradekcse" required placeholder="C-">
           </fieldset>
        </div><br><br>
            
        <div class="institutioninfo">
            <fieldset class="institutiondetails">
                <legend class="legendtitle">Institution Details</legend>
                <label for="institutionname">INSTITUTION NAME:</label>
                <input type="text" name="institutionname" id="institutionname" class="institutename" value="SIRISIA TECHNICAL TRAINING INSTITUTE">
                <label for="admyear">Year of Admission:</label>
                <input type="date" name="admyear" id="admyear" required> 
               
                   <label for="course">Course:</label> 
                </select> <br><br>
                <select name="course" id="course"  required class="course" style="background-color: khaki;width: 200px; height: 30px;font-size: 20px;
                    border-radius:15px ;border-top: none;border-bottom: none;border-left: none;border-right: none; ">
                    <option value="CERTIFICATE IN BUSINESS STUDIES">CERTIFICATE IN BUSINESS STUDIES</option>
                    <option value="DIPLOMA IN BUSINESS STUDIES">DIPLOMA IN BUSINESS STUDIES</option>
                    <option value="CERTIFICATE AGRICULTURE ENGINEERING">CERTIFICATE AGRICULTURE ENGINEERING</option>
                    <option value="DIPLOMA AGRICULTURE ENGINEERING">DIPLOMA AGRICULTURE ENGINEERING</option>
                    <option value="ARTISAN IN FOOD AND BEVERAGE ">ARTISAN IN FOOD AND BEVERAGE</option>
                    <option value="CERTIFICATE IN FOOD AND BEVERAGE ">CERTIFICATE IN FOOD AND BEVERAGE</option>
                    <option value="DIPLOMA IN FOOD AND BEVERAGE ">DIPLOMA IN FOOD AND BEVERAGE</option>
                    <option value="ARTISAN BUILDING AND CONSTRUCTION">ARTISAN BULDING AND CONSTRUCTION</option>
                    <option value="CERTIFICATE BUILDING AND CONSTRUCTION">ARTISAN BULDING AND CONSTRUCTION</option>
                    <option value="ARTISAN IN HAIR DRESSING">ARTISAN IN HAIR DRESSING</option>
                    <option value="CERTIFICATE IN ICT">CERTIFICATE IN ICT</option>
                    <option value="DIPLOMA IN ICT">DIPLOMA IN ICT</option>
                    
                </select> 
                <label for="module">Category:</label>
                <select name="module" id="module" class="module" required>
                    <option value="ARTISAN">ARTISAN</option>
                    <option value="MOD I">MOD I</option>
                    <option value="MOD II">MOD II</option>
                    <option value="MOD III">MOD III</option>
                    <option value="REGULAR">REGULAR</option>
                </select> 
                <label for="adm">ADM_No:</label>
                <input type="text" name="adm" id="adm" placeholder="DICT/4567/018" required>
                <label for="duration">Course_Duration:</label>
                <input type="text" name="duration" id="duration" placeholder="2" required><br><br>
           </Fieldset>
                   <!--<select name="gender" id="gender" class="gender">
                      <option value="MALE">MALE</option>
                      <option value="FEMALE">FEMALE</option>
                      <option value="Others">Others</option>
                     
                  
                </fieldset>-->
                
                <fieldset class="fieldsetstudent" style="text-align:center">
                    <input type="submit" name="submit1">
                    <input type="reset" name="reset">
                    
                </fieldset>
      
      </form>
    </div>
</body>
</html>