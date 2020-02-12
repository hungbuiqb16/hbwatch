@include('index.elements.header')
@include('index.elements.navbar')
@include('index.elements.banner')
  <!-- Blog Archive -->
  <section id="aa-blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-blog-archive-area aa-blog-archive-2">
            <div class="row">
              <div class="col-md-9">
                <div class="aa-blog-content">
                  <div class="row">
                  	@foreach($news as $value)
                    <div class="col-md-4 col-sm-4">
                      <article class="aa-latest-blog-single">
                        <figure class="aa-blog-img">                    
                          <a href="{{('/tin-tuc/'.$value->id)}}"><img alt="img" src="/uploads/news/{{$value->image}}"></a>  
                            <figcaption class="aa-blog-img-caption">
                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                            <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                          </figcaption>                          
                        </figure>
                        <div class="aa-blog-info">
                          <h3 class="aa-blog-title"><a href="{{('/tin-tuc/'.$value->id)}}">{{$value->title}}</a></h3>
                          <p>{{$value->description}}</p> 
                          <a class="aa-read-mor-btn" href="{{('/tin-tuc/'.$value->id)}}">Xem tiếp <span class="fa fa-long-arrow-right"></span></a>
                        </div>
                      </article>
                    </div>
                    @endforeach                  
                  </div>
                </div>
                <!-- Blog Pagination -->
                <div class="aa-blog-archive-pagination">
                  <nav>
                    <ul class="pagination">
                      <li>
                        <a aria-label="Previous" href="#">
                          <span aria-hidden="true">«</span>
                        </a>
                      </li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li>
                        <a aria-label="Next" href="#">
                          <span aria-hidden="true">»</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="col-md-3">
                <aside class="aa-blog-sidebar">
                  <div class="aa-sidebar-widget">
                    <h3>Thương hiệu</h3>
                    <div class="tag-cloud">
                      @foreach($brands as $value)
                      <a href="{{('/thuong-hieu/'.$value->id)}}">{{$value->name}}</a>
                      @endforeach
                    </div>
                  </div>
                  <div class="aa-sidebar-widget">
                    <h3>Bài viết gần đây</h3>
                    <div class="aa-recently-views">
                      <ul>
                        @foreach($relate as $value)
                        <li>
                          <a class="aa-cartbox-img" href="{{('/tin-tuc/'.$value->id)}}"><img src="/uploads/news/{{$value->image}}" alt="img"></a>
                          <div class="aa-cartbox-info">
                            <h4><a href="#">{{$value->title}}</a></h4>
                            <p>11 tháng 2 năm 2020</p>
                          </div>                    
                        </li> 
                        @endforeach                                    
                      </ul>
                    </div>                            
                  </div>
                </aside>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Blog Archive -->
@include('index.elements.footer')