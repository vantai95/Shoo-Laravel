<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ShoeStyleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoeStyles = [
            [
                'shoe_types_id' => '1',
                'main_name_en' => 'Waterloo',
                'sub_name_en' =>'Style 1',
                'description_en' => '<div>Whole-cut medallion oxford has an upper cut from one single piece of leather. It has no stitching across the main sections of the shoe (only the back seam) and also has a medallion (decorative perforations) on the toe.</div><div>This dark brown pair can be worn with all kinds of suits, combinations or casual outfits.</div><div><br></div>',
                'sub_description_en' => 'Coming soon',
                'price' => '243',
                'discount_price' => '10'
            ],
            [
                'shoe_types_id' => '1',
                'main_name_en' => 'Erin',
                'sub_name_en' =>'Style 1',
                'description_en' => '<div>This shoe is a variation on the classic oxford, constructed of a single piece of leather. It has no stitching across the main sections of the shoe (only the back seam) while maintaining the original oxford shape and signature “closed lacing.”</div><div>A whole cut Oxford in shades of dark orange and brown is the best choice to combine with suits for balls, proms, night parties or dinners.</div><div><br></div>',
                'sub_description_en' => 'Coming soon',
                'price' => '243',
                'discount_price' => '10'
            ],
            [
                'shoe_types_id' => '1',
                'main_name_en' => 'Churchill',
                'sub_name_en' =>'Style 1',
                'description_en' => '<div>Oxford full brogues are oxfords with the wing-shaped cap extends around to the outsides of the toes. It features broguing along its edges as well as decorative broguing in the center of the toe cap, which is called Medallion.</div><div>They are considered to be more casual than the Cap Toe. In shades of brown and chocolate patina, these are great for the office in non-white collar environments, sport coat / blazer ensembles. They can look good with almost everything, from suits to jeans.</div><div><br></div>',
                'sub_description_en' => 'Coming soon',
                'price' => '243',
                'discount_price' => '10'
            ],
            [
                'shoe_types_id' => '1',
                'main_name_en' => 'Mississauga',
                'sub_name_en' =>'Style 1',
                'description_en' => '<div>Wingtip toe cap Oxford with broguing only on the edges and without Medallion (decorative perforations in the centre of the toecap) is called Oxford Blind Brogue.</div><div>They are less formal than other Oxford styles. They can look good with almost everything, from suits to jeans. It is perfect to combine it with anything related to country attire.</div><div><br></div>',
                'sub_description_en' => 'Coming soon',
                'price' => '243',
                'discount_price' => '10'
            ],
            [
                'shoe_types_id' => '2',
                'main_name_en' => 'Digby',
                'sub_name_en' =>'Style 1',
                'description_en' => '<div>It is a type of Monk strap shoes with a single-buckle closure. Single monks are more understated and timeless. It poses as an elegant alternative to the oxford.</div><div>A brown patina single monk strap with is versatile to be combined with jeans and chinos for smart-casual style or with suits in less formal events.</div><div><br></div>',
                'sub_description_en' => 'Coming soon',
                'price' => '243',
                'discount_price' => '10'
            ],
            [
                'shoe_types_id' => '2',
                'main_name_en' => 'Kentville',
                'sub_name_en' =>'Style 1',
                'description_en' => '<div>It is a combination of a Single Monk and Full Brogue. It features a single-buckle closure with the wing-shaped cap extends around to the outsides of the toes as well as decorative broguing in the center of the toe cap, which is called Medallion.</div><div>This is a more comfortable shoe which is received as a less formal version of the oxford. They can look good with almost everything, from suits to jeans for less formal style.</div><div><br></div>',
                'sub_description_en' => 'Coming soon',
                'price' => '243',
                'discount_price' => '10'
            ],
            [
                'shoe_types_id' => '2',
                'main_name_en' => 'Truro',
                'sub_name_en' =>'Style 1',
                'description_en' => '<div>It is a type of Monk strap shoes with a single-buckle closure. Single monks are more understated and timeless. It poses as an elegant alternative to the oxford.</div><div>A black single monk strap are considered relatively formal and used with a dark suit at the office.</div><div><br></div>',
                'sub_description_en' => 'Coming soon',
                'price' => '243',
                'discount_price' => '10'
            ],
            [
                'shoe_types_id' => '3',
                'main_name_en' => 'Richmond',
                'sub_name_en' =>'Style 1',
                'description_en' => '<div>It is a Derby with the wing-shaped cap extends around to the outsides of the toes.</div><div>This is a more comfortable shoe which is received as a less formal version of the oxford.&nbsp; They are perfect when combined with anything related to country attire.</div><div><br></div>',
                'sub_description_en' => 'Coming soon',
                'price' => '243',
                'discount_price' => '10'
            ],
            [
                'shoe_types_id' => '3',
                'main_name_en' => 'Langford',
                'sub_name_en' =>'Style 1',
                'description_en' => '<div>The split toe, otherwise known as the apron toe, features a seam that begins in the middle of the shoe, runs around the toe, and ends at the middle of the shoe on the other side. This toe style is more common in casual shoes.</div><div>As a smart casual option, they are perfect because they work well with a blazer, sports coat with chinos or trouser combinations.</div><div><br></div>',
                'sub_description_en' => 'Coming soon',
                'price' => '243',
                'discount_price' => '10'
            ],
            [
                'shoe_types_id' => '3',
                'main_name_en' => 'Surrey',
                'sub_name_en' =>'Style 1',
                'description_en' => '<div>This is a Derby with a horizontally stitched line across the vamp of a shoe. It is actually a separate piece stitched as the toe on the vamp.</div><div>This is a more comfortable shoe which is received as a less formal version of the oxford. In dark navy patina, they are perfect choices for night parties or fashionable street style.</div><div><br></div>',
                'sub_description_en' => 'Coming soon',
                'price' => '243',
                'discount_price' => '10'
            ],
            [
                'shoe_types_id' => '4',
                'main_name_en' => 'Calgary',
                'sub_name_en' =>'Style 1',
                'description_en' => '<div>Chelsea boots originated in Victorian England and were popularized by The Beatles and other British Invasion bands in the 1960s. They are characterized by ankle length with rounded toes and low heels. The vamp and the quarters meet near the ankle and are joined by elastic gusset. Comfortable and sleek, they can be teamed well with slim jeans and a leather jacket.</div><div><br></div>',
                'sub_description_en' => 'Coming soon',
                'price' => '243',
                'discount_price' => '10'
            ],
            [
                'shoe_types_id' => '4',
                'main_name_en' => 'Airdrie',
                'sub_name_en' =>'Style 1',
                'description_en' => '<div>The Chukka has origins in the game of polo. They were intended to be a more comfortable version of polo boots that players could wear after the game. Chukkas are ankle-length boots with two to three pairs of eyelets on each side for a lace-up closure. Chukka boots generally have a rounded toe, minimal stitching, and open lacing (similar to the derby). </div><div>These are the least formal of the shoes. They are appropriate for casual attire or a smart-casual ensemble</div><div><br></div>',
                'sub_description_en' => 'Coming soon',
                'price' => '243',
                'discount_price' => '10'
            ],
            [
                'shoe_types_id' => '4',
                'main_name_en' => 'Edmonton',
                'sub_name_en' =>'Style 1',
                'description_en' => '<div>They are really just like a combination of Derby and boots with open lacing and the wing-shaped cap extends around to the outsides of the toes as well as decorative broguing in the center of the toe cap, which is called Medallion.</div><div>Just as beautiful too, as they allow for a more casual look. In general these boots function as casual/business casual wear.</div><div><br></div>',
                'sub_description_en' => 'Coming soon',
                'price' => '243',
                'discount_price' => '10'
            ],

        ];
        DB::table('shoe_styles')->insert($shoeStyles);
    }
}
