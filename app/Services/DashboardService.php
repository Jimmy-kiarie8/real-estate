<?php

namespace App\Services;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\Payment;
use App\Models\Plot;
use App\Models\Project;
use App\Models\Sale;
use App\Models\Titledeed;
use Illuminate\Support\Facades\DB;

class DashboardService
{

    public function clientCount()
    {
        // Logic to count total clients
        return Client::count();
    }

    public function salesCount()
    {
        // Logic to aggregate sales data
        return Sale::count();
    }

    public function deedCount()
    {
        // Logic to count the number of title deeds issued
        return Titledeed::count();
    }
    public function plotCount()
    {
        // Logic to count the number of title deeds issued
        return Plot::count();
    }
    public function projectCount()
    {
        // Logic to count the number of title deeds issued
        return Project::count();
    }
    public function paymentCount()
    {
        // Logic to count the number of title deeds issued
        return Payment::sum('amount_paid');
    }
    public function invoiceCount()
    {
        // Logic to count the number of title deeds issued
        return Invoice::count();
    }

    public function getSaleAnalysis()
    {
        // Logic to generate data for graphical analysis (e.g., sales trends, client demographics)
        $data = Sale::select(
            DB::raw('DATE_FORMAT(created_at, "%b") as month'),
            DB::raw('COUNT(*) as count')
        )
            ->groupBy('month')
            ->orderBy('month', 'Desc')
            ->get();

        $labels = $data->pluck('month')->toArray();
        $counts = $data->pluck('count')->toArray();

        $sales = [
            'labels' => $labels,
            'datasets' => [
                [
                    'data' => $counts,
                    'backgroundColor' => ['#77CEFF', '#0079AF', '#123E6B', '#97B0C4', '#A5C8ED'],
                ],
            ],
        ];

        return $sales;
    }
    public function getClientAnalysis()
    {
        // Logic to generate data for graphical analysis (e.g., sales trends, client demographics)
        $data = Client::select(
            DB::raw('DATE_FORMAT(created_at, "%b") as month'),
            DB::raw('COUNT(*) as count')
        )
            ->groupBy('month')
            ->orderBy('month', 'Desc')
            ->get();

        $labels = $data->pluck('month')->toArray();
        $counts = $data->pluck('count')->toArray();

        $clients = [
            'labels' => $labels,
            'datasets' => [
                [
                    'data' => $counts,
                    'backgroundColor' => ['#77CEFF', '#0079AF', '#123E6B', '#97B0C4', '#A5C8ED'],
                ],
            ],
        ];

        return $clients;
    }
}
