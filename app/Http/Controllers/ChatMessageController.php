<?php

namespace App\Http\Controllers;

use App\ChatMessage;
use Auth;
use App\User;
use Illuminate\Support\Facades\Log;
use App\Events\Message;
use Illuminate\Http\Request;

class ChatMessageController extends Controller
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
            $message = ChatMessage::create($request->all());

            if (empty($message))
                throw new Exception('Ошибка при сохранении сообщения');
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        $message->load('creator');
        Message::dispatch($message);
        return $message;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChatMessage  $chatMessage
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if(Auth::user()->chats->contains($id))
        {
        try {
            $messages = ChatMessage::where('chat_id',$id)->with('creator')->get();

            if (empty($messages))
                throw new Exception('Ошибка при сохранении сообщения');
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return $messages;
    }
    else{
        return response()->json(['error' => "Ошибка доступа"], 403);
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChatMessage  $chatMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(ChatMessage $chatMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChatMessage  $chatMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChatMessage $chatMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChatMessage  $chatMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChatMessage $chatMessage)
    {
        //
    }
}
