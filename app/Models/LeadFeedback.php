<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadFeedback extends Model
{
    use HasFactory;
    protected $fillable = ['lead_id','comment','date_time','status'];
}
