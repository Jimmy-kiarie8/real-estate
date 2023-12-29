<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate();


        $jsonFile = public_path('data/categories.json'); // Get the full path to the JSON file

        if (file_exists($jsonFile)) {
            $jsonContents = file_get_contents($jsonFile);
            $jsonData = json_decode($jsonContents, true);

            $project_form = $jsonData;

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

        return Inertia::render('Category/index', [
            'data' => $categories,
            'form_data' => $project_form,
            'headers' => $headers,
            'title' => 'Category',
            'modelRoute' => 'category',
        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
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
        Category::create($dataValue);

        return redirect()->back()->with('message', 'Contact created');
    }

    public function show(Category $category) {}

    public function edit(Category $category)
    {
        return view('tickets.categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return to_route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return to_route('categories.index');
    }
}
