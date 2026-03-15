<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
public $servizi = [
[
'id' => 1,
'nome' => 'Visite guidate virtuali',
'descrizione' => 'Tour online dei siti archeologici come Amastris, Limyra, Amorosi e gli altipiani con le pietre dei draghi.',
'icona' => 'fa-solid fa-eye' 
],
[
'id' => 2,
'nome' => 'Corsi di mitologia',
'descrizione' => 'Lezioni approfondite sui mostri, divinità, miti e leggende greche e romane.',
'icona' => 'fa-solid fa-book-open'
],
[
'id' => 3,
'nome' => 'Podcast e webinar',
'descrizione' => 'Approfondimenti sui miti, interviste ad archeologi e storici, aggiornamenti sulle scoperte.',
'icona' => 'fa-solid fa-podcast'
],
[
'id' => 4,
'nome' => 'Gallerie di immagini e 3D',
'descrizione' => 'Visualizzazione interattiva di statue, tombe e stele con modelli 3D.',
'icona' => 'fa-solid fa-image'
],
[
'id' => 5,
'nome' => 'App e giochi educativi',
'descrizione' => 'Quiz sui mostri mitologici, timeline dei miti o simulazioni di labirinti.',
'icona' => 'fa-solid fa-gamepad'
],
[
'id' => 6,
'nome' => 'Newsletter',
'descrizione' => 'Aggiornamenti su scoperte archeologiche, eventi e nuovi articoli a tema mitologico.',
'icona' => 'fa-solid fa-envelope'
],
[
'id' => 7,
'nome' => 'Workshop di scrittura mitologica',
'descrizione' => 'Laboratori per imparare a creare storie ispirate a miti e leggende.',
'icona' => 'fa-solid fa-pen-nib'
],
[
'id' => 8,
'nome' => 'Laboratori artistici',
'descrizione' => 'Creazione di maschere, sculture o illustrazioni di mostri e divinità.',
'icona' => 'fa-solid fa-palette'
],
[
'id' => 9,
'nome' => 'Eventi a tema',
'descrizione' => 'Serate di narrazione, escape room o giochi di ruolo basati su leggende e miti.',
'icona' => 'fa-solid fa-theater-masks'
],
[
'id' => 10,
'nome' => 'Consulenza per scuole e musei',
'descrizione' => 'Supporto nella creazione di percorsi educativi e esposizioni mitologiche.',
'icona' => 'fa-solid fa-chalkboard-user'
],
[
'id' => 11,
'nome' => 'Traduzioni e pubblicazioni',
'descrizione' => 'Testi mitologici, studi archeologici e racconti illustrati disponibili per la divulgazione.',
'icona' => 'fa-solid fa-file-lines'
],
[
'id' => 12,
'nome' => 'Storytelling digitale',
'descrizione' => 'Creazione di contenuti web, app o social media basati sulla mitologia.',
'icona' => 'fa-solid fa-share-nodes'
],
];

public function service()
{
return view('service', [
    'servizi'=> $this->servizi
]); 
}
}
