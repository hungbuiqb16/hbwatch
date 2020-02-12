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
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Mã sản phẩm</th>
            <th scope="col">Thương hiệu</th>
            <th scope="col">Giá bán</th>   
            <th scope="col">Trạng thái</th>           
            <th scope="col">Hành động</th>
          </tr>
        </thead>
        @foreach($products as $product)
        <tbody>
          <tr>
            <th scope="row">{{$product->id}}</th>
            <td><img src="/uploads/products/{{$product->image}}" height="60px" width="60px"></td>
            <td>{{$product->name}}</td>
            <td>{{$product->code}}</td>
            <td>
                <?php
                    if($product->product_category_id == 1) {
                        echo 'Orient';
                    }elseif($product->product_category_id == 2) {
                        echo 'Seiko';
                    }elseif($product->product_category_id == 3) {
                        echo 'Casio';
                    }else {
                        echo 'Citizen';
                    }
                ?>
            </td>
            <td>{{$product->price}}</td>
            <td>
                <?php
                    if($product->status == 0) {
                        echo 'Còn hàng';
                    } else {
                        echo 'Hết hàng';
                    }
                ?>

            </td>
          

            <td>
                <a href="#">
                    <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                </a>
                <a href="{{('/admin/product/edit/'.$product->id)}}">
                    <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                </a>
                <a href="{{('/admin/product/delete/'.$product->id)}}" onclick="return confirm('Xóa sản phẩm này?')">
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