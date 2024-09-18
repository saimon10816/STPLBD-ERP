<?php

namespace App\Http\Controllers;

use App\Models\Product;  // Import the Product model
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    // Display all products in the inventory
    public function index()
    {
        $products = Product::all();  // Fetch all products from the database
        return view('inventory.index', compact('products'));  // Pass products to the view
    }

    // Show form to add a new product
    public function create()
    {
        return view('inventory.create');
    }

    // Store a new product in the database
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'stock' => 'required|integer',
        ]);

        // Create a new product
        Product::create($request->all());

        return redirect()->route('inventory.index')->with('success', 'Product added successfully');
    }
}
