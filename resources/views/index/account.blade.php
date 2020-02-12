@include('index.elements.header')
@include('index.elements.navbar')
@include('index.elements.banner')
 <!-- Account section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>Đăng nhập</h4>
                <?php
                    $error = session()->get('error');
                    if($error) {
                        echo '<span class="p-b-15 text-danger">'.$error.'</span>';
                        session()->put('error',null);
                    }
                    
                ?>
                 <form action="{{URL::to('/dang-nhap')}}" class="aa-login-form" method="POST">
                    {{csrf_field()}}
                    <label for="">Tên đăng nhập<span>*</span></label>
                    <input type="text" name="name" placeholder="Nhập tên đăng nhập">
                    <label for="">Mật khẩu<span>*</span></label>
                    <input type="password" name="password" placeholder="Nhập mật khẩu">
                    <button type="submit" class="aa-browse-btn">Đăng nhập</button>
                    <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> Ghi nhớ </label>
                    <p class="aa-lost-password"><a href="#">Quên mật khẩu?</a></p>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Đăng ký</h4>
                 <form action="{{URL::to('/dang-ky')}}" class="aa-login-form" method="POST">
                    {{csrf_field()}}
                    <label for="">Tên của bạn<span>*</span></label>
                    <input type="text" name="fname" data-validate = "Tên của bạn là bắt buộc" placeholder="Nhập họ và tên của bạn">
                    <label for="">Tên đăng nhập<span>*</span></label>
                    <input type="text" name="name" placeholder="Nhập tên đăng nhập">
                    <label for="">Email<span>*</span></label>
                    <input type="text" name="email" placeholder="Nhập địa chỉ email của bạn">
                    <label for="">Số điện thoại<span>*</span></label>
                    <input type="text" name="phone" placeholder="Nhập số điện thoại">
                    <label for="">Mật khẩu<span>*</span></label>
                    <input type="password" name="password" placeholder="Nhập mật khẩu">
                    <label for="">Nhập lại mật khẩu<span>*</span></label>
                    <input type="password" name="passwordAgain" placeholder="Nhập lại mật khẩu">
                    <button type="submit" class="aa-browse-btn" name="register">Đăng ký</button>                    
                  </form>
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!--  End account section -->

@include('index.elements.footer')