<?php
echo "<form action=''>
   Name: <input type='text' name='name' value=''><br>
   Age: <input type='number' name='age' value=''><br>
   Sex: <input type='text' name='sex' value=''><br>
   Contact: <input type='number' name='contact' value=''><br>
   Symptoms: <input type='text' name='symptoms' value=''><br>
   Prescriptions: <input type='text' name='prescriptions' value=''><br>
   <input type='submit' value='add'><br>
   </form>";
 
 
 if(isset($_GET['symptoms'])){
    $name=$_GET['name'];
    $age=$_GET['age'];
    $sex=$_GET['sex'];
    $contact=$_GET['contact'];
    $symptoms=$_GET['symptoms'];
    $prescriptions=$_GET['prescriptions'];

    $con=mysqli_connect("localhost","root","","health");
    $q="insert into patient values('NULL','$name','$age','$sex','$contact','$symptoms','$prescriptions','1')";
    $q2=mysqli_query($con,$q);
    if($q2){
        echo"<script>alert('done'),window.location='viewDetail.php'</script>";
    }
    else{
        echo"<script>alert('error')</script>";
    }
}
// else{
//    echo "<form action=''>
//    Name: <input type='text' name='name' value=''>
//    Age: <input type='number' name='age' value=''>
//    Sex: <input type='text' name='sex' value=''>
//    Contact: <input type='number' name='contact' value=''>
//    Symptoms: <input type='text' name='symptoms' value=''>
//    Prescriptions: <input type='text' name='prescriptions' value=''>
//    <input type='submit' value='add'>
//    </form>";
// }

?>
<!-- <form action="">
    Name: <input type="text" name="name">
    Age: <input type="number" name="age">
    Sex: <input type="text" name="sex">
    Contact: <input type="number" name="contact">
    Symptoms: <input type="text" name="symptoms">
    Prescriptions: <input type="text" name="prescriptions">
    <input type="submit" value="add">
</form> -->