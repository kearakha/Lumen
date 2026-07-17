# COMPONENTS — Lumen

Peta bagian sistem. Diisi lebih detail seiring milestone jalan; ini kerangka awal.

## Alur inti (RAG)
```
Upload dokumen
   → Ekstraksi teks (PDF/teks → string)
   → Chunking (potong jadi bagian kecil)
   → Embedding (tiap chunk → vektor)
   → Simpan di pgvector
   ─────────────────────────────
Pertanyaan user
   → Embedding pertanyaan
   → Retrieval (cari chunk termirip di pgvector)
   → Susun prompt (pertanyaan + chunk relevan)
   → Panggil LLM (via queue job)
   → Stream jawaban ke user (SSE)
```

## Komponen (rencana)
| Komponen | Tugas | Muncul di |
|---|---|---|
| `DocumentUploadController` | Terima file, simpan, trigger proses | M1 |
| `TextExtractor` | PDF/teks → string bersih | M1 |
| `Chunker` | Potong teks jadi chunk (ukuran diuji di M3) | M1 |
| `Embedder` | Chunk/pertanyaan → vektor (panggil embedding API) | M1 |
| `VectorStore` (pgvector) | Simpan & cari chunk termirip | M1 |
| `Retriever` | Ambil chunk relevan untuk sebuah pertanyaan | M1 |
| `PromptBuilder` | Susun prompt dari pertanyaan + chunk | M1 |
| `LlmClient` | Panggil LLM API | M0 |
| `AskJob` (queue) | Bungkus panggilan AI + retry | M2 |
| `StreamController` (SSE) | Alirkan jawaban real-time | M2 |
| `EvalRunner` | Jalankan set pertanyaan, hitung skor | M3 |

## Catatan
- `Retriever` harus bisa menunjukkan chunk mana yang dipakai (untuk verifikasi & debugging eval).
- `Chunker` dan `PromptBuilder` adalah dua tempat paling berpengaruh ke kualitas jawaban — di sinilah eksperimen M3 terjadi.
