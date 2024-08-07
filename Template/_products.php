        <!--   product  -->
        <?php
        $item_id = $_GET['item_id'] ?? 1;
        foreach( $product->getData() as $item) :
            if($item['item_id'] == $item_id) :

                // request method post
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['top_sale_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        // $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
                
        ?>


        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'] ?>" alt="product" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-warning form-control">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? 'unknown' ?></h5>
                        <small>by FAB-4</small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                              </div>
                              <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered questions</a>
                        </div>
                        <hr class="m-0">

                        <!---    product price       -->
                            <table class="my-3">
                                <tr class="font-rale font-size-14">
                                    <td>M.R.P:</td>
                                    <td><strike>&#8377;4999</strike></td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td>Deal Price:</td>
                                    <td class="font-size-20 text-danger">&#8377;<span><?php echo $item['item_price'] ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                                </tr>
                            </table>
                        <!---    !product price       -->

                         <!--    #policy -->
                            <div id="policy">
                                <div class="d-flex">
                                    <div class="return text-center mr-5">
                                        <div class="font-size-20 my-2 color-second">
                                            <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                                    </div>
                                    <div class="return text-center mr-5">
                                        <div class="font-size-20 my-2 color-second">
                                            <span class="fas fa-truck  border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="font-rale font-size-12">5-6 Days <br>Delivery</a>
                                    </div>
                                    <div class="return text-center mr-5">
                                        <div class="font-size-20 my-2 color-second">
                                            <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                                    </div>
                                </div>
                            </div>
                          <!--    !policy -->
                            <hr>

                        <!-- order-details -->
                            <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                <small>Delivery by : Mar 29  - Apr 1</small>
                                <small>Sold by <a href="#">Shopme.in </a>(4.5 out of 5 | 18,198 ratings)</small>
                                <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                            </div>
                         <!-- !order-details -->

                        
                    </div>

                    <div class="col-12 py-4 mt-5">
                        <h6 class="font-rubik">Product Description</h6>
                        <hr>
                        <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                        <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                    </div>
                </div>
            </div>
        </section>
    <!--   !product  -->
    <?php
    endif;
    endforeach;
    ?>