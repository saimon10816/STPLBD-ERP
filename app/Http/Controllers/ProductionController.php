<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductionController extends Controller
{
    public function calculate(Request $request)
    {
        // Parameters from the form input
        $production_speed = $request->input('production_speed');
        $efficiency = $request->input('efficiency');
        $warp_length = $request->input('warp_length');
        $yarn_count = $request->input('yarn_count');
        $ends = $request->input('ends');

        // Example formula to calculate total warp production
        $total_warp_produced = $production_speed * $efficiency * 60 * 8;
        $total_weight_of_warp = ($total_warp_produced * $ends) / (840 * $yarn_count);

        // Return results to the view
        return view('production.result', compact('total_warp_produced', 'total_weight_of_warp'));
    }
}

