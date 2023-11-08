<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dosen extends Model
{
    use HasFactory;
    protected $fillable = ['nip','nama','gender','tahun'];
    protected $guarded=['tahun'];
    use SoftDeletes;
}
