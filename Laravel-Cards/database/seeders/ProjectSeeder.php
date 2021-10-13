<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'image' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg',
                'name' => 'Wilderman_Adams',
                'subtitle' => 'Focused content-based',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolorem, fugiat quis accusantium. Obcaecati, accusantium inventore distinctio.',
                'url' => 'https://www.google.com/'
            ],

            [
                'image' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg',
                'name' => 'Kuhn-Savayn',
                'subtitle' => 'Focused content-based',
                'description' => 'Obcaecati dolorem, fugiat quis accusantium inventore distinctio tenetur. Obcaecati dolorem, distinctio.',
                'url' => 'https://www.google.com/'
            ],

            [
                'image' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg',
                'name' => 'Pagac-Feney',
                'subtitle' => 'Focused content-based',
                'description' => 'Obcaecati dolorem, fugiat quis accusantium inventore distinctio tenetur nostrum labore. Obcaecati dolorem, accusantium inventore distinctio.',
                'url' => 'https://www.google.com/'
            ],

            [
                'image' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg',
                'name' => 'Gutman Ltd',
                'subtitle' => 'Focused content-based',
                'description' => 'Lorem ipsum dolor sit amet consectetur elit. Obcaecati dolorem, inventore distinctio tenetur nostrum labore. Obcaecati dolorem, accusantium inventore distinctio.',
                'url' => 'https://www.google.com/'
            ],

            [
                'image' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg',
                'name' => 'Wilderman_Adams',
                'subtitle' => 'Focused content-based',
                'description' => 'Consectetur adipisicing elit. Obcaecati dolorem, fugiat quis accusantium inventore nostrum labore. Obcaecati dolorem.',
                'url' => 'https://www.google.com/'
            ],

            [
                'image' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg',
                'name' => 'Pagac-Feney',
                'subtitle' => 'Focused content-based',
                'description' => 'Dolor sit amet consectetur adipisicing elit. Obcaecati dolorem, fugiat quis accusantium inventore.',
                'url' => 'https://www.google.com/'
            ],

            [
                'image' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg',
                'name' => 'Wilderman_Adams',
                'subtitle' => 'Focused content-based',
                'description' => 'Lorem ipsum dolor sit amet consectetur, fugiat quis accusantium inventore distinctio tenetur nostrum labore. Obcaecati dolorem, accusantium inventore distinctio.',
                'url' => 'https://www.google.com/'
            ],

            [
                'image' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg',
                'name' => 'Pagac-Feney',
                'subtitle' => 'Focused content-based',
                'description' => 'Consectetur adipisicing elit. Obcaecati dolorem, fugiat inventore distinctio tenetur nostrum labore. Obcaecati dolorem, accusantium.',
                'url' => 'https://www.google.com/'
            ],

            [
                'image' => 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg',
                'name' => 'Gutman Ltd',
                'subtitle' => 'Focused content-based',
                'description' => 'Consectetur adipisicing elit. Obcaecati dolorem, nostrum labore. Obcaecati dolorem, accusantium.',
                'url' => 'https://www.google.com/'
            ]
        ]);
    }
}
