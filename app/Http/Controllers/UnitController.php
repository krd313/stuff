<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::latest()->simplePaginate(10);

        return view('shop.unit.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shop.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Unit::insert([
            'name' => $request->name,
            'short' => $request->short,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now(),

        ]);


        //  $notification = array(
        //     'message' => 'Unit Inserted Successfully',
        //     'alert-type' => 'success'
        // );

        return redirect()->route('unit.index')->with('success','Student is added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        return view('shop.unit.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unit $unit)
    {
        $unit = Unit::find($unit->id);
        $unit->name = $request->name;
        $unit->short = $request->short;

        $unit->update();

        return redirect()->route('unit.index')->with('success','Student is added successfully');

}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        $unit->delete();

        return redirect()->route('unit.index')->with('success','Student is added successfully');
    }
}
