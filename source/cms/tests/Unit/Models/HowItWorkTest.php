<?php

namespace Test\Unit;

use App\Models\HowItWork;
use database\factories\ModelFactory;
use Tests\TestCase;

class HowItWorkTest extends TestCase
{
    public function testStatus()
    {
        $howItWork = factory(HowItWork::class)->create();
        $this->assertEquals('Published', $howItWork->status());

        $howItWork->is_published = false;
        $this->assertEquals('Unpublished', $howItWork->status());
    }

    public function testImageUrl(){
        $howItWork = factory(HowItWork::class)->create();
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.HOW_IT_WORK_DEFAULT_IMG'), $howItWork->imageUrl());

        $howItWork->image = '1512036708.2.jpg';
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.HOW_IT_WORK_FOLDER')
            . '/1512036708.2.jpg', $howItWork->imageUrl());
    }
}