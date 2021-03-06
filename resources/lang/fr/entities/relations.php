<?php

return [
    'create'        => [
        'success'   => 'Relation ajoutée pour :name.',
        'title'     => 'Nouvelle relation pour :name',
    ],
    'destroy'       => [
        'success'   => 'Relation supprimée pour :name.',
    ],
    'fields'        => [
        'attitude'  => 'Attitude',
        'is_star'   => 'Epinglé',
        'relation'  => 'Relation',
        'target'    => 'Cible',
        'two_way'   => 'Créer une relation miroir',
    ],
    'helper'        => 'Définir des relations entre entités avec leur description, attitude et visibilité. Les relations peuvent aussi être épinglée sur le menu de l\'entité.',
    'hints'         => [
        'attitude'  => 'Ce champ optionnel peut être utilisé pour définir l\'ordre ascendant dans lequel s\'affiche les relations.',
        'mirrored'  => [
            'text'  => 'Cette relation est liée avec :link.',
            'title' => 'Lié',
        ],
        'two_way'   => 'Sélectionne pour créer une copie de la relation sur la cible.',
    ],
    'placeholders'  => [
        'attitude'  => 'de -100 à 100, 100 étant très positif.',
        'relation'  => 'Nature de la relation',
        'target'    => 'Choix d\'un élément',
    ],
    'show'          => [
        'title' => 'Relations de :name',
    ],
    'update'        => [
        'success'   => 'Relation modifiée pour :name.',
        'title'     => 'Modifier la relation de :name',
    ],
];
