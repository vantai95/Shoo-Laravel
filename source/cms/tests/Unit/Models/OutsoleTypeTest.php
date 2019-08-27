<?php

namespace Test\Unit;

use App\Models\OutsoleTypes;
use App\Models\ShoeCategory;
use database\factories\ModelFactory;
use Tests\TestCase;

class OutsoleTypeTest extends TestCase
{
    public function testCategories()
    {
        $outsoleType = factory(OutsoleTypes::class)->create();
        $shoe_categories = factory(ShoeCategory::class, 4)->create();
        foreach ($shoe_categories as $shoe_category)
            $outsoleType->categories()->save($shoe_category);
        foreach ($shoe_categories as $shoe_category)
        $this->assertDatabaseHas('outsole_types_shoe_categories', [
            'outsole_type_id' => $outsoleType->id,
            'shoe_category_id' => $shoe_category->id,
        ]);
    }

    public function testImageUrl()
    {
        $outsoleType = factory(OutsoleTypes::class)->create();
        $this->assertEquals(getenv('APP_URL') . '/images/outsole_type.jpg', $outsoleType->picture);

        $outsoleType->picture = '1511495584.2.png';

        $this->assertEquals(getenv('APP_URL') . '/' . config('constants.OUTSOLE_TYPE_FOLDER') . '/1511495584.2.png', $outsoleType->imageUrl());
    }

    public function testThumbnailUrl()
    {
        $outsoleType = factory(OutsoleTypes::class)->create();
        $this->assertEquals(getenv('APP_URL') . '/images/outsole_type.jpg', $outsoleType->picture);
    }
}