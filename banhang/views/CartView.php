<?php 
    //load file layout vao day
    self::$fileLayout = "LayoutTrangTrong.php";
 ?>
<section class="main-container col1-layout">
    <div class="main container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <div class="product-area">
            <div class="title-tab-product-category">
              <div class="text-center">
                <ul class="nav jtv-heading-style" role="tablist">
                  <li role="presentation" class="active"><a href="#cart" aria-controls="cart" role="tab" data-toggle="tab"> Shopping cart</a></li>
                 
                </ul>
              </div>
            </div>
            <div class="content-tab-product-category"> 
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="cart"> 
                  <!-- cart are start-->
                  <div class="cart-page-area">
                    <form action="index.php?controller=cart&action=update" method="post">
                      <div class="table-responsive">
                        <table class="shop-cart-table">
                          <thead>
                            <tr>
                              <th class="product-thumbnail ">Image</th>
                              <th class="product-name ">Product Name</th>
                              <th class="product-price ">Unit Price</th>
                              <th class="product-quantity">Quantity</th>
                              <th class="product-subtotal ">Total</th>
                              <th class="product-remove">Remove</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php foreach($_SESSION['cart'] as $product): ?>
              <tr class="cart_item">
                <td class="item-img"><img src="assets/upload/products/<?php echo $product['photo']; ?>" class="img-responsive" /></td>
                <td class="item-title"><a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></td>
                <td class="item-price"> $<?php echo number_format(($product['price'] - ($product['price'] * $product['discount'])/100)); ?> </td>
                <td class="item-qty"> <input type="number" id="qty" min="1" class="input-control" value="<?php echo $product['number']; ?>" name="product_<?php echo $product['id']; ?>" required="Không thể để trống"></td>
                <td class="total-price"><p><b><?php echo number_format($product['number']*($product['price'] - ($product['price'] * $product['discount'])/100)); ?>₫</b></p></td>
                <td class="remove-item"><a href="index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
              </tr>
            <?php endforeach; ?> 
                          </tbody>
          
                        </table>
                      </div>

                     
                      <div class="cart-bottom-area">
                        <div class="row">
                           <!-- co the goi ham trong CartModel -->
            <?php if((new CartController())->cartNumber()): ?>
                          <div class="col-md-8 col-sm-7 col-xs-12">
                            <div class="update-coupne-area">
                              <div class="update-continue-btn text-right">
                                <button class="button btn-continue" title="Continue Shopping" type="button"><a href="index.php">Continue Shopping</a></button>
                                <button class="button btn-empty" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><a href="index.php?controller=cart&action=destroy">Clear Cart</a></button>

                                <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span>Update Cart</span></button>
                              </div>
                            </div>
                          </div>
                          <?php endif; ?>


                          
                           <?php if((new CartController())->cartNumber()): ?>
                          <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="cart-total-area">
                              <div class="catagory-title cat-tit-5 text-right">
                                <h3>Cart Totals</h3>
                              </div>
                              
                         
                              <div class="process-cart-total">
                                <p>Total </p>
                                <p><span>$</span><?php echo number_format((new CartController())->cartTotal()); ?></p>
                              </div>
                              <div class="process-checkout-btn text-right">
                                <button class="button btn-proceed-checkout" title="Proceed to Checkout" type="button"><a href="index.php?controller=cart&action=checkout">Proceed to Checkout</a></button>
                              </div>
                               <?php endif; ?>
     


                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </form>
                  </div>
                  <!-- cart are end--> 
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    