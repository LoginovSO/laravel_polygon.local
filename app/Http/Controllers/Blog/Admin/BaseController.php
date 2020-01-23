<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;
use \App\Http\Controllers\Blog\BaseController as GuestBaseController;

abstract class BaseController extends GuestBaseController
{
    public function __construct()
    {
        //dd(1);
    }
}
