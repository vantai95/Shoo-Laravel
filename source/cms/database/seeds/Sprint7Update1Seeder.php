<?php

use Illuminate\Database\Seeder;

class Sprint7Update1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $shoe_styles = DB::table('shoe_styles')->get();
        foreach ($shoe_styles as $shoe_style) {           
                $main_name_en = $shoe_style->main_name_en;          
                $sub_name_en = $shoe_style->sub_name_en;
                DB::table('shoe_styles')
                ->where('id', $shoe_style->id)
                ->update([
                    'main_name_vi' => $main_name_en,
                    'sub_name_vi' => $sub_name_en
                ]);  
        }
    }
}
