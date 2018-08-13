<?php

use Illuminate\Database\Seeder;

class QuestionnaireTimelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionnaire_timelines')->insert([
            'questionnaire_id' => 0
        ]);
        DB::table('questionnaire_timelines')->insert([
            'questionnaire_id' => 1
        ]);
        DB::table('questionnaire_timelines')->insert([
            'questionnaire_id' => 2
        ]);
    }
}
