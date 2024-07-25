<?php
$email = $_POST['email'];
$password = $_POST['password'];
require('./database/config.php');
// $con = mysqli_connect('localhost','root','','shopee');
$result=mysqli_query($con,"SELECT * FROM `users` WHERE (Username = '$email' OR email = '$email') AND password = '$password'");

session_start();

if(mysqli_num_rows($result))
{

    $_SESSION['users'] = $email;


echo"
<script>
alert('Successful Login');
window.location.href= 'index.php';
</script>
";

}
else{
echo"
<script>
alert('Incorrect email/password');
window.location.href= 'login.php';
</script>
";


}
?>