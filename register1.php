<?php

require('./database/config.php');
// $con = mysqli_connect('localhost','root','','shopee');

if(isset($_POST['submit']))
{
$Name = $_POST['Username'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Password = $_POST['password'];
$Address = $_POST['address'];
$City = $_POST['city'];
$State = $_POST['state'];
$Zip = $_POST['pincode'];

$Dup_Email = mysqli_query($con, "SELECT * FROM `users` WHERE email = '$Email' ");
$Dup_username = mysqli_query($con, "SELECT * FROM `users` WHERE Username = '$Name' ");

if(mysqli_num_rows($Dup_Email)){
echo"
<script>
alert('this email is already taken');
window.location.href= 'register.php';
</script>
";
}
if(mysqli_num_rows($Dup_username)){
echo"
<script>
alert('this username is already taken');
window.location.href= 'register.php';
</script>
";
}
else{






    mysqli_query($con, "INSERT INTO `users`(`Username`,`email`,`password`,`phone`,`address`,`city`,`state`,`pincode`)
    VALUES('$Name','$Email','$Password','$Phone','$Address','$City','$State','$Zip')");

echo"
<script>
alert('register successfully');
window.location.href= 'login.php';
</script>
";
}


}
?>