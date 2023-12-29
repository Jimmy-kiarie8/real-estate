<?php

namespace App\Http\Controllers;

use App\Models\Callcenter;
use App\Models\Order;
use App\Models\User;
use App\Services\DataGeneratorService;
use App\Traits\CallCenterAnalytics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class DashboardController extends Controller
{
    use CallCenterAnalytics;

    protected $dataGeneratorService;

    public function __construct(DataGeneratorService $dataGeneratorService)
    {
        $this->dataGeneratorService = $dataGeneratorService;
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
        $user = User::find(Auth::id());


        $total = $user->getTotalLeads();
        $data = [
            [
                'label' => 'Total Completed',
                'value' => number_format($user->getTotalCallsCompleted()),
                'icon' => 'mdi-check',
                'iconColor' => 'success',
            ],
            [
                'label' => 'Total Missed Calls',
                'value' => number_format($user->getTotalCallsMissed()),
                'icon' => 'mdi-phone-missed',
                'iconColor' => 'error',
            ],
            [
                'label' => 'Total Leads Contacted',
                'value' => number_format($user->getTotalLeadsContacted()),
                'icon' => 'mdi-phone-in-talk',
                'iconColor' => 'primary',
            ],
            [
                'label' => 'Total Leads Converted',
                'value' => number_format($user->getTotalLeadsConverted()),
                'icon' => 'mdi-check-circle',
                'iconColor' => 'success',
            ],
            [
                'label' => 'Total System Calls Completed',
                'value' => number_format($this->getTotalSystemCallsCompleted()),
                'icon' => 'mdi-check',
                'iconColor' => 'success',
            ],
            [
                'label' => 'Total System Calls Missed',
                'value' => number_format($this->getTotalSystemCallsMissed()),
                'icon' => 'mdi-close',
                'iconColor' => 'error',
            ],
            [
                'label' => 'Total System Leads Contacted',
                'value' => number_format($this->getTotalSystemLeadsContacted()),
                'icon' => 'mdi-phone-in-talk',
                'iconColor' => 'primary',
            ],
            [
                'label' => 'Total System Leads Converted',
                'value' => number_format($this->getTotalSystemLeadsConverted()),
                'icon' => 'mdi-check-circle',
                'iconColor' => 'success',
            ],
            [
                'label' => 'First Call Resolution Rate',
                'value' => number_format($user->getFirstCallResolutionRate()),
                'icon' => 'mdi-check-circle',
                'iconColor' => 'success',
            ],
            [
                'label' => 'Average Call Time',
                'value' => number_format($user->getAverageCallTime()),
                'icon' => 'mdi-timer',
                'iconColor' => 'info',
            ],
            [
                'label' => 'Total Amount Spent',
                'value' => number_format($user->getTotalAmountSent()),
                'icon' => 'mdi-currency-usd',
                'iconColor' => 'warning',
            ],
            [
                'label' => 'Call Abandonment Rate',
                'value' => number_format($user->getCallAbandonmentRate()),
                'icon' => 'mdi-alert-circle',
                'iconColor' => 'error',
            ],
        ];

        $leadsChart = $this->dataGeneratorService->generateLeadData();
        $LeadData = $this->dataGeneratorService->generateLeadData();
        $AgentActivityData = $this->dataGeneratorService->generateAgentActivityData();
        $LeadsConversionData = $this->dataGeneratorService->generateLeadsConversionData();
        $LeadStatusDistributionData = $this->dataGeneratorService->generateLeadStatusDistributionData();
        $SystemCallsTrendData = $this->dataGeneratorService->generateSystemCallsTrendData();
        $AgentPerformanceData = $this->dataGeneratorService->generateAgentPerformanceData();

        return Inertia::render('Dashboard/index', [
            'data' => $data,
            'total' => $total,
            'leadsChart' => $leadsChart,
            'LeadData' => $LeadData,
            'AgentActivityData' => $AgentActivityData,
            'LeadsConversionData' => $LeadsConversionData,
            'LeadStatusDistributionData' => $LeadStatusDistributionData,
            'SystemCallsTrendData' => $SystemCallsTrendData,
            'AgentPerformanceData' => $AgentPerformanceData,
        ]);
    }
}
