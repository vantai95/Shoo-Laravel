<?php

use Illuminate\Database\Seeder;

class Sprint9Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $currencies = [
        	[
        		'code' => 'USD',
                'exchange_rate' => 1
            ],
            [
        		'code' => 'VNĐ',
        		'exchange_rate' => 23000
        	]
        ];
        DB::table('currencies')->insert($currencies);
    }
}
