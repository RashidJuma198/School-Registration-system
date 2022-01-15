<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Sirisia";
//connecting to server

$conn= new mysqli($servername,$username,$password,$dbname);

//checking connection

if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}