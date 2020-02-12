@extends('admin.layout.layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach($brands as $brand)
        <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Product Brand</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{URL::to('/admin/brand/update/'.$brand->id)}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
              
                <div class="card-body">
                  <div class="form-group">
                    <label>Brand Name</label>
                    <input type="text" class="form-control" name ="name" value ="{{$brand->name}}" placeholder="Tên thương hiệu">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Chọn hình ảnh</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <div class="form-group">
                       <img src="/uploads/brands/{{$brand->image}}" alt="" width="133px" height="25px">   
                    </div>
                    
                    <div class="form-group">
                        <label>Show/Hidden</label>
                        <select name="status" class="form-control">
                            <option value="0" <?php if($brand->status =='0') echo 'selected';?>>Hidden</option>
                            <option value="1" <?php if($brand->status =='1') echo 'selected';?>>Show</option>
                        </select>
                      </div>
                  </div>     
                <div class="card-footer">
                  <button type="submit" name ="add" class="btn btn-primary">Save</button>
                </div>
                </div>
              </form>
            </div>       
        </div>
        @endforeach
    </div>
</div>
@endsection