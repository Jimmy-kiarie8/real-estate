<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlotRequest;
use App\Http\Requests\UpdatePlotRequest;
use App\Models\Plot;
use App\Models\Project;
use App\Services\DataTransformService;
use Inertia\Inertia;

class PlotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $plots = Plot::paginate();

        $jsonFile = public_path('data/plots.json'); // Get the full path to the JSON file

        $trans = new DataTransformService;
        $jsonData = $trans->data_transform($jsonFile);

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

        return Inertia::render('Plot/index', [
            'data' => $plots,
            'form_data' => $jsonData,
            'headers' => $headers,
            'title' => 'Plots',
            'modelRoute' => 'plot',
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
    public function store(StorePlotRequest $request)
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
        Plot::create($dataValue);

        return redirect()->back()->with('message', 'Contact created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plot $plot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plot $plot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlotRequest $request, Plot $plot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plot $plot)
    {
        //
    }
}
