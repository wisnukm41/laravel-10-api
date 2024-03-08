<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use F9Web\ApiResponseHelpers;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, ApiResponseHelpers;
}
