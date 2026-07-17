<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentUploadRequest;
use App\Models\Document;
use App\Services\Chunker;
use App\Services\Embedder;
use App\Services\TextExtractor;
use Illuminate\Http\JsonResponse;

class DocumentController extends Controller
{
    public function store(
        DocumentUploadRequest $request,
        TextExtractor $extractor,
        Chunker $chunker,
        Embedder $embedder,
    ): JsonResponse {
        $file = $request->file('file');
        $text = trim($extractor->extract($file));

        if ($text === '') {
            return response()->json(['message' => 'Dokumen kosong atau teks tidak bisa diekstrak.'], 422);
        }

        $document = Document::create([
            'filename' => $file->getClientOriginalName(),
            'content' => $text,
        ]);

        $chunks = $chunker->chunk($text);
        $embeddings = $embedder->embedBatch($chunks);

        foreach ($chunks as $i => $chunkText) {
            $document->chunks()->create([
                'content' => $chunkText,
                'embedding' => $embeddings[$i],
            ]);
        }

        return response()->json([
            'document_id' => $document->id,
            'filename' => $document->filename,
            'chunks' => count($chunks),
        ], 201);
    }
}
