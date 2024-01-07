<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NearByTags extends Model
{
    use HasFactory;

    protected $fillable = ['tag','status'];
}
