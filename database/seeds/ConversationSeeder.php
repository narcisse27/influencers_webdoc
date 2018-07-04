<?php

use Illuminate\Database\Seeder;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conversations')->insert([
            'destinataire_name' => 'John',
            'expediteur_name' => 'Hélène',
            'destinataire_picture' => 'https://picsum.photos/200/300?image=0',
            'expediteur_picture' => 'https://picsum.photos/200/300?image=0',
            'slug' => 'conv_paloma_meuffe_bio',
        ]);
        DB::table('conversations')->insert([
            'destinataire_name' => 'Sarah',
            'expediteur_name' => 'Hélène',
            'destinataire_picture' => 'https://picsum.photos/200/300?image=0',
            'expediteur_picture' => 'https://picsum.photos/200/300?image=0',
            'slug' => 'conv_meuffe2',
        ]);
        DB::table('conversations')->insert([
            'destinataire_name' => 'Clémence',
            'expediteur_name' => 'Hélène',
            'destinataire_picture' => 'https://picsum.photos/200/300?image=0',
            'expediteur_picture' => 'https://picsum.photos/200/300?image=0',
            'slug' => 'conv_meuffe3',
        ]);
    }
}
