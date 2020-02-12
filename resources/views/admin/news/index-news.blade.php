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
    <h3>Danh sách bài viết</h3>
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Tiêu đề</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Trạng thái</th>          
            <th scope="col">Hành động</th>
          </tr>
        </thead>
        @foreach($news as $value)
        <tbody>
          <tr>
            <td>{{$value->title}}</td>
            <td><img src="/uploads/news/{{$value->image}}" height="60px" width="100px"></td>
            <td>
                <?php
                    if($value->status == 0) {
                        echo 'Ẩn';
                    }else {
                        echo 'Hiện';
                    }
                ?>
            </td>       

            <td>
                <a href="#">
                    <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                </a>
                <a href="{{('/admin/news/edit/'.$value->id)}}">
                    <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                </a>
                <a href="{{('/admin/news/delete/'.$value->id)}}" onclick="return confirm('Xóa bài viết này?')">
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