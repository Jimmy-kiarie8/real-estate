<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Plot;
use App\Models\Project;
use App\Services\DataTransformService;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Project::paginate(100);

        $jsonFile = public_path('data/projects.json'); // Get the full path to the JSON file

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

        return Inertia::render('Projects/index', [
            'projects' => $project,
            'form_data' => $jsonData,
            'headers' => $headers,
            'title' => 'Project',
            'modelRoute' => 'projects',
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
    public function store(StoreProjectRequest $request)
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

        DB::beginTransaction();
        try {
            $project = Project::create($dataValue);
            for ($i = 0; $i < $dataValue['total_units']; $i++) {
                $plot = new Plot();
                $plot->project_id = $project->id;
                $plot->plot_no = make_reference_id($project->reference, ($i + 1));
                $plot->save();
            }
            DB::commit();
            return redirect()->back()->with('message', 'Project created');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
