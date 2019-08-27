<?php

namespace Tests\Unit;

use database\factories\ModelFactory;
use Response;
use Tests\TestCase;

class UploadMeasurementTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testValidationSuccess()
    {
        $data = [
            "email" => "phuctc@imt-soft.com",
            "height" => 120,
            "weight" => 43,
            "height_unit" => "cm",
            "weight_unit" => "kg",
            "race" => 5,
            "gender" => "nam",
            "date_of_birth" => "2016-12-8",
            "measurement_date" => "2016-12-8",
            'left'=>[
                'foot_length'=>80.4,
                'toes_girth'=>22,
                'ball_girth'=>44,
                'ball_width'=>33,
                'instep_height'=>53
            ],
            'right'=>[
                'foot_length'=>80.4,
                'toes_girth'=>22,
                'ball_girth'=>44,
                'ball_width'=>33,
                'instep_height'=>53
            ],
            "code" => "QWE123"
        ];

        $rules = [
            'email' => 'required|string|email|max:255',
            'height' => 'nullable|numeric',
            'height_unit' => 'nullable|in:inch,cm',
            'weight' => 'nullable|numeric',
            'weight_unit' => 'nullable|in:kg,pound',
            'race' => 'nullable',
            'gender' => 'nullable',
            'date_of_birth' => 'nullable|date',
            'left.foot_length' => 'required|numeric|max:1500',
            'left.toes_girth' => 'required|numeric',
            'left.ball_girth' => 'required|numeric',
            'left.ball_width' => 'required|numeric',
            'left.instep_height' => 'required|numeric',
            'right.foot_length' => 'required|numeric|max:1500',
            'right.toes_girth' => 'required|numeric',
            'right.ball_girth' => 'required|numeric',
            'right.ball_width' => 'required|numeric',
            'right.instep_height' => 'required|numeric',
            'code' => 'required'
        ];

        $validate = $this->app['validator']->make($data, $rules);
        $this->assertTrue($validate->passes(), "Error from testValidationSuccess()");
    }

    public function testValidationFailed()
    {
        $data = [
            "email" => "phuctcimt-soft.com",
            "height" => 120,
            "weight" => 43,
            "height_unit" => "cm",
            "weight_unit" => "kg",
            "race" => 5,
            "gender" => "nam",
            "date_of_birth" => "2016-12-8",
            "measurement_date" => "2016-12-8",
            "left_foot_length" => 80.4,
            "left_toes_girth" => 22,
            "left_ball_girth" => 44,
            "left_ball_width" => 33,
            "left_instep_height" => 53,
            "right_foot_length" => 80.4,
            "right_toes_girth" => 22,
            "right_ball_girth" => 44,
            "right_ball_width" => 33,
            "right_instep_height" => 53,
            "code" => "QWE123"
        ];

        $rules = [
            'email' => 'required|string|email|max:255',
            'height' => 'nullable|numeric',
            'height_unit' => 'nullable|in:inch,cm',
            'weight' => 'nullable|numeric',
            'weight_unit' => 'nullable|in:kg,pound',
            'race' => 'nullable',
            'gender' => 'nullable',
            'date_of_birth' => 'nullable|date',
            'left.foot_length' => 'required|numeric|max:1500',
            'left.toes_girth' => 'required|numeric',
            'left.ball_girth' => 'required|numeric',
            'left.ball_width' => 'required|numeric',
            'left.instep_height' => 'required|numeric',
            'right.foot_length' => 'required|numeric|max:1500',
            'right.toes_girth' => 'required|numeric',
            'right.ball_girth' => 'required|numeric',
            'right.ball_width' => 'required|numeric',
            'right.instep_height' => 'required|numeric',
            'code' => 'required'
        ];

        $validate = $this->app['validator']->make($data, $rules);
        $this->assertTrue(!$validate->passes(), "Error from testValidationFailed()");
    }

    public function testFalseResponse()
    {
        $response = $this->post('/api/send-profile', [
            "email" => "phuctc-imt-soft.com",
            "height" => 120,
            "weight" => 43,
            "height_unit" => "cm",
            "weight_unit" => "kg",
            "race" => 5,
            "gender" => "nam",
            "date_of_birth" => "2016-12-8",
            "measurement_date" => "2016-12-8",
            'left'=>[
                'foot_length'=>80.4,
                'toes_girth'=>22,
                'ball_girth'=>44,
                'ball_width'=>33,
                'instep_height'=>53
            ],
            'right'=>[
                'foot_length'=>80.4,
                'toes_girth'=>22,
                'ball_girth'=>44,
                'ball_width'=>33,
                'instep_height'=>53
            ],
            "code" => "QWE123"
        ]);

        $response->assertJson([
            "success" => false,
            "browser_url" => "http://staging.booking.imt-soft.com/"
        ]);
    }


    public function testTrueResponse()
    {
        $response = $this->post('/api/send-profile', [

            'email'=> 'phuctc@imt-soft.com',
            'height'=>120,
            'weight'=>43,
            'height_unit'=>'cm',
            'weight_unit'=>'kg',
            'race'=>5,
            'gender'=>'nam',
            'date_of_birth'=>'2016-12-8',
            'measurement_date'=>'2016-12-8',
            'left'=>[
                'foot_length'=>80.4,
                'toes_girth'=>22,
                'ball_girth'=>44,
                'ball_width'=>33,
                'instep_height'=>53
            ],
            'right'=>[
                'foot_length'=>80.4,
                'toes_girth'=>22,
                'ball_girth'=>44,
                'ball_width'=>33,
                'instep_height'=>53
            ],
            'code'=>'QWE123'

        ]);

        $response->assertJson([
            "success" => true,
            "browser_url" => "http://staging.booking.imt-soft.com/"
        ]);
    }
}
