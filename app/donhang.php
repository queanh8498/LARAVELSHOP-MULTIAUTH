<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    const     CREATED_AT    = 'dh_ngaytaomoi';
    const     UPDATED_AT    = 'dh_ngaycapnhat';
    protected $table        = 'donhang';
    protected $fillable     = ['dh_thoigiandathang', 'dh_thoigiannhanhang', 'dh_diachi', 'dh_dienthoai', 'dh_dathanhtoan', 'dh_ngaylapphieugiao', 'dh_ngaygiaohang', 'dh_ngaytaomoi', 'dh_ngaycapnhat', 'dh_trangthai', 'vc_id', 'tt_id'];
    protected $guarded      = ['dh_id'];
    protected $primaryKey   = 'dh_id';
    protected $dates        = ['dh_thoigiandathang', 'dh_thoigiannhanhang', 'dh_ngaylapphieugiao', 'dh_ngaygiaohang', 'dh_ngaytaomoi', 'dh_ngaycapnhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}