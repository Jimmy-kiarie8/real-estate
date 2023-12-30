<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Models\Client;
use App\Models\Plot;
use App\Models\Project;
use App\Models\Sale;
use App\Models\Saleofficer;
use App\Services\DataTransformService;
use Inertia\Inertia;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::paginate(100);

        $jsonFile = public_path('data/sales.json'); // Get the full path to the JSON file
         $jsonPayment = public_path('data/payment.json'); // Get the full path to the JSON file

        $trans = new DataTransformService;
        $jsonData = $trans->data_transform($jsonFile);

        $paymentData = $trans->data_transform($jsonPayment);

        $headers = [];
        $headers[] = ['title' => 'Created At', 'key' => 'created_at'];

        foreach ($jsonData as $item) {
            $headers[] = [
                'title' => $item['label'],
                'key' => $item['model']
            ];
        }

        $headers[] = ['title' => 'Actions', 'key' => 'actions'];

        return Inertia::render('Orders/Sales/index', [
            'data' => $sales,
            'form_data' => $jsonData,
            'headers' => $headers,
            'title' => 'Sales',
            'modelRoute' => 'sales',

            'payment_data' => $paymentData,
            'payment_route' => 'payment',
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
