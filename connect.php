<?php
$server="localhost";
$username="root";
$password="";
$database="ecom";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
   echo" you are not able to connect to the server";
}