<?php


if(isset($_REQUEST["submit"]))
{


$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$password=$_REQUEST["password"];
$email=$_REQUEST["email"];
$passwordError="";


if(empty($_REQUEST["fname"]) && strlen($_REQUEST["fname"])<4)
{
    echo "Your first name cannt be accept <br>";
  
}


else
{
    echo " <br> Your first name is ".$_REQUEST["fname"];
}
   

if(empty($_REQUEST["lname"]) && strlen($_REQUEST["lname"])<4)
{
    echo "<br> Your last name cannt be accept <br>";
  
}

else
{
    echo "<br> your last name is ".$_REQUEST["lname"];
}

$age = $_REQUEST['age'];

if ($age == '') 
{
    echo '<br>';
echo 'Please Enter your Age ';
} else 
{
    echo '<br>';

echo 'Your Age is ' . $age;
}

$designation=$_REQUEST['designation'];
if(isset($_REQUEST["designation"]))
{
    echo "<br> your designation is ".$_REQUEST["designation"];
  
}

else
{
    echo '<br>';

    echo " not selected any";

}
$PL="";
if(isset($_REQUEST["PL1"])|| (isset($_REQUEST["PL2"])) || (isset($_REQUEST["PL3"])))
{
    if(isset($_REQUEST["PL1"])&& (isset($_REQUEST["PL2"])) && (isset($_REQUEST["PL3"])))
{
    echo '<br>';
$PL=$_REQUEST["PL1"]." and ".$_REQUEST["PL2"]." and ".$_REQUEST["PL3"];
    echo "interested in all";
}

else if(isset($_REQUEST["PL1"]) && isset($_REQUEST["PL2"]))
{
echo "<br> interesed in " .$_REQUEST["PL1"] ;
echo " and " .$_REQUEST["PL2"];
echo '<br>';
$PL=$_REQUEST["PL1"]." and ".$_REQUEST["PL2"];

}

else if(isset($_REQUEST["PL2"]) && isset($_REQUEST["PL3"]))
{
echo "<br> interesed in " .$_REQUEST["PL2"] ;
echo " and " .$_REQUEST["PL3"];
echo '<br>';
$PL=$_REQUEST["PL2"]." and ".$_REQUEST["PL3"];



}
else if(isset($_REQUEST["PL1"]) && isset($_REQUEST["PL3"]))
{
echo "<br> interesed in " .$_REQUEST["PL1"] ;
echo " and " .$_REQUEST["PL3"];
echo '<br>';
$PL=$_REQUEST["PL1"]." and ".$_REQUEST["PL3"];


}
   else if(isset($_REQUEST["PL1"]))
   {
    echo "<br> interesed in ".$_REQUEST["PL1"];
    $PL=$_REQUEST["PL1"];
}
  
else if(isset($_REQUEST["PL2"]))
{
echo "<br> interesed in ".$_REQUEST["PL2"];
$PL=$_REQUEST["PL2"];

}
else  if(isset($_REQUEST["PL3"]))
{
echo "<br> interesed in ".$_REQUEST["PL3"];
$PL=$_REQUEST["PL3"];

}

}
else
{
    echo " you must selected any ";
    echo '<br>';


}

$email = $_REQUEST['email'];
if (
    empty($email) || !preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', $email)
) {
    
    echo '<br>';
    echo 'Invalid email';
    echo '<br>';
} else 
{
    echo '<br>';

    echo 'Your email is ' . $email . '<br>';
}
$password = $_REQUEST['password'];


if(is_numeric($_REQUEST["password"])<2)
{
    echo 'valid Password';
}
else{
    $passwordError= 'Your password should contain at least one numaric value';
}
echo "<br>";
echo $_FILES["myfile"]["name"];
if(move_uploaded_file($_FILES["myfile"] ["tmp_name"],"../uploads/my.pdf"))
{
    echo " file uploaded";
}
else
echo "not";

$mydata=array(
    'firstname'=>$fname,
    'lastname'=>$lname,
    'age'=>$age,
    'email'=>$email,
    'password'=> $_REQUEST["password"],
    'file'=>$_FILES["myfile"]["name"],
    'mycheckbox'=>$PL,
    'radiobox'=>$designation,
);
$jsondata=json_encode($mydata,JSON_PRETTY_PRINT);
if(file_put_contents("../data/data.json",$jsondata))
{
    echo "<br>data saved";
}
}
?>