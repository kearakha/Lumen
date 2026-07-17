<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use RuntimeException;

class LlmClient
{
    public function ask(string $question): string
    {
        $model = config('services.gemini.chat_model');

        $response = Http::timeout(30)
            ->withHeaders(['x-goog-api-key' => config('services.gemini.key')])
            ->post("https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent", [
                'contents' => [
                    ['parts' => [['text' => $question]]],
                ],
            ]);

        if ($response->failed()) {
            throw new RuntimeException('LLM request failed: '.$response->body());
        }

        return $response->json('candidates.0.content.parts.0.text');
    }
}
