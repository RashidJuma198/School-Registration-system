<?php
include_once 'connect.php';

$sql ="SELECT *FROM educationdetails;";
$query =mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,tr,th,td{
            border:2px  solid white;
            border-collapse:collapse;
            
        }
        th{
            color:khaki;

        }td{
            color:white;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student Details</title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css">
	<link rel="stylesheet" type="text/css" href="studentstyle.css">
</head>
<body> 
<div class="title"><h2>SIRISIA TECHNICAL TRAINING INSTITUTE <br>STUDENT ADMISSION<br></h2></DIv>
<header>
		<nav>
			<ul id="navli">
				
				<li><a class="homeblack" href="viewadmission.php">VIEW ADMISSION</a></li>
				<li><a class="homeblack" href="admletter.php">ADM LETTER</a></li>
				<li><a class="homeblack" href="home.php">Log Out</a></li>
				
			</ul>
		</nav>
	</header>  
<br><br>
        <table>
            <tr>
                <th>User_ID </th>
                <th>Full_Names</th>
                <th>Primary_Name </th>
                <th>Kcpe_Year </th>
                <th>Index_No </th>

                <th>Kcpe_Grade</th>
                <th>Secondary_Name </th>
                <th>Kcse_Year </th>
                <th>Kcse_Index </th>
                <th>Kcse_Grade</th>
                <th>Institution_Name</th>
                <th>Date_Of_Admission </th>
                <th>Department</th>
                <th>Course</th>
                <th>Module</th>
                <th>Adm_No</th>
                <th>Course_Duration</th>
               <!--<th>Admletter</th>-->
                <th>Admletter</th>
               
            </tr>

            <?php
            while($row=mysqli_fetch_assoc($query)){
                $userid=$row['User_ID'];
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

            
            ?>
            <tr>
                <td><?php echo $userid ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $primaryname ?></td>
                <td><?php echo $kcpeyear ?></td>
                <td><?php echo $kcpeindex ?></td>
                <td><?php echo $kcpegrade ?></td>
                <td><?php echo $secname ?></td>
                <td><?php echo $kcseyear ?></td>
                <td><?php echo $kcseindex ?></td>
                <td><?php echo $Kse_Grade ?></td>
                <td><?php echo $Institutn_Name ?></td>
                <td><?php echo $Date_of_Admission ?></td>
                <td><?php echo $Department ?></td>
                <td><?php echo $Course ?></td>
                <td><?php echo $Module ?></td>
                <td><?php echo $Adm_No ?></td>
                <td><?php echo $Course_Duration ?></td>
                <!--<td><button style="height:60px;width:75px;"><a href="delete.php?Del=<?php $userid?>">DELETE</button></td>-->
                <td><button style="height:60px;width:75px;"><a href="admletter.php">Print</button></td>
                

              
                
                
            </tr>
            <?php
            }
            ?>
        </table>
</body>
</html>