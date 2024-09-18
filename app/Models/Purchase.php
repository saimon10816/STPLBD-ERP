<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    // Define the table associated with the Purchase model
    protected $table = 'purchases';

    // Define the fields that are mass assignable
    protected $fillable = [
        'supplier_name',
        'amount',
        'purchase_date',
    ];
}
