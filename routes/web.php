<?php

use OpenAI\Client;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

Route::get('/', function () {
    // test
    // return view('welcome');
});

Route::post('/test-summary-ai', function (Request $request) {
    $client = new Client([
        'api_key' => env('OPENAI_API_KEY'),
    ]);

    $response = $client->chat()->create([
        'model' => 'gpt-4',
        'messages' => [
            ['role' => 'user', 'content' => 'اشرحلي الفرق بين '.$request->input('text')],
        ],
    ]);

    return $response['choices'][0]['message']['content'];
});
