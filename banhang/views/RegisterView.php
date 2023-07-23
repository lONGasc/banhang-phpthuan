<?php 
    //load file layout vao day
    self::$fileLayout = "LayoutTrangTrong.php";
 ?>
<div class="template-customer">

 
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="account-login" style="padding-left: 300px; padding-right: 335px;">
        <div class="page-title">
          <h2>Đăng kí</h2>
        </div>
        <fieldset class="col2-set">
          
            <div class="content" style="width: 500px; ">
               <?php if(isset($_GET["notify"]) && $_GET["notify"] == "error"): ?>
    <p style="color:red; font-weight: bold;">Đăng ký thất bại, email đã bị trùng!</p>
  <?php elseif(isset($_GET["notify"]) && $_GET["notify"] == "success"): ?>
  <p style="color:red; font-weight: bold;">Đăng ký thành công, click vào đăng nhập để đăng nhập tài khoản</p>
  <?php else: ?>
  <p> Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
  <?php endif; ?>
              <form method='post' action="index.php?controller=account&action=registerPost">
                   <div class="form-list">
               
                  <label >Name <span class="required">*</span></label>
                  <input type="text"  class="input-text required-entry" name="name" required >
              </div>
                <div class="form-list">
               
                  <label for="email">Email <b id="req">*</b></label>
                  <input type="email"  class="input-text required-entry" name="email" required>
              </div>
                <div class="form-list">
               
                  <label for="email">Address <span class="required">*</span></label>
                  <input type="text"  class="input-text required-entry" name="address">
              </div>
                <div class="form-list">
               
                  <label for="email">Phone <span class="required">*</span></label>
                  <input type="text"  class="input-text required-entry"   name="phone">
              </div>
                 <div class="form-list">
                  <label for="pass">Password <b id="req">*</b></label>
                  <input type="password" class="input-text required-entry validate-password" name="password" required>
                </div>
             
              <p class="required">* Required Fields</p>
              <div class="buttons-set">
                <button id="send2" name="send" type="submit" class="button login"><span>đăng kí</span></button>
                 </div>
                 <p style="margin-top: 10px; font-size: 13px;">bạn đã có sẵn tài khoản?<span><a class="forgot-word" href="index.php?controller=account&action=login" style="background-color: gray;">Để đăng nhập</a></span></p>
              </form>
           
                               

            </div>
          </div>
        </fieldset>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
  </section>
</div>