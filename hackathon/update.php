<?php

$id=$_GET['id'];
echo "<form action=''>
Name: <input type='text' name='name' value=''>
Age: <input type='number' name='age' value=''>
Sex: <input type='text' name='sex' value=''>
Contact: <input type='number' name='contact' value=''>
Symptoms: <input type='text' name='symptoms' value=''>
Prescriptions: <input type='text' name='prescriptions' value=''>
<input type='hidden' value='$id'>
<input type='submit' value='update'>
</form>";

if(isset($_GET['name'])){
    $id=$_GET['id'];
    $name=$_GET['name'];
    $age=$_GET['age'];
    $sex=$_GET['sex'];
    $contact=$_GET['contact'];
    $symptoms=$_GET['symptoms'];
    $prescriptions=$_GET['prescriptions'];
    $con=mysqli_connect("localhost","root","","health");
    // $con=mysqli_connect("localhost","root","","health");
    // $q="select * from patient where id='$id' ";
    // $q2=myqli_query($con,$q);
    // $q3=mysqli_fetch_array($q2);
    $q="update patient set name='$name', age='$age', sex='$sex', contact='$contact' , symptoms='$symptoms' , prescriptions='$prescriptions' where id='$id'";
    $q2=mysqli_query($con,$q);
    if($q2)
     echo "<script>alert('Successfully updated a patient detail ')'</script>";
     else 
     echo "Error";
    }
     
  
?>