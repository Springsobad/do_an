<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    use HasFactory;
    protected $fillable = [
        'Ma',
        'HoTen',
        'NgaySinh',
        'GioiTinh',
        'DiaChi',
        'SDT',
    ];
}
