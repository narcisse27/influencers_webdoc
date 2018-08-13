<?php

namespace App\Http\Controllers\Api;

use App\Question;
use App\Questionnaire;
use App\QuestionnaireTimeline;
use App\QuestionnaireTimelineEvent;
use App\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ApiQuestionController extends Controller
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
        $questionnaireSlug = $request['questionnaire_slug'];
        $questionnaire = Questionnaire::where('slug', $questionnaireSlug)->first();
        $questionnaireId = $questionnaire->id;

        $timeLine = QuestionnaireTimeline::where('questionnaire_id', $questionnaireId)->first();

        $newEvent = new QuestionnaireTimelineEvent();
        $newEvent->questionnaire_timeline_id = $timeLine->id;
        $newEvent->event_type = 0;
        $newEvent->order = count(QuestionnaireTimelineEvent::where('questionnaire_timeline_id', $timeLine->id)->get());
        $newEvent->save();


        $newQuestion = new Question();
        $newQuestion->questionnaire_timeline_event_id = $newEvent->id;
        $newQuestion->media = $request['media'];
        $newQuestion->question = $request['question'];
        $newQuestion->response = $request['question_response'];
        $newQuestion->save();


        $responses = $request['responses_choices'];
        $order = 0;
        foreach ($responses as $response) {
            $newResponse = new Response();
            $newResponse->question_id = $newQuestion->id;
            $newResponse->order = $order;
            $newResponse->response = $response['response'];
            $newResponse->response_correct = $response['state'];
            $newResponse->action = $response['actionOnFollowers'];
            $newResponse->save();
            $order++;
        }

        $data = Questionnaire::with('timeline.events.question')->where('slug', $questionnaire->slug)->first();
        return response()->json($data, 200);
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
