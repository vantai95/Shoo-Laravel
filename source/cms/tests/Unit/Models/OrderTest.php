<?php

namespace Test\Unit;

use App\Models\FlagshipStyle;
use App\Models\Measurement;
use App\Models\Order;
use App\Models\ProductPackage;
use App\Models\ShoeStyles;
use App\Models\ShoeTypes;
use App\Models\ToeShape;
use database\factories\ModelFactory;
use Tests\TestCase;

class OrderTest extends TestCase
{
    public function testPackage() {
        $order = factory(Order::class)->create();
        $package = factory(ProductPackage::class)->create();
        $order->package_id = $package->id;
        $order->save();
        $this->assertDatabaseHas('orders', [
            'package_id' => $package->id,
        ]);
    }

    public function testType() {
        $order = factory(Order::class)->create();
        $shoeType = factory(ShoeTypes::class)->create();
        $order->type_id = $shoeType->id;
        $order->save();
        $this->assertDatabaseHas('orders', [
            'type_id' => $shoeType->id,
        ]);
    }

    public function testStyle() {
        $order = factory(Order::class)->create();
        $shoeStyle = factory(ShoeStyles::class)->create();
        $order->style_id = $shoeStyle->id;
        $order->save();
        $this->assertDatabaseHas('orders', [
            'style_id' => $shoeStyle->id,
        ]);
    }

    public function testToeShape() {
        $order = factory(Order::class)->create();
        $toeShape = factory(ToeShape::class)->create();
        $order->toe_shape_id = $toeShape->id;
        $order->save();
        $this->assertDatabaseHas('orders', [
            'toe_shape_id' => $toeShape->id,
        ]);
    }

    public function testFlagshipStyle() {
        $order = factory(Order::class)->create();
        $flagshipStyle = factory(FlagshipStyle::class)->create();
        $order->flagship_style_id = $flagshipStyle->id;
        $order->save();
        $this->assertDatabaseHas('orders', [
            'flagship_style_id' => $flagshipStyle->id,
        ]);
    }

    public function testStatus()
    {
        $order = factory(Order::class)->create();
        $this->assertEquals('New', $order->statusText());

        $order->status = 2;
        $this->assertEquals('Confirm', $order->statusText());

        $order->status = 3;
        $this->assertEquals('Measurement uploaded', $order->statusText());

        $order->status = 4;
        $this->assertEquals('Feedback', $order->statusText());

        $order->status = 5;
        $this->assertEquals('In progress', $order->statusText());

        $order->status = 6;
        $this->assertEquals('Done', $order->statusText());
    }

    public function testCreateStatusMap() {
        $array = [];
        foreach (Order::STATUS as $key => $value) {
            $array[$value] = Order::STATUS_TEXT[$key];
        }
        $order = factory(Order::class)->create();
        $this->assertEquals($array, $order->createStatusMap());
    }

    public function testFlagshipImageUrl() {
        $order = factory(Order::class)->create();
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.ORDER_FLAGSHIP_DEFAULT_IMG'), $order->flagshipImageUrl());

        $order->decorate = '1511493232.1.jpg';
        $this->assertEquals(getenv('APP_URL').'/'.config('constants.FLAGSHIP_IMAGES_FOLDER')
            . '/1511493232.1.jpg', $order->flagshipImageUrl());
    }

    public function testMeasurement() {
        $order = factory(Order::class)->create();
        $measurement = factory(Measurement::class)->create();
        $order->measurement_id = $measurement->id;
        $order->save();
        $this->assertDatabaseHas('orders', [
            'measurement_id' => $measurement->id,
        ]);
    }
}