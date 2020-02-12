@extends('admin.layout.layout')
@section('content')
    <div class="col-md-10">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Add Product</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" role="form" action="{{URL::to('/admin/product/add')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Product Brand</label>
                        <div class="col-md-9">
                            <select class="custom-select custom-select mb-3" name="product_category_id">
                                <option selected>------ Thương hiệu ------</option>
                                <option value="1">Orient</option>
                                <option value="2">Seiko</option>
                                <option value="3">Casio</option>
                                <option value="4">Citizen</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Product Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" name="name" placeholder="Tên sản phẩm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Image</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control input-md" name ="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-md-3 control-label">Description</label>
                         <div class="col-md-9">
                            <textarea id="editor1" name="description" rows="10" cols="80"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Origin</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" name="origin" placeholder="Xuất xứ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Code</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" name ="code" placeholder="Mã sản phẩm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Gender</label>
                        <div class="col-md-9">
                            <select class="custom-select custom-select mb-3" name="gender">
                                <option selected>------ Giới tính ------</option>
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Type</label>
                        <div class="col-md-9">
                            <select class="custom-select custom-select mb-3" name="type">
                                <option selected>------ Kiểu máy ------</option>
                                <option value="0">Quartz</option>
                                <option value="1">Cơ tự động</option>
                                <option value="2">Eco-Driver</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Size</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" name ="size" placeholder="Kích cỡ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Wire-Type</label>
                        <div class="col-md-9">
                            <select class="custom-select custom-select mb-3" name="wire_type">
                                <option selected>------ Loại dây ------</option>
                                <option value="0">Dây da</option>
                                <option value="1">Thép không gỉ</option>
                                <option value="2">Dây dù</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Water-resistance</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" name ="water_resistance" placeholder="Khả năng chống nước">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Warranty</label>
                        <div class="col-md-9">
                            <select class="custom-select custom-select mb-3" name="warranty">
                                <option selected>------ Thời gian bảo hành ------</option>
                                <option value="0">12 tháng</option>
                                <option value="1">24 tháng</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Price</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control input-md" name ="price" placeholder="Giá (.VNĐ)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_name" class="col-md-3 control-label">Status</label>
                        <div class="col-md-9">
                            <select class="custom-select custom-select mb-3" name="status">
                                <option selected>------ Tình trạng ------</option>
                                <option value="0">Còn hàng</option>
                                <option value="1">Hết hàng</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <button type="submit" name="add" class="btn btn-info">Add Product</button>
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

