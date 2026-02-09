<?php

use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

Route::get('/status', function () {
    return response()->json(['status' => 'OK']);
});

Route::post('/test-summary-ai', function (Request $request) {
   try {
        $response = OpenAI::responses()->create([
            'model' => 'gpt-5',
            'input' => $request->input('text'),
        ]);

        return response()->json(['output' => $response->outputText]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }

});
