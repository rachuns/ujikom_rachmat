<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory;

    public $table = 'eskul';
    protected $primaryKey = 'eskul_id';
    protected $fillable = ['nm_eskul','jelakul','gbr_eskul'];
}
