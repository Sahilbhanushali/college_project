<?php
ob_start();
// include header.php
include('header.php');
?>

<?php
/* include banner area */
include('Template/_banner-area.php');
/* include banner area */

/* include top-sale area */
include('Template/_top-sale.php');
/* include top-sale area */

/* include special-price area */
include('Template/_special-price.php');
/* include special-price area */

/* include banner-ads area */
include('Template/_banner-ads.php');
/* include banner-ads area */

/* include trending-deals area */
include('Template/_trending-deals.php');
/* include trending-deals area */

?>
        
<?php
// include footer.php
include('footer.php');
?>
