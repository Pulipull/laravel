<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name'=>'UI-UX',
            'color'=>'blue'
        ]);
        Category::create([
            'name'=>'Machine Learning',
            'color'=>'green'
        ]);
        Category::create([
            'name'=>'Web Design',
            'color'=>'red'
        ]);
         Category::create([
            'name'=>'Data Wharehouse',
            'color'=>'yellow'
        ]);
    }
}
