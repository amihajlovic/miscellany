<?php

return [
    'actions'       => [
        'add_epoch'     => 'Ajouter une époque',
        'add_month'     => 'Ajouter un mois',
        'add_moon'      => 'Ajouter une lune',
        'add_season'    => 'Ajouter une saison',
        'add_weekday'   => 'Ajouter un jour de semaine',
        'add_year'      => 'Ajouter un nom d\'année',
        'today'         => 'Aujourd\'hui',
    ],
    'checkboxes'    => [
        'is_recurring'  => 'A lieu chaque année',
    ],
    'colours'       => [
        'black'     => 'Noir',
        'blue'      => 'Bleu',
        'default'   => 'Défaut',
        'green'     => 'Vert',
        'maroon'    => 'Bordeaux',
        'navy'      => 'Bleu Marin',
        'orange'    => 'Orange',
        'purple'    => 'Violet',
        'red'       => 'Rouge',
        'teal'      => 'Sarcelle',
    ],
    'create'        => [
        'description'   => 'Créer un nouveau calendrier',
        'success'       => 'Nouveau calendrier \':name\' créé.',
        'title'         => 'Nouveau Calendrier',
    ],
    'destroy'       => [
        'success'   => 'Calendrier \':name\' supprimé.',
    ],
    'edit'          => [
        'description'   => 'Modification de calendrier',
        'success'       => 'Calendrier \':name\' modifié.',
        'title'         => 'Modifier le calendrier :name',
    ],
    'event'         => [
        'actions'   => [
            'existing'  => 'Entité Existante',
            'new'       => 'Nouvel Événement',
            'switch'    => 'Choix différent',
        ],
        'create'    => [
            'description'   => 'Créer un événement de calendrier',
            'success'       => 'Evénement de calendrier ajouté.',
            'title'         => 'Ajouter un événement de calendrier à :name',
        ],
        'destroy'   => 'Evénement retiré du calendrier \':name\'.',
        'edit'      => [
            'description'   => 'Modifier un événement de calendrier',
            'success'       => 'Evénement de calendrier modifié.',
            'title'         => 'Modifier un événement de calendrier pour :name',
        ],
        'helpers'   => [
            'add'   => 'Ajouter un événement à ce calendrier en utilisant la liste à choix.',
            'new'   => 'Ou créer un nouveu événement en indiquant un nom.',
        ],
        'modal'     => [
            'title' => 'Ajouter un événement au calendrier',
        ],
        'success'   => 'Evénement \':event\' ajouté au calendrier.',
    ],
    'fields'        => [
        'colour'            => 'Couleur',
        'comment'           => 'Commentaire',
        'current_day'       => 'Jour Actuel',
        'current_month'     => 'Mois actuel',
        'current_year'      => 'Année actuelle',
        'date'              => 'Date actuelle',
        'has_leap_year'     => 'Année bissextile',
        'is_recurring'      => 'Récurrent',
        'leap_year_amount'  => 'Jours à ajouter',
        'leap_year_month'   => 'Mois',
        'leap_year_offset'  => 'Chaque',
        'leap_year_start'   => 'Année bissextile',
        'length'            => 'Durée de l\'événement',
        'length_days'       => ':count jour|:count jours',
        'months'            => 'Mois',
        'moons'             => 'Lunes',
        'name'              => 'Nom',
        'parameters'        => 'Paramètres',
        'recurring_until'   => 'Récurrent jusqu\'à l\'année',
        'seasons'           => 'Saisons',
        'suffix'            => 'Suffix',
        'type'              => 'Type',
        'weekdays'          => 'Jours de la semaine',
    ],
    'hints'         => [
        'is_recurring'  => 'Un événement peut être récurrent. Il réapparaitera chaque année à la même date.',
        'months'        => 'Le calendrier doit avoir au moins 2 mois.',
        'moons'         => 'Chaque lune sera affichée dans le calendrier lors de la pleine lune.',
        'seasons'       => 'Les saisons seront affichées dans le calendrier lorsqu\'elles commencent.',
        'weekdays'      => 'Un calendrier doit posséder au moins 2 jours dans la semaine.',
        'years'         => 'Certaines années sont tellement importantes qu\'elles ont leur propre nom.',
    ],
    'index'         => [
        'add'           => 'Nouveau Calendrier',
        'description'   => 'Gestion des calendriers pour :name.',
        'header'        => 'Calendriers de :name',
        'title'         => 'Calendrier',
    ],
    'layouts'       => [
        'month' => 'Mois',
        'year'  => 'Année',
    ],
    'panels'        => [
        'leap_year' => 'Année bissextile',
        'years'     => 'Nom d\'années',
    ],
    'parameters'    => [
        'month'     => [
            'length'    => 'Nombre de jours',
            'name'      => 'Nom du mois',
        ],
        'moon'      => [
            'fullmoon'  => 'Pleine lune chaque (jours)',
            'name'      => 'Nom de la lune',
        ],
        'seasons'   => [
            'day'   => 'Jour de départ',
            'month' => 'Mois de départ',
            'name'  => 'Nom de la saison',
        ],
        'year'      => [
            'name'      => 'Nom',
            'number'    => 'Année',
        ],
    ],
    'placeholders'  => [
        'colour'            => 'Couleur',
        'comment'           => 'Anniversaire, festival, solstice',
        'date'              => 'La date actuelle',
        'leap_year_amount'  => 'Nombre de jours à ajouter lors d\'une année bissextile',
        'leap_year_month'   => 'Mois durant lequel les jours sont à ajouter',
        'leap_year_offset'  => 'Nombre d\'années entre chaque année bissextile',
        'leap_year_start'   => 'Première année bissextile',
        'length'            => 'Durée de l\'événement en jours',
        'months'            => 'Nombre de mois dans une année',
        'name'              => 'Nom du calendrier',
        'recurring_until'   => 'Année de dernière réoccurence (laisser vide pour infini)',
        'seasons'           => 'Nombre de saisons',
        'suffix'            => 'Suffix de l\'époque actuelle (AC, BC)',
        'type'              => 'Type de calendrier',
        'weekdays'          => 'Nombre de jours dans une semaine',
    ],
    'show'          => [
        'description'       => 'Vue détaillée d\'un calendrier',
        'moon_full_moon'    => 'Pleine lune de :moon',
        'tabs'              => [
            'information'   => 'Information',
        ],
        'title'             => 'Calendrier :name',
    ],
];
