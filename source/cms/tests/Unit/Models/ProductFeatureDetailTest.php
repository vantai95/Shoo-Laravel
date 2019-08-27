<?php

namespace Test\Unit;

use App\Models\ProductFeature;
use App\Models\ProductFeatureDetail;
use App\Models\User;
use database\factories\ModelFactory;
use Tests\TestCase;

class ProductFeatureDetailTest extends TestCase
{
    public function testStatus() {
        $productFeatureDetail = factory(ProductFeatureDetail::class)->create();
        $this->assertEquals('Published', $productFeatureDetail->status());

        $productFeatureDetail->is_published = 0;
        $this->assertEquals('Unpublished', $productFeatureDetail->status());
    }

    public function testAuthor() {
        $productFeatureDetails = factory(ProductFeatureDetail::class, 4)->create();
        $user = factory(User::class)->create();
        foreach ($productFeatureDetails as $productFeatureDetail) {
            $productFeatureDetail->owner = $user->id;
            $productFeatureDetail->save();
        }
        foreach ($productFeatureDetails as $productFeatureDetail)
            $this->assertDatabaseHas('product_feature_details', [
                'owner' => $user->id,
                'id' => $productFeatureDetail->id,
            ]);
    }

    public function testProductFeature() {
        $productFeatureDetails = factory(ProductFeatureDetail::class, 4)->create();
        $productFeature = factory(ProductFeature::class)->create();
        foreach ($productFeatureDetails as $productFeatureDetail)
            $productFeature->productFeatureDetails()->save($productFeatureDetail);
        foreach ($productFeatureDetails as $productFeatureDetail)
            $this->assertDatabaseHas('product_feature_details', [
                'product_feature' => $productFeature->id,
                'id' => $productFeatureDetail->id,
            ]);
    }

    public function testImageUrl() {
        $productFeatureDetails = factory(ProductFeatureDetail::class)->create();
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.PRODUCT_FEATURE_DETAILS_DEFAULT_IMG'), $productFeatureDetails->imageUrl());

        $productFeatureDetails->image = '1515313839.6.jpg';
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.PRODUCT_FEATURE_DETAILS_IMG_FOLDER')
            . '/1515313839.6.jpg', $productFeatureDetails->imageUrl());
    }
}