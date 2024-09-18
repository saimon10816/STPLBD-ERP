<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    // Display all sales
    public function index()
    {
        $sales = Sale::all();  // Fetch all sales
        return view('sales.index', compact('sales'));
    }

    // Show form to create a new sale
    public function create()
    {
        return view('sales.create');
    }

    // Store a new sale in the database
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'total_amount' => 'required|numeric',
            'sale_date' => 'required|date',
        ]);

        // Create a new sale
        Sale::create($request->all());

        return redirect()->route('sales.index')->with('success', 'Sale recorded successfully');
    }
    public function salesReport()
    {
        // Create a chart for sales data
        $chart = Charts::database(Sale::all(), 'bar', 'highcharts')
            ->title('Sales Overview')
            ->elementLabel('Total Sales')
            ->dimensions(1000, 500)
            ->responsive(false)
            ->groupByDay();

        // Pass the chart to the view
        return view('sales.report', compact('chart'));
    }
    public function show($id)
    {
        // Try to find the sale by its ID, throw 404 if not found
        $sale = Sale::findOrFail($id);

        // Pass the sale data to the 'sales.show' view
        return view('sales.show', compact('sale'));
    }
}

