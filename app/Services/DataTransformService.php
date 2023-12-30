<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Client;
use App\Models\Plot;
use App\Models\Project;
use App\Models\Sale;
use App\Models\Saleofficer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataTransformService
{

    public function data_transform($jsonFile) {

        if (file_exists($jsonFile)) {
            $jsonContents = file_get_contents($jsonFile);
            $jsonData = json_decode($jsonContents, true);

            $fetchClients = false;
            $fetchSales = false;
            $fetchCategories = false;
            $fetchsaleOfficers = false;
            $fetchProjects = false;
            $fetchPlots = false;

            // Check if client_id or sale_id is present in the JSON data
            foreach ($jsonData as $item) {
                if ($item['type'] == 'select') {
                    if ($item['model'] == 'client_id') {
                        $fetchClients = true;
                    } elseif ($item['model'] == 'sale_id') {
                        $fetchSales = true;
                    } elseif ($item['model'] == 'project_id') {
                        $fetchProjects = true;
                    } elseif ($item['model'] == 'sales_officer_id') {
                        $fetchsaleOfficers = true;
                    } elseif ($item['model'] == 'plot_id') {
                        $fetchPlots = true;
                    } elseif ($item['model'] == 'category_id') {
                        $fetchCategories = true;
                    }
                }
            }

            // Fetch data conditionally
            if ($fetchClients) {
                $clients = Client::select('id', 'name')->take(100)->get();
            }
            if ($fetchSales) {
                $sales = Sale::select('id', 'order_no')->take(100)->get();
            }
            if ($fetchCategories) {
                $categories = Category::select('id', 'name')->take(100)->get();
            }
            if ($fetchsaleOfficers) {
                $sales_officer = Saleofficer::select('id', 'name')->take(100)->get();
            }
            if ($fetchProjects) {
                $projects = Project::select('id', 'name')->take(100)->get();
            }
            if ($fetchPlots) {
                $plots = Plot::select('id', 'plot_no')->take(100)->get();
            }


            // Rest of the logic for transformation
            foreach ($jsonData as $key => &$item) {
                if ($fetchClients && $item['type'] == 'select' && $item['model'] == 'client_id') {
                    $item['items'] = $clients;

                    foreach ($item['items'] as &$item) {
                        $item['value'] = $item['id'];
                        $item['label'] = $item['name'];
                    }
                } elseif ($fetchSales && $item['type'] == 'select' && $item['model'] == 'sale_id') {
                    $item['items'] = $sales;

                    foreach ($item['items'] as &$item) {
                        $item['value'] = $item['id'];
                        $item['label'] = $item['order_no'];
                    }
                } elseif ($fetchCategories && $item['type'] == 'select' && $item['model'] == 'category_id') {
                    $item['items'] = $categories;

                    foreach ($item['items'] as &$item) {
                        $item['value'] = $item['id'];
                        $item['label'] = $item['name'];
                    }
                } elseif ($fetchsaleOfficers && $item['type'] == 'select' && $item['model'] == 'sales_officer_id') {
                    $item['items'] = $sales_officer;

                    foreach ($item['items'] as &$item) {
                        $item['value'] = $item['id'];
                        $item['label'] = $item['name'];
                    }
                } elseif ($fetchProjects && $item['type'] == 'select' && $item['model'] == 'project_id') {
                    $item['items'] = $projects;

                    foreach ($item['items'] as &$item) {
                        $item['value'] = $item['id'];
                        $item['label'] = $item['name'];
                    }
                } elseif ($fetchPlots && $item['type'] == 'select' && $item['model'] == 'plot_id') {
                    $item['items'] = $plots;

                    foreach ($item['items'] as &$item) {
                        $item['value'] = $item['id'];
                        $item['label'] = $item['plot_no'];
                    }
                }
            }
        } else {
            return response('JSON file not found', 404);
        }

        return $jsonData;
    }

}
