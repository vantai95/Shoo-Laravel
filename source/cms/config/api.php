<?php

return [
    'HEADER_KEY' => env('API_HEADER_KEY', 'CLI-HEADER'),
    'HEADER_VALUE' => env('API_HEADER_VALUE', '123456@IMT'),
    'LANG_KEY' => env('API_LANG_KEY', 'LANGUAGE'),
    'code' => [
        'auth' => [
            'unauthenticated' => 'auth.unauthenticated',
        ],
        'common' => [
            'unknown' => 'common.unknown',
            'validate_error' => 'common.validate_error',
            'supplier_error' => 'common.supplier_error',
            'invalid_data_error' => 'common.invalid_data_error',
            'api_not_found' => 'common.not_found',
        ],
        'user' => [
            'activation_token_not_found' => 'user.activation_token_not_found',
            'email_or_phone_not_found' => 'user.email_or_phone_not_found',
            'email_not_found' => 'user.email_not_found',
            'phone_not_found' => 'user.phone_not_found',
            'otp_incorrect' => 'user.otp_incorrect',
            'otp_expired' => 'user.otp_expired',
            'password_incorrect' => 'user.password_incorrect',
            'maximum_otp_send' => 'user.maximum_otp_send',
            'email_exists' => 'user.email_exists',
            'phone_exists' => 'user.phone_exists',
            'password_invalid' => 'user.password_invalid',
            'promotion_not_found' => 'user.promotion_not_found',
            'promotion_out_of_number' => 'user.promotion_out_of_number',
            'receiver_exists' => 'user.receiver_exists',
            'different_new_password' => 'user.different_new_password',
            'different_new_email' => 'user.different_new_email',
            'different_new_phone' => 'user.different_new_phone',
        ],
    ],
];