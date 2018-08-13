<?php

namespace App\Http\Controllers\Api;

use App\Questionnaire;
use App\QuestionnaireTimeline;
use App\QuestionnaireTimelineEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ApiQuestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Questionnaire::with('timeline')->orderBy('order', 'ASC')->get();
        return  response()->json($data,200);
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
        $name = $request['name'];
        $slug = str_slug($name);
        $order = count( Questionnaire::all());
        $data = new Questionnaire();
        $data->name = $name;
        $data->slug = $slug;
        $data->order = $order;
        $data->save();
        $timeline = new QuestionnaireTimeline();
        $timeline->questionnaire_id = $data->id;
        $timeline->save();
        $data = Questionnaire::orderBy('order', 'ASC')->get();
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
        $data = Questionnaire::with('timeline.events.question.responses')->where('slug', $slug)->first();
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

    public function reorder(Request $request){
        $events = $request['messages'];
        for($i = 0; $i < count($events); $i++){
            QuestionnaireTimelineEvent::where('id', $events[$i]['id'])
                ->update(['order' => ( count($events) - $i - 1 ) ]);
        }
        $data = Questionnaire::with('timeline')->orderBy('order', 'ASC')->get();
        return response()->json($data, 200);
    }

    public function reorderEntireQuestionnaireEvents($questionnaireSlug){
        /*
        $questionnaire = Questionnaire::where('slug', $questionnaireSlug)->first();
        $allMessages = ConvMessage::where('conversation_id', $questionnaire->id)->orderBy('order', 'DESC')->get();

        for ($i = 0; $i < count($allMessages); $i++){
            ConvMessage::where('id', $allMessages[$i]['id'])
                ->update(['order' => ( count($allMessages) - $i - 1 ) ]);
        }
        */

    }
}
