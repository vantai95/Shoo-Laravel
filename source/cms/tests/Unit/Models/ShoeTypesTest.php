<?php

namespace Test\Unit;

use App\Models\ShoeCategory;
use App\Models\ShoeStyles;
use App\Models\ShoeTypes;
use database\factories\ModelFactory;
use Tests\TestCase;

class ShoeTypesTest extends TestCase
{
    public function testCategories()
    {
        $shoeCategory = factory(ShoeCategory::class)->create();
        $shoeTypes = factory(ShoeTypes::class, 4)->create();
        foreach ($shoeTypes as $shoeType)
            $shoeCategory->shoeTypes()->save($shoeType);
        foreach ($shoeTypes as $shoeType)
            $this->assertDatabaseHas('shoe_types_shoe_categories', [
                'shoe_category_id' => $shoeCategory->id,
                'shoe_types_id' => $shoeType->id,
            ]);
    }

    public function testImageUrl() {
        $shoeType = factory(ShoeTypes::class)->create();
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.DEFAULT_SHOE_TYPE_IMG'), $shoeType->imageUrl());

        $shoeType->image_url = '1510978828.1.png';
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.SHOE_TYPE_FOLDER')
            . '/1510978828.1.png', $shoeType->imageUrl());
    }

    public function testShoeStyles() {
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

    public function testThumbnailUrl() {

    }

    public function testCanDelete() {
        $shoeType = factory(ShoeTypes::class)->create();
        $this->assertTrue($shoeType->canDelete());

        $shoeStyles = factory(ShoeStyles::class, 4)->create();
        foreach ($shoeStyles as $shoeStyle)
            $shoeType->shoeStyles()->save($shoeStyle);

        $this->assertFalse($shoeType->canDelete());
    }
}