<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    public function index()
    {
        return view('admin.unit.index', [
            'units' => Unit::all()
        ]);
    }
    public function create()
    {
        return view('admin.unit.create');
    }

    public function store(Request $request)
    {

        Unit::addNewUnit($request);
        return back()->with('message', 'Added new unit');
    }
    public function edit($id)
    {

        return view('admin.unit.edit', [
            'unit' => Unit::find($id)
        ]);
    }
    public function update(Request $request , $id)
    {

        Unit::updateUnit($request ,$id);
        return redirect('/unit')->with('message','updated info');
    }
    public function delete($id)
    {

        Unit::deleteUnit($id);
        return redirect('/unit')->with('message','Deleted info');
    }
}
