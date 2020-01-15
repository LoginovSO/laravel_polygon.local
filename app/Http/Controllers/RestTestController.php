<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestTestController extends Controller
{
    /**
     * Display a listing of the resource.
     * Выводит список
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd(123);
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     * Создание сущность, и показываем форму
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * Добовляем в БД новую сущность
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * Показать сущность по его id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * Редактирование сущности
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * Обновить в бд
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * Удплить либо на всегда либо софт делит
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
