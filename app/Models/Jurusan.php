<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    public $table = 'jurusan';
    protected $primaryKey = 'jurusan_id';
    protected $fillable = ['nm_jurusan','jelasan','gbr_jurusan'];
}
