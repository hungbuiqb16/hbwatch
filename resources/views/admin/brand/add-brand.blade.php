@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Product Brand</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{URL::to('/admin/brand/add')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
              
                <div class="card-body">
                  <div class="form-group">
                    <label>Brand Name</label>
                    <input type="text" class="form-control" name ="name" placeholder="Tên thương hiệu">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Chọn hình ảnh</label>
                      </div>
                    </div>
                    <div class="form-group">
                        <label>Show/Hidden</label>
                        <select name="status" class="form-control">
                            <option value="0">Show</option>
                            <option value="1">Hidden</option>
                        </select>
                      </div>
                  </div>             
                <div class="card-footer">
                  <button type="submit" name ="add" class="btn btn-primary">Add</button>
                </div>
                </div>
              </form>
            </div>       
        </div>
    </div>
</div>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
  })
</script>
@endsection