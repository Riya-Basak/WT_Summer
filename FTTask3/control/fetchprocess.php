<html>
<head>


<title>
		
        </title>
    </head>

<br><br><br>
    <?php
session_start();

include("../model/database.php");

if(empty($_SESSION["firstname"]))
{

    header("Location:../view/lbtask3.php");  
}

$fname= $_SESSION["fname"];


if(isset($_POST["submit"]))
{
   $mydb=new mydb();
   $conobj=$mydb->openCon();
  $results=$mydb->showUser("employee",$_SESSION["firstname"],$conobj);
   
   if($results->num_rows >0)
   {
    


    while ($myrows=$results->fetch_assoc())
    {

        $firstname='First Name';
        $lname='Last Name';
        $age='Age';
        $des='Designation';
        $PL= 'Preferred Language';
        $email='E-mail';
        $file='Please choose a file';
       echo "<table border='1'>";
        echo "
        
        <tr>
            <th> " . $firstname ." </th>
            <th> ".$lname."</th>
            <th> ".$age."</th>
            <th> ".$des."</th>
            <th> ".$PL."</th>
            <th>".$email." </th>
            <th> ".$file."</th>
            
</tr>";
        echo "<tr>";
        echo "<td>".$myrows["firstname"]."</td>";
        echo "<td>".$myrows["lastname"]."</td>";
        echo "<td>".$myrows["age"]."</td>";
        echo "<td>".$myrows["designation"]."</td>";
        echo "<td>".$myrows["preferred_language"]."</td>";
        echo "<td>".$myrows["email"]."</td>";
        echo "<td>".$myrows["file"]."</td>";
        
        echo "</tr>";

    }
    echo "</table>";
}
else{
    echo $conobj->error;
}


   }


?>

    






 












</body>
</html>