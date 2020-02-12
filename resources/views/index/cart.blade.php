@include('index.elements.header')
@include('index.elements.navbar')
@include('index.elements.banner')
 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
            <div class="cart-panel">
                <i class="fa fa-shopping-cart"></i> Thông tin giỏ hàng                
            </div>
           <div class="cart-view-table">
               <div class="table-responsive">
                  <table class="table">
                    <?php
                        $content = Cart::content();
                    ?>
                    <thead>
                      <tr>
                        <th>Hình ảnh</th>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Cập nhật</th>
                        <th>Xóa</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($content as $value)
                      <tr>
                        <td><a href="{{('/chi-tiet-san-pham/'.$value->id)}}"><img src="/uploads/products/{{$value->options->image}}" alt="img" style="height:60px; width:60px"></a></td>
                        <td><a class="aa-cart-title" href="{{('/chi-tiet-san-pham/'.$value->id)}}">{{$value->name}}</a></td>
                        <td>{{number_format($value->price,0)}}<sup>đ</sup></td>
                        <form action="{{URL::to('/gio-hang/update')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="rowId" value="{{$value->rowId}}">  
                            <td><input class="aa-cart-quantity" type="number" min="0" name="quantity" value="{{$value->qty}}"></td>
                            <td>
                                <?php
                                    $subtotal = $value->price * $value->qty;
                                    echo number_format($subtotal,0).'<sup>đ</td>';
                                 ?>
                            </td>
                            <td><button type="submit" name="update_qty" style="border: none;"><fa class="fa fa-undo" style="color: #4caf50;"></fa></button></td>                            
                        </form>
                        <td><a class="remove" href="{{('/gio-hang/delete/'.$value->rowId)}}"><fa class="fa fa-close"></fa></a></td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="cart-view-table">
               <div class="table-responsive">
                  <table class="table">
                        <tr>
                            <td style="border-right: none; border-bottom: none; float: left;">
                                <a href="{{('/')}}"><input class="aa-cart-view-btn" type="submit" value="Tiếp tục mua hàng"></a>
                            </td>
                            <th style="line-height: 50px; border-right: none;">Tổng cộng:</th>
                            <td colspan="4" style="border-right: none;">
                                <b style="color: red;">{{Cart::subtotal().' '.'VNĐ'}}</b>
                            </td>
                            <td style="border-left: none;">
                               <a href="{{('/tai-khoan')}}"><input class="aa-cart-view-btn" type="submit" value="Thanh toán"></a>                                
                            </td>
                        </tr>
                  </table>
                </div>
            </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
@include('index.elements.footer')

