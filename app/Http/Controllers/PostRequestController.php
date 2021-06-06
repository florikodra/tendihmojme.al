<?php

namespace App\Http\Controllers;

use App\Models\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->middleware('auth');

        var_dump(Auth::id());


        $validated = $request->validate([
            'description' => 'required',
        ]);
        $validated['user_id'] = Auth::id();
        $validated['post_id'] = $request->post_id;

        PostRequest::create($validated);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostRequest  $postRequest
     * @return \Illuminate\Http\Response
     */
    public function show(PostRequest $postRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostRequest  $postRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(PostRequest $postRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostRequest  $postRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostRequest $postRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostRequest  $postRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostRequest $postRequest)
    {
        //
    }
}
