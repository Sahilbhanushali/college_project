



  <body background="background2.jpg">
  <?php
// include header.php
include('header.php');
?>

<div class="container mr-1 mt-4">
<h3 class="font-baloo font-weight-bold">Insert Product Here...</h3>
<hr>
<form action="insert_product1.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="font-size-20">Product name</label>
      <input type="text" class="form-control" name="item_name" id="inputEmail4" placeholder="Enter product name" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="font-size-20">Category</label>
      <input type="text" class="form-control" name="item_brand" id="inputEmail4" placeholder="Enter product category" required>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputPassword4" class="font-size-20">Price</label>
      <input type="text" class="form-control" name ="item_price" id="inputPassword4" placeholder="Enter price" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="item_image" class="font-size-20">Product image</label>
      <input type="path" class="form-control" name ="item_image"  placeholder="Upload image" required>
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
