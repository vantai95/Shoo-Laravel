<?php

return [
    'common' => [
        'unknown' => 'Lỗi máy chủ!',
        'validate_error' => 'Dữ liệu không được xác nhận không thành công!',
        'invalid_data_error' => 'Dữ liệu không hợp lệ!',
        'api_not_found' => 'API không tồn tại!',
        'api_invalid_input_data' => 'Dữ liệu không hợp lệ'
    ],
    'auth' => [
        'unauthenticated' => 'Bạn không được phép truy cập!'
    ],
    'airport' => [
        'not_found' => 'Sân bay không tồn tại!',
    ],
    'airline' => [
        'not_found' => 'Hãng hàng không không tồn tại!',
    ],
    'promotion' => [
        'not_found' => 'Quảng cáo không tồn tại!',
    ],
    'news' => [
        'not_found' => 'Tin tức không tồn tại!',
    ],
    'faq' => [
        'not_found' => 'Câu hỏi không tồn tại!',
    ],
    'user' => [
        'activation_token_not_found' => 'Mã thông báo kích hoạt không tồn tại!',
        'email_or_phone_not_found' => 'Email hoặc số điện thoại không tồn tại!',
        'email_not_found' => 'Email không tông tại!',
        'phone_not_found' => 'Số điện thoại không tồn tại!',
        'otp_incorrect' => 'OTP không chính xác!',
        'otp_expired' => 'OTP đã hết hạn!',
        'password_incorrect' => 'Mật khẩu không chính xác!',
        'maximum_otp_send' => 'Bạn đã nhận được tối đa mã OTP hôm nay.',
        'email_exists' => 'Email của bạn đã được đăng kí, vui lòng đăng nhâp bằng email.',
        'phone_exists' => 'Số điện thoại đã đăng kí, vui lòng đăng nhập bằng số điện thoại.',
        'password_invalid' => 'Mật khẩu của bạn không hợp lệ. Mật khẩu phải có ít nhất 8 kí tự và tối đa 20 kí tự, mật khẩu có ít nhất 1 chữ viết hoa và bao gồm cả số ',
        'promotion_not_found' => 'Quảng cáo không tồn tại!',
        'promotion_out_of_number' => 'Quảng cáo hết số!',
        'receiver_exists' => 'Bạn đã nhận được khuyến mãi này!',
        'different_new_password' => 'Mật khẩu mới phải khác với mật khẩu cũ',
        'different_new_phone' => 'Số điện thoại mới phải khác số điện thoại cũ '
    ],
    'flight_order' => [
        'invalid_data' => 'Chuyến bay của bạn có thể không tồn tại nữa, vui lòng thử tìm kiếm lại chuyến bay!',
        'booking_no_not_found' => 'Số đặt phòng không hợp lệ',
        'promotion_is_not_valid' => 'Mã khuyến mãi không hợp lệ!',
        'order_is_not_qualified' => 'Đặt chỗ của bạn không đủ điều kiện cho chương trình khuyến mãi này!',
        'show' => [
            'order_is_paid' => 'Đặt phòng của bạn đã được thanh toán thành công. Đơn đặt hàng của bạn đang được xử lý ngay bây giờ. hãy liên hệ với nhà điều hành của chúng tôi để được hỗ trợ!',
            'order_is_booked' => 'Đặt phòng của bạn đã được thanh toán thành công. Vui lòng kiểm tra email của bạn để xem vé điện tử của bạn!',
            'order_book_error' => 'Đặt chỗ của bạn đã được thanh toán thành công nhưng chuyến bay của bạn chưa được xác nhận. Hãy liên hệ với nhà điều hành của chúng tôi để được hỗ trợ!',
            'order_hold_error' => 'Không tìm thấy số đặt chỗ!',
            'expired' => 'Đặt phòng của bạn đã hết hạn, vui lòng tìm kiếm và đặt lại!',
        ],
        'hold' => [
            'passenger_price_invalid' => 'Giá hành khách không hợp lệ!',
            'depart_price_invalid' => 'Giá khởi hành không hợp lệ!',
            'return_price_invalid' => 'Giá trả lại không hợp lệ!',
        ],
        'confirm' => [
            'order_pay_error' => 'Thanh toán của bạn đã bị hủy, hoặc không thành công!',
            'order_is_not_paid' => 'Thanh toán của bạn không thành công!',
        ],
    ],
    'cheap_flight' => [
        'not_found' => 'Không có chuyến bay nào cho tìm kiếm của bạn!',
    ],
    'payments' => [
        'booking_no_not_found' => 'Không tìm thấy số đặt chỗ.',
        'order_expired' => 'Đặt phòng của bạn đã hết hạn.',
        'order_is_paid_or_hold_error' => 'Giữ vé không thành công hoặc vé đã được thanh toán.',
        'booking_no_required' => 'Số đặt chỗ là bắt buộc.',
        'bank_not_found' => 'Mã ngân hàng không tồn tại!'
    ],
    'notification' => [
        'not_found' => 'Thông báo không còn tồn tại!',
    ],
    'partner' => [
        'not_found' => 'Đối tác không tồn tại!',
    ],
    'flight_supplier' => [
        'search_error' => 'Không thể kết nối với hãng hàng không, vui lòng kiểm tra lại chuyến bay!',
        'hold_error' => 'Không thể giữ vé máy bay từ hàng hàng không, hãy thử tìm kiếm lại chuyến bay!',
        'commit_error' => 'Không thể cam kết vé máy bay từ hãng hàng không, vui lòng liên hệ với nhà điều hành của chúng tôi để được hỗ trợ!',
        'unable_get_availability' => 'Chuyến bay không khả dụng, vui lòng thử tìm kiếm lại chuyến bay!',
        'unable_get_luggage' => 'Không thể nhận hành lý của chuyến bay!',
        'booking_session_expired' => 'Phiên đặt vé đã hết hạn, vui lòng thử tìm kiếm lại chuyến bay!',
    ],
    'survey' => [
        'not_found' => 'Cuộc khảo sát không tồn tại!',
    ],
];