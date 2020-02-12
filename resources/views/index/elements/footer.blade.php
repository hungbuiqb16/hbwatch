  <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Về chúng tôi</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">HBWatch</a></li>
                    <li><a href="#">Triết lý kinh doanh</a></li>
                    <li><a href="#">Hoạt động xã hội</a></li>
                    <li><a href="#">Liên kết & hợp tác</a></li>
                    <li><a href="#">Tuyển dụng</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Tin tức</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Review sản phẩm</a></li>
                      <li><a href="#">Tin tức đồng hồ</a></li>
                      <li><a href="#">Chứng nhận thương hiệu</a></li>
                      <li><a href="#">Khách hàng nói về chúng tôi</a></li>
                      <li><a href="#">Lịch sử thương hiệu</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Chính sách bán hàng</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Bảo hành</a></li>
                      <li><a href="#">Thay pin miễn phí trọn đời</a></li>
                      <li><a href="#">Vận chuyển miễn phí</a></li>
                      <li><a href="#">Hướng dẫn mua hàng</a></li>
                      <li><a href="#">Hướng dẫn thanh toán</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Liên hệ</h3>
                    <address>
                      <p>Hòa An - Cẩm Lệ - Đà Nẵng</p>
                      <p><span class="fa fa-phone"></span>+0352893665</p>
                      <p><span class="fa fa-envelope"></span>hungbuiqb16@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Thiết kế & phát triển bởi <a href="#">Hùng Bùi</a></p>
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->
    <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Đăng ký hoặc đăng nhập</h4>
          <form class="aa-login-form" action="{{URL::to('/dang-nhap')}}" method="POST">
            {{csrf_field()}}
            <label for="">Tên đăng nhập<span>*</span></label>
            <input type="text" name = "name" placeholder="Tên đăng nhập">
            <label for="">Mật khẩu<span>*</span></label>
            <input type="password" name="password" placeholder="Mật khẩu">
            <button class="aa-browse-btn" name="login" type="submit">Đăng nhập</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Nhớ thông tin </label>
            <p class="aa-lost-password"><a href="#">Quên mật khẩu?</a></p>
            <div class="aa-register-now">
              Bạn chưa có tài khoản?<a href="{{'/tai-khoan'}}">Đăng ký ngay!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>    

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('js/frontend/bootstrap.js')}}"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="{{asset('js/frontend/jquery.smartmenus.js')}}"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="{{asset('js/frontend/jquery.smartmenus.bootstrap.js')}}"></script>  
  <!-- To Slider JS -->
  <script src="{{asset('js/frontend/sequence.js')}}"></script>
  <script src="{{asset('js/frontend/sequence-theme.modern-slide-in.js')}}"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="{{asset('js/frontend/jquery.simpleGallery.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/frontend/jquery.simpleLens.js')}}"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="{{asset('js/frontend/slick.js')}}"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="{{asset('js/frontend/nouislider.js')}}"></script>
  <!-- Custom js -->
  <script src="{{asset('js/frontend/custom.js')}}"></script> 

  </body>
</html>