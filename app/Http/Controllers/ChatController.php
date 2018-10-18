<?php

namespace App\Http\Controllers;

use App\Chat;
use App\User;
use Auth;
use App\ChatUser;
use Illuminate\Http\Request;

class ChatController extends Controller
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
        try {
            $chat = Chat::create();
            foreach (json_decode($request->users) as $user) {
                $chat->users()->attach($user->id);
            }

            if (empty($chat))
                throw new Exception('Ошибка при создании компании');
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        $id = Auth::user()->id;
        $chat->load(['users'=> function ($query) use($id)
        {
            $query->where('user_id', '!=', $id);
        }]);
        return $chat;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        try {
            $chat = Chat::whereHas('users', function ($q) use ($id) {
                $q->where('user_id', '=', $id);
            })->ForChat($id)->get();
            if (empty($chat))
                return response()->json(['error' => 'Диалоги не найдены'], 404);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return $chat;
    }
    public function chat_room($id)
    {
        try {
            $chat = Chat::findOrFail($id);
            if (empty($chat))
                return response()->json(['error' => 'Диалоги не найдены'], 404);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return $chat;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chat $chat)
    {
        //
    }
}
