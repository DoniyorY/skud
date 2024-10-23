<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'user.passwordResetTokenExpire' => 3600,
    'user.passwordMinLength' => 8,
    'student_status' => [
        0 => 'Активный',
        1 => 'Отсутствует',
        2 => 'Исключён',
    ],
    'status' => [
        0 => 'Активный',
        1 => 'Отключен',
    ],
    'student_status_class' => [
        0 => 'btn btn-sm btn-success w-100',
        1 => 'btn btn-sm btn-warning w-100',
        2 => 'btn btn-sm btn-secondary w-100',
    ],
    'status_class' => [
        0 => 'btn btn-sm btn-success w-100',
        1 => 'btn btn-sm btn-danger w-100',
    ],
    'user_role' => [
        0 => 'Администратор',
        1 => 'Менеджер',
        2 => 'Оператор'
    ],
    'user_status' => [
        10 => 'Активный',
        9 => 'Отключённый',
    ],
    'user_status_class' => [
        10 => 'table-success w-100',
        9 => 'table-danger w-100',
    ]
];
