<?php
ob_start();
// include header.php
include('header.php');
?>

<?php
/* include products area */
include('Template/_products.php');
/* include products area */

/* include top-sale area */
include('Template/_top-sale.php');
/* include top-sale area */

?>

<?php
// include footer.php
include('footer.php');
?>