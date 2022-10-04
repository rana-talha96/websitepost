<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsitePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Website $website)
    {
        return $website->posts;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Website $website)
    {
        $request->validate([
            'title' => [
                'required',
                'string',
                'max:255'
            ],
            'body' => [
                'required',
                'string'
            ]
        ]);

        $post = $website->posts()->create($request->only(['title', 'body']));

        return $post;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
