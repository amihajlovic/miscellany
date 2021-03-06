<?php

return [
    'create'                            => [
        'description'           => 'Kreiraj novu kampanju',
        'helper'                => [
            'first' => 'Hvala ti što isprobavaš našu aplikaciju! Prije nego možemo ići dalje, trebamo od tebe jednu jednostavu stvar, <b>naziv tvoje kampanje</b>. Ovo je naziv tvog svijeta koji ga razlikuje od drugih. Ako još nemaš dobro ime, ne brini, možeš ga <b>uvijek promijeniti kasnije</b>, ili kreirati više kampanja.',
            'second'=> 'Ali dosta brbljanja! Dakle, što će biti?',
            'title' => 'Dobro došli u :name!',
        ],
        'success'               => 'Kampanja kreirana.',
        'success_first_time'    => 'Tvoja kampanja je kreirana! Budući da je tvoja prva kampanja, kreirali smo nekoliko stvari da ti pomognemo započeti i, po mogućnosti, pružimo malo inspiracije za što sve možeš napraviti.',
        'title'                 => 'Nova kampanja',
    ],
    'destroy'                           => [
        'success'   => 'Kampanja uklonjena.',
    ],
    'edit'                              => [
        'description'   => 'Uredi svoju kampanju',
        'success'       => 'Kampanja ažurirana.',
        'title'         => 'Uredi kampanju :campaign',
    ],
    'entity_personality_visibilities'   => [
        'private'   => 'Novi likovi imaju svoju osobnost postavljenu kao privatnu, osim ako to ne promijeniš.',
    ],
    'entity_visibilities'               => [
        'private'   => 'Novi entiteti su privatni',
    ],
    'errors'                            => [
        'access'        => 'Nemaš pristup ovoj kampanji.',
        'unknown_id'    => 'Nepoznata kampanja.',
    ],
    'export'                            => [
        'description'   => 'Izvezi kampanju.',
        'errors'        => [
            'limit' => 'Prekoračen vlastiti dozvoljeni broj izvoza po danu. Pokušaj ponovno sutra.',
        ],
        'helper'        => 'Izvezi svoju kampanju. Notifikacija s poveznicom za preuzimanje će biti stavljena na raspolaganje.',
        'success'       => 'Izvoz tvoje kampanje je pripremljen. Dobit ćeš notifikaciju u Kanki do ZIP datoteke koju možeš preuzeti, čim bude spremna.',
        'title'         => 'Izvoz kampanje :name',
    ],
    'fields'                            => [
        'boosted'                       => 'Pojačali',
        'css'                           => 'CSS',
        'description'                   => 'Opis',
        'entity_count'                  => 'Broj entiteta',
        'entity_personality_visibility' => 'Vidljivost osobnosti lika',
        'entity_visibility'             => 'Vidljivost entiteta',
        'excerpt'                       => 'Isječak',
        'followers'                     => 'Pratitelji',
        'header_image'                  => 'Slika zaglavlja',
        'image'                         => 'Slika',
        'locale'                        => 'Jezik',
        'name'                          => 'Naziv',
        'rpg_system'                    => 'Sustav igranja',
        'system'                        => 'Sustav',
        'theme'                         => 'Tema',
        'tooltip_family'                => 'Onemogući nazive obitelji u kratkom opisu',
        'tooltip_image'                 => 'Prikaži sliku entiteta u kratkom opisu',
        'visibility'                    => 'Vidljivost',
    ],
    'following'                         => 'Praćenje',
    'helpers'                           => [
        'boost_required'                => 'Ova funkcionalnost zahtjeva pojačanu kampanju. Više informacija na stranici :settings.',
        'boosted'                       => 'Neke funkcionalnosti su otključane jer je ova kampanja pojačana. Pronađi više na stranicama :settings.',
        'css'                           => 'Napiši svoj CSS koji će biti učitan u stranice tvoje kampanje. Zlonamjerno korištenje ove funkiconalnosti će rezultirati uklanjanjem tvog CSS-a. Ponovni ili posebno teški prijestupi mogu dovesti do uklanjanja tvoje kampanje.',
        'entity_personality_visibility' => 'Prilikom kreiranja novog lika, opcija "Osobnost vidljiva" će automatski biti odznačena.',
        'entity_visibility'             => 'Prilikom kreiranja novog entiteta, opcija "Privatno" će automatski biti odabrana.',
        'excerpt'                       => 'Isječak kampanje će biti prikazan na naslovnoj ploči pa napiši nekoliko rečenica kao uvod u svoj svijet. Za najbolje rezultate, neka bude kratko.',
        'locale'                        => 'Jezik u kojem je tvoja kampanja napisana. Ovo se koristi za generiranje sadržaja i grupiranje javnih kampanja.',
        'name'                          => 'Tvoj svijet ili kampanja može imati bilo koje ime dok god sadrži 4 slova ili broja.',
        'system'                        => 'Ako je tvoja kampanja vidljiva javnosti, sustav je pokazan na stranici :link.',
        'systems'                       => 'Kako bi izbjegli zatrpavanje korisnika opcijama, neke funkcionalnosti Kanke su dostupne samo s određenim RPG sustavima (npr. D&D 5e blok sa statistikama za nemani). Dodavanje podržanih sustava na ovom mjestu će omogućiti te funkcionalnosti.',
        'theme'                         => 'Prisili korisnike da koriste ovu temu za kampanju, nadjačavajući njihov odabir.',
        'visibility'                    => 'Proglašavanje kampanje javnom znači da će ju moći vidjeti svi koji imaju s odgovarajućom poveznicom.',
    ],
    'index'                             => [
        'actions'   => [
            'new'   => [
                'title' => 'Nova kampanja',
            ],
        ],
        'title'     => 'Kampanja',
    ],
    'invites'                           => [
        'actions'               => [
            'add'   => 'Pozovi',
            'copy'  => 'Kopiraj poveznicu u međuspremnik',
            'link'  => 'Nova poveznica',
        ],
        'create'                => [
            'button'        => 'Pozovi',
            'description'   => 'Pozovi prijatelja/icu u svoju kampanju',
            'link'          => 'Poveznica kreirana: <a href=":url" target="_blank">:url</a>',
            'success'       => 'Pozivnica poslana.',
            'title'         => 'Pozovi nekoga u svoju kampanju',
        ],
        'destroy'               => [
            'success'   => 'Pozivnica uklonjena.',
        ],
        'email'                 => [
            'link'      => '<a href=":link">:name te pozvao u svoju kampanju</a>',
            'subject'   => ':name te pozvao da se priključiš kampanji ":campaign" na kanka.io! Iskoristi sljedeću poveznicu da bi prihvatio njihovu pozivnicu.',
            'title'     => 'Pozivnica od :name',
        ],
        'error'                 => [
            'already_member'    => 'Već si član te kampanje.',
            'inactive_token'    => 'Ovaj token je već iskorišten ili kampanja više ne postoji.',
            'invalid_token'     => 'Ovaj token više nije validan.',
            'login'             => 'Prijavi se ili registriraj da bi se priključio/la kampanji.',
        ],
        'fields'                => [
            'created'   => 'Poslano',
            'email'     => 'Email',
            'role'      => 'Uloga',
            'type'      => 'Tip',
            'validity'  => 'Validnost',
        ],
        'helpers'               => [
            'email'     => 'Naše email poruke su često označene kao neželjena pošta i može im trebati i do nekoliko sati prije nego se pojave u tvojem poštanskom sandučiću.',
            'validity'  => 'Koliko korisnika može iskoristiti ovu poveznicu prije nego se deaktivira. Ostavi prazno za neograničeno',
        ],
        'placeholders'          => [
            'email' => 'Email adresa osobe koju želiš pozvati',
        ],
        'types'                 => [
            'email' => 'Email',
            'link'  => 'Pozivnica',
        ],
        'unlimited_validity'    => 'Neograničeno',
    ],
    'leave'                             => [
        'confirm'   => 'Da li sigurno da želiš napustiti kampanju :name? Nećeš još više moći pristupiti, osim ako te administrator kampanje ne pozove ponovno.',
        'error'     => 'Nemoguće napustiti kampanju.',
        'success'   => 'Napustio/la si kampanju.',
    ],
    'members'                           => [
        'actions'               => [
            'switch'        => 'Prebaci se',
            'switch-back'   => 'Povratak na mog korisnika',
        ],
        'create'                => [
            'title' => 'Dodaj člana u svoju kampanju',
        ],
        'description'           => 'Upravljanje članovima kampanje',
        'edit'                  => [
            'description'   => 'Uredi člana kampanje',
            'title'         => 'Uredi člana :name',
        ],
        'fields'                => [
            'joined'        => 'Pridružen/a',
            'last_login'    => 'Zadnja prijava',
            'name'          => 'Korisnik',
            'role'          => 'Uloga',
            'roles'         => 'Uloge',
        ],
        'help'                  => 'Kampanje mogu imati neograničeni broj članova u njima.',
        'helpers'               => [
            'admin' => 'Kao član uloge administratora kampanje, možeš pozivati nove korisnike, maknuti neaktivne, te promijeniti njihove ovlasti. Kako bi testirao dopuštenja člana, iskoriti "Prebaci se" gumb. Više o tome pročitaj na :link.',
            'switch'=> 'Prebaci se na ovog korisnika',
        ],
        'impersonating'         => [
            'message'   => 'Gledaš kampanju kao drugi korisnik. Neke funkcionalnosti su onemogućene, ali ostatak se ponaša jednako onako kako bi ih taj korisnik vidio. Da se prebaciš nazad na svog korisnika, iskoristi "Prebaci se nazad" gumb koji se nalazi tamo gdje se inače nalazi gumb za odjavu.',
            'title'     => 'Imitiranje :name',
        ],
        'invite'                => [
            'description'   => 'Možeš pozvati prijatelje da se priključe tvojoj kampanji tako što im daš pozivnicu za priključivanje. Kad prihate pozivnicu, bit će dodani kao članovi u zatraženoj ulozi. Također im možeš poslati zahtjev putem emaila dok god nije Hotmail adresa, jer oni uvijek odbijaju Kankine emailove.',
            'more'          => 'Možeš dodati više uloga na :link.',
            'roles_page'    => 'stranici uloga',
            'title'         => 'Pozvati',
        ],
        'roles'                 => [
            'member'    => 'Član',
            'owner'     => 'Administrator',
            'player'    => 'Igrač',
            'public'    => 'Javnost',
            'viewer'    => 'Osmatrač',
        ],
        'switch_back_success'   => 'Vratio si se na svog korisnika.',
        'title'                 => 'Članovi kampanje :name',
        'your_role'             => 'Tvoja uloga <i>:role</i>',
    ],
    'panels'                            => [
        'boosted'   => 'Pojačano',
        'dashboard' => 'Naslovna ploča',
        'permission'=> 'Ovlasti',
        'sharing'   => 'Dijeljenje',
        'systems'   => 'Sustavi',
        'ui'        => 'Sučelje',
    ],
    'placeholders'                      => [
        'description'   => 'Kratki sažetak tvoje kampanje',
        'locale'        => 'Jezični kod',
        'name'          => 'Naziv tvoje kampanje',
        'system'        => 'D&D, Pathfinder, Fate, DSA',
    ],
    'roles'                             => [
        'actions'       => [
            'add'   => 'Dodaj ulogu',
        ],
        'create'        => [
            'success'   => 'Uloga kreirana.',
            'title'     => 'Kreiraj novu ulogu za: name',
        ],
        'description'   => 'Upravljanje ulogama kampanje',
        'destroy'       => [
            'success'   => 'Uloga uklonjena.',
        ],
        'edit'          => [
            'success'   => 'Uloga ažurirana.',
            'title'     => 'Uredi ulogu :name',
        ],
        'fields'        => [
            'name'          => 'Naziv',
            'permissions'   => 'Ovlasti',
            'type'          => 'Tip',
            'users'         => 'Korisnici',
        ],
        'helper'        => [
            '1' => 'Kampanja može imati koliko god uloga treba. Uloga "Administrator" automatski ima pristup svemu u kampanji, ali sve ostale uloge mogu imati određene ovlasti za različite entitete (likove, lokacije, itd).',
            '2' => 'Entitetima se mogu detaljnije podesiti ovlasti pregledom kartice "Ovlasti" na entitetu. Ova kartica se pojavljuje kad tvoja kampanja ima nekoliko uloga za članove.',
            '3' => 'Možeš ići sustavom "isključivanja", u kojem je ulogama dan pristup pregledu svih entiteta, i onda koristiti "Privatno" kućicu na entitetima da ih se sakrije. Ili možeš ne dati puno ovlasti ulogama pa postavljati vidljivost svakog entiteta zasebno.',
        ],
        'hints'         => [
            'campaign_not_public'   => 'Javna uloga ima ovlasti, ali je kampanja privatna. Ovu postavku možeš promijeniti na kartici Dijeljenje prilikom uređivanja kampanje.',
            'public'                => 'Uloga "Javnost" se koristi kad netko pretražuje tvoju javnu kampanju. :more',
            'role_permissions'      => 'Omogući ulozi ":name" da radi sljedeće akcije nad svim entitetima.',
        ],
        'members'       => 'Članovi',
        'permissions'   => [
            'actions'   => [
                'add'           => 'Kreiraj',
                'delete'        => 'Obriši',
                'edit'          => 'Uredi',
                'entity-note'   => 'Bilješka entiteta',
                'permission'    => 'Ovlasti',
                'read'          => 'Pregled',
                'toggle'        => 'Promijeni za sve',
            ],
            'hint'      => 'Ova uloga automatski ima pristup svemu.',
        ],
        'placeholders'  => [
            'name'  => 'Naziv uloge',
        ],
        'show'          => [
            'description'   => 'Članovi i ovlasti uloge u kampanji',
            'title'         => 'Uloga kampanje ":role"',
        ],
        'title'         => 'Uloge kampanje :name',
        'types'         => [
            'owner'     => 'Administrator',
            'public'    => 'Javnost',
            'standard'  => 'Standardno',
        ],
        'users'         => [
            'actions'   => [
                'add'   => 'Dodaj člana',
            ],
            'create'    => [
                'success'   => 'Korisnik dodan u ulogu.',
                'title'     => 'Dodaj člana u ulogu :name',
            ],
            'destroy'   => [
                'success'   => 'Korisnik uklonjen iz uloge.',
            ],
            'fields'    => [
                'name'  => 'Naziv',
            ],
        ],
    ],
    'settings'                          => [
        'actions'       => [
            'enable'    => 'Omogući',
        ],
        'boosted'       => 'Ova funkcionalnost je u testnoj verziji i trenutno je dostupna samo za :boosted.',
        'description'   => 'Omogući ili onemogući module kampanje.',
        'edit'          => [
            'success'   => 'Ažurirane postavke kampanje.',
        ],
        'helper'        => 'Svi moduli kampanje mogu se omogućiti ili onemogućiti po volji. Onemogućivanje modula će jednostavno sakriti elemente sučelja koji se na njega odnose, a postojeći entiteti bit će skriveni, ali i dalje postojati u pozadini, u slučaju da se predomislite. Te promjene utječu na sve korisnike kampanje, uključujući administratore.',
        'helpers'       => [
            'abilities'     => 'Stvori sposobnosti, bilo da su to podvizi, čarolije ili moći koje se mogu dodijeliti entitetima.',
            'calendars'     => 'Mjesto za definiranje kalendara tvog svijeta.',
            'characters'    => 'Ljudi koji nastanjuju tvoj svijet.',
            'conversations' => 'Izmišljeni razgovori između likova ili između korisnika kampanje. Ovaj modul je zastario.',
            'dice_rolls'    => 'Za one koji koriste Kanka za RPG kampanje, način za upravljanje bacanjem kockica. Ovaj modul je zastario.',
            'events'        => 'Praznici, festivali, katastrofe, rođendani, ratovi.',
            'families'      => 'Klanovi ili obitelji, njihovi odnosi i njihovi članovi.',
            'items'         => 'Oružje, vozila, relikvije, napitci.',
            'journals'      => 'Opažanja napisana od strane likova ili priprema za sesiju za voditelja igre.',
            'locations'     => 'Planeti, ravni postojanja, kontinenti, rijeke, države, naselja, hramovi, krčme.',
            'menu_links'    => 'Prilagođene poveznice izbornika u bočnoj traci.',
            'notes'         => 'Legende, religije, povijest, magija, rase.',
            'organisations' => 'Kultovi, vojne jedinice, frakcije, cehovi.',
            'quests'        => 'Za praćenje raznih zadataka s likovima i lokacijama.',
            'races'         => 'Ako tvoja kampanja ima više od jedne rase, ovo će olakšati praćenje.',
            'tags'          => 'Svaki entitet može imati nekoliko oznaka. Oznake mogu pripadati drugim oznakama, a unosi se mogu filtrirati po oznakama.',
        ],
        'title'         => 'Moduli kampanje :name',
    ],
    'show'                              => [
        'actions'       => [
            'boost' => 'Pojačaj kampanju',
            'leave' => 'Napusti kampanju',
        ],
        'description'   => 'Detaljan pregled kampanje',
        'tabs'          => [
            'default-images'    => 'Zadane slike',
            'export'            => 'Izvoz',
            'information'       => 'Informacije',
            'members'           => 'Članovi',
            'menu'              => 'Izbornik',
            'recovery'          => 'Oporavak',
            'roles'             => 'Uloge',
            'settings'          => 'Moduli',
        ],
        'title'         => 'Kampanja :name',
    ],
    'ui'                                => [
        'helper'    => 'Pomoću ovih postavki promijeni način na koji će se neki elementi prikazivati ​​u kampanji.',
    ],
    'visibilities'                      => [
        'private'   => 'Privatna',
        'public'    => 'Javna',
        'review'    => 'Čeka na pregled',
    ],
];
