<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        $games = [
            [
                'name' => 'Half-Life',
                'description' => "En les profunditats de les instal·lacions de recerca de Black Mesa, el físic teòric Gordon Freeman es troba treballant en un projecte que canviarà la història de la humanitat. Però, quan un experiment amb una substància alienígena anomenada \"Xen\" surt malament, Gordon es veu atrapat en una successió d'esdeveniments que amenaça amb alliberar forces inimaginables. Armada amb la seva icona palanca, Gordon ha de lluitar contra criatures alienígenes, militars i misteriosos agents de la companyia que amaguen secrets mortals. Amb la ciutat envoltada de caos i desolació, el joc es desenvolupa en una història de supervivència i descobriment que el converteix en un heroi inesperat. A mesura que explora els passadissos subterrànies de Black Mesa i el món alternatiu de Xen, Gordon descobreix secrets científics i misteris aliens que el porten a enfrontar-se a enemics aparentment invencibles. Amb l'ajuda de personatges com la Dra. Eli Vance i el misteriós G-Man, Gordon es troba en una lluita per la supervivència i la comprensió. \"Half-Life\" és una experiència única en el món dels videojocs, ja que ofereix una història rica i immersive sense interrupcions ni cinemàtiques. La teva intel·ligència i habilitats seran les claus per superar els reptes i revelar els misteris que envolten Black Mesa. La pregunta és, podràs escapar dels perills de les instal·lacions i evitar que el món sigui engolit per forces alienígenes desconegudes?",
                'image' => 'half-life.png',
                'category_id' => 4,
            ],
            [
                'name' => 'Grand Theft Auto: San Andreas',
                'description' => "En les caòtiques i emocionants terres de San Andreas, Carl Johnson, també conegut com a CJ, es troba al cor de l'acció. Amb la seva família i amics al barri de Grove Street, CJ s'embarca en una aventura èpica de crims, traïcions i supervivència. Els carrers de Los Santos estan plenes de tràfic, vianants i oportunitats il·legals. CJ no només ha de lluitar contra les altres bandes i les forces de l'ordre, sinó que també ha de manejar els negocis de la seva família. La vida a San Andreas és una barreja de carreres de cotxes il·legals, robatoris a bancs, i lluites de pandilles a l'abandonada fàbrica d'armes de Big Smoke. A mesura que CJ es converteix en una llegenda urbana, haurà de prendre decisions crucials que afectaran el futur de San Andreas. Pot triar mantenir la seva lleialtat a Grove Street o abraçar l'ambició i la decadència de les altres bandes. El destí de San Andreas està a les seves mans, i l'horitzó de la criminalitat mai ha estat tan emocionant i imprevisible. Amb cotxes de carreres, armes de foc, i una gran llibertat d'exploració, \"GTA: San Andreas\" et submergirà en un món de caos i aventures sense fi. La pregunta és, com manejaràs aquesta terra de delictes i oportunitats?",
                'image' => 'gta-san-andreas.jpg',
                'category_id' => 4,
            ],
            [
                'name' => 'Red Dead Redemption 2',
                'image' => 'red-dead-redemption-2.png',
                'category_id' => 4,
            ],
            [
                'name' => 'Escacs',
                'category_id' => 5,
            ],
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}
