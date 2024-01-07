<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApartmentConfiguration extends Model
{
    use HasFactory;

    protected $fillable = ['properties_id','beds','baths','cars','a_price','internal','a_minprice','a_maxprice','status'];
    
    public function properties(){
        return $this->belongsTo(Properties::class);
    }
}
