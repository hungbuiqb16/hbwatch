@extends('admin.layout.layout')
@section('content')
    <div class="col-md-10">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Thêm bài viết</h3>
            </div>
            <!-- form start -->
            <form class="form-horizontal" role="form" action="{{URL::to('/admin/news/add')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Tiêu đề</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" name="title" placeholder="Tiêu đề bài viết">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Tiêu đề không dấu</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" name="unmarked_title" placeholder="Tiêu đề không dấu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Hình ảnh</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control input-md" name ="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 control-label">Mô tả</label>
                         <div class="col-md-9">
                            <textarea name="description" rows="5" cols="80"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 control-label">Nội dung</label>
                         <div class="col-md-9">
                            <textarea id="editor1" name="content" rows="10" cols="80"></textarea>
                        </div>
                    </div>
                  </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Trạng thái</label>
                        <div class="col-md-9">
                            <select class="custom-select custom-select mb-3" name="status">
                                <option selected>------ Ẩn/Hiện ------</option>
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <button type="submit" name="add" class="btn btn-info">Thêm bài viết</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
@push('ckeditor')
    <script src="{{URL::asset('js/ckeditor/ckeditor.js')}}"></script>
@endpush
@endsection