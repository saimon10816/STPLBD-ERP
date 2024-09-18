<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Purchase;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function salesReport()
    {
        $sales = Sale::all();
        return view('reports.sales', compact('sales'));
    }

    public function purchaseReport()
    {
        $purchases = Purchase::all();
        return view('reports.purchases', compact('purchases'));
    }
}

