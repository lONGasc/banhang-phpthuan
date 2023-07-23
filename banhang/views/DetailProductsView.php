<?php 
    //load file layout vao day
self::$fileLayout = "LayoutTrangTrong.php";
?>

<?php 
  //lay so sao cua san pham co id truyen vao
function modelGetStar($product_id,$star){
      //lay bien ket noi csdl
  $conn = Connection::getInstance();
  $query = $conn->query("select id from rating where product_id=$product_id and star=$star");
      //tra ve so luong ban ghi
  return $query->rowCount();
}
?>
<section class="main-container col1-layout">
  <div class="container">
    <div class="row">
      <div class="product-view">
        <div class="product-essential">
          <form action="#" method="post" id="product_addtocart_form">
            <div class="product-img-box col-lg-4 col-sm-5 col-xs-12">
              <div class="product-image">
                <div class="product-full">
                  <div class="new-label new-top-left">
                    <?php if($rows->discount > 0): ?>
                      <div class="discount"><?php echo $rows->discount; ?> %</div>
                    <?php endif; ?>
                  </div> </div>
                  <img id="product-zoom" src="assets/upload/products/<?php echo $record->photo; ?>" alt="product-image"/> </div>
                  <div class="more-views">
                    <div class="slider-items-products">
                      <div id="jtv-more-views-img" class="product-flexslider hidden-buttons product-img-thumb">

                      </div>
                    </div>
                  </div>
                </div>
                <!-- end: more-images --> 
              </div>
              <div class="product-shop col-lg-8 col-sm-7 col-xs-12">
                <div class="product-name">
                  <h1><?php echo $record->name; ?></h1>

                  <div><h3>Hãng: 
                    <span>
                     <?php 
                     $conn = Connection::getInstance();
                     $queryCategory = $conn->query("select name from categories where id = {$record->category_id}");
                     $category = $queryCategory->fetch(PDO::FETCH_OBJ);
                     echo isset($category->name) ? $category->name : "";
                     ?> 
                   </span></h3>

                 </div> 


               </div>


               <div class="rating"> <a href="index.php?controller=products&action=rating&id=<?php echo $record->id; ?>&star=1"><i  class="fa fa-star "></i></a>
                <a href="index.php?controller=products&action=rating&id=<?php echo $record->id; ?>&star=2"><i  class="fa fa-star "></i></a>
                <a href="index.php?controller=products&action=rating&id=<?php echo $record->id; ?>&star=3"><i  class="fa fa-star "></i></a>
                <a href="index.php?controller=products&action=rating&id=<?php echo $record->id; ?>&star=4"><i  class="fa fa-star "></i></a>
                <a href="index.php?controller=products&action=rating&id=<?php echo $record->id; ?>&star=5"><i  class="fa fa-star "></i></a>  
              </div>


              <div class="price-block">
                <div class="price-box">
                  <p class="old-price"> <span class="price-label">SpecialRegular Price</span><span class="price"> $<?php echo number_format($record->price); ?> </span></p>
                  <p class="special-price"> <span class="price-label">Special Price:</span><span class="price"> $<?php echo number_format($record->price - $record->price * $record->discount/100); ?> </span></p>
                  <div class="availability rating">


                    
                    <div style="border:1px solid #dddddd; margin-top: 15px;">
                      <h4 style="padding-left: 10px;">Rating</h4>
                      <table style="width: 100%;">
                        <tbody><tr>
                          <td style="width: 80%; padding-left: 10px;"><i class="fa fa-star"></td>
                            <td><span class="label label-primary"><?php echo modelGetStar($record->id,1); ?> vote</span></td>
                          </tr>
                          <tr>
                            <td style="width: 80%; padding-left: 10px;"><i class="fa fa-star"><i class="fa fa-star"></td>
                              <td><span class="label label-warning"><?php echo modelGetStar($record->id,2); ?> vote</span></td>
                            </tr>
                            <tr>
                              <td style="width: 80%; padding-left: 10px;"><i class="fa fa-star"><i class="fa fa-star"><i class="fa fa-star"></td>
                                <td><span class="label label-danger"><?php echo modelGetStar($record->id,3); ?> vote</span></td>
                              </tr>
                              <tr>
                                <td style="width: 80%; padding-left: 10px;"><i class="fa fa-star"><i class="fa fa-star"><i class="fa fa-star"><i class="fa fa-star"></td>
                                  <td><span class="label label-info"><?php echo modelGetStar($record->id,4); ?> vote</span></td>
                                </tr>
                                <tr>
                                  <td style="width: 80%; padding-left: 10px;"><i class="fa fa-star"><i class="fa fa-star"><i class="fa fa-star"><i class="fa fa-star"><i class="fa fa-star"></td>
                                    <td><span class="label label-success"><?php echo modelGetStar($record->id,5); ?> vote</span></td>
                                  </tr>
                                </tbody></table>
                                <br>
                              </div>

                            </div>
                          </div>
                        </div>
                        <div class="short-description">
                          <h2 style="background-color: #00CC00; display: inline; color: white; border: 1px solid #00CC00;">Quick Overview</h2>
                          <?php echo $record->description; ?>


                        </div>
                        <div class="add-to-box">
                          <div class="add-to-cart">
                            <div class="pull-left">
                              <div class="custom pull-left">
                                <label>Quantity:</label>
                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                                <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                              </div>
                            </div>
                            <div class="actions">
                              <button  class="button btn-cart" title="Add to Cart" type="button">
                                <a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button></a>

                              </div>



                              <div class="email-addto-box">
                                <ul class="add-to-links">
                                  <li><a class="link-wishlist" href="wishlist.html"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a></li>
                                  <li><a class="link-compare" href="compare.html"><i class="fa fa-signal"></i><span>Add to Compare</span></a></li>
                                  <li><a class="email-friend" href="#"><i class="fa fa-envelope"></i><span>Email to a Friend</span></a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="social">
                              <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                              </ul>
                            </div>
                            <div class="product-next-prev"> <a class="product-next" href="#"><i class="fa fa-angle-left"></i></a> <a class="product-prev" href="#"><i class="fa fa-angle-right"></i></a> </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
                      <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                        <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a></li>
                        <li><a href="#product_tabs_tags" data-toggle="tab">Tags</a></li>
                        <li><a href="#reviews_tabs" data-toggle="tab">Reviews</a></li>
                        <li><a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a></li>
                      </ul>
                      <div id="productTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="product_tabs_description">
                          <div class="std">
                            <!-- chi tiet -->
                            <?php echo $record->description; ?>
                            <?php echo $record->content; ?>
                            <!-- chi tiet -->

                          </div>
                        </div>
                        <div class="tab-pane fade" id="product_tabs_tags">
                          <div class="box-collateral box-tags">
                            <div class="tags">
                              <form id="addTagForm" action="#" method="get">
                                <div class="form-add-tags">
                                  <label for="productTagName">Add Tags:</label>
                                  <div class="input-box">
                                    <input class="input-text" name="productTagName" id="productTagName" type="text">
                                    <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span></button>
                                  </div>
                                  <!--input-box--> 
                                </div>
                              </form>
                            </div>
                            <!--tags-->
                            <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="reviews_tabs">
                         <div class="fb-comments" data-href="https://vnexpress.net/" data-width="" data-numposts="5"></div>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </section>