<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;
use \App\Http\Controllers\Blog\BaseController as GuestBaseController;

abstract class BaseController extends GuestBaseController
{

    /**
     * Базовый контроллер для всех контроллеров управления
     * блогом в панели администрирования
     *
     * Должен быть родитлем всех контроллеров управления блогов
     *
     * BaseController constructor.
     */
    public function __construct()
    {
        //Инциализация общих моментов для админки.
    }
}
