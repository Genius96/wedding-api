<?php

return [
    /**
     * AuthManager.
     */
    \Core\Auth\AuthManager::NAME => [
        'failed' => ':email hoặc :password không đúng.',
    ],

    /**
     * Time.
     */
    \Core\Support\Time::NAME => [
        'y' => 'năm',
        'm' => 'tháng',
        'd' => 'ngày',
        'h' => 'giờ',
        'i' => 'phút',
        's' => 'giây',

        'ago' => 'trước.',
        'future' => 'sau.',
        'recently' => 'vừa xong.',
    ],

    /**
     * Validator.
     */
    \Core\Valid\Validator::NAME => [
        'request' => [
            'required' => ':field là bắt buộc!',
            'email' => ':field không hợp lệ!',
            'dns' => ':field không hợp lệ!',
            'url' => ':field không hợp lệ!',
            'ip' => ':field không hợp lệ!',
            'uuid' => ':field không phải là UUID!',
            'int' => ':field phải là số nguyên!',
            'float' => ':field phải là số thập phân!',
            'min' => ':field phải có độ dài tối thiểu: :attribute',
            'max' => ':field phải có độ dài tối đa: :attribute',
            'sama' => ':field không khớp với :attribute',
            'unik' => ':field đã tồn tại!',
        ],

        'file' => [
            'required' => ':field là bắt buộc!',
            'min' => ':field phải có kích thước tối thiểu: :attribute',
            'max' => ':field phải có kích thước tối đa: :attribute',
            'mimetypes' => ':field chỉ cho phép: :attribute',
            'mimes' => ':field chỉ cho phép: :attribute',
            'unsafe' => ':field được phát hiện là không an toàn!',
            'corrupt' => ':field không được tải lên đúng cách!',
        ],
    ],
];
