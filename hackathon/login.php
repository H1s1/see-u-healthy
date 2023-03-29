<?php
    if(isset($_GET['email'])){
        $e=$_GET['email'];
        $x=is_numeric($e);
        $p=$_GET['password'];

        $con=mysqli_connect("localhost","root","","health");
        if($x==1){
         $q="select * from login where mobile='$e' and password='$p'";
        }
        else
        {
         $q="select * from login where email='$e' and password='$p'";
        }


        $q2=mysqli_query($con,$q);
        $c=mysqli_num_rows($q2);
        if($c=='1'){

            $q3=mysqli_fetch_array($q2);
            $id=$q3['id'];
            SESSION_START();
            $_SESSION['k']=$id;

            $type=$q3['type'];

            if ($type=='admin'){
                echo "<script>alert('admin'),window.location='admin.php'</script>";
            }
            else if($type=='user'){
                echo "<script>alert('welcome user'),window.location='home.php'</script>";
            }
        } 
        else{
            echo "<script>alert('No such user exist'),window.location='login.php'</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: lavender;
        }
    .form{
        margin-left: 550px;
        margin-top: 250px;
    }
    input{
        margin: 5px;
        height: 30px;
        width: 240px;
    }
    .login{
        background-color: skyblue;
        border-radius: 20px;
        width: 100px;
    }
    .signup{
        background-color: #eb5146;
        border-radius: 20px;
        width: 100px;

    }
</style>
</head>
<body>
    <div class="form">
<form>
    <input type="text" name="email" id="" placeholder="Enter E-mail/mobile"><br>
    <input type="password" name="password" id="" placeholder="Enter Password"><br>
    <input type="submit" value="Login" class="login">
    <a href="signUp.php" ><input type="button" value="Sign Up" class="signup"></a>
</form>
</div>
</body>
</html>
