@include('index.elements.header')
@include('index.elements.navbar')
@include('index.elements.banner')

 <!-- Cart view section -->
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    <!-- Shipping Address -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                            Thông tin giao hàng
                        </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse ">
                        <div class="panel-body">
                         <form action="{{URL::to('/luu-thanh-toan')}}" method="POST">
                            {{csrf_field()}}
                             <div class="row">
                                <div class="col-md-12">
                                  <div class="aa-checkout-single-bill">
                                    <input type="text" name="name" placeholder="Họ và tên*">
                                  </div>                             
                                </div>
                              </div>  
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="aa-checkout-single-bill">
                                    <input type="email" name="email" placeholder="Email*">
                                  </div>                             
                                </div>
                                <div class="col-md-6">
                                  <div class="aa-checkout-single-bill">
                                    <input type="tel" name="phone" placeholder="Số điện thoại*">
                                  </div>
                                </div>
                              </div> 
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="aa-checkout-single-bill">
                                    <textarea cols="8" rows="3" name="address" placeholder="Địa chỉ*"></textarea>
                                  </div>                             
                                </div>                            
                              </div>   
                               <div class="row">
                                <div class="col-md-12">
                                  <div class="aa-checkout-single-bill">
                                    <textarea cols="8" rows="3" name="note" placeholder="Ghi chú"></textarea>
                                  </div>                             
                                </div>                            
                              </div>              
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="checkout-right">
                  <h4>Phương thức thanh toán</h4>
                  <div class="aa-payment-method">                    
                    <label for="cashdelivery"><input type="radio" id="cashdelivery" name="payment" value="COD"> Thanh toán khi nhận hàng </label>
                    <label for="paypal"><input type="radio" id="paypal" name="payment" value="ATM" checked> Thanh toán bằng thẻ ngân hàng </label>
                    <img src="{{asset('img/frontend/bank-logo.png')}}" border="0" alt="PayPal Acceptance Mark">    
                    <input type="submit" value="Đặt hàng" class="aa-browse-btn">               
                  </div>
                  </form>
                  <hr>
                  <h4>Chi tiết đơn hàng</h4>
                  <div class="aa-order-summary-area">
                    <table class="table table-responsive">
                    <?php
                        $content = Cart::content();
                    ?>
                      <thead>
                        <tr>
                          <th>Sản phẩm</th>
                          <th>Thành tiền</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach($content as $value)
                        <tr>
                          <td style="font-size: 13px">{{$value->name}}<strong> x  {{$value->qty}}</strong></td>
                          <td>{{number_format($value->price,0)}}<sup>đ</sup></td>
                        </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                         <tr>
                          <th>Tổng cộng</th>
                          <td style="color: red">{{Cart::subtotal().' '.'VNĐ'}}</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->

@include('index.elements.footer')
