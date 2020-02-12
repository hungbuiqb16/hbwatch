@include('index.elements.header')
@include('index.elements.navbar')

{{-- Main section --}}
<section id="aa-error">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-error-area">
            <h2 style="color: green"><i class="fa fa-check-circle"></i></h2>
            <span>Đặt hàng thành công</span>
            <p>Cảm ơn quý khách đã đặt hàng trên <b>hbwatch</b></p>
            <p>Nhân viên chúng tôi sẽ gọi lại để xác nhận đơn hàng và gửi hàng cho quý khách trong vòng 24h</p>
            <p>Mọi thắc mắc vui lòng liên hệ hotline: 0352893665</p>
            <a href="{{('/')}}"> Tiếp tục mua hàng</a>
          </div>
        </div>
      </div>
    </div>
</section>
{{-- /Main section--}}

@include('index.elements.footer')