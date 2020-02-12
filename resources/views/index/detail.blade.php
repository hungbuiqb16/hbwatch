@include('index.elements.header')
@include('index.elements.navbar')
@include('index.elements.banner')
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="aa-product-details-area">
          	@foreach($product as $value)
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-6 col-sm-6 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="/uploads/products/{{$value->image}}" class="simpleLens-lens-image"><img src="/uploads/products/{{$value->image}}" class="simpleLens-big-image"></a></div>
                      </div>
                      <!-- thumbnail-image -->
                      <!-- end-thumbnail-image -->
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                <div class="col-md-6 col-sm-6 col-xs-12 block-info">
                  <div class="aa-product-view-content">
                    <h3>Đồng hồ <?php if ($value->gender == '0') echo 'Nam'; else echo "Nữ"; ?> {{$value->name}}</h3>
                    <hr>
                    <div class="aa-price-block my-1">
                        <div class="price-detail-pg" style="color: red; font-weight: bold; font-size: 20px; text-align: center;">{{ number_format($value->price,0)}}<sup>đ</sup></div>                
				    	<i class="fa fa-check-circle" style="color: #4caf50;"></i> Tình trạng: <?php if ($value->status == '0') echo 'Còn hàng'; else echo 'Hết hàng';?>
		    	    </div>
                    <div class="aa-prod-view-bottom">
                      <form action="{{URL::to('/gio-hang')}}" method="POST">
                           {{ csrf_field()}}
                           <button class="btn btn-success buy-now my-1" type="submit" href="{{asset('/gio-hang')}}"><i class="fa fa-shopping-cart"></i> Mua ngay</button>
                           <input type="hidden" name="product_id" value="{{$value->id}}">
                           <button class="btn btn-info add-to-card my-1" type="submit" href="#"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>                         
                       </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="aa-product-details-bottom my-3">
                <div class="desc-product">
                    <div class="heading-panel">
                        <i class="fa fa-info"></i> Mô tả chi tiết
                    </div>
                    <?php echo $value->description ?>
                </div>
                <hr>
                <div class="product-review">
                    <div class="heading-panel">
                        <i class="fa fa-comments"></i> Nhận xét & Đánh giá
                    </div>
                    <p>Có 2 nhận xét về Đồng hồ {{$value->name}}</p>
                   
                   <ul class="aa-review-nav">
                     <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="{{asset('img/frontend/man/user8-128x128.jpg')}}" alt="girl image" style="width: 60px; height: 60px;">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Võ Văn Đức</strong> - <span>26 Tháng 3, 2016</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star-o"></span>
                            </div>
                            <p>Sản phẩm rất đẹp. Nhân viên tư vấn khá nhiệt tình</p>
                          </div>
                        </div>
                      </li>
                   </ul>
                   <div class="aa-your-rating">
                     <p>Đánh giá</p>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                   </div>
                   <!-- review form -->
                   <form action="" class="aa-review-form">
                      <div class="form-group">
                        <label for="message">Nhận xét</label>
                        <textarea class="form-control" rows="3" id="message" placeholder="Bạn có nhận xét gì..."></textarea>
                      </div>
                      <button type="submit" class="btn btn-default aa-review-submit">Gửi nhận xét</button>
                   </form>
                 </div>                    
                </div>        
            @endforeach  
          </div>
        </div>
        <div class="col-md-4">
            <div class="aa-product-details-area">
                <div class="panel-title-area">
                    <i class="fa fa-info"></i> Thông số kỹ thuật
                </div>
                <div class="table-condensed card">
                    @foreach($product as $value)
                    <table class="table" border="0">
                        <tbody>
                            <tr class="tr-0" valign="top">
                                <td class="title_charactestic" width="50%">Mã sản phẩm:</td>
                                <td class="content_charactestic">{{$value->code}}</td>
                            </tr>
                            <tr class="tr-0" valign="top">
                                <td class="title_charactestic" width="50%">Thương hiệu:</td>
                                <td class="content_charactestic"><?php if ($value->product_category_id == '1') echo 'Orient'; elseif ($value->product_category_id == '2') echo 'Seiko'; elseif ($value->product_category_id == '3') echo 'Casio'; elseif ($value->product_category_id == '3') echo 'Casio'; else echo 'Citizen';?></td>
                            </tr>
                            <tr class="tr-0" valign="top">
                                <td class="title_charactestic" width="50%">Xuất xứ:</td>
                                <td class="content_charactestic">{{$value->origin}}</td>
                            </tr>
                            <tr class="tr-0" valign="top">
                                <td class="title_charactestic" width="50%">Kiểu máy:</td>
                                <td class="content_charactestic"><?php if ($value->type == '0') echo 'Quartz'; elseif($value->type == '1') echo 'Cơ tự động';else echo 'Eco-Driver';?></td>
                            </tr>
                            <tr class="tr-0" valign="top">
                                <td class="title_charactestic" width="50%">Kích cỡ:</td>
                                <td class="content_charactestic">{{$value->size}}</td>
                            </tr>
                            <tr class="tr-0" valign="top">
                                <td class="title_charactestic" width="50%">Chất liệu dây:</td>
                                <td class="content_charactestic"><?php if($value->wire_type == '0') echo 'Dây da'; elseif($value->wire_type == '1') echo 'Thép không gỉ';else echo 'Dây dù';?></td>
                            </tr>
                            <tr class="tr-0" valign="top">
                                <td class="title_charactestic" width="50%">Độ chịu nước:</td>
                                <td class="content_charactestic">{{$value->water_resistance}}</td>
                            </tr>
                            <tr class="tr-0" valign="top">
                                <td class="title_charactestic" width="50%">Giới tính:</td>
                                <td class="content_charactestic"><?php if ($value->gender == '0') echo 'Nam'; else echo "Nữ"; ?></td>
                            </tr>
                            <tr class="tr-0" valign="top">
                                <td class="title_charactestic" width="50%">Bảo hành:</td>
                                <td class="content_charactestic"><?php if($value->warranty == '0') echo '12 tháng';else echo '24 tháng';?></td>
                            </tr>
                        </tbody>
                    </table>
                    @endforeach
                </div>            
            </div>
            <div class="aa-product-details-area">
                <div class="panel-title-area">
                    <i class="fa fa-book"></i> Kiến thức đồng hồ
                </div>
              @foreach($news as $value)
              <div class="col-md-12 col-sm-12">
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
                    <a href="{{('/tin-tuc/'.$value->id)}}" class="aa-read-mor-btn">Xem thêm <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div>
              @endforeach                
            </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-12">
            <!-- Related product -->
            <div class="aa-product-related-item aa-product-details-area">
              <div class="heading-panel">
                <i class="fa fa-angle-double-right"></i> Sản phẩm liên quan
              </div>
              <div class="item-slider">
                   <ul class="aa-product-catg aa-related-item-slider">
                    <!-- start single product item -->
                    @foreach($latestProduct as $value)
                    <li>
                      <figure>
                        <a class="aa-product-img" href="{{URL::to('/chi-tiet-san-pham/'.$value->id)}}"><img src="/uploads/products/{{$value->image}}" alt="polo shirt img" style="width: 250px; height: 250px"></a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">{{$value->name}}</a></h4>
                          <span class="aa-product-price">{{ number_format($value->price,0)}}<sup>đ</sup></span>
                        </figcaption>
                      </figure>                     
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>
                    @endforeach                                                                                  
                  </ul>                 
              </div>

              <!-- quick view modal -->                  
              <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">                      
                    <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <div class="row">
                        <!-- Modal view slider -->
                        <div class="col-md-6 col-sm-6 col-xs-12">                              
                          <div class="aa-product-view-slider">                                
                            <div class="simpleLens-gallery-container" id="demo-1">
                              <div class="simpleLens-container">
                                  <div class="simpleLens-big-image-container">
                                      <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                          <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                      </a>
                                  </div>
                              </div>
                              <div class="simpleLens-thumbnails-container">
                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                  </a>                                    
                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                  </a>

                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal view content -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="aa-product-view-content">
                            <h3>T-Shirt</h3>
                            <div class="aa-price-block">
                              <span class="aa-product-view-price">$34.99</span>
                              <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                            <h4>Size</h4>
                            <div class="aa-prod-view-size">
                              <a href="#">S</a>
                              <a href="#">M</a>
                              <a href="#">L</a>
                              <a href="#">XL</a>
                            </div>
                            <div class="aa-prod-quantity">
                              <form action="">
                                <select name="" id="">
                                  <option value="0" selected="1">1</option>
                                  <option value="1">2</option>
                                  <option value="2">3</option>
                                  <option value="3">4</option>
                                  <option value="4">5</option>
                                  <option value="5">6</option>
                                </select>
                              </form>
                              <p class="aa-prod-category">
                                Category: <a href="#">Polo T-Shirt</a>
                              </p>
                            </div>
                            <div class="aa-prod-view-bottom">
                              <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <a href="#" class="aa-add-to-cart-btn">View Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                        
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div>
              <!-- / quick view modal -->   
            </div>  
          </div>
      </div>
    </div>
  </section>
@include('index.elements.footer')

