<?php

namespace Test\Unit;

use App\Models\HomeHowItWork;
use database\factories\ModelFactory;
use Tests\TestCase;

class HomeHowItWorkTest extends TestCase
{
    public function testStatus()
    {
        $homeHowItWork = factory(HomeHowItWork::class)->create();
        $this->assertEquals('Published', $homeHowItWork->status());

        $homeHowItWork->is_published = false;
        $this->assertEquals('Unpublished', $homeHowItWork->status());
    }

    public function testImageUrl(){
        $homeHowItWork = factory(HomeHowItWork::class)->create();
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.HOME_HOW_IT_WORK_DEFAULT_IMG'), $homeHowItWork->imageUrl());

        $homeHowItWork->image_url = '1514808713.2.png';
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.HOME_HOW_IT_WORK_FOLDER')
            . '/1514808713.2.png', $homeHowItWork->imageUrl());
    }
}