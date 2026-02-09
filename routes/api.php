<?php

use OpenAI\Client;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

Route::get('/status', function () {
    return response()->json(['status' => 'OK']);
});

Route::post('/test-summary-ai', function (Request $request) {
  $client = OpenAI::client(env('OPENAI_API_KEY'));
    $response = $client->chat()->create([
        'model' => 'gpt-4',
        'messages' => [
            ['role' => 'user', 'content' => 'اشرحلي الفرق بين '.$request->input('text')],
        ],
    ]);

    return $response['choices'][0]['message']['content'];
});
