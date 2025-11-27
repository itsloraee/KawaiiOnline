<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class KawaiiSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // -------------------------
            // 🌸 PLUSHIES — Catégorie 1
            // -------------------------
            [
                'name' => 'Peluche Ourson Miel',
                'description' => 'Un adorable ourson en peluche avec un petit pot de miel, parfait pour les câlins',
                'price' => 24.99,
                'category_id' => 1,
            ],
            [
                'name' => 'Lapin Rose Coton',
                'description' => 'Lapin doux et moelleux aux longues oreilles, idéal pour décorer une chambre',
                'price' => 19.99,
                'category_id' => 1,
            ],
            [
                'name' => 'Chaton Roux Sommeil',
                'description' => 'Chaton endormi avec pyjama étoilé, ultra doux au toucher',
                'price' => 22.50,
                'category_id' => 1,
            ],
            [
                'name' => 'Dragon Arc-en-Ciel',
                'description' => 'Dragon fantastique aux couleurs vives, ami magique pour les rêveurs',
                'price' => 29.99,
                'category_id' => 1,
            ],
            [
                'name' => 'Panda Bambou',
                'description' => 'Panda mignon tenant une pousse de bambou, peluche éco-responsable',
                'price' => 26.75,
                'category_id' => 1,
            ],
            [
                'name' => 'Licorne Nuage',
                'description' => 'Licorne aérienne avec crinière arc-en-ciel et corne scintillante',
                'price' => 27.99,
                'category_id' => 1,
            ],
            [
                'name' => 'Hamster Cupcake',
                'description' => 'Hamster déguisé en cupcake, aussi mignon que délicieux',
                'price' => 18.50,
                'category_id' => 1,
            ],
            [
                'name' => 'Phoque Polaire Neige',
                'description' => 'Phoque des neiges avec écharpe tricotée, peluche hivernale adorables',
                'price' => 23.25,
                'category_id' => 1,
            ],
            [
                'name' => 'Renard Nuit Étoilée',
                'description' => 'Renard mystérieux avec pelage étoilé, compagnon des nuits douces',
                'price' => 25.99,
                'category_id' => 1,
            ],
            [
                'name' => 'Mouton Douceur',
                'description' => 'Mouton ultra moelleux avec clochette, peluche apaisante pour tous les âges',
                'price' => 21.99,
                'category_id' => 1,
            ],

            // -----------------------------------
            // 🍡 ARTICLES KAWAII — Catégorie 2
            // -----------------------------------
            [
                'name' => 'Mug Chat Doré',
                'description' => 'Mug céramique avec anse en forme de queue de chat et motifs kawaï',
                'price' => 15.99,
                'category_id' => 2,
            ],
            [
                'name' => 'Coffret Sushi Miniature',
                'description' => 'Collection de sushis en plastique adorable pour décoration ou jeu',
                'price' => 12.50,
                'category_id' => 2,
            ],
            [
                'name' => 'Porte-clés Panda Astronaute',
                'description' => 'Petit panda dans une combinaison spatiale, accessoire mignon pour vos clés',
                'price' => 8.99,
                'category_id' => 2,
            ],
            [
                'name' => 'Bougie Parfum Fraise',
                'description' => 'Bougie en forme de fraise avec parfum fruité, crée une ambiance douce',
                'price' => 14.75,
                'category_id' => 2,
            ],
            [
                'name' => 'Set Baguettes Hello Kitty',
                'description' => 'Baguettes de cuisine avec tête Hello Kitty, pour cuisiner en style kawaï',
                'price' => 11.99,
                'category_id' => 2,
            ],
            [
                'name' => 'Tasse à Thé Cérémonie',
                'description' => 'Tasse traditionnelle japonaise avec motifs kawaï modernes',
                'price' => 18.25,
                'category_id' => 2,
            ],
            [
                'name' => 'Figurine Collection Lapin',
                'description' => 'Figurine détaillée d\'un lapin dans différents costumes saisonniers',
                'price' => 9.99,
                'category_id' => 2,
            ],
            [
                'name' => 'Boîte à Secret Forêt',
                'description' => 'Petite boîte de rangement avec motif forêt enchantée et fermeture magnétique',
                'price' => 16.50,
                'category_id' => 2,
            ],
            [
                'name' => 'Réveil Nuage Lumineux',
                'description' => 'Réveil projetant l\'heure au plafond avec des étoiles et un design nuage',
                'price' => 32.99,
                'category_id' => 2,
            ],
            [
                'name' => 'Set Cuillères Mesure Animaux',
                'description' => 'Cuillères à mesurer en forme d\'animaux mignons pour pâtisserie créative',
                'price' => 13.75,
                'category_id' => 2,
            ],

            // -----------------------------------
            // ✏️ PAPETERIE — Catégorie 3
            // -----------------------------------
            [
                'name' => 'Carnet Journal Fleuri',
                'description' => 'Carnet de notes avec couverture fleurie et pages lignées parfumées',
                'price' => 12.99,
                'category_id' => 3,
            ],
            [
                'name' => 'Stickers Collection Kawaï',
                'description' => 'Lot de 50 stickers originaux avec animaux mignons et motifs japonais',
                'price' => 6.99,
                'category_id' => 3,
            ],
            [
                'name' => 'Set Enveloppes Pastel',
                'description' => '10 enveloppes de couleur pastel avec motifs kawaï discrets',
                'price' => 8.50,
                'category_id' => 3,
            ],
            [
                'name' => 'Marque-pages Chat Suspendu',
                'description' => 'Marque-page avec petit chat suspendu et perles colorées',
                'price' => 4.99,
                'category_id' => 3,
            ],
            [
                'name' => 'Agenda Semainier Licorne',
                'description' => 'Agenda 2024 avec couverture licorne et pages illustrées chaque mois',
                'price' => 19.99,
                'category_id' => 3,
            ],
            [
                'name' => 'Set Cartes Postales Tokyo',
                'description' => '12 cartes postales illustrant des scènes kawaï de Tokyo',
                'price' => 11.25,
                'category_id' => 3,
            ],
            [
                'name' => 'Feutres Calligraphie Pastel',
                'description' => 'Pack de 10 feutres à pointe brush pour lettrage créatif couleurs douces',
                'price' => 15.50,
                'category_id' => 3,
            ],
            [
                'name' => 'Tampons Encreurs Animaux',
                'description' => 'Set de 6 tampons avec animaux kawaï et encreur multicolore',
                'price' => 13.99,
                'category_id' => 3,
            ],
            [
                'name' => 'Papier à Lettres Parfumé',
                'description' => 'Bloc de papier à lettres parfumé fraise avec bordures décoratives',
                'price' => 7.75,
                'category_id' => 3,
            ],
            [
                'name' => 'Pochettes Cadeaux Animaux',
                'description' => 'Lot de 5 pochettes cadeaux avec motifs animaux adorables',
                'price' => 9.25,
                'category_id' => 3,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
