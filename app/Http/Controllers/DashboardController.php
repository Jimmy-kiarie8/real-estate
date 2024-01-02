<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\DashboardService;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{

    protected $dashboard;

    public function __construct(DashboardService $dashboard)
    {
        $this->dashboard = $dashboard;
    }




    public function index()
    {

        $monthlyOrders = $this->getOrderData();
        $monthlyDelivery = $this->getStatusData('Delivered');
        $monthlyReturn = $this->getStatusData('Returned');

        return Inertia::render('Dashboard/index', [
            'monthlyDelivery' => $monthlyDelivery,
            'monthlyOrders' => $monthlyOrders,
            'monthlyReturn' => $monthlyReturn,
        ]);
    }


    public function analytics()
    {
        // $user = User::find(Auth::id());
        $dashboard = $this->dashboard;

        $total = $dashboard->salesCount();
        $data = [
            [
                'label' => 'Total Clients',
                'value' => number_format($dashboard->clientCount()),
                'icon' => 'mdi-account',
                'iconColor' => 'success',
            ],
            [
                'label' => 'Total Sales',
                'value' => number_format($dashboard->salesCount()),
                'icon' => 'mdi-cart',
                'iconColor' => 'error',
            ],
            [
                'label' => 'Total Title Deeds',
                'value' => number_format($dashboard->deedCount()),
                'icon' => 'mdi-book',
                'iconColor' => 'primary',
            ],
            [
                'label' => 'Total Plots',
                'value' => number_format($dashboard->plotCount()),
                'icon' => 'mdi-check-circle',
                'iconColor' => 'success',
            ],
            [
                'label' => 'Total Projects',
                'value' => number_format($dashboard->projectCount()),
                'icon' => 'mdi-check',
                'iconColor' => 'success',
            ],
            [
                'label' => 'Total Payments',
                'value' => number_format($dashboard->paymentCount()),
                'icon' => 'mdi-close',
                'iconColor' => 'error',
            ],
            [
                'label' => 'Total Invoices',
                'value' => number_format($dashboard->invoiceCount()),
                'icon' => 'mdi-phone-in-talk',
                'iconColor' => 'primary',
            ],
            [
                'label' => 'Total Projects',
                'value' => number_format($dashboard->projectCount()),
                'icon' => 'mdi-check-circle',
                'iconColor' => 'success',
            ],
            // [
            //     'label' => 'First Call Resolution Rate',
            //     'value' => number_format($dashboard->getFirstCallResolutionRate()),
            //     'icon' => 'mdi-check-circle',
            //     'iconColor' => 'success',
            // ],
            // [
            //     'label' => 'Average Call Time',
            //     'value' => number_format($dashboard->getAverageCallTime()),
            //     'icon' => 'mdi-timer',
            //     'iconColor' => 'info',
            // ],
            // [
            //     'label' => 'Total Amount Spent',
            //     'value' => number_format($dashboard->getTotalAmountSent()),
            //     'icon' => 'mdi-currency-usd',
            //     'iconColor' => 'warning',
            // ],
            // [
            //     'label' => 'Call Abandonment Rate',
            //     'value' => number_format($dashboard->getCallAbandonmentRate()),
            //     'icon' => 'mdi-alert-circle',
            //     'iconColor' => 'error',
            // ],
        ];

        $salesChart = $dashboard->getSaleAnalysis();
        $clientData = $dashboard->getClientAnalysis();
        $projectAnalysis = $dashboard->projectAnalysis();
        $paymentAnalysis = $dashboard->paymentAnalysis();
        // $LeadStatusDistributionData = $dashboard->generateLeadStatusDistributionData();
        // $SystemCallsTrendData = $dashboard->generateSystemCallsTrendData();
        // $AgentPerformanceData = $dashboard->generateAgentPerformanceData();

        return Inertia::render('Dashboard/index', [
            'data' => $data,
            'total' => $total,
            'salesChart' => $salesChart,
            'clientData' => $clientData,
            'projectAnalysis' => $projectAnalysis,
            'paymentAnalysis' => $paymentAnalysis,
            // 'LeadStatusDistributionData' => $LeadStatusDistributionData,
            // 'SystemCallsTrendData' => $SystemCallsTrendData,
            // 'AgentPerformanceData' => $AgentPerformanceData,
        ]);
    }
}
