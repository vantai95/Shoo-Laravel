<?php

namespace Test\Unit;

use App\Models\PreOrder;
use App\Models\ProductPackage;
use database\factories\ModelFactory;
use Tests\TestCase;

class PreOrderTest extends TestCase
{
    public function testPackage() {
        $preOrder = factory(PreOrder::class)->create();
        $package = factory(ProductPackage::class)->create();
        $preOrder->package_id = $package->id;
        $preOrder->save();
        $this->assertDatabaseHas('pre_orders', [
            'package_id' => $package->id,
        ]);
    }
}