<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = 'materials';
    protected $guarded = ['id'];
    public $timestamps = true;

    public function kebutuhan() {
        return $this->belongsTo(Kebutuhan::class);
    }

    public function materialItem() {
        return $this->belongsTo(MaterialItem::class);
    }
}
