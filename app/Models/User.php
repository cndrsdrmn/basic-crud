<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = ['id'];

    public static $rules = [
        'customer_fullname' => 'required',
        'shortname' => 'required',
        'kode_identitas' => 'required',
        'no_identitas' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'nama_ibu_kandung' => 'required',
        'alamat1' => 'required',
        'alamat2' => 'required',
        'pekerjaan_nasabah' => 'required',
        'alamat_tempat_bekerja1' => 'required',
        'alamat_tempat_bekerja2' => 'required',
        'jumlah_penghasilan' => 'required',
        'loan_amount' => 'required',
        'no_hp' => 'required',
        'email' => 'required',
        'golongan_darah' => 'required',
        'spouse_name' => 'required',
        'nik_pasangan' => 'required',
        'tgl_lahir_pasangan' => 'required',
        'bekerja_sebagai' => 'required',
        'no_rekening_pinjaman' => 'required',
        'photo_id' => 'required',
        'photo_usaha_mitra' => 'required',
        'instansi' => 'required',
    ];
}
