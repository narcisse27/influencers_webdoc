<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::namespace('Api')->group( function() {

Route::get('conversation',                      'ApiConversationController@index');
Route::get('conversation/{slug}',               'ApiConversationController@show');
Route::post('/message',                         'ApiConversationController@store');
Route::post('/conversation/reorder',            'ApiConversationController@reorder');
Route::post('/message/update',                  'ApiConversationMessageController@update');
Route::post('/message/delete',                  'ApiConversationMessageController@destroy');
Route::post('/message/add',                     'ApiConversationMessageController@store');


// QUESTIONNAIRE
Route::get('questionnaires', 'ApiQuestionnaireController@index');
Route::get('questionnaire/{slug}', 'ApiQuestionnaireController@show');
Route::post('questionnaire/add', 'ApiQuestionnaireController@store');
Route::post('question/add', 'ApiQuestionController@store');
Route::post('/events/reorder','ApiQuestionnaireController@reorder');


// Article
Route::get('/articles', 'ApiArticleSectionController@index');
Route::post('article/add', 'ApiArticleSectionController@store');
});
