<?php
ob_start();
// include header.php
include('header.php');
?>

<?php

 /*  include cart items if it is not empty */
 count($product->getData('cart')) ? include ('Template/_cart-template.php') :  include ('Template/notFound/_cart_notFound.php');
 /*  include cart items if it is not empty */

/* include trending-deals area */
include('Template/_trending-deals.php');
/* include trending-deals area */

?>

<?php
// include footer.php
include('footer.php');
?>