<?php

namespace App\Http\Controllers;

class SwaggerController extends Controller
{
    public function index()
    {
        $openapi = \OpenApi\scan(base_path() . "\\app");
        header('Content-Type: application/json');
        echo $openapi->toJson();
    }
}
