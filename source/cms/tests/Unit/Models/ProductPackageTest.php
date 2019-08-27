<?php

namespace Test\Unit;

use App\Models\Order;
use App\Models\PreOrder;
use App\Models\ProductPackage;
use App\Models\ShoeCategory;
use database\factories\ModelFactory;
use Tests\TestCase;

class ProductPackageTest extends TestCase
{
    public function testStatus() {
        $productPackage = factory(ProductPackage::class)->create();
        $this->assertEquals('Stock in', $productPackage->status());

        $productPackage->available = 0;
        $this->assertEquals('Stock out', $productPackage->status());
    }

    public function testCategory() {
        $productPackages = factory(ProductPackage::class, 4)->create();
        $shoeCategory = factory(ShoeCategory::class)->create();
        foreach ($productPackages as $productPackage)
            $shoeCategory->packages()->save($productPackage);
        foreach ($productPackages as $productPackage)
            $this->assertDatabaseHas('product_packages', [
                'shoe_category_id' => $shoeCategory->id,
                'id' => $productPackage->id,
            ]);
    }

    public function testOrders() {
        $orders = factory(Order::class, 4)->create();
        $productPackage = factory(ProductPackage::class)->create();
        foreach ($orders as $order)
            $productPackage->orders()->save($order);
        foreach ($orders as $order)
            $this->assertDatabaseHas('orders', [
                'package_id' => $productPackage->id,
                'id' => $order->id,
            ]);
    }

    public function testCanDelete() {
        $productPackage = factory(ProductPackage::class)->create();
        $this->assertTrue($productPackage->canDelete());

        $orders = factory(Order::class, 4)->create();
        foreach ($orders as $order)
            $productPackage->orders()->save($order);

        $this->assertFalse($productPackage->canDelete());
    }

    public function testPreOrder() {
        $preOrders = factory(PreOrder::class, 4)->create();
        $productPackage = factory(ProductPackage::class)->create();
        foreach ($preOrders as $preOrder)
            $productPackage->orders()->save($preOrder);
        foreach ($preOrders as $preOrder)
            $this->assertDatabaseHas('pre_orders', [
                'package_id' => $productPackage->id,
                'id' => $preOrder->id,
            ]);
    }

    public function testImageUrl() {
        $productPackage = factory(ProductPackage::class)->create();
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.PRODUCTION_PACKAGE_DEFAULT_IMG'), $productPackage->imageUrl());

        $productPackage->image = '1514905783.6.jpg';
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.PRODUCT_PACKAGE_FOLDER')
            . '/1514905783.6.jpg', $productPackage->imageUrl());
    }
}