<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ConversationSeeder::class);
        $this->call(ConvMessageSeeder::class);
        $this->call(QuestionnaireSeeder::class);
        $this->call(QuestionnaireTimelineSeeder::class);
        $this->call(QuestionnaireTimelineEventSeeder::class);
        $this->call(QuestionsSeeder::class);
        $this->call(ResponseSeeder::class);
        $this->call(ArticleSectionSeeder::class);
    }
}
