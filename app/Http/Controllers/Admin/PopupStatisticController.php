<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\PopupStatistic;
use App\Http\Requests\Admin\StorePopupStatisticRequest;
use App\Http\Requests\Admin\UpdatePopupStatisticRequest;

class PopupStatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePopupStatisticRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PopupStatistic $popupStatistic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PopupStatistic $popupStatistic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePopupStatisticRequest $request, PopupStatistic $popupStatistic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PopupStatistic $popupStatistic)
    {
        //
    }
}
