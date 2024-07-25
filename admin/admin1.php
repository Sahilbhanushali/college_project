<?php
$email = $_POST['email'];
$password = $_POST['password'];
require('config.php');
// $con = mysqli_connect('localhost','root','','shopee');
$result=mysqli_query($con,"SELECT * FROM admin_users where Username='$email' and password='$password'");

session_start();

if(mysqli_num_rows($result))
{

    $_SESSION['admin_users'] = $email;


echo"
<script>
alert('Successful Login');
window.location.href= 'insert_product.php';
</script>
";

}
else{
echo"
<script>
alert('Incorrect email/password');
window.location.href= 'admin.php';
</script>
";


}
?>