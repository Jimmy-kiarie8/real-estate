<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSaleofficerRequest;
use App\Http\Requests\UpdateSaleofficerRequest;
use App\Models\Category;
use App\Models\Client;
use App\Models\Saleofficer;
use App\Services\DataTransformService;
use Inertia\Inertia;

class SaleofficerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $saleofficers = Saleofficer::paginate(100);

        $jsonFile = public_path('data/sale-officer.json'); // Get the full path to the JSON file

        $trans = new DataTransformService;
        $jsonData = $trans->data_transform($jsonFile);

        $headers = [];
        $headers[] = ['title' => 'Created At', 'key' => 'created_at'];

        foreach ($jsonData as $item) {
            $headers[] = [
                'title' => $item['label'],
                'key' => $item['model']
            ];
        }

        // return  $jsonData;

        $headers[] = ['title' => 'Actions', 'key' => 'actions'];

        return Inertia::render('Saleofficer/index', [
            'data' => $saleofficers,
            'form_data' => $jsonData,
            'headers' => $headers,
            'title' => 'Sale Officer',
            'modelRoute' => 'saleofficers',
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
    public function store(StoreSaleofficerRequest $request)
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
        Saleofficer::create($dataValue);

        return redirect()->back()->with('message', 'Project created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Saleofficer $saleofficer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Saleofficer $saleofficer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSaleofficerRequest $request, Saleofficer $saleofficer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Saleofficer $saleofficer)
    {
        //
    }
}
