@extends('layouts.app')

@section('content')
@include('layouts.navadmin')
    <div class = "container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-door"></i> Home</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Danh sách tài khoản
                </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!-- <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        <li><a class="dropdown-item" href="{{route('AdminAccounts.index')}}">Danh sách tài khoản ADMIN</a></li>
                        <li><a class="dropdown-item" href="#">Danh sách tài khoản GIẢNG VIÊN</a></li>
                        <li><a class="dropdown-item" href="{{route('CollegeStudentAccounts.index')}}">Danh sách tài khoản SINH VIÊN</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-list-ul"></i> Quản lý Học Phần
                </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Danh sách học phần</a></li>
                        <li><a class="dropdown-item" href="#">Danh sách chương trình đào tạo</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-chalkboard-teacher"></i> Quản lý chung
                </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Quản lý khoa</a></li>
                        <li><a class="dropdown-item" href="#">Quản lý lịch làm việc</a></li>
                        <li><a class="dropdown-item" href="#">Quản lý thiết bị</a></li>
                    </ul>
                </li>

            </ul>

            </div>
        </div>
        </nav>
</div>
