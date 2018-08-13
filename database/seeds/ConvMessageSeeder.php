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
            'content' => 'Salut Paloma, prête pour une interview Sms ?',
            'user_name' => 'Hélène',
            'timeToAppear' => 0.0,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 1,
            'order' => 1,
            'content' => 'Coucou ! Je suis prête !',
            'user_name' => 'Paloma',
            'timeToAppear' => 0.8,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 1,
            'order' => 2,
            'content' => '-	Tu as lancé ton blog fin 2016, comment t’es venue l’idée ?',
            'user_name' => 'Hélène',
            'timeToAppear' => 1.2,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 1,
            'order' => 3,
            'content' => 'Ca fait 5 ans que j’utilise des produits naturels et que cet univers me passionne. J’ai d’abord commencé à m’intéressé à leurs compositions et ensuite je me suis mise à en fabriquer chez moi. J’avais l’habitude de partager mes astuces à mes amies. Et un jour, l’une d’entre elles m’a dit de me lancer, mais j’ai longtemps hésité. ',
            'user_name' => 'Paloma',
            'timeToAppear' => 2.3,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 1,
            'order' => 4,
            'content' => 'Pourquoi ?',
            'user_name' => 'Hélène',
            'timeToAppear' => 2.9,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 1,
            'order' => 5,
            'content' => '-	Je ne me sentais pas légitime pour le faire. Et puis le domaine de la beauté, même si c’est naturelle, peut être considérée comme superficielle. J’avais envie de parler de sujets plus profonds.  ',
            'user_name' => 'Paloma',
            'timeToAppear' => 4.1,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 1,
            'order' => 6,
            'content' => 'Il y a aussi un côté narcissique qui m’effrayait : on parle de nous, de ce qu’on aime, et on se prend en photo… Je n’assumais pas ! Mais finalement je suis contente de mettre lancé.  ',
            'user_name' => 'Paloma',
            'timeToAppear' => 5.2,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 1,
            'order' => 7,
            'content' => 'Tes études en journalisme et communication t’ont aidé ?',
            'user_name' => 'Hélène',
            'timeToAppear' => 5.6,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 1,
            'order' => 8,
            'content' => 'Je pense que mon master m’a beaucoup apporté et j’ai des affinités à communiquer, à partager, et ça m’aide pour mon blog. Par exemple, quand je me filme je ne regarde pas l’écran mais directement la caméra. Je suis en train de m’adresser pour de vrai à des gens.  ',
            'user_name' => 'Paloma',
            'timeToAppear' => 6.8,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 1,
            'order' => 9,
            'content' => 'Tu as grandi dans le canton de Neuchâtel, l’accent : c’est une force ou une faiblesse ? ',
            'user_name' => 'Hélène',
            'timeToAppear' => 7.4,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 1,
            'order' => 10,
            'content' => 'C’est clairement une force ! Et les Français qui me suivent, adorent quand je le pousse. C’est rigolo et ça va bien avec ce que je propose. ',
            'user_name' => 'Paloma',
            'timeToAppear' => 8.6,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 1,
            'order' => 11,
            'content' => 'Merci Paloma ! Je te laisse retourner à tes bains d’huile et à tes shampoings solides ! ',
            'user_name' => 'Hélène',
            'timeToAppear' => 9.9,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 1,
            'order' => 12,
            'content' => 'Hello, si jamais ton portrait est disponible sur ArcInfo, je te laisse aller le découvrir ! ',
            'user_name' => 'Paloma',
            'timeToAppear' => 10,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);


        // Jorge
        DB::table('conv_messages')->insert([
            'conversation_id' => 2,
            'order' => 0,
            'content' => 'Salut Jorge, prêt pour une interview Sms ?',
            'user_name' => 'Hélène',
            'timeToAppear' => 0.0,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 2,
            'order' => 1,
            'content' => 'C’est parti !',
            'user_name' => 'Jorge',
            'timeToAppear' => 0.8,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 2,
            'order' => 2,
            'content' => 'Ton blog « JSBG » vient de fêter ses 8 ans, tu fais parti des premiers blogueurs en Suisse, mais qu’est-ce-que c’est ?',
            'user_name' => 'Hélène',
            'timeToAppear' => 1.2,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 2,
            'order' => 3,
            'content' => 'Et que signifie JSBG ?',
            'user_name' => 'Jorge',
            'timeToAppear' => 2.3,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 2,
            'order' => 4,
            'content' => 'Ca veut dire que tu parles de toi sur tes réseaux ?',
            'user_name' => 'Hélène',
            'timeToAppear' => 2.9,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 2,
            'order' => 5,
            'content' => 'Non, pas du tout ! Lorsque j’ai lancé mon blog je n’ai pas du tout pensé à ce que ça allait devenir plus tard. J’écrivais quelques articles sur des choses qui suscitaient ma curiosité.',
            'user_name' => 'Jorge',
            'timeToAppear' => 4.1,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 2,
            'order' => 6,
            'content' => 'Selon toi, on peut vivre de l’activité d’influenceur ? ',
            'user_name' => 'Hélène',
            'timeToAppear' => 5.2,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 2,
            'order' => 7,
            'content' => 'Je suis l’exemple ! Mais il faut trouver d’autres revenus : cela passe par des collaborations avec des marques ou du publireportages…',
            'user_name' => 'Jorge',
            'timeToAppear' => 5.6,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 2,
            'order' => 8,
            'content' => 'Comment se passent les collaborations avec les marques ? ',
            'user_name' => 'Hélène',
            'timeToAppear' => 6.8,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 2,
            'order' => 9,
            'content' => 'Tu as grandi dans le canton de Neuchâtel, l’accent : c’est une force ou une faiblesse ? ',
            'user_name' => 'Hélène',
            'timeToAppear' => 7.4,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 2,
            'order' => 10,
            'content' => 'Aujourd’hui, je suis très content, mais c’est quelque chose qu’il a fallu construire. Au début, les marques notamment dans le luxe étaient très réticentes à investir dans le digital. Et maintenant certaines enseignes mettent 80 % de leur budget dans les influenceurs ou sur Instagram, ce qui n’est pas forcément souhaitable. ',
            'user_name' => 'Jorge',
            'timeToAppear' => 8.6,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 2,
            'order' => 11,
            'content' => 'Pourquoi as-tu quitté Neuchâtel pour t’installer à Lausanne ?  ',
            'user_name' => 'Hélène',
            'timeToAppear' => 9.9,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 2,
            'order' => 12,
            'content' => '-	Je voyage beaucoup, je voulais me rapprocher d’un aéroport. Et Le réseau journalistique est très fort à Lausanne.',
            'user_name' => 'Jorge',
            'timeToAppear' => 10,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 2,
            'order' => 12,
            'content' => 'Mais j’aime toujours Neuchâtel et j’y reviens très souvent  ',
            'user_name' => 'Jorge',
            'timeToAppear' => 10,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 2,
            'order' => 12,
            'content' => 'Merci beaucoup Jorge. ',
            'user_name' => 'Hélène',
            'timeToAppear' => 10,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);


    }
}
