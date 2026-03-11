<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    // Show chat page
    public function index()
    {
        return view('chat');
    }

    // Handle message request
    public function send(Request $request)
    {
        // Validate input
        $request->validate([
            'message' => 'required|string'
        ]);

        $message = $request->message;

        // Send request to AI API
        $response = Http::post('http://your-ai-api/chat', [
            'message' => $message
        ]);

        // Return response
        return response()->json([
            'answer' => $response->json()['answer'] ?? 'No response from AI'
        ]);
    }
}