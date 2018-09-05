<?php

use Illuminate\Database\Seeder;

class ArticleSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_sections')->insert([
            'order' => 0,
            'title' => 'Le monde des influenceurs : une économie à part entière',
            'cover' => '/img/photos/article__banniere.jpg',
            'accroche' => 'Vous l’aurez compris : être influenceur ne signifie pas simplement se prendre en photo, parler de soi et faire du placement de produits. Toute une économie s’est mise en place autour de ces leader d’opinion 2.0. Mais qui sont-ils ? Avec qui travaillent-ils ? Sont-ils des concurrents de la presse ? Laurence Allard et Dan Noël, deux spécialistes dans le domaine, nous livrent leur analyse.',
            'content' => "<div class='article__mini__bloc'><h2>Qu&rsquo;est-ce qu&rsquo;un influenceur ?</h2>

<p>Laurence Allard, professeure &agrave; La Sorbonne, a &eacute;tudi&eacute; l&rsquo;&eacute;conomie de l&rsquo;influence. Elle d&eacute;crit un influenceur comme &laquo; une personnalit&eacute; &raquo; qui s&rsquo;exprime &agrave; travers des vid&eacute;os, des articles, des photos. Il se met en sc&egrave;ne, se performe.&nbsp; &laquo; L&rsquo;influenceur travaille &agrave; &ecirc;tre lui-m&ecirc;me, &agrave; &ecirc;tre authentique. &raquo; Il est transfigur&eacute; en &laquo; talent &raquo; par toute une &eacute;conomie d&rsquo;acteurs qui vit autour de la plateforme.</p>

<p>&laquo; Ce qui est int&eacute;ressant c&rsquo;est le moment o&ugrave; l&rsquo;individu est rep&eacute;r&eacute; comme talent pouvant pr&eacute;tendre &agrave; &ecirc;tre influent &raquo;, note la sociologue.</p>

<p>Une fois reconnu par ses pairs, il devient un ambassadeur de marque. Il est mon&eacute;tisable aupr&egrave;s de ces enseignes et pourra devenir lui-m&ecirc;me une marque.</p>

<p>Pour Dan No&euml;l, expert en marketing digital et fondateur de l&rsquo;agence Starterland &agrave; Neuch&acirc;tel, un influenceur est une personne qui &laquo; par son statut, sa position ou son exposition m&eacute;diatique peut influencer les comportements de consommation et d&rsquo;achat &raquo;. Cette d&eacute;finition est devenue plus complexe avec la digitalisation.</p>

<p>&laquo; Je dirais que l&rsquo;activit&eacute; d&rsquo;influenceur consiste &agrave; d&eacute;velopper son autorit&eacute; dans un domaine qui nous passionne, de construire une communaut&eacute; fid&egrave;le, r&eacute;elle et surtout engag&eacute;e autour de cette th&eacute;matique ainsi que sa propre personne &raquo;, r&eacute;sume-t-il.</p>
</div>
" ]);
        DB::table('article_sections')->insert([
            'order' => 1,
            'title' => 'Une authenticité construite ',
            'cover' => '/img/photos/article__banniere.jpg',
            'accroche' => null,
            'content' => "<div class='article__mini__bloc'>
                <p>La sociologue, Laurence Allard, ne pense pas que l’influenceur doive partager son intimité. « Ce n’est pas une mise à nue de son intimité, ce n’est pas aussi trivial que cela. » Selon elle, l’influenceur va plutôt partager sa subjectivité : « ce qu’il a dans le ventre, son intériorité. On parle de ‘’belle personne morale’’, c’est-à-dire un individu qui va exprimer son imaginaire, sa créativité à travers une vidéo, une photo ou un Snap. »
                L’influenceur va apprendre à mettre en scène sa subjectivité, il va acquérir des compétences pour la sublimer.  « Il y a cette vision très romantique qui consiste à dire que celle-ci est innée. » Mais cette intériorité, propre au talent, se construit par le biais de son univers personnel qu’il partage. 
                Ce naturel est donc une pure construction qui s’appelle l’authenticité. « On vous laisse croire que l’influenceur est vraiment cool ou naturel, mais il est obligé de performer son caractère ordinaire. » Cette authenticité est travaillée, cultivée. L’objectif est de paraître toujours plus vrai « même si tout est construit de A à Z ».
                Aujourd’hui, les gens veulent s’identifier à des personnes qui leur ressemblent. « Enjoy Phoenix a des boutons, elle fait des régimes. Ce n’est pas une star anorexique, qui fait une taille 34. On n’est plus dans cette recherche d’idéal, mais plutôt dans une recherche de commun. »
                L’authenticité peut également passer par la transparence dans les partenariats avec les marques. L’influenceur va expliciter la dimension travail de son activité : « ‘’C’est mon job, je gagne de l’argent ainsi. Mais ça n’empêche pas qu’on soit bien ensemble, qu’on rigole ensemble.’’ » Et ce pacte publicitaire est clair pour Laurence Allard. « C’est une sorte de surtexte », explique la sociologue. 
                </p>
                </div>
        "]);

        DB::table('article_sections')->insert([
            'order' => 2,
            'title' => 'De nombreux acteurs',
            'cover' => '/img/photos/article__banniere.jpg',
            'accroche' => null,
            'content' => "<div class='article__mini__bloc'>
                <p>L’économie d’influence est une économie d’intermédiaire entre plateformes, agences, marques et talents. 
                Les talents vont performer sur les plateformes des réseaux sociaux comme Youtube, Snapchat, ou Instagram. « Ils vont faire du ‘’nativ content’’ ou ‘’creative content’’, c’est-à-dire de la publicité pour une marque qui aura l’air d’une simple vidéo, ou d’une story. Ils utilisent les codes du réseau social dans le cadre de cette campagne pour une marque. 
                Les influenceurs sont souvent repérés par des agents qui leur permettent d’accroitre en termes d’abonnés, de visibilité. Les agents s’occupent de trouver des partenariats avec des marques. Ce sont soient des groupes média (comme Melty groupe, Rose Carpet de M6, ou Studio Bagel de Canal Plus), soient des indépendants. 
                Cette économie de l’influence est donc plurielle et hybride, elle regroupe l’économie des plateformes mais aussi l’économie publicitaire. 
                « On est dans une logique d’audience et de monétisation par la publicité. Comme pour la télévision, on monétise ‘’du temps de cerveau humain disponible’’ comme dirait Patrick Le Lay, président du groupe TF1. » 
                </p>
                </div>
        "]);

        DB::table('article_sections')->insert([
            'order' => 3,
            'title' => 'Une économie « opportuniste »',
            'cover' => '/img/photos/article__banniere.jpg',
            'accroche' => null,
            'content' => "<div class='article__mini__bloc'>
                <p>Cette attention du consommateur est devenue extrêmement compliquée à saisir. « Nous vivons une époque dans laquelle l’attention est devenue de plus en plus difficile à capter et il suffit d’observer notre propre comportement pour se rendre compte que notre manière de nous informer a complétement changée », souligne Dan Noël. 
                    Sur le fond, c’est une économie « très opportuniste », constate Laurence Allard. « Avec Instagram, il y a cette fonctionnalité du ‘’tap’’, et les influenceurs deviennent des femmes et hommes sandwichs, et ce n’est même plus une métaphore car quand on tape sur l’image, ils sont couverts de marques. » Sur le réseau social, les utilisateurs peuvent identifier directement sur leur photo les comptes des marques avec qui il collabore. Ces identifications apparaissent lorsque l’utilisateur tape sur la photographie. 
                    Pour elle, l’objectif est clair : que tout le monde gagne de l’argent. « Les influenceurs mettent en avant des produits, les agents prennent un pourcentage, les marques vendent leur marchandise etc. » 
                    Alors pour elle, il ne faut pas réduire cette économie à des problématiques telles que « Est-ce que c’est vrai ? Est-ce que c’est vraiment elle ? Est-ce que c’est sa vraie identité ? C’est anecdotique puisque c’est un marché, une économie. » 
                    </p>
                </div>
        "]);

        DB::table('article_sections')->insert([
            'order' => 4,
            'title' => 'Des concurrents de la presse',
            'cover' => '/img/photos/article__banniere.jpg',
            'accroche' => null,
            'content' => "<div class='article__mini__bloc'>
                <p>Sont-ils les nouveaux concurrents de la presse ? Aucun doute pour la sociologue et pour l’expert en digital marketing.
                « A partir du moment où les marques utilisent des influenceurs pour être des ambassadeurs de marques auprès d’une communauté qu’ils ont cultivé, ils sont des concurrents de la presse. », note Laurence Allard. 
                Pour le monde du marketing, « c’est idéal », assure-t-elle. « Il n’y a plus à s’embêter à cibler un public car l’influenceur vient avec sa communauté. » 
                Pour Dan Noël, « les actions d’influence marketing sur Instagram ou Facebook offrent le meilleur retour sur investissement qu’on puisse trouver sur le marché […] Je ne dis pas qu’une annonce dans la presse ou une publicité à la télé ne peuvent pas faire mouche mais ces moyens sont devenus affreusement chers en comparaison avec ces nouveaux médias. » 
                Laurence Allard rappelle que la presse de jeux vidéo a beaucoup souffert de l’arrivée des influenceurs dans ce secteur. « Aujourd’hui, les marques préfèrent donner leurs jeux vidéo à des influenceurs comme Squeezie, plutôt que de passer par la presse spécialisé qui fera un travail de critique du jeu. » 
                Idem pour la presse magazine. « Celle-ci avait extrêmement normé les corps, et le Youtube Mode et Beauté a fait explosé tous ses stéréotypes véhiculés par cette presse. La norme corporelle existe toujours mais maintenant il y a des modes corporelles. » 
                </p>
                </div>
        "]);

        DB::table('article_sections')->insert([
            'order' => 5,
            'title' => 'Le nombre d’abonnés n’est plus un critère',
            'cover' => '/img/photos/article__banniere.jpg',
            'accroche' => null,
            'content' => "<div class='article__mini__bloc'>
                <p>Il ne faut pas voir le nombre d’abonnés comme une reconnaissance de l’influenceur mais plutôt comme l’instrument de travail de l’influenceur. 
                    Aujourd’hui, le nombre d’abonnés n’est plus pertinent pour se faire repérer par les marques et pour nouer un partenariat produit, premier niveau de monétisation et d’entrée dans cette économie d’influence. « Les abonnés sont vus comme un vivier de clients potentiels dans le cadre de vos partenariats. »
                    « La taille de la communauté n’est pas l’unique élément à prendre en compte. Ce qui compte par dessus tout, c’est l’engagement », estime Dan Noël. « A quoi bon avoir 20000 followers si personne ne like, commente ou partage les contenus ? ». 
                    L’expert en digital marketing précise également que tout dépend des objectifs poursuivis par les marques ou les personnes qui souhaite devenir des leaders d’opinion numérique. « Il existe des micro-influenceurs locaux avec une très forte influence car ceux-ci sont devenus de véritables ‘’évangélistes’’ au sens marketing du terme. »
                    On peut devenir un influenceur d’un quartier, d’un commerçant. « Un influenceur est une figure sociale de construction des marchés qui se rencontre à tous les étages du monde du commerce », note Laurence Allard.
                    </p>
                </div>
        "]);



    }
}
