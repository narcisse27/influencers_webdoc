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
            'order' => 0,
            'expediteur_name' => 'Hélène',
            'destinataire_name' => 'Paloma',
            'destinataire_picture' => '/img/photos/paloma-profil-desk.png',
            'destinataire_mini_picture' => '/img/photos/paloma-profil-mobile.png',
            'destinataire_info' => 'Beauté naturelle',
            'destinataire_followers' => 3.6,
            'destinataire_facebook_link' => 'https://www.facebook.com/palomatortillonblog/',
            'destinataire_instagram_link' => 'https://www.instagram.com/palomatortillon/',
            'destinataire_publications' => 301,
            'slug' => 'paloma',
        ]);
        DB::table('conversations')->insert([
            'order' => 1,
            'expediteur_name' => 'Hélène',
            'destinataire_name' => 'Jorge',
            'destinataire_picture' => '/img/photos/jorge-profil-desk.png',
            'destinataire_mini_picture' => '/img/photos/jorge-profil-mobile.png',
            'destinataire_info' => 'Lifestyle de luxe',
            'destinataire_followers' => 11.2,
            'destinataire_facebook_link' => 'https://www.facebook.com/www.JSBG.me/',
            'destinataire_instagram_link' => 'https://www.instagram.com/jsbg/',
            'destinataire_publications' => 3734,
            'slug' => 'jorge',
        ]);
    }
}
