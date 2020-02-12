  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="{{'/'}}">Về HB-Watch</a></li>
              <li><a href="#">Thương hiệu<span class="caret"></span></a>
                 
                <ul class="dropdown-menu">
                    @foreach($brands as $brand)       
                       <li><a href="{{('/thuong-hieu/'.$brand->id)}}">{{$brand->name}}</a></li>
                    @endforeach                                         
                </ul>
                
              </li>
              <li><a href="#">Đồng hồ Nam<span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="#">Thương hiệu<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    @foreach($brands as $brand)
                        <li><a href="#">{{$brand->name}}</a></li>      
                    @endforeach
                                                      
                    </ul>
                  </li>
                  <li><a href="#">Mức giá<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Dưới 2 triệu</a></li>
                      <li><a href="#">Từ 2 triệu đến 5 triệu</a></li>
                      <li><a href="#">Từ 5 triệu đến 10 triệu</a></li>
                      <li><a href="#">Trên 10 triệu</a></li>                                      
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#">Đồng hồ Nữ<span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="#">Thương hiệu<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    @foreach($brands as $brand)
                        <li><a href="#">{{$brand->name}}</a></li>      
                    @endforeach                                     
                    </ul>
                  </li>
                  <li><a href="#">Mức giá<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Dưới 2 triệu</a></li>
                      <li><a href="#">Từ 2 triệu đến 5 triệu</a></li>
                      <li><a href="#">Từ 5 triệu đến 10 triệu</a></li>
                      <li><a href="#">Trên 10 triệu</a></li>                                      
                    </ul>
                  </li>
                </ul>
              </li>
             <li><a href="#">Phụ kiện<span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="#">Dây da</a></li>
                  <li><a href="#">Hộp đựng đồng hồ</a></li>               
                </ul>
              </li>
              <li><a href="{{('/tin-tuc')}}">Kiến thức</a></li>
              <li><a href="#">Liên hệ</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->