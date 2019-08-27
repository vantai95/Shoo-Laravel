<?php

namespace Tests\Unit\Http\Controllers\User;

use App\Models\AboutUs;
use App\Models\AboutUsDescription;
use App\Models\Configuration;
use database\factories\ModelFactory;
use Tests\TestCase;

class AboutUsControllerTest extends TestCase
{
    public function testIndexHasAllData() {

        # init database test
        $faker = \Faker\Factory::create();
        factory(AboutUs::class)->create([
            'is_banner' => true,
        ]);
        factory(AboutUs::class)->create([
            'image' => getenv('APP_URL').'/'.config('constants.ABOUT_US_FOLDER') . $faker->name . '.jpg',
            'is_banner' => false,
        ], 3);
        factory(AboutUsDescription::class)->create();
        factory(Configuration::class)->create([
            'config_key' => \App\Models\Configuration::CONFIG_KEYS['INDIEGOGO'],
            'config_value' => $faker->url,
            'title' => $faker->name,
        ]);

        # get data from database and send them to view
        $aboutUsBanner = AboutUs::select('image')->where('is_banner', '=', true)->first();
        $aboutUsImages = AboutUs::select('image')->where('is_banner', '=', false)->orderBy('id')->get();
        $aboutUsDescription = AboutUsDescription::select('about_us_description.*')->first();
        $indiegogoLink = Configuration::where('config_key', Configuration::CONFIG_KEYS['INDIEGOGO'])->where('is_published',
            true)->first();

        # validate data from view
        $response = $this->get('/about-us');
        $response->assertStatus(200);
        $response->assertSee($aboutUsBanner->imageUrl());
        foreach($aboutUsImages as $key => $aboutUsImage)
            $response->assertSee($aboutUsImage->imageUrl());
        $response->assertSee($aboutUsDescription->description);
        $response->assertSee($indiegogoLink->config_value);
    }
}