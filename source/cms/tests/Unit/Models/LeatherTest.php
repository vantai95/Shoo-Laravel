<?php

namespace Test\Unit;

use App\Models\Leather;
use App\Models\ShoeCategory;
use database\factories\ModelFactory;
use Tests\TestCase;

class LeatherTest extends TestCase
{
    public function testCategories()
    {
        $leather = factory(Leather::class)->create();
        $shoe_categories = factory(ShoeCategory::class, 4)->create();
        foreach ($shoe_categories as $shoe_category)
            $leather->categories()->save($shoe_category);
        foreach ($shoe_categories as $shoe_category)
        $this->assertDatabaseHas('leather_shoe_categories', [
            'leather_id' => $leather->id,
            'shoe_category_id' => $shoe_category->id,
        ]);
    }

    public function testImageUrl()
    {
        $leather = factory(Leather::class)->create();
        $this->assertEquals(getenv('APP_URL') . '/images/leather.png', $leather->picture);

        $leather->picture = 'test.jpg';

        $this->assertEquals(getenv('APP_URL') . '/' . config('constants.LEATHER_FOLDER') . '/test.jpg', $leather->imageUrl());
    }

    public function testThumbnailUrl()
    {
        $leather = factory(Leather::class)->create();
        $this->assertEquals(getenv('APP_URL') . '/images/leather.png', $leather->picture);
    }
}