@extends('layouts.app')

@section('content')
@include('layouts.navadmin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class = "row justify-content-center">
                    <header class="card-header">
                    <h4 >Tạo tài khoản Admin</h4>
                    </header>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-md-6">
                    <div class="card">

                    <article class="card-body">
                    <form class="row g-3" method="POST" action="{{route('AdminAccounts.store')}}">
                        @csrf
                        <div class="form-group">
                            <label>Họ Tên</label>
                            <input type="text" class="form-control" placeholder="" name = "hoten">
                        </div> <!-- form-group end.// -->
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="" name ="password">
                            <!-- <small class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div> <!-- form-group end.// -->
                        <div class="col-md-6">
                            <label>Ngày sinh</label>
                            <input type="date" class="form-control" name = "ngaysinh">
                            </div> <!-- form-group end.// -->

                            <div class="col-md-6">
                            <label>CMND/CCCD</label>
                            <input type="text" class="form-control" name = "cccd">

                        </div> <!-- form-row.// -->
                        <div class="form-group">
                                <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gioitinh" value="Nam">
                            <span class="form-check-label"> Nam </span>
                            </label>
                            <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gioitinh" value="Nữ">
                            <span class="form-check-label"> Nữ</span>
                            </label>
                        </div> <!-- form-group end.// -->
                        <div class="col-md-6">
                            <label>Địa chỉ</label>
                            <input type="text" class="form-control" name = "diachi">
                            </div> <!-- form-group end.// -->
                         <div class="col-md-6">
                            <label>Số điện thoại</label>
                            <input type="text" class="form-control" name = "sdt">
                        </div> <!-- form-row.// -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="" name ="email">
                        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div> <!-- form-group end.// -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name = "themtaikhoan">Save </button>
                        </div> <!-- form-group// -->
                    </form>
                    </article> <!-- card-body end .// -->
                    </div> <!-- card.// -->
                    </div> <!-- col.//-->

                    </div> <!-- row.//-->


                    </div>
                    <!--container end.//-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
