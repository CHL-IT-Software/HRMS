<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;

    protected $table = 'cuti';

    // Disable automatic timestamps
    public $timestamps = false;

    // Specify fillable attributes
    protected $fillable = ['nik', 'tahun', 'sisa_cuti'];
}
