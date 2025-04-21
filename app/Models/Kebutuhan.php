<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebutuhan extends Model
{
    use HasFactory;

    protected $table = 'kebutuhans';
    protected $guarded = ['id'];
    public $timestamps = true;
}
