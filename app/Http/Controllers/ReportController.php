<?php

namespace App\Http\Controllers;

use App\Models\Callcenter;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Illuminate\Support\Str;

class ReportController extends Controller
{
    public function index()
    {
        $users = User::all();
        return Inertia::render('Reports/index', [
            'users' => $users
        ]);
    }

    public function getHeader($data)
    {
        $headers = [];

        if (!empty($data)) {
            $firstRow = $data->first(); // Assuming it's a collection

            if ($firstRow) {
                foreach ($firstRow->toArray() as $key => $value) {
                    // Check if the key is not an internal Laravel attribute (starts with an underscore)
                    if (!Str::startsWith($key, '_')) {
                        $headers[] = [
                            'title' => ucfirst(str_replace('_', ' ', $key)),
                            'key' => $key,
                        ];
                    }
                }
            }
        }

        return  $headers;
    }
    public function generateAgentPerformanceReport(Request $request)
    {

        $date = [
            $request->start_date,
            $request->end_date
        ];
        $data = User::select(
            'users.name',
            DB::raw('COUNT(CASE WHEN callcenters.status = "completed" THEN 1 ELSE NULL END) as completed_count'),
            DB::raw('COUNT(CASE WHEN callcenters.status = "missed" THEN 1 ELSE NULL END) as missed_count'),
            DB::raw('COUNT(CASE WHEN leads.status = "converted" THEN 1 ELSE NULL END) as converted_count'),
            DB::raw('COUNT(leads.id) as total_leads')
        )
            ->leftJoin('callcenters', 'users.id', '=', 'callcenters.agent_id')
            ->leftJoin('leads', 'users.id', '=', 'leads.agent_id')
            ->groupBy('users.id', 'users.name')
            ->paginate(100);
        $headers = $this->getHeader($data);
        return response()->json(['data' => $data, 'headers' => $headers]);
    }

    public function generateLeadStatusReport(Request $request)
    {

        $date = [
            $request->start_date,
            $request->end_date
        ];
        $data = Lead::select(
            'status',
            DB::raw('COUNT(*) as count')
        )
            ->groupBy('status')
            ->paginate(100);


        $headers = $this->getHeader($data);
        return response()->json(['data' => $data, 'headers' => $headers]);
    }

    public function generateSystemCallsTrendReport(Request $request)
    {

        $date = [
            $request->start_date,
            $request->end_date
        ];
        $data = Callcenter::select(
            DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d") as date'),
            DB::raw('COUNT(*) as count')
        )
            ->groupBy('date')
            ->orderBy('date')
            ->paginate(100);


        $headers = $this->getHeader($data);
        return response()->json(['data' => $data, 'headers' => $headers]);
    }

    public function generateLeadsConversionComparisonReport(Request $request)
    {

        $date = [
            $request->start_date,
            $request->end_date
        ];
        $data = User::select(
            'users.name',
            DB::raw('COUNT(CASE WHEN leads.status = "converted" THEN 1 ELSE NULL END) as converted_count'),
            DB::raw('COUNT(leads.id) as total_count')
        )
            ->leftJoin('leads', 'users.id', '=', 'leads.agent_id')
            ->groupBy('users.id', 'users.name')
            ->paginate(100);


        $headers = $this->getHeader($data);
        return response()->json(['data' => $data, 'headers' => $headers]);
    }

    public function generateFirstCallResolutionRateReport(Request $request)
    {

        $date = [
            $request->start_date,
            $request->end_date
        ];
        $data = User::select(
            'users.name',
            DB::raw('COUNT(CASE WHEN callcenters.status = "completed" AND leads.status = "converted" THEN 1 ELSE NULL END) as resolved_count'),
            DB::raw('COUNT(CASE WHEN callcenters.status = "completed" THEN 1 ELSE NULL END) as completed_count')
        )
            ->leftJoin('callcenters', 'users.id', '=', 'callcenters.agent_id')
            ->leftJoin('leads', 'users.id', '=', 'leads.agent_id')
            ->groupBy('users.id', 'name')
            ->paginate(100);


        $headers = $this->getHeader($data);
        return response()->json(['data' => $data, 'headers' => $headers]);
    }

    public function generateAverageCallTimeReport(Request $request)
    {

        $date = [
            $request->start_date,
            $request->end_date
        ];
        $data = User::select(
            'name',
            DB::raw('AVG(callcenters.durationInSeconds) as average_call_time')
        )
            ->leftJoin('callcenters', 'users.id', '=', 'callcenters.agent_id')
            ->groupBy('users.id', 'name')
            ->paginate(100);


        $headers = $this->getHeader($data);
        return response()->json(['data' => $data, 'headers' => $headers]);
    }

    public function generateCallAbandonmentRateReport(Request $request)
    {

        $date = [
            $request->start_date,
            $request->end_date
        ];
        $data = User::select(
            'name',
            DB::raw('COUNT(CASE WHEN callcenters.status = "missed" THEN 1 ELSE NULL END) as missed_count'),
            DB::raw('COUNT(CASE WHEN callcenters.status = "initiated" THEN 1 ELSE NULL END) as initiated_count')
        )
            ->leftJoin('callcenters', 'users.id', '=', 'callcenters.agent_id')
            ->groupBy('users.id', 'name')
            ->paginate(100);


        $headers = $this->getHeader($data);
        return response()->json(['data' => $data, 'headers' => $headers]);
    }

    public function generateAgentActivityOverTimeReport(Request $request)
    {

        $date = [
            $request->start_date,
            $request->end_date
        ];
        $data = Callcenter::select(
            DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d") as date'),
            DB::raw('COUNT(*) as count')
        )
            ->where('agent_id', Auth::id())
            ->groupBy('date')
            ->orderBy('date')
            ->paginate(100);


        $headers = $this->getHeader($data);
        return response()->json(['data' => $data, 'headers' => $headers]);
    }

    public function generateTotalAmountSpentReport(Request $request)
    {

        $date = [
            $request->start_date,
            $request->end_date
        ];
        $data = User::select(
            'name',
            'amount_spent'
        )
            ->paginate(100);


        $headers = $this->getHeader($data);
        return response()->json(['data' => $data, 'headers' => $headers]);
    }

    public function generateOverallSystemSummaryReport(Request $request)
    {

        $date = [
            $request->start_date,
            $request->end_date
        ];
        $totalCompletedCalls = Callcenter::where('status', 'completed')->whereBetween('created_at', $date)->count();
        $totalMissedCalls = Callcenter::where('status', 'missed')->whereBetween('created_at', $date)->count();
        $totalLeadsContacted = Lead::where('status', 'contacted')->whereBetween('created_at', $date)->count();
        $totalLeadsConverted = Lead::where('status', 'converted')->whereBetween('created_at', $date)->count();

        $data = [
            'Total Completed Calls' => $totalCompletedCalls,
            'Total Missed Calls' => $totalMissedCalls,
            'Total Leads Contacted' => $totalLeadsContacted,
            'Total Leads Converted' => $totalLeadsConverted,
        ];

        $headers = [
            [
                'title' => 'Total Completed Calls',
                'key' => 'Total Completed Calls',
            ],
            [
                'title' => 'Total Leads Contacted',
                'key' => 'Total Leads Contacted',
            ],
            [
                'title' => 'Total Leads Converted',
                'key' => 'Total Leads Converted',
            ],
            [
                'title' => 'Total Missed Calls',
                'key' => 'Total Missed Calls',
            ],
        ];

        // $headers = $this->getHeader($data);
        return response()->json(['data' => [$data], 'headers' => $headers]);
    }
}
