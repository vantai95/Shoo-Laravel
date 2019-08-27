<?php

namespace Test\Unit;

use App\Models\ToeShape;
use App\Models\ShoeCategory;
use database\factories\ModelFactory;
use Tests\TestCase;

class ToeShapeTest extends TestCase
{
    public function testCategories()
    {
        $toeShape = factory(ToeShape::class)->create();
        $shoe_categories = factory(ShoeCategory::class, 4)->create();
        foreach ($shoe_categories as $shoe_category)
            $toeShape->categories()->save($shoe_category);
        foreach ($shoe_categories as $shoe_category)
        $this->assertDatabaseHas('toe_shapes_shoe_categories', [
            'toe_shape_id' => $toeShape->id,
            'shoe_category_id' => $shoe_category->id,
        ]);
    }

    public function testImageUrl()
    {
        $toeShape = factory(ToeShape::class)->create();
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.TOE_SHAPE_DEFAULT_IMG'), $toeShape->imageUrl());

        $toeShape->picture = 'test.png';
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.TOE_SHAPE_FOLDER')
            . '/test.png', $toeShape->imageUrl());
    }

    public function testThumbnailUrl()
    {

    }
}