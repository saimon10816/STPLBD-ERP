<?php

namespace App\Http\Controllers;  // Ensure the namespace is correct

use Illuminate\Http\Request;  // Import other necessary classes
use Chartisan\PHP\Chartisan;  // For chart generation (if needed)
use App\Models\Sale;  // Import the Sale model
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
