<?php

namespace App\Http\Controllers;

use App\Models\ShopList;
use Illuminate\Http\Request;

class ShopListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shoplist = ShopList::latest()->simplePaginate(10);

        return view('shop.shoplist.index', compact('shoplist'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ShopList $shopList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShopList $shopList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShopList $shopList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShopList $shopList)
    {
        //
    }
}
