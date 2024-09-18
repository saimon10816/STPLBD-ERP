<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    // Define the table associated with the Sale model
    protected $table = 'sales';

    // Define the fields that are mass assignable
    protected $fillable = [
        'customer_name',
        'total_amount',
        'sale_date',
    ];
}
