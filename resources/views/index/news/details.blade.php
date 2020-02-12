@include('index.elements.header')
@include('index.elements.navbar')
@include('index.elements.banner')

  <!-- Blog Archive -->
  <section id="aa-blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-blog-archive-area">
            <div class="row">
              <div class="col-md-9">
                <!-- Blog details -->
                @foreach($news as $value)
                <div class="aa-blog-content aa-blog-details">
                  <article class="aa-blog-content-single">                        
                    <h2><a href="#">{{$value->title}}</a></h2>
                     <div class="aa-article-bottom">
                      <div class="aa-post-author">
                        Đăng bởi <a href="#"> Admin</a>
                      </div>
                      <div class="aa-post-date">
                        Ngày đăng: 11 tháng 2 năm 2016
                      </div>
                    </div>
                    <figure class="aa-blog-img">
                      <a href="#"><img src="/uploads/news/{{$value->image}}" alt="fashion img" style="height: auto; width: 100%;"></a>
                    </figure>
                    <p>{{$value->content}}</p>
                    <div class="blog-single-bottom">
                      <div class="row">
                        <div class="col-md-8 col-sm-6 col-xs-12">
                          <div class="blog-single-tag">
                            <span>Tags:</span>
                            <a href="#"></a>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="blog-single-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                  </article>
                  <!-- blog navigation -->
                  <div class="aa-blog-navigation">
                    <a class="aa-blog-prev" href="#"><span class="fa fa-arrow-left"></span>Trước</a>
                    <a class="aa-blog-next" href="#">Tiếp<span class="fa fa-arrow-right"></span></a>
                  </div>
                  <!-- Blog Comment threats -->
                  <div class="aa-blog-comment-threat">
                    <h3>Bình luận (1)</h3>
                    <div class="comments">
                      <ul class="commentlist">
                        <li>
                          <div class="media">
                            <div class="media-left">    
                                <img class="media-object news-img" src="img/testimonial-img-3.jpg" alt="img">      
                            </div>
                            <div class="media-body">
                             <h4 class="author-name">Charlie Balley</h4>
                             <span class="comments-date"> March 26th 2016</span>
                             <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                             <a href="#" class="reply-btn">Reply</a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="aa-blog-archive-pagination">
                      <nav>
                        <ul class="pagination">
                          <li>
                            <a href="#" aria-label="Previous">
                              <span aria-hidden="true">«</span>
                            </a>
                          </li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li>
                            <a href="#" aria-label="Next">
                              <span aria-hidden="true">»</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                  <!-- blog comments form -->
                  <div id="respond">
                    <h3 class="reply-title">Để lại bình luận</h3>
                    <form id="commentform">
                      <p class="comment-notes">
                        Địa chỉ email của bạn sẽ không công khai. Các trường được đánh dấu là bắt buộc <span class="required">*</span>
                      </p>
                      <p class="comment-form-author">
                        <label for="author">Họ tên <span class="required">*</span></label>
                        <input type="text" name="author" value="" size="30" required="required">
                      </p>
                      <p class="comment-form-email">
                        <label for="email">Email <span class="required">*</span></label>
                        <input type="email" name="email" value="" aria-required="true" required="required">
                      </p>
                      <p class="comment-form-comment">
                        <label for="comment">Nội dung</label>
                        <textarea name="comment" cols="45" rows="8" aria-required="true" required="required"></textarea>
                      </p>
                      <p class="form-allowed-tags">
                        Bạn có thể sử dụng <abbr title="HyperText Markup Language"></abbr> tags và các thuộc tính của HTML:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;s&gt; &lt;strike&gt; &lt;strong&gt; </code>
                      </p>
                      <p class="form-submit">
                        <input type="submit" name="submit" class="aa-browse-btn" value="Gửi bình luận">
                      </p>        
                    </form>
                  </div>
                </div>
              </div>
                @endforeach
              <!-- blog sidebar -->
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
                    <h3>Bài viết liên quan</h3>
                    <div class="aa-recently-views">
                      <ul>
                      	@foreach($relate as $value)
                        <li>
                          <a class="aa-cartbox-img" href="{{('/tin-tuc/'.$value->id)}}"><img src="/uploads/news/{{$value->image}}" alt="img"></a>
                          <div class="aa-cartbox-info">
                            <h4><a href="{{('/tin-tuc/'.$value->id)}}">{{$value->title}}</a></h4>
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