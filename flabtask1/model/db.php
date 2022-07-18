<?php
$dbservername="localhost";
$dbsername="root";
$dbpassword="";
$dbname="labtask";
$conn=new mysqli($dbservername,$dbsername,$password,$dbname)
/*
if($conn-> connect_error)
{
    echo "con obj failed";

}
$tablename="user";
$name="abc";
$*/
$sqlstr="INSERT INTO employee(firstname, lastname, 	age,designation,pl,email,password,file)
                       VALUES('$firstname','$lastname','$age', '$designation','$pl' ,'$email','$password','$file')";

if($conn-> query($sqlstr))
{
    echo "data inserted";
}

else 
{
    echo "error"
}