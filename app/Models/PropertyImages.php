<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImages extends Model
{
    use HasFactory;

    protected $fillable =['properties_id','image','status'];

    public function property(){
        return $this->belongsTo(Properties::class);
    }
}
