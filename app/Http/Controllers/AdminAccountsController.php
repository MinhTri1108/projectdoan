<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAccounts;

class AdminAccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('admincp.adminaccounts.index');
        $adminaccounts = AdminAccounts::latest()->get();

        if ($request->ajax()) {
            $data = adminaccounts::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->idadmin.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editBook">Edit</a>';

                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->idadmin.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Delete</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admincp.adminaccounts.index',compact('adminaccounts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('admincp.adminaccounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        print_r($_POST);
        print_r($_FILES);
        // $file = $request -> file('avatar');
        // $fileName = time() . '.' . $file ->getClientOriginalExtension();
        // $file->storeAs('public/storage/images', $fileName);
        // $accData =[
        //     'fname' => $request->fname ?? 'default',
        //     'lname' => $request->lname,
        //     'password' => $request->password,
        //     'dateofbirth' => $request->date,
        //     'cccd' => $request->cccd,
        //     'email' => $request->email,
        //     'sex' => $request->sex,
        //     'phone' => $request->phone,
        //     'address' => $request->address,
        //     'avatar' => $fileName
        // ];
        // AdminAccounts::create($accData);
        // return response()->json([
        //     'status' => 200
        // ]);
        // $data = $request->validate([
        //     'hoten' =>'required|max:255',
        //     'password' =>'required',
        //     'ngaysinh' =>'required',
        //     'cccd' =>'required|unique:adminaccounts',
        //     'gioitinh' =>'required',
        //     'diachi' =>'required',
        //     'sdt' =>'required',
        //     'email' =>'required'

        // ],
        // [
        //     'hoten.required' =>'Họ tên: Không được để trống',
        //     'password.required' =>'Password: Không được để trống',
        //     'ngaysinh.required' =>'Ngày sinh: Không được để trống',
        //     'cccd.required' =>'CCCD: Không được để trống',
        //     'gioitinh.required' =>'Giới tính: Không được để trống',
        //     'diachi.required' =>'Địa chỉ: Không được để trống',
        //     'sdt.required' =>'SDT: Không được để trống',
        //     'email.required' =>'Email: Không được để trống'

        // ]);
        // $adminaccounts = new AdminAccounts();
        // $adminaccounts->hoten = $data['hoten'];
        // $adminaccounts->password = $data['password'];
        // $adminaccounts->ngaysinh = $data['ngaysinh'];
        // $adminaccounts->cccd = $data['cccd'];
        // $adminaccounts->gioitinh = $data['gioitinh'];
        // $adminaccounts->diachi = $data['diachi'];
        // $adminaccounts->sdt = $data['sdt'];
        // $adminaccounts->email = $data['email'];
        // $adminaccounts->save();
        // return redirect()->back()->with('status', 'Them tk thanh cong');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
