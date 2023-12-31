<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Client;
use App\Models\Payment;
use App\Models\Sale;
use App\Services\DataTransformService;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $payments = Payment::paginate(100);

        $jsonFile = public_path('data/payment.json'); // Get the full path to the JSON file

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

        $headers[] = ['title' => 'Actions', 'key' => 'actions'];

        return Inertia::render('Orders/Payments/index', [
            'data' => $payments,
            'form_data' => $jsonData,
            'headers' => $headers,
            'title' => 'Payments',
            'modelRoute' => 'payment',
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
    public function store(StorePaymentRequest $request)
    {
        $data = $request->all();
        $trans = new DataTransformService;
        $dataValue = $trans->store($data);
        Payment::create($dataValue);

        return redirect()->back()->with('message', 'Contact created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request,  $id)
    {
        DB::beginTransaction();

        try {
            $sale = Sale::find($id);
            $data = $request->all();

            $trans = new DataTransformService;
            $dataValue = $trans->store($data);

            $dataValue['sale_id'] = $id;
            $payment = Payment::create($dataValue);

            $sale->paid_amount -= $payment->amount_paid;
            $sale->save();

            DB::commit();
            return redirect()->back()->with('message', 'Contact created');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Payment::find($id)->delete();
    }
}
