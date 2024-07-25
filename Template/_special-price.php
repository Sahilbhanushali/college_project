        <!-- Special Price -->

        
  <?php
  
 

  // request method post
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['special_price_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}

  ?>

        <section id="special-price">
            <div class="container">
              <h4 class="font-rubik font-size-20">Special Price</h4>
              <div id="filters" class="button-group text-right font-baloo font-size-16">
                <button class="btn is-checked" data-filter="*">All Brand</button>
                <button class="btn" data-filter=".hoodie">Hoodies</button>
                <button class="btn" data-filter=".bag">Bags</button>
                <button class="btn" data-filter=".shoes">Shoes</button>
                <button class="btn" data-filter=".watch">Watches</button>
              </div>

              <div class="grid">
              <?php foreach( $product_shuffle as $item) { ?>
                <div class="grid-item <?php echo $item['item_brand']; ?>  border">
                 <div class="item py-2" style="width: 200px;">
                  <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/hoodie-1.png"; ?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                      <h6><?php echo $item['item_name']; ?></h6>
                      <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                      </div>
                      <div class="price py-2">
                        <span>&#8377;<?php echo $item['item_price']; ?></span>
                      </div>
                      <form method = "post">
                       <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                       <input type="hidden" name="user_id" value="14">
                       <?php
                                if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                }else{
                                    echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                }
                                ?>
                     </form>
                    </div>
                  </div>
                </div>
                </div>
                <?php } // closing Foreach function ?>
            </div>
          </section>
           <!-- !Special Price -->