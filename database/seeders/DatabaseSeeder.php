<?php

namespace Database\Seeders;

use App\Models\Head_category;
use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $path = storage_path() . "/JSON/";
        $shops = json_decode(file_get_contents($path . 'shops.json'), true);

        foreach ($shops as $shop) {
            $shopEntity = new Shop();
            $shopEntity->name = $shop['name'];
            $shopEntity->url = $shop['url'];
            $shopEntity->save();
        };

        $head_categories = json_decode(file_get_contents($path . 'head_categories.json'), true);

        foreach ($head_categories as $category) {
            $categoryEntity = new Head_category();
            $categoryEntity->name = $category['name'];
            $categoryEntity->pathname = $category['pathname'];
            $categoryEntity->save();
        };
    }
}
