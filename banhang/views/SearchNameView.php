<?php 
    //load file layout vao day
self::$fileLayout = "LayoutTrangTrong.php";
?>


<div class="main-container col2-left-layout">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-sm-push-3 main-inner">
          <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1 owl-carousel owl-theme">
                  <div class="item"> <a href="#"><img alt="New Special Collection" src="assets\frontend\images\new-special.jpg"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <h2 class="cat-heading">New Special<br>
                        Collection</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                  </div>
                  <div class="item"> <a href="#"><img alt="New Fashion" src="assets\frontend\images\new-fashion.jpg"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <h2 class="cat-heading">New Fashion</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <article class="col-main">
            <div class="page-title">
              <h2>
               Tìm kiếm : <?php echo $key; ?>
              </h2>
            </div>
            <div class="toolbar">
              <div class="sorter">
                <div class="view-mode"> <span title="Grid" class="button button-active button-grid">&nbsp;</span><a href="shop-list-sidebar.html" title="List" class="button-list">&nbsp;</a> </div>
              </div>
              <!-- <div id="sort-by">
                <label class="left">
                  <?php 
                    $order = isset($_GET["order"]) ? $_GET["order"] : "";
                 ?> 
               </label>
                <select class="limiter" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $category_id; ?>&order='+this.value;">
                  
                  <option <?php if($order == "priceAsc"): ?> selected <?php endif; ?> value="priceAsc">Giá tăng dần</option>
                  <option <?php if($order == "priceDesc"): ?> selected <?php endif; ?> value="priceDesc">Giá giảm dần</option>
                  <option <?php if($order == "nameAsc"): ?> selected <?php endif; ?> value="nameAsc">Sắp xếp A-Z</option>
                  <option <?php if($order == "nameDesc"): ?> selected <?php endif; ?> value="nameDesc">Sắp xếp Z-A</option>
                </select>
 

</div> -->
              <!-- <div class="pager">
                <div id="limiter">
                  <label>View: </label>
                  <ul>
                    <li><a href="#">15<span class="right-arrow"></span></a>
                      <ul>
                        <li><a href="#">20</a></li>
                        <li><a href="#">30</a></li>
                        <li><a href="#">35</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div> -->
            </div>
            <div class="category-products">
              <ul class="products-grid">
               <?php foreach($data as $rows): ?>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">

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
                              <div class="item-title"> <a title="Product tilte is here" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?> </a> </div>
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
                </li>
                 <?php endforeach; ?>
              
               
              </ul>
            </div>
            <div class="toolbar bottom">
              <div class="row">
                <div class="col-sm-6 text-left">
                  <div class="pages">
                    <ul class="pagination">
                      <li><span>Trang</span></li>
                      <?php for($i = 1; $i <= $numPage; $i++): ?>
                      <li class="active"><a href="index.php?controller=Products&action=category&key=<?php echo $key; ?>"><?php echo $i; ?></a></li>
                      <?php endfor; ?>
                    </ul>
                  </div>




                </div>
                <div class="col-sm-6 text-right">Showing 1 to 15 of 25 (2 Pages)</div>
              </div>
            </div>
          </article>
           
            <div class="category-products">
              <ul class="products-grid">
             
             <div class="col-xs-12 col-md-9"> 
        <!-- main -->
        
     
        
        <!-- end main --> 
      </div>

              </ul>
            </div>
            <div class="toolbar bottom">
             
            </div>
          </article>
        </div>
        <div class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
          <aside class="sidebar">
            <div class="block block-layered-nav">
              <div class="block-title">
                <h3>Shop By</h3>
              </div>
              <div class="block-content">
                <p class="block-subtitle">Shopping Options</p>
                <dl id="narrow-by-list">
                  <dt class="odd">Price</dt>
                  <dd class="odd">
                    <ol>
                      <li><a href="#"><span class="price">$0.00</span> - <span class="price">$99.99</span></a> (6) </li>
                      <li><a href="#"><span class="price">$100.00</span> and above</a> (6) </li>
                    </ol>
                  </dd>
                  <dt class="even">Manufacturer</dt>
                  <dd class="even">
                    <ol>
                      <li><a href="#">Kids Dresses</a> (20) </li>
                      <li><a href="#">Unisex Clothing</a> (25) </li>
                      <li><a href="#">Winter Wear</a> (8) </li>
                      <li><a href="#">Garments</a> (5) </li>
                      <li><a href="#">Undergarments</a> (2) </li>
                    </ol>
                  </dd>
                  <dt class="odd">Clothing Material</dt>
                  <dd class="odd">
                    <ol class="bag-material">
                      <li>
                        <div class="pretty p-icon p-smooth">
                          <input type="checkbox" name="Material" value="Cotton" />
                          <div class="state p-success"> <i class="icon fa fa-check"></i>
                            <label>Cotton</label>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="pretty p-icon p-smooth">
                          <input type="checkbox" name="Material" value="Denim" />
                          <div class="state p-success"> <i class="icon fa fa-check"></i>
                            <label>Denim</label>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="pretty p-icon p-smooth">
                          <input type="checkbox" name="Material" value="Linen" />
                          <div class="state p-success"> <i class="icon fa fa-check"></i>
                            <label>Linen</label>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="pretty p-icon p-smooth">
                          <input type="checkbox" name="Material" value="Rayon" />
                          <div class="state p-success"> <i class="icon fa fa-check"></i>
                            <label>Rayon</label>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="pretty p-icon p-smooth">
                          <input type="checkbox" name="Material" value="Synthetic" />
                          <div class="state p-success"> <i class="icon fa fa-check"></i>
                            <label>Synthetic</label>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="pretty p-icon p-smooth">
                          <input type="checkbox" name="Material" value="Satin" />
                          <div class="state p-success"> <i class="icon fa fa-check"></i>
                            <label>Satin</label>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="pretty p-icon p-smooth">
                          <input type="checkbox" name="Material" value="Silk" />
                          <div class="state p-success"> <i class="icon fa fa-check"></i>
                            <label>Silk</label>
                          </div>
                        </div>
                      </li>
                    </ol>
                  </dd>
                  <dt class="odd">Size</dt>
                  <div class="size-area">
                    <div class="size">
                      <ul>
                        <li><a href="#">S</a></li>
                        <li><a href="#">L</a></li>
                        <li><a href="#">M</a></li>
                        <li><a href="#">XL</a></li>
                        <li><a href="#">XXL</a></li>
                      </ul>
                    </div>
                  </div>
                  <dt class="odd">Color</dt>
                  <dd class="odd">
                    <ol>
                      <li><a href="#">Green</a> (1) </li>
                      <li><a href="#">White</a> (5) </li>
                      <li><a href="#">Black</a> (5) </li>
                      <li><a href="#">Gray</a> (4) </li>
                      <li><a href="#">Dark Gray</a> (3) </li>
                      <li><a href="#">Blue</a> (1) </li>
                    </ol>
                  </dd>
                </dl>
              </div>
            </div>
            <div class="block product-price-range ">
              <div class="block-title">
                <h3>Price</h3>
              </div>
              <div class="block-content">
                <div class="slider-range">
                  <div data-label-reasult="Range:" data-min="0" data-max="500" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="50" data-value-max="350">
                    <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 10%; width: 60%;"></div>
                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 10%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 70%;"></span></div>
                  <div class="amount-range-price">Range: $10 - $550</div>
                  <ul class="check-box-list">
                    <li>
                      <div class="pretty p-icon p-smooth">
                        <input type="checkbox" name="cc" value="p1" />
                        <div class="state p-success"> <i class="icon fa fa-check"></i>
                          <label for="p1"> $20 - $100<span class="count">(5)</span> </label>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="pretty p-icon p-smooth">
                        <input type="checkbox" name="cc" value="p2" />
                        <div class="state p-success"> <i class="icon fa fa-check"></i>
                          <label for="p1"> $100 - $300<span class="count">(12)</span> </label>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="pretty p-icon p-smooth">
                        <input type="checkbox" name="cc" value="p3" />
                        <div class="state p-success"> <i class="icon fa fa-check"></i>
                          <label for="p1"> $300 - $500<span class="count">(15)</span> </label>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
           
            <div class="block block-compare">
              <div class="block-title ">Compare Products (2)</div>
              <div class="block-content">
                <ol id="compare-items">
                  <li class="item">
                    <input type="hidden" value="2173" class="compare-item-id">
                    <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title Here</a></li>
                  <li class="item">
                    <input type="hidden" value="2174" class="compare-item-id">
                    <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title Here</a></li>
                  <li class="item">
                    <input type="hidden" value="2175" class="compare-item-id">
                    <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title Here</a></li>
                </ol>
                <div class="ajax-checkout">
                  <button type="submit" title="Submit" class="button button-compare"><span>Compare</span></button>
                  <button type="submit" title="Submit" class="button button-clear"><span>Clear</span></button>
                </div>
              </div>
            </div>
            <div class="custom-slider">
              <div>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item active"><img src="images/slide3.jpg" alt="New Arrivals">
                      <div class="carousel-caption">
                        <h3><a title=" Sample Product" href="#">New Arrivals</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                    <div class="item"><img src="images/slide1.jpg" alt="Top Fashion">
                      <div class="carousel-caption">
                        <h3><a title=" Sample Product" href="#">Top Fashion</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                    <div class="item"><img src="images/slide2.jpg" alt="Mid Season">
                      <div class="carousel-caption">
                        <h3><a title=" Sample Product" href="#">Mid Season</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                  </div>
                  <a class="left carousel-control" href="#" data-slide="prev"> <span class="sr-only">Previous</span></a> <a class="right carousel-control" href="#" data-slide="next"> <span class="sr-only">Next</span></a></div>
              </div>
            </div>
            <div class="block block-list block-viewed">
              <div class="block-title">
                <h3>Recently Viewed</h3>
              </div>
              <div class="block-content">
                <ol id="recently-viewed-items">
                  <li class="item odd">
                    <p class="product-name"><a href="#"><i class="fa fa-angle-right"></i>Product Title Here</a></p>
                  </li>
                  <li class="item even">
                    <p class="product-name"><a href="#"><i class="fa fa-angle-right"></i>Product Title Here</a></p>
                  </li>
                  <li class="item last odd">
                    <p class="product-name"><a href="#"><i class="fa fa-angle-right"></i>Product Title Here</a></p>
                  </li>
                </ol>
              </div>
            </div>
            <div class="block block-poll">
              <div class="block-title">
                <h3>Community Poll</h3>
              </div>
              <form id="pollForm" action="#" method="post" onSubmit="return validatePollAnswerIsSelected();">
                <div class="block-content">
                  <p class="block-subtitle">What is your favorite color</p>
                  <ul id="poll-answers">
                    <li class="odd">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_1" value="1">
                      <span class="label">
                      <label for="vote_1">Green</label>
                      </span> </li>
                    <li class="even">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_2" value="2">
                      <span class="label">
                      <label for="vote_2">Red</label>
                      </span> </li>
                    <li class="odd">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_3" value="3">
                      <span class="label">
                      <label for="vote_3">Black</label>
                      </span> </li>
                    <li class="last even">
                      <input type="radio" name="vote" class="radio poll_vote" id="vote_4" value="4">
                      <span class="label">
                      <label for="vote_4">Pink</label>
                      </span> </li>
                  </ul>
                  <div class="actions">
                    <button type="submit" title="Vote" class="button button-vote"><span>Vote</span></button>
                  </div>
                </div>
              </form>
            </div>
            <div class="block block-tags">
              <div class="block-title">
                <h3>Popular Tags</h3>
              </div>
              <div class="block-content">
                <div class="tags-list"> <a href="#">Jwellery</a> <a href="#">Bag</a> <a href="#">Clothing</a> <a href="#">Shoes</a> <a href="#">Watches</a> <a href="#">Beauty</a> <a href="#">Accessories</a> </div>
                <div class="actions"> <a href="#" class="view-all">View All Tags</a> </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>