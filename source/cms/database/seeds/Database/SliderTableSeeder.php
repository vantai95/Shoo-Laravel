<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoesTypes = [
            [
                'title_en' => 'Custom Fit Footwear in Minutes',
                'description_en' => 'The most comfortable footwear that\'s custom made to you – using only a smartphone',
                'image' => 'banner.png',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title_en' => 'Custom Fit Footwear in Minutes',
                'description_en' => 'The most comfortable footwear that\'s custom made to you – using only a smartphone',
                'image' => 'banner.png',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title_en' => 'Custom Fit Footwear in Minutes',
                'description_en' => 'The most comfortable footwear that\'s custom made to you – using only a smartphone',
                'image' => 'banner.png',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('slider')->insert($shoesTypes);
    }
}
