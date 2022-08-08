<?php
class mydb{
 
function OpenCon()
 {

 $dbservername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "labtaskdb";
 $conn =new mysqli($dbservername, $dbusername, $dbpassword,$dbname);
 if($conn->connect_error){
    echo "con obj failed";
}
 return $conn;
 }

 function insertUser($tablename,$fname,$lname,$age,$designation,$pl,$email,$password,$file,$conn)
 {
     $sqlstr = "INSERT INTO employee (	fname,lname,	age,	designation,	planguage,	email,	password,	picture)	

    VALUES ('$fname','$lname','$age', '$designation', '$pl', '$email', '$password', '$file')";

     

 if ($conn->query($sqlstr))
  
     {
        echo"data inserted";
     }
     else{
        echo "can't insert".$conn->error;  
       
     }
    
     }
/*
    
function checkLogin($tablename,$uname,$password,$conn)
{
   $sqlstr="SELECT * FROM $tablename WHERE username='$uname' AND password='$password'";
   return $conn->query($sqlstr);
}
function showUser($tablename,$uname,$conn)
{
   $sqlstr="SELECT * FROM $tablename WHERE username='$uname'";
   return $conn->query($sqlstr);
}
*/

function showUser($tablename,$fname,$conn)
{
  $sqlstr="SELECT * FROM $tablename WHERE firstname='$fname'";
  return $conn->query($sqlstr);
}
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>