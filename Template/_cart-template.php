<!-- Shopping cart section  -->
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['delete-cart-submit'])){
            $deletedrecord = $Cart->deleteCart($_POST['item_id']);
        }
    }
?>



<section id="cart" class="py-3 mb-5">
<div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

 <!--  shopping cart items   -->
<div class="row">
    <div class="col-sm-9">
        <?php
        foreach($product->getData('cart') as $item) :
            $cart = $product->getProduct($item['item_id']);
            $subTotal[] = array_map(function ($item){
        ?>
 <!-- cart item -->
        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?></h5>
                                <small>by FAB-4</small>
                                <!-- product rating -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                      </div>
                                      <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                </div>
                                <!--  !product rating-->

                                <!-- product qty -->
                                <div class="qty d-flex pt-2">
                           
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right border-left">Delete</button>
                            </form>
                                    </div>
                                <!-- !product qty -->

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    <span class="product_price">&#8377;<?php echo $item['item_price'] ?></span>
                                </div>
                            </div>
                        </div>
                    <!-- !cart item -->
                    <?php
                     return $item['item_price'];
                     }, $cart); // closing array_map function
                    endforeach;
                    ?>
                     
                </div>
                <!-- subtotal section-->
                <div class="col-sm-3">
                    <div class="sub-total border text-center mt-2">
                        <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                        <div class="border-top py-4">
                            <h5 class="font-baloo font-size-20">Subtotal (<?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger"><span class="text-danger" id="deal-price">&#8377;<?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
                            <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                        </div>
                    </div>
                </div>
                <!-- !subtotal section-->
            </div>
        <!--  !shopping cart items   -->
    </div>
</section>
<!-- !Shopping cart section  -->