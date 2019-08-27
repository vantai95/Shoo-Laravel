<?php

namespace Test\Unit;

use App\Models\AboutUs;
use database\factories\ModelFactory;
use Tests\TestCase;

class AboutUsTest extends TestCase
{
    public function testImageUrl(){
        $aboutUs = factory(AboutUs::class)->create();
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.ABOUT_US_DEFAULT_IMG'), $aboutUs->imageUrl());

        $aboutUs->image = '1514809337.1.jpg';
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.ABOUT_US_FOLDER')
            . '/1514809337.1.jpg', $aboutUs->imageUrl());
    }
}