<?php




$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$password=$_REQUEST["password"];
$email=$_REQUEST["email"];


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

if ($_REQUEST["age"] == '') 
{
    echo '<br>';
echo 'Please Enter your Age ';
} 
else 
{
    echo '<br>';

echo 'Your Age is ' . $age;
}

if(isset($_REQUEST["designation"]))
{
    echo "<br> your designation is ".$_REQUEST["designation"];
  
}

else
{
    echo '<br>';

    echo " not selected any";

}
if(isset($_REQUEST["PL1"])|| (isset($_REQUEST["PL2"])) || (isset($_REQUEST["PL3"])))
{
    if(isset($_REQUEST["PL1"])&& (isset($_REQUEST["PL2"])) && (isset($_REQUEST["PL3"])))
{
    echo '<br>';
    echo "interested in all";
}

else if(isset($_REQUEST["PL1"]) && isset($_REQUEST["PL2"]))
{
echo "<br> interesed in " .$_REQUEST["PL1"] ;
echo " and " .$_REQUEST["PL2"];
echo '<br>';

}

else if(isset($_REQUEST["PL2"]) && isset($_REQUEST["PL3"]))
{
echo "<br> interesed in " .$_REQUEST["PL2"] ;
echo " and " .$_REQUEST["PL3"];
echo '<br>';



}
else if(isset($_REQUEST["PL1"]) && isset($_REQUEST["PL3"]))
{
echo "<br> interesed in " .$_REQUEST["PL1"] ;
echo " and " .$_REQUEST["PL3"];
echo '<br>';


}
   else if(isset($_REQUEST["PL1"]))
   {
    echo "<br> interesed in ".$_REQUEST["PL1"];
}
  
else if(isset($_REQUEST["PL2"]))
{
echo "<br> interesed in ".$_REQUEST["PL2"];

}
else  if(isset($_REQUEST["PL3"]))
{
echo "<br> interesed in ".$_REQUEST["PL3"];

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


if(!empty($password) && is_numeric($_REQUEST["password"])<2)
{
    echo 'valid Password';
}
else{
    echo 'Your password should contain at least one numaric value';
}
echo "<br>";


?>