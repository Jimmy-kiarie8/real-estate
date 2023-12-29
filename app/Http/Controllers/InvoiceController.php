<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Models\Invoice;
use App\Models\Client;
use App\Models\Saleofficer;
use Inertia\Inertia;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoice = Invoice::paginate(100);
        $clients = Client::select('id','name')->take(100)->get();
        $sale_officer = Saleofficer::select('id','name')->take(100)->get();

        $jsonFile = public_path('data/invoice.json'); // Get the full path to the JSON file

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

        return Inertia::render('Invoice/index', [
            'data' => $invoice,
            'form_data' => $jsonData,
            'headers' => $headers,
            'title' => 'Invoice',
            'modelRoute' => 'invoice',
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
    public function store(StoreInvoiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
