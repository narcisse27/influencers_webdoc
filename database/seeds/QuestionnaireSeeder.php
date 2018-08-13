<?php

use Illuminate\Database\Seeder;

class QuestionnaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionnaires')->insert([
            'name' => 'Lifestyle de luxe',
            'slug' => 'lifestyle-de-luxe',
            'order' => 0
        ]);
        DB::table('questionnaires')->insert([
            'name' => 'Beauté naturelle',
            'slug' => 'beaute-naturelle',
            'order' => 1
        ]);
        DB::table('questionnaires')->insert([
            'name' => 'Mode',
            'slug' => 'mode',
            'order' => 2
        ]);
    }
}
