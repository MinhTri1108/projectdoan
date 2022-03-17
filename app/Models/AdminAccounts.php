<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAccounts extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        // 'hoten' ,'password','ngaysinh','cccd','gender','diachi','sdt','email'
        // idadmin
        'fname',
        'lname',
        'password',
        'dateofbirth',
        'cccd',
        'email',
        'sex',
        'phone',
        'address',
        'avatar'
    ];
    protected $primaryKey = 'idadmin';
    protected $table = 'adminaccounts';
}
