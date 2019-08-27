<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HowItWorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $homeHowItWorks = [
//            [
//                'title' => 'ABOUT HANDMADE SHOP',
//                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lectus mauris. Fusce ultrices in orci ac rhoncus. Duis dictum tempus neque, eu bibendum nibh viverra quis. Etiam sagittis ullamcorper volutpat. Vestibulum lacinia risus sed ligula malesuada volutpat. Quisque molestie condimentum purus at rhoncus. Donec faucibus condimentum erat, ut varius orci ultricies vitae. Nam viverra diam diam, at egestas tellus interdum condimentum. Etiam laoreet sem eget eros rhoncus Quisque elementum nibh at dolor pellentesque, a eleifend libero pharetra. Mauris neque felis.',
//                'image' => '1510303316.1.png',
//                'is_published' => 1,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ],
//            [
//                'title' => 'ABOUT HANDMADE SHOP',
//                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lectus mauris. Fusce ultrices in orci ac rhoncus. Duis dictum tempus neque, eu bibendum nibh viverra quis. Etiam sagittis ullamcorper volutpat. Vestibulum lacinia risus sed ligula malesuada volutpat. Quisque molestie condimentum purus at rhoncus. Donec faucibus condimentum erat, ut varius orci ultricies vitae. Nam viverra diam diam, at egestas tellus interdum condimentum. Etiam laoreet sem eget eros rhoncus Quisque elementum nibh at dolor pellentesque, a eleifend libero pharetra. Mauris neque felis.',
//                'image' => '1510303316.1.png',
//                'is_published' => 1,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ],
//            [
//                'title' => 'ABOUT HANDMADE SHOP',
//                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lectus mauris. Fusce ultrices in orci ac rhoncus. Duis dictum tempus neque, eu bibendum nibh viverra quis. Etiam sagittis ullamcorper volutpat. Vestibulum lacinia risus sed ligula malesuada volutpat. Quisque molestie condimentum purus at rhoncus. Donec faucibus condimentum erat, ut varius orci ultricies vitae. Nam viverra diam diam, at egestas tellus interdum condimentum. Etiam laoreet sem eget eros rhoncus Quisque elementum nibh at dolor pellentesque, a eleifend libero pharetra. Mauris neque felis.',
//                'image' => '1510303316.1.png',
//                'is_published' => 1,
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now()
//            ],
            [
                'title_en' => 'CLEAN DESIGN',
                'description_en' => 'Fusce ac odio odio. Cum sociis natoque penatibus et magnis dis parturie.',
                'image_url' => '1510305770.4.PNG',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title_en' => 'LOADED WITH POWER',
                'description_en' => 'Fusce ac odio odio. Cum sociis natoque penatibus et magnis dis parturie.',
                'image_url' => '1510305770.4.PNG',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title_en' => 'COMPLETELY CUSTOMIZABLE',
                'description_en' => 'Fusce ac odio odio. Cum sociis natoque penatibus et magnis dis parturie.',
                'image_url' => '1510305770.4.PNG',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('home_how_it_works')->insert($homeHowItWorks);
    }
}
