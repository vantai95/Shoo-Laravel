<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'page_name' => \App\Models\Page::CONSTANTS['INDIEGOGO'],
                'video' => '',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('pages')->insert($pages);

        $metas = [
            [
                'page_id' => 1,
                'key' => \App\Models\PageMeta::CONSTANTS['TITLE'],
                'value' => 'Indiegogo Page',
                'available' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page_id' => 1,
                'key' => \App\Models\PageMeta::CONSTANTS['VIDEO'],
                'value' => 'https://www.youtube.com/embed/NvsnYfLIcBA',
                'available' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('pages_meta')->insert($metas);
    }
}
