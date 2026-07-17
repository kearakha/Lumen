# STACK — Lumen

Setiap pilihan punya alasan. Kalau mau ganti, ganti sadar, bukan default.

| Lapis | Pilihan | Kenapa |
|---|---|---|
| Backend | **Laravel 13** | Sudah dikuasai. Fokus belajar ke bagian AI, bukan framework baru. |
| Database | **PostgreSQL 17** (Homebrew, port 5433) | Perlu untuk pgvector. Server EDB PG17 yang sudah ada di mesin (port 5432) pakai custom build path yang tidak bisa dipasangi pgvector — jadi pakai instance Homebrew terpisah, bukan ganggu yang lama. |
| Vector store | **pgvector 0.8.5** (extension Postgres) | Tidak perlu vector DB terpisah (Pinecone/Qdrant). Satu database, lebih sedikit hal untuk dikelola. |
| LLM API | **Gemini** (`gemini-flash-latest`) via Laravel HTTP client | Rencana awal OpenAI/Anthropic, tapi keduanya butuh billing aktif. Gemini API punya free tier — cukup untuk portfolio project tanpa keluar biaya. |
| Embeddings | **Gemini** `gemini-embedding-001` (768 dim) | Satu provider dengan chat model, sama-sama gratis. Berubah dari rencana awal (OpenAI `text-embedding-3-small`) karena alasan sama: hindari billing. Model `text-embedding-004` yang lebih lama sudah tidak tersedia. |
| Queue | **Laravel Queue + Redis** | Panggilan AI harus jadi background job dengan retry (rate limit handling). Ini penanda "paham produksi". |
| Streaming | **SSE (Server-Sent Events)** di Laravel | Jawaban muncul real-time, UX chat. Tambahkan di M2, jangan di awal. |
| Frontend | Blade (paling cepat) atau Inertia + React | Pilih yang tidak memperlambat inti. UI mewah = Non-Goal. |
| Deploy | VPS / Laravel Forge / Railway + domain | M4. App yang tidak live = tidak ada. |

## Nice-to-have (jangan sekarang)
- pgvector → vector DB lain: hanya kalau lowongan target memintanya.
- Cost/token tracking, observability: masuk v2, jadi bahan cerita produksi.
- Python: setelah Lumen live (M6), untuk baca kode + skrip eval.

## Versi
PHP 8.3.17 · Laravel 13.20 · PostgreSQL 17 (Homebrew, port 5433) · pgvector 0.8.5
