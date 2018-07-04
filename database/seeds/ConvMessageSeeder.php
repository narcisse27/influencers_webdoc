<?php

use Illuminate\Database\Seeder;

class ConvMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conv_messages')->insert([
            'conversation_id' => 1,
            'order' => 0,
            'content' => '0 ? Salut ça va ',
            'user_id' => 0,
            'timeToAppear' => 0.0,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 1,
            'order' => 1,
            'content' => '1 ? Salut ça va ',
            'user_id' => 1,
            'timeToAppear' => 0.8,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 1,
            'order' => 2,
            'content' => '2 ? Salut ça va ',
            'user_id' => 0,
            'timeToAppear' => 1.2,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 1,
            'order' => 3,
            'content' => '3 ? Salut ça va ',
            'user_id' => 1,
            'timeToAppear' => 1.7,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
    }
}
