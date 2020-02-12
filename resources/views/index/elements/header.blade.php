<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>HB-Watch | Đồng hồ Nhật Bản chính hãng</title>
    <!-- Font awesome -->
    <link href="{{asset('css/frontend/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('css/frontend/bootstrap.css')}}" rel="stylesheet">
{{--     <link rel="stylesheet" href="{{asset('/css/frontend/bootstrap.min.css')}}"> --}}
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{asset('css/frontend/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/frontend/jquery.simpleLens.css')}}">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/frontend/slick.css')}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/frontend/nouislider.css')}}">
    <!-- Theme color -->
    <link id="switcher" href="{{asset('css/frontend/theme-color/purple-theme.css')}}" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{asset('css/frontend/sequence-theme.modern-slide-in.css')}}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{asset('css/frontend/style.css')}}" rel="stylesheet">    

    <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=vietnamese" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body>
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img src="{{asset('img/frontend/flag/vietnam.jpg')}}" alt="english flag">Tiếng Việt
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><img src="{{asset('img/frontend/flag/vietnam.jpg')}}" alt="">Tiếng Việt</a></li>
                      <li><a href="#"><img src="{{asset('img/frontend/flag/english.jpg')}}" alt="">English</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / language -->

                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      VNĐ
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-usd"></i>USD</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>0352 893 665</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li class="hidden-xs"><a href="{{'/gio-hang'}}">Giỏ hàng</a></li>
                  <?php
                        $success = session()->get('customer_fname');
                        if($success) {
                           ?>
                           <li class="hidden-xs"><a href="{{'/tai-khoan'}}"><?php echo $success;?></a></li>
                           <li class="hidden-xs"><a href="{{'/dang-xuat'}}">Đăng xuất</a></li>
                           <?php
                        } else {
                            ?>
                          <li class="hidden-xs"><a href="{{'/dang-ky'}}">Đăng ký</a></li>
                          <li><a href="" data-toggle="modal" data-target="#login-modal">Đăng nhập</a></li>                      
                            <?php
                        }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="{{'/'}}">
                  <i class="fas fa-clock"></i>
                  <p>HB<strong>Watch</strong> <span>Time Is Precious</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <?php
                    $content = Cart::content();
                ?>
                <a class="aa-cart-link" href="{{'/gio-hang'}}">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">GIỎ HÀNG</span>
                  <span class="aa-cart-notify">{{Cart::count()}}</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    @foreach($content as $value)
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="/uploads/products/{{$value->options->image}}" alt="img" style="height: 50px;width: auto;"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">{{$value->name}}</a></h4>
                        <p>{{$value->qty}} x {{number_format($value->price,0)}}<sup>đ</sup></p>
                      </div>
                      <a class="aa-remove-product" href="{{('/gio-hang/delete/'.$value->rowId)}}"><span class="fa fa-times"></span></a>
                    </li>
                    @endforeach                    
                    <li>
                      <span class="aa-cartbox-total-title">
                        Tổng cộng
                      </span>
                      <span class="aa-cartbox-total-price">
                       {{Cart::subtotal().' '.'VNĐ'}}
                      </span>
                    </li>
                  </ul>
                  <?php
                    if(Cart::count() == 0) {
                        ?>
                           <a class="aa-cartbox-checkout aa-primary-btn" href="{{'/'}}">Thanh toán</a>
                        <?php
                    } else {
                        ?>
                           <a class="aa-cartbox-checkout aa-primary-btn" href="{{'/tai-khoan'}}">Thanh toán</a>
                        <?php
                    }
                  ?>
                  
                </div>
              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="{{('/tim-kiem')}}" method="POST">
                    {{csrf_field()}}
                  <input type="text" name="contents" placeholder="Bạn tìm gì...">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>