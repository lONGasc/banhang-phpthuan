<?php 
    //load file layout vao day
self::$fileLayout = "LayoutTrangTrong.php";
?>


<div id="page"> 
  <section class="blog_post">
    <div class="container">
      <div class="row">
        <div class="" id="center_column">

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
       
            <!-- ./right colunm --> 
          </div>
          <!-- ./row--> 
        </div>
      </section>

    </div>