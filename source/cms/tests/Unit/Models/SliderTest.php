<?php

namespace Test\Unit;

use App\Models\Slider;
use database\factories\ModelFactory;
use Tests\TestCase;

class SliderTest extends TestCase
{
    public function testSliderUrl() {
        $slider = factory(Slider::class)->create();
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.SLIDER_DEFAULT_IMG'), $slider->sliderUrl());

        $slider->image = '1510902558.2.png';
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.SLIDER_FOLDER')
            . '/1510902558.2.png', $slider->sliderUrl());
    }

    public function testStatus() {
        $slider = factory(Slider::class)->create();
        $this->assertEquals('Show', $slider->status());

        $slider->is_published = 0;
        $this->assertEquals('Hide', $slider->status());
    }

}