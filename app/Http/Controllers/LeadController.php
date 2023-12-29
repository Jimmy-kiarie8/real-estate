<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeadRequest;
use App\Http\Requests\UpdateLeadRequest;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {

        $leads = Lead::with(['agent', 'client'])->paginate(100);
        $agents = User::all();

        $leads->transform(function ($lead) {
            $lead->agent_name = ($lead->agent) ? $lead->agent->name : null;
            $lead->name = $lead->client->name;
            $lead->phone = $lead->client->phone;
            $lead->email = $lead->client->email;
            return $lead;
        });

        $jsonFile = public_path('data/leads.json'); // Get the full path to the JSON file

        if (file_exists($jsonFile)) {
            $jsonContents = file_get_contents($jsonFile);
            $jsonData = json_decode($jsonContents, true);


            foreach ($jsonData as $key => $item) {
                if ($item['type'] == 'select' && $item['model'] == 'agent_id') {
                    $jsonData[$key]['items'] = $agents;

                    foreach ($jsonData[$key]['items'] as &$product) {
                        $product['value'] = $product['id'];
                        $product['label'] = $product['name'];
                    }
                }
            }
        } else {
            return response('JSON file not found', 404);
        }


        // Client form
        $clientFile = public_path('data/clients.json'); // Get the full path to the JSON file

        if (file_exists($clientFile)) {
            $clientContents = file_get_contents($clientFile);
            $clientData = json_decode($clientContents, true);

            $client_data = $clientData;
        } else {
            return response('JSON file not found', 404);
        }

        // return $jsonData;

        $headers = [];
        $headers[] = ['title' => 'Created At', 'key' => 'created_at'];

        foreach ($jsonData as $item) {
            if ($item['table_display']) {

                $headers[] = [
                    'title' => $item['label'],
                    'key' => $item['model']
                ];
            }
        }

        $headers[] = ['title' => 'Actions', 'key' => 'actions'];

        $user = User::find(Auth::id());

        $analytics = [
            'Total Completed' => $user->getTotalCallsCompleted(),
            'Total Missed Calls' => $user->getTotalCallsMissed(),
            'Total Leads Contacted' => $user->getTotalLeadsContacted(),
            'Total Leads Converted' => $user->getTotalLeadsConverted(),
            'First Call Resolution Rate' => $user->getFirstCallResolutionRate(),
            'Average Call Time' => $user->getAverageCallTime(),
            'Total Amount Spent' => $user->getTotalAmountSent(),
            'Call Abandonment Rate' => $user->getCallAbandonmentRate(),
        ];


        return Inertia::render('Callcenter/index', [
            'leads' => $leads,
            'analytics' => $analytics,
            'form_data' => $jsonData,
            'client_data' => $client_data,
            'headers' => $headers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLeadRequest $request)
    {

        $data = $request->all();
        $dataValue = [];

        foreach ($data as $item) {
            $model = $item['model'];
            if ($item['type']  == 'radio') {
                $value = ($item['value'] == 'Yes') ? true : false;
            } else {
                $value = $item['value'];
            }

            $dataValue[$model] = $value;
        }
        Lead::create($dataValue);

        return redirect()->back()->with('message', 'Lead created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeadRequest $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {
        //
    }

    public function resolve($id)
    {
        Lead::find($id)->update(['status' => 'Completed']);
    }

    public function leadStatus(Request $request, $id)
    {
        $status = $request->status;
        $recall_date = $request->recall_date;
        $notes = $request->notes;
        Lead::find($id)->update([
            'status' => $status,
            'recall_date' => $recall_date,
            'notes' => $notes
        ]);
    }
}
