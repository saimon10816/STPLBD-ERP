@extends('layouts.app')

@section('title', 'Sales Report')

@section('content')
    <h1>Sales Report</h1>

    <!-- Chart container (canvas) -->
    <canvas id="sales-chart" width="400" height="200"></canvas>

    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Fetch the sales chart data and render the chart
        const ctx = document.getElementById('sales-chart').getContext('2d');

        // Use fetch to get the chart data from the backend
        fetch('/charts/sales')
            .then(response => response.json())  // Parse the JSON response
            .then(data => {
                // Create the Chart.js chart
                const chart = new Chart(ctx, {
                    type: 'line',  // Set chart type (line chart)
                    data: {
                        labels: data.chart.labels,  // Use the labels (dates)
                        datasets: [{
                            label: data.chart.datasets[0].name,  // Dataset label (Sales)
                            data: data.chart.datasets[0].values,  // Sales data
                            borderColor: 'rgba(75, 192, 192, 1)',  // Line color
                            borderWidth: 2  // Line width
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true  // Y-axis starts at 0
                            }
                        }
                    }
                });
            });
    </script>
@endsection
