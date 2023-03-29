<?php
SESSION_START();
SESSION_DESTROY();
echo"<script>alert('you are logged out'),window.location='login.php'</script>";
?>