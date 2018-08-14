<?php

use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   1,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Vous avez décidé de vous lancer dans ce monde impitoyable des influenceurs, mais techniquement vous hésitez, sur quel réseau social allez-vous vous concentrer ?",
            "response" => "Les influenceurs distinguent leur blog personnel et les réseaux sociaux. Pour les réseaux sociaux, c’est surtout Instagram qui a les faveurs des influenceurs. C’est la plateforme de business pour les influenceurs, et pour les marques. Paloma Tortillon, blogueuse de produits naturels, privilégie ce réseau social de photos et son système de stories qui lui permet d'interagir facilement avec sa communauté.
Gagner en visibilité et promouvoir son propre blog : voilà les principales fonctions des réseaux sociaux pour le bloggueur lifestyle, Jorge Guerreiro. «Instagram et Facebook appartiennent à Mark Zuckerberg, il suffit qu’il en change les règles et je perds de l’argent.»  
Pourquoi ce n’est ni Facebook, ni LinkedIn ? Facebook n’a plus autant la côte, surtout auprès des jeunes. Si LinkedIn se démocratrise, elle pourrait selon Jorge Guerreiro devenir la futur plateforme des influenceurs. 
"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   2,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Mais au fait, savez-vous combien de temps ça prend d’être influenceur sur les réseaux sociaux ?",
            "response" => "Que ce soit en amateur ou comme professionnel, être influenceur est chronophage. Six heures de travail sont parfois nécessaires à certains blogueurs pour écrire un article sur leur blog. Paloma Tortillon peut passer deux heures juste pour poster une photo sur son compte Instagram.
Se faire une audience prend également énormément de temps: «Construire une communauté et développer une vraie relation avec elle est un travail de très longue haleine qui nécessite des années. Je dirais qu’il faut à la fois être un superbe sprinter dans l’exécution au jour le jour et un incroyable marathonien au niveau stratégique», explique Dan Noël, expert en digital marketing à Neuchâtel
"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   3,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Vous habitez dans le canton de Neuchâtel, pour l’instant vous n’avez pas prévu de déménager, mais une question vous taraude : est-ce possible de percer ici ?",
            "response" => "Le numérique  ne connaît pas de frontière, et c’est un réel atout pour les influenceurs neuchâtelois. 
Paloma Tortillon ne voit aucun problème à débuter dans la région. «En étant à Neuchâtel, on a le bord du lac et les Alpes: les photos incroyables des instagrameurs, on peut les prendre ici!»
Jorge Guerreiro est du même avis. «J’ai démarré ici, à mon petit niveau. Donc c’est possible. Il faut juste se différencier.» Pour lui, le cercle des proches et des connaissances est nécessaire pour démarrer. «Si tu commences à Shanghai ou à New York, tu seras le 6700e, à Neuchâtel, tu te démarques rapidement», ajoute-t-il. Il y a peu de concurrence dans la région. «Par contre, quand tu veux croître, ton régionalisme peut être un handicap», nuance-t-il. Créer son réseau professionnel et avoir accès à de grandes enseignes est plus évident dans une mégalopole. 
Pour Laurence Allard, sociologue et professeur à La Sorbonne, le travail de l’influenceur est de se présenter comme étant le plus authentique possible et donc si la localisation fait partie de son authenticité c’est important de la cultiver, de mettre en scène cette dimension.   
"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   4,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Vous n’êtes pas le premier à vouloir vous lancer dans ce milieu. Vous avez déjà rédigé une quinzaine d’articles sur votre blog, vous comptez une centaine de photos sur Instagram, mais bizarrement ça ne décolle pas. Comment comptez-vous vous démarquer ?",
            "response" => "Pas facile de se démarquer dans ce monde où la concurrence fait rage. «Il faut avoir de la patience et trouver son domaine de prédilection», analyse Paloma Tortillon. 
Alors inutile de recopier et de trop s’inspirer de ce qui se fait déjà. Sur la toile, ce qui marche, c’est surtout l’originalité note la plupart des influenceurs. 
Devenir visible sur les réseaux sociaux est de plus en plus compliqué, notamment avec les algorithmes qui trient les contenus. «Aujourd’hui, il y a une cacophonie digitale, un nombre incalculable de voix, il s’agit de faire ressortir la sienne. Il faut trouver son domaine de niche ou avoir une vision très différente sur un domaine large», conseille Jorge Guerreiro."
        ]);

        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   5,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Vous avez pris une photo de « kiki », votre animal de compagnie, mais vous hésitez à la poster. Est-ce que vous avez envie de montrer à tous vos followers votre compagnon préféré ?  Vous constatez que la plupart des influenceurs partagent leur intimité, mais est-ce vraiment un passage obligé ? Comptez-vous faire de même ?",
            "response" => "«Si tu vas sur mes réseaux sociaux, tu auras l’impression que tu sais tout de moi. Mais c’est une version mise en scène, un «best of me»», explique Jorge Guerreiro. L’influenceur lifestyle s’est donc fixé des limites : «Je me préserve». Il ne confie pas l’état de ses finances, de sa santé ou sa vie sentimentale. 
De son côté, Paloma Tortillon cherche le bon équilibre. «Je ne partage pas des événements trop intimes, mais je donne un peu car on fait partie du quotidien des gens, et ils ont l’impression de nous connaitre.» Sa limite: donner des informations avec lequel elle est à l’aise. OK pour dire qu'elle a 24 ans, que son père est Espagnol et sa mère Italienne, «mais mon nom de famille, je ne l’ai jamais communiqué et je ne vais pas dire où j’habite». 
La sociologue, Laurence Allard, ne pense pas que l’influenceur doive partager son intimité. « Ce n’est pas aussi trivial que cela. » Selon elle, l’influenceur va plutôt partager sa subjectivité : « ce qu’il a dans le ventre, son intériorité. »
"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   6,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Vous partez en vacances. L’occasion parfaite de partager ce moment avec vos abonnés. Problème : la plage est bondée de touristes. C’est loin d’être paradisiaque… Les influenceurs sont passés maîtres dans les photos qui nous font baver de jalousie. Alors, à quel point vos contenus doivent-ils refléter la réalité? Devez-vous vendre du rêve à tout prix? ",
            "response" => "Souvent, les abonnés imaginent que la vie d’influenceur est faite de chaussures, de sacs et de produits gratuits. Mais c’est une infime partie de la réalité. La majorité de leur journée, il la passe devant leur ordinateur, à chercher du contenu qui plaise et qui fera de l’audience.
«Pourquoi je donnerai des recettes contre l’acné si j’ai une peau parfaite? Ça ne rime à rien», estime Paloma Tortillon. «La mise en scène, c’est clairement l’état de l’appartement avant la photo!», ajoute-t-elle.  
Jorge Guerreiro fait le choix de ne poster que les événements qu’il a apprécié. Les mauvaises expériences n’ont pas sa place sur son blog. «J’ai la chance de beaucoup voyager et même si les photos sont belles, ça reste toujours sincère. Je tiens à garder ma faculté d’émerveillement.»
Pour Laurence Allard, l’authenticité de l’influenceur est construit : « On vous laisse croire que l’influenceur est vraiment cool ou naturel, mais il est obligé de performer son caractère ordinaire. » Cette authenticité est travaillée. L’objectif est de paraître toujours plus vrai « même si tout est construit de A à Z ».
"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   7,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Votre activité d’influenceur commence à prendre de l’ampleur. Vous comptez de plus en plus de followers et vous vous faites repérer par des marques. D’ailleurs, une jeune marque entre en contact avec vous, comment allez-vous négocier l’affaire ?",
            "response" => "Pour Dan Noël, tout dépend des marques et de l’influenceur. « Il faut trouver un terrain commun et un mode de collaboration ‘’gagnant-gagnant’’. »
« Au début, il s’agissait d’un échange de bon procédé du type : tu bénéficies d’un produit/service et si tu l’apprécies, tu en parles à ta communauté. Aujourd’hui et avec la professionnalisation de cette activité, il s’agit souvent d’une transaction financière contre un accès à une communauté au travers d’un relai de confiance (l’influenceur). »
Pour lui, toute la difficulté est de déterminer combien cela vaut ? « S’agit-il uniquement d’une simple publication avec le produit ou de la conception d’une stratégie de contenu et de diffusion complète ? »
Pour Paloma, débutante dans le domaine, les collaborations dépendent de ses publications. Si elle ne poste aucun contenu pendant une certaine période, elle n’aura aucun mandat. Parfois, elle va elle-même contacter les marques «le monde du naturel est assez petit donc les marques me répondent souvent.»"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   8,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Ça y est, vous êtes rodés à l’exercice. Vous voulez qu’on vous prenne au sérieux. Vous avez un vrai talent que vous avez travaillé et vous voulez passer à la prochaine étape, mais comment passer d’amateur à professionnel ? ",
            "response" => "«À partir du moment où ceux-ci peuvent en vivre. Car se faire offrir des produits c’est sympathique mais cela ne permet pas de payer le loyer», lance Dan Noël. 
« Aujourd’hui, les choses se structurent et les influenceurs qui souhaitent réussir ne peuvent plus se contenter d’écrire des articles ou faire des belles photos au Creux-du-Van. » 
La monétisation reste l'enjeu majeur dans ces nouveaux métiers. «Il faut être capable de proposer un véritable service aux marques, être en mesure de démarcher des clients et négocier des éventuels contrats. En une phrase: devenir sa propre entreprise média!»
Laurence Allard voit ce milieu comme une véritable économie. L’objectif est clair : que tout le monde gagne de l’argent. « Les influenceurs mettent en avant des produits, les agents prennent un pourcentage, les marques vendent leur marchandise etc. » "
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   9,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Les cadeaux s’enchaînent, les contrats aussi, qu’allez-vous déclarer aux impôts? Faut-il déclarer tous ses revenus et cadeaux ?",
            "response" => "«Si l’influenceur tire un revenu de son activité, alors évidemment cela doit être déclaré, comme tout revenu. Si l’influenceur a gardé un travail mais fait ça à côté, cela doit être déclaré comme revenu complémentaire.» Si l'influenceur est un professionnel, il doit s'inscrire en tant qu'indépendant, «ce qui est mon cas», précise Jorge. Autre possibilité, il peut aussi créer sa propre société (SARL, SA...) qui gérera ses revenus et dont il sera salarié. 
Et concernant les cadeaux reçus par les marques? «Les petits cadeaux s’apparentant à des échantillons, mais évidemment si ce sont des cadeaux d’importante valeur ils devraient être estimés et comptés dans le revenu», rappelle le blogueur. 
"]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   10,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Vous avez décidé de vous lancer dans ce monde impitoyable des influenceurs, mais techniquement vous hésitez, sur quel réseau social allez-vous vous concentrer ?",
            "response" => "Les influenceurs distinguent leur blog personnel et les réseaux sociaux. Pour les réseaux sociaux, c’est surtout Instagram qui a les faveurs des influenceurs. C’est la plateforme de business pour les influenceurs, et pour les marques. Paloma Tortillon, blogueuse de produits naturels, privilégie ce réseau social de photos et son système de stories qui lui permet d'interagir facilement avec sa communauté.
Gagner en visibilité et promouvoir son propre blog : voilà les principales fonctions des réseaux sociaux pour le bloggueur lifestyle, Jorge Guerreiro. «Instagram et Facebook appartiennent à Mark Zuckerberg, il suffit qu’il en change les règles et je perds de l’argent.»  
Pourquoi ce n’est ni Facebook, ni LinkedIn ? Facebook n’a plus autant la côte, surtout auprès des jeunes. Si LinkedIn se démocratrise, elle pourrait selon Jorge Guerreiro devenir la futur plateforme des influenceurs. 
"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   11,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Mais au fait, savez-vous combien de temps ça prend d’être influenceur sur les réseaux sociaux ?",
            "response" => "Que ce soit en amateur ou comme professionnel, être influenceur est chronophage. Six heures de travail sont parfois nécessaires à certains blogueurs pour écrire un article sur leur blog. Paloma Tortillon peut passer deux heures juste pour poster une photo sur son compte Instagram.
Se faire une audience prend également énormément de temps: «Construire une communauté et développer une vraie relation avec elle est un travail de très longue haleine qui nécessite des années. Je dirais qu’il faut à la fois être un superbe sprinter dans l’exécution au jour le jour et un incroyable marathonien au niveau stratégique», explique Dan Noël, expert en digital marketing à Neuchâtel
"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   12,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Vous habitez dans le canton de Neuchâtel, pour l’instant vous n’avez pas prévu de déménager, mais une question vous taraude : est-ce possible de percer ici ?",
            "response" => "Le numérique  ne connaît pas de frontière, et c’est un réel atout pour les influenceurs neuchâtelois. 
Paloma Tortillon ne voit aucun problème à débuter dans la région. «En étant à Neuchâtel, on a le bord du lac et les Alpes: les photos incroyables des instagrameurs, on peut les prendre ici!»
Jorge Guerreiro est du même avis. «J’ai démarré ici, à mon petit niveau. Donc c’est possible. Il faut juste se différencier.» Pour lui, le cercle des proches et des connaissances est nécessaire pour démarrer. «Si tu commences à Shanghai ou à New York, tu seras le 6700e, à Neuchâtel, tu te démarques rapidement», ajoute-t-il. Il y a peu de concurrence dans la région. «Par contre, quand tu veux croître, ton régionalisme peut être un handicap», nuance-t-il. Créer son réseau professionnel et avoir accès à de grandes enseignes est plus évident dans une mégalopole. 
Pour Laurence Allard, sociologue et professeur à La Sorbonne, le travail de l’influenceur est de se présenter comme étant le plus authentique possible et donc si la localisation fait partie de son authenticité c’est important de la cultiver, de mettre en scène cette dimension.   
"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   13,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Vous n’êtes pas le premier à vouloir vous lancer dans ce milieu. Vous avez déjà rédigé une quinzaine d’articles sur votre blog, vous comptez une centaine de photos sur Instagram, mais bizarrement ça ne décolle pas. Comment comptez-vous vous démarquer ?",
            "response" => "Pas facile de se démarquer dans ce monde où la concurrence fait rage. «Il faut avoir de la patience et trouver son domaine de prédilection», analyse Paloma Tortillon. 
Alors inutile de recopier et de trop s’inspirer de ce qui se fait déjà. Sur la toile, ce qui marche, c’est surtout l’originalité note la plupart des influenceurs. 
Devenir visible sur les réseaux sociaux est de plus en plus compliqué, notamment avec les algorithmes qui trient les contenus. «Aujourd’hui, il y a une cacophonie digitale, un nombre incalculable de voix, il s’agit de faire ressortir la sienne. Il faut trouver son domaine de niche ou avoir une vision très différente sur un domaine large», conseille Jorge Guerreiro."
        ]);

        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   14,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Vous avez pris une photo de « kiki », votre animal de compagnie, mais vous hésitez à la poster. Est-ce que vous avez envie de montrer à tous vos followers votre compagnon préféré ?  Vous constatez que la plupart des influenceurs partagent leur intimité, mais est-ce vraiment un passage obligé ? Comptez-vous faire de même ?",
            "response" => "«Si tu vas sur mes réseaux sociaux, tu auras l’impression que tu sais tout de moi. Mais c’est une version mise en scène, un «best of me»», explique Jorge Guerreiro. L’influenceur lifestyle s’est donc fixé des limites : «Je me préserve». Il ne confie pas l’état de ses finances, de sa santé ou sa vie sentimentale. 
De son côté, Paloma Tortillon cherche le bon équilibre. «Je ne partage pas des événements trop intimes, mais je donne un peu car on fait partie du quotidien des gens, et ils ont l’impression de nous connaitre.» Sa limite: donner des informations avec lequel elle est à l’aise. OK pour dire qu'elle a 24 ans, que son père est Espagnol et sa mère Italienne, «mais mon nom de famille, je ne l’ai jamais communiqué et je ne vais pas dire où j’habite». 
La sociologue, Laurence Allard, ne pense pas que l’influenceur doive partager son intimité. « Ce n’est pas aussi trivial que cela. » Selon elle, l’influenceur va plutôt partager sa subjectivité : « ce qu’il a dans le ventre, son intériorité. »
"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   15,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Vous partez en vacances. L’occasion parfaite de partager ce moment avec vos abonnés. Problème : la plage est bondée de touristes. C’est loin d’être paradisiaque… Les influenceurs sont passés maîtres dans les photos qui nous font baver de jalousie. Alors, à quel point vos contenus doivent-ils refléter la réalité? Devez-vous vendre du rêve à tout prix? ",
            "response" => "Souvent, les abonnés imaginent que la vie d’influenceur est faite de chaussures, de sacs et de produits gratuits. Mais c’est une infime partie de la réalité. La majorité de leur journée, il la passe devant leur ordinateur, à chercher du contenu qui plaise et qui fera de l’audience.
«Pourquoi je donnerai des recettes contre l’acné si j’ai une peau parfaite? Ça ne rime à rien», estime Paloma Tortillon. «La mise en scène, c’est clairement l’état de l’appartement avant la photo!», ajoute-t-elle.  
Jorge Guerreiro fait le choix de ne poster que les événements qu’il a apprécié. Les mauvaises expériences n’ont pas sa place sur son blog. «J’ai la chance de beaucoup voyager et même si les photos sont belles, ça reste toujours sincère. Je tiens à garder ma faculté d’émerveillement.»
Pour Laurence Allard, l’authenticité de l’influenceur est construit : « On vous laisse croire que l’influenceur est vraiment cool ou naturel, mais il est obligé de performer son caractère ordinaire. » Cette authenticité est travaillée. L’objectif est de paraître toujours plus vrai « même si tout est construit de A à Z ».
"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   16,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Votre activité d’influenceur commence à prendre de l’ampleur. Vous comptez de plus en plus de followers et vous vous faites repérer par des marques. D’ailleurs, une jeune marque entre en contact avec vous, comment allez-vous négocier l’affaire ?",
            "response" => "Pour Dan Noël, tout dépend des marques et de l’influenceur. « Il faut trouver un terrain commun et un mode de collaboration ‘’gagnant-gagnant’’. »
« Au début, il s’agissait d’un échange de bon procédé du type : tu bénéficies d’un produit/service et si tu l’apprécies, tu en parles à ta communauté. Aujourd’hui et avec la professionnalisation de cette activité, il s’agit souvent d’une transaction financière contre un accès à une communauté au travers d’un relai de confiance (l’influenceur). »
Pour lui, toute la difficulté est de déterminer combien cela vaut ? « S’agit-il uniquement d’une simple publication avec le produit ou de la conception d’une stratégie de contenu et de diffusion complète ? »
Pour Paloma, débutante dans le domaine, les collaborations dépendent de ses publications. Si elle ne poste aucun contenu pendant une certaine période, elle n’aura aucun mandat. Parfois, elle va elle-même contacter les marques «le monde du naturel est assez petit donc les marques me répondent souvent.»"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   17,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Ça y est, vous êtes rodés à l’exercice. Vous voulez qu’on vous prenne au sérieux. Vous avez un vrai talent que vous avez travaillé et vous voulez passer à la prochaine étape, mais comment passer d’amateur à professionnel ? ",
            "response" => "«À partir du moment où ceux-ci peuvent en vivre. Car se faire offrir des produits c’est sympathique mais cela ne permet pas de payer le loyer», lance Dan Noël. 
« Aujourd’hui, les choses se structurent et les influenceurs qui souhaitent réussir ne peuvent plus se contenter d’écrire des articles ou faire des belles photos au Creux-du-Van. » 
La monétisation reste l'enjeu majeur dans ces nouveaux métiers. «Il faut être capable de proposer un véritable service aux marques, être en mesure de démarcher des clients et négocier des éventuels contrats. En une phrase: devenir sa propre entreprise média!»
Laurence Allard voit ce milieu comme une véritable économie. L’objectif est clair : que tout le monde gagne de l’argent. « Les influenceurs mettent en avant des produits, les agents prennent un pourcentage, les marques vendent leur marchandise etc. » "
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   18,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Les cadeaux s’enchaînent, les contrats aussi, qu’allez-vous déclarer aux impôts? Faut-il déclarer tous ses revenus et cadeaux ?",
            "response" => "«Si l’influenceur tire un revenu de son activité, alors évidemment cela doit être déclaré, comme tout revenu. Si l’influenceur a gardé un travail mais fait ça à côté, cela doit être déclaré comme revenu complémentaire.» Si l'influenceur est un professionnel, il doit s'inscrire en tant qu'indépendant, «ce qui est mon cas», précise Jorge. Autre possibilité, il peut aussi créer sa propre société (SARL, SA...) qui gérera ses revenus et dont il sera salarié. 
Et concernant les cadeaux reçus par les marques? «Les petits cadeaux s’apparentant à des échantillons, mais évidemment si ce sont des cadeaux d’importante valeur ils devraient être estimés et comptés dans le revenu», rappelle le blogueur. 
"]);        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   19,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Vous avez décidé de vous lancer dans ce monde impitoyable des influenceurs, mais techniquement vous hésitez, sur quel réseau social allez-vous vous concentrer ?",
            "response" => "Les influenceurs distinguent leur blog personnel et les réseaux sociaux. Pour les réseaux sociaux, c’est surtout Instagram qui a les faveurs des influenceurs. C’est la plateforme de business pour les influenceurs, et pour les marques. Paloma Tortillon, blogueuse de produits naturels, privilégie ce réseau social de photos et son système de stories qui lui permet d'interagir facilement avec sa communauté.
Gagner en visibilité et promouvoir son propre blog : voilà les principales fonctions des réseaux sociaux pour le bloggueur lifestyle, Jorge Guerreiro. «Instagram et Facebook appartiennent à Mark Zuckerberg, il suffit qu’il en change les règles et je perds de l’argent.»  
Pourquoi ce n’est ni Facebook, ni LinkedIn ? Facebook n’a plus autant la côte, surtout auprès des jeunes. Si LinkedIn se démocratrise, elle pourrait selon Jorge Guerreiro devenir la futur plateforme des influenceurs. 
"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   20,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Mais au fait, savez-vous combien de temps ça prend d’être influenceur sur les réseaux sociaux ?",
            "response" => "Que ce soit en amateur ou comme professionnel, être influenceur est chronophage. Six heures de travail sont parfois nécessaires à certains blogueurs pour écrire un article sur leur blog. Paloma Tortillon peut passer deux heures juste pour poster une photo sur son compte Instagram.
Se faire une audience prend également énormément de temps: «Construire une communauté et développer une vraie relation avec elle est un travail de très longue haleine qui nécessite des années. Je dirais qu’il faut à la fois être un superbe sprinter dans l’exécution au jour le jour et un incroyable marathonien au niveau stratégique», explique Dan Noël, expert en digital marketing à Neuchâtel
"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   21,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Vous habitez dans le canton de Neuchâtel, pour l’instant vous n’avez pas prévu de déménager, mais une question vous taraude : est-ce possible de percer ici ?",
            "response" => "Le numérique  ne connaît pas de frontière, et c’est un réel atout pour les influenceurs neuchâtelois. 
Paloma Tortillon ne voit aucun problème à débuter dans la région. «En étant à Neuchâtel, on a le bord du lac et les Alpes: les photos incroyables des instagrameurs, on peut les prendre ici!»
Jorge Guerreiro est du même avis. «J’ai démarré ici, à mon petit niveau. Donc c’est possible. Il faut juste se différencier.» Pour lui, le cercle des proches et des connaissances est nécessaire pour démarrer. «Si tu commences à Shanghai ou à New York, tu seras le 6700e, à Neuchâtel, tu te démarques rapidement», ajoute-t-il. Il y a peu de concurrence dans la région. «Par contre, quand tu veux croître, ton régionalisme peut être un handicap», nuance-t-il. Créer son réseau professionnel et avoir accès à de grandes enseignes est plus évident dans une mégalopole. 
Pour Laurence Allard, sociologue et professeur à La Sorbonne, le travail de l’influenceur est de se présenter comme étant le plus authentique possible et donc si la localisation fait partie de son authenticité c’est important de la cultiver, de mettre en scène cette dimension.   
"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   22,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Vous n’êtes pas le premier à vouloir vous lancer dans ce milieu. Vous avez déjà rédigé une quinzaine d’articles sur votre blog, vous comptez une centaine de photos sur Instagram, mais bizarrement ça ne décolle pas. Comment comptez-vous vous démarquer ?",
            "response" => "Pas facile de se démarquer dans ce monde où la concurrence fait rage. «Il faut avoir de la patience et trouver son domaine de prédilection», analyse Paloma Tortillon. 
Alors inutile de recopier et de trop s’inspirer de ce qui se fait déjà. Sur la toile, ce qui marche, c’est surtout l’originalité note la plupart des influenceurs. 
Devenir visible sur les réseaux sociaux est de plus en plus compliqué, notamment avec les algorithmes qui trient les contenus. «Aujourd’hui, il y a une cacophonie digitale, un nombre incalculable de voix, il s’agit de faire ressortir la sienne. Il faut trouver son domaine de niche ou avoir une vision très différente sur un domaine large», conseille Jorge Guerreiro."
        ]);

        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   23,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Vous avez pris une photo de « kiki », votre animal de compagnie, mais vous hésitez à la poster. Est-ce que vous avez envie de montrer à tous vos followers votre compagnon préféré ?  Vous constatez que la plupart des influenceurs partagent leur intimité, mais est-ce vraiment un passage obligé ? Comptez-vous faire de même ?",
            "response" => "«Si tu vas sur mes réseaux sociaux, tu auras l’impression que tu sais tout de moi. Mais c’est une version mise en scène, un «best of me»», explique Jorge Guerreiro. L’influenceur lifestyle s’est donc fixé des limites : «Je me préserve». Il ne confie pas l’état de ses finances, de sa santé ou sa vie sentimentale. 
De son côté, Paloma Tortillon cherche le bon équilibre. «Je ne partage pas des événements trop intimes, mais je donne un peu car on fait partie du quotidien des gens, et ils ont l’impression de nous connaitre.» Sa limite: donner des informations avec lequel elle est à l’aise. OK pour dire qu'elle a 24 ans, que son père est Espagnol et sa mère Italienne, «mais mon nom de famille, je ne l’ai jamais communiqué et je ne vais pas dire où j’habite». 
La sociologue, Laurence Allard, ne pense pas que l’influenceur doive partager son intimité. « Ce n’est pas aussi trivial que cela. » Selon elle, l’influenceur va plutôt partager sa subjectivité : « ce qu’il a dans le ventre, son intériorité. »
"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   24,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Vous partez en vacances. L’occasion parfaite de partager ce moment avec vos abonnés. Problème : la plage est bondée de touristes. C’est loin d’être paradisiaque… Les influenceurs sont passés maîtres dans les photos qui nous font baver de jalousie. Alors, à quel point vos contenus doivent-ils refléter la réalité? Devez-vous vendre du rêve à tout prix? ",
            "response" => "Souvent, les abonnés imaginent que la vie d’influenceur est faite de chaussures, de sacs et de produits gratuits. Mais c’est une infime partie de la réalité. La majorité de leur journée, il la passe devant leur ordinateur, à chercher du contenu qui plaise et qui fera de l’audience.
«Pourquoi je donnerai des recettes contre l’acné si j’ai une peau parfaite? Ça ne rime à rien», estime Paloma Tortillon. «La mise en scène, c’est clairement l’état de l’appartement avant la photo!», ajoute-t-elle.  
Jorge Guerreiro fait le choix de ne poster que les événements qu’il a apprécié. Les mauvaises expériences n’ont pas sa place sur son blog. «J’ai la chance de beaucoup voyager et même si les photos sont belles, ça reste toujours sincère. Je tiens à garder ma faculté d’émerveillement.»
Pour Laurence Allard, l’authenticité de l’influenceur est construit : « On vous laisse croire que l’influenceur est vraiment cool ou naturel, mais il est obligé de performer son caractère ordinaire. » Cette authenticité est travaillée. L’objectif est de paraître toujours plus vrai « même si tout est construit de A à Z ».
"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   25,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Votre activité d’influenceur commence à prendre de l’ampleur. Vous comptez de plus en plus de followers et vous vous faites repérer par des marques. D’ailleurs, une jeune marque entre en contact avec vous, comment allez-vous négocier l’affaire ?",
            "response" => "Pour Dan Noël, tout dépend des marques et de l’influenceur. « Il faut trouver un terrain commun et un mode de collaboration ‘’gagnant-gagnant’’. »
« Au début, il s’agissait d’un échange de bon procédé du type : tu bénéficies d’un produit/service et si tu l’apprécies, tu en parles à ta communauté. Aujourd’hui et avec la professionnalisation de cette activité, il s’agit souvent d’une transaction financière contre un accès à une communauté au travers d’un relai de confiance (l’influenceur). »
Pour lui, toute la difficulté est de déterminer combien cela vaut ? « S’agit-il uniquement d’une simple publication avec le produit ou de la conception d’une stratégie de contenu et de diffusion complète ? »
Pour Paloma, débutante dans le domaine, les collaborations dépendent de ses publications. Si elle ne poste aucun contenu pendant une certaine période, elle n’aura aucun mandat. Parfois, elle va elle-même contacter les marques «le monde du naturel est assez petit donc les marques me répondent souvent.»"
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   26,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Ça y est, vous êtes rodés à l’exercice. Vous voulez qu’on vous prenne au sérieux. Vous avez un vrai talent que vous avez travaillé et vous voulez passer à la prochaine étape, mais comment passer d’amateur à professionnel ? ",
            "response" => "«À partir du moment où ceux-ci peuvent en vivre. Car se faire offrir des produits c’est sympathique mais cela ne permet pas de payer le loyer», lance Dan Noël. 
« Aujourd’hui, les choses se structurent et les influenceurs qui souhaitent réussir ne peuvent plus se contenter d’écrire des articles ou faire des belles photos au Creux-du-Van. » 
La monétisation reste l'enjeu majeur dans ces nouveaux métiers. «Il faut être capable de proposer un véritable service aux marques, être en mesure de démarcher des clients et négocier des éventuels contrats. En une phrase: devenir sa propre entreprise média!»
Laurence Allard voit ce milieu comme une véritable économie. L’objectif est clair : que tout le monde gagne de l’argent. « Les influenceurs mettent en avant des produits, les agents prennent un pourcentage, les marques vendent leur marchandise etc. » "
        ]);
        DB::table('questions')->insert([
            'questionnaire_timeline_event_id' =>   27,
            'media' => "<img src='/img/photos/rectangle_11.jpg' />",
            'question' => "Les cadeaux s’enchaînent, les contrats aussi, qu’allez-vous déclarer aux impôts? Faut-il déclarer tous ses revenus et cadeaux ?",
            "response" => "«Si l’influenceur tire un revenu de son activité, alors évidemment cela doit être déclaré, comme tout revenu. Si l’influenceur a gardé un travail mais fait ça à côté, cela doit être déclaré comme revenu complémentaire.» Si l'influenceur est un professionnel, il doit s'inscrire en tant qu'indépendant, «ce qui est mon cas», précise Jorge. Autre possibilité, il peut aussi créer sa propre société (SARL, SA...) qui gérera ses revenus et dont il sera salarié. 
Et concernant les cadeaux reçus par les marques? «Les petits cadeaux s’apparentant à des échantillons, mais évidemment si ce sont des cadeaux d’importante valeur ils devraient être estimés et comptés dans le revenu», rappelle le blogueur. 
"]);
    }
}
