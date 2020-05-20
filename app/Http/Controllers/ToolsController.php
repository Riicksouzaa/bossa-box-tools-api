<?php

namespace App\Http\Controllers;

use App\Tools;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ToolsController extends Controller
{
    //

    public function index()
    {
        return response()->json(Tools::all());
    }

    public function createTool(Request $request)
    {
        try {
            $this->validate($request, [
                'title' => 'required|unique:tools',
                'link' => 'required|url',
                'description' => 'required'
            ]);

            $tools = $request->all();
            $tool = Tools::create([
                'title' => $tools['title'],
                'link' => $tools['link'],
                'description' => $tools['description'],
            ]);

            return response()->json($tool);

        } catch (ValidationException $e) {
            return response(json_encode($e->getMessage()), 403);
        }
    }

    public function updateToolById(Request $request)
    {
        try {
            $this->validate($request, [
                'id' => 'required'
            ]);

            $tools = [];

            $tools['id'] = $request->all()['id'];
            $tools = Tools::find($tools['id']);
            if ($tools) {
                if ($request->has('title')) {
                    $tools['title'] = $request->all()['title'];
                }
                if ($request->has('link')) {
                    $tools['link'] = $request->all()['link'];
                }
                if ($request->has('description')) {
                    $tools['description'] = $request->all()['description'];
                }
            }

            $tools->save();
            return response()->json($tools);


        } catch (ValidationException $e) {
            return response(json_encode($e->getMessage()), 403);
        }

    }
}
