<?php

use Illuminate\Database\Seeder;

class Sprint6Update2Seeder extends Seeder
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
            if(!empty($shoe_style->image_url)){
                $arrImg = [];
                array_push($arrImg,$shoe_style->image_url);
                array_push($arrImg,$shoe_style->image_url);
                array_push($arrImg,$shoe_style->image_url);
                array_push($arrImg,$shoe_style->image_url);
                $data = json_encode($arrImg);
                DB::table('shoe_styles')
                ->where('id', $shoe_style->id)
                ->update([
                    'images' => $data
                ]);
            }
           
        }
        
    }
}
