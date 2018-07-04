<?php

namespace App\Http\Controllers\Api;

use App\ConvMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiConvMessageController extends Controller
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
        $id = $request['conversation_id'];
        $order = $request['order'];
        $content = $request['content'];
        $user_id = $request['user_id'];
        $timeToAppear = $request['timeToAppear'];
        $tapping = $request['tapping'];
        $tappingAt = $request['tappingAt'];
        $data = new ConvMessage();
        $data->conversation_id = $id;
        $data->order = $order;
        $data->content = $content;
        $data->user_id = $user_id;
        $data->timeToAppear = $timeToAppear;
        $data->tapping = $tapping;
        $data->tappingAt = $tappingAt;
        $data->save();
        return response()->json(['message' => 'success'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Conversation::with('messages')->where('slug', $slug)->first();
        return response()->json($data, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
