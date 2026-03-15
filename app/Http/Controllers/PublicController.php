<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $mostriMitologici = [
        [
"id"=>1,
"nome"=>"Minotauro",
"mitologia"=>"Greca",
"descrizione"=>"Il Minotauro è una creatura mitologica greca, metà uomo e metà toro, feroce e imprigionata nel labirinto di Creta, simbolo di forza e terrore.",
"img"=>"https://img.freepik.com/foto-gratuito/ritratto-del-mitologico-minotauro_23-2151817256.jpg?semt=ais_rp_progressive&w=740&q=80",
"dettagli"=> "Il Minotauro era una creatura mitologica greca, nata dall’unione innaturale tra Pasifae, moglie del re Minosse di Creta, e un toro bianco inviato dal dio Poseidone. Con il corpo di un uomo e la testa di un toro, il Minotauro era feroce e indomabile, incapace di vivere tra gli uomini o di controllare la sua violenza.

Per contenerlo, il re Minosse fece costruire il leggendario labirinto, un intricato dedalo progettato dall’architetto Dedalo, così complesso da rendere impossibile trovare l’uscita. All’interno, il Minotauro viveva isolato, nutrendosi dei tributi umani inviati da Atene ogni anno secondo un crudele accordo.

Il Minotauro incarna la paura e la brutalità, ma anche la tragica solitudine di una creatura nata da una maledizione divina, intrappolata in un luogo senza speranza e destinata a scontrarsi con eroi come Teseo, che avrebbero deciso il suo destino."
],
[
"id"=>2,
"nome"=>"Medusa",
"mitologia"=>"Greca",
"descrizione"=>"Medusa, creatura mitologica greca, ha serpenti al posto dei capelli; chiunque la guardi negli occhi diventa pietra, simbolo di pericolo.",
"img"=>"https://img.freepik.com/premium-photo/medusa-gorgon-with-cascade-snakes-hair-greek-mythology-concept_831490-6214.jpg?semt=ais_hybrid&w=740&q=80",
"dettagli"=> "Medusa era una delle tre Gorgoni, figlie di Forco e Ceto, nate come creature spaventose e immortali. A differenza delle sorelle, Medusa era mortale. In origine era una bellissima donna, ma la dea Atena, offesa dal suo profano incontro con Poseidone nel tempio, la trasformò: i suoi capelli divennero serpenti e il suo sguardo poteva pietrificare chiunque lo incrociasse.

Viveva isolata, temuta da tutti, fino a quando l’eroe Perseo ricevette il compito di ucciderla. Grazie allo scudo riflettente donatogli dagli dèi, riuscì a guardare il riflesso di Medusa senza essere pietrificato e la decapitò. Dal sangue di Medusa nacquero il cavallo alato Pegaso e il gigante Crisaore.

Medusa è simbolo di potere, bellezza trasformata in terrore e tragica maledizione, una figura che incarna paura, fascino e destino inevitabile."
],
[
"id"=>3,
"nome"=>"Cerbero",
"mitologia"=>"Greca",
"descrizione"=>"Cerbero, cane mostruoso della mitologia greca, ha tre teste, guardiano degli Inferi, impedisce ai vivi di entrare e ai morti di uscire.",
"img"=>"https://img.freepik.com/foto-premium/cerbero-sul-fuoco-illustrazione-fantastica_780672-2916.jpg?semt=ais_hybrid&w=740&q=80",
"dettagli"=> "Cerbero è il leggendario cane a tre teste che custodisce l’ingresso degli Inferi, il regno di Ade nella mitologia greca. Il suo compito è impedire ai morti di fuggire e agli esseri viventi di entrare senza permesso.

Figlio di Echidna e Tifone, Cerbero era enorme, feroce e spaventoso, con artigli affilati e una coda serpentina. Nonostante la sua forza e ferocia, fu affrontato dall’eroe Eracle come una delle sue dodici fatiche: con coraggio e astuzia riuscì a catturarlo senza ucciderlo, portandolo temporaneamente sulla Terra per compiere la sua missione.

Cerbero simboleggia la guardia tra vita e morte, fedeltà estrema e la terribile barriera che separa gli umani dal mondo degli Inferi."
],
[
"id"=>4,
"nome"=>"Idra",
"mitologia"=>"Greca",
"descrizione"=>"L’Idra è un mostro mitologico greco con molte teste; tagliarne una ne fa ricrescere due, simbolo di pericolo e rigenerazione.",
"img"=>"https://steamforged.com/cdn/shop/articles/EE-5HG-HydraCover02-167630.jpg?v=1743077714",
"dettagli"=> "L’Idra di Lerna era un mostro serpentino con molte teste, figlia di Tifone ed Echidna. Viveva in una palude vicino al lago di Lerna e terrorizzava la regione con il suo alito velenoso. Ogni volta che una delle sue teste veniva tagliata, ne ricrescevano due al suo posto, rendendola praticamente invincibile.

L’eroe Eracle affrontò l’Idra come una delle sue dodici fatiche. Con l’aiuto del nipote Iolao, cauterizzò le ferite dopo aver tagliato ogni testa, impedendo che ne crescessero di nuove, e infine seppellì l’unica testa immortale sotto una grossa pietra.

L’Idra simboleggia il pericolo persistente, la sfida impossibile e la necessità di ingegno e collaborazione per sconfiggere ostacoli apparentemente invincibili."
],
[
"id"=>5,
"nome"=>"Chimera",
"mitologia"=>"Greca",
"descrizione"=>"La Chimera è un mostro mitologico greco con testa di leone, corpo di capra e coda di serpente, sputafuoco e temibile.",
"img"=>"https://www.gamerguides.com/assets/media/15/15255/chimeras_2_bestiary_ffxvi3-68dd9f6f.png",
"dettagli"=> "La Chimera era una creatura mostruosa e terribile, figlia di Tifone ed Echidna, con corpo di leone, testa di capra sul dorso e coda di serpente. Sputava fuoco e seminava distruzione nelle regioni della Licia, terrorizzando gli abitanti.

L’eroe Bellerofonte, aiutato dal cavallo alato Pegaso, riuscì a sconfiggerla scagliandole una lancia dalla distanza, evitando di avvicinarsi al suo corpo infuocato. La morte della Chimera simboleggia il trionfo dell’astuzia e del coraggio umano sulle forze caotiche e selvagge della natura."
],
[
"id"=>6,
"nome"=>"Fenice",
"mitologia"=>"Egizia",
"descrizione"=>"La Fenice è un uccello mitologico che rinasce dalle proprie ceneri, simbolo di immortalità, rinascita e cicli eterni di vita e morte.",
"img"=>"https://w0.peakpx.com/wallpaper/170/187/HD-wallpaper-phoenix-bird-art-work-immortal-bird-painting-art.jpg",
"dettagli"=> "La Fenice è un uccello leggendario famoso per il ciclo di morte e rinascita. Di straordinaria bellezza, le sue piume brillano di colori rossi, dorati e purpurei, e la sua vita dura centinaia di anni.

Quando sente avvicinarsi la fine della sua vita, la Fenice costruisce un nido di rami aromatici e si lascia avvolgere dalle fiamme, consumandosi in un incendio purificatore. Dal suo stesso fuoco rinasce un pulcino, simbolo di rinascita, immortalità e continuità.

Nella cultura mitologica, la Fenice rappresenta speranza, trasformazione e la capacità di rinascere dalle proprie difficoltà, eterna e indomabile."
],
[
"id"=>7,
"nome"=>"Kraken",
"mitologia"=>"Norrena",
"descrizione"=>"Il Kraken è un gigantesco mostro marino mitologico, simile a un calamaro o polpo, capace di affondare navi e terrorizzare i marinai.",
"img"=>"https://img.freepik.com/free-photo/gigantic-kraken-resurfacing-from-ocean_23-2151816474.jpg?semt=ais_rp_progressive&w=740&q=80",
"dettagli"=> "Il Kraken è un mostro marino leggendario, descritto come un gigantesco calamaro o polpo capace di affondare navi intere. Secondo le leggende scandinave, abitava i mari del Nord, emergendo improvvisamente dalle profondità con tentacoli enormi per trascinare marinai e vascelli nelle acque oscure.

I marinai lo temevano per la sua forza sovrumana e la capacità di creare vortici devastanti. Pur essendo una creatura del mito, il Kraken simboleggia il potere incontrollabile del mare, l’ignoto e i pericoli nascosti nelle profondità dell’oceano."
]
    ];

  public function aboutUs() {

    return view('about-us', [
        'mostri' => $this->mostriMitologici
    ]);

}
    public function showMostro($id)
{
    // Cerchiamo il mostro nell'array
    $mostroSelezionato = null;

    foreach ($this->mostriMitologici as $mostro) {
        if ($mostro['id'] == $id) {
            $mostroSelezionato = $mostro;
            break; // appena lo troviamo, usciamo dal ciclo
        }

    }
    return view('mostro', [
        'mostro' => $mostroSelezionato
    ]);

    
}
}

