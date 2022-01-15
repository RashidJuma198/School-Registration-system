<?php
$con =mysqli_connect("localhost","root","","Sirisia");
if(!$con){
    die("Connection Error");
}
if(isset($_GET['Del'])){
    $userID =$_GET['Del'];
    $query =" Delete from educationdetails where User_ID='".$userID."';";
    $result =mysqli_query($con,$query);

    if($result){
        header("location:viewadmission.php");
    }else{
        echo "Check your Query";
    }

}else{
    header("location:viewadmission.php");
}


?>