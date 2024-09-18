<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warping extends Model
{
    use HasFactory;

    // Define the table associated with the Warping model
    protected $table = 'warpings';

    // Define the fields that are mass assignable
    protected $fillable = [
        'production_speed',
        'efficiency',
        'warp_length',
        'yarn_count',
        'ends',
        'total_warp_produced',
        'total_weight_of_warp',
    ];
}
