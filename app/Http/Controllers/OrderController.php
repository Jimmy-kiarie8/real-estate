<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Client;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Cart;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with(['client', 'location'])->paginate(100);

        $orders->transform(function($client) {
            $client->client_name = $client->client->name;
            $client->client_phone = $client->client->phone;
            $client->location_name = $client->location->location;
            $client->client_address = $client->client->address;
            return $client;
        });

        $jsonFile = public_path('data/orders.json'); // Get the full path to the JSON file

        if (file_exists($jsonFile)) {
            $jsonContents = file_get_contents($jsonFile);
            $jsonData = json_decode($jsonContents, true);

            $order_form = $jsonData;

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

        return Inertia::render('Ordermanagement/Orders/index', [
            'orders' => $orders,
            'form_data' => $order_form,
            'headers' => $headers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::paginate();
        $jsonFile = public_path('data/orders.json'); // Get the full path to the JSON file

        if (file_exists($jsonFile)) {
            $jsonContents = file_get_contents($jsonFile);
            $jsonData = json_decode($jsonContents, true);

            $order_form = $jsonData;
        } else {
            return response('JSON file not found', 404);
        }


        // Clients
        $clientFile = public_path('data/clients.json'); // Get the full path to the JSON file

        if (file_exists($clientFile)) {
            $jsonContents = file_get_contents($clientFile);
            $clientData = json_decode($jsonContents, true);

            $client_form = $clientData;
        } else {
            return response('JSON file not found', 404);
        }

        // return $client_form;



        return Inertia::render('Ordermanagement/Orders/create', [
            'products' => $products,
            'form_data' => $order_form,
            'client_form' => $client_form,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        // return $request->all();
        DB::beginTransaction();

        try {
            $client = $request->client;

            $clientData = [];
            foreach ($client as $item) {
                $model = $item['model'];

                    if ($item['type']  == 'radio') {
                        $value = ($item['value'] == 'Yes') ? true : false;
                    } else {
                        $value = $item['value'];
                    }
                $clientData[$model] = $value;
            }

            $client = User::create($clientData);


            $form_data = $request->form_data;
            $products = $request->products;
            $dataValue = [];

            foreach ($form_data as $item) {
                $model = $item['model'];
                if ($item['type']  == 'radio') {
                    $value = ($item['value'] == 'Yes') ? true : false;
                } else {
                    $value = $item['value'];
                }

                $dataValue[$model] = $value;
            }
            $dataValue['order_no'] = make_reference_id('ORD', 5);
            $dataValue['location_id'] = 1;
            $dataValue['client_id'] = $client->id;
            $dataValue['status'] = 'New';
            $dataValue['delivery_date'] = Carbon::parse($dataValue['delivery_date'])->format('Y-m-d');
            // return $dataValue;
            $order = Order::create($dataValue);


            foreach ($products as $key => $product) {
                // dd($product);
                $order_product = new OrderProduct();
                $order_product->product_id = $product['id'];
                $order_product->order_id = $order->id;
                $order_product->quantity = $product['quantity'];
                $order_product->price = $product['price'];
                $order_product->save();
            }
            DB::commit();
            return redirect()->back()->with('message', 'Order created');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }

    public function order(Request $request)
    {
        // return $request->all();

        DB::beginTransaction();

        try {
            $client = [
                'name' => $request->billing_first_name,
                'email' => $request->billing_email,
                'phone' => $request->billing_phone,
                'gender' => '',
                'address' => $request->billing_address_1,
            ];

            // $client = User::create($client);
            $client = Auth::user();

            $cart_items = Cart::getContent();

            $products = [];

            foreach ($cart_items as $item) {
                // return $item;
                $product = [];
                $product['id'] = $item->id;
                $product['product_name'] = $item->name;
                $product['price'] = $item->price;
                $product['quantity'] = (int)$item->quantity;
                $products[] = $product;
            }



            $dataValue = [];

            $dataValue['order_no'] = make_reference_id('ORD', 5);
            $dataValue['location_id'] = 1;
            $dataValue['platform'] = 'Online shop';
            $dataValue['client_id'] = $client->id;
            $dataValue['status'] = 'New';
            $dataValue['amount'] = Cart::getSubTotal();

            // $dataValue['delivery_date'] = Carbon::parse($dataValue['delivery_date'])->format('Y-m-d');
            // return $dataValue;
            $order = Order::create($dataValue);



            foreach ($products as $key => $product) {
                // dd($product);
                $order_product = new OrderProduct();
                $order_product->product_id = $product['id'];
                $order_product->order_id = $order->id;
                $order_product->quantity = $product['quantity'];
                $order_product->price = $product['price'];
                $order_product->save();
            }
            DB::commit();
            return redirect()->back()->with('message', 'Order created');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
