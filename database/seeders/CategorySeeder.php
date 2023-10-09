<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'Makanan', 'Minuman', 'Snack'
        ];

        $createdCategories = [];

        foreach ($data1 as $name) {
            $category = Category::create([
                'name' => $name,
                'slug' => Str::slug(strtolower($name)),
            ]);

            $createdCategories[] = $category;
        }
    }
}
