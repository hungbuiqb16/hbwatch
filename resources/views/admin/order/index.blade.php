@extends('admin.layout.layout')
@section('content')
<div class="container">
    <!-- flash-message -->
  @if(Session::has('message'))
      <div class="text-center alert alert-success">
          <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">&times;</a><i class="fas fa-check-circle"></i> {!! session('message') !!}
      </div>
  @endif
  <!-- end flash-message -->
  <div class="row">
  	<h3 class="text-center">Liệt kê đơn hàng</h3>
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Tổng giá tiền</th>
            <th scope="col">Tình trạng</th>           
            <th scope="col">Hành động</th>
          </tr>
        </thead>
        @foreach($orders as $order)
        <tbody>
          <tr>
          	<td>{{$order->fname}}</td>
            <td>{{$order->total}}</td>
            <td>{{$order->status}}</td>
            <td>
                <a href="{{('/admin/order/view/'.$order->id)}}">
                    <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                </a>
                <a href="{{('/admin/order/delete/'.$order->id)}}" onclick="return confirm('Xóa đơn hàng này?')">
                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                </a>
            </td>
          </tr>
         @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection