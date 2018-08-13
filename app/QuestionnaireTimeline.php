<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionnaireTimeline extends Model
{
    public function events(){
        return $this->hasMany('App\QuestionnaireTimelineEvent')->orderBy('order', 'ASC');
    }
}
