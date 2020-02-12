@include('index.elements.header')
@include('index.elements.navbar')
  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset('img/frontend/slider/slide1.jpg')}}" alt="Men slide img" />
              </div>
              <div class="seq-title">
               <span data-seq>Save Up to 75% Off</span>                
                <h2 data-seq>New ORIENT Mechanical Classic Watch</h2>                
                <p data-seq>Chiếc đồng hồ cơ ORIENT sành điệu này thuộc dòng Sun & Moon Semi-Skeleton nổi tiếng của chúng tôi có sự pha trộn giữa phong cách quyến rũ cổ điển và đặc trưng với gợi ý của thiết kế hiện đại..</p>
               {{--  <a data-seq href="{{('/')}}" class="aa-shop-now-btn aa-secondary-btn">MUA NGAY</a> --}}
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset('img/frontend/slider/slide2.jpg')}}" alt="Wristwatch slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 40% Off</span>                
                <h2 data-seq>Sport</h2>                
                <p data-seq>Được thiết kế để theo kịp lối sống năng động của bạn, bộ sưu tập ORIENT Sports mang đến hình thức và chức năng cùng với thiết kế hấp dẫn của nó.</p>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset('img/frontend/slider/slide3.jpg')}}" alt="Women Jeans slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 75% Off</span>                
                <h2 data-seq>Orient Star Automatic</h2>                
                <p data-seq>Chiếc đồng hồ cơ bằng thép không gỉ 41mm thanh lịch, thể hiện sự khéo léo hoàn hảo của vỏ máy tạo nên sự chuyển động tỉ mỉ của chiếc đồng hồ..</p>
              </div>
            </li>
            <!-- single slide item -->           
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset('img/frontend/slider/slide4.jpg')}}" alt="Shoes slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 75% Off</span>                
                <h2 data-seq>The Time of Your Life.</h2>                
                <p data-seq>Trên cổ tay của bạn là chiếc đồng hồ phong cách vượt thời gian và lời hứa của ngày mai. ORIENT STAR là tình yêu đích thực của bạn với một di sản xuất sắc.</p>
              </div>
            </li>
            <!-- single slide item -->  
             <li>
              <div class="seq-model">
                <img data-seq src="{{asset('img/frontend/slider/slide5.jpg')}}" alt="Male Female slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 50% Off</span>                
                <h2 data-seq>Classic</h2>                
                <p data-seq>Được các nhà sưu tập đồng hồ đánh giá cao về tính cách và chi tiết phong phú, bộ sưu tập ORIENT Classic tiếp tục đứng trước thử thách của thời gian.</p>
              </div>
            </li>                   
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-5 no-padding">                
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">                    
                    <img src="{{asset('/img/frontend/promo-banner.jpg')}}" alt="img">                    
                    <div class="aa-prom-content">
                      {{-- <span>75% Off</span> --}}
                      <h4><a href="#">Sản phẩm độc quyền</a></h4>                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{asset('/img/frontend/promo-banner1.jpg')}}" alt="img">                      
                      <div class="aa-prom-content">
                        {{-- <span>Exclusive Item</span> --}}
                        <h4><a href="#">Đồng hồ Nữ</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{asset('img/frontend/promo-banner2.jpg')}}" alt="img">                      
                      <div class="aa-prom-content">
                        {{-- <span>Sale Off</span> --}}
                        <h4><a href="#">Đồng hồ Nam</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{asset('img/frontend/promo-banner3.jpg')}}" alt="img">                      
                      <div class="aa-prom-content">
                        {{-- <span>New Arrivals</span> --}}
                        <h4><a href="#">Đồng hồ Trẻ em</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{asset('img/frontend/promo-banner4.jpg')}}" alt="img">                      
                      <div class="aa-prom-content">
                       {{--  <span>25% Off</span> --}}
                        <h4><a href="#">Đồng hồ Automatic</a></h4>                        
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
  </section>
  <!-- / Promo section -->
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start product navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#men" data-toggle="tab">Orient</a></li>
                    <li><a href="#women" data-toggle="tab">Seiko</a></li>
                    <li><a href="#sports" data-toggle="tab">Casio</a></li>
                    <li><a href="#electronics" data-toggle="tab">Citizen</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="men">
                      <ul class="aa-product-catg">
                        <!-- start orient product item -->
                        @foreach($orient as $value)
                        <li>
                          <figure>
                            <a class="aa-product-img" href="{{URL::to('/chi-tiet-san-pham/'.$value->id)}}"><img src="/uploads/products/{{$value->image}}" alt="polo shirt img" style="width: 250px;height: 250px"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Mua ngay</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="#">{{$value->name}}</a></h4>
                              <span class="aa-product-price">{{ number_format($value->price,0)}}<sup>đ</sup></span>
                            </figcaption>
                          </figure>                        
                          <!-- product badge -->
                          {{-- <span class="aa-badge aa-sale" href="#">SALE!</span> --}}
                        </li>
                        @endforeach                       
                      </ul>
                      <a class="aa-browse-btn" href="#">Xem thêm<span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / orient product category -->
                    <!-- start seiko product category -->
                    <div class="tab-pane fade" id="women">
                      <ul class="aa-product-catg">
                        <!-- start seiko product item -->
                        @foreach($seiko as $value)
                        <li>
                          <figure>
                            <a class="aa-product-img" href="{{URL::to('/chi-tiet-san-pham/'.$value->id)}}"><img src="/uploads/products/{{$value->image}}" alt="polo shirt img" style="width:250px; height:250px"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Mua ngay</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">{{$value->name}}</a></h4>
                              <span class="aa-product-price">{{ number_format($value->price,0)}}<sup>đ</sup></span>
                            </figcaption>
                          </figure>                         
                        </li>
                        @endforeach                       
                      </ul>
                      <a class="aa-browse-btn" href="#">Xem thêm <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / women product category -->
                    <!-- start sports product category -->
                    <div class="tab-pane fade" id="sports">
                      <ul class="aa-product-catg">
                        <!-- start casio product item -->
                        @foreach($casio as $value)
                        <li>
                          <figure>
                            <a class="aa-product-img" href="{{URL::to('/chi-tiet-san-pham/'.$value->id)}}"><img src="/uploads/products/{{$value->image}}" alt="polo shirt img" style="width:250px; height:250px"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Mua ngay</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">{{$value->name}}</a></h4>
                              <span class="aa-product-price">{{ number_format($value->price,0)}}<sup>đ</sup></span>
                            </figcaption>
                          </figure>                         
                        </li>
                        @endforeach                      
                      </ul>
                    </div>
                    <!-- / sports product category -->
                    <!-- start electronic product category -->
                    <div class="tab-pane fade" id="electronics">
                       <ul class="aa-product-catg">
                        <!-- start single product item -->
                        @foreach($citizen as $value)
                        <li>
                          <figure>
                            <a class="aa-product-img" href="{{URL::to('/chi-tiet-san-pham/'.$value->id)}}"><img src="/uploads/products/{{$value->image}}" alt="polo shirt img" style="width:250px; height:250px"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Mua ngay</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">{{$value->name}}</a></h4>
                              <span class="aa-product-price">{{ number_format($value->price,0)}}<sup>đ</sup></span>
                            </figcaption>
                          </figure>                         
                        </li>
                        @endforeach                       
                      </ul>
                      <a class="aa-browse-btn" href="#">Xem thêm <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / electronic product category -->
                  </div>            
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->
  <!-- banner section -->
  <section id="aa-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">        
          <div class="row">
            <div class="aa-banner-area">
            <a href="{{('/')}}"><img src="{{asset('/img/frontend/social_bg.jpg')}}" alt="social banner"></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- popular section -->
  <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#popular" data-toggle="tab">Sản phẩm nổi bật</a></li>
                <li><a href="#latest" data-toggle="tab">Sản phẩm mới nhất</a></li>                    
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                     @foreach($random as $value)
                    <li>
                      <figure>
                        <a class="aa-product-img" href="{{('/chi-tiet-san-pham/'.$value->id)}}"><img src="/uploads/products/{{$value->image}}" alt="polo shirt img" style="width:250px; height:250px"></a>
                        <a class="aa-add-card-btn"href="{{('/chi-tiet-san-pham/'.$value->id)}}"><span class="fa fa-shopping-cart"></span>Mua ngay</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">{{$value->name}}</a></h4>
                          <span class="aa-product-price">{{number_format($value->price,0)}}<sup>đ</sup></span>
                        </figcaption>
                      </figure>                      
                      <!-- product badge -->
                      <span class="aa-badge aa-hot" href="#">HOT</span>
                    </li>

                    @endforeach                                                                                    
                  </ul>
                </div>
                <!-- / popular product category -->
                
                <!-- start featured product category -->
                <div class="tab-pane fade" id="featured">
                 <ul class="aa-product-catg aa-featured-slider">
                     <!-- start single product item -->
                                                                                
                  </ul>
                </div>
                <!-- / featured product category -->

                <!-- start latest product category -->
                <div class="tab-pane fade" id="latest">
                  <ul class="aa-product-catg aa-latest-slider">
                    <!-- start single product item -->
                    @foreach($lastest as $value)
                    <li>
                      <figure>
                        <a class="aa-product-img" href="{{('/chi-tiet-san-pham/'.$value->id)}}"><img src="/uploads/products/{{$value->image}}" alt="polo shirt img" style="width:250px; height:250px"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Mua ngay</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">{{$value->name}}</a></h4>
                          <span class="aa-product-price">{{number_format($value->price,0)}}<sup>đ</sup></span>
                        </figcaption>
                      </figure>                     
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">MỚI</span>
                    </li>
                    @endforeach                                                                                  
                  </ul>
                </div>
                <!-- / latest product category -->              
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>MIỄN PHÍ VẬN CHUYỂN</h4>
                <P>Miễn phí vận chuyển cho mọi đơn hàng</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>30 NGÀY ĐỔI TRẢ</h4>
                <P>Miễn phí 1 đổi 1 trong 30 ngày nếu lỗi của nhà sản xuất</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>HỔ TRỢ 24/7</h4>
                <P>Hổ trợ 24/7 với đội ngũ nhân viên tâm huyết, tận tâm với khách hàng</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
  <!-- Testimonial -->
  <section id="aa-testimonial">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="{{asset('/img/frontend/testimonial-img-1.jpg')}}" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Tôi thực sự an tâm và tin tưởng vào chất lượng dịch vụ của HBWatch. Lần đầu tiên thấy chiếc đồng hồ của mình được chăm sóc kỹ lưỡng đến vậy.</p>
                  <div class="aa-testimonial-info">
                    <span>Ca sĩ</span>
                    <p>Hà Anh Tuấn</p>
                    <a href="#"></a>
                  </div>
                </div>
              </li>
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="{{asset('/img/frontend/testimonial-img-2.jpg')}}" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Điều mà Thành ấn tượng nhất là chế độ bảo hành 5 năm theo tiêu chuẩn Thuỵ Sĩ cho cả lỗi người dùng.</p>
                  <div class="aa-testimonial-info">
                    <span>Nghệ sĩ</span>
                    <p>Trấn Thành</p>
                    <a href="#"></a>
                  </div>
                </div>
              </li>
               <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="{{asset('/img/frontend/testimonial-img-3.jpg')}}" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Tôi ủng hộ những người đặt lợi ích của khách hàng làm mục tiêu phấn đấu. Vì vậy, tôi đã ủng hộ và lựa chọn HBWATCH.</p>
                  <div class="aa-testimonial-info">
                    <span>MC</span>
                    <p>Thành Trung</p>
                    <a href="#"></a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->

  <!-- Latest Blog -->
  <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <h2>TIN TỨC</h2>
            <div class="row">
              <!-- single latest blog -->
              @foreach($news as $value)
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">                    
                    <a href="{{('/tin-tuc/'.$value->id)}}"><img src="/uploads/news/{{$value->image}}" alt="img"></a>  
                      <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i>5K</span>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                      <span href="#"><i class="fa fa-clock-o"></i>Feb 11, 2020</span>
                    </figcaption>                          
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="{{('/tin-tuc/'.$value->id)}}">{{$value->title}}</a></h3>
                    <p>{{$value->description}}</p> 
                    <a href="{{('/tin-tuc/'.$value->id)}}" class="aa-read-mor-btn">Xem thêm <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div>
               @endforeach

            </div>
          </div>
        </div>    
      </div>
    </div>
  </section>
  <!-- / Latest Blog -->

  <!-- Client Brand -->
  <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="#"><img src="{{asset('img/frontend/brand/casio.png')}}" alt="java img"></a></li>
              <li><a href="#"><img src="{{asset('img/frontend/brand/citizen.png')}}" alt="jquery img"></a></li>
              <li><a href="#"><img src="{{asset('img/frontend/brand/seiko.png')}}" alt="html5 img"></a></li>
              <li><a href="#"><img src="{{asset('img/frontend/brand/orient.png')}}" alt="css3 img"></a></li>
              <li><a href="#"><img src="{{asset('img/frontend/brand/casio.png')}}" alt="java img"></a></li>
              <li><a href="#"><img src="{{asset('img/frontend/brand/citizen.png')}}" alt="jquery img"></a></li>
              <li><a href="#"><img src="{{asset('img/frontend/brand/seiko.png')}}" alt="html5 img"></a></li>
              <li><a href="#"><img src="{{asset('img/frontend/brand/orient.png')}}" alt="css3 img"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Client Brand -->
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
          <form class="aa-login-form" action="{{('/dang-nhap')}}" method="POST">
            {{csrf_field()}}
            <label for="">Tên đăng nhập<span>*</span></label>
            <input type="text" name ="name" placeholder="Tên đăng nhập">
            <label for="">Mật khẩu<span>*</span></label>
            <input type="password" name="password" placeholder="Mật khẩu">
            <button class="aa-browse-btn" type="submit">Đăng nhập</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Nhớ thông tin </label>
            <p class="aa-lost-password"><a href="#">Quên mật khẩu?</a></p>
            <div class="aa-register-now">
              Bạn chưa có tài khoản?<a href="{{URL::to('/tai-khoan')}}">Đăng ký ngay!</a>
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