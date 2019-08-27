<?php

namespace Test\Unit;

use App\Models\ProductFeature;
use App\Models\ProductFeatureDetail;
use database\factories\ModelFactory;
use Tests\TestCase;

class ProductFeatureTest extends TestCase
{
    public function testImageProductFeatureURL() {
        $productFeature = factory(ProductFeature::class)->create();
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.PRODUCT_FEATURE_DEFAULT_IMG'), $productFeature->imageProductFeatureURL());

        $productFeature->image = '1510562249.3.jpg';
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.PRODUCT_FEATURE_IMG_FOLDER')
            . '/1510562249.3.jpg', $productFeature->imageProductFeatureURL());
    }

    public function testProductFeatureDetails() {
        $productFeature = factory(ProductFeature::class)->create();
        $productFeatureDetails = factory(ProductFeatureDetail::class, 4)->create();
        foreach ($productFeatureDetails as $productFeatureDetail)
            $productFeature->productFeatureDetails()->save($productFeatureDetail);
        foreach ($productFeatureDetails as $productFeatureDetail)
            $this->assertDatabaseHas('product_feature_details', [
                'product_feature' => $productFeature->id,
                'id' => $productFeatureDetail->id,
            ]);
    }

    public function testStatus() {
        $productFeature = factory(ProductFeature::class)->create();
        $this->assertEquals('Show', $productFeature->status());

        $productFeature->is_published = 0;
        $this->assertEquals('Hide', $productFeature->status());
    }
}