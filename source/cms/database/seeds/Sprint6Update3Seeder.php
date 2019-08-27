<?php

use Illuminate\Database\Seeder;

class Sprint6Update3Seeder extends Seeder
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
                $slug = str_slug($shoe_style->sub_name_en, '-') . "-$shoe_style->id";
                DB::table('shoe_styles')
                ->where('id', $shoe_style->id)
                ->update([
                    'slug' => $slug
                ]);
           
           
        }

        $shoe_types = DB::table('shoe_types')->get();
        foreach ($shoe_types as $shoe_type) {           
                $slug = str_slug($shoe_type->name_en, '-');
                DB::table('shoe_types')
                ->where('id', $shoe_type->id)
                ->update([
                    'slug' => $slug
                ]);
           
           
        }

    }
}
