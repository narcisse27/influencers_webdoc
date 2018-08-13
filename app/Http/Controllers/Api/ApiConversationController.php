<?php

namespace App\Http\Controllers\Api;

use App\Conversation;
use App\ConvMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ApiConversationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Conversation::orderBy('order', 'ASC')->get();
        return response()->json($data);
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
        //
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

    /**
     * Reorder conversations messages
     * @return \Illuminate\Http\Response
     */
    public function reorder(Request $request){
        $messages = $request['messages'];
        $slug = $request['slug'];
        for($i = 0; $i < count($messages); $i++){
            ConvMessage::where('id', $messages[$i]['id'])
                ->update(['order' => ( count($messages) - $i - 1 ) ]);
        }
        $data = Conversation::with('messages')->where('slug', $slug)->first();
        return response()->json($data, 200);
    }

    public function reorderEntireConversationMessage($convSlug){
        $conversation = Conversation::where('slug', $convSlug)->first();
        $allMessages = ConvMessage::where('conversation_id', $conversation->id)->orderBy('order', 'DESC')->get();

        for ($i = 0; $i < count($allMessages); $i++){
            ConvMessage::where('id', $allMessages[$i]['id'])
                ->update(['order' => ( count($allMessages) - $i - 1 ) ]);
        }

    }


}
