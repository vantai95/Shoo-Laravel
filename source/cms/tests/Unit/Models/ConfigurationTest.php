<?php

namespace Test\Unit;

use App\Models\Configuration;
use App\Models\Order;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use database\factories\ModelFactory;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    public function testStatus()
    {
        $configuration = factory(Configuration::class)->create();
        $this->assertEquals('Show', $configuration->status());

        $configuration->is_published = false;
        $this->assertEquals('Hide', $configuration->status());
    }

}