
<header>
  <div class="header-container">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-3 col-xs-12">
          <div class="logo"><a title="ecommerce Template" href="index.php"><img alt="ecommerce Template" src="assets\frontend\images\logo.png"></a></div>
          <div class="nav-icon">
            <div class="mega-container visible-lg visible-md visible-sm">
              <div class="navleft-container">
                <div class="mega-menu-title">
                  <h3><i class="fa fa-navicon"></i>Categories</h3>
                </div>
                <div class="mega-menu-category">
                  <ul class="nav">
                    <li><a href="#">Danh mục sản phẩm</a>
                      <div class="wrap-popup column1">
                        <div class="popup">
                          <ul class="nav">
                          <?php 
              //co the ket noi csdl de truy van o day
              $conn = Connection::getInstance();
              $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
              $categories = $query->fetchAll(PDO::FETCH_OBJ);
             ?>
             <?php foreach($categories as $rows): ?>
            <li><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
            <?php 
              $querySub = $conn->query("select * from categories where parent_id = {$rows->id} order by id desc");
              $categoriesSub = $querySub->fetchAll(PDO::FETCH_OBJ);
             ?>
             <?php foreach($categoriesSub as $rowsSub): ?>
            <li style="padding-left:20px;"><a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
              <?php endforeach; ?>
            <?php endforeach; ?>
                        </ul>
                      </div>
                    </div>
                  </li>

                </ul>

              </div>
              <div class="mega-menu-category">
                <ul class="nav">
                  <li><a href="index.php?controller=news">Tin tức</a>

                  </li>

                </ul>

              </div>
              <div class="mega-menu-category">
                <ul class="nav">
                  <li><a href="index.php?controller=cart">Giỏ Hàng</a>

                  </li>

                </ul>

              </div> 

              <div class="mega-menu-category">
                <ul class="nav">
                  <li><a href="index.php?controller=contact">Liên Hệ</a>

                  </li>

                </ul>

              </div>



            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-sm-9 col-xs-12 jtv-rhs-header">
        <div class="jtv-mob-toggle-wrap">
          <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">Menu</span></div>
        </div>
        <div class="jtv-header-box">
          <div class="search_cart_block">
            <div class="">
             <div class="search-box hidden-xs header-search" > 
              <input type="text" onkeypress="searchForm(event);"  value="" class="searchbox  " placeholder="Search entire store here..." id="key" maxlength="128"  >
              <button  type="submit" title="Search" class="search-btn-bg" id="submit-button"><span onclick="return search();" class="hidden-sm">Search</span><!-- <i  class="fa fa-search hidden-xs hidden-lg hidden-md"></i> --></button>
            </div>
            <div class="smart-search" >
              <ul>
                <!-- <li><img src="http://localhost/devpro/php60/sss/php60_project_session17/php60_project/assets/upload/products/1655127582_1653829763_132218026146647564_6.jpg"><a href="#">Sản phẩm</a></li> -->

              </ul>
            </div>
          </div>


          <style type="text/css">
            #key {
              margin: 0;
              width: 80%;
              font-size: 13px;
              height: 40px;
              color: #fff;
              padding: 0 2px;
              background: none;
              outline: none;
              border: none;
            }
            .header-search{position: relative;}
            .smart-search{position: absolute; width: 58%; background: white; height: 300px; overflow: scroll;z-index: 1; margin-top: 44px; display: none;}
            .smart-search ul{padding: 0px; margin: 0px; list-style: none; }
            .smart-search ul li{border-bottom: 1px solid #dddddd;}
            .smart-search img{width: 70px; margin-right: 5px;}
          </style>
          <script type="text/javascript">
      //khi an phim enter thi nhay den trang tim kiem theo ten
      function searchForm(event){
        //bat phim ener tu ban phim (phim enter co keyCode = 13)
        if(event.keyCode == 13){
          //lay gia tri cua the html co id=key
          let key = document.getElementById("key").value;
          //di chuyen den url tim kiem
          location.href = "index.php?controller=search&action=name&key="+key;
        }
      }
      function search(){
        //lay gia tri cua the html co id=key
        let key = document.getElementById("key").value;
        //di chuyen den url tim kiem
        location.href = "index.php?controller=search&action=name&key="+key;
      }
      //---
      //de thuc hien cac dong code ben duoi thi website can phai load thu vien jquery
      /*
        de kiem tra xem website da load thu vien jquery chua thi thuc hien test bang doan code sau
        */
      // $(document).ready(function(){alert('jquery da duoc load vao trang');});
      $(".searchbox").keyup(function(){
        var strKey = $("#key").val();
        if(strKey.trim() == ""){
          $(".smart-search").attr("style","display:none;");
        }else{
          $(".smart-search").attr("style","display:block;");
          //---
          //lay du lieu bang ajax
          $.get("index.php?controller=search&action=ajaxSearch&key="+strKey,function(data){
            //clear cac the li ben trong ul
            $(".smart-search ul").empty();
            //them du lieu vao ul
            $(".smart-search ul").append(data);
          });
          //---
        }
      });
      //---
    </script>


    <div class="right_menu">
      <div class="menu_top">
        <?php 
        $numberProduct = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
        ?>
        <div class="top-cart-contain pull-right">
          <div class="mini-cart">
            <div class="basket"><a class="basket-icon" href="#"><i class="fa fa-shopping-basket"></i> Shopping Cart <span></span></a>
              <div class="top-cart-content">
                <div class="block-subtitle">
                  <div class="top-subtotal"><?php echo $numberProduct; ?> <span>items,</span>  <span class="price"></span></div>
                </div>
                <ul class="mini-products-list" id="cart-sidebar" style="overflow: scroll;height: 400px;">
                  <?php foreach($_SESSION['cart'] as $product): ?> 
                    <li class="item">
                      <div class="item-inner"><a class="product-image"  href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><img title="<?php echo $product['name']; ?>" alt="<?php echo $product['name']; ?>" src="assets/upload/products/<?php echo $product['photo']; ?>" ></a>
                        <div class="product-details">
                          <div class="access"><a class="btn-remove1" title="Remove This Item" href="index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="fa fa-pencil"></i><span class="hidden">Edit item</span></a> </div>
                          <p class="product-name"><a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></p>
                          <strong><?php echo $product['number']; ?> </strong> x <span class="price">$<?php echo number_format(($product['price'] - ($product['price'] * $product['discount'])/100)); ?></span></div>
                        </div>
                      </li>

                    <?php endforeach; ?>
                  </ul>

                  <div class="actions"> <a href="index.php?controller=cart" class="view-cart"><span>View Cart</span></a>
                    <a href="index.php?controller=cart&action=checkout" class="btn-checkout" title="Checkout" type="button"><span>Checkout</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="top_section hidden-xs">
      <div class="toplinks">
        <div class="site-dir hidden-xs"> <a class="hidden-sm" href="#"><i class="fa fa-phone"></i> <strong>Hotline:</strong> +1 123 456 7890</a> <a href="mailto:support@example.com"><i class="fa fa-envelope"></i> support@example.com</a> </div>
        <ul class="links">
          <?php if(isset($_SESSION['customer_email'])): ?>
            <li><a title="My Account" href="my-account.html">Xin chào <?php echo $_SESSION['customer_email']; ?></a></li>
            <li><a title="My Wishlist" href="index.php?controller=account&action=logout">Đăng xuất</a></li>
          <?php else: ?>
            <li><a  href="index.php?controller=account&action=login">Đăng nhập</a></li>
            <li><a  href="index.php?controller=account&action=register">Đăng kí</a></li>
          <?php endif; ?>
          
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</header>
<!-- end header --> 
<!-- Revslider -->
<div class="container jtv-home-revslider">
  <div class="row">
    <div class="col-lg-9 col-sm-9 col-xs-12 jtv-main-home-slider">
      <div id='rev_slider_1_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
        <div id='rev_slider_1' class='rev_slider fullwidthabanner'>
          <ul>
            <li data-transition='slotzoom-horizontal' data-slotamount='7' data-masterspeed='1000' data-thumb='assets\frontend\images\slider\slide-img1.jpg'><img src='assets\frontend\images\slider\slide-img1.jpg' alt="slider image1" data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat'  />
              <div class="info">
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='165'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;white-space:nowrap;'><span>Shop The Trend</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='220'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;white-space:nowrap;'>Amazing Chance!</div>
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'>Our new arrivals can't wait to meet you.</div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='350'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'><a href='#' class="buy-btn">Browse Now</a></div>
              </div>
            </li>
            <li data-transition='slotzoom-horizontal' data-slotamount='7' data-masterspeed='1000' data-thumb='assets\frontend\images\slider\slide-img3.jpg'><img src='assets\frontend\images\slider\slide-img3.jpg' alt="slider image2" data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat'  />
              <div class="info">
                <div class='tp-caption ExtraLargeTitle sft slide2  tp-resizeme ' data-x='45'  data-y='165'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;white-space:nowrap;padding-right:0px'><span>Spring Fashion</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='220'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;white-space:nowrap;'>Be Summer Ready</div>
                <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'>Identify your Look, Define your Style!</div>
                <div    class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='350'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'><a href='#' class="buy-btn">Join us</a></div>
              </div>
            </li>
            <li data-transition='slotzoom-horizontal' data-slotamount='7' data-masterspeed='1000' data-thumb='assets\frontend\images\slider\slide-img2.jpg'><img src='assets\frontend\images\slider\slide-img2.jpg' alt="slider image3" data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat'  />
              <div class="info">
                <div class='tp-caption ExtraLargeTitle sft slide2  tp-resizeme ' data-x='45'  data-y='165'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;white-space:nowrap;padding-right:0px'><span>Big Sale</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='220'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;white-space:nowrap;'>New Fashion</div>
                <div class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'>Look great & feel amazing in our stunning dresses.</div>
                <div    class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='350'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'><a href='#' class="buy-btn">Buy Now</a></div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
      <div class="banner-block"> <a href="#"> <img src="assets\frontend\images\banner1.jpg" alt=""> </a>
        <div class="text-des-container pad-zero">
          <div class="text-des">
            <p>Designer</p>
            <h2>Handbags</h2>
          </div>
        </div>
      </div>
      <div class="banner-block"> <a href="#"> <img src="assets\frontend\images\banner2.jpg" alt=""> </a>
        <div class="text-des-container">
          <div class="text-des">
            <p>The Ultimate</p>
            <h2>Shoes Collection</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Support Policy Box -->
<div class="container">
  <div class="support-policy-box">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="support-policy"> <i class="fa fa-truck"></i>
          <div class="content">Free Shipping on order over $49</div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="support-policy"> <i class="fa fa-phone"></i>
          <div class="content">Need Help +1 123 456 7890</div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="support-policy"> <i class="fa fa-refresh"></i>
          <div class="content">30 days return Service</div>
        </div>
      </div>
    </div>
  </div>
</div>