<?php 
    //load file layout vao day
self::$fileLayout = "LayoutTrangChu.php";
?>

<!-- Main Container -->
<section class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="col-main">
          <div class="jtv-featured-products">
            <div class="slider-items-products">
              <div class="jtv-new-title">
                <h2>Hot Products</h2>
              </div>
              <div id="featured-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">

                  <?php foreach($hotProduct as $rows): ?>
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"> <img alt="Product tilte is here" src="assets/upload/products/<?php echo $rows->photo; ?>"> </a>
                            <div class="mask-shop-white"></div>
                            <div class="new-label new-top-left">
                              <?php if($rows->discount > 0): ?>
                                <div class="discount"><?php echo $rows->discount; ?> %</div>
                              <?php endif; ?>
                            </div>
                            <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                              <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                            </a> <a href="compare.html">
                              <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                            </a> </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Product tilte is here" href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>"><?php echo $rows->name; ?> </a> </div>
                              <div class="item-content">
                                
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> </span>₫ </span></span></span></div>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?php echo number_format($rows->price); ?></span> ₫ </span> </span> </p>
                                  <div class="rating"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><i  class="fa fa-star "></i></a>
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><i  class="fa fa-star "></i></a>
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><i  class="fa fa-star "></i></a>
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><i  class="fa fa-star "></i></a>
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><i  class="fa fa-star "></i></a>  
                                  </div>

                                </div>
                                <div class="actions">
                                  <div class="add_cart">
                                    <form class="button btn-cart" type="button">
                                      <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>">
                                        <span><i class="fa fa-shopping-cart"></i> Add to Cart</span>
                                      </a>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>





          <!--  Products Slider -->
          <?php foreach($categories as $itemCategories): ?>
            <div class="jtv-trending-products">
              <div class="slider-items-products">
                <div class="jtv-new-title">
                  <h2><?php echo $itemCategories->name; ?></h2>
                </div>
                <div id="trending-slider" class="product-flexslider hidden-buttons">
                 <?php 
                 $conn = Connection::getInstance();
                 $queryProducts = $conn->query("select * from products where category_id = $itemCategories->id order by id desc limit 0,6");
                 $products = $queryProducts->fetchAll(PDO::FETCH_OBJ);
                 ?>
                 <div class="slider-items slider-width-col4 products-grid">

                  <?php foreach($products as $rows): ?>
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"> <img alt="Product tilte is here" src="assets/upload/products/<?php echo $rows->photo; ?>"> </a>
                            <div class="mask-shop-white"></div>
                            <div class="new-label new-top-left"><?php if($rows->discount > 0): ?>
                            <div class="discount"><?php echo $rows->discount; ?> %</div>
                            <?php endif; ?></div>
                            <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                              <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                            </a> <a href="compare.html">
                              <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                            </a> </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Product tilte is here" href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>"><?php echo $rows->name; ?> </a> </div>
                              <div class="item-content">
                                
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> </span>₫ </span></span></span></div>
                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?php echo number_format($rows->price); ?></span> ₫ </span> </span> </p>
                                  <div class="rating"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>"><i  class="fa fa-star "></i></a>
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>"><i  class="fa fa-star "></i></a>
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><i  class="fa fa-star "></i></a>
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>"><i  class="fa fa-star "></i></a>
                                    <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>"><i  class="fa fa-star "></i></a>  
                                  </div>
                                </div>
                                <div class="actions">
                                  <div class="add_cart">
                                    <form class="button btn-cart" type="button">
                                      <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>">
                                        <span><i class="fa fa-shopping-cart"></i> Add to Cart</span>
                                      </a>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- End Trending Products Slider --> 

          <!-- Latest Blog -->
          <div class="jtv-latest-blog">
            <div class="jtv-new-title">
              <h2>Latest News</h2>
            </div>
            <div class="row">
              <div class="blog-outer-container">
                <div class="blog-inner">
                 
                  <?php 
                  $conn = Connection::getInstance();
                  $queryNews = $conn->query("select * from news order by id desc limit 0,3");
                  $news = $queryNews->fetchAll(PDO::FETCH_OBJ);
                  ?>
                  <?php foreach($news as $rows): ?>
                    <div class="col-xs-12 col-sm-4 blog-preview_item">
                      <div class="entry-thumb jtv-blog-img-hover"> <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image"> <img src="assets/upload/news/<?php echo $rows->photo; ?>" style="width:100%;" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>"> </a> </div>

                      <h4 class="blog-preview_title"><a class="text3line" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="font-weight: bold;"><?php echo $rows->name; ?></a></h4>
                      <div class="blog-preview_desc"><?php echo $rows->description; ?></div>
                      
                      
                    </div>




                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
          <!-- End Latest Blog --> 
        </div>
      </div>
    </div>
  </section>

  <!-- Collection Banner -->

  <!-- collection area end -->


  <!-- Brand Logo -->



</div>