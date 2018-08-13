<?php

namespace App\Http\Controllers\Api;

use App\Conversation;
use App\ConvMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ApiConversationMessageController extends Controller
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
        if( !isset( $request['conversation_id']) || !isset($request['content']) || !isset($request['user_name'])){
            return response()->json(400);
        }
        $id = $request['conversation_id'];
        $content = $request['content'];
        $user_name = $request['user_name'];
        $conversation = Conversation::with('messages')->where('id', $id)->first();
        if(empty($conversation->messages) || count($conversation->messages) == null || count($conversation->messages) == 0 || strlen($content) < 4){
            $order = 0;
            $timeToAppear = 0;
            $tapping = false;
        }else{
            $order = count( ConvMessage::where('conversation_id', $id)->get() );
            $prevItem = ConvMessage::where('conversation_id', $id)->where('order', $order- 1)->first();
            $prevItemlength = strlen($prevItem->content) * 0.01; // time to reading
            $thisItemLength = strlen($content) * 0.02; // time to taping
            $timeToAppear = $prevItemlength + $thisItemLength;
            if(strlen($content) > 5 ){
                    $tapping = true;
                    $tappingAt = ($timeToAppear/100) * 30;
            }else{
                $tapping = false;
                $tappingAt = null;
            }
        }
        //TODO: if next message length is large also calculate one timing to timing correctly this apparition
        //TODO: check the length of this message for set the timing for the next message like: if message(n-1).lenght = 200 also message(n).appeartAt(calc(200*00.1sec));
        //TODO: if message(n-1).length > 300 for example also message(n).tapping = true && messagen(n).appearAt(calc(200*00.1sec)*80%);
        $data = new ConvMessage();
        $data->conversation_id = $id;
        $data->order = $order;
        $data->content = $content;
        $data->user_name = $user_name;
        $data->timeToAppear = $timeToAppear;
        $data->tapping = $tapping;
        $data->tappingAt = $tappingAt;
        $data->rendered = false;
        $data->save();

        $data = Conversation::with('messages')->where('slug', $request['slug'])->first();
        return response()->json($data, 200);
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        ConvMessage::where('id', $request['message']['id'])->update(
            ['content' => $request['message']['content'],
                'user_name' => $request['message']['user_name'],
                'timeToAppear' => 2,
                'tapping' => false,
                'tappingAt' => null,
                'rendered' => false
            ]);
        app('App\Http\Controllers\Api\ApiConversationController')->reorderEntireConversationMessage($request['slug']);
        $data = Conversation::with('messages')->where('slug', $request['slug'])->first();
        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $message = ConvMessage::find($request['id']);
        $message->delete();
        $data = Conversation::with('messages')->where('slug', $request['slug'])->first();
        app('App\Http\Controllers\Api\ApiConversationController')->reorderEntireConversationMessage($request['slug']);
        return response()->json($data, 200);

    }

}
