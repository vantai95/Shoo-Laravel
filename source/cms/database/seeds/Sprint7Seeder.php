<?php

use Illuminate\Database\Seeder;

class Sprint7Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        $pages = DB::table('pages')->get();
        foreach ($pages as $page) {           
                $slug = $page->page_name_en;
                DB::table('pages')
                ->where('id', $page->id)
                ->update([
                    'slug' => $slug
                ]);  
        }
        DB::table('pages')
        ->where('page_name_en', 'DELIVERY_INFORMATION')
        ->update([
            'page_name_vi' => 'THÔNG_TIN_GIAO_HÀNG'
        ]);  

        DB::table('pages')
        ->where('page_name_en', 'TERM_AND_CONDITION')
        ->update([
            'page_name_vi' => 'ĐIỀU_KHOẢN_VÀ_ĐIỀU_KIỆN'
        ]);  

        DB::table('pages')
        ->where('page_name_en', 'PRIVACY_POLICY')
        ->update([
            'page_name_vi' => 'CHÍNH_SÁCH_BẢO_MẬT'
        ]);  
    }
}
