@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm mới</h3>
                    </div>
                    <div class="col-md-6">
                        <a href = "{{ route('nguoidung.index') }}" class ="btn btn-primary float-end">Danh sách người dùng</a>
                    </div>
                </div>
            </div>    
            <div class="card-body">
                <form action="{{ route('nguoidung.store') }}" method ="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Mã</strong>
                                <input type = "text" name="Ma" class ="form-control" placeholder="Nhập mã">
                            </div>
                            <div class="form-group">
                                <strong>Họ và tên</strong>
                                <input type = "text" name="HoTen" class ="form-control" placeholder="Nhập họ và tên">
                            </div>
                            <div class="form-group">
                                <strong>Ngày sinh</strong>
                                <input type = "date" name="NgaySinh" class ="form-control" placeholder="Nhập ngày sinh">
                            </div>
                            <div class="form-group">
                                <strong>Giới tính</strong>
                                <select name = "GioiTinh" class ="form-select">
                                    <option select>Chọn giới tính</option>
                                    <option value ="Nam">Nam</option>
                                    <option value ="Nữ">Nữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <strong>Địa chỉ</strong>
                                <input type = "text" name="DiaChi" class ="form-control" placeholder="Nhập địa chỉ">
                            </div>
                            <div class="form-group">
                                <strong>Số điện thoại</strong>
                                <input type = "text" name="SDT" class ="form-control" placeholder="Nhập số điện thoại">
                            </div>
                        </div>
                    </div>
                    <button type ="submit" class ="btm btn-success mt-2">Lưu thông tin</button>
                </form>
            </div>
        </div>    
    </div>    
@endsection