<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductFeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title_en' => 'ABOUT VIRTUS',
                'description_en' => 'The finest Bespoke footwear the unique masterpiece fot your foot',
                'image' => 'h5.jpg',
                'is_published' => 1,
                'index' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title_en' => 'ABOUT VIRTUS',
                'description_en' => 'The finest Bespoke footwear the unique masterpiece fot your foot',
                'image' => 'h6.png',
                'is_published' => 1,
                'index' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title_en' => 'ABOUT VIRTUS',
                'description_en' => 'The finest Bespoke footwear the unique masterpiece fot your foot',
                'image' => 'h7.png',
                'is_published' => 1,
                'index' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title_en' => 'ABOUT VIRTUS',
                'description_en' => 'The finest Bespoke footwear the unique masterpiece fot your foot',
                'image' => 'h8.png',
                'is_published' => 1,
                'index' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('product_feature')->insert($data);

        $data = [
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '1',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '1',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '1',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '1',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '1',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '1',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '1',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '1',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '1',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '1',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '1',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '2',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '2',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '2',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '2',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '2',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '3',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '3',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '4',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '4',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '4',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => '1511405180.5.jpg',
                'product_feature' => '4',
                'title_en' => 'Zorka Men Spring/Summer Vacation',
                'slug' => 'zorka-men-springsummer-vacation-' . rand(1, 9999),
                'content_en' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Now, what better way is there to get clothing you’re sure to love than by making it yourself? Did you know that there are clubs you can join that will not only teach you how to make some spiffy duds, but will also allow you to make some friends at the same time?</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Stitch ‘n Bitch – This is an awesome group of knitters that has chapters all around the country and world! Meet up, learn new stitches, make cool things—and new friends.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Dressmakers Clubs – There’s no specific website for this type of club, but you can do a quick search and see if there is one in your city. Get together with a group of experienced seamstresses to learn to make different styles of dress with different fabrics. Soon you’ll be creating outfits you can wear with flair.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(119, 119, 119); font-family: &quot;Varela Round&quot;, sans-serif; letter-spacing: 0.5px;">Jewelry Making Clubs – Let’s not forget that no outfit is complete without accessories! Why pay a high price when you can create your own original pieces? Check out what jewelry clubs there are in your area.</p>',
                'owner' => '1',
                'views' => '0',
                'is_published' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('product_feature_details')->insert($data);
    }
}
