<?php
    if(isset($_GET['name'])){
        $name=$_GET['name'];
        $mobile=$_GET['mobile'];
        $email=$_GET['email'];
        $password=$_GET['password'];
        $con=mysqli_connect("localhost","root","","health");
        $q="select * from login where mobile='$mobile'";
        $q2=mysqli_query($con,$q);
        $q3=mysqli_fetch_array($q2);
        if($q3)
        {
            echo "<script>alert('Mobile Number Already Exists'),window.location='signUp.php'</script>";
        }
        else{
            $q4="insert into login values ('NULL','$name','$mobile','$email','$password','user','1')";
            $q5=mysqli_query($con,$q4);
            if($q5)
                echo "<script>alert('Successfully Signed In')</script>";
            else 
                echo "Error"; 
        }
    }
?>
<form action="">
    Name : <input type="text" name="name" id="">
    Mobile : <input type="number" name="mobile" id="">
    E-mail : <input type="email" name="email" id="">
    Password : <input type="password" name="password" id="">
    <input type="submit" value="Submit">
</form>