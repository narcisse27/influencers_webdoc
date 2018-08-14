<?php

use Illuminate\Database\Seeder;

class ResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('responses')->insert([
            'question_id' => 1,
            'order' => 0,
            'response' => "Instagram",
            "response_correct" => true,
            "action" => 20
        ]);
        DB::table('responses')->insert([
            'question_id' => 1,
            'order' => 1,
            'response' => "Facebook",
            "response_correct" => false,
            "action" => -10
        ]);
        DB::table('responses')->insert([
            'question_id' => 1,
            'order' => 2,
            'response' => "LinkdeIn",
            "response_correct" => false,
            "action" => -10
        ]);


        DB::table('responses')->insert([
            'question_id' => 2,
            'order' => 0,
            'response' => "Maximum 20 minutes par jour. Se prendre en photo et poster un article, ce n’est pas sorcier !",
            "response_correct" => false,
            "action" => -10
        ]);
        DB::table('responses')->insert([
            'question_id' => 2,
            'order' => 1,
            'response' => "Pour proposer du contenu propre, il faut y passer du temps mais on peut continuer à avoir une vie à côté.",
            "response_correct" => true,
            "action" => +30
        ]);
        DB::table('responses')->insert([
            'question_id' => 2,
            'order' => 2,
            'response' => "J’arrête tout, il va vous falloir un an pour me lancer, et cela me prendra tout mon temps et mon énergie.",
            "response_correct" => false,
            "action" => -10
        ]);


        DB::table('responses')->insert([
            'question_id' => 2 + 1,
            'order' => 0,
            'response' => "Je pense que c’est impossible !",
            "response_correct" => false,
            "action" => -10
        ]);
        DB::table('responses')->insert([
            'question_id' => 2 + 1,
            'order' => 1,
            'response' => "Oui, mais il va sûrement falloir partir au bout d’un moment ! ",
            "response_correct" => true,
            "action" => +20
        ]);
        DB::table('responses')->insert([
            'question_id' => 2 + 1,
            'order' => 2,
            'response' => "Oui, sans aucun problème !",
            "response_correct" => false,
            "action" => -10
        ]);


        DB::table('responses')->insert([
            'question_id' => 3 + 1,
            'order' => 0,
            'response' => "Patience et différence seront vos nouveaux mantras.",
            "response_correct" => true,
            "action" => +40
        ]);
        DB::table('responses')->insert([
            'question_id' => 3 + 1,
            'order' => 1,
            'response' => "Recopier les autres, et exceller dans les photos d’avocado toast et de doigts de pied au bord de la piscine devraient largement suffire.",
            "response_correct" => true,
            "action" => -20
        ]);
        DB::table('responses')->insert([
            'question_id' => 3 + 1,
            'order' => 2,
            'response' => "Aucune idée, « YOLO » comme disent les jeunes. Les gens finiront bien par me suivre.",
            "response_correct" => false,
            "action" => -10
        ]);


        DB::table('responses')->insert([
            'question_id' => 4 + 1,
            'order' => 0,
            'response' => "Je ne suis pas radin avec mes abonnés, il faut savoir donner un peu.",
            "response_correct" => true,
            "action" => +50
        ]);
        DB::table('responses')->insert([
            'question_id' => 4 + 1,
            'order' => 1,
            'response' => "Non, mon intimité n’a rien affaire sur mon blog et mes réseaux.",
            "response_correct" => true,
            "action" => -30
        ]);
        DB::table('responses')->insert([
            'question_id' => 4 + 1,
            'order' => 2,
            'response' => "Oui, il faut tout dire, être authentique et le plus transparent avec ses abonnés, c’est le plus important.",
            "response_correct" => false,
            "action" => -30
        ]);



        DB::table('responses')->insert([
            'question_id' => 5 + 1,
            'order' => 0,
            'response' => "Bah oui, sinon les gens ne vont jamais me suivre.",
            "response_correct" => false,
            "action" => -20
        ]);
        DB::table('responses')->insert([
            'question_id' => 5 + 1,
            'order' => 1,
            'response' => "Ma vie est tout simplement incroyable et ressemble exactement à ce que je poste.",
            "response_correct" => false,
            "action" => -30
        ]);
        DB::table('responses')->insert([
            'question_id' => 5 + 1,
            'order' => 2,
            'response' => "C’est plus subtil que cela, il faut savoir se mettre en avant sans trahir la réalité",
            "response_correct" => true,
            "action" => +80
        ]);



        DB::table('responses')->insert([
            'question_id' => 6 + 1,
            'order' => 0,
            'response' => "C’est trop bien, on m’envoit  des cadeaux pas besoin d’en demander plus ! ",
            "response_correct" => false,
            "action" => -40
        ]);
        DB::table('responses')->insert([
            'question_id' => 6 + 1,
            'order' => 1,
            'response' => "Je débute, donc ok pour les cadeaux maintenant, mais à l’avenir je compte  demander un petit pécule.",
            "response_correct" => true,
            "action" => 100
        ]);
        DB::table('responses')->insert([
            'question_id' => 6 + 1,
            'order' => 2,
            'response' => "C’est parti pour la négociation, une photo sur Instagram c’est minimum 1000 francs et pour un article sur mon blog, entre 2000 et 5000 francs. En deça, la marque peut aller chercher un autre influenceur ! ",
            "response_correct" => false,
            "action" => -40
        ]);



        DB::table('responses')->insert([
            'question_id' => 7 + 1,
            'order' => 0,
            'response' => "J’ai directement tout plaqué pour mon activité d’influenceur, je suis déjà un pro",
            "response_correct" => false,
            "action" => -20
        ]);
        DB::table('responses')->insert([
            'question_id' => 7 + 1,
            'order' => 1,
            'response' => "Je commence à pouvoir en vivre, je suis donc un pro",
            "response_correct" => true,
            "action" => 120
        ]);
        DB::table('responses')->insert([
            'question_id' => 7 + 1,
            'order' => 2,
            'response' => "C’est impossible de vivre de cette activité ",
            "response_correct" => false,
            "action" => -20
        ]);



        DB::table('responses')->insert([
            'question_id' => 8 + 1,
            'order' => 0,
            'response' => "Pas besoin de déclarer quoique ce soit",
            "response_correct" => false,
            "action" => -20
        ]);
        DB::table('responses')->insert([
            'question_id' => 8 + 1,
            'order' => 1,
            'response' => "Tout dépend de la valeur des cadeaux et de mon statut",
            "response_correct" => true,
            "action" => 150
        ]);
        DB::table('responses')->insert([
            'question_id' => 8 + 1,
            'order' => 2,
            'response' => "Tant que je ne me fais pas épingler, je ne déclare rien",
            "response_correct" => false,
            "action" => -20
        ]);



        // second

        DB::table('responses')->insert([
            'question_id' => 9 + 1,
            'order' => 0,
            'response' => "Instagram",
            "response_correct" => true,
            "action" => 20
        ]);
        DB::table('responses')->insert([
            'question_id' => 9 + 1,
            'order' => 1,
            'response' => "Facebook",
            "response_correct" => false,
            "action" => -10
        ]);
        DB::table('responses')->insert([
            'question_id' => 9 + 1,
            'order' => 2,
            'response' => "LinkdeIn",
            "response_correct" => false,
            "action" => -10
        ]);


        DB::table('responses')->insert([
            'question_id' => 10 + 1,
            'order' => 0,
            'response' => "Maximum 20 minutes par jour. Se prendre en photo et poster un article, ce n’est pas sorcier !",
            "response_correct" => false,
            "action" => -10
        ]);
        DB::table('responses')->insert([
            'question_id' => 10 + 1,
            'order' => 1,
            'response' => "Pour proposer du contenu propre, il faut y passer du temps mais on peut continuer à avoir une vie à côté.",
            "response_correct" => true,
            "action" => +30
        ]);
        DB::table('responses')->insert([
            'question_id' => 10 + 1,
            'order' => 2,
            'response' => "J’arrête tout, il va vous falloir un an pour me lancer, et cela me prendra tout mon temps et mon énergie.",
            "response_correct" => false,
            "action" => -10
        ]);


        DB::table('responses')->insert([
            'question_id' => 11 + 1,
            'order' => 0,
            'response' => "Je pense que c’est impossible !",
            "response_correct" => false,
            "action" => -10
        ]);
        DB::table('responses')->insert([
            'question_id' => 11 + 1,
            'order' => 1,
            'response' => "Oui, mais il va sûrement  falloir partir au bout d’un moment ! ",
            "response_correct" => true,
            "action" => +20
        ]);
        DB::table('responses')->insert([
            'question_id' => 11 + 1,
            'order' => 2,
            'response' => "Oui, sans aucun problème !",
            "response_correct" => false,
            "action" => -10
        ]);


        DB::table('responses')->insert([
            'question_id' => 12 + 1,
            'order' => 0,
            'response' => "Patience et différence seront vos nouveaux mantras.",
            "response_correct" => true,
            "action" => +40
        ]);
        DB::table('responses')->insert([
            'question_id' => 12 + 1,
            'order' => 1,
            'response' => "Recopier les autres, et exceller dans les photos d’avocado toast et de doigts de pied au bord de la piscine devraient largement suffire.",
            "response_correct" => true,
            "action" => -20
        ]);
        DB::table('responses')->insert([
            'question_id' => 12 + 1,
            'order' => 2,
            'response' => "Aucune idée, « YOLO » comme disent les jeunes. Les gens finiront bien par me suivre.",
            "response_correct" => false,
            "action" => -10
        ]);


        DB::table('responses')->insert([
            'question_id' => 13 + 1,
            'order' => 0,
            'response' => "Je ne suis pas radin avec mes abonnés, il faut savoir donner un peu.",
            "response_correct" => true,
            "action" => +50
        ]);
        DB::table('responses')->insert([
            'question_id' => 13 + 1,
            'order' => 1,
            'response' => "Non, mon intimité n’a rien affaire sur mon blog et mes réseaux.",
            "response_correct" => true,
            "action" => -30
        ]);
        DB::table('responses')->insert([
            'question_id' => 13 + 1,
            'order' => 2,
            'response' => "Oui, il faut tout dire, être authentique et le plus transparent avec ses abonnés, c’est le plus important.",
            "response_correct" => false,
            "action" => -30
        ]);



        DB::table('responses')->insert([
            'question_id' => 14 + 1,
            'order' => 0,
            'response' => "Bah oui, sinon les gens ne vont jamais me suivre.",
            "response_correct" => false,
            "action" => -20
        ]);
        DB::table('responses')->insert([
            'question_id' => 14 + 1,
            'order' => 1,
            'response' => "Ma vie est tout simplement incroyable et ressemble exactement à ce que je poste.",
            "response_correct" => false,
            "action" => -30
        ]);
        DB::table('responses')->insert([
            'question_id' => 14 + 1,
            'order' => 2,
            'response' => "C’est plus subtil que cela, il faut savoir se mettre en avant sans trahir la réalité",
            "response_correct" => true,
            "action" => +80
        ]);



        DB::table('responses')->insert([
            'question_id' => 15 + 1,
            'order' => 0,
            'response' => "C’est trop bien, on m’envoit des cadeaux pas besoin d’en demander plus ! ",
            "response_correct" => false,
            "action" => -40
        ]);
        DB::table('responses')->insert([
            'question_id' => 15 + 1,
            'order' => 1,
            'response' => "Je débute, donc ok pour les cadeaux maintenant, mais à l’avenir je compte  demander un petit pécule.",
            "response_correct" => true,
            "action" => 100
        ]);
        DB::table('responses')->insert([
            'question_id' => 15 + 1,
            'order' => 2,
            'response' => "C’est parti pour la négociation, une photo sur Instagram c’est minimum 1000 francs et pour un article sur mon blog, entre 2000 et 5000 francs. En deça, la marque peut aller chercher un autre influenceur ! ",
            "response_correct" => false,
            "action" => -40
        ]);



        DB::table('responses')->insert([
            'question_id' => 16 + 1,
            'order' => 0,
            'response' => "J’ai directement tout plaqué pour mon activité d’influenceur, je suis déjà un pro",
            "response_correct" => false,
            "action" => -20
        ]);
        DB::table('responses')->insert([
            'question_id' => 16 + 1,
            'order' => 1,
            'response' => "Je commence à pouvoir en vivre, je suis donc un pro",
            "response_correct" => true,
            "action" => 120
        ]);
        DB::table('responses')->insert([
            'question_id' => 16 + 1,
            'order' => 2,
            'response' => "C’est impossible de vivre de cette activité ",
            "response_correct" => false,
            "action" => -20
        ]);



        DB::table('responses')->insert([
            'question_id' => 17 + 1,
            'order' => 0,
            'response' => "Pas besoin de déclarer quoique ce soit",
            "response_correct" => false,
            "action" => -20
        ]);
        DB::table('responses')->insert([
            'question_id' => 17 + 1,
            'order' => 1,
            'response' => "Tout dépend de la valeur des cadeaux et de mon statut",
            "response_correct" => true,
            "action" => 150
        ]);
        DB::table('responses')->insert([
            'question_id' => 17 + 1,
            'order' => 2,
            'response' => "Tant que je ne me fais pas épingler, je ne déclare rien",
            "response_correct" => false,
            "action" => -20
        ]);


        // third


        DB::table('responses')->insert([
            'question_id' => 18 + 1,
            'order' => 0,
            'response' => "Instagram",
            "response_correct" => true,
            "action" => 20
        ]);
        DB::table('responses')->insert([
            'question_id' => 18 + 1,
            'order' => 1,
            'response' => "Facebook",
            "response_correct" => false,
            "action" => -10
        ]);
        DB::table('responses')->insert([
            'question_id' => 18 + 1,
            'order' => 2,
            'response' => "LinkdeIn",
            "response_correct" => false,
            "action" => -10
        ]);


        DB::table('responses')->insert([
            'question_id' => 19 + 1,
            'order' => 0,
            'response' => "Maximum 20 minutes par jour. Se prendre en photo et poster un article, ce n’est pas sorcier !",
            "response_correct" => false,
            "action" => -10
        ]);
        DB::table('responses')->insert([
            'question_id' => 19 + 1,
            'order' => 1,
            'response' => "Pour proposer du contenu propre, il faut y passer du temps mais on peut continuer à avoir une vie à côté.",
            "response_correct" => true,
            "action" => +30
        ]);
        DB::table('responses')->insert([
            'question_id' => 19 + 1,
            'order' => 2,
            'response' => "J’arrête tout, il va vous falloir un an pour me lancer, et cela me prendra tout mon temps et mon énergie.",
            "response_correct" => false,
            "action" => -10
        ]);


        DB::table('responses')->insert([
            'question_id' => 20 + 1,
            'order' => 0,
            'response' => "Je pense que c’est impossible !",
            "response_correct" => false,
            "action" => -10
        ]);
        DB::table('responses')->insert([
            'question_id' => 20 + 1,
            'order' => 1,
            'response' => "Oui, mais il va sûrement  falloir partir au bout d’un moment ! ",
            "response_correct" => true,
            "action" => +20
        ]);
        DB::table('responses')->insert([
            'question_id' => 20 + 1,
            'order' => 2,
            'response' => "Oui, sans aucun problème !",
            "response_correct" => false,
            "action" => -10
        ]);


        DB::table('responses')->insert([
            'question_id' => 21 + 1,
            'order' => 0,
            'response' => "Patience et différence seront vos nouveaux mantras.",
            "response_correct" => true,
            "action" => +40
        ]);
        DB::table('responses')->insert([
            'question_id' => 21 + 1,
            'order' => 1,
            'response' => "Recopier les autres, et exceller dans les photos d’avocado toast et de doigts de pied au bord de la piscine devraient largement suffire.",
            "response_correct" => true,
            "action" => -20
        ]);
        DB::table('responses')->insert([
            'question_id' => 21 + 1,
            'order' => 2,
            'response' => "Aucune idée, « YOLO » comme disent les jeunes. Les gens finiront bien par me suivre.",
            "response_correct" => false,
            "action" => -10
        ]);


        DB::table('responses')->insert([
            'question_id' => 22 + 1,
            'order' => 0,
            'response' => "Je ne suis pas radin avec mes abonnés, il faut savoir donner un peu.",
            "response_correct" => true,
            "action" => +50
        ]);
        DB::table('responses')->insert([
            'question_id' => 22 + 1,
            'order' => 1,
            'response' => "Non, mon intimité n’a rien affaire sur mon blog et mes réseaux.",
            "response_correct" => true,
            "action" => -30
        ]);
        DB::table('responses')->insert([
            'question_id' => 22 + 1,
            'order' => 2,
            'response' => "Oui, il faut tout dire, être authentique et le plus transparent avec ses abonnés, c’est le plus important.",
            "response_correct" => false,
            "action" => -30
        ]);



        DB::table('responses')->insert([
            'question_id' => 23 + 1,
            'order' => 0,
            'response' => "Bah oui, sinon les gens ne vont jamais me suivre.",
            "response_correct" => false,
            "action" => -20
        ]);
        DB::table('responses')->insert([
            'question_id' => 23 + 1,
            'order' => 1,
            'response' => "Ma vie est tout simplement incroyable et ressemble exactement à ce que je poste.",
            "response_correct" => false,
            "action" => -30
        ]);
        DB::table('responses')->insert([
            'question_id' => 23 + 1,
            'order' => 2,
            'response' => "C’est plus subtil que cela, il faut savoir se mettre en avant sans trahir la réalité",
            "response_correct" => true,
            "action" => +80
        ]);



        DB::table('responses')->insert([
            'question_id' => 24 + 1,
            'order' => 0,
            'response' => "C’est trop bien, on m’envoit des cadeaux pas besoin d’en demander plus ! ",
            "response_correct" => false,
            "action" => -40
        ]);
        DB::table('responses')->insert([
            'question_id' => 24 + 1,
            'order' => 1,
            'response' => "Je débute, donc ok pour les cadeaux maintenant, mais à l’avenir je compte  demander un petit pécule.",
            "response_correct" => true,
            "action" => 100
        ]);
        DB::table('responses')->insert([
            'question_id' => 24 + 1,
            'order' => 2,
            'response' => "C’est parti pour la négociation, une photo sur Instagram c’est minimum 1000 francs et pour un article sur mon blog, entre 2000 et 5000 francs. En deça, la marque peut aller chercher un autre influenceur ! ",
            "response_correct" => false,
            "action" => -40
        ]);



        DB::table('responses')->insert([
            'question_id' => 25 + 1,
            'order' => 0,
            'response' => "J’ai directement tout plaqué pour mon activité d’influenceur, je suis déjà un pro",
            "response_correct" => false,
            "action" => -20
        ]);
        DB::table('responses')->insert([
            'question_id' => 25 + 1,
            'order' => 1,
            'response' => "Je commence à pouvoir en vivre, je suis donc un pro",
            "response_correct" => true,
            "action" => 120
        ]);
        DB::table('responses')->insert([
            'question_id' => 25 + 1,
            'order' => 2,
            'response' => "C’est impossible de vivre de cette activité ",
            "response_correct" => false,
            "action" => -20
        ]);



        DB::table('responses')->insert([
            'question_id' => 26 + 1,
            'order' => 0,
            'response' => "Pas besoin de déclarer quoique ce soit",
            "response_correct" => false,
            "action" => -20
        ]);
        DB::table('responses')->insert([
            'question_id' => 26 + 1,
            'order' => 1,
            'response' => "Tout dépend de la valeur des cadeaux et de mon statut",
            "response_correct" => true,
            "action" => 150
        ]);
        DB::table('responses')->insert([
            'question_id' => 26 + 1,
            'order' => 2,
            'response' => "Tant que je ne me fais pas épingler, je ne déclare rien",
            "response_correct" => false,
            "action" => -20
        ]);


    }
}
