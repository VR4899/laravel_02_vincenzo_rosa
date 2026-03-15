<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public  $scoperteMitologia = [
    [
        "id" => 1,
        "nome" => "Nuova espressione di Medusa",
        "luogo" => "Amastris, Turchia",
        "descrizione" => "Scoperta una scultura di Medusa con volto di bambino sorridente, simbolo forse di protezione e non solo di mostro.",
        "img" => "https://image.hurimg.com/i/hurriyet/75/600x400/59c8fabe45d2a027e83ce44b.jpg",
        "articolo"=> "Recentemente, gli archeologi hanno scoperto a Amastris, nell’antica regione dell’odierna Turchia, una rara raffigurazione di Medusa che sfida le tradizionali rappresentazioni della mitologia greca. Contrariamente all’immagine classica della Gorgone mostruosa, con serpenti al posto dei capelli e uno sguardo pietrificante, questa statua mostra Medusa con un volto quasi innocente e sorridente, richiamando l’aspetto di un bambino. La scoperta suggerisce che gli antichi Romani potessero considerare Medusa non solo come simbolo di terrore, ma anche come protettrice o portatrice di pace, un concetto molto diverso dalla versione popolare dei miti. Oltre a rivoluzionare la nostra percezione della mitologia, questa scultura offre nuovi spunti di riflessione sull’arte, la religione e il simbolismo nel mondo antico, mostrando come la leggenda di Medusa fosse più sfumata e complessa di quanto immaginato." 
    ],
    [
        "id" => 2,
        "nome" => "Tempio perduto di Zeus",
        "luogo" => "Limyra, Turchia",
        "descrizione" => "Gli archeologi hanno trovato un antico tempio dedicato a Zeus che aiuta a capire meglio il culto degli dei greci.",
        "img" => "https://cdnuploads.aa.com.tr/uploads/Contents/2025/11/14/thumbs_b_c_8a9f2302c2c594c8d8fec258a6d232f7.jpg?v=190907",
        "articolo"=>"Dopo oltre quarant’anni di ricerche, gli archeologi hanno finalmente riportato alla luce i resti del leggendario Tempio di Zeus nell’antica città di Limyra, in Turchia. Questo santuario, dedicato al re degli dèi dell’Olimpo, offre nuove informazioni sul culto greco e sull’organizzazione religiosa delle città ellenistiche. Le colonne e le strutture emergono dai secoli di terra e detriti, raccontando la grandiosità di un luogo che una volta ospitava rituali, offerte e cerimonie in onore di Zeus. La scoperta non solo conferma la presenza di importanti santuari nella regione, ma permette anche di comprendere meglio come architettura, religione e mito si intrecciassero nel mondo antico, rivelando la vita spirituale e sociale di una civiltà millenaria."

    ],
    [
        "id" => 3,
        "nome" => "Necropoli di Amorosi",
        "luogo" => "Campania, Italia",
        "descrizione" => "Scoperta una necropoli con 88 tombe di circa 2800 anni fa, utile per comprendere i rituali religiosi delle antiche popolazioni italiche.",
        "img" => "https://www.ottopagine.it/public/gallery/10688/big/93gv6rqhpb5jal7gal10688.jpg",
        "articolo" => "Nel cuore della Campania, a Amorosi, gli archeologi hanno portato alla luce una straordinaria necropoli risalente a circa 2.800 anni fa, rivelando aspetti fondamentali della vita e dei rituali delle antiche popolazioni italiche. Le 88 tombe scavate hanno restituito corredi funerari completi di armi, gioielli e vasi, offrendo una preziosa testimonianza dei costumi, delle credenze religiose e della vita quotidiana di queste comunità. Ogni sepoltura racconta una storia unica, mostrando come gli antichi abitanti considerassero la morte e il rispetto per i defunti. Questa scoperta non solo arricchisce la conoscenza della preistoria italiana, ma permette anche di comprendere meglio le origini di miti, tradizioni e simboli che avrebbero influenzato la cultura successiva nell’Italia antica."

    ],
    [
        "id" => 4,
        "nome" => "Pietre dei Draghi",
        "luogo" => "Armenia",
        "descrizione" => "Antiche stele chiamate Vishap, legate probabilmente a culti dell'acqua e a miti su creature simili ai draghi.",
        "img" => "https://upload.wikimedia.org/wikipedia/commons/f/f6/Vishap02.jpg",
        "articolo"=>"Tra le cime aspre e le valli remote degli altopiani dell’Armenia emergono enigmatiche stele di pietra conosciute come “pietre dei draghi” o vishapakar. Questi monoliti preistorici, scolpiti in basalto o andesite e alti fino a oltre cinque metri, sono stati eretti dai popoli antichi in luoghi legati alle fonti d’acqua naturale, come sorgenti e bacini d’alta quota. Gli studi più recenti mostrano che la loro collocazione non è casuale: le pietre seguono schemi topografici ben precisi e si trovano spesso vicino a sistemi di irrigazione o corsi d’acqua, suggerendo che fossero parte di un culto dell’acqua dedicato alla sopravvivenza e al benessere delle comunità che dipendevano dalle risorse idriche. La loro iconografia — con forme che richiamano pesci, pelle di bovini e simboli naturali — riflette l’antica connessione fra natura, mitologia e spiritualità, trasformando i vishap in custodi silenziosi di un passato nel quale l’acqua veniva venerata come dono sacro."

    ]
];
    public function article() {

    return view('article', [
        'scoperte' => $this->scoperteMitologia
    ]);

}

 public function showArticolo($id)
{
 
    $articoloSelezionato = null;

    foreach ($this->scoperteMitologia as $articolo) {
        if ($articolo['id'] == $id) {
            $articoloSelezionato = $articolo;
            break; 
        }

    }
    return view('articolo', [
        'articolo' => $articoloSelezionato
    ]);

    
}
}
