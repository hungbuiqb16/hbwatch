@extends('admin.layout.layout')
@section('content')
<div class="container">
  @push('alertity')
    <script src="{{URL::asset('js/alertify/alertify.min.js')}}"></script>
  @endpush
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
            <th scope="col">Tên thương hiệu</th>
            <th scope="col">Logo</th>
            <th scope="col">Ẩn/Hiện</th>
            <th scope="col">Hành động</th>
          </tr>
        </thead>
        @foreach($brands as $brand)
        <tbody>
          <tr>
            <th scope="row">{{$brand->id}}</th>
            <td>{{$brand->name}}</td>
            <td><img src="/uploads/brands/{{$brand->image}}" height="25px" width="133px"></td>
            <td>
                <?php
                    if($brand->status == 0) {
                        echo 'Ẩn';
                    } else {
                        echo 'Hiện';
                    }
                ?>

            </td>
            <td>
                <a href="#">
                    <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                </a>
                <a href="{{('/admin/brand/edit/'.$brand->id)}}">
                    <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                </a>
                <a href="{{('/admin/brand/delete/'.$brand->id)}}" onclick="return confirm('Xóa thương hiệu này?')">
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