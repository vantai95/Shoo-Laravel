<?php

namespace Test\Unit;

use App\Models\Role;
use App\Models\User;
use database\factories\ModelFactory;
use Tests\TestCase;

class RoleTest extends TestCase
{
    public function testUsers()
    {
        $role = factory(Role::class)->create();
        $users = factory(User::class, 4)->create();
        foreach ($users as $user)
            $role->users()->save($user);
        foreach ($users as $user)
            $this->assertDatabaseHas('users', [
                'role_id' => $role->id,
                'id' => $user->id,
            ]);
    }
}