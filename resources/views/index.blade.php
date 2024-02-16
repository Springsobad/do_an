@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quản lý người dùng</h3>
                    </div>
                    <div class="col-md-6">
                        <a href = "{{route('nguoidung.create')}}" class ="btn btn-primary float-end">Thêm mới</a>
                    </div>
                </div>
            </div>
            <div class="car-body">
                @if (Session::has('thong bao'))
                    <div class="alert alert-success">
                        {{ Session::get('thong bao') }}
                    </div>
                @endif
                <table class ="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã</th>
                            <th>Họ và tên</th>
                            <th>Ngày sinh</th>
                            <th>Giới tính</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nguoidung as $user)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $user->Ma }}</td>
                                <td>{{ $user->HoTen }}</td>
                                <td>{{ $user->NgaySinh }}</td>
                                <td>{{ $user->GioiTinh }}</td>
                                <td>{{ $user->DiaChi }}</td>
                                <td>{{ $user->SDT }}</td>
                                <td>
                                    <form action ="{{ route('nguoidung.destroy', $user->id) }}" method="POST">
                                        <a href ="{{ route('nguoidung.edit', $user->id) }}" class="btn btn-info">Sửa thông tin</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type ="submit" class ="btn btn-danger">Xóa</button>
                                    </form> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>    
            </div> 
        </div>
    </div>
@endsection