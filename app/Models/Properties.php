<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PropertyImages;
class Properties extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'minprice',
        'maxprice',
        'type_id',
        'location',
        'nearby',
        'bedrooms',
        'bathrooms',
        'area_sqft',
        'lot_size_acres',
        'agent_id',
        'property_status',
        'completion_timeframe',
        'features',
        'status',
    ];

    public function images()
    {
        return $this->hasMany(PropertyImages::class);
    }

    public function apartmentconfiguration()
    {
        return $this->hasMany(ApartmentConfiguration::class);
    }

}
