<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function detachUser(Request $request, $slug)
    {
        return Department::where('slug', $request->slug)->first()->users()->detach($request->id);
    }
    public function attachUser(Request $request, $slug)
    {
        $root = Department::where('slug', $request->company)->first();
        return Department::whereBetween('_lft', [$root->_lft, $root->_rgt])->where('slug', $slug)->first()->users()->attach($request->id);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Department::checkUniqueInThree($request->name, $request->root)) {
            $department = Department::create(['name' => $request->name], Department::where('slug', $request->root)->first());
        }
        try {
            if (empty($department))
                return response()->json(['error' => 'Компания не найдены'], 404);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return $department;//Department::where('slug', $request->root)->with('descendants')->get();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        try {
            $departments = Department::with('employees')->descendantsAndSelf(Department::where('slug', $slug)->first()->id)->toTree()->first();
            if (empty($departments))
                return response()->json(['error' => 'Компания не найдены'], 404);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return $departments;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        //
    }
}
