<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWebsiteRequest;
use App\Http\Requests\UpdateWebsiteRequest;
use App\Models\Website;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'data' => Website::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWebsiteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWebsiteRequest $request)
    {
        return response()->json([
            'message' => 'website created succesfulluy',
            'data' => Website::create($request->only(['name', 'url']))
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function show(Website $website)
    {
        return response()->json([
            'data' => $website
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWebsiteRequest  $request
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWebsiteRequest $request, Website $website)
    {
        $website->fill($request->only(['name', 'url']));

        $website->save();

        return response()->json([
            'message' => 'website updaed',
            'data' => $website
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(Website $website)
    {
        $website->delete();

        return response()->json([
            'message' => 'website delted'
        ]);
    }
}
