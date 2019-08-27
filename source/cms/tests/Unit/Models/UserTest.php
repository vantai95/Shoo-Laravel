<?php

namespace Test\Unit;

use App\Models\Role;
use App\Models\User;
use database\factories\ModelFactory;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class UserTest extends TestCase
{

    public function testIsAdmin()
    {
        $role = factory(Role::class)->create();
        $user = factory(User::class)->create([
            'role_id' => $role->id,
        ]);
        $this->assertNotEmpty($user->role_id);
    }

    public function testRole()
    {
        $user = factory(User::class)->create();
        $role = factory(Role::class)->create();
        $user->role_id = $role->id;
        $user->save();
        $this->assertDatabaseHas('users', [
            'role_id' => $role->id,
            'id' => $user->id,
        ]);
    }

    public function testRoleName() {
        $user = factory(User::class)->create();
        $this->assertEquals($user->roleName(), 'User');
        $role = factory(Role::class)->create();
        $role->users()->save($user);
        $this->assertDatabaseHas('users',[
            'role_id' => $role->id,
            'id' => $user->id,
        ]);
    }

    public function testImageUrl()
    {
        $user = factory(User::class)->create([
        ]);
        $this->assertEquals(getenv('APP_URL') . '/images/profile.jpg', $user->imageUrl());

        $this->assertEmpty($user->facebookImage());

        $this->assertEmpty($user->googlePlusImage());

        $user->image_1 = 'test.jpg';

        $this->assertEquals(getenv('APP_URL') . '/' . config('constants.AVATAR_PROFILE_FOLDER') . '/test.jpg', $user->imageUrl());
    }

    public function testFacebookImage() {

    }

    public function testGooglePlusImage() {

    }

    public function testImageFullUrl() {

    }

    public function testStatus()
    {
        $user = factory(User::class)->create();
        $this->assertEquals('Active Account', $user->status());

        $user->is_locked = true;
        $this->assertEquals('Blocked Account', $user->status());
    }

    public function testLoginType()
    {
        $user = factory(User::class)->create();
        $this->assertEquals('NORMAL', $user->loginType());
    }

    public function testDisableRole()
    {
        $user = factory(User::class)->create();
        $this->assertEquals(true, $user->disableRole());
    }

    public function testFindForPassport() {

    }

    public function testSendPasswordResetNotification() {

    }

    public function testIsLocked() {
        $user = factory(User::class)->create();
        $this->assertEmpty($user->isLocked());

        $user->is_locked = 1;
        $user->save();
        $this->assertEquals(1, $user->isLocked());
    }

}