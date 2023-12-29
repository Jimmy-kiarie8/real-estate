<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Models\Client;
use App\Models\Plot;
use App\Models\Project;
use App\Models\Sale;
use App\Models\Saleofficer;
use Inertia\Inertia;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::paginate(100);
        $clients = Client::select('id','name')->take(100)->get();
        $plots = Plot::select('id','plot_no')->take(100)->get();
        $projects = Project::select('id','name')->take(100)->get();
        $sale_officer = Saleofficer::select('id','name')->take(100)->get();

        $jsonFile = public_path('data/sales.json'); // Get the full path to the JSON file

        if (file_exists($jsonFile)) {
            $jsonContents = file_get_contents($jsonFile);
            $jsonData = json_decode($jsonContents, true);


            foreach ($jsonData as $key => $item) {
                if ($item['type'] == 'select' && $item['model'] == 'client_id') {
                    $jsonData[$key]['items'] = $clients;

                    foreach ($jsonData[$key]['items'] as &$client) {
                        $client['value'] = $client['id'];
                        $client['label'] = $client['name'];
                    }
                } elseif ($item['type'] == 'select' && $item['model'] == 'sales_officer_id') {
                    $jsonData[$key]['items'] = $sale_officer;

                    foreach ($jsonData[$key]['items'] as &$sale) {
                        $sale['value'] = $sale['id'];
                        $sale['label'] = $sale['name'];
                    }
                } elseif ($item['type'] == 'select' && $item['model'] == 'plot_id') {
                    $jsonData[$key]['items'] = $plots;

                    foreach ($jsonData[$key]['items'] as &$plot) {
                        $plot['value'] = $plot['id'];
                        $plot['label'] = $plot['plot_no'];
                    }
                } elseif ($item['type'] == 'select' && $item['model'] == 'project_id') {
                    $jsonData[$key]['items'] = $projects;

                    foreach ($jsonData[$key]['items'] as &$project) {
                        $project['value'] = $project['id'];
                        $project['label'] = $project['name'];
                    }
                }
            }
        } else {
            return response('JSON file not found', 404);
        }

        // return $jsonData;

        $headers = [];
        $headers[] = ['title' => 'Created At', 'key' => 'created_at'];

        foreach ($jsonData as $item) {
            $headers[] = [
                'title' => $item['label'],
                'key' => $item['model']
            ];
        }

        $headers[] = ['title' => 'Actions', 'key' => 'actions'];

        return Inertia::render('Sales/index', [
            'data' => $sales,
            'form_data' => $jsonData,
            'headers' => $headers,
            'title' => 'Sales',
            'modelRoute' => 'sales',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSaleRequest $request)
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
        // return $dataValue;
        Sale::create($dataValue);

        return redirect()->back()->with('message', 'Sale created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSaleRequest $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
