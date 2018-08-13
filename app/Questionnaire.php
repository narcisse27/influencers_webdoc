<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    public function timeline(){
       return $this->hasOne('App\QuestionnaireTimeline');
    }
}
