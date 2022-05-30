<html>
    <title> Registration Form</title>
        <body>
        
<form action="../control/process.php" method="">
<table>
<tr><td>First Name:</td>
   <td> <input type="text"name="fname"></td></tr>
<tr><td>Last Name:</td>
<td><input type="text"name="lname"></td></tr>
<tr><td>Age:</td>
<td><input type="text" name="age"></td></tr>
<tr><td>Designation</td>
<td><input type="radio" name="designation"value="JP">Junior Programmer
<input type="radio" name="designation"value="SP">Senior Programmer
<input type="radio" name="designation"value="PD">Project Leader</td></tr>
<tr><td>Preferred Language</td>
<td><input type="checkbox" name="PL"value="java">Java
<input type="checkbox" name="PL"value="php">PHP
<input type="checkbox" name="PL"value="c++">C++</td></tr>
<tr><td>E-mail:</td>
<td><input type="text"name="email"></td></tr>
 <tr><td>Password: </td>
 <td> <input type="password"></td></tr>
 <tr> <td> Please choose a file: </td>
 <td><input type="file"name="Choose file"value="Choose File"> </td></tr>
 <tr> <td>
 <input type="submit"name="submit"value="Submit">
<input type="submit"name="reset"value="Reset"></td></tr>
</table>
</form> 
</body>
    </html>