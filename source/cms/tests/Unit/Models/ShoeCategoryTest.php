<?php

namespace Test\Unit;

use App\Models\Leather;
use App\Models\OutsoleTypes;
use App\Models\ProductPackage;
use App\Models\ShoeCategory;
use App\Models\ShoeStyles;
use App\Models\ShoeTypes;
use App\Models\ToeShape;
use database\factories\ModelFactory;
use Tests\TestCase;

class ShoeCategoryTest extends TestCase
{
    public function testPackages()
    {
        $shoeCategory = factory(ShoeCategory::class)->create();
        $productPackages = factory(ProductPackage::class, 4)->create();
        foreach ($productPackages as $productPackage)
            $shoeCategory->packages()->save($productPackage);
        foreach ($productPackages as $productPackage)
            $this->assertDatabaseHas('product_packages', [
                'shoe_category_id' => $shoeCategory->id,
                'id' => $productPackage->id,
            ]);
    }

    public function testShoeTypes() {
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

    public function testShoeStyles() {
        $shoeCategory = factory(ShoeCategory::class)->create();
        $shoeStyles = factory(ShoeStyles::class, 4)->create();
        foreach ($shoeStyles as $shoeStyle)
            $shoeCategory->shoeStyles()->save($shoeStyle);
        foreach ($shoeStyles as $shoeStyle)
            $this->assertDatabaseHas('shoe_styles_shoe_categories', [
                'shoe_category_id' => $shoeCategory->id,
                'shoe_style_id' => $shoeStyle->id,
            ]);
    }

    public function testToeShapes() {
        $shoeCategory = factory(ShoeCategory::class)->create();
        $toeShapes = factory(ToeShape::class, 4)->create();
        foreach ($toeShapes as $toeShape)
            $shoeCategory->toeShapes()->save($toeShape);
        foreach ($toeShapes as $toeShape)
            $this->assertDatabaseHas('toe_shapes_shoe_categories', [
                'shoe_category_id' => $shoeCategory->id,
                'toe_shape_id' => $toeShape->id,
            ]);
    }

    public function testLeather() {
        $shoeCategory = factory(ShoeCategory::class)->create();
        $leathers = factory(Leather::class, 4)->create();
        foreach ($leathers as $leather)
            $shoeCategory->leather()->save($leather);
        foreach ($leathers as $leather)
            $this->assertDatabaseHas('leather_shoe_categories', [
                'shoe_category_id' => $shoeCategory->id,
                'leather_id' => $leather->id,
            ]);
    }

    public function testOutsoleTypes() {
        $shoeCategory = factory(ShoeCategory::class)->create();
        $outsoleTypes = factory(OutsoleTypes::class, 4)->create();
        foreach ($outsoleTypes as $outsoleType)
            $shoeCategory->outsoleTypes()->save($outsoleType);
        foreach ($outsoleTypes as $outsoleType)
            $this->assertDatabaseHas('outsole_types_shoe_categories', [
                'shoe_category_id' => $shoeCategory->id,
                'outsole_type_id' => $outsoleType->id,
            ]);
    }

    public function testCanDelete() {
        $shoeCategory = factory(ShoeCategory::class)->create();
        $this->assertTrue($shoeCategory->canDelete());

        $productPackages = factory(ProductPackage::class, 4)->create();
        foreach ($productPackages as $productPackage)
            $shoeCategory->packages()->save($productPackage);

        $this->assertFalse($shoeCategory->canDelete());
    }
}