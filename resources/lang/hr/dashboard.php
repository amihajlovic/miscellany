<?php

return [
    'actions'           => [
        'follow'    => 'Prati',
        'unfollow'  => 'Prekini pratiti',
    ],
    'campaigns'         => [
        'manage'    => 'Upravljanje kampanjom',
        'tabs'      => [
            'modules'   => '{1} :count modul|{2,*} :count modula',
            'roles'     => '{1} :count uloga|{2,4} :count uloge|{5,*} :count uloga',
            'users'     => '{1} :count korisnik|{2,*} :count korisnika',
        ],
    ],
    'description'       => 'Dom za tvoju kreativnost',
    'helpers'           => [
        'follow'    => 'Praćenje kampanje prikazat će ju u izborniku kampanje (gore desno) ispod tvojih kampanja.',
        'setup'     => 'Postavljanje naslovne ploče kampanje.',
    ],
    'latest_release'    => 'Najnovije izdanje',
    'notifications'     => [
        'modal' => [
            'confirm'   => 'Shvaćam',
            'title'     => 'Važna obavijest',
        ],
    ],
    'recent'            => [
        'add'           => 'Kreiraj :name',
        'no_entries'    => 'Trenutno nema unosa ove vrste.',
        'title'         => 'Nedavno izmijenjeno :name',
        'view'          => 'Pregledaj sve :name',
    ],
    'settings'          => [
        'description'   => 'Prilagodi što vidiš na naslovnoj ploči',
        'edit'          => [
            'success'   => 'Tvoje promjene su spremljene.',
        ],
        'fields'        => [
            'helper'        => 'Možeš jednostavno promijeniti ono što vidiš na nadzornoj ploči. Imaj na umu da je to za sve tvoje kampanje, bez obzira na postavke kampanje.',
            'recent_count'  => 'Broj nedavnih elemenata',
        ],
        'title'         => 'Postavke naslovne ploče',
    ],
    'setup'             => [
        'actions'   => [
            'add'               => 'Dodajte programčić',
            'back_to_dashboard' => 'Povratak na naslovnu ploču',
            'edit'              => 'Uredi programčić',
        ],
        'title'     => 'Postavljanje naslovne ploče kampanje',
        'widgets'   => [
            'calendar'  => 'Kalendar',
            'preview'   => 'Skraćeni pregled entiteta',
            'recent'    => 'Nedavno',
        ],
    ],
    'title'             => 'Naslovna ploča',
    'widgets'           => [
        'calendar'  => [
            'actions'           => [
                'next'      => 'Promijeni trenutni datum na sljedeći dan',
                'previous'  => 'Promijeni trenutni datum na prethodni dan',
            ],
            'events_today'      => 'Danas',
            'previous_events'   => 'Prošli događaji',
            'upcoming_events'   => 'Nadolazeći događaji',
        ],
        'create'    => [
            'success'   => 'Programčić dodan na naslovnu ploču.',
        ],
        'delete'    => [
            'success'   => 'Programčić uklonjen s naslovne ploče.',
        ],
        'fields'    => [
            'width' => 'Širina',
        ],
        'recent'    => [
            'full'      => 'Puna',
            'help'      => 'Prikaži samo posljednji ažurirani entitet, ali prikaži cijeli pregled entiteta',
            'helpers'   => [
                'full'  => 'Prikaži unos cijelog entiteta umjesto skraćenog pregleda.',
            ],
            'singular'  => 'Jedan',
            'title'     => 'Nedavno izmijenjeno',
        ],
        'update'    => [
            'success'   => 'Programčić ažuriran.',
        ],
        'widths'    => [
            '0' => 'Automatski',
            '12'=> 'Puna',
            '4' => 'Mala',
            '6' => 'Pola',
        ],
    ],
];
