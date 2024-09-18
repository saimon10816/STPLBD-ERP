<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Define the table associated with the Customer model
    protected $table = 'customers';

    // Define the fields that are mass assignable
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];
}

