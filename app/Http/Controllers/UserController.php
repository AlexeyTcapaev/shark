<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }
    public function chat_room($id)
    {
        return User::where('id', '!=', $id)->get();
    }
    public function search(Request $request)
    {
        if ($request->has('company')) {
            $comapny = $request->company;
            return User::where('name', $request->search)->whereHas('companies', function ($query) use ($comapny) {
                $query->where('companies.slug', $comapny);
            })->get();
        } else {
            return User::where('name', 'like', $request->search)->get();
        }
    }
    /**
     * Show the form for editing the specified resource.
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            if (empty($user))
                return response()->json(['error' => 'Пользователь не найдена'], 404);
            else {
                $user->update($request->all());
                if ($request->hasFile('avatar')) {
                    $user->uploadImage($request->file('avatar'));
                }
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
