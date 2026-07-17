<?php

namespace App\Http\Controllers;

use App\Http\Requests\AskRequest;
use App\Services\LlmClient;
use Illuminate\Http\JsonResponse;

class AskController extends Controller
{
    public function __invoke(AskRequest $request, LlmClient $llm): JsonResponse
    {
        return response()->json([
            'answer' => $llm->ask($request->validated('question')),
        ]);
    }
}
