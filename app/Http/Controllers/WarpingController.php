<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warping;

class WarpingController extends Controller
{
    public function create()
    {
        return view('warpings.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'production_speed' => 'required|numeric',
            'efficiency' => 'required|numeric',
            'warp_length' => 'required|numeric',
            'yarn_count' => 'required|integer',
            'ends' => 'required|integer'
        ]);

        // Calculate total warp produced and total weight of warp
        $total_warp_produced = $request->production_speed * $request->efficiency * 60 * 8;
        $total_weight_of_warp = ($total_warp_produced * $request->ends) / (840 * $request->yarn_count);

        // Store in the database
        Warping::create([
            'production_speed' => $request->production_speed,
            'efficiency' => $request->efficiency,
            'warp_length' => $request->warp_length,
            'yarn_count' => $request->yarn_count,
            'ends' => $request->ends,
            'total_warp_produced' => $total_warp_produced,
            'total_weight_of_warp' => $total_weight_of_warp
        ]);

        return redirect()->route('warpings.index')->with('success', 'Warping data added successfully.');
    }

    public function index()
    {
        $warpings = Warping::all();
        return view('warpings.index', compact('warpings'));
    }
}
