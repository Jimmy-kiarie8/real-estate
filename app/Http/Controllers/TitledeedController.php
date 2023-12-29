<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTitledeedRequest;
use App\Http\Requests\UpdateTitledeedRequest;
use App\Models\Client;
use App\Models\Titledeed;
use Inertia\Inertia;

class TitledeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titledeed = Titledeed::paginate(100);
        $clients = Client::select('id','name')->take(100)->get();

        $jsonFile = public_path('data/title-deed.json'); // Get the full path to the JSON file

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

        return Inertia::render('Titledeed/index', [
            'data' => $titledeed,
            'form_data' => $jsonData,
            'headers' => $headers,
            'title' => 'Title Deed',
            'modelRoute' => 'title-deed',
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
    public function store(StoreTitledeedRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Titledeed $titledeed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Titledeed $titledeed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTitledeedRequest $request, Titledeed $titledeed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Titledeed $titledeed)
    {
        //
    }
}
