<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialItem extends Model
{
    use HasFactory;

    protected $table = 'material_items';
    protected $guarded = ['id'];
    public $timestamps = true;

    public function material() {
        return $this->belongsTo(Material::class);
    }
}
