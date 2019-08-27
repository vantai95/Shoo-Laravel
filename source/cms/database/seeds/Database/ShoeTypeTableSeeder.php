<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ShoeTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoeTypes = [
            [
                'name_en' => 'Oxfords',
                'description_en' => '<div>The Oxford is the most basic of the formal lace-up shoes and also referred to as a “Balmoral” after Balmoral Castle. It is thought to have been named by the students at Oxford University. The signature feature of the Oxford is its closed lacing, which means the eyelets are attached directly beneath the vamp instead of on top of it.&nbsp;</div><div>Today, they’re most often encountered in boardroom settings and tend to skew formal, although they can be worn in more casual way.&nbsp;</div><div><br></div>',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_en' => 'Buckles',
                'description_en' => '<div>The Buckle or Monk strap was originally designed as a dressier and more durable alternative to sandals for European monks. They are structurally similar to a blucher, but monk straps eschew laces in favor buckles—either one or two, which make them exceptionally easy to take on and off.</div><div>The monk strap is currently the most rakish alternative to classic lace-up dress shoe styles. This shoe sits comfortably between an Oxford and a Derby in terms of formality</div><div><br></div>',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_en' => 'Derbys',
                'description_en' => '<div>The derby is known as Gibson, or blucher. The characteristic feature is its open lacing (the facing is open at the bottom), which differentiates it from the Oxford.&nbsp;</div><div>Derby shoes are possibly the most versatile of all shoe styles, bridging the gap between smart and smart casual wear with ease. Because the underlying structural components are exposed, the derby is considered less refined and therefore less formal than its stylistic counterpart. They can be teamed with a suit, jeans or chinos.</div><div><br></div>',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_en' => 'Boots',
                'description_en' => '<p>Boots come in many shapes and styles: Chukka boot, Dress boot, Chelsea boot, etc. Each of them has its own origins and features, but in general, they are more appropriate with the informal styles like smart-casual or street style.</p><p><br></p><p><br></p>',
                'index' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('shoe_types')->insert($shoeTypes);

        $shoeTypeShoeCategory = [
            [
                'shoe_category_id' => 1,
                'shoe_types_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'shoe_category_id' => 1,
                'shoe_types_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'shoe_category_id' => 1,
                'shoe_types_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'shoe_category_id' => 1,
                'shoe_types_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'shoe_category_id' => 2,
                'shoe_types_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'shoe_category_id' => 2,
                'shoe_types_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'shoe_category_id' => 2,
                'shoe_types_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'shoe_category_id' => 3,
                'shoe_types_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'shoe_category_id' => 3,
                'shoe_types_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'shoe_category_id' => 3,
                'shoe_types_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'shoe_category_id' => 4,
                'shoe_types_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'shoe_category_id' => 4,
                'shoe_types_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'shoe_category_id' => 4,
                'shoe_types_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        DB::table('shoe_types_shoe_categories')->insert($shoeTypeShoeCategory);
    }
}
