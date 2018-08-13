<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionnaireTimelineEvent extends Model
{
    public function question(){
        if($this->event_type == 0){
            return $this->hasOne('App\Question');
        }
    }
}
