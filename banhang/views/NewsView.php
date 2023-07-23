<?php 
    //load file layout vao day
self::$fileLayout = "LayoutTrangTrong.php";
?>


<div id="page"> 
  <section class="blog_post">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-9" id="center_column">

          <div class="center_column">
            <div class="page-title">
              <h2>Blog post</h2>
            </div>
                     <ul class="blog-posts">
                         <?php foreach($data as $rows): ?>

              <li class="post-item">
                <article class="entry">
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="entry-thumb"> <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>">
                        <figure><img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" tittle ="<?php echo $rows->name; ?>"></figure>
                      </a> </div>
                    </div>
                    <div class="col-sm-7">
                      <h3 class="entry-title"><a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                      <div class="entry-meta-data"> <span class="author"> <i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span> <span class="cat"> <i class="fa fa-folder"></i>&nbsp; <a href="#">News, </a> <a href="#">Promotions</a> </span> <span class="comment-count"> <i class="fa fa-comment"></i>&nbsp; 3 </span> <span class="date"><i class="fa fa-calendar"></i>&nbsp; 2018-08-05</span> </div>
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>&nbsp; <span>(5 votes)</span></div>
                      <div class="entry-excerpt"><?php echo $rows->description; ?></div>
                      <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="read-more">Read more&nbsp; <i class="fa fa-angle-double-right"></i></a> </div>
                    </div>
                  </article>
                </li>



 <?php endforeach; ?>
              </ul>

              <div class="sortPagiBar">
                <div class="pagination-area">
                  <ul class="pagination">
                    
                     <li class="active"><a href="#">Trang</a></li>
    <?php for($i = 1; $i <= $numPage; $i++): ?>
    <li><a href="index.php?controller=news&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php endfor; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Right colunm -->
          <aside class="sidebar col-xs-12 col-sm-3">
            <div class="search">
              <input class="form-control" type="search" placeholder="Search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </div>
            <!-- Blog category -->
            <div class="block blog-module">
              <div class="block-title">
                <h3>Blog Categories</h3>
              </div>
              <div class="block_content">
                <div class="layered layered-category">
                  <div class="layered-content">
                    <ul class="tree-menu">
                      <li><a href="#"><i class="fa fa-angle-right"></i>&nbsp; Images</a></li>
                      <li><i class="fa fa-angle-right"></i>&nbsp; <a href="#">Audio</a></li>
                      <li><i class="fa fa-angle-right"></i>&nbsp; <a href="#">Photos</a></li>
                      <li><i class="fa fa-angle-right"></i>&nbsp; <a href="#">Diet &amp; Fitness</a></li>
                      <li><i class="fa fa-angle-right"></i>&nbsp; <a href="#">Slider</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Popular Posts -->
            <div class="block blog-module">
              <div class="block-title">
                <h3>Popular Posts</h3>
              </div>
              <div class="block_content">
                <div class="layered">
                  <div class="layered-content">
                    <ul class="blog-list-sidebar">
                      <li>
                        <div class="post-thumb"> <a href="#"><img src="images/blog-img1.jpg" alt="Blog"></a> </div>
                        <div class="post-info">
                          <h5 class="entry_title"><a href="#">Lorem ipsum dolor</a></h5>
                          <div class="post-meta"> <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span> <span class="comment-count"> <i class="fa fa-comment-o"></i> 3 </span> </div>
                        </div>
                      </li>
                      <li>
                        <div class="post-thumb"> <a href="#"><img src="images/blog-img1.jpg" alt="Blog"></a> </div>
                        <div class="post-info">
                          <h5 class="entry_title"><a href="#">Lorem ipsum dolor</a></h5>
                          <div class="post-meta"> <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span> <span class="comment-count"> <i class="fa fa-comment-o"></i> 3 </span> </div>
                        </div>
                      </li>
                      <li>
                        <div class="post-thumb"> <a href="#"><img src="images/blog-img1.jpg" alt="Blog"></a> </div>
                        <div class="post-info">
                          <h5 class="entry_title"><a href="#">Lorem ipsum dolor</a></h5>
                          <div class="post-meta"> <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span> <span class="comment-count"> <i class="fa fa-comment-o"></i> 3 </span> </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Recent Comments -->
            <div class="block blog-module">
              <div class="block-title">
                <h3>Recent Comments</h3>
              </div>
              <div class="block_content">
                <div class="layered">
                  <div class="layered-content">
                    <ul class="recent-comment-list">
                      <li>
                        <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                        <div class="comment"> "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..." </div>
                        <div class="author">Posted by <a href="#">Admin</a></div>
                      </li>
                      <li>
                        <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                        <div class="comment"> "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..." </div>
                        <div class="author">Posted by <a href="#">Admin</a></div>
                      </li>
                      <li>
                        <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                        <div class="comment"> "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..." </div>
                        <div class="author">Posted by <a href="#">Admin</a></div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- tags -->
            <div class="block block-tags">
              <div class="block-title">
                <h3>Popular Tags</h3>
              </div>
              <div class="block-content">
                <div class="tags-list"> <a href="#">Jwellery</a> <a href="#">Bag</a> <a href="#">Clothing</a> <a href="#">Shoes</a> <a href="#">Watches</a> <a href="#">Beauty</a> <a href="#">Accessories</a> </div>
                <div class="actions"> <a href="#" class="view-all">View All Tags</a> </div>
              </div>
            </div>

            <!-- Banner -->
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
              <!-- ./Banner --> 
            </aside>
            <!-- ./right colunm --> 
          </div>
          <!-- ./row--> 
        </div>
      </section>

    </div>