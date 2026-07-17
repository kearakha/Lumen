<?php

namespace App\Http\Controllers;

use App\Http\Requests\AskRequest;
use App\Models\Chunk;
use App\Services\Embedder;
use App\Services\LlmClient;
use App\Services\PromptBuilder;
use Illuminate\Http\JsonResponse;
use Pgvector\Laravel\Distance;

class AskController extends Controller
{
    public function __invoke(
        AskRequest $request,
        Embedder $embedder,
        PromptBuilder $promptBuilder,
        LlmClient $llm,
    ): JsonResponse {
        $question = $request->validated('question');

        $questionEmbedding = $embedder->embed($question);

        $chunks = Chunk::query()
            ->with('document')
            ->nearestNeighbors('embedding', $questionEmbedding, Distance::Cosine)
            ->take(3)
            ->get();

        $prompt = $promptBuilder->build($question, $chunks);

        return response()->json([
            'answer' => $llm->ask($prompt),
            'sources' => $chunks->map(fn (Chunk $chunk) => [
                'document' => $chunk->document->filename,
                'excerpt' => $chunk->content,
            ]),
        ]);
    }
}
