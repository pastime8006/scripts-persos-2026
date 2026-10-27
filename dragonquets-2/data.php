<?php

$collegeAirMagics = [

    /*
    |--------------------------------------------------------------------------
    | TALENTS
    |--------------------------------------------------------------------------
    */

    'talents' => [
        'title' => 'Talents',

        'T-1' => [
            'name' => 'Prédire la météo',
            'name_en' => 'Predict Weather',
            'range' => '16,09 km + 16,09 km par Rang',
            'experience_multiple' => 150,
            'effect' => 'L’Adepte prédit avec une certaine précision la météo des trois prochains jours dans la zone couverte par son talent. Le joueur effectue un jet de D100 inférieur ou égal à la Perception modifiée de l’Adepte. Un bonus de +5 est ajouté par Rang atteint.',
        ],

        'T-2' => [
            'name' => 'Détection des fumées',
            'name_en' => 'Detecting Fumes',
            'range' => 'Air immédiatement autour de l’Adepte',
            'experience_multiple' => 100,
            'identification_chance' => '25% + 3% par Rang',
            'effect' => 'L’Adepte peut détecter la présence de fumées ou de vapeurs dans l’air immédiatement autour de lui et possède 25% de chances, plus 3% par Rang, de les identifier.',
        ],

        'T-3' => [
            'name' => 'Parler aux créatures volantes',
            'name_en' => 'Speak to Avians',
            'range' => '3,05 m + 3,05 m par Rang',
            'experience_multiple' => 50,
            'effect' => 'L’Adepte peut communiquer avec toutes les créatures volantes dans sa portée. La communication peut être verbale, télépathique, gestuelle ou utiliser des symboles verbaux selon le Rang.',
        ],
    ],


    /*
    |--------------------------------------------------------------------------
    | GENERAL KNOWLEDGE SPELLS
    |--------------------------------------------------------------------------
    */

    'general_knowledge_spells' => [
        'title' => 'General Knowledge Spells',

        'G-1' => [
            'name' => 'Sort de résistance au froid',
            'name_en' => 'Spell of Resistance to Cold',
            'range' => 'Toucher',
            'duration' => '1 jour × D10 × Rang',
            'experience_multiple' => 100,
            'base_chance' => '40%',
            'resist' => 'Impossible',
            'effect' => 'La cible est protégée contre les effets nocifs du froid non magique, notamment les conditions arctiques et l’immersion dans une eau glacée. Le sort ne protège pas contre la noyade.',
        ],

        'G-2' => [
            'name' => 'Sort de création de glace',
            'name_en' => 'Spell of Ice Creation',
            'range' => '4,57 m + 3,05 m par Rang',
            'duration' => '6 minutes × Rang',
            'experience_multiple' => 100,
            'base_chance' => '25%',
            'resist' => 'Impossible',
            'area' => '2,32 m² + 2,32 m² par Rang',
            'ice_thickness' => '2,54 cm',
            'effect' => 'Le sort crée une couche de glace de 2,54 cm d’épaisseur couvrant 2,32 m², plus 2,32 m² par Rang. Toute entité qui tente de se déplacer dans la zone doit réussir un jet basé sur 3 × son Agilité modifiée afin de rester debout.',
        ],

        'G-3' => [
            'name' => 'Sort de vent magique',
            'name_en' => 'Spell of Mage Wind',
            'range' => '3,05 m + 3,05 m par Rang',
            'duration' => '5 minutes × D10 × Rang',
            'experience_multiple' => 125,
            'base_chance' => '30%',
            'resist' => 'Impossible',
            'effect' => 'L’Adepte invoque un vent suffisamment puissant pour propulser un navire à 9,26 km/h, plus 1,85 km/h par Rang. Si le navire fait face au vent, la vitesse du vent dominant est soustraite. L’Adepte peut modifier librement la direction du vent pendant la durée du sort.',
        ],

        'G-4' => [
            'name' => 'Sort de vision lointaine',
            'name_en' => 'Spell of Far Sight',
            'range' => 'Soi-même',
            'duration' => 'Concentration, maximum 1 minute + 1 minute par Rang',
            'experience_multiple' => 100,
            'base_chance' => '30%',
            'resist' => 'Impossible',
            'effect' => 'Permet à l’Adepte de voir les objets éloignés comme s’ils étaient 2 × Rang fois plus proches, ou deux fois plus proches si son Rang est de 0.',
        ],

        'G-5' => [
            'name' => 'Sort du sifflement du vent',
            'name_en' => 'Wind Whistle Spell',
            'range' => 'Toutes distances',
            'duration' => 'D10 heures',
            'experience_multiple' => 100,
            'base_chance' => '40%',
            'resist' => 'Impossible',
            'effect' => 'L’Adepte crée un vent pouvant atteindre environ 55,56 km/h au-dessus de la zone qu’il occupe. Le vent arrive après D−2 minutes et sa direction doit être choisie avant son arrivée.',
        ],

        'G-6' => [
            'name' => 'Sort d’invocation de brume',
            'name_en' => 'Spell of Conjuring Mist',
            'range' => '6,10 m + 6,10 m par Rang',
            'duration' => '1 minute × D10 × Rang',
            'experience_multiple' => 100,
            'base_chance' => '20%',
            'resist' => 'Impossible',
            'indoor_cube' => 'Cube de 3,05 m de côté',
            'effect' => 'En intérieur, l’Adepte crée un cube de brume de 3,05 m de côté et peut ajouter un cube supplémentaire par Rang. En extérieur, il crée un banc de brouillard couvrant 10 hexagones, plus 10 hexagones par Rang, et s’étendant verticalement sur 3,05 m, plus 30,48 cm par Rang.',
        ],

        'G-7' => [
            'name' => 'Sort de protection contre le froid magique',
            'name_en' => 'Spell of Protection from Magical Cold',
            'range' => '3,05 m + 3,05 m par Rang',
            'duration' => '10 minutes × [D−5] × Rang',
            'experience_multiple' => 100,
            'base_chance' => '40%',
            'resist' => 'Impossible',
            'effect' => 'La cible gagne +2 à sa Magic Resistance par Rang contre les sorts infligeant des dégâts de froid. Les dégâts d’un sort de froid sont réduits de 1 pour chaque tranche de 2 Rangs.',
        ],

        'G-9' => [
            'name' => 'Sort de chute libre',
            'name_en' => 'Spell of Free Fall',
            'range' => '4,57 m + 4,57 m par Rang',
            'duration' => '30 secondes + 30 secondes par Rang',
            'experience_multiple' => 150,
            'base_chance' => '25%',
            'resist' => 'Active uniquement',
            'effect' => 'Le sujet peut tomber de 3,05 m, plus 3,05 m supplémentaires par Rang, sans subir de dégâts de chute. Si la chute dépasse cette distance, il subit les dégâts correspondant à la différence.',
        ],
    ],


    /*
    |--------------------------------------------------------------------------
    | GENERAL KNOWLEDGE RITUALS
    |--------------------------------------------------------------------------
    */

    'general_knowledge_rituals' => [
        'title' => 'General Knowledge Rituals',

        'Q-1' => [
            'name' => 'Rituel de la parole des vents',
            'name_en' => 'Ritual of Windspeak',
            'range' => '91,44 m + 91,44 m par Rang',
            'ritual_duration' => '1 heure',
            'experience_multiple' => 150,
            'base_chance' => 'Magical Aptitude + 5 par Rang',
            'backfire' => 'Aucun',
            'effect' => 'L’Adepte peut communiquer avec les esprits murmurants du vent, apprendre ce qu’ils ont vu ou entendu et solliciter leur aide. Tous les vents situés dans la portée peuvent être contactés.',
        ],

        'Q-2' => [
            'name' => 'Rituel de purification de l’air',
            'name_en' => 'Ritual of Purifying Air',
            'range' => 'Rayon de 3,05 m + 3,05 m par Rang',
            'effect_duration' => '1 heure + 1 heure par Rang',
            'ritual_duration' => '1 heure',
            'experience_multiple' => 250,
            'base_chance' => 'Magical Aptitude + 4 par Rang',
            'backfire' => 'Impossible',
            'effect' => 'L’Adepte purifie l’air dans la zone affectée. Toutes les mauvaises odeurs et les toxines sont retirées de l’air, qui devient frais et respirable.',
        ],
    ],


    /*
    |--------------------------------------------------------------------------
    | SPECIAL KNOWLEDGE SPELLS
    |--------------------------------------------------------------------------
    */

    'special_knowledge_spells' => [
        'title' => 'Special Knowledge Spells',

        'S-1' => [
            'name' => 'Sort de tempête de vent',
            'name_en' => 'Windstorm Spell',
            'range' => '9,14 m + 9,14 m par Rang',
            'duration' => '10 secondes + 10 secondes par Rang',
            'experience_multiple' => 200,
            'base_chance' => '40%',
            'resist' => 'Passive uniquement',
            'effect' => 'L’Adepte crée une tempête de vent dans un rayon de 9,14 m, plus 9,14 m par Rang. Tous les personnages dans la zone, sauf l’Adepte, doivent résister ou subir D−6 dégâts, plus 1 dégât pour chaque tranche de 2 Rangs.',
        ],

        'S-2' => [
            'name' => 'Sort d’appel de tempête',
            'name_en' => 'Spell of Storm Calling',
            'range' => 'Toutes distances',
            'duration' => 'Variable',
            'experience_multiple' => 200,
            'base_chance' => '40%',
            'resist' => 'Impossible',
            'effect' => 'L’Adepte peut invoquer un front orageux visible. Lorsqu’il arrive sur sa position, il ralentit, s’arrête et produit des précipitations telles que pluie, neige, grêle ou grésil.',
        ],

        'S-3' => [
            'name' => 'Sort de construction de glace',
            'name_en' => 'Spell of Ice Construction',
            'range' => '4,57 m + 1,52 m par Rang',
            'duration' => '10 minutes + 10 minutes par Rang',
            'experience_multiple' => 225,
            'base_chance' => '30%',
            'resist' => 'Impossible',
            'volume' => '0,283 m³ + 0,283 m³ par Rang',
            'effect' => 'L’Adepte crée 0,283 m³ de glace, plus 0,283 m³ par Rang, dans la ou les formes de son choix.',
        ],

        'S-4' => [
            'name' => 'Sort de vol',
            'name_en' => 'Spell of Flight',
            'range' => 'Soi-même',
            'duration' => '30 minutes + 30 minutes par Rang',
            'experience_multiple' => 250,
            'base_chance' => '25%',
            'resist' => 'Impossible',
            'speed' => '8,05 km/h + 8,05 km/h par Rang',
            'effect' => 'En manipulant les courants d’air, l’Adepte peut se propulser dans les airs à une vitesse de 8,05 km/h, plus 8,05 km/h par Rang.',
        ],

        'S-5' => [
            'name' => 'Sort de vent glacial',
            'name_en' => 'Spell of Freezing Wind',
            'range' => '3,05 m + 3,05 m par Rang',
            'duration' => '30 secondes + 30 secondes par Rang',
            'experience_multiple' => 250,
            'base_chance' => '30%',
            'resist' => 'Active et passive',
            'area' => 'Cube de 3,05 m de côté, + 30,48 cm dans chaque dimension par Rang',
            'effect' => 'Le sort crée des conditions arctiques dans un cube de 3,05 m de côté. La zone augmente de 30,48 cm dans toutes les dimensions par Rang. Tout personnage présent, y compris l’Adepte, doit résister ou subir D−4 dégâts, plus 1 par Rang.',
        ],

        'S-6' => [
            'name' => 'Sort de projectiles de glace',
            'name_en' => 'Spell of Ice Projectiles',
            'range' => '7,62 m + 1,52 m par Rang',
            'duration' => 'Immédiate',
            'experience_multiple' => 300,
            'base_chance' => '30%',
            'resist' => 'Impossible',
            'effect' => 'Les cibles touchées subissent D−3 dégâts, plus 1 par Rang. La chance d’infection augmente de 10 pour toute blessure causée par ces projectiles.',
        ],

        'S-7' => [
            'name' => 'Sort d’éclair',
            'name_en' => 'Lightning Spell',
            'range' => '18,29 m',
            'duration' => 'Immédiate',
            'experience_multiple' => 225,
            'base_chance' => '30%',
            'resist' => 'Passive uniquement',
            'effect' => 'L’Adepte lance un éclair de 18,29 m depuis ses doigts. Toute cible située sur son trajet doit résister ou subir D+5 dégâts, plus 1 point pour chaque tranche de 3 Rangs ou fraction, et est automatiquement étourdie.',
        ],

        'S-8' => [
            'name' => 'Sort d’hibernation',
            'name_en' => 'Spell of Hibernation',
            'range' => 'Soi-même ou personnage adjacent',
            'duration' => 'Variable selon le Rang',
            'experience_multiple' => 350,
            'base_chance' => '20%',
            'resist' => 'Active ou passive',
            'effect' => 'L’Adepte place lui-même ou un autre personnage dans un état d’animation suspendue. Lorsque le sort prend fin, la cible se réveille avec une réduction temporaire de D−6 en Physical Strength due à l’atrophie musculaire.',
        ],

        'S-9' => [
            'name' => 'Sort d’arme de froid',
            'name_en' => 'Weapon of Cold Spell',
            'range' => '1,52 m + 1,52 m par Rang',
            'duration' => '20 secondes × [D−5] × Rang',
            'experience_multiple' => 250,
            'base_chance' => '30%',
            'resist' => 'Impossible',
            'effect' => 'L’arme devient extrêmement froide sans être endommagée et sans blesser son utilisateur. La Base Chance de toucher augmente de 1, plus 1 par Rang.',
        ],

        'S-10' => [
            'name' => 'Sort de barrière de vent',
            'name_en' => 'Barrier of Wind Spell',
            'range' => 'Soi-même',
            'duration' => '30 secondes + 30 secondes par Rang',
            'experience_multiple' => 250,
            'base_chance' => '20%',
            'resist' => 'Impossible',
            'effect' => 'Le sort crée une barrière de vent autour de l’Adepte qui réduit la Strike Chance des attaquants en combat au corps à corps de 5, plus 1 par Rang.',
        ],

        'S-11' => [
            'name' => 'Sort de mur de glace',
            'name_en' => 'Wall of Ice Spell',
            'range' => '6,10 m + 3,05 m par Rang',
            'duration' => '10 minutes + 10 minutes par Rang',
            'experience_multiple' => 150,
            'base_chance' => '15%',
            'resist' => 'Impossible',

            'dimensions' => [
                'wall' => 'Épaisseur : 60,96 cm | Hauteur : 3,05 m | Longueur : 6,10 m',
                'ring' => 'Épaisseur : 60,96 cm | Hauteur : 3,05 m | Rayon : 1,52 m',
                'pillar' => 'Hauteur : 4,57 m | Épaisseur : 1,22 m',
                'increase_per_rank' => '+ 30,48 cm par Rang',
            ],

            'effect' => 'L’Adepte crée soit un mur de 60,96 cm d’épaisseur, 3,05 m de hauteur et 6,10 m de longueur, soit un anneau de 60,96 cm d’épaisseur, 3,05 m de hauteur et d’un rayon de 1,52 m, soit un pilier de 4,57 m de haut et 1,22 m d’épaisseur. Toute dimension peut être augmentée de 30,48 cm par Rang.',
        ],

        'S-12' => [
            'name' => 'Sort de rayon de froid',
            'name_en' => 'Ray of Cold Spell',
            'range' => '10,67 m + 3,05 m par Rang',
            'duration' => 'Immédiate',
            'experience_multiple' => 300,
            'base_chance' => '30%',
            'resist' => 'Passive uniquement',
            'effect' => 'Le sort projette un rayon d’air gelé vers une cible. Tout objet ou personnage entre le lanceur et la cible bloque le rayon. La cible touchée doit résister ou subir D−1 dégâts, plus 1 par Rang.',
        ],

        'S-13' => [
            'name' => 'Sort de gaz soporifique',
            'name_en' => 'Spell of Sleep Gas',
            'range' => '9,14 m + 3,05 m par Rang',
            'duration' => '5 minutes + 5 minutes par Rang',
            'experience_multiple' => 450,
            'base_chance' => '5%',
            'resist' => 'Passive uniquement',
            'volume' => '0,566 m³ + 0,283 m³ par Rang',
            'effect' => 'Le sort crée un nuage de gaz incapacitant de 0,566 m³, plus 0,283 m³ par Rang. Toute personne qui inhale le gaz doit résister ou subir D−3 dégâts, plus 1 par Rang.',
        ],

        'S-14' => [
            'name' => 'Sort de lévitation forcée',
            'name_en' => 'Spell of Lifting',
            'range' => '3,05 m + 3,05 m par Rang',
            'duration' => 'Concentration, maximum 5 secondes + 5 secondes par Rang',
            'experience_multiple' => 300,
            'base_chance' => '20%',
            'resist' => 'Active et passive',
            'vertical_movement' => '3,05 m toutes les 5 secondes',
            'horizontal_movement' => '1,52 m toutes les 5 secondes',
            'effect' => 'L’Adepte peut soulever dans les airs une cible de taille humaine ou plus petite. Toutes les 5 secondes, il peut déplacer la cible de 3,05 m verticalement ou de 1,52 m horizontalement. Lorsque le sort prend fin, la cible tombe et subit les dégâts normaux de chute.',
        ],

        'S-15' => [
            'name' => 'Sort de vortex tourbillonnant',
            'name_en' => 'Whirlwind Vortex Spell',
            'range' => '4,57 m + 4,57 m par Rang',
            'duration' => 'Immédiate',
            'experience_multiple' => 350,
            'base_chance' => '30%',
            'resist' => 'Active et passive',
            'effect' => 'Le sort crée un tourbillon autour des cibles. Une cible qui échoue à sa résistance subit D−4 dégâts, plus 1 par Rang.',
        ],

        'S-16' => [
            'name' => 'Sort du destin gelé',
            'name_en' => 'Spell of Frozen Doom',
            'range' => '6,10 m + 6,10 m par Rang',
            'duration' => 'Immédiate',
            'experience_multiple' => 500,
            'base_chance' => '1%',
            'resist' => 'Active et passive',
            'effect' => 'Le sort transforme le sang d’une entité cible en glace et provoque normalement sa mort. Si la cible résiste, elle subit D−4 dégâts, plus 1 pour chaque tranche de 2 Rangs ou fraction.',
        ],
    ],


    /*
    |--------------------------------------------------------------------------
    | SPECIAL KNOWLEDGE RITUALS
    |--------------------------------------------------------------------------
    */

    'special_knowledge_rituals' => [
        'title' => 'Special Knowledge Rituals',

        'R-1' => [
            'name' => 'Rituel de contrôle de la météo',
            'name_en' => 'Ritual of Controlling Weather',
            'range' => 'Rayon de 8,05 km + 1,61 km par Rang',
            'ritual_duration' => '1 heure',
            'maximum_duration' => '1 heure + 1 heure par Rang',
            'experience_multiple' => 450,
            'base_chance' => '9% + 5 par Rang',
            'backfire' => 'La météo affecte l’Adepte',
            'effect' => 'L’Adepte peut rassembler des nuages orageux, augmenter ou diminuer la température, modifier la pression barométrique et provoquer des précipitations dans toute la zone affectée.',
        ],

        'R-2' => [
            'name' => 'Rituel d’invocation et de contrôle d’un élémentaire de l’air',
            'name_en' => 'Ritual of Summoning and Controlling Air Elemental',
            'requirements' => 'Zone ouverte ou semi-fermée avec accès direct à l’air extérieur',
            'effect' => 'L’Adepte peut invoquer un élémentaire de l’air et le lier temporairement à son service. Les procédures utilisent les mêmes règles que celles décrites pour les élémentaires de feu dans le document source.',
        ],

        'R-3' => [
            'name' => 'Rituel de création d’un simulacre de neige',
            'name_en' => 'Ritual of Creating a Snow Simulacrum Spell',
            'range' => 'Le lanceur doit façonner et toucher la sculpture',
            'duration' => '1 heure + 1 heure par Rang',
            'experience_multiple' => 250,
            'base_chance' => '10 + 5 par Rang',
            'resist' => 'Impossible',
            'effect' => 'L’Adepte crée une sculpture humaine ou animale en neige ou en glace. Une fois le rituel terminé, elle devient animée. Toutes ses caractéristiques sont réduites de 25%, elle est loyale envers l’Adepte et fond à la fin de sa durée.',
        ],
    ],

];