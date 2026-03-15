<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class AboutUsController extends Controller
{
   
    public $mostriMitologici = [
[
"id"=>1,
"nome"=>"Minotauro",
"mitologia"=>"Greca",
"descrizione"=>"Il Minotauro è una creatura mitologica greca, metà uomo e metà toro, feroce e imprigionata nel labirinto di Creta, simbolo di forza e terrore.",
"img"=>"https://img.freepik.com/foto-gratuito/ritratto-del-mitologico-minotauro_23-2151817256.jpg?semt=ais_rp_progressive&w=740&q=80",
"dettagli"=> ""
],
[
"id"=>2,
"nome"=>"Medusa",
"mitologia"=>"Greca",
"descrizione"=>"Medusa, creatura mitologica greca, ha serpenti al posto dei capelli; chiunque la guardi negli occhi diventa pietra, simbolo di pericolo.",
"img"=>"https://img.freepik.com/premium-photo/medusa-gorgon-with-cascade-snakes-hair-greek-mythology-concept_831490-6214.jpg?semt=ais_hybrid&w=740&q=80",
"dettagli"=> ""
],
[
"id"=>3,
"nome"=>"Cerbero",
"mitologia"=>"Greca",
"descrizione"=>"Cerbero, cane mostruoso della mitologia greca, ha tre teste, guardiano degli Inferi, impedisce ai vivi di entrare e ai morti di uscire.",
"img"=>"https://img.freepik.com/foto-premium/cerbero-sul-fuoco-illustrazione-fantastica_780672-2916.jpg?semt=ais_hybrid&w=740&q=80",
"dettagli"=> ""
],
[
"id"=>4,
"nome"=>"Idra",
"mitologia"=>"Greca",
"descrizione"=>"L’Idra è un mostro mitologico greco con molte teste; tagliarne una ne fa ricrescere due, simbolo di pericolo e rigenerazione.",
"img"=>"https://steamforged.com/cdn/shop/articles/EE-5HG-HydraCover02-167630.jpg?v=1743077714",
"dettagli"=> ""
],
[
"id"=>5,
"nome"=>"Chimera",
"mitologia"=>"Greca",
"descrizione"=>"La Chimera è un mostro mitologico greco con testa di leone, corpo di capra e coda di serpente, sputafuoco e temibile.",
"img"=>"https://www.gamerguides.com/assets/media/15/15255/chimeras_2_bestiary_ffxvi3-68dd9f6f.png",
"dettagli"=> ""
],
[
"id"=>6,
"nome"=>"Fenice",
"mitologia"=>"Egizia",
"descrizione"=>"La Fenice è un uccello mitologico che rinasce dalle proprie ceneri, simbolo di immortalità, rinascita e cicli eterni di vita e morte.",
"img"=>"https://w0.peakpx.com/wallpaper/170/187/HD-wallpaper-phoenix-bird-art-work-immortal-bird-painting-art.jpg",
"dettagli"=> ""
],
[
"id"=>7,
"nome"=>"Kraken",
"mitologia"=>"Norrena",
"descrizione"=>"Il Kraken è un gigantesco mostro marino mitologico, simile a un calamaro o polpo, capace di affondare navi e terrorizzare i marinai.",
"img"=>"https://img.freepik.com/free-photo/gigantic-kraken-resurfacing-from-ocean_23-2151816474.jpg?semt=ais_rp_progressive&w=740&q=80",
"dettagli"=> ""
]
];

    public function aboutUs()
    {
        return view('about-us', ['mostri' => $this->mostriMitologici]);
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

    
}
}