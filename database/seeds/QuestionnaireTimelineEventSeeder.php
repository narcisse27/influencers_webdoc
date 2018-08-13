<?php

use Illuminate\Database\Seeder;

class QuestionnaireTimelineEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($j = 0; $j < 3; $j++){
            for($i = 0; $i < 9; $i++){
                DB::table('questionnaire_timeline_events')->insert([
                    'questionnaire_timeline_id' => $j,
                    'order' => $i,
                    'event_type' => 0,
                ]);
            }
        }

    }
}
