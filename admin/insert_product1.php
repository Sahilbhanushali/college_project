<?php

require('config.php');
// $con = mysqli_connect('localhost','root','','shopee');

if(isset($_POST['submit']))
{
$Name = $_POST['item_name'];
$brand = $_POST['item_brand'];
$price = $_POST['item_price'];
$image = $_POST['item_image'];

// $image_loc=$_FILES['item_image']['tmp_name'];
// $image_name=$_FILES['item_image']['name'];
// $img_des="uploadimage/".$image_name;
// move_uploaded_file($image_loc,"uploadimage/".$image_name);




    mysqli_query($con, "INSERT INTO `product`(`item_name`,`item_brand`,`item_price`,`item_image`)
    VALUES('$Name','$brand','$price','$image')");

echo"
<script>
alert('register successfully');
window.location.href= 'insert_product.php';
</script>
";
}



?>