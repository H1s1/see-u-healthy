<?php
if(isset($_GET['contact'])){
$name=$_GET['name'];
$contact=$_GET['contact'];
   $con=mysqli_connect("localhost","root","","health");
   $q="select * from patient where name='$name' and contact='$contact' ";
   $q2=mysqli_query($con,$q);
   echo "<table border=1 cellpadding=15>";
   $q3=mysqli_fetch_array($q2);
           $id=$q3['id'];
           $name=$q3['name'];
           $age=$q3['age'];
           $sex=$q3['sex'];
           $contact=$q3['contact'];
           $symptoms=$q3['symptoms'];
           $prescriptions=$q3['prescriptions'];
           echo "<tr>
                   <td>$name</td>
                   <td>$age</td>
                   <td>$sex</td>
                   <td>$contact</td>
                   <td>$symptoms</td>
                   <td>$prescriptions</td>
                 </tr>";
   echo "</table>";
   echo"<button><a href='update.php?id=$id'>update</a></button>";

}

?>
<form action="">
    Name: <input type="text" name="name">
    Contact: <input type="number" name="contact">
    <input type="submit" value="show">
</form>