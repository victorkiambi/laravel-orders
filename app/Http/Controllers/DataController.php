<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Levels;
use App\Models\Services;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //

    public function getData(): \Illuminate\Http\JsonResponse
    {
        $services = Services::all();
        $levels = Levels::all();

        return response()->json([
            "services" => $services,
            "levels" => $levels
        ]);
    }
}
