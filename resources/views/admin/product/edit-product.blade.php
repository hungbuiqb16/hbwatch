@extends('admin.layout.layout')
@section('content')
    <div class="col-md-10">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Edit Product</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @foreach($products as $product)
            <form class="form-horizontal" role="form" action="{{URL::to('/admin/product/update/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Product Brand</label>
                        <div class="col-md-9">
                            <select class="custom-select custom-select mb-3" name="product_category_id">
                                <option selected>------ Thương hiệu ------</option>
                                <option value="1" <?php if ($product->product_category_id == '1') echo 'selected';?>>Orient</option>
                                <option value="2" <?php if ($product->product_category_id == '2') echo 'selected';?>>Seiko</option>
                                <option value="3" <?php if ($product->product_category_id == '3') echo 'selected';?>>Casio</option>
                                <option value="4" <?php if ($product->product_category_id == '4') echo 'selected';?>>Citizen</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Product Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" name="name" value="{{$product->name}}" placeholder="Tên sản phẩm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Image</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control input-md" name ="image">
                            <br>
                            <img src="/uploads/products/{{$product->image}}" alt="" style="width: 60px; height: 60px">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 control-label">Description</label>
                         <div class="col-md-9">
                            <textarea id="editor1" name="description" rows="10" cols="80">{{$product->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Origin</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" value="{{$product->origin}}" name="origin" placeholder="Xuất xứ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Code</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" name ="code" value="{{$product->code}}" placeholder="Mã sản phẩm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Gender</label>
                        <div class="col-md-9">
                            <select class="custom-select custom-select mb-3" name="gender">
                                <option selected>------ Giới tính ------</option>
                                <option value="0" <?php if ($product->gender == '0') echo 'selected';?>>Nam</option>
                                <option value="1" <?php if ($product->gender == '1') echo 'selected';?>>Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Type</label>
                        <div class="col-md-9">
                            <select class="custom-select custom-select mb-3" name="type">
                                <option selected>------ Kiểu máy ------</option>
                                <option value="0" <?php if ($product->type == '0') echo 'selected';?>>Quartz</option>
                                <option value="1" <?php if ($product->type == '1') echo 'selected';?>>Cơ tự động</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Size</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" name ="size" value="{{$product->size}}" placeholder="Kích cỡ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Wire-Type</label>
                        <div class="col-md-9">
                            <select class="custom-select custom-select mb-3" name="wire_type">
                                <option selected>------ Loại dây ------</option>
                                <option value="0" <?php if ($product->wire_type == '0') echo 'selected';?>>Dây da</option>
                                <option value="1" <?php if ($product->wire_type == '1') echo 'selected';?>>Thép không gỉ</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Water-resistance</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" name ="water_resistance"  value="{{$product->water_resistance}}" placeholder="Khả năng chống nước">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Warranty</label>
                        <div class="col-md-9">
                            <select class="custom-select custom-select mb-3" name="warranty">
                                <option selected>------ Thời gian bảo hành ------</option>
                                <option value="0" <?php if ($product->warranty == '0') echo 'selected';?>>12 tháng</option>
                                <option value="1" <?php if ($product->warranty == '1') echo 'selected';?>>24 tháng</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Price</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" name ="price" value="{{$product->price}}" placeholder="Giá (.VNĐ)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Status</label>
                        <div class="col-md-9">
                            <select class="custom-select custom-select mb-3" name="status">
                                <option selected>------ Tình trạng ------</option>
                                <option value="0" <?php if ($product->status == '0') echo 'selected';?>>Còn hàng</option>
                                <option value="1" <?php if ($product->status == '1') echo 'selected';?>>Hết hàng</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <button type="submit" name="save" class="btn btn-info">Save</button>
                    </div>
                @endforeach
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

