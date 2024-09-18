<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use Chartisan\PHP\Chartisan;

class SalesChartController extends Controller
{
    public function generate()
    {
        // Fetch sales data, group by date, and sum the total amounts
        $sales = Sale::selectRaw('DATE(sale_date) as date, SUM(total_amount) as total')
            ->groupBy('date')
            ->get();

        // Prepare labels (dates) and values (total sales)
        $labels = $sales->pluck('date')->toArray();
        $totals = $sales->pluck('total')->toArray();

        // Return the chart data as JSON using Chartisan
        return Chartisan::build()
            ->labels($labels)  // Chart labels (dates)
            ->dataset('Sales', $totals);  // Data for sales totals
    }
}

