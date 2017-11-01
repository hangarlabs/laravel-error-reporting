<?php
/**
 * Created by PhpStorm.
 * User: leonardom
 * Date: 10/31/17
 * Time: 3:49 PM
 */

return [
    'dont_report' => [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
    ],

    'mail' => [
        'from_address' => '',
        'from_name'    => '',
        'to_address'   => [

        ],
        'subject'      => 'Your App: Crash Report',
        'view'         => 'thi-laravel-error-reporting::exception'
    ]
];