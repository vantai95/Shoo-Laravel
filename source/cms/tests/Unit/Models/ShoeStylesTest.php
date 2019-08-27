<?php

namespace Test\Unit;

use App\Models\Leather;
use App\Models\OutsoleTypes;
use App\Models\ProductPackage;
use App\Models\ShoeCategory;
use App\Models\ShoeStyles;
use App\Models\ShoeTypes;
use App\Models\ToeShape;
use App\Models\User;
use database\factories\ModelFactory;
use Tests\TestCase;

class ShoeStylesTest extends TestCase
{
    public function testShoeTypes() {
        $shoeType = factory(ShoeTypes::class)->create();
        $shoeStyles = factory(ShoeStyles::class, 4)->create();
        foreach ($shoeStyles as $shoeStyle)
            $shoeType->shoeStyles()->save($shoeStyle);
        foreach ($shoeStyles as $shoeStyle)
            $this->assertDatabaseHas('shoe_styles', [
                'shoe_types_id' => $shoeType->id,
                'id' => $shoeStyle->id,
            ]);
    }

    public function testImageUrl() {
        $shoeStyle = factory(ShoeStyles::class)->create();
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.DEFAULT_SHOE_STYLE_IMG'), $shoeStyle->imageUrl());

        $shoeStyle->image_url = '1512008080.14.jpg';
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.SHOE_STYLES_FOLDER')
            . '/1512008080.14.jpg', $shoeStyle->imageUrl());
    }

    public function testThumbnailUrl() {

    }
}