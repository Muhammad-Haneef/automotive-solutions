<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Admin\LoyaltyTransection;
use App\Http\Requests\Admin\StoreLoyaltyTransectionRequest;
use App\Http\Requests\Admin\UpdateLoyaltyTransectionRequest;

class LoyaltyTransectionController extends Controller
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
    public function store(StoreLoyaltyTransectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LoyaltyTransection $loyaltyTransection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LoyaltyTransection $loyaltyTransection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLoyaltyTransectionRequest $request, LoyaltyTransection $loyaltyTransection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LoyaltyTransection $loyaltyTransection)
    {
        //
    }
}
