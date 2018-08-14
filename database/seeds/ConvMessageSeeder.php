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



        // Wallace
        DB::table('conv_messages')->insert([
            'conversation_id' => 3,
            'order' => 0,
            'content' => 'Salut Wallace, tu peux m’expliquer en quoi consiste ton activité d’influenceuse ?',
            'user_name' => 'Hélène',
            'timeToAppear' => 0.0,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 3,
            'order' => 1,
            'content' => 'Alors, j’ai lancé mon blog en 2014, il est principalement consacré à la mode. Je partage mes looks à mes abonnés et je leur donne des conseils : quel type de vêtement faut-il porter, pour quelle occasion…',
            'user_name' => 'Wallace',
            'timeToAppear' => 0.8,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 3,
            'order' => 2,
            'content' => 'Ça te prend beaucoup de temps ? Que fais-tu à côté de ton blog ?',
            'user_name' => 'Hélène',
            'timeToAppear' => 1.2,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 3,
            'order' => 3,
            'content' => 'A côté du blog, je suis étudiante en psychologie, à l’Université de Neuchâtel. Le blog me prend 90% de mon temps et les 10% restant je les accorde à mes études. C’est pas bien, j’avoue haha. Mais vraiment je suis passionnée et j’ai beaucoup de choses à faire pour mon blog. ',
            'user_name' => 'Wallace',
            'timeToAppear' => 2.3,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 3,
            'order' => 4,
            'content' => 'Tu comptes plus de 136000 abonnés sur ton compte Instagram, mais d’où viennent-ils ?',
            'user_name' => 'Hélène',
            'timeToAppear' => 2.9,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 3,
            'order' => 5,
            'content' => 'Mes abonnés viennent principalement des Etats-Unis et d’Angleterre. Ensuite, il y a les Allemands, les Français. Et en dernière position… La Suisse. Je n’ai pas vraiment une grande audience ici ! C’est dommage mais c’est comme ça :)',
            'user_name' => 'Wallace',
            'timeToAppear' => 4.1,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 3,
            'order' => 6,
            'content' => 'Un conseil pour celles et ceux qui voudraient se prendre en photo à Neuchâtel ? Quel est le lieu que tu recommandes ?',
            'user_name' => 'Hélène',
            'timeToAppear' => 5.2,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 3,
            'order' => 7,
            'content' => 'Le dernier spot que je recommande à tout le monde, pour faire des photos à Neuchâtel, c’est le Jardin Botanique. C’est THE place to be. Il y a tellement de petits coins où l’on peut se prendre en photos et se filmer. Il y a des looks sympas à créer. C’est une atmosphère assez cool !',
            'user_name' => 'Wallace',
            'timeToAppear' => 5.6,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
        DB::table('conv_messages')->insert([
            'conversation_id' => 3,
            'order' => 8,
            'content' => 'Merci Wallace !',
            'user_name' => 'Hélène',
            'timeToAppear' => 6.8,
            'tapping' => false,
            'tappingAt' => 0,
            'rendered' => false,
        ]);
    }
}
