@extends('admin.layout.layout')
@section('content')
<div class="container">
	{{-- Thông tin tài khoản mua hàng --}}
	<div class="row">
		<div class="card col-12">
		    <div class="card-header">
		        <h3 class="card-title">Thông tin khách hàng</h3>
		    </div>
		    <div class="card-body p-0">
		        <table class="table table-striped">
				  <thead>
				    <tr>
				      <th>Tên người đặt</th>
				      <th>Tên tài khoản</th>
				      <th>Email</th>
				      <th>Số điện thoại</th>
				    </tr>
				  </thead>
				  @foreach($customer as $value)
				  <tbody>
				    <tr>
				      <td>{{$value->fname}}</td>
				      <td>{{$value->name}}</td>
				      <td>{{$value->email}}</td>
				      <td>{{$value->phone}}</td>
				    </tr>
				  </tbody>
				  @endforeach
		        </table>
		    </div>
        </div>
	</div>
	{{-- Thông tin giao hàng --}}
	<div class="row">
		<div class="card col-12">
		    <div class="card-header">
		        <h3 class="card-title">Thông tin giao hàng</h3>
		    </div>
		    <div class="card-body p-0">
		        <table class="table table-striped">
				  <thead>
				    <tr>
				      <th>Người nhận</th>
				      <th>Email</th>
				      <th>Địa chỉ</th>
				      <th>SĐT</th>
				      <th>HT Thanh toán</th>
				      <th>Ghi chú</th>
				    </tr>
				  </thead>
				  @foreach($shipping as $value)
				  <tbody>
				    <tr>
				      <td>{{$value->name}}</td>
				      <td>{{$value->email}}</td>
				      <td>{{$value->address}}</td>
				      <td>{{$value->phone}}</td>
				      <td>{{$value->payment}}</td>
				      <td>{{$value->note}}</td>
				    </tr>
				  </tbody>
				  @endforeach
		        </table>
		    </div>
        </div>
	</div>
	<hr>
	{{-- Chi tiết đơn hàng --}}
	<div class="row">
		<div class="card col-12">
		    <div class="card-header">
		        <h3 class="card-title">Chi tiết đơn hàng</h3>
		    </div>
		    <div class="card-body p-0">
		        <table class="table table-striped">
				  <thead>
				    <tr>
				      <th>Tên sản phẩm</th>
				      <th>Số lượng</th>
				      <th>Giá</th>
				      <th>Thành tiền</th>
				    </tr>
				  </thead>
				  @foreach($order as $value)
				  <tbody>
				    <tr>
				      <td>{{$value->product_name}}</td>
				      <td>{{$value->product_qty}}</td>
				      <td>{{number_format($value->product_price,0)}}<sup>đ</sup></td>
				      <td>{{number_format($value->product_qty*$value->product_price,0)}}<sup>đ</sup></td>
				    </tr>
				  </tbody>
				  @endforeach
		        </table>
		    </div>
        </div>
	</div>
</div>
@endsection