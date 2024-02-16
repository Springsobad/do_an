@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sửa thông tin</h3>
                    </div>
                    <div class="col-md-6">
                        <a href = "{{ route('nguoidung.index') }}" class ="btn btn-primary float-end">Danh sách người dùng</a>
                    </div>
                </div>
            </div>    
            <div class="card-body">
                <form action="{{ route('nguoidung.update', $nguoidung->id) }}" method ="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Mã</strong>
                                <input type = "text" name="Ma" value ="{{ $nguoidung->Ma }}" class ="form-control" placeholder="Nhập mã">
                            </div>
                            <div class="form-group">
                                <strong>Họ và tên</strong>
                                <input type = "text" name="HoTen" value ="{{ $nguoidung->HoTen }}" class ="form-control" placeholder="Nhập họ và tên">
                            </div>
                            <div class="form-group">
                                <strong>Ngày sinh</strong>
                                <input type = "date" name="NgaySinh" value ="{{ $nguoidung->NgaySinh }}" class ="form-control" placeholder="Nhập ngày sinh">
                            </div>
                            <div class="form-group">
                                <strong>Giới tính</strong>
                                <select name = "GioiTinh" class ="form-select">
                                    <option select>Chọn giới tính</option>
                                    <option value ="Nam" {{ $nguoidung->GioiTinh == "Nam" ? 'select': '' }}>Nam</option>
                                    <option value ="Nữ" {{ $nguoidung->GioiTinh == "Nữ" ? 'select': '' }}>Nữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <strong>Địa chỉ</strong>
                                <input type = "text" name="DiaChi" value ="{{ $nguoidung->DiaChi }}" class ="form-control" placeholder="Nhập địa chỉ">
                            </div>
                            <div class="form-group">
                                <strong>Số điện thoại</strong>
                                <input type = "text" name="SDT"  value ="{{ $nguoidung->SDT }}" class ="form-control" placeholder="Nhập số điện thoại">
                            </div>
                        </div>
                    </div>
                    <button type ="submit" class ="btm btn-success mt-2">Cập nhật</button>
                </form>
            </div>
        </div>    
    </div>    
@endsection