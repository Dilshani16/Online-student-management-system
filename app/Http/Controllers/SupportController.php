<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\chat;
use Illuminate\Http\Request;

class SupportController extends Controller
{

    public function chat(){
        $messages = chat::all();
        return view('acadamic.chat',compact('messages'));
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'sender' => 'required',
            'message' => 'required',
        ]);

        // Save message to the database
        Message::create($request->all());

        return response()->json(['success' => true]);


        // $request->validate(['message' => 'required|string']);

        // // Save user message
        // $userMessage = Chat::create([
        //     'sender' => 'user',
        //     'message' => $request->message,
        // ]);

        // // Generate bot response
        // $botResponse = $this->generateBotResponse($request->message);

        // // Save bot message
        // Chat::create([
        //     'sender' => 'bot',
        //     'message' => $botResponse,
        // ]);

        // return response()->json(['botMessage' => $botResponse]);
    }


    private function generateBotResponse($message)
    {
        // Simple rule-based responses
        $responses = [
            'hello' => 'Hi there! How can I assist you today?',
            'how are you' => 'I am just a bot, but I am here to help you!',
            'bye' => 'Goodbye! Have a great day!',
        ];

        // Match user message
        foreach ($responses as $key => $response) {
            if (stripos($message, $key) !== false) {
                return $response;
            }
        }

        return "I'm not sure how to respond to that. Can you try rephrasing?";
    }

}
