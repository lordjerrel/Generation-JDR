<?php
include ('lib/compteur.php');

    $nom_taberges = array(
    "Les Trois Lapins", "Aux Douze Moines de Saphiras", "La Choppe sans fond", "Le Bouclier du Brave", "Le Salami et la Morue", "Le Rasoir et l’Ampoule",
    "L’Épée de Bois", "La Mitaine trouée", "Le Cheval Sans Tête", "L’Amphore des Dieux", "Le Canard en Bois", "La Demoiselle en détresse", "La Fumerolle pernicieuse", 
    "Au Kraken empaillé", "L’Ourson hirsute", "Le Roussin et la Canaille", "La Belle Meunière", "La Perdrix couronnée", "L’Ours et le Hibou", "La Sciure et la Pomme", 
    "Aux Vendanges tardives", "La Tourte enchantée", "La Meute et la Proie", "À la Virgule près", "Le Poêle et l’Abaque", "Le Violon et le Turban", "Aux Vingt Sous", 
    "Aux Souvenirs des Steppes", "Chez Ermy", "Au Spectre joyeux", "Au Pot de Cent Ans", "La Veuve et les Nains", "Le Dragon d’Ébène", "Au Seigneur des Anneaux",
    "Le Chaudron sous la Braise", "Le Chevalier d’Émeraude", "Le Loup du Nord", "Le Canard et la Truffe", "Le Luth oublié", "Le Godet fleuri"
    );

    $detail_interessant = array(
    "Des centaines de figures et de dessins à la mine de plomb ornent les murs de la taberge – elles sont l’oeuvre d’une ancienne propriétaire décédée depuis longtemps… Pourtant, les portraits des aventuriers y figurent en bonne place.", 
    "L’enseigne de la taberge lui donne un tout autre nom, mais personne ne parvient à la décrocher.", 
    "Les anciens propriétaires ont accroché des têtes d’animaux absolument partout.", 
    "Les bains sont incroyablement luxueux et confortables, avec de la faïence bleue sur les murs et de grands bassins profonds.", 
    "Les cheminées emploient des petits élémentaires de feu pour fournir la chaleur nécessaire à la maisonnée, sans apport de bois ou de charbon.", 
    "Les clients de passage peuvent laisser leur marque ou un petit objet sur l’un des grands murs de la salle principale.", 
    "Les murs sont tous peints dans un jaune un peu effrayant.", 
    "Les rideaux et tous les linges de la maisonnée – draps de literie et linge de table – sont taillés dans le même tissu aux couleurs un peu étranges et aux motifs kaléidoscopiques.", 
    "Les sols sont couverts de carrelages aux motifs qui pourraient bien figurer une sorte de code, mais lequel ?", 
    "Les tables sont toutes gravées de cartes du monde que les voyageurs complètent au fur et à mesure.", 
    "Les têtes des piliers et colonnes sont sculptées de figures grimaçantes et moqueuses.", 
    "Quels que soient les traitements ou les sorts utilisés, les puces et poux reviennent constamment (et rapidement) se nicher dans les literies, au grand dam du propriétaire.", 
    "Rien dans la taberge n’est fabriqué avec du bois – ni les bâtiments, ni les meubles – mais uniquement de la pierre et du métal.", 
    "Tous les encadrements et les linteaux des portes et fenêtres sont frappés de glyphes magiques dont personne ne comprend vraiment l’usage ou l’utilité.", 
    "Tous les lits et les matelas ont été enchantés pour procurer le plus grand délassement à leurs occupants.", 
    "Toutes les fenêtres du rez-de-chaussée sont murées ou occultées d’une manière ou d’une autre.", 
    "Toutes les poutres apparentes sont gravées de motifs géométriques complexes.", 
    "Toutes sortes de girouettes et de flèches ornementent le faîte des toits et les cheminées au point de produire une sorte de forêt aérienne de métal découpé.", 
    "Un automate musicien produit un mélodieux carillon sur des airs de fête à chaque fois que le patron ou les clients pensent à le remonter.", 
    "Une ondine un peu sauvage vit dans les réservoirs et les abreuvoirs de la taberge."
    );

    $proprietaire = array(
    "Monsieur Simondi, un humain de grande taille, compte peutêtre quelques orques dans ses ancêtres. Il est loyal et intègre, mais toujours nerveux comme si des souvenirs désagréables se rappelaient constamment à lui. Ce n’est pas un tabergiste très compétent, mais il est passionné par la zoologie et les rumeurs concernant la noblesse et les gens célèbres.", 
    "Gelato de Melk est une humaine au long passé d’aventurier, couverte d’éphélides et de cicatrices. Déprimée et mélancolique, elle est criblée de dettes et quasiment ruinée, mais tient son établissement d’une main ferme, n’hésitant pas à reprendre son ancien métier de danseuse exotique pour faire venir la clientèle. Elle déteste les enfants.", 
    "Firss de Scaro, un elfe magicien, s’est retiré des affaires publiques depuis la mort de sa femme. Il blâme son orgueil et ses propres ambitions pour cette perte tragique et ne croit plus en rien. Il abandonne l’essentiel du travail de la taberge à ses employés et s’emploie dans les jardins et les serres qui jouxtent les bâtiments, croisant sans fin des variétés de roses.", 
    "Néakrina, une femme étrange à la peau rougeâtre et écailleuse, porte un symbole de la déesse de la bataille autour du cou. Particulièrement paresseuse et somnolente, elle laisse son mari travailler et se contente de tirer les tarots aux clients, d’élever toutes sortes de créatures pseudo-draconiques dans la basse-cour et de commenter l’actualité de la région.", 
    "Merko, grand humain baraqué, est d’humeur colérique, mais foncièrement honnête et juste. Ancien forgeron, c’est un champion de fléchettes qui drague ouvertement tous les aventuriers mâles de passage qu’il trouve à son goût. Le reste du temps, il interroge les voyageurs sur leurs périples et complète les nombreuses cartes qui ornent les murs de la taberge.", 
    "Exodus, svelte humaine portant des bijoux nombreux et de grande valeur, ancienne mercenaire revenue de tout, reste passionnée par la chasse aux spectres et aux fantômes. Ses talents de tabergiste sont, par contre, particulièrement catastrophiques et sa cuisine une abomination, malgré les quantités de poivre qu’elle parvient à y glisser.", 
    "Kidan Merciou, un gnome ambitieux et avaricieux, est marqué par le pessimisme le plus noir. Incapable d’ouvrir sa bourse à quiconque, il dépense sans compter pour des babioles inutiles. La plupart du temps, il est absent de la taberge et effectue de très longues promenades dans les bois et les collines alentour. Il déteste les aventuriers.", 
    "Joude Tremblemont, une naine adorable, un peu vaniteuse, donnant l’air d’une grande sottise, collectionne les bibelots et les poupées. C’est, en vérité, une âme sombre et malveillante, entièrement dédiée à ses seigneurs démoniaques – un antipaladin forcé à la dissimulation par l’ampleur de ses crimes et l’importance de la traque lancée à sa poursuite.", 
    "Adémar de Sassasseno est un énorme humain, gros et joufflu, incroyablement gourmand et gourmet, chef de première importance. Il aime chanter en cuisinant, des airs classiques et tonitruants, parfois un peu grivois. Quand il n’est pas aux fourneaux, il perd une grande partie de ses revenus aux tables de jeu qu’il laisse organiser dans son propre établissement.", 
    "Elley est une nymphe qui s’est jadis incarnée pour l’amour d’un jeune clerc humain. Depuis, elle prie les dieux avec détermination, étudie toutes sortes d’ouvrages théologiques abscons et tient une auberge très propre. Elle adore les contes romantiques mièvres, les histoires de premières fois et les vieux couples toujours aussi amoureux.", 
    "Saliure Felver, vieux gnome décharné et passablement dévot, est possédé par un petit démon malveillant avec qui il entretient de longues conversations solitaires afin de calmer ses désirs. Passionné par les engins explosifs, les mines et les sapes, le gnome gère une salpêtrière en plus de son auberge, ce qui explique peut-être le goût particulier de ses mets.", 
    "Emeline d’Auclair est une belle humaine fort occupée entre son auberge, son mari, son cuisinier et son amant. Elle gesticule beaucoup, bouscule ses employés, n’a aucun humour, mais elle est généreuse envers les temples et les églises. Elle est persuadée être pourchassée par un puissant magicien et cherche à s’armer pour détruire ses golems.", 
    "Aldaviel, un elfe auquel il manque une main, était armurier et graveur avant son grave accident – il n’a pas payé les dettes qu’il devait à un usurier cruel et rancunier. Sarcastique et souvent insultant, il vénère en secret la déesse de la nuit et attend l’heure de se venger. L’usurier est toujours après lui et il tire peu de bénéfices de son établissement, pourtant renommé.", 
    "Vilia Feric, une humaine gironde et provocante, a longtemps vécu au sein d’une caravane itinérante et en a tiré plein d’expériences et de connaissances. Elle triche volontiers avec la réalité et les lois, soutient quelques contrebandiers locaux en leur achetant des commodités et vend des cartes au trésor qui ne sont pas toutes complètement fausses.", 
    "Gili Sacquabois, un nain épais et trapu, bavard et impatient, est ouvertement homosexuel. Il parle constamment de son ancien partenaire, tué par des orques peu de temps après leur arrivée dans la région. Il aiguise sa hache en parlant de vengeance et soutient financièrement les aventuriers qui partent vers les régions sauvages, mais quelque chose sonne faux.", 
    "Ellao Cromviel, une elfe au crâne rasé et aux tatouages labyrinthiques, est aussi rancunière qu’elle est courageuse. Elle hait les gobelins et les kobolds qu’elle accuse de conspirer pour détruire le monde. Elle est la veuve de l’ancien propriétaire de la taberge et se retrouve plus ou moins bloquée ici contre son gré – elle cherche à vendre, sans succès pour l’instant.", 
    "Egos est un ancien soldat humain qui a investi sa solde de départ et ses économies dans cette taberge. Très investi dans la communauté, il aspire à devenir bourgmestre, mais son ancien seigneur s’y oppose secrètement, à cause d’une vieille histoire impliquant sa fille aînée. En attendant son heure, Egos rénove et modifie constamment son établissement.", 
    "Daphiquine d’Odaquine, une jeune gnome hyperactive, gère sa taberge un peu en dépit du bon sens. Elle collectionne les amphores, boit beaucoup pour calmer ses ardeurs, ne décline jamais une bonne bagarre et bricole toutes sortes de mécanismes mystérieux sur ses temps libres. La cuisine et l’accueil sont à l’avenant – il y a les bons jours et il y a les autres…", 
    "Lauren, l’ancien mendiant, a prié le dieu de la chance toute sa vie et vient d’en être récompensé en héritant de la taberge. Malheureusement, c’est pour retomber dans les griffes d’un brigand qui avait besoin d’un homme de paille afin de dissimuler ses activités criminelles. Il reste toutefois une cave à vider, trois repas chauds par jour et un lit près de la cheminée.", 
    "Wendy, très jeune humaine, un peu bossue et pas très belle, vient juste d’hériter la taberge de son père, emporté par une maladie brutale. La taberge est tout ce qu’elle connaît du monde et elle en sait les moindres détails et mécaniques, même si certains vieux employés tentent de profiter de sa jeunesse. Elle tient à eux, mais n’est pas si naïve qu’on l’imagine souvent."
    );

    $nom_employee = array(
        "Alba", "Babette", "Gunnor", "Kinna", "Lia", "Manon", "Mengarde", "Millie", "Mitri", "Nilda"
    );

    $nom_employe = array(
        "Aldebrand", "Buselin", "Duche", "Dudic", "Gobin", "Gringoire", "Haquin", "Ilbert", "Nicaise", "Odard"
    );

    $poste_employee = array(
        "caviste", "commise d'écurie", "commise de chambre", "commise de cuisine", "commise de salle", "cuisinière", "gâte-sauce", "palefrenière", "rôtisseuse", "serveuse"
    );

    $poste_employe = array(
        "caviste", "commis d'écurie", "commis de chambre", "commis de cuisine", "commis de salle", "cuisinier", "gâte-sauce", "palefrenier", "rôtisseur", "serveur"
    );

    $attitude_employee = array(
        "amicale", "conciliante", "distante", "hauntaine", "hostile", "indifférente", "insultante", "revêche", "serviable", "sympathique"
    );

    $attitude_employe = array(
        "amicale", "conciliante", "distante", "hauntaine", "hostile", "indifférente", "insultante", "revêche", "serviable", "sympathique"
    );

    $service_employee = array(
        "discret", "distrait", "empressé", "indifférent", "intusif", "long", "maladroit", "plein d'erreurs", "précis", "rapide"
    );

    $service_employe = array(
        "discret", "distrait", "empressé", "indifférent", "intusif", "long", "maladroit", "plein d'erreurs", "précis", "rapide"
    );

    $nature_employee = array(
        "colérique", "cruelle", "effacée", "espiègle", "extravertie", "gentille", "indiscrète", "mélancolique", "mièvre", "rancunière"
    );

    $nature_employe = array(
        "colérique", "cruelle", "effacée", "espiègle", "extravertie", "gentille", "indiscrète", "mélancolique", "mièvre", "rancunière"
    );

    $secret = array(
        "Chaque année, la taberge change magiquement d’emplacement et de région.", "Des gens disparaissent parfois de leur lit,
        sans qu’on trouve d’explication.", "La taberge a été construite sur un ancien cimetière hobgobelin.", 
        "La taberge appartient à un cercle de onze autres taberges liées par des portails magiques.", "La taberge appartient réellement à un groupe
        de bardes qui ne se parlent plus.", "La taberge est aussi un temple dédié à la déesse de la nuit.", 
        "La taberge est l’une des principales composantes d’un rituel maléfique en cours de réalisation.", 
        "La taberge est une créature vivante et douée de conscience.", "Le bois qui a servi à fabriquer le bar contient encore l’esprit d’une dryade assassinée.", 
        "Le fantôme d’un mage chevaleresque attend toujours que son amante le rejoigne.", "Le grand miroir de la salle principale sert à espionner les clients de la taberge.", 
        "Le patron est à la tête d’une bande de brigands de grand chemin et de contrebandiers.", 
        "Le seigneur a décidé que la taberge serait rasée pour faire place à une statue de lui.", 
        "Le tabergiste fait un élevage de squelettes morts-vivants dans ses caves.", "Les paladins ont jadis fermé à cet endroit un portail vers les Royaumes d’entropie.", 
        "Un ancien client mécontent a invoqué une météorite pour détruire la taberge, juste le temps qu’elle arrive des cieux.", 
        "Un barde y a caché une épée de glace recherchée par des puissances maléfiques.", "Un grand dragon dort dans une caverne sous la taberge.", 
        "Une fausse carte au trésor mène dans les caves de la taberge et plusieurs copies circulent.", "Une secte d’assassins y tient ses réunions secrètes une fois par an.", 
    );

    $boisson_maison = array(
        "Bière aux fruits de saison", "Bière blanche sucrée", "Bière de mandragore", "Bière elfique épicée", "Bière légère aux amandes", "Bière noire des guenaudes", 
        "Cervoise aux noix", "Cervoise tiède au beurre salé", "Cidre à la menthe", "Fend-La-Bise", "Fine aux herbes sauvages et aux agrumes", "Hurlelune-framboisier", 
        "Hydromel de lotus", "Jus de melon fermenté", "Lait de fougère", "Lambic de sang-gobelin", "Liqueur de champi", "Marc ambré aux châtaignes fumées", "Vin de patate", 
        "Wûrtürg"
    );
    
    $plat_maison = array(
        "Brochette d’alouettes vorpales", "Chou guenaude", "Croquettes de cerbère", "Escalope façon Phénix", "Étouffé de termites légionnaires", "Frisou de stirges", 
        "Gâteau de criard", "Gélinotte à la sauvage", "Omelette de worg", "Orge aux trois trésors", "Orkeflamme", "Pain de goule", "Quenelles sauce naga", 
        "Ragout de gobelin", "Rôti d’Hibours", "Salade de papillons aux amandes", "Sauté de poulpe des marais", "Soupe elfique", "Tarte archimage", "Tripes de Bulette"
    );

    $clientele = array(
        "De jeunes ouvriers", "Des artisans", "Des aventuriers", "Des bourgeois", "Des chasseurs de prime", "Des commères", "Des étudiants", "Des forestiers et trappeurs", 
        "Des gardes et des soldats", "Des marchands de passage", "Des mercenaires", "Des moines", "Des nobles et leurs suites", "Des paladins et des clercs", "Des paysans", 
        "Des pèlerins", "Des villageois", "Des voyageurs", "La lie criminelle des environs", "Une bande de brigands"
    );

    $clientele_attitude = array(
        "qui sont animés par un sujet d’actualité", "qui sont avinés et chahuteurs", "qui sont beunaises et tranquilles", "qui broyant du noir", 
        "qui sont concentrés sur leurs choppes", "qui sont décadents et libertins", "qui sont discrets et couches-tôt", "qui sont empesés et trop sérieux", 
        "qui sont en attente de quelque chose ou quelqu’un", "qui sont en deuil", "qui sont en pleine neuvaine", "qui sont en pleine révolte ou en train de la préparer", 
        "qui sont excités et malappris", "qui sont fatigués et harassés de leur journée", "qui sont las d’être exploités par les autorités locales", 
        "qui sont moroses et mal-embouchés", "qui sont plein de disputes et de controverses", "qui célèbrent une personne", "qui fêtent un grand évènement", "qui s’amusent et grivoisent"
    );

    $attraction = array(
        "De la très bonne musique par un petit groupe local.", "De très jolies filles et un beau garçon présentent des danses exotiques et acrobatiques.", 
        "Des garçons et des filles échangent leurs vêtements à la suite d’un pari stupide.", "Des gens dansent sur les tables.", 
        "Des pèlerins se relaient pour enchaîner des chants religieux.", "Des tables de jeu s’improvisent rapidement parmi des artisans et marchands.", 
        "Deux filles se crêpent le chignon, méchamment, au nom d’une vieille querelle.", "Les manigances de trois mauvais garçons et de serveuses complices tournent mal.", 
        "Un barde renommé fait son tour de chant avec son orchestre.", "Un chasseur de prime repère la proie qu’il attendait depuis plusieurs jours.", 
        "Un client tente de partir sans payer.", "Un groupe de paysan organise une réunion politique pour discuter des nouvelles taxes.", 
        "Un troubadour qui chante en s’accompagnant de son théorbe.", "Un videur passablement énervé par des clients se met en colère.", 
        "Un vieillard titube entre les tables, une dague plantée entre les épaules.", "Un violent orage inonde les caves de la taberge.", 
        "Une bagarre éclate entre deux groupes de voyageurs à propos d’un cheval.", "Une fille plante son amoureux pour partir avec un aventurier.", 
        "Une jeune femme très timide tente de réciter de la poésie plus ou moins inspirée.", "Un jeu de dés tourne en permanence dans l’arrière-salle."
    );

    $attention = array(
        "Un artisan en veine, heureux et envahissant, qui paye le coup à tout le monde.", "Un brigand torse nu, couvert de tatouage, qui manipule nerveusement un symbole religieux.", 
        "Un chasseur taciturne qui semble attirer la haine du patron de la taberge.", "Un clerc excentrique, couvert de bijoux, qui observe les gens en silence.", 
        "Un éclaireur sale et dépenaillé qui boit debout au bar.", "Un étranger venu de loin, avec un chapeau bizarre et des demandes singulières.", 
        "Un grand bonhomme maigre et dégingandé qui ne paraît rien boire ni manger.", "Un grand mec au nez cassé et aux oreilles en chou-fleur qui semble attendre quelqu’un.", 
        "Un magicien qui engloutit des quantités impressionnantes d’alcool sans en paraître affecté.", 
        "Un marchand solitaire et amusé, qui drague les filles de salle avec un peu de succès.", 
        "Un noble bourré, exhibitionniste et lourd, mais accompagné de plusieurs gardes menaçants.", "Un paladin bruyant et expansif qui semble faire peur au patron.", 
        "Un soldat aux yeux hantés que tout le monde ignore.", "Un troubadour complètement beurré et qui chante faux malgré les protestations de la salle.", 
        "Un mec à demi-nu, assis sur un tabouret près de l’entrée, les yeux dans le vague.", "Un mec étrange, qui circule une choppe à la main, et qui pourrait bien être un fantôme.", 
        "Un voyageur couvert de cicatrices affreuses, un bout de nez en moins, qui veille sur un bébé.", "Une femme incroyablement bien habillée, mais qui ne consomme ni ne dit rien.", 
        "Une jeune prêtresse de la vie, très bien habillée, qui semble boire à l’œil.", "Une sorte de magicien étrange accompagné d’un garde du corps patibulaire."
    );

//création du texte de la taberge.
compteur('taberges');
$output =' ';
$output.='<h2>'.$nom_taberges[rand(0,count($nom_taberges)-1)].'</h2></br>';

$output.="<h4>Quel détail intéressant peut-on y déceler ?</h4>";
$output.= $detail_interessant[rand(0,count($detail_interessant)-1)];

$output.= "<h4>Quel secret cache l’établissement ?</h4>";
$output.= $secret[rand(0,count($secret)-1)]."</br></br>";

$output.="<h4>Qui est le propriétaire ?</h4>";
$output.= $proprietaire[rand(0,count($proprietaire)-1)];

$output.="<h4>Qui travaille pour lui ?</h4>";
$output.= $nom_employee[rand(0,count($nom_employee)-1)]." travaillant au poste de ".$poste_employee[rand(0,count($poste_employee)-1)].". Son attitude est plutôt ".$attitude_employee[rand(0,count($attitude_employee)-1)]." et son service est ".$service_employee[rand(0,count($service_employee)-1)].". Elle est de nature ".$nature_employee[rand(0,count($nature_employee)-1)].".</br>";
$output.= $nom_employe[rand(0,count($nom_employe)-1)]." travaillant au poste de ".$poste_employe[rand(0,count($poste_employe)-1)].". Son attitude est ".$attitude_employe[rand(0,count($attitude_employe)-1)]." et son service est ".$service_employe[rand(0,count($service_employe)-1)].". Il est plutôt de nature ".$nature_employe[rand(0,count($nature_employe)-1)].".</br></br>";

$output.= "<h4>Quelle est la clientèle ce soir ?</h4>";
$output.= $clientele[rand(0,count($clientele)-1)]." ".$clientele_attitude[rand(0,count($clientele_attitude)-1)].".";

$output.= "<h4>Quelle est l’attraction du soir ?</h4>";
$output.= $attraction[rand(0,count($attraction)-1)];

$output.= "<h4>Qui peut éveiller l’attention ?</h4>";
$output.= $attention[rand(0,count($attention)-1)]."</br></br>";


$output.= "<h4>Qu’y-boit-on ?</h4>";
$output.= "<h5>Au petit matin :</h5> Bouillie, Bouillon, Café, Chocolat, Fruits pressés, Infusion, Lait, Lait de chèvre.
</br><h5>Le petit canon en cours de journée :</h5> Bière, Cervoise, Cidre, Frênette, Poiré, Vin blanc, Vin rosé, Vin rouge. Bouillon, Fruits pressés, Infusion, Lait, Lait de chèvre, Racinette.
</br><h5>Avant le repas :</h5> Absinthe, Amer, Anisette, Cédratine, Génépi, Gentiane, Guignolet, Perlé, Pineau, Vin d’épines, Vin de noix, Vin de pêche, Vin rosé. Fruits pressés, Racinette.
</br><h5>Ce que l’on sert à table :</h5> Bière, Cervoise, Cidre, Frênette, Poiré, Vin blanc, Vin de paille, Vin jaune, Vin rosé, Vin rouge. Infusion, Racinette.
</br><h5>Après le repas :</h5> Abricotine, Calva, Fine, Génépi, Genièvre, Gnôle, Goutte, Hypocras, Kirsch, Marc, Mirabelle, Mistelle, Perlé, Pommeau, Pomme-Chenille, Prunelle, Ratafia, Triple-sec, Vin d’épines. Café, Chocolat, Infusion.
</br><h5>Pour discuter tard dans la nuit :</h5> Bière, Cervoise, Grenache, Gueuze, Hydromel, Lambic, Malvoisie, Muscat, Pineau, Poiré, Pommeau, Ratafia, Vin de paille, Vin jaune. Fruits pressés, Infusion, Lait, Racinette.
</br><h5>Quel est le breuvage maison qu’on ne trouve nulle part ailleurs :</h5>".$boisson_maison[rand(0,count($boisson_maison)-1)]."</br></br>";

$output.= "<h4>Que sert-on à table ?</h4>";
$output.= "<h5>Les mignardises :</h5> Saucisson sec ; Saucisson à l’ail ; Viande séchée ; Jambon sec ; Fromage sec ; Restes de la veille et ainsi de suite…
</br><h5>Le tout venant (un ou deux par jour) :</h5> Blanquette de veau ; Braisé de jarret ; Civet de lapin ; Confit de panais panés ; Cuissot de mouton rôti ; Fèves épicées et émietté de porc ; Lentilles garnies ; Mijoté de boeuf au vin ; Pot-aufeu ; Potée de chou ; Poule au cidre ; Ragoût de carottes ; Ragoût de haricots blancs ; Ragoût de mouton aux navets ; Sauté de topinambour et ainsi de suite…
</br><h5>Les petits plats dans les grands, à la commande :</h5> Anguilles braisées ; Brochet farci ; Caneton farci ; Côtes d’agneau ; Côtes de porc grillées ; Fricassée de gésiers et foies de volaille aux haricots verts ; Poulet rôti ; Risotto à l’ananas ; Sauté de champignons ; Soupe de carpe ; Tranche de boeuf ; Truite grillée et ainsi de suite…
</br><h5>L’exceptionnel :</h5>".$plat_maison[rand(0,count($plat_maison)-1)]."</br></br>";

$output.= '<form method="get" onsubmit="return valid();" action="index.php?page=cv/taberges">';		
$output.= '<input type="submit" formmethod="POST" formtarget="_blank" name="bouton" value="Générer une autre auberge"></form></br></br>';	
$output.= "Générateur utilisant les tables de <a href='http://legrumph.org/Terrier/?Chibi/Coeurs-Vaillants'>Coeurs Vaillants</a>, par <a href='http://www.legrog.org/biographies/le-grumph'>John Grümph</a>";
echo $output;

?>