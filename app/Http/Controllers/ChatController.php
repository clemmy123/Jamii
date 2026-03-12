<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\p3Sector;

class ChatController extends Controller
{
    // Show chat page
    public function index()
    {
        return view('chat'); // make sure resources/views/chat.blade.php exists
    }

    // Handle chat request
    public function ask(Request $request)
    {
        $question = $request->message;

        // ---------- PROMPT GUARD ----------
        if (strlen($question) > 500) {
            return response()->json([
                'answer' => "Question too long."
            ]);
        }

        $blocked = ['hack','exploit','sql'];

        foreach ($blocked as $word) {
            if (str_contains(strtolower($question), $word)) {
                return response()->json([
                    'answer' => "Invalid request."
                ]);
            }
        }

       

        // ---------- RETRIEVE LOCAL DATA ----------
        $sectors = p3Sector::select('name','skills','raw_materials')->get();
        $context = $sectors->toJson();

         

        // ---------- PROMPT FOR GEMINI ----------

        $prompt = "
You are an AI assistant supporting local producers and women economic groups.

Local Data:
$context

User Question:
$question



Objectives:
1. Identify local skills and raw materials.
2. Suggest value addition opportunities.
3. Improve packaging, branding, and design.
4. Suggest how producers connect to buyers.

Provide clear practical suggestions.
";

        // ---------- GEMINI API ----------
        $response = Http::post(
            "https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=" . env('GEMINI_API_KEY'),
            [
                "contents" => [
                    [
                        "parts" => [
                            ["text" => $prompt]
                        ]
                    ]
                ]
            ]
        );

        $answer = $response['candidates'][0]['content']['parts'][0]['text'] ?? "No response";

        return response()->json([
            'answer' => $answer
        ]);
    }
}