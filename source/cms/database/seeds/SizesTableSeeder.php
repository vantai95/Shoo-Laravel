<?php

use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = [
            [
        		'value' => '39',
        		'type' => '1'
        	],
            [
        		'value' => '40',
        		'type' => '1'
        	],
            [
        		'value' => '41',
        		'type' => '1'
        	],
            [
        		'value' => '42',
        		'type' => '1'
        	],
            [
        		'value' => '43',
        		'type' => '1'
        	],
            [
        		'value' => '44',
        		'type' => '1'
        	],
            [
        		'value' => '45',
        		'type' => '1'
        	],
            [
        		'value' => '46',
        		'type' => '1'
        	],
            [
        		'value' => '47',
        		'type' => '1'
        	],
            [
        		'value' => '48',
        		'type' => '1'
        	],
            [
        		'value' => '49',
        		'type' => '1'
        	],
        ];
        DB::table('sizes')->insert($sizes);
    }
}
