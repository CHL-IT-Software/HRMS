<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index(){

        $karyawan = DB::table('karyawan')
        ->join('department','karyawan.kode_dept','=','department.kode_dept')
        ->orderBy('nama_lengkap')
        ->get();
        return view("karyawan.index", compact('karyawan'));
    }
}