<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Tool;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ToolsController extends Controller
{
    /**
     * @OA\Get(
     *     path="/tools",
     *     tags={"Tools"},
     *     summary="Retrieve all tools from database",
     *     @OA\response(response=200, description="Tool successfully get", @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Tool"))),
     *     @OA\Response(response=405, description="Invalid input"),
     * )
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $tool = [];
        $i = 0;
        if ($request->has('tag')) {
            $tagName = $request->tag;
            $tags = Tag::where('name', $tagName)->get();
            foreach ($tags as $tag) {
                $tag->tools()->get()->each(function ($tools) use (&$tool, &$i) {
                    $tool[$i] = $tools->toArray();
                    $tool[$i]['tags'] = $tools->tags()->pluck("name");
                    $i++;
                });
            }
        } else {
            Tool::with(['tags'])->get()->each(function ($tools) use (&$tool, &$i) {
                $tool[$i] = $tools->toArray();
                $tool[$i]['tags'] = $tools->tags()->pluck("name");
                $i++;
            });
        }

        if (empty($tool)) {
            return response()->json(["status" => "error", "response" => "No tools found with tag: " . $request->tag . "."],
                404);
        } else {
            return response()->json($tool);
        }

    }


    /**
     * @OA\Post(
     *     path="/tools",
     *     tags={"Tools"},
     *     summary="Create new tool in database",
     *     @OA\response(response=201, description="Tool successfully created", @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Tool")))
     * )
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function createTool(Request $request)
    {
        try {
            $this->validate($request, [
                'title' => 'required|unique:tools',
                'link' => 'required|url',
                'description' => 'required'
            ]);

            $tools = $request->all();
            $tool = Tool::create([
                'title' => $tools['title'],
                'link' => $tools['link'],
                'description' => $tools['description'],
            ]);

            if ($request->has('tags')) {
                $tags = $request->tags;
                foreach ($tags as $name) {
                    $tag = Tag::where('name', $name)->get();
                    if ($tag->isEmpty()) {
                        $tag = Tag::create([
                            'name' => $name
                        ]);
                    }
                    $tool->tags()->syncWithoutDetaching($tag);
                }
            }

            $tool['tags'] = $tool->tags()->pluck('name');

            return response()->json($tool, 201);

        } catch (ValidationException $e) {
            return response(json_encode(["status" => "error", "response" => $e->getMessage()]), 403);
        }
    }

    /**
     * @OA\Put(
     *     path="/tools",
     *     tags={"Tools"},
     *     summary="Update a tool in database by id",
     *     @OA\response(response=200, description="Tool successfully updated", @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Tool")))
     * )
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function updateToolById(Request $request)
    {
        try {
            $this->validate($request, [
                'id' => 'required'
            ]);

            $tools = [];

            $tools['id'] = $request->all()['id'];
            $tools = Tool::find($tools['id']);
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
            return response(json_encode(["status" => "error", "response" => $e->getMessage()]), 403);
        }
    }

    /**
     * @OA\Delete(
     *     path="/tools",
     *     tags={"Tools"},
     *     summary="Delete a tool in database by id",
     *     @OA\response(response=200, description="Tool successfully deleted")
     * )
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function deleteToolById(Request $request)
    {
        try {
            $this->validate($request, [
                "id" => "required"
            ]);

            $tool = Tool::find($request->id);
            $tool->delete();
        } catch (ValidationException $e) {
            return response(json_encode(["status" => "error", "response" => $e->getMessage()]), 403);
        }
    }
}
