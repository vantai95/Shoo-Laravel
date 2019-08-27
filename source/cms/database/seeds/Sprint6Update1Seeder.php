<?php

use Illuminate\Database\Seeder;

class Sprint6Update1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $shoe_sizes = [
        	[
        		'value' => '0',
        		'type' => '1'
        	],
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
        ];
        DB::table('shoe_sizes')->insert($shoe_sizes);
    }
}
