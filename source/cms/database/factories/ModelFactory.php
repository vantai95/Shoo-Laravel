<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'full_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'has_password' => '1',
        'birth_day' => '1999-09-08',
        'email_verify_sent_at' => \Carbon\Carbon::now()
    ];
});

$factory->define(App\Models\Role::class, function (Faker\Generator $faker) {
    return [
        'code' => 'admin',
        'name' => 'Admin'
    ];
});

$factory->define(App\Models\Country::class, function (Faker\Generator $faker) {
    return [
        'code' => $faker->countryCode,
//        'code' => 'VN',
        'name_en' => 'Vietnam',
        'name_vi' => 'Viet Nam',
        'nationality_vi' => 'Việt Nam',
        'nationality_en' => 'Vietnam'
    ];
});

$factory->define(\App\Models\BuyerContact::class, function (Faker\Generator $faker) {
    return [
        'full_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => '0987654321'
    ];
});

//$factory->define(App\Models\Airline::class, function (Faker\Generator $faker) {
//    return [
//        'name_en' => $faker->name,
//        'name_vi' => $faker->name,
//        'code' => 'abc',
//        'gotadi_code' => 'NVA',
//    ];
//});
//$factory->define(App\Models\Airport::class, function (Faker\Generator $faker) {
//    return [
//        'name_en' => $faker->name,
//        'name_vi' => $faker->name,
//        'city_en' => $faker->city,
//        'city_vi' => $faker->city,
//        'code' => str_random(3)
//    ];
//});
$factory->define(\App\Models\News::class, function (Faker\Generator $faker) {
    return [
        'content' => $faker->paragraph,
        'subtitle' => $faker->name,
        'title' => 'Tieu de',
    ];
});
$factory->define(\App\Models\NewsCategory::class, function (Faker\Generator $faker) {
    return [
        'name_vi' => 'The Thao',
        'name_en' => 'Sport'
    ];
});
//$factory->define(\App\Models\FaqCategory::class, function (Faker\Generator $faker) {
//    return [
//        'name_vi' => 'Cau hoi',
//        'name_en' => 'Question',
//    ];
//});
//$factory->define(\App\Models\Faq::class, function (Faker\Generator $faker) {
//    return [
//        'faq_category_id' => '1',
//        'question_en' => $faker->paragraph,
//        'question_vi' => 'Cau hoi 1',
//        'answer_en' => $faker->paragraph,
//        'answer_vi' => $faker->paragraph,
//    ];
//});

//$factory->define(\App\Models\FlightPassenger::class, function (Faker\Generator $faker) {
//    return [
//        'passenger_type' => '1',
//        'first_name' => $faker->name,
//        'last_name' => $faker->name,
//    ];
//});

$factory->define(\App\Models\Order::class, function (Faker\Generator $faker) {
    return [
        'buyer_contact_id' => $faker->randomNumber(),
        'total_price' => '1000000',
        'itemable_id' => $faker->randomNumber(),
        'itemable_type' => $faker->name,
        'expired_date' => $faker->dateTime,
    ];
});

$factory->define(\App\Models\OrderItem::class, function (Faker\Generator $faker) {
    return [
        'quantity' => '1',
        'unit_price' => '1000000',
        'order_id' => $faker->randomNumber(),
        'itemable_id'=>$faker->numberBetween(1,20),
        'itemable_type'=>'App\Models\FlightOrderItem'
    ];
});

$factory->define(\App\Models\Promotion::class, function (Faker\Generator $faker) {
    return [
        'code' => str_random(20),
        'description_vi' => $faker->paragraph,
        'description_en' => $faker->paragraph,
        'value' => '1000',
        'detail_vi' => $faker->paragraph,
        'detail_en' => $faker->paragraph,
        'terms_and_conditions_vi' => $faker->paragraph,
        'terms_and_conditions_en' => $faker->paragraph,
        'how_to_receive_vi' => $faker->paragraph,
        'how_to_receive_en' => $faker->paragraph,
        'promotion_type' => '1',
    ];
});

$factory->define(\App\Models\PromotionCategory::class, function (Faker\Generator $faker) {
    return [
        'name_vi' => $faker->name,
        'name_en' => $faker->name,
    ];
});

$factory->define(\App\Models\Notification::class, function (Faker\Generator $faker) {
    return [
        'title_vi' => $faker->name,
        'title_en' => $faker->name,
        'description_en' => $faker->sentence,
        'description_vi' => $faker->sentence,
    ];
});

$factory->define(\App\Models\Configuration::class, function(Faker\Generator $faker) {
    return [
        'is_published' => '1',
        'config_key' => \App\Models\Configuration::CONFIG_KEYS['HOME_VIDEO'],
        'config_value' => \App\Models\Configuration::CONFIG_VALUES['HOME_VIDEO'],
        'title' => \App\Models\Configuration::TITLE['HOME_VIDEO'],
    ];
});

$factory->define(\App\Models\HomeHowItWork::class, function(Faker\Generator $faker) {
    return [
        'is_published' => '1',
        'title' => strtoupper($faker->title),
        'description' => $faker->paragraph,
    ];
});

$factory->define(\App\Models\HowItWork::class, function(Faker\Generator $faker) {
    return [
        'is_published' => '1',
        'title' => strtoupper($faker->title),
        'description' => $faker->paragraph,
    ];
});

$factory->define(\App\Models\Leather::class, function(Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'color' => $faker->colorName,
        'description' => $faker->paragraph,
        'picture' => getenv('APP_URL') . '/' . config('constants.LEATHER_DEFAULT_IMG'),
    ];
});

$factory->define(\App\Models\ShoeCategory::class, function(Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(\App\Models\Order::class, function(Faker\Generator $faker) {
    return [
        'total_price' => 100,
        'package_id' => $faker->randomNumber(),
        'email' => $faker->unique()->email,
        'indiegogo_order_code' => str_random(5),
        'order_number' => str_random(5),
        'owner_id' => $faker->randomNumber(),
        'quantity' => 1,
        'status' => 1,
        'shipping_address' => $faker->address,
    ];
});

$factory->define(\App\Models\ProductPackage::class, function(Faker\Generator $faker) {
   return [
       'price' => 329,
       'volume' => 1000,
       'description' => $faker->paragraph,
       'available' => 1,
       'name' => $faker->name,
       'shoe_category_id' => $faker->randomNumber(),

   ];
});

$factory->define(\App\Models\ShoeTypes::class, function(\Faker\Generator $faker) {
   return [
       'name' => $faker->name,
       'description' => $faker->paragraph,

   ];
});

$factory->define(\App\Models\ShoeStyles::class, function (Faker\Generator $faker) {
    return [
        'main_name' => $faker->name,
        'sub_name' => $faker->name,
        'description' => $faker->paragraph,
        'sub_description' => $faker->paragraph,
        'price' => 699,
        'discount_price' => 429,
        'shoe_types_id' => $faker->randomNumber(),
    ];
});

$factory->define(\App\Models\ToeShape::class, function (Faker\Generator $faker) {
   return [
       'name' => $faker->name,
       'description' => $faker->paragraph,
   ];
});

$factory->define(\App\Models\FlagshipStyle::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
    ];
});

$factory->define(\App\Models\Measurement::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->randomNumber(),
        'email' => $faker->email,
        'height' => $faker->numberBetween(80, 200),
        'height_unit' => $faker->randomElement(['cm', 'inch']),
        'weight' => $faker->numberBetween(80, 200),
        'weight_unit' => $faker->randomElement(['kg', 'pound']),
        'race' => str_random(10),
        'gender' => $faker->randomElement(['male', 'female']),
        'date_of_birth' => $faker->date(),
        'left_foot_length' => $faker->numberBetween(80, 200),
        'left_toes_girth' => $faker->numberBetween(80, 200),
        'left_ball_girth' => $faker->numberBetween(80, 200),
        'left_ball_width' => $faker->numberBetween(80, 200),
        'left_instep_height' => $faker->numberBetween(80, 200),
        'right_foot_length' => $faker->numberBetween(80, 200),
        'right_toes_girth' => $faker->numberBetween(80, 200),
        'right_ball_girth' => $faker->numberBetween(80, 200),
        'right_ball_width' => $faker->numberBetween(80, 200),
        'right_instep_height' => $faker->numberBetween(80, 200),
        'code' => str_random(6),
    ];
});

$factory->define(\App\Models\AboutUs::class, function (Faker\Generator $faker) {
    return [
        'is_banner' => true,
        'image' => getenv('APP_URL').'/'.config('constants.ABOUT_US_DEFAULT_IMG')
    ];
});

$factory->define(\App\Models\AboutUsDescription::class, function (Faker\Generator $faker) {
    return [
        'description' => $faker->paragraph,
        'sub_description' => $faker->paragraph,
    ];
});

$factory->define(\App\Models\OutsoleTypes::class, function (\Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'picture' => getenv('APP_URL') . '/' . config('constants.OUTSOLE_TYPE_DEFAULT_IMG'),
    ];
});

$factory->define(\App\Models\Page::class, function (Faker\Generator $faker) {
    return [
        'video' => $faker->url,
        'page_name' => strtoupper($faker->name),
        'is_published' => 1,
    ];
});

$factory->define(\App\Models\PageMeta::class, function (\Faker\Generator $faker) {
    return [
        'page_id' => $faker->randomNumber(),
        'key' => $faker->randomElement(['title', 'video', 'description', 'ratings', 'facebook', 'youtube', 'files']),
        'value' => $faker->paragraph,
        'available' => 1,
    ];
});

$factory->define(\App\Models\PreOrder::class, function(Faker\Generator $faker) {
    return [
        'package_id' => $faker->randomNumber(),
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
    ];
});

$factory->define(\App\Models\ProductFeature::class, function(Faker\Generator $faker) {
    return [
        'image' => url(config('constants.PRODUCT_FEATURE_DEFAULT_IMG')),
        'title' => strtoupper($faker->title),
        'description' => $faker->paragraph,
        'is_published' => 1,
    ];
});

$factory->define(\App\Models\ProductFeatureDetail::class, function (Faker\Generator $faker) {
    return [
        'title' => strtoupper($faker->title),
        'content' => $faker->paragraph,
        'owner' => $faker->randomNumber(),
        'views' => 0,
        'is_published' => 1,
    ];
});

$factory->define(\App\Models\ProductPackage::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomNumber(),
        'volume' => $faker->randomNumber(),
        'description' => $faker->paragraph,
        'available' => 1,
        'shoe_category_id' => $faker->randomNumber(),
    ];
});

$factory->define(\App\Models\Slider::class, function (Faker\Generator $faker) {
    return [
        'image' => url(config('constants.SLIDER_DEFAULT_IMG')),
        'title' => strtoupper($faker->title),
        'description' => $faker->paragraph,
        'is_published' => 1,
    ];
});

$factory->define(\App\Models\ToeShape::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'picture' => $faker->url,
    ];
});