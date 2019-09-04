<?php

namespace App\Http\Controllers;

use App\Throw;
use App\Http\Resources\ThrowCollection;
use App\Http\Resources\ThrowResource;
 
class ThrowAPIController extends Controller
{
    public function index()
    {
        return new ThrowCollection(Throw::paginate());
    }
 
    public function show(Throw $throw)
    {
        return new ThrowResource($throw->load([]));
    }

    public function store(Request $request)
    {
        return new ThrowResource(Throw::create($request->all()));
    }

    public function update(Request $request, Throw $throw)
    {
        $throw->update($request->all());

        return new ThrowResource($throw);
    }

    public function destroy(Request $request, Throw $throw)
    {
        $throw->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}