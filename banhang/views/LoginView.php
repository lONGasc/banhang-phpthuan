<?php 
    //load file layout vao day
    self::$fileLayout = "LayoutTrangTrong.php";
 ?>
<section class="main-container col1-layout">
      <div class="main container">
       <div class="account-login" >
          <div class="page-title">
          <h2>Đăng nhập</h2>
        </div>
          <fieldset class="col2-set">
          <div class="content" style="width: 500px; ">
           <form method='post' action="index.php?controller=account&action=loginPost">
                 
                <div class="form-list">
               
                  <label for="email">Email <b id="req">*</b></label>
                  <input type="email"  class="input-text required-entry" name="email" required>
              </div>
               
                 <div class="form-list">
                  <label for="pass">Password <b id="req">*</b></label>
                  <input type="password" class="input-text required-entry validate-password" name="password" required>
                </div>
     
             
              <div class="buttons-set">
                <button id="send2" name="send" type="submit" class="button login"><span>đăng nhập</span></button>
                 </div>
                 <p style="margin-top: 10px; font-size: 13px;">bạn chưa có sẵn tài khoản?<span><a class="forgot-word" href="index.php?controller=account&action=register" style="background-color: gray;">Để đăng kí</a></span></p>
              </form>


          </div>
        </fieldset>
        </div>
       
      </div>
   </section>