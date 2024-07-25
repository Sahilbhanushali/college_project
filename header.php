<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopme.in</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

     <!-- Owl-carousel CDN -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

     <!-- <link rel="shortcut icon" href="https://img.icons8.com/color/48/000000/shop-local.png" type="image/x-icon"> -->
 
     <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
 
     <!-- Custom CSS file -->
     <link rel="stylesheet" href="style.css">
 <?php
 session_start();
 require('functions.php');
 ?>
   

</head>
<body>

    <!-- start #header -->
    <header id="header">
       
        <!-- !Primary Navigation -->
          <nav class="navbar navbar-expand-lg navbar-light color-second-bg py-3">
  <a class="navbar-brand font-baloo font-size-24" href="#">Shopme<small class="text-danger font-baloo font-size-24">.in</small></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto font-size-20 font-rubik">
      <li class="nav-item active px-2">
        <a class="nav-link font-size-20" href="index.php">Home <span class="sr-only"></span></a>
      </li>
   
      <li class="nav-item dropdown px-2 active">
        <a class="nav-link dropdown-toggle font-size-20" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Account <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="register.php">Register</a>
          <a class="dropdown-item" href="login.php">Login</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
          <a class="dropdown-item" href="./admin/admin.php">Admin</a>
        </div>
      </li>
      <li class="nav-item active px-2">
        <a class="nav-link font-size-20" href="#">About<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active px-2">
        <a class="nav-link font-size-20" href="./admin/admin.php">Admin<span class="sr-only"></span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark mr-2 my-sm-0" type="submit">Search</button>
    </form>
    <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
  </div>
          </nav>
        <!-- !Primary Navigation -->
    </header>
    <!-- start #header -->

    <!-- start #main-site -->
    <main id="main-site">