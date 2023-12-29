<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChargeTypeRequest;
use App\Http\Requests\UpdateChargeTypeRequest;
use App\Models\ChargeType;
use Inertia\Inertia;

class ChargeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $charge = ChargeType::paginate(100);

        $jsonFile = public_path('data/charge.json'); // Get the full path to the JSON file

        if (file_exists($jsonFile)) {
            $jsonContents = file_get_contents($jsonFile);
            $jsonData = json_decode($jsonContents, true);

            $charge_form = $jsonData;

        } else {
            return response('JSON file not found', 404);
        }

        $headers = [];
        $headers[] = ['title' => 'Created At', 'key' => 'created_at'];

        foreach ($jsonData as $item) {
            $headers[] = [
                'title' => $item['label'],
                'key' => $item['model']
            ];
        }

        $headers[] = ['title' => 'Actions', 'key' => 'actions'];

        return Inertia::render('Charge/index', [
            'data' => $charge,
            'form_data' => $charge_form,
            'headers' => $headers,
            'title' => 'Charge Type',
            'modelRoute' => 'charge-type',
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
    public function store(StoreChargeTypeRequest $request)
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
        ChargeType::create($dataValue);

        return redirect()->back()->with('message', 'Charge created');
    }

    /**
     * Display the specified resource.
     */
    public function show(ChargeType $chargeType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChargeType $chargeType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChargeTypeRequest $request, ChargeType $chargeType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChargeType $chargeType)
    {
        //
    }
}
