<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    // Thêm các cookie không cần mã hóa vào đây
    protected $except = [
        //
    ];
}