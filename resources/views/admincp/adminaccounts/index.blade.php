@extends('layouts.app')

@section('content')
@include('layouts.navadmin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class = "row">
                        <div class="col-md-10">
                            <h3 class="">Danh sách tài khoản Admin</h3>
                        </div>
                        <div class="col-md-2">
                            <!-- <a href="{{route('AdminAccounts.create')}}">Thêm tài khoản Admin</a> -->
                            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addAccountModal"><i
                            class="bi-plus-circle me-2"></i>Add Tài Khoản</button>
                        </div>
                        {{-- add new account modal start --}}
                        <div class="modal fade" id="addAccountModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        data-bs-backdrop="static" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="#" method="POST" id="add_account_form" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body p-4 bg-light">
                                <div class="row">
                                    <div class="col-lg">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                                    </div>
                                    <div class="col-lg">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="row">
                                    <div class="col-lg">
                                    <label for="date">Date of Birth</label>
                                    <input type="date" name="date" class="form-control" placeholder="Date of Birth" required>
                                    </div>
                                    <div class="col-lg">
                                    <label for="cccd">CMND/CCCD</label>
                                    <input type="text" name="cccd" class="form-control" placeholder="CMND/CCCD" required>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                </div>
                                <div class="row">
                                    <div class="col-lg">

                                    <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" value="Nam">
                                    <span class="form-check-label"> Nam </span>
                                    <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" value="Nữ">
                                    <span class="form-check-label"> Nữ</span>
                                    </div>

                                    <div class="col-lg">
                                    <label for="phone">Phone</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                                </div>
                                <div class="my-2">
                                    <label for="avatar">Select Avatar</label>
                                    <input type="file" name="avatar" class="form-control" required>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="add_account_btn" class="btn btn-primary">Add Account</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                        {{-- add new account modal end --}}

                        {{-- edit account modal start --}}
                        <div class="modal fade" id="editAccountModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        data-bs-backdrop="static" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="emp_id" id="emp_id">
                                <input type="hidden" name="emp_avatar" id="emp_avatar">
                                <div class="modal-body p-4 bg-light">
                                <div class="row">
                                    <div class="col-lg">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                                    </div>
                                    <div class="col-lg">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="row">
                                    <div class="col-lg">
                                    <label for="date">Date of Birth</label>
                                    <input type="date" name="date" class="form-control" placeholder="Date of Birth" required>
                                    </div>
                                    <div class="col-lg">
                                    <label for="lname">CMND/CCCD</label>
                                    <input type="text" name="cccd" class="form-control" placeholder="CMND/CCCD" required>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                </div>
                                <div class="row">
                                    <div class="col-lg">

                                    <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" value="Nam">
                                    <span class="form-check-label"> Nam </span>
                                    <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" value="Nữ">
                                    <span class="form-check-label"> Nữ</span>
                                    </div>

                                    <div class="col-lg">
                                    <label for="phone">Phone</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                                </div>
                                <div class="my-2">
                                    <label for="avatar">Select Avatar</label>
                                    <input type="file" name="avatar" class="form-control" required>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="edit_account_btn" class="btn btn-success">Update Account</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                        {{-- edit account modal end --}}



                        </div>
                    </div>
                </div>

                <div class="card-body" id="show_all_employees">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h1 class="text-center text-secondary my-5">Loading...</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script type="text/javascript">
    $(function () {
    $("#add_account_form").submit(function (e) {
        e.preventDefault;
        const formdata = new FormData(this);
        $("#add_account_btn").text("Adding...");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{route('AdminAccounts.store')}}",
            type: "POST",
            data: formdata,
            // cache: false,
            contentType: false,
            processData: false,
            success: function (res) {
                // console.log(res);
                if(res.status == 200)
                {
                    Swal.fire(
                        'Add!',
                        'Adminaccounts added successfully',
                        'success'
                    )
                }
                // $("#add_account_btn").text("Add Account");
                // $("#add_account_form")[0].reset();

                // // $("#addAccountModal").hide({complete: document.forms.namedItem("#add_account_form").reset();});
                // $("#addAccountModal").model("hide");
            },
        });
    });
});

</script>
@endsection

