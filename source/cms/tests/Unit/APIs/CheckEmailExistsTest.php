<?php

namespace Tests\Unit;

use App\Models\User;
use Carbon\Carbon;
use database\factories\ModelFactory;
use Response;
use Tests\TestCase;

class CheckEmailExistsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testValidationSuccess()
    {

        $data = [
            "email" => "phuctc@imt-soft.com"
        ];

        $rules = [
            'email' => 'required|email|max:50'
        ];

        $validate = $this->app['validator']->make($data, $rules);
        $this->assertTrue($validate->passes(), "Error from testValidationSuccess()");
    }

    public function testValidationFailed()
    {
        $data = [
            "email" => "phuctc-imt-soft.com"
        ];

        $rules = [
            'email' => 'required|email|max:50'
        ];

        $validate = $this->app['validator']->make($data, $rules);
        $this->assertTrue(!$validate->passes(), "Error from testValidationFailed()");
    }


    public function testEmailNotExisted()
    {
        $response = $this->post('/api/email-existed', [
            "email" => "phuct-not@imt-soft.com"
        ]);

        $response->assertJson([
            'success' => true,
            'orders' => [],
            'user_status' => 0,
            'message' => ""
        ]);
    }

    public function testEmailExistedButNotVerify()
    {
        $data = [
            'full_name' => 'Canh Phuc Trinh',
            'email' => 'phuctc-not-verify@imt-soft.com',
            'password' => 'phuctc-not-verify@imt-soft.com'
        ];

        User::create([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'email_verify_sent_at' => Carbon::now(),
        ]);

        $response = $this->post('/api/email-existed', [
            "email" => "phuctc-not-verify@imt-soft.com"
        ]);

        $response->assertJson([
            'success' => true,
            'orders' => [],
            'user_status' => 1,
            'message' => ""
        ]);
    }

    public function testEmailExistedAndVerified()
    {
        $data = [
            'full_name' => 'Canh Phuc Trinh',
            'email' => 'phuctc-verified@imt-soft.com',
            'password' => 'phuctc-verified@imt-soft.com'
        ];

        User::create([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'email_verified' => 1,
            'email_verify_sent_at' => Carbon::now(),
        ]);

        $response = $this->post('/api/email-existed', [
            "email" => "phuctc-verified@imt-soft.com"
        ]);

        $response->assertJson([
            'success' => true,
            'orders' => [],
            'user_status' => 2,
            'message' => ""
        ]);
    }
}
