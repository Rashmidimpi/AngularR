<?php

namespace App\Http\Controllers;

use App\Models\TodoR;
use Illuminate\Http\Request;

class TodoRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'hello';
         return TodoR :: all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todor = TodoR::create($request->all());
        return response()->json($todoR);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TodoR  $todoR
     * @return \Illuminate\Http\Response
     */
    public function show(TodoR $todoR)
    {
        return $todoR;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TodoR  $todoR
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TodoR  $todoR
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TodoR $todoR)
    {
        $todor->update($request->all() );
        return response()->json($todor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TodoR  $todoR
     * @return \Illuminate\Http\Response
     */
    public function destroy(TodoR $todoR)
    {
        $todor->destroy();
        return response()->json(null, 204);

    }
}
