<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteSubscribeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Website $website)
    {
        $website->subscribers()->sync($request->user());

        return response()->json([
            'message' => 'Subscribed successfully'
        ]);
    }
}
