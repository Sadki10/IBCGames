<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Esports', 'icon' => 'futbol'],
            ['name' => 'Carreres', 'icon' => 'flag-checkered'],
            ['name' => 'Pintar', 'icon' => 'palette'],
            ['name' => 'Shooter', 'icon' => 'person-rifle'],
            ['name' => 'Jocs de taula', 'icon' => 'chess'],
            ['name' => 'Rogue-Like', 'icon' => 'dungeon'],
            ['name' => 'Estrategia', 'icon' => 'fort-awesome'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
