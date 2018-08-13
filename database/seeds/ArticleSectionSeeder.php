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
            'content' => "<h2>Qu&rsquo;est-ce qu&rsquo;un influenceur ?</h2>

<p>Laurence Allard, professeure &agrave; La Sorbonne, a &eacute;tudi&eacute; l&rsquo;&eacute;conomie de l&rsquo;influence. Elle d&eacute;crit un influenceur comme &laquo; une personnalit&eacute; &raquo; qui s&rsquo;exprime &agrave; travers des vid&eacute;os, des articles, des photos. Il se met en sc&egrave;ne, se performe.&nbsp; &laquo; L&rsquo;influenceur travaille &agrave; &ecirc;tre lui-m&ecirc;me, &agrave; &ecirc;tre authentique. &raquo; Il est transfigur&eacute; en &laquo; talent &raquo; par toute une &eacute;conomie d&rsquo;acteurs qui vit autour de la plateforme.</p>

<p>&laquo; Ce qui est int&eacute;ressant c&rsquo;est le moment o&ugrave; l&rsquo;individu est rep&eacute;r&eacute; comme talent pouvant pr&eacute;tendre &agrave; &ecirc;tre influent &raquo;, note la sociologue.</p>

<p>Une fois reconnu par ses pairs, il devient un ambassadeur de marque. Il est mon&eacute;tisable aupr&egrave;s de ces enseignes et pourra devenir lui-m&ecirc;me une marque.</p>

<p>Pour Dan No&euml;l, expert en marketing digital et fondateur de l&rsquo;agence Starterland &agrave; Neuch&acirc;tel, un influenceur est une personne qui &laquo; par son statut, sa position ou son exposition m&eacute;diatique peut influencer les comportements de consommation et d&rsquo;achat &raquo;. Cette d&eacute;finition est devenue plus complexe avec la digitalisation.</p>

<p>&laquo; Je dirais que l&rsquo;activit&eacute; d&rsquo;influenceur consiste &agrave; d&eacute;velopper son autorit&eacute; dans un domaine qui nous passionne, de construire une communaut&eacute; fid&egrave;le, r&eacute;elle et surtout engag&eacute;e autour de cette th&eacute;matique ainsi que sa propre personne &raquo;, r&eacute;sume-t-il.</p>

<p>&nbsp;</p>

<h2>Une authenticit&eacute; construite</h2>

<p>La sociologue, Laurence Allard, ne pense pas que l&rsquo;influenceur doive partager son intimit&eacute;. &laquo; Ce n&rsquo;est pas une mise &agrave; nue de son intimit&eacute;, ce n&rsquo;est pas aussi trivial que cela. &raquo; Selon elle, l&rsquo;influenceur va plut&ocirc;t partager sa subjectivit&eacute; : &laquo; ce qu&rsquo;il a dans le ventre, son int&eacute;riorit&eacute;. On parle de &lsquo;&rsquo;belle personne morale&rsquo;&rsquo;, c&rsquo;est-&agrave;-dire un individu qui va exprimer son imaginaire, sa cr&eacute;ativit&eacute; &agrave; travers une vid&eacute;o, une photo ou un Snap. &raquo;</p>

<p>L&rsquo;influenceur va apprendre &agrave; mettre en sc&egrave;ne sa subjectivit&eacute;, il va acqu&eacute;rir des comp&eacute;tences pour la sublimer.&nbsp; &laquo; Il y a cette vision tr&egrave;s romantique qui consiste &agrave; dire que celle-ci est inn&eacute;e. &raquo; Mais cette int&eacute;riorit&eacute;, propre au talent, se construit par le biais de son univers personnel qu&rsquo;il partage.</p>

<p>Ce naturel est donc une pure construction qui s&rsquo;appelle l&rsquo;authenticit&eacute;. &laquo; On vous laisse croire que l&rsquo;influenceur est vraiment cool ou naturel, mais il est oblig&eacute; de performer son caract&egrave;re ordinaire. &raquo; Cette authenticit&eacute; est travaill&eacute;e, cultiv&eacute;e. L&rsquo;objectif est de para&icirc;tre toujours plus vrai &laquo; m&ecirc;me si tout est construit de A &agrave; Z &raquo;.</p>

<p>Aujourd&rsquo;hui, les gens veulent s&rsquo;identifier &agrave; des personnes qui leur ressemblent. &laquo; Enjoy Phoenix a des boutons, elle fait des r&eacute;gimes. Ce n&rsquo;est pas une star anorexique, qui fait une taille 34. On n&rsquo;est plus dans cette recherche d&rsquo;id&eacute;al, mais plut&ocirc;t dans une recherche de commun. &raquo;</p>

<p>L&rsquo;authenticit&eacute; peut &eacute;galement passer par la transparence dans les partenariats avec les marques. L&rsquo;influenceur va expliciter la dimension travail de son activit&eacute; : &laquo; &lsquo;&rsquo;C&rsquo;est mon job, je gagne de l&rsquo;argent ainsi. Mais &ccedil;a n&rsquo;emp&ecirc;che pas qu&rsquo;on soit bien ensemble, qu&rsquo;on rigole ensemble.&rsquo;&rsquo; &raquo; Et ce pacte publicitaire est clair pour Laurence Allard. &laquo; C&rsquo;est une sorte de surtexte &raquo;, explique la sociologue.</p>

<p>&nbsp;</p>

<h2>De nombreux acteurs</h2>

<p>L&rsquo;&eacute;conomie d&rsquo;influence est une &eacute;conomie d&rsquo;interm&eacute;diaire entre plateformes, agences, marques et talents.</p>

<p>Les talents vont performer sur les plateformes des r&eacute;seaux sociaux comme Youtube, Snapchat, ou Instagram. &laquo; Ils vont faire du &lsquo;&rsquo;nativ content&rsquo;&rsquo; ou &lsquo;&rsquo;creative content&rsquo;&rsquo;, c&rsquo;est-&agrave;-dire de la publicit&eacute; pour une marque qui aura l&rsquo;air d&rsquo;une simple vid&eacute;o, ou d&rsquo;une story. Ils utilisent les codes du r&eacute;seau social dans le cadre de cette campagne pour une marque.</p>

<p>Les influenceurs sont souvent rep&eacute;r&eacute;s par des agents qui leur permettent d&rsquo;accroitre en termes d&rsquo;abonn&eacute;s, de visibilit&eacute;. Les agents s&rsquo;occupent de trouver des partenariats avec des marques. Ce sont soient des groupes m&eacute;dia (comme Melty groupe, Rose Carpet de M6, ou Studio Bagel de Canal Plus), soient des ind&eacute;pendants.</p>

<p>Cette &eacute;conomie de l&rsquo;influence est donc plurielle et hybride, elle regroupe l&rsquo;&eacute;conomie des plateformes mais aussi l&rsquo;&eacute;conomie publicitaire.</p>

<p>&laquo; On est dans une logique d&rsquo;audience et de mon&eacute;tisation par la publicit&eacute;. Comme pour la t&eacute;l&eacute;vision, on mon&eacute;tise &lsquo;&rsquo;du temps de cerveau humain disponible&rsquo;&rsquo; comme dirait Patrick Le Lay, pr&eacute;sident du groupe TF1. &raquo;</p>

<p>&nbsp;</p>

<h2>Une &eacute;conomie &laquo; opportuniste &raquo;</h2>

<p>Cette attention du consommateur est devenue extr&ecirc;mement compliqu&eacute;e &agrave; saisir. &laquo; Nous vivons une &eacute;poque dans laquelle l&rsquo;attention est devenue de plus en plus difficile &agrave; capter et il suffit d&rsquo;observer notre propre comportement pour se rendre compte que notre mani&egrave;re de nous informer a compl&eacute;tement chang&eacute;e &raquo;, souligne Dan No&euml;l.</p>

<p>Sur le fond, c&rsquo;est une &eacute;conomie &laquo; tr&egrave;s opportuniste &raquo;, constate Laurence Allard. &laquo; Avec Instagram, il y a cette fonctionnalit&eacute; du &lsquo;&rsquo;tap&rsquo;&rsquo;, et les influenceurs deviennent des femmes et hommes sandwichs, et ce n&rsquo;est m&ecirc;me plus une m&eacute;taphore car quand on tape sur l&rsquo;image, ils sont couverts de marques. &raquo; Sur le r&eacute;seau social, les utilisateurs peuvent identifier directement sur leur photo les comptes des marques avec qui il collabore. Ces identifications apparaissent lorsque l&rsquo;utilisateur tape sur la photographie.</p>

<p>Pour elle, l&rsquo;objectif est clair : que tout le monde gagne de l&rsquo;argent. &laquo; Les influenceurs mettent en avant des produits, les agents prennent un pourcentage, les marques vendent leur marchandise etc. &raquo;</p>

<p>Alors pour elle, il ne faut pas r&eacute;duire cette &eacute;conomie &agrave; des probl&eacute;matiques telles que &laquo; Est-ce que c&rsquo;est vrai ? Est-ce que c&rsquo;est vraiment elle ? Est-ce que c&rsquo;est sa vraie identit&eacute; ? C&rsquo;est anecdotique puisque c&rsquo;est un march&eacute;, une &eacute;conomie. &raquo;</p>

<p>&nbsp;</p>

<h2>Des concurrents de la presse</h2>

<p>Sont-ils les nouveaux concurrents de la presse ? Aucun doute pour la sociologue et pour l&rsquo;expert en digital marketing.</p>

<p>&laquo; A partir du moment o&ugrave; les marques utilisent des influenceurs pour &ecirc;tre des ambassadeurs de marques aupr&egrave;s d&rsquo;une communaut&eacute; qu&rsquo;ils ont cultiv&eacute;, ils sont des concurrents de la presse. &raquo;, note Laurence Allard.</p>

<p>Pour le monde du marketing, &laquo; c&rsquo;est id&eacute;al &raquo;, assure-t-elle. &laquo; Il n&rsquo;y a plus &agrave; s&rsquo;emb&ecirc;ter &agrave; cibler un public car l&rsquo;influenceur vient avec sa communaut&eacute;. &raquo;</p>

<p>Pour Dan No&euml;l, &laquo; les actions d&rsquo;influence marketing sur Instagram ou Facebook offrent le meilleur retour sur investissement qu&rsquo;on puisse trouver sur le march&eacute; [&hellip;] Je ne dis pas qu&rsquo;une annonce dans la presse ou une publicit&eacute; &agrave; la t&eacute;l&eacute; ne peuvent pas faire mouche mais ces moyens sont devenus affreusement chers en comparaison avec ces nouveaux m&eacute;dias. &raquo;</p>

<p>Laurence Allard rappelle que la presse de jeux vid&eacute;o a beaucoup souffert de l&rsquo;arriv&eacute;e des influenceurs dans ce secteur. &laquo; Aujourd&rsquo;hui, les marques pr&eacute;f&egrave;rent donner leurs jeux vid&eacute;o &agrave; des influenceurs comme Squeezie, plut&ocirc;t que de passer par la presse sp&eacute;cialis&eacute; qui fera un travail de critique du jeu. &raquo;</p>

<p>Idem pour la presse magazine. &laquo; Celle-ci avait extr&ecirc;mement norm&eacute; les corps, et le Youtube Mode et Beaut&eacute; a fait explos&eacute; tous ses st&eacute;r&eacute;otypes v&eacute;hicul&eacute;s par cette presse. La norme corporelle existe toujours mais maintenant il y a des modes corporelles. &raquo;</p>

<p>&nbsp;</p>

<h2>Le nombre d&rsquo;abonn&eacute;s n&rsquo;est plus un crit&egrave;re</h2>

<p>Il ne faut pas voir le nombre d&rsquo;abonn&eacute;s comme une reconnaissance de l&rsquo;influenceur mais plut&ocirc;t comme l&rsquo;instrument de travail de l&rsquo;influenceur.</p>

<p>Aujourd&rsquo;hui, le nombre d&rsquo;abonn&eacute;s n&rsquo;est plus pertinent pour se faire rep&eacute;rer par les marques et pour nouer un partenariat produit, premier niveau de mon&eacute;tisation et d&rsquo;entr&eacute;e dans cette &eacute;conomie d&rsquo;influence. &laquo; Les abonn&eacute;s sont vus comme un vivier de clients potentiels dans le cadre de vos partenariats. &raquo;</p>

<p>&laquo; La taille de la communaut&eacute; n&rsquo;est pas l&rsquo;unique &eacute;l&eacute;ment &agrave; prendre en compte. Ce qui compte par dessus tout, c&rsquo;est l&rsquo;engagement &raquo;, estime Dan No&euml;l. &laquo; A quoi bon avoir 20000 followers si personne ne like, commente ou partage les contenus ? &raquo;.</p>

<p>L&rsquo;expert en digital marketing pr&eacute;cise &eacute;galement que tout d&eacute;pend des objectifs poursuivis par les marques ou les personnes qui souhaite devenir des leaders d&rsquo;opinion num&eacute;rique. &laquo; Il existe des micro-influenceurs locaux avec une tr&egrave;s forte influence car ceux-ci sont devenus de v&eacute;ritables &lsquo;&rsquo;&eacute;vang&eacute;listes&rsquo;&rsquo; au sens marketing du terme. &raquo;</p>

<p>On peut devenir un influenceur d&rsquo;un quartier, d&rsquo;un commer&ccedil;ant. &laquo; Un influenceur est une figure sociale de construction des march&eacute;s qui se rencontre &agrave; tous les &eacute;tages du monde du commerce &raquo;, note Laurence Allard.</p>'",
        ]);
    }
}
